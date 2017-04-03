/*global define*/
define('ext.wikia.adEngine.template.porvata', [
	'ext.wikia.adEngine.domElementTweaker',
	'ext.wikia.adEngine.video.player.porvata',
	'ext.wikia.adEngine.video.player.uiTemplate',
	'ext.wikia.adEngine.video.player.ui.videoInterface',
	'ext.wikia.adEngine.video.videoSettings',
	'wikia.document',
	'wikia.log',
	'wikia.window',
	require.optional('ext.wikia.adEngine.mobile.mercuryListener')
], function (
	DOMElementTweaker,
	porvata,
	uiTemplate,
	videoInterface,
	videoSettings,
	doc,
	log,
	win,
	mercuryListener
) {
	'use strict';
	var logGroup = 'ext.wikia.adEngine.template.porvata';

	function hideOtherBidsForVeles(params) {
		if (params.adProduct === 'veles' && win.pbjs) {
			var bidsReceived = win.pbjs._bidsReceived;

			log(['hideOtherBidsForVeles', params, bidsReceived], log.levels.debug, logGroup);

			bidsReceived.filter(function (bid) {
				return bid.adId === params.hbAdId;
			}).forEach(function (usedBid) {
				bidsReceived = bidsReceived.filter(function (bid) {
					var result = true;

					if (bid.bidderRequestId === usedBid.bidderRequestId && bid.bidder === params.adProduct) {
						if (bid.adUnitCode === params.slotName) {
							result = true;
						} else {
							result = false;
						}
					} else {
						result = true;
					}

					return result;
				});
			});

			log(['hideOtherBidsForVeles', bidsReceived], log.levels.debug, logGroup);

			win.pbjs._bidsReceived = bidsReceived;
		}
	}

	function createInteractiveArea() {
		var controlBar = document.createElement('div'),
			controlBarItems = document.createElement('div'),
			interactiveArea = document.createElement('div');

		controlBar.classList.add('control-bar');
		controlBarItems.classList.add('control-bar-items');
		interactiveArea.classList.add('interactive-area');

		controlBar.appendChild(controlBarItems);
		interactiveArea.appendChild(controlBar);

		return {
			controlBar: controlBar,
			controlBarItems: controlBarItems,
			interactiveArea: interactiveArea
		};
	}

	function getVideoContainer(slotName) {
		var container = doc.createElement('div'),
			providerContainer = doc.querySelector('#' + slotName + ' > .provider-container');

		container.classList.add('vpaid-container');
		providerContainer.appendChild(container);

		return container;
	}

	function isVpaid(contentType) {
		return contentType.indexOf('application/') === 0;
	}

	/**
	 * @param {object} params
	 * @param {object} params.container - DOM element where player should be placed
	 * @param {object} params.slotName - Slot name key-value needed for VastUrlBuilder
	 * @param {object} params.src - SRC key-value needed for VastUrlBuilder
	 * @param {object} params.width - Player width
	 * @param {object} params.height - Player height
	 * @param {string} [params.onReady] - Callback executed once player is ready
	 * @param {string} [params.vastUrl] - Vast URL (DFP URL with page level targeting will be used if not passed)
	 * @param {integer} [params.vpaidMode] - VPAID mode from IMA: https://developers.google.com/interactive-media-ads/docs/sdks/html5/v3/apis#ima.ImaSdkSettings.VpaidMode
	 */
	function show(params) {
		var settings = videoSettings.create(params);

		log(['show', params], log.levels.debug, logGroup);

		hideOtherBidsForVeles(params);

		porvata.inject(settings).then(function (video) {
			var imaVpaidMode = win.google.ima.ImaSdkSettings.VpaidMode,
				videoPlayer;

			if (params.vpaidMode === imaVpaidMode.INSECURE) {
				params.originalContainer = params.container;
				params.container = getVideoContainer(params.slotName);
			}

			if (params.vpaidMode === imaVpaidMode.INSECURE) {
				videoPlayer = params.container.querySelector('.video-player');

				video.addEventListener('loaded', function () {
					var ad = video.ima.getAdsManager().getCurrentAd();

					if (ad && isVpaid(ad.getContentType() || '')) {
						params.container.classList.add('vpaid-enabled');
						DOMElementTweaker.show(videoPlayer);
					}
				});

				video.addEventListener('allAdsCompleted', function () {
					DOMElementTweaker.hide(videoPlayer);
				});
			}

			if (mercuryListener) {
				mercuryListener.onPageChange(function () {
					video.destroy();
				});
			}

			return video;
		}).then(function (video) {
			if (settings.hasUiControls()) {
				var elements = createInteractiveArea();

				video.container.appendChild(elements.interactiveArea);

				videoInterface.setup(video, uiTemplate.featureVideo, elements);
			}
		});
	}

	return {
		show: show
	};
});
