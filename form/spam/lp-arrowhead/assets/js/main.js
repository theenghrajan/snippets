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

	const swiper = new Swiper('.testimonialSlider', {
		loop: true,
		slidesPerView: 1,
		autoHeight: true,

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var swiper2 = new Swiper(".viewSlider", {
		slidesPerView: 2,
		spaceBetween: 20,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			768: {
				slidesPerView: 4,
			},
			1024: {
				slidesPerView: 6,
			},
		},
	});

	const swiper1 = new Swiper('.tab-slider', {
		loop: false,
		autoHeight: true,
		spaceBetween: 45,
		navigation: {
			nextEl: '.navigation-holder .swiper-button-next',
			prevEl: '.navigation-holder .swiper-button-prev',
		},
	});

	// Function to update active tab based on slide index
	function updateActiveTab(index) {
		document.querySelectorAll('.tab').forEach((tab, tabIndex) => {
			tab.classList.toggle('active', tabIndex === index);
		});
	}

	// Listen for slide change to update active tab
	swiper1.on('slideChange', function () {
		updateActiveTab(swiper1.activeIndex);
	});

	// Tab click event to change slides
	document.querySelectorAll('.tab').forEach((tab, index) => {
		tab.addEventListener('click', function () {
			updateActiveTab(index);
			swiper1.slideTo(index);
		});
	});

})