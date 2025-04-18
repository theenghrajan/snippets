$(document).ready(function () {
	function initBgCover(context) {
		if (!context) context = $("body")
		context.find(".js-has-bg-cover").each(function () {
			var holder = $(this)
			var image = holder.find("> img").hide()
			var imageSrc = image.prop("src")
			holder.css({
				backgroundImage: "url(" + imageSrc + ")",
			})
		})
	}

	initBgCover();

	/* smooth scroll*/
	var winWidth = $(window).width()
	$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			var target = $(this.hash)
			target = target.length ? target : $("[name=" + this.hash.slice(1) + "]")
			if (target.length) {
				if (winWidth > 991) {
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 50,
						},
						1000
					)
				} else {
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 50,
						},
						1000
					)
				}
				return false
			}
		}
	});

	//Tab
	function showTabFromHash() {
		let hash = window.location.hash.substring(1);
		if (hash && $(".tabPane#" + hash).length) {
			$(".tab-btn").removeClass("active");
			$(".tab-btn[data-tab='" + hash + "']").addClass("active");
			$(".tabPane").hide();
			$("#" + hash).show();
		}
	}

	$(".tab-btn").on("click", function () {
		let targetTab = $(this).data("tab");
		$(".tab-btn").removeClass("active");
		$(this).addClass("active");

		$(".tabPane").hide();
		$("#" + targetTab).show();

		history.pushState(null, null, "#" + targetTab);
	});

	showTabFromHash();

	$(window).on("hashchange", function () {
		showTabFromHash();
	});

	// Tab Slider
	const swiper = new Swiper('.tabSlider', {
		slidesPerView: 1,
		spaceBetween: 0,
		autoHeight: true,
		autoplay: {
			delay: 15000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
				autoHeight: false
			},
			1280: {
				slidesPerView: 3,
			},
		},

	});

	// Testimonial Slider
	const swiper1 = new Swiper('.testimonials-slider', {
		slidesPerView: 1,
		spaceBetween: 20,
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1280: {
				slidesPerView: 3,
			},
		},

	});
})

