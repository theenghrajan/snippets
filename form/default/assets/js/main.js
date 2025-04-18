$(document).ready(function () {
  function initBgCover(context) {
    if (!context) context = $('body')
    context.find('.js-bg-cover').each(function () {
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

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $('.site-header').addClass('sticky-header');
    } else {
      $('.site-header').removeClass('sticky-header');
    }
  });

  // Accordion
  const accSingleTriggers = document.querySelectorAll('.js-acc-single-trigger')

  accSingleTriggers.forEach((trigger) => {
    trigger.addEventListener('click', toggleAccordion)
  })

  function toggleAccordion() {
    const items = document.querySelectorAll('.js-acc-item')
    const thisItem = this.parentNode

    items.forEach((item) => {
      const arrowIcon = item.querySelector('.rotate')

      if (thisItem === item) {
        thisItem.classList.toggle('is-open')
        arrowIcon.classList.toggle('down') // Toggle rotation for the current accordion arrow
        return
      }

      item.classList.remove('is-open')
      arrowIcon.classList.remove('down') // Reset the rotation for other accordions
    })
  }

  //sticky-footer js
  function stickyFooter() {
    let stickyFooter = $('.sticky-footer')
    let stickyFooterHeight = stickyFooter.innerHeight()
    let siteFooter = $('.site-footer')
    siteFooter.css('margin-bottom', stickyFooterHeight)
  }
  stickyFooter();

  function stickyTopBtn() {
    let stickyTop = $('.js-mobile-sticky-top-btn')
    let stickyTopHeight = stickyTop.innerHeight()
    let siteHeader = $('.site-header')
    if (window.innerWidth < 768) {
      siteHeader.css('margin-top', stickyTopHeight)
    }
    return false
  }
  stickyTopBtn();

  //dynamic padding top
  function heroPaddingTop() {
    let siteHeader = $('.site-header')
    let headerHeight = siteHeader.innerHeight();
    let mainContent = $('.hero');
    mainContent.css('padding-top', headerHeight);
  }
  heroPaddingTop();

  let debounceTimeout
  $(window).on('resize', function () {
    clearTimeout(debounceTimeout)
    debounceTimeout = setTimeout(function () {
      stickyFooter(),
      stickyTopBtn(),
      heroPaddingTop()
    }, 250)
  })


  // Custom tab and dropdown on mobile
  const customTabWrapper = document.querySelector('.ss-custom-tab')
  const dropbtn = document.querySelector('.dropBtn')
  const dropdownContent = document.querySelector('.tabNav')

  $('a.enabled').on('click', function () {
    window.open($(this).attr('href'))
  })

  if (customTabWrapper) {
    // Function to update drop button text
    function updateDropButtonText(text) {
      dropbtn.textContent = text
    }

    // Function to handle tab click
    function handleTabClick(e) {
      // Check if the clicked element is a navigation item
      if (e.target.classList.contains('nav-item')) {
        e.preventDefault() // Prevent default link behavior
        const itemTarget = e.target.getAttribute('href').replace('#', '')
        const tabPane = document.getElementById(itemTarget) // Get the target tab pane

        if (tabPane) {
          // Remove 'active' class from all navigation items and hide all tab panes
          document.querySelectorAll('.nav-item').forEach((navItem) => navItem.classList.remove('active'))
          document.querySelectorAll('.tabPane').forEach((tabPane) => tabPane.classList.add('hidden'))

          // Add 'active' class to the clicked navigation item and show the corresponding tab pane
          e.target.classList.add('active')
          tabPane.classList.remove('hidden')

          // Update drop button text
          updateDropButtonText(e.target.textContent)

          // Toggle dropdown visibility (only if dropdown is visible on mobile)
          if (!dropdownContent.classList.contains('hidden')) {
            dropdownContent.classList.add('hidden')
            dropbtn.classList.remove('active')
          }
        }
      }
    }

    // Add event listener to handle tab navigation
    customTabWrapper.addEventListener('click', handleTabClick)

    // Add event listener to toggle dropdown visibility
    dropbtn.addEventListener('click', () => {
      dropdownContent.classList.toggle('hidden')
      dropbtn.classList.toggle('active')
    })

    // Update drop button text initially
    const initialActiveNavItem = document.querySelector('.ss-custom-tab .nav-item.active')
    if (initialActiveNavItem) {
      updateDropButtonText(initialActiveNavItem.textContent)
    }
  }

  var swiper = '';

  swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    speed: 12000,
    spaceBetween: 30,
    swiper: {
      animating: true,
    },
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    loop: true,
    freeMode: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2.25,
        spaceBetween: 30,
      },
    },
  })

  // mobile Slider
  if (window.innerWidth <= 768) {
    swiper = new Swiper('.mySwiper2', {
      slidesPerView: 3,
      spaceBetween: 40,
      loop: true,
      freeMode: true,
      centeredSlides: true,
      breakpoints: {
        640: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
    })
  }

  //Gallery swiper
  if (window.innerWidth <= 768) {
    swiper = new Swiper('.gallery-swiper', {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      draggable: true,
      centeredSlides: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    })
  }

  // Testimimonials Slider
  swiper1 = new Swiper(".testimonial-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });

  // Tabs Slider {Spa treatments omni la costa resort}
  swiper = new Swiper('#catgory-slider', {
    loop: false,
    slidesPerView: "auto",
    allowTouchMove: false,
    spaceBetween: 8,
    mousewheel: true,
    slideToClickedSlide: true,
    centeredSlides: false,
    navigation: {
      nextEl: '.slider-next',
      prevEl: '.slider-prev',
    },
    breakpoints: {
      768: {
        spaceBetween: 16,
      },
      1024: {
        spaceBetween: 40,
      },
    },
  });

  $(".category-button").click(function () {
    $(".category-button").removeClass("active");
    $(this).addClass('active');
    var getid = $(this).data('id');
    $(".data-text").removeClass('active');
    $("#" + getid).addClass("active");
  });


  // pfc Slider
  swiper3 = new Swiper(".pfc-slider", {
    slidesPerView: 1.1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      560: {
        slidesPerView: 1.8,
      },

      768: {
        slidesPerView: 2.2,
      },

      1024: {
        slidesPerView: 3.2,
      },

      1280: {
        slidesPerView: 3.4,
      },
    },
  });
})


// Stick footer in Vanilla JS
function stickyFooter() {
  const stickyFooter = document.querySelector('.sticky-footer');
  const siteFooter = document.querySelector('.site-footer');

  if (!stickyFooter || !siteFooter) return;

  const stickyFooterHeight = stickyFooter.offsetHeight;
  siteFooter.style.marginBottom = `${stickyFooterHeight}px`;
}
stickyFooter();

let debounceTimeout;
window.addEventListener('resize', () => {
  clearTimeout(debounceTimeout);
  debounceTimeout = setTimeout(stickyFooter, 250);
});

const stickyFooterElement = document.querySelector('.sticky-footer');
if (stickyFooterElement) {
  const observer = new MutationObserver(stickyFooter);
  observer.observe(stickyFooterElement, {
    childList: true,
    subtree: true,
  });
}