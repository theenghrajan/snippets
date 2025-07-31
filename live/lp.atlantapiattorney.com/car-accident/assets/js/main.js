$(document).ready(function () {
	function initBgCover(context) {
		if (!context) context = $("body")
		context.find("js-has.bg-cover").each(function () {
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
							scrollTop: target.offset().top,
						},
						1000
					)
				}
				return false
			}
		}
	})

	// Testimonial Slider
	var swiper = new Swiper(".testimonials", {
		slidesPerView: 1,
		spaceBetween: 12,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			1024: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
	});

	//tab section
	const tabs = document.querySelectorAll(".tabs-container .tab");
	const contents = document.querySelectorAll(".tabPane");
	const images = document.querySelectorAll(".tab-image");

	const removeActiveClass = () => {
		tabs.forEach((t) => t.classList.remove("active"));
		contents.forEach((c) => c.classList.add("hidden")); 
		images.forEach((img) => img.classList.add("hidden"));
	};

	tabs.forEach((t, i) => {
		t.addEventListener("click", (e) => {
			e.preventDefault();
			removeActiveClass();
			contents[i].classList.remove("hidden");
			images[i].classList.remove("hidden");
			t.classList.add("active");
		});
	});

	const SwiperTop = new Swiper('.logoSlider', {
		spaceBetween: 10,
		centeredSlides: true,
		speed: 6000,
		autoplay: {
			delay: 1,
		},
		loop: true,
		loopedSlides: 2,
		slidesPerView: 'auto',
		allowTouchMove: false,
		disableOnInteraction: true,

		breakpoints: {
			640: {
				// slidesPerView: 2.1,
				spaceBetween: 30,
			},
			1024: {
				// slidesPerView: 3,
				spaceBetween: 100,
			},
		},
	});

	//sticky-footer
	function stickyFooter() {
		let stickyFooter = $('.sticky-footer')
		let stickyFooterHeight = stickyFooter.innerHeight()
		let siteFooter = $('.site-footer')
		siteFooter.css('margin-bottom', stickyFooterHeight)
	}
	stickyFooter()

})