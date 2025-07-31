$(document).ready(function () {
	function initBgCover(context) {
		if (!context) context = $("body")
		context.find(".js-bg-cover").each(function () {
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
							scrollTop: target.offset().top - 180,
						},
						1000
					)
				} else {
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 180,
						},
						1000
					)
				}
				return false
			}
		}
	});

	// Sticky Header
	function updateHeaderPosition() {
		if ($(window).scrollTop() > 50) {
			$("header.site-header").addClass("stickyHeader");
			const headerTop = $('header .site-header__top')[0].clientHeight;
			$('header.site-header').css("transform", `translateY(-${headerTop}px)`);
		} else {
			$("header.site-header").removeClass("stickyHeader");
			$('header.site-header').css("transform", "translateY(0)");
		}
	}

	$(window).scroll(updateHeaderPosition);

	$(window).resize(updateHeaderPosition);

	$(document).ready(updateHeaderPosition);



	//sticky-footer
	function stickyFooter() {
		let stickyFooter = $('.sticky-footer');
		let stickyFooterHeight = stickyFooter.innerHeight();
		let siteFooter = $('.site-footer');
		siteFooter.css('margin-bottom', stickyFooterHeight);
	}
	stickyFooter();

	let debounceTimeout;
	$(window).on('resize', function () {
		clearTimeout(debounceTimeout);
		debounceTimeout = setTimeout(function () {
			stickyFooter();
		}, 250);
	});

	// Testimonial slider
	var swiper = new Swiper(".testimonialSlider", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		autoHeight: true,
		centeredSlides: false,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1024: {
				slidesPerView: 2.5,
				spaceBetween: -80,
				centeredSlides: true,
			},
			1312: {
				slidesPerView: 2.5,
				spaceBetween: -250,
				centeredSlides: true,
			},
			1600: {
				slidesPerView: 2.5,
				spaceBetween: -80,
				centeredSlides: true,
			},
		},
	});

	/*
	$('[id^="form-id-"]').each(function () {
		const form = $(this);
		const nextButton = form.find('.next');
		const submitButton = form.find('.submitButton');
		const sections = form.find('[class^="form-section-"]');
		const steps = form.find('.step');
		let currentStep = 0;

		function updateStep() {
			sections.each(function (index) {
				$(this).toggle(index === currentStep);
			});

			steps.each(function (index) {
				$(this).removeClass('active completed');
				if (index <= currentStep) {
					$(this).addClass('active');
				}
				if (index < currentStep) {
					$(this).addClass('completed');
				}
			});

			if (currentStep === sections.length - 1) {
				submitButton.show();
				nextButton.hide();
			} else {
				submitButton.hide();
				nextButton.show();
			}
		}

		updateStep();

		nextButton.on('click', function () {
			if (currentStep < sections.length - 1) {
				currentStep++;
				updateStep();

				form.find('.text-secondary').each(function () {
					$(this).hide();
				});
			}
		});
	});
	*/

})




