<?php
/* Template Name: Landing Page Template  */

get_header('lp');
?>

<section class="hero bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-bg.jpg');">
    <figure class="mobile-only-bg">
        <img width="640" height="360" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-bg-mobile.jpg" alt="Banner background image">
    </figure>
    <div class="container">
        <div class="row hero__inner">
            <div class="col-lg-7 hero__item">
                <div class="hero__content">
                    <h1 class="heading-primary">No Recovery No Fee Debt Collections</h1>

                    <div class="list-focus-wrap">
                        <?php /*?><h4 class="list-focus-title">Who says debt collection has to be complicated?</h4><?php */?>
                        <ul class="list-focus">
                            <li><span>A+ BBB</span></li>
                            <li><span>Client Portal To Track Payments</span></li>
                            <li><span>Small & Large Business Collection Solutuons</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div id="formBanner" class="form-wrap">
                    <div class="form-header">
                        <h2>REQUEST <strong>A FREE QUOTE</strong></h2>
                        <p>Quote Responded To Within 24 Hours</p>
                    </div><!-- /.form-header -->
                    <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.hero -->

<section class="section-services">
    <div class="container">
        <div class="section-title text-center">
            <h4>Services</h4>
            <h2 class="heading-secondary">Collection Services</h2>
        </div><!-- /.secstion-title -->
        <div class="section-content">
            <div class="row inner">
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img01.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Commercial Collections</h4>
                                <p>Business to business debt needs to be handled professionally and assertively to have success.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img01.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Commercial Collections</h4>
                                <p>Business to business debt needs to be handled professionally and assertively to have success.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img02.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Consumer Collections</h4>
                                <p>Nexum Group understands the FDCPA and how to handle consumer claims correctly.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img02.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Consumer Collections</h4>
                                <p>Nexum Group understands the FDCPA and how to handle consumer claims correctly.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img03.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Medical Collections</h4>
                                <p>Nexum Group understands the FDCPA and how to handle consumer claims correctly.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img03.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Medical Collections</h4>
                                <p>Nexum Group understands the FDCPA and how to handle consumer claims correctly.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img04.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Tenant Collections</h4>
                                <p>You purchased an investment, made it move-in ready, and had your tenants fill out a lease.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img04.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Tenant Collections</h4>
                                <p>You purchased an investment, made it move-in ready, and had your tenants fill out a lease.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img05.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Skip Trace</h4>
                                <p>The Nexum Group has seen enough companies go out of business and/or file bankruptcy.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img05.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Skip Trace</h4>
                                <p>The Nexum Group has seen enough companies go out of business and/or file bankruptcy.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img06.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Judgement Collections</h4>
                                <p>If you are on this site, you understand getting a judgment can be very frustrating.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img06.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Judgement Collections</h4>
                                <p>If you are on this site, you understand getting a judgment can be very frustrating.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img07.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">International Collections</h4>
                                <p>Nexum Group understands how the collection laws, statutes, and procedures work.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img07.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">International Collections</h4>
                                <p>Nexum Group understands how the collection laws, statutes, and procedures work.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
                <div class="col-sm-6 col-lg-3 inner__item">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__head">
                                <figure class="card__figure">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img08.jpg" alt="Service image">
                                </figure>
                            </div>
                            <div class="card__body">
                                <h4 class="card__title">Small Business Collections</h4>
                                <p>Nexum Group Inc takes pride in putting money back into small business who need.</p>
                            </div>
                        </div><!-- /.card-side-front -->
                        <!-- <div class="card__side card__side--back bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services-img08.jpg');">
                            <div class="card__body">
                                <h4 class="card__title">Small Business Collections</h4>
                                <p>Nexum Group Inc takes pride in putting money back into small business who need.</p>
                            </div>
                        </div> -->
                        <!-- /.card-side-back -->
                    </div><!-- /.card -->
                </div><!-- /.inner__item -->
            </div>
        </div><!-- /.section-content -->
    </div>
</section>
<!-- /.section-services -->

