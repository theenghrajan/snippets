(function ($) {
  $(document).ready(function () {
    function initBgCover(context) {
      if (!context) context = $('body')
      context.find('.bg-cover').each(function () {
        var holder = $(this)
        var image = holder.find('> img').hide()
        var imageSrc = image.prop('src')
        holder.css({
          backgroundImage: 'url(' + imageSrc + ')',
        })
      })
    }

    initBgCover()

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
                scrollTop: target.offset().top - 100,
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

    const swiper = new Swiper('.image-slider', {
      // Optional parameters
      spaceBetween: 12,
      slidesPerView: 2,
      autoplay: {
        delay: 3000,
      },
      loop: true,

      breakpoints: {
        768: {
          slidesPerView: 4,
          spaceBetween: 36,
        },
        1024: {
          slidesPerView: 6,
          spaceBetween: 62,
        },
      },
    })

    const swiper2 = new Swiper('.testimonials-slider', {
      // Optional parameters
      slidesPerView: 1,
      loop: true,
      autoHeight: true,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })

    const swiper3 = new Swiper('.bg-slider', {
      slidesPerView: 1,
      loop: true,
      autoplay: true,
      effect: 'fade',
    })

    const gallerySwiper = new Swiper('.gallerySwiper', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })

    // Function to handle the sticky header
    function handleStickyHeader() {
      var scroll = $(window).scrollTop();
      var header = $('.site-header');
      if (scroll >= 30) {
        header.addClass('fixed-header');
      } else {
        header.removeClass('fixed-header');
      }
    }
    function siteContentOffset() {
      var header = $('.site-header');
      var banner = $('.site-content');
      var headerHeight = header.innerHeight();
      banner.css('margin-top', headerHeight + 'px');
    }

    // Initial calls
    siteContentOffset();
    handleStickyHeader();

    // Call the function when the window is scrolled
    $(window).scroll(handleStickyHeader);

    // Call the function when the window is resized
    $(window).resize(function () {
      handleStickyHeader();
      siteContentOffset();
      // Delayed call to handle any layout changes after resize
      setTimeout(function () {
        handleStickyHeader();
        siteContentOffset();
        $('.clsFix').removeClass('.clsFix');
      }, 1000);
    });

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
})(jQuery)
