$(document).ready(function () {

    var header = $(".site-header");
    var headerHeight = header.innerHeight();

    function initBgCover(context) {
        if (!context) context = $('body');
        context.find('.bg-cover').each(function () {
            var holder = $(this);
            var image = holder.find('> img').hide();
            var imageSrc = image.prop('src');
            holder.css({
                backgroundImage: 'url(' + imageSrc + ')',
            });
        });
    }

    initBgCover();

    /* smooth scroll*/
    $('a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - headerHeight
                }, 1000);
                return false;
            }
        }
    });

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop >= 100) {
            $('.site-header').addClass('sticky-header')
        } else {
            $('.site-header').removeClass('sticky-header');
        }
    });

    // testimonial-slider
    $('.testimonial-slider').slick({
        arrows: true,
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0',
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    adaptiveHeight: true,
                }
            }
        ]
    });

    //padding-top for hero
    function paddingEl() {
        var paddingElm = $(".hero");
        paddingElm.css("padding-top", headerHeight);
    }

    paddingEl();
    setTimeout(function () {
        paddingEl();
    }, 100);

    //Responsive sticky footer
    function stickyFoot() {
        var width = $(window).width();
        var stickyFootHeight = $('.mobile-only-sticky').innerHeight();
        if (width < 992) {
            $('.site-footer').css('margin-bottom', stickyFootHeight);
        } else {
            $('.site-footer').css('margin-bottom', '0');
        }
    }
    stickyFoot();
    $(window).on('resize scroll', stickyFoot);
    setTimeout(function () {
        stickyFoot();
    }, 100);
});