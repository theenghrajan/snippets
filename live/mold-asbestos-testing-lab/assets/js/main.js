var ie = function () {
    try {
        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            $('body').addClass('ie-user');
            return true;
        }
    } catch (err) {
        console.log(err);
    }
    return false;
}

ie();

var bgCover = function (context) {
    if (!context) context = $('body');
    context.find('.bg-cover,[data-fix="image"]').each(function () {
        var wrap = $(this),
            image = wrap.find('>img');
        if (image.attr('src')) {
            if (wrap.data('fix') != 'image') {
                image.hide();
                wrap.css({
                    'background-image': 'url(\'' + image.attr('src') + '\')'
                });
            } else {
                wrap.find('.svg.img-fluid').css({
                    'background-image': 'url(\'' + image.attr('src') + '\')'
                });
            }
        }
        if (ie()) {
            wrap.find('.svg').removeClass('img-fluid');
        }
    });
}

bgCover();

//smooth scroll
var winWidth = jQuery(window).width();
jQuery(' a.js-has-smooth-scroll[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            if (winWidth > 991) {
                jQuery('html, body').animate({
                    scrollTop: target.offset().top - 10
                }, 1000);
            } else {
                jQuery('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
            return false;
        }
    }
});

$(document).ready(function () {

    //init function
    $(function () {
        initBgCover();
    });

    //background cover
    function initBgCover(context) {
        if (!context) context = $('body');
        context.find('.bg-cover').each(function () {
            var holder = $(this);
            var image = holder.find('> img').hide();
            var imageSrc = image.prop('src');
            holder.css({
                backgroundImage: 'url(' + imageSrc + ')'
            });
        });
    }

    //match height
    // $('.same-height').matchHeight();

    /*----------------------------
    Sticky phone Activation
    ------------------------------ */
    var stickyPhone = $('.sticky-phone');
    var win = $(window);

    win.scroll(function () {
        if ($(this).scrollTop() > 100) {
            stickyPhone.addClass("sticky");
        } else {
            stickyPhone.removeClass("sticky");
        }
    });
    //slick same-height
    // $('.slider').on('setPosition', function () {
    //     $(this).find('.item').height('auto');
    //     var slickTrack = $(this).find('.slick-track');
    //     var slickTrackHeight = $(slickTrack).height();
    //     $(this).find('.item').css('height', slickTrackHeight + 'px');
    // });
    // testimonials-slider
    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        centerMode: true,
        adaptiveHeight: true,
        // variableWidth: true,
        infinite: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $("select.form-control").select2({
        placeholder: 'Select an option',
        minimumResultsForSearch: -1
    });

});