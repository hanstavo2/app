/*global describe, it, beforeEach, expect, modules, spyOn, document*/
describe('ext.wikia.adEngine.provider.gpt.adElement', function () {
	'use strict';

	function noop() { return; }
	var responseInformation;

	var AdElement,
		adSizes = [
			[300, 250],
			[300, 600]
		],
		mocks = {
			adSizeFilter: {
				filter: noop
			},
			adSizeConverter: {
				toArray: noop
			},
			bridge: {
				GptSizeMap: function GptSizeMapMock() {
					return {
						mapAllSizes: function () { return this; },
						toString: noop,
						isEmpty: function () { return true; }
					};
				}
			},
			log: noop
		},
		slot,
		slotTargeting;

	beforeEach(function () {
		AdElement = modules['ext.wikia.adEngine.provider.gpt.adElement'](
			mocks.bridge,
			mocks.adSizeConverter,
			mocks.adSizeFilter,
			document,
			mocks.log
		);
		slot = {
			setTargeting: noop,
			getResponseInformation: function () {
				return responseInformation;
			}
		};
		slotTargeting = {
			foo: 12,
			bar: 34,
			baz: 56
		};
	});

	it('New instance created with given id and dom object', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);

		expect(element.getId()).toEqual('wikia_gpt/ELEMENT_SLOTPATH');
		expect(element.getSlotName()).toEqual('TOP_BOXAD');
		expect(element.getSlotPath()).toEqual('/ELEMENT_SLOTPATH');
		expect(element.getNode().id).toEqual('wikia_gpt/ELEMENT_SLOTPATH');
	});

	it('Set slotName overrides previous slotName', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);

		expect(element.getSlotName()).toEqual('TOP_BOXAD');
		element.setSlotName('NEW_SLOT_NAME');
		expect(element.getSlotName()).toEqual('NEW_SLOT_NAME');
	});

	it('Set sizes and add as json to attribute', function () {
		spyOn(mocks.adSizeFilter, 'filter').and.returnValue(adSizes);
		slotTargeting.size = '300x250,300x600';

		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);

		expect(element.getDefaultSizes()).toEqual(adSizes);
		expect(element.getNode().getAttribute('data-gpt-slot-sizes')).toEqual('[[300,250],[300,600]]');
	});

	it('Set out-of-page type in attribute', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);

		expect(element.getNode().getAttribute('data-gpt-slot-type')).toEqual('out-of-page');
	});

	it('Set page level params as json on attribute', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);

		element.setPageLevelParams({
			param1: 'val1',
			param2: 'val2'
		});

		expect(element.getNode().getAttribute('data-gpt-page-params')).toEqual('{"param1":"val1","param2":"val2"}');
	});

	it('Set slot level params on slot object and add as json to attribute', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);
		spyOn(slot, 'setTargeting');

		element.configureSlot(slot);

		expect(slot.setTargeting.calls.count()).toEqual(3);
		expect(element.getNode().getAttribute('data-gpt-slot-params')).toEqual('{"foo":12,"bar":34,"baz":56}');
	});

	it('Add response event details as json to attribute', function () {
		var element = new AdElement('TOP_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);
		responseInformation = {
			lineItemId: 123,
			creativeId: 456,
			size: [728, 90]
		};

		element.updateDataParams({
			lineItemId: 123,
			creativeId: 456,
			size: [728, 90],
			slot: slot
		});

		expect(element.getNode().getAttribute('data-gpt-line-item-id')).toEqual('123');
		expect(element.getNode().getAttribute('data-gpt-creative-id')).toEqual('456');
		expect(element.getNode().getAttribute('data-gpt-creative-size')).toEqual('[728,90]');
	});

	it('Add response event details and keep strings without quotes', function () {
		var element = new AdElement('TOP_RIGHT_BOXAD', '/ELEMENT_SLOTPATH', slotTargeting);
		responseInformation = {
			lineItemId: null,
			creativeId: null
		};

		element.updateDataParams({
			size: [728, 90],
			slot: slot
		});

		expect(element.getNode().getAttribute('data-gpt-line-item-id')).toEqual('AdX');
		expect(element.getNode().getAttribute('data-gpt-creative-id')).toEqual('AdX');
		expect(element.getNode().getAttribute('data-gpt-creative-size')).toEqual('[728,90]');
	});
});
