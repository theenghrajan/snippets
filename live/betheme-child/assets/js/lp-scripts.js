(function ($) {

    /* smooth scroll*/
    $('a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 20
                }, 1000);
                return false;
            }
        }
    });

    // testimonials-slider
    $('.testimonials-slider').slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        prevArrow: $('.arrow-prev'),
        nextArrow: $('.arrow-next')
    });

    // Select 2
    // $('.advanced-select2').select2({
    //     allowClear: !0,
    //     minimumResultsForSearch: -1
    // }).on('change', function (el) {
    //     triggerChangeObject(el)
    // })

    $('.custom_select .gfield_select').select2({
        allowClear: !0,
        minimumResultsForSearch: -1
    });

    $(document).on('gform_post_render', function (event, form_id, current_page) {
        $('.custom_select .gfield_select').select2({
            allowClear: !0,
            minimumResultsForSearch: -1
        });
    });

    //auto complete off
    $('form').attr('autocomplete', 'off');
    $(".gfield input").on('focus', function () {
        // $(this).attr('autocomplete', 'new-password')
        $(this).attr('autocomplete', 'off')
    });

    // accordion
    $(".accordion__title.active").next().slideDown();
    $(".accordion__title").on("click", function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass("active").next().slideUp();
        } else {
            $(".accordion__title.active").removeClass("active").next(".accordion__body").slideUp();
            $(this).addClass('active').next('.accordion__body').slideDown();
        }
    });

    $('.accordion .accordion__title').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.accordion').toggleClass("accordion-alt");
        $('.accordion .accordion__title').not(this).closest('.accordion').removeClass('accordion-alt');
    });

    //stickyPhone dynamic height on resize and scroll
    function stickyPhone() {
        var stickyFooterHeight = $('.sticky-phone').innerHeight();
        $('.lp-footer').css('margin-bottom', stickyFooterHeight);
    }
    stickyPhone();
    $(window).on('resize scroll', stickyPhone);

}($));