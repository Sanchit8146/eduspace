(function ($) {
	"use strict";

	/*  ======================================
	Banner typed
	====================================== */
	var typer = $(".themetyped");
	typer.typed({
		stringsElement: $("#typed-strings"),
		typeSpeed: 35,
		backDelay: 200,
		loop: true,
		contentType: "html",
		loopCount: false,
		showCursor: false,
	});

	$(window).on("load", function () {
		/*  ======================================
        Preloader
        ====================================== */
		var themePreloader = $(".theme-preloader");
		themePreloader.fadeOut("500");
	});
})(jQuery);

// redirect
var seconds = 10;
setInterval(countdown, 1000);
function countdown() {
	if (seconds == 0) {
		location.href = "../../index.php";
	} else {
		document.getElementById("countdown").innerHTML = seconds;
		seconds = seconds - 1;
	}
}
