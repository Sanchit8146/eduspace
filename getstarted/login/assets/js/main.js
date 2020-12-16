(function ($) {
	"use strict";
	/* 1. slick Nav */
	// mobile_menu
	var menu = $("ul#navigation");
	if (menu.length) {
		menu.slicknav({
			prependTo: ".mobile_menu",
			closedSymbol: "+",
			openedSymbol: "-",
		});
	}
})(jQuery);
