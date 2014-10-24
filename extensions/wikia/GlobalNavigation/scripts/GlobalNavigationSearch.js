require(['jquery', 'wikia.browserDetect', 'GlobalNavigationiOSScrollFix'], function ($, browserDetect, scrollFix) {
	'use strict';
	var $selectElement,
		$chevron,
		$searchInput,
		$globalNav,
		$inputResultLang,
		$formElement,
		$searchLabel;

	/**
	 * Look up elements in global navigation's search form
	 */
	function setElements() {
		$inputResultLang = $('#searchInputResultLang');
		$formElement = $('#searchForm');
		$searchLabel = $('#searchLabelInline');
		$selectElement = $('#searchSelect');
		$chevron = $('#searchFormChevron');
		$searchInput = $('#searchInput');
		$globalNav = $('#globalNavigation');
	}

	/**
	 * Set options on search form
	 */
	function setFormOptions() {
		var $selectedOption;

		$selectedOption = $selectElement.find('option:selected');
		$searchLabel.text($selectedOption.text());
		$formElement.attr('action', $selectedOption.attr('data-search-url'));
		if ($selectedOption.val() === 'global') {
			setPropertiesOnInput(false, false);
		} else {
			setPropertiesOnInput(true, true);
		}
	}

	/**
	 * Disable or enable properties on search form
	 * @param {boolean} langDisabled - should result lang input be disabled
	 * @param {boolean} autocompleteEnabled - should autocomplete be enabled on search input
	 */
	function setPropertiesOnInput(langDisabled, autocompleteEnabled) {
		$inputResultLang.prop('disabled', langDisabled);
		if ($searchInput.data('autocomplete')) {
			if (autocompleteEnabled) {
				$searchInput.data('autocomplete').enable();
			} else {
				$searchInput.data('autocomplete').disable();
			}
		}
	}


	$(function () {
		setElements();

		if ($selectElement) {
			setFormOptions();
			$selectElement
				.on('change keyup keydown', function () {
					setFormOptions();
				})
				.on('focus', function () {
					$chevron.addClass('dark');
				})
				.on('blur', function () {
					$chevron.removeClass('dark');
				});
		}

		if (!browserDetect.isIOS7orLower()) {
			$searchInput
				.on('focus', function () {
					scrollFix.scrollToTop($globalNav);
				})
				.on('blur', function () {
					scrollFix.restoreScrollY($globalNav);
				});
		}
	});
});
