(function ($) {
	"use strict";

	/* 1. Proloder */
	$(window).on("load", function () {
		$("#preloader-active").delay(450).fadeOut("slow");
		$("body").delay(450).css({
			overflow: "visible",
		});
	});

	/* 2. slick Nav */
	// mobile_menu
	var menu = $("ul#navigation");
	if (menu.length) {
		menu.slicknav({
			prependTo: ".mobile_menu",
			closedSymbol: "+",
			openedSymbol: "-",
		});
	}
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();
		if (scroll < 245) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");
		}
	});
})(jQuery);
