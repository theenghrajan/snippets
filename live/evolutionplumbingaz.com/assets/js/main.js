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

  const swiper = new Swiper('.testimonials-slider', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoHeight: true,
    autoplay: {
      delay: 25000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })

  function initBurgerMenu() {
    const holder = document.querySelector('body')
    const opener = document.querySelector('.opener')
    const activeClass = 'nav-active'
    const drop = document.querySelector('.nav-holder')
    const navLinks = document.querySelectorAll('.nav-list li a')

    opener.addEventListener('click', (event) => trackAction())

    const trackAction = () => {
      event.preventDefault()
      holder.classList.toggle(activeClass)
    }
    document.addEventListener('click', (e) => {
      const isClickInside = opener.contains(e.target) || drop.contains(e.target)
      if (!isClickInside) {
        holder.classList.remove(activeClass)
      }
    })

    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        holder.classList.remove(activeClass)
      })
    })
  }

  initBurgerMenu()
  // New script for stick footer
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

  function swiperCard() {
    var init = false
    var swiper
    if (window.innerWidth < 1024) {
      if (!init) {
        init = true
        swiper = new Swiper('.card-slider', {
          direction: 'horizontal',
          slidesPerView: 1,
          // centeredSlides: true,
          spaceBetween: 15,
          loop: true,
          autoplay: {
            delay: 35000,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            768: {
              slidesPerView: 2,
              spaceBetween: 15,
            },
          },
        })
      }
    } else if (init) {
      swiper.destroy()
      init = false
    }
  }
  swiperCard()
  window.addEventListener('resize', swiperCard)

  //Anchors scroll
  function scrollToTarget(targetSectionId) {
    var targetSection = $("#" + targetSectionId);

    if (targetSection.length > 0) {
      var offset = targetSection.offset().top - 10;

      $('html, body').animate({
        scrollTop: offset
      }, 800);

      window.location.hash = targetSectionId;
    }
  }

  var initialHash = window.location.hash;

  if (initialHash) {
    scrollToTarget(initialHash.substr(1));
  }

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var targetSectionId = $(this).attr('href').substr(1);
    scrollToTarget(targetSectionId);
  });
  /* End of the code block */

});
