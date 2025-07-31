$(document).ready(function () {
	function initBgCover(context) {
		if (!context) context = $("body")
			context.find(".bg-cover").each(function () {
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
							scrollTop: target.offset().top - 20,
						},
						1000
					)
				} else {
					$("html, body").animate(
						{
							scrollTop: target.offset().top,
						},
						1000
					)
				}
				return false
			}
		}
	})
	
	const swiper = new Swiper('.hero-slider', {
		// Optional parameters
		loop: true,
		spaceBetween: 30,
		effect: "fade",
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		}
	});

	const swiper1 = new Swiper('.testimonial-slider', {
		// Optional parameters
		loop: true,
		spaceBetween: 30,
		autoHeight: true,
		autoplay: {
			delay: 15000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	
})