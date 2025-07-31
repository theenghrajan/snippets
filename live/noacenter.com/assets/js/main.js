$(document).ready(function () {
	/* smooth scroll*/
	var winWidth = $(window).width()
	$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash)
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
			if (target.length) {
				if (winWidth > 991) {
					$('html, body').animate(
						{
							scrollTop: target.offset().top,
						},
						1000
					)
				} else {
					$('html, body').animate(
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

	// accordion
	$('.accordion .accordion-item .accordionBtn').click(function (e) {
		const currAccordionItem = $(this).closest('.accordion-item')
		$('.accordion .accordion-item').not(currAccordionItem).removeClass('itemActive')
		$('.accordion .accordion-item .accordionBtn').not($(this)).removeClass('active')
		$('.accordion .accordion-item .accordionBody').not(currAccordionItem.find('.accordionBody')).slideUp()
		currAccordionItem.toggleClass('itemActive')
		$(this).toggleClass('active')
		currAccordionItem.find('.accordionBody').slideToggle()
	})

	// Projects Section Slider
	var swiper = new Swiper('.services-slider', {
		slidesPerView: 1,
		loop: true,
		centeredSlides: false,
		spaceBetween: 30,
		autoplay: {
			delay: 15000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 44,
			},
			1024: {
				slidesPerView: 3,
				centeredSlides: true,
			},
		},
	})

	var swiper1 = new Swiper('.testimonials-slider', {
		slidesPerView: 1,
		loop: true,
		// centeredSlides: true,
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			1024: {
				slidesPerView: 2,
				spaceBetween: 44,
			},
		},
	})

	//sticky-footer
	function stickyFooter() {
		let stickyFooter = $('.sticky-footer')
		let stickyFooterHeight = stickyFooter.innerHeight()
		let siteFooter = $('.site-footer')
		siteFooter.css('margin-bottom', stickyFooterHeight)
	}
	stickyFooter()

	let debounceTimeout
	$(window).on('resize', function () {
		clearTimeout(debounceTimeout)
		debounceTimeout = setTimeout(function () {
			stickyFooter()
		}, 250)
	})
})

//Fancybox
Fancybox.bind("[data-fancybox]", {
	// Your custom options
});
