/*global define*/
define('ext.wikia.adEngine.video.vastUrlBuilder', [
	'ext.wikia.adEngine.adContext',
	'ext.wikia.adEngine.adLogicPageParams',
	'ext.wikia.adEngine.slot.adUnitBuilder',
	'ext.wikia.adEngine.slot.slotTargeting',
	'wikia.location',
	'wikia.log',
	'wikia.trackingOptIn'
], function (adContext, page, adUnitBuilder, slotTargeting, loc, log, trackingOptIn) {
	'use strict';
	var adSizes = {
			vertical: '320x480',
			horizontal: '640x480',
			horizontalExtra: '640x480|480x360'
		},
		availableVideoPositions = ['preroll', 'midroll', 'postroll'],
		baseUrl = 'https://pubads.g.doubleclick.net/gampad/ads?',
		logGroup = 'ext.wikia.adEngine.video.vastUrlBuilder';

	function getCustomParameters(slotParams) {
		var customParameters,
			params = page.getPageLevelParams(),
			wsi = slotTargeting.getWikiaSlotId(slotParams.pos, slotParams.src);

		customParameters = ['wsi=' + wsi];

		Object.keys(params).forEach(function (key) {
			if (params[key]) {
				customParameters.push(key + '=' + params[key]);
			}
		});

		Object.keys(slotParams).forEach(function (key) {
			if (slotParams[key]) {
				customParameters.push(key + '=' + slotParams[key]);
			}
		});

		return encodeURIComponent(customParameters.join('&'));
	}

	function isNumeric(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}

	function getSizeByAspectRatio(aspectRatio, slotName) {
		if (aspectRatio >= 1 || !isNumeric(aspectRatio)) {
			return slotName === 'FEATURED' && adContext.get('opts.additionalVastSize')
				? adSizes.horizontalExtra : adSizes.horizontal;
		}

		return adSizes.vertical;
	}

	function getAdUnit(options, slotParams) {
		return options.adUnit || adUnitBuilder.build(slotParams.pos, slotParams.src);
	}

	function build(aspectRatio, slotParams, options) {
		options = options || {};
		slotParams = slotParams || {};

		var correlator = options.correlator || Math.round(Math.random() * 10000000000),
			params,
			url;

		params = [
			'output=vast',
			'env=vp',
			'gdfp_req=1',
			'impl=s',
			'unviewed_position_start=1',
			'iu=' + getAdUnit(options, slotParams),
			'sz=' + getSizeByAspectRatio(aspectRatio, slotParams.pos),
			'url=' + encodeURIComponent(loc.href),
			'description_url=' + encodeURIComponent(loc.href),
			'correlator=' + correlator,
			'cust_params=' + getCustomParameters(slotParams)
		];

		if (typeof options.numberOfAds !== 'undefined') {
			params.push('pmad=' + options.numberOfAds);
		}

		if (options.vpos && availableVideoPositions.indexOf(options.vpos) > -1) {
			params.push('vpos=' + options.vpos);
		}

		if (options.contentSourceId && options.videoId) {
			params.push('cmsid=' + options.contentSourceId);
			params.push('vid=' + options.videoId);
		}

		params.push('npa=' + (trackingOptIn.isOptedIn() ? 0 : 1));

		url = baseUrl + params.join('&');
		log(['build', url], 'debug', logGroup);

		return url;
	}

	return {
		build: build
	};
});
