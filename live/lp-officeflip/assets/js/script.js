/*init function*/
jQuery(function () {
    initBgCover();
    viewPortWidth();

    jQuery('.equal-height').matchHeight();

    jQuery('.read-more-btn').click(function (e) {
        jQuery(this).prev('.read-more-text').slideToggle();
        var text = jQuery(this).text();
        jQuery(this).text(text == "Read More" ? "Read Less" : "Read More");
    });


    jQuery(".testimonials-slider").slick({
        infinite: true,
        //speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        //autoplay: true,
        //autoplaySpeed: 6000,       
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true,
                slidesToScroll: 1
            }
        }]
    });
    jQuery(".projects-gallery-slider").slick({
        infinite: true,
        //speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        //autoplay: true,
        //autoplaySpeed: 6000,       
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                    dots: true,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    slidesToScroll: 1
                }
            }
        ]
    });

});

/*background cover*/
function initBgCover(context) {
    if (!context) context = jQuery('body');
    context.find('.bg-cover').each(function () {
        var holder = jQuery(this);
        var image = holder.find('> img').hide();
        var imageSrc = image.prop('src');
        holder.css({
            backgroundImage: 'url(' + imageSrc + ')'
        });
    });
}

/* view Port Width for IE Mobile */
function viewPortWidth() {
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style');
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        );
        document.querySelector('head').appendChild(msViewportStyle)
    }
}