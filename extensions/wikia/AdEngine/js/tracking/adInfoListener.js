/*global define, require, JSON*/
define('ext.wikia.adEngine.tracking.adInfoListener',  [
	'ext.wikia.adEngine.adContext',
	'ext.wikia.adEngine.tracking.adInfoTracker',
	'ext.wikia.adEngine.utils.eventDispatcher',
	'ext.wikia.adEngine.video.vastParser',
	'wikia.log',
	'wikia.querystring',
	'wikia.trackingOptIn',
	'wikia.window',
	require.optional('ext.wikia.adEngine.lookup.bidders')
], function (
	adContext,
	tracker,
	eventDispatcher,
	vastParser,
	log,
	Querystring,
	trackingOptIn,
	win,
	bidders
) {
	'use strict';

	var logGroup = 'ext.wikia.adEngine.tracking.adInfoListener',
		enabledSlots = {
			TOP_LEADERBOARD: true,
			TOP_BOXAD: true,
			INCONTENT_BOXAD_1: true,
			INCONTENT_PLAYER: true,
			INVISIBLE_SKIN: true,
			BOTTOM_LEADERBOARD: true,
			MOBILE_TOP_LEADERBOARD: true,
			MOBILE_IN_CONTENT: true,
			MOBILE_PREFOOTER: true,
			INVISIBLE_HIGH_IMPACT_2: true
		};

	function isEnabled() {
		return adContext.getContext().opts.enableAdInfoLog;
	}

	function getBidderWon(slotParams, realSlotPrices) {
		var slotPricesKeys = Object.keys(realSlotPrices).filter(function(key) {
				return parseFloat(realSlotPrices[key]) > 0;
			}),
			highestPrice = Math.max.apply(
				null,
				slotPricesKeys.map(function(key) { return parseFloat(realSlotPrices[key]); })
			),
			highestPriceBidders = [];

		slotPricesKeys.forEach(function(key) {
			if (parseFloat(realSlotPrices[key]) === highestPrice) {
				highestPriceBidders.push(key);
			}
		});

		// In case of a tie in prebid bidders prebid.js picks the fastest bidder
		if (slotParams.hb_bidder && highestPriceBidders.indexOf(slotParams.hb_bidder) >= 0) {
			return slotParams.hb_bidder;
		}

		return '';
	}

	function trackSlot(slot, status, adInfo) {
		var slotFirstChildData = slot.container.firstChild.dataset,
			pageParams = JSON.parse(slotFirstChildData.gptPageParams || '{}'),
			slotParams = JSON.parse(slotFirstChildData.gptSlotParams || '{}'),
			slotPricesIgnoringTimeout = bidders && bidders.isEnabled() ? bidders.getCurrentSlotPrices(slot.name) : {},
			realSlotPrices = bidders && bidders.isEnabled() ? bidders.getDfpSlotPrices(slot.name) : {},
			slotSize = JSON.parse(slotFirstChildData.gptCreativeSize || '[]'),
			bidderWon = getBidderWon(slotParams, realSlotPrices);

		adInfo = adInfo || {};

		tracker.track(
			slot.name,
			pageParams,
			slotParams,
			{
				adProduct: adInfo.adProduct,
				creativeId: slotFirstChildData.gptCreativeId,
				creativeSize: slotFirstChildData.gptCreativeSize,
				lineItemId: slotFirstChildData.gptLineItemId,
				slotSize: slotSize,
				status: status
			},
			{
				bidderWon: bidderWon,
				realSlotPrices: realSlotPrices,
				slotPricesIgnoringTimeout: slotPricesIgnoringTimeout
			}
		);
	}

	function trackVideo(adInfo) {
		var vastInfo = vastParser.parse(adInfo.vastUrl),
			slotPrices = {};

		if (vastInfo.customParams.amznbid) {
			slotPrices.a9 = vastInfo.customParams.amznbid;
		}

		if (vastInfo.customParams.hb_bidder) {
			slotPrices[vastInfo.customParams.hb_bidder] = vastInfo.customParams.hb_pb;
		}

		tracker.track(
			vastInfo.customParams.pos,
			vastInfo.customParams,
			vastInfo.customParams,
			{
				adProduct: vastInfo.position,
				creativeId: adInfo.creativeId,
				creativeSize: vastInfo.size,
				lineItemId: adInfo.lineItemId,
				status: adInfo.status
			},
			{
				realSlotPrices: slotPrices
			});
	}

	function shouldHandleSlot(slot) {
		var dataGptDiv = slot.container && slot.container.firstChild;

		return !!(
			enabledSlots[slot.name] &&
			dataGptDiv &&
			dataGptDiv.dataset.gptPageParams
		);
	}

	function run() {
		if (isEnabled()) {
			log('run', log.levels.debug, logGroup);

			win.addEventListener('adengine.slot.status', function (event) {
				var adInfo = event.detail.adInfo || {},
					adType = adInfo && adInfo.adType,
					slot = event.detail.slot,
					status;

				switch (adType) {
					case 'blocked':
					case 'disabled':
					case 'hivi-collapse':
					case 'viewport-conflict':
					case 'sticky-ready':
					case 'sticked':
					case 'unsticked':
					case 'force-unstick':
						status = adType;
						break;
					default:
						status = event.detail.status;
				}

				if (shouldHandleSlot(slot)) {
					log(['adengine.slot.status', event], log.levels.debug, logGroup);
					trackSlot(slot, status, adInfo);
				}

				if (slot.name === 'TOP_BOXAD') {
					eventDispatcher.dispatch('adengine.lookup.prebid.lazy', {});
				}
			});

			win.addEventListener('adengine.video.status', function (event) {
				var adInfo = event.detail || {};

				if (adInfo.vastUrl) {
					log(['adengine.video.status', event], log.levels.debug, logGroup);
					trackVideo(adInfo);
				}
			});
		}
	}

	return {
		run: run
	};
});
