require([
	'wikia.window',
	'wikia.cookies',
	'wikia.tracker',
	'wikia.trackingOptIn',
	'wikia.abTest',
	'ext.wikia.adEngine.adContext',
	'wikia.articleVideo.featuredVideo.data',
	'wikia.articleVideo.featuredVideo.autoplay',
	'wikia.articleVideo.featuredVideo.adsConfiguration',
	'wikia.articleVideo.featuredVideo.cookies',
	require.optional('ext.wikia.adEngine.lookup.a9'),
	require.optional('ext.wikia.adEngine.lookup.bidders')
], function (
	win,
	cookies,
	tracker,
	trackingOptIn,
	abTest,
	adContext,
	videoDetails,
	featuredVideoAutoplay,
	featuredVideoAds,
	featuredVideoCookieService,
	a9,
	bidders
) {
	if (!videoDetails) {
		return;
	}

	//Fallback to the generic playlist when no recommended videos playlist is set for the wiki
	var recommendedPlaylist = videoDetails.recommendedVideoPlaylist || 'Y2RWCKuS',
		videoTags = videoDetails.videoTags || '',
		featuredVideoSlotName = 'FEATURED',
		slotTargeting = {
			plist: recommendedPlaylist,
			vtags: videoTags
		},
		responseTimeout = 2000,
		bidParams;

	function isFromRecirculation() {
		return window.location.search.indexOf('wikia-footer-wiki-rec') > -1;
	}

	function shouldForceUserIntendedPlay() {
		return isFromRecirculation();
	}

	function onPlayerReady(playerInstance) {
		define('wikia.articleVideo.featuredVideo.jwplayer.instance', function() {
			return playerInstance;
		});

		win.dispatchEvent(new CustomEvent('wikia.jwplayer.instanceReady', {detail: playerInstance}));

		featuredVideoAds.init(playerInstance, bidParams, slotTargeting);

		playerInstance.on('autoplayToggle', function (data) {
			featuredVideoCookieService.setAutoplay(data.enabled ? '1' : '0');
		});

		playerInstance.on('captionsSelected', function (data) {
			featuredVideoCookieService.setCaptions(data.selectedLang);
		});
	}

	function setupPlayer() {
		// ToDo: remove debug code
		console.log('Debug: JWPlayer setup');

		var willAutoplay = featuredVideoAutoplay.isAutoplayEnabled(),
			willMute = isFromRecirculation() ? false : willAutoplay;

		featuredVideoAds.trackSetup(videoDetails.playlist[0].mediaid, willAutoplay, willMute);

		featuredVideoAds.loadMoatTrackingPlugin();
		win.wikiaJWPlayer('featured-video__player', {
			tracking: {
				track: function (data) {
					tracker.track(data);
				},
				setCustomDimension: win.guaSetCustomDimension,
				comscore: !win.wgDevelEnvironment
			},
			autoplay: willAutoplay,
			selectedCaptionsLanguage: featuredVideoCookieService.getCaptions(),
			settings: {
				showAutoplayToggle: featuredVideoAutoplay.isAutoplayToggleShown(),
				showQuality: true,
				showCaptions: true
			},
			sharing: true,
			mute: willMute,
			related: {
				time: 3,
				playlistId: recommendedPlaylist,
				autoplay: featuredVideoAutoplay.inNextVideoAutoplayEnabled()
			},
			videoDetails: {
				description: videoDetails.description,
				title: videoDetails.title,
				playlist: videoDetails.playlist
			},
			logger: {
				clientName: 'oasis'
			},
			lang: videoDetails.lang,
			shouldForceUserIntendedPlay: shouldForceUserIntendedPlay()
		}, onPlayerReady);
	}

	trackingOptIn.pushToUserConsentQueue(function () {
		if (a9 && a9.waitForResponseCallbacks && adContext.get('bidders.a9Video') && false) {
			a9.waitForResponseCallbacks(
				function onSuccess() {
					bidParams = a9.getSlotParams(featuredVideoSlotName);
					setupPlayer();
				},
				function onTimeout() {
					bidParams = {};
					setupPlayer();
				},
				responseTimeout
			);
		} else if (bidders && bidders.addResponseListener && bidders.isEnabled() && false) {
			// ToDo: remove FV AdBlock bug hack
			bidders.addResponseListener(function () {
				bidParams = bidders.updateSlotTargeting(featuredVideoSlotName);
				setupPlayer();
			});
		} else {
			setTimeout(function () {
				console.log('Debug: late JWPlayer start');

				setupPlayer();
			}, 5000);
		}
	});
});
