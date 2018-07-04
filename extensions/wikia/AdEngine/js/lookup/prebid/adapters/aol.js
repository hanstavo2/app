/*global define*/
define('ext.wikia.adEngine.lookup.prebid.adapters.aol', [
	'ext.wikia.adEngine.adContext',
	'ext.wikia.adEngine.context.slotsContext',
	'ext.wikia.adEngine.wad.babDetection'
], function (adContext, slotsContext, babDetection) {
	'use strict';

	var bidderName = 'aol',
		network = '9435.1',
		slots = {
			oasis: {
				TOP_LEADERBOARD: {
					sizes: [[728, 90]],
					placement: '4431497',
					network: network,
					alias: '4431497',
					sizeId: '225'
				},
				TOP_RIGHT_BOXAD: {
					sizes: [[300, 250], [300, 600]],
					placement: '4431473',
					network: network,
					alias: '4431473',
					sizeId: '170'
				}
				// TODO: fill with proper numbers https://wikia-inc.atlassian.net/browse/ADEN-5517
				// BOTTOM_LEADERBOARD: {
				// 	size: [728, 90],
				// 	placement: 'XXXX',
				// 	network: network,
				// 	alias: 'XXXX',
				// 	sizeId: 'XXXX'
				// }
				// Because of differences in AOL dashboard and DFP (ADEN-4750) this slot was disabled. To avoid making
				// additional calls it is turned off. For more details see epic (ADEN-4580).
				// INCONTENT_BOXAD_1: {
				// 	size: [300, 250],
				// 	placement: '4431494',
				// 	network: network,
				// 	alias: '4431494',
				// 	sizeId: '170'
				// }
			},
			mercury: {
				MOBILE_TOP_LEADERBOARD: {
					sizes: [[320, 50]],
					placement: '4436772',
					network: network,
					alias: '4436772',
					sizeId: '3055'
				},
				MOBILE_IN_CONTENT: {
					sizes: [[300, 250]],
					placement: '4431565',
					network: network,
					alias: '4431565',
					sizeId: '170'
				},
				BOTTOM_LEADERBOARD: {
					sizes: [[300, 250]],
					placement: '4431566',
					network: network,
					alias: '4431566',
					sizeId: '170'
				}
			}
		};

	function isEnabled() {
		return adContext.get('bidders.aol') && !babDetection.isBlocking();
	}

	function getSlots(skin) {
		return slotsContext.filterSlotMap(slots[skin]);
	}

	function prepareAdUnit(slotName, config) {
		return {
			code: slotName,
			mediaTypes: {
				banner: {
					sizes: config.sizes
				}
			},
			bids: [
				{
					bidder: bidderName,
					params: {
						placement: config.placement,
						network: config.network,
						alias: config.alias,
						sizeId: config.sizeId
					}
				}
			]
		};
	}

	function getName() {
		return bidderName;
	}

	return {
		isEnabled: isEnabled,
		getName: getName,
		getSlots: getSlots,
		prepareAdUnit: prepareAdUnit
	};
});
