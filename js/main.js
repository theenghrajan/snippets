/*
* This handle multiple initialization functions while maintaining jQuery compatibility and modern practices:
*/
const ss = (($) => {
	// Private initialization methods
	const inits = {
		core: () => {
			navInit();
			formInit();
		},
		plugins: () => {
			sliderInit();
			galleryInit();
			modalSlidersInit(); // Split modal sliders into separate function
		},
		analytics: () => {
			loadAnalytics();
			setupEventTracking();
		},
		misc: () => {
			stickyButtonsInit(); // Fixed function name
			tooltipsInit();
		}
	};

	// Component initializers
	const navInit = () => {
		// Navigation initialization logic
	};

	const formInit = () => {
		// Form initialization logic  
	};

	const sliderInit = () => {
		try {
			$('.responsive').slick({
				autoplay: true,
				autoplaySpeed: 6000,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 1,
				prevArrow: '<button type="button" class="slick-prev icon-left-arrow"></button>',
				nextArrow: '<button type="button" class="slick-next icon-arrow-right"></button>',
				responsive: [{
					breakpoint: 1599,
					settings: { slidesToShow: 3 }
				}, {
					breakpoint: 1199,
					settings: { slidesToShow: 2 }
				}, {
					breakpoint: 991,
					settings: { slidesToShow: 1 }
				}, {
					breakpoint: 767,
					settings: { slidesToShow: 2 }
				}, {
					breakpoint: 479,
					settings: { slidesToShow: 1 }
				}]
			});
		} catch (error) {
			console.error('Slider initialization failed:', error);
		}
	};

	const modalSlidersInit = () => {
		$('.modal').on('show.bs.modal', function () {
			const $modal = $(this);
			const $slider = $modal.find('.popup-slider');

			if (!$slider.length) return;

			try {
				if (!$slider.hasClass('slick-initialized')) {
					$slider.slick({
						infinite: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						adaptiveHeight: true,
						arrows: true,
						prevArrow: '<button type="button" class="slick-prev icon-left-arrow"></button>',
						nextArrow: '<button type="button" class="slick-next icon-arrow-right"></button>'
					});
				}

				setTimeout(() => {
					$slider.slick('setPosition').slick('resize');
				}, 150);
			} catch (error) {
				console.error('Modal slider initialization failed:', error);
			}
		});
	};

	const galleryInit = () => {
		// Gallery initialization
	};

	const stickyButtonsInit = () => {
		const $stickButton = $('#stickyButtons');
		if (!$stickButton.length) return;

		const $window = $(window);
		const $parent = $stickButton.parent();
		let isSticking = false;

		const calculateLayout = () => ({
			bodyHeight: $('body').innerHeight(),
			btnWrapTop: $stickButton.position().top,
			btnWrapHeight: $stickButton.outerHeight()
		});

		const updateStickyState = () => {
			const { bodyHeight, btnWrapTop, btnWrapHeight } = calculateLayout();
			const scrollTop = $window.scrollTop();
			const shouldStick = scrollTop <= btnWrapTop - (bodyHeight - btnWrapHeight);

			if (shouldStick !== isSticking) {
				$stickButton.toggleClass('stick', shouldStick);
				$parent.css('padding-bottom', shouldStick ? `${btnWrapHeight + 10}px` : 0);
				isSticking = shouldStick;
			}
		};

		// Initial setup
		setTimeout(() => {
			$stickButton.addClass('stick show');
			$parent.css('padding-bottom', `${calculateLayout().btnWrapHeight + 10}px`);
		}, 200);

		// Optimized event handling
		const handleResizeScroll = () => requestAnimationFrame(updateStickyState);
		$window.on('scroll resize', handleResizeScroll).trigger('scroll');
	};

	// Public interface
	return {
		init: () => {
			try {
				Object.values(inits).forEach(init => init());
			} catch (error) {
				console.error('Initialization error:', error);
			}
		},
		initCore: inits.core,
		initPlugins: inits.plugins,
		initAnalytics: inits.analytics, // Fixed duplicate property name
		initMisc: inits.misc
	};
})(jQuery);

// jQuery document ready with error handling
$(() => {
	try {
		ss.init();
	} catch (error) {
		console.error('Main initialization failed:', error);
	}
});