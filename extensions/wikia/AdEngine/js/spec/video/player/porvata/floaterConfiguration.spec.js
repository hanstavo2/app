describe('ext.wikia.adEngine.video.player.porvata.floaterConfiguration', function () {
	'use strict';

	function noop() {}

	var mocks = {
			adContext: {
				get: noop,
				getContext: noop
			}
		};

	function getModule() {
		return modules['ext.wikia.adEngine.video.player.porvata.floaterConfiguration'](
			mocks.adContext
		);
	}

	it('floater should be disabled when "enableLeaderboardFloating" configuration is not set', function () {
		var module = getModule(),
			params = {},
			actual = module.canFloat(params);

		expect(actual).toBeFalsy();
	});

	it('floater should be disabled when "enableInContentFloating" configuration is set to false', function () {
		var module = getModule(),
			params = {
				enableInContentFloating: false
			},
			actual = module.canFloat(params);

		expect(actual).toBeFalsy();
	});

	it('floater should be disabled when "enableInContentFloating" configuration is set to true, but TOP_BOXAD is asking', function () {
		var module = getModule(),
			params = {
				enableInContentFloating: true,
				slotName: 'TOP_BOXAD'
			},
			actual = module.canFloat(params);

		expect(actual).toBeFalsy();
	});

	it('floater should be enabled when "enableInContentFloating" configuration is set to true and INCONTENT_PLAYER is asking', function () {
		var module = getModule(),
			params = {
				enableInContentFloating: true,
				slotName: 'INCONTENT_PLAYER'
			},
			actual = module.canFloat(params);

		expect(actual).toBeTruthy();
	});
});