<section class="why-choose">
    <div class="container">
        <div class="section-title why-choose__title text-center">
            <h4>We help you</h4>
            <h2 class="heading-secondary">Why choose us</h2>
        </div><!-- /.section-title -->
        <div class="row why-choose__inner">
            <div class="col-lg-6 why-choose__item why-choose__item-left">
                <figure class="why-choose__figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/why-choose-feature-img.jpg" width="739" height="480" alt="Why choose us feature image">
                </figure>
            </div><!-- /.why-choose__item -->
            <div class="col-lg-6 why-choose__item why-choose__item-right">
                <div class="why-choose__content">
                    <ul class="check-list list-unstyled">
                        <li class="check-list__item">10+ Years Experience</li>
                        <li class="check-list__item">Flat Rate Collections</li>
                        <li class="check-list__item">No Recovery No Free</li>
                        <li class="check-list__item">A+ BBB Rating</li>
                        <li class="check-list__item">Tailored Solutions From Small Businesses To Fortune 500 Companies</li>
                        <li class="check-list__item">Nationwide Service Area</li>
                    </ul>
                    <div class="why-choose__btn">
                        <a href="tel:8772851694" class="btn btn-primary">Call : (877) 285-1694</a>
                    </div>
                </div><!-- /.why-choose__content -->
            </div><!-- /.why-choose__item -->
        </div><!-- /.why-choose__inner -->
    </div>
</section><!-- /.why-choose -->

<?php /*
<section class="faq">
    <div class="container">
        <div class="block-title faq__head">
            <span class="heading-sub">FAQ</span>
            <h2 class="heading-secondary">Frequently Asked Questions</h2>
        </div>

        <div class="faq__body">
            <figure class="faq__logo">
                <img width="288" height="79" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Nexum-Logo-black.png" alt="Black Nexum Logo">
            </figure>

            <div class="row inner">
                <div class="col-lg-6 inner__item">
                    <div class="accordion accordion-alt">
                        <button class="accordion__title active">
                            Why use a Collection Agency?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            What if my debtor does not pay?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            What if my debt is old?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            What is skip tracing?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->
                </div>
                <div class="col-lg-6 inner__item">
                    <div class="accordion">
                        <button class="accordion__title">
                            How quickly will I be paid?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            Is legal action optional?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            How will I know the status of my account?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            When do I get my money once it’s collected?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->

                    <div class="accordion">
                        <button class="accordion__title">
                            How do I get started?
                        </button>
                        <div class="accordion__body">
                            <p>We are the professionals! Third-party intervention significantly increases successful debt recovery.</p>
                        </div>
                    </div><!-- / .accordion -->
                </div>
            </div>
        </div>
    </div>
</section><!-- / .faq -->
*/ ?>

<section class="process">
    <div class="container">
        <div class="section-header">
            <div class="block-title">
                <span class="heading-sub">Process</span>
                <h2 class="heading-secondary">How It Works</h2>
            </div><!-- /.block-title -->
            <div class="btn-wrap">
                <a href="tel:8772851694" class="btn btn-primary">Call : (877) 285-1694</a>
            </div><!-- /.process-btn -->
        </div><!-- /.process-header -->

        <div class="row inner">
            <div class="col-lg-2 inner__item inner__item-left">
                <figure class="inner__figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process-logo-img.png" width="134" height="134" alt="Process logo image">
                </figure>
            </div>
            <div class="col-lg-10 inner__item inner__item-right">
                <div class="step">
                    <div class="step__item">
                        <div class="step__header">
                            <span class="counter"></span>
                        </div><!-- /.step__header -->
                        <div class="step__icon">
                            <span class="step__round-icon"></span>
                        </div><!-- /.step__icon -->
                        <div class="step__content">
                            <h4 class="step__title">submit an application and we will verify the debt.</h4>
                            <p>Gather the necessary invoices and documents and send them our way. We handle claims of all sizes, from $1,000 to $1 million, and collect for clients in all kinds of industries.</p>
                        </div><!-- /.step__content -->
                    </div><!-- /.step__item -->
                    <div class="step__item">
                        <div class="step__header">
                            <span class="counter"></span>
                        </div><!-- /.step__header -->
                        <div class="step__icon">
                            <span class="step__round-icon"></span>
                        </div><!-- /.step__icon -->
                        <div class="step__content">
                            <h4 class="step__title">we’ll assess your debtor’s assets to determine their ability to repay.</h4>
                            <p>Our highly-trained collection agents will contact the borrower and work to recover your assets with proven negotiation techniques. When necessary, we’ll take the debtor to court.</p>
                        </div><!-- /.step__content -->
                    </div><!-- /.step__item -->
                    <div class="step__item">
                        <div class="step__header">
                            <span class="counter"></span>
                        </div><!-- /.step__header -->
                        <div class="step__icon">
                            <span class="step__round-icon"></span>
                        </div><!-- /.step__icon -->
                        <div class="step__content">
                            <h4 class="step__title">we’ll turn accounts receivable into accounts received!</h4>
                            <p>We retrieve your debt as quickly and efficiently as possible to get your money back in your hands. If we don't collect, you pay nothing and write off the debt.</p>
                        </div><!-- /.step__content -->
                    </div><!-- /.step__item -->
                </div><!-- /.step -->
            </div><!-- /.inner__item -->
        </div><!-- /.inner -->

        <div class="mbl-only-btn">
            <a href="tel:8772851694" class="btn btn-primary">Call : (877) 285-1694</a>
        </div>
    </div>
