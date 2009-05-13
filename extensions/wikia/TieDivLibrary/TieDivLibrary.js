/**
 * TieDivLibrary is used to position ads on the page
 *
 * @author Inez Korczynski, Christian Williams, Maciej Brencz
 */
TieDivLibrary = new function() {
	//These ads should be positioned with "right" instead of "left"; can't detect margin-left: auto with JS
	this.rightAds = ["HOME_TOP_LEADERBOARD", "HOME_TOP_RIGHT_BOXAD", "TOP_LEADERBOARD", "TOP_RIGHT_BOXAD"];

	var loop = 3;

	this.calculate = function() {
		//$().log('loop: ' + loop);
		shrinkwrap_offset = $("#monaco_shrinkwrap_main").offset();
		$.each($(".wikia_ad_placeholder"), function() {
			this_offset = $(this).offset();
			load = $("#" + this.id + "_load");
			if ($.inArray(this.id, TieDivLibrary.rightAds) >= 0) {
				load.css("right", $(window).width() - $(this).width() - this_offset.left - shrinkwrap_offset.left);
				$(this).height(load.height());
			} else {
				load.css("left", this_offset.left);
			}
			load.css({
				height: this.height,
				top: this_offset.top - shrinkwrap_offset.top,
				width: this.width,
				display: "block"
			});
		});
		loop--;
		if (loop > 0) {
			setTimeout(TieDivLibrary.calculate, 350);
		} else {
			loop = 3;
		}
	}
	$(window).bind("load resize", function() {
		TieDivLibrary.calculate();
	});
	$(document).bind("click keydown", function() {
		TieDivLibrary.calculate();
	}).ajaxComplete(function() {
		TieDivLibrary.calculate();
	});
}
