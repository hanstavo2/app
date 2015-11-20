/*global define, require*/
define('ext.wikia.adEngine.template.modalOasisHandler', [
	'jquery',
	require.optional('wikia.ui.factory')
], function ($, uiFactory) {
	'use strict';

	var oasisHandler = function () {
		this.modalId = 'ext-wikia-adEngine-template-modal';
	};

	oasisHandler.prototype.create = function (adContainer, modalVisible, closeButtonDelay) {
		var modalConfig = {
			vars: {
				id: this.modalId,
				size: 'medium',
				content: '',
				title: 'Advertisement',
				closeText: 'Close',
				buttons: []
			}
		};

		uiFactory.init('modal').then((function (uiModal) {
			uiModal.createComponent(modalConfig, (function (modal) {
				var count = closeButtonDelay,
					closeBtnDelay = parseInt(closeButtonDelay, 10) * 1000 || 0;
				this.modal = modal;
				modal.$content.append(adContainer);
				modal.$element.width('auto');

				function timer() {
					count = count - 1;

					if (count < 0) {
						clearInterval(counter);
						$counter.hide();
						modal.$close.show();
						return;
					}

					$counter.text(count);
				}

				if (closeBtnDelay > 0) {
					var $header = modal.$close.parent(),
						$counter = $(document.createElement('div'))
							.addClass('close-counter')
							.text(count);

					modal.$close.hide();
					$header.prepend($counter);

					var counter = setInterval(timer, 1000);
				}

				if (modalVisible) {
					this.show();
				}
			}).bind(this));
		}).bind(this));
	};

	oasisHandler.prototype.show = function () {
		if (this.modal) {
			this.modal.show();
		}
	};

	oasisHandler.prototype.getExpansionModel = function () {
		return {
			availableHeightRatio: 0.8,
			availableWidthRatio: 0.9,
			heightSubtract: 90,
			minWidth: 200,
			minHeight: 150,
			maximumRatio: 2
		};
	};

	return oasisHandler;
});