</section><!-- /.process -->

<section class="testimonials">
    <div class="container">
        <div class="block-title testimonials__head">
            <span class="heading-sub">Feeds</span>
            <h2 class="heading-secondary">Testimonials</h2>
        </div>

        <div class="testimonials-slider">
            <div class="testimonials-slider__item">
                <blockquote class="blockquote">
                    <div class="blockquote__body">
                        <p>Nexum Group works FAST! Customer Service was top notch & they were able to get the debt collected. I highly recommend Mike & his team! I will be using them again if necessary.</p>
                    </div>
                    <div class="blockquote__foot">
                        <figure class="google-logo">
                            <img width="94" height="96" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-logo.png" alt="Google Logo">
                        </figure>
                        <div class="blockquote__foot-content">
                            <h4 class="blockquote__foot-title">Danny F.</h4>
                            <ul class="star-list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </blockquote><!-- .blockquote -->
            </div><!-- .testimonials-slider__item -->
            <div class="testimonials-slider__item">
                <blockquote class="blockquote">
                    <div class="blockquote__body">
                        <p>I had great concerns about contacting a collection agency to handle a former client but after speaking with Mike - I knew I was in good hands. The check just arrived and I have a lot less gray hair from dealing with collections. Mike and his team take this terrible chore out of your hands and make it super easy. Thanks again!</p>
                    </div>
                    <div class="blockquote__foot">
                        <figure class="google-logo">
                            <img width="94" height="96" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-logo.png" alt="Google Logo">
                        </figure>
                        <div class="blockquote__foot-content">
                            <h4 class="blockquote__foot-title">David B.</h4>
                            <ul class="star-list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </blockquote><!-- .blockquote -->
            </div><!-- .testimonials-slider__item -->
            <div class="testimonials-slider__item">
                <blockquote class="blockquote">
                    <div class="blockquote__body">
                        <p>Only positive experiences with Mike and Nexum! They were able to recover the debt in little more than a week.</p>
                    </div>
                    <div class="blockquote__foot">
                        <figure class="google-logo">
                            <img width="94" height="96" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-logo.png" alt="Google Logo">
                        </figure>
                        <div class="blockquote__foot-content">
                            <h4 class="blockquote__foot-title">Stephen G.</h4>
                            <ul class="star-list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </blockquote><!-- .blockquote -->
            </div><!-- .testimonials-slider__item -->

            <div class="testimonials-slider__item">
                <blockquote class="blockquote">
                    <div class="blockquote__body">
                        <p>I am happy to recommend Nexum Group! I was dealt with swiftly and the person I spoke to understood and helped us to retrieve the money owed to us extremely quickly. I found their attitude, explanation of their procedures and aftercare service to be very professional and I would not hesitate to use them again. I have tried others and these guys are the best by a mile.</p>
                    </div>
                    <div class="blockquote__foot">
                        <figure class="google-logo">
                            <img width="94" height="96" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-logo.png" alt="Google Logo">
                        </figure>

                        <div class="blockquote__foot-content">
                            <h4 class="blockquote__foot-title">Jeff W.</h4>
                            <ul class="star-list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </blockquote><!-- .blockquote -->
            </div><!-- .testimonials-slider__item -->
        </div><!-- .testimonials-slider -->
        <div class="slider-arrow">
            <button class="arrow-prev"></button>
            <button class="arrow-next"></button>
        </div>
    </div>
</section><!-- .testimonials -->

<?php
get_footer('lp');
