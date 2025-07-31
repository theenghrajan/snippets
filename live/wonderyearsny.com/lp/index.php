<?php
include "ip-checker.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MSBNXNH');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87982656-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-87982656-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>Wonder Years</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <link rel="preload" href="assets/fonts/Gilroy-Heavy.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Gilroy-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Gilroy-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Gilroy-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/Gilroy-Light.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Add Following Select2 Style if you're using select2 selector; This is a basic style please use sass to add your own css for select2 -->
    <!-- <link rel="stylesheet" href="assets/css/select2.min.css"> -->
    <link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSBNXNH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="site-wrapper">
        <header id="header" class="site-header">
            <div class="container">
                <figure class="site-header__logo">
                    <img src="assets/images/wonder-years-logo.svg" alt="Wonder Years Logo" width="262" height="52" loading="lazy">
                </figure> <!-- /.site-header__logo -->
                <div class="site-header__actions">
                    <div class="button-group">
                        <a href="tel:5165406708" class="btn btn-primary has-icon"><i class="icon-phone"></i>Call us (516) 540-6708</a>
                        <a href="#formPrimary" class="btn btn-outline mobile-only-sticky js-has-smooth">Request an Appointment</a>
                    </div>
                </div> <!-- /.site-header__actions -->
            </div>
        </header> <!-- / .site-header -->

        <main id="main" class="site-content">

            <section class="hero">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 hero__content-block py-2">
                            <h1 class="heading-primary mb-lg-1">
                                <small>Welcome to</small>
                                Wonder Years <span>Psychiatric</span> services
                            </h1>

                            <p>Serving Children, Adolescents & Adults</p>

                            <div id="formPrimary" class="form-primary form-offset text-left mt-1 mt-lg-2 mt-xl-4">
                                <?php /*
								<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
                                    <div class="form-header">
                                        <h2 class="mb-lg-1">Request A Consultation</h2>
                                    </div>
                                    <div class="form-section-0 row">
                                        <div class="form-group col-12">
                                            <div class="checkbox-element d-flex flex-wrap">
                                                <input id="checkboxElementValue1" name="choose[]" type="checkbox" value="Prescribers">
                                                <label for="checkboxElementValue1" class="checkbox-element-label">Prescribers</label>

                                                <input id="checkboxElementValue2" name="choose[]" type="checkbox" value="Therapists">
                                                <label for="checkboxElementValue2" class="checkbox-element-label">Therapists</label>
                                                <!-- Add more checkbox input if needed -->
                                                <div class="messages"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" placeholder="Name" name="full-name" type="text" value="">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" placeholder="Email" name="email" type="email" value="">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="form-control" placeholder="Phone" name="phone" type="text" value="">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
                                            <div class="messages"></div>
                                        </div>
                                    </div>
                                    <div class="form-footer pt-lg-1">
                                        <button type="submit" class="submitButton btn btn-primary">
                                            <span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
                                            Book appointment
                                        </button>
                                    </div>
                                </form>
								*/ ?>
                                <!--  ----------------------------------------------------------------------  -->
                                <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
                                <!--  If necessary, please modify the charset parameter to specify the        -->
                                <!--  character set of your HTML page.                                        -->
                                <!--  ----------------------------------------------------------------------  -->

                                <!--<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">-->

                                <!--  ----------------------------------------------------------------------  -->
                                <!--  NOTE: Please add the following <FORM> element to your page.             -->
                                <!--  ----------------------------------------------------------------------  -->

                                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DDn000000J3vO" method="POST">
                                    <div class="form-header">
                                        <h2 class="mb-lg-1">Request A Consultation</h2>
                                    </div>

                                    <div class="form-section-0 row">
                                        <div class="form-group col-12">
                                            <input type=hidden name="oid" value="00DDn000000J3vO">
                                            <input type=hidden name="retURL" value="https://wonderyearsny.com/">
                                        </div>
                                        <!--  ----------------------------------------------------------------------  -->
                                        <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
                                        <!--  these lines if you wish to test in debug mode.                          -->
                                        <!--  <input type="hidden" name="debug" value=1>                              -->
                                        <!--  <input type="hidden" name="debugEmail"                                  -->
                                        <!--  value="eugenia@wonderyearsny.com">                                      -->
                                        <!--  ----------------------------------------------------------------------  -->
                                        <div class="form-group col-12">
                                            <div class="checkbox-element d-flex flex-wrap">
                                                <input id="00NDn000013jlbG" name="00NDn000013jlbG" type="checkbox" value="1" />
                                                <label for="00NDn000013jlbG" class="checkbox-element-label">Prescribers</label>

                                                <input id="00NDn000013jlbL" name="00NDn000013jlbL" type="checkbox" value="1" />
                                                <label for="00NDn000013jlbL" class="checkbox-element-label">Therapists</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="first_name" class="d-none">First Name</label>
                                            <input id="first_name" class="form-control" placeholder="First Name" maxlength="40" name="first_name" size="20" type="text" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name" class="d-none">Last Name</label>
                                            <input id="last_name" class="form-control" placeholder="Last Name" maxlength="80" name="last_name" size="20" type="text" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="email" class="d-none">Email</label>
                                            <input id="email" class="form-control" placeholder="Email" maxlength="80" name="email" size="20" type="text" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="phone" class="d-none">Phone</label>
                                            <input id="phone" class="form-control" placeholder="Phone" maxlength="40" name="phone" size="20" type="text" />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="00NDn00000CUnbs" class="d-none">Reason for Referral:</label>
                                            <!-- <input id="00NDn00000CUnbs" class="form-control" placeholder="Message" maxlength="255" name="00NDn00000CUnbs" size="20" type="text" /> -->
                                            <textarea id="00NDn00000b3rkj" class="form-control" placeholder="Message" name="00NDn00000b3rkj" rows="5" type="text" wrap="soft"></textarea>
                                        </div>

                                        <div class="form-group col-md-6 d-none">
                                            <label for="lead_source" class="d-none">Lead Source</label>
                                            <select id="lead_source" class="form-control" name="lead_source">
                                                <option selected value="">Lead Source</option>
                                                <option value="">--None--</option>
                                                <option value="External Referral">External Referral</option>
                                                <option value="Phone Call">Phone Call</option>
                                                <option value="Psychology Today">Psychology Today</option>
                                                <option value="Website">Website</option>
                                                <option value="Wonder Years Website" selected>Wonder Years Website</option>
                                                <option value="Other">Other</option>
                                                <option value="Internal Referral">Internal Referral</option>
                                                <option value="Patient Referral">Patient Referral</option>
                                            </select>
                                        </div>

                                        <div class="form-footer pt-lg-1">
                                            <input type="submit" name="submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-6">
                            <picture>
                                <source srcset="assets/images/hero-feature.webp" type="image/webp">
                                <source srcset="assets/images/hero-feature.jpg" type="image/jpg">
                                <img src="assets/images/hero-feature.jpg" alt="Hero Feature" width="652" height="808" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </section> <!-- /.hero -->

            <section class="section container pt-2 pt-lg-4 pt-xxl-6">
                <h2 class="heading-secondary text-center mb-1 mb-lg-2 mb-xl-3">Our Services</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-01.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">Therapy</h2>
                                <p>Talk therapy can help you break the cycle of disturbing thoughts and help you reconnect with yourself. Therapists at Wonder Years provide a variety of therapeutic services for all age groups.</p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Book Appointment</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">Therapy</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-02.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">Transcranial Magnetic Stimulation (TMS)</h2>
                                <p>TMS is a safe, effective, non-invasive treatment for Depression approved by FDA since 2008. It is an outpatient procedure which does not require anesthesia or sedation and most patients can return to work right after. Call us to find out if TMS can be helpful to you.</p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Request Consultation</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">Transcranial Magnetic Stimulation (TMS)</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-03.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">Anxiety & Panic Attacks</h2>
                                <p>Divorce, Bullying, High School drama can all lead to significant stress, nervousness and anger issues. Often children complain of shortness of breath, chest pain, tingling and numbness of extremities and end up in the ER. <a data-fancybox href="#popupCard1" class="read-more">Read More...</a></p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Book Appointment</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">Anxiety & Panic Attacks</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-04.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">Depression</h2>
                                <p>Depression in children, adolescent & teenagers presents differently. They are observed to be irritable, loose focus and their academic performance declines. Both psychotherapy and pharmacology are helpful. Get in touch with us for a thorough psychiatric evaluation.</p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Book Appointment</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">Depression</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-05.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">ADHD/ADD</h2>
                                <p>Is your child suffering from hyperactivity, inattention or behavioral problems. We provide comprehensive psychiatric evaluation. Dr. Malik strongly believes in a good working relationship with teachers, therapist, psychiatrist and <a data-fancybox href="#popupCard2" class="read-more">Read More...</a></p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Book Appointment</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">ADHD/ADD</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-1 mb-lg-2">
                        <article class="card-primary bg-cover">
                            <img src="assets/images/services-feature-06.jpg" width="406" height="484" loading="lazy" alt="Services Feature">
                            <div class="card-primary__body text-center">
                                <h2 class="h4">Second Opinions</h2>
                                <p>Sometimes parents and other treatment providers like psychiatrist, psychologists and primary care physicians want a fresh look at the diagnosis and treatment. These evaluations are as comprehensive as initial evaluations and involve about an hour. <a data-fancybox href="#popupCard3" class="read-more">Read More...</a></p>
                            </div>
                            <div class="card-primary__foot">
                                <a href="#formPrimary" class="btn btn-primary btn-block js-has-smooth">Book Appointment</a>
                            </div>
                            <div class="card-primary__lg-title text-center text-white">
                                <h2 class="h4">Second Opinions</h2>
                            </div>
                        </article> <!-- /.card-primary -->
                    </div>
                </div>
            </section> <!-- /.section -->

            <div class="popup-card">
                <div id="popupCard1" class="popup-card__content">
                    <p>Divorce, Bullying, High School drama can all lead to significant stress, nervousness and anger issues. Often children complain of shortness of breath, chest pain, tingling and numbness of extremities and end up in the ER. These symptoms could suggest Anxiety and Panic Attack. If you or your child is experiencing these symptoms, reach out to us for expert help.</p>
                </div> <!-- /.popup-card__content -->
                <div id="popupCard2" class="popup-card__content">
                    <p>Is your child suffering from hyperactivity, inattention or behavioral problems. We provide comprehensive psychiatric evaluation. Dr. Malik strongly believes in a good working relationship with teachers, therapist, psychiatrist and other care providers like speech therapist, occupational therapist and physical therapist to help patients achieve their full potential.</p>
                </div> <!-- /.popup-card__content -->
                <div id="popupCard3" class="popup-card__content">
                    <p>Sometimes parents and other treatment providers like psychiatrist, psychologists and primary care physicians want a fresh look at the diagnosis and treatment. These evaluations are as comprehensive as initial evaluations and involve about an hour. It is recommended that copies of prior assessments, psychological testing, discharge summaries from hospital and recent medications be brought with you during the appointment.</p>
                </div> <!-- /.popup-card__content -->
            </div> <!-- /.popup-card -->

            <section class="about container py-xl-5 py-md-3 py-1">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-left text-center mb-1 mb-sm-2 mb-lg-0">
                        <picture class="media-frame media-frame--topRight media-frame--btmLeft">
                            <source srcset="assets/images/about-img-01.webp" type="image/webp">
                            <source srcset="assets/images/about-img-01.jpg" type="image/jpg">
                            <img src="assets/images/about-img-01.jpg" width="536" height="529" loading="lazy" alt="family">
                        </picture> <!-- /.media-frame -->
                    </div>
                    <div class="col-lg-6 col-right text-center text-lg-left">
                        <div class="about-content">
                            <h2 class="heading-secondary">About Us</h2>
                            <p>At Wonder Years we provide comprehensive psychiatric & psychological assessments, second opinions, individual and group therapy, medication management as well cutting edge services like TMS (Transcranial Magnetic Stimulation) & Esketamine for a broad range of psychiatric conditions.</p>
                            <p>We have a collaborative approach with family members, patients, therapists, psychiatrists, primary care physicians, teachers and all other care providers.</p>
                            <p>This is done in conjunction with a strong emphasis on compliance of treatment and regular discussions about diagnosis, therapeutic interventions, medications and newer treatment options.</p>
                            <div class="btn-wrap mt-lg-2 mt-1">
                                <a href="#formPrimary" class="btn btn-primary js-has-smooth">Book appointment</a>
                            </div>
                        </div> <!-- /.about-content -->
                    </div>
                </div>
            </section> <!-- /.about -->

            <section class="testimonial py-xl-5 py-md-3 pt-1 pb-3">
                <div class="container">
                    <h2 class="heading-secondary text-primary text-center mb-xl-3 mb-md-2 mb-1">Client Testimonials</h2>

                    <div class="row testimonial-slider">
                        <div class="col-md-6 col-xl-4 testimonial-slider__item">
                            <blockquote class="blockquote">
                                <div class="blockquote-head">
                                    <i class="icon-quote-o"></i>
                                </div>
                                <div class="blockquote-content">
                                    <p><span class="first-line-spacer"></span>Dr. Vikas Malik is very caring and thorough. His office staff gives good customer care & we've had nothing but positive experiences there.</p>
                                </div>
                                <div class="blockquote-footer mt-auto">
                                    <div class="author pt-1 mb-0">
                                        <div class="author-info mr-1">
                                            <h3 class="h4 mb-0">Valerie</h3>
                                            <small>Oct 6, 2020</small>
                                        </div>
                                        <ul class="list-star list-unstyled">
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </blockquote>
                        </div> <!-- /.testimonial-slider__item -->

                        <div class="col-md-6 col-xl-4 testimonial-slider__item">
                            <blockquote class="blockquote">
                                <div class="blockquote-head">
                                    <i class="icon-quote-o"></i>
                                </div>
                                <div class="blockquote-content">
                                    <p><span class="first-line-spacer"></span>Dr. Maik is amazing. He is very receptive and patient. Really listens to you and gives great feedback on how to resolve the issues at hand. I have recommended him to several people.</p>
                                    <div class="blockquote-footer mt-auto">
                                        <div class="author pt-1 mb-0">
                                            <div class="author-info mr-1">
                                                <h3 class="h4 mb-0">Jennifer</h3>
                                                <small>Oct 6, 2020</small>
                                            </div>
                                            <ul class="list-star list-unstyled">
                                                <li class="list-star__item"><i class="icon-star"></i></li>
                                                <li class="list-star__item"><i class="icon-star"></i></li>
                                                <li class="list-star__item"><i class="icon-star"></i></li>
                                                <li class="list-star__item"><i class="icon-star"></i></li>
                                                <li class="list-star__item"><i class="icon-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </blockquote>
                        </div> <!-- /.testimonial-slider__item -->

                        <div class="col-md-6 col-xl-4 testimonial-slider__item">
                            <blockquote class="blockquote">
                                <div class="blockquote-head">
                                    <i class="icon-quote-o"></i>
                                </div>
                                <div class="blockquote-content">
                                    <p><span class="first-line-spacer"></span>Dr Malik is professional, smart & very knowledgeable about meditations and how they work, which gives me confidence in what he says.</p>
                                </div>
                                <div class="blockquote-footer mt-auto">
                                    <div class="author pt-1 mb-0">
                                        <div class="author-info mr-1">
                                            <h3 class="h4 mb-0">Linda</h3>
                                            <small>Oct 1, 2020</small>
                                        </div>
                                        <ul class="list-star list-unstyled">
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </blockquote>
                        </div> <!-- /.testimonial-slider__item -->

                        <div class="col-md-6 col-xl-4 testimonial-slider__item">
                            <blockquote class="blockquote">
                                <div class="blockquote-head">
                                    <i class="icon-quote-o"></i>
                                </div>
                                <div class="blockquote-content">
                                    <p><span class="first-line-spacer"></span>Dr Malik is professional, smart & very knowledgeable about meditations and how they work, which gives me confidence in what he says.</p>
                                </div>
                                <div class="blockquote-footer mt-auto">
                                    <div class="author pt-1 mb-0">
                                        <div class="author-info mr-1">
                                            <h3 class="h4 mb-0">Linda</h3>
                                            <small>Oct 1, 2020</small>
                                        </div>
                                        <ul class="list-star list-unstyled">
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                            <li class="list-star__item"><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </blockquote>
                        </div> <!-- /.testimonial-slider__item -->
                    </div>
                </div>
            </section> <!-- /.testimonial -->

        </main> <!-- / .site-content -->

        <footer id="footer" class="site-footer pt-xl-5 pt-md-3 pt-1">
            <div class="container">
                <div class="row align-items-center pb-xl-4 pb-md-2 pb-1">
                    <div class="col-xl-5 col-lg-6 site-footer__form col-left mb-1 mb-sm-2 mb-lg-0">
                        <form method="POST" action="mailer/index.php" id="form-id-1" class="validate form">
                            <div class="form-header">
                                <h2 class="mb-1 mb-lg-2">Request A Consultation</h2>
                            </div>
                            <div class="form-section-0">
                                <div class="form-group">
                                    <div class="checkbox-element d-flex flex-wrap">
                                        <input id="checkboxElementValue3" name="choose[]" type="checkbox" value="Prescribers">
                                        <label for="checkboxElementValue3" class="checkbox-element-label">Prescribers</label>

                                        <input id="checkboxElementValue4" name="choose[]" type="checkbox" value="Therapists">
                                        <label for="checkboxElementValue4" class="checkbox-element-label">Therapists</label>
                                        <!-- Add more checkbox input if needed -->
                                        <div class="messages"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="full-name" type="text" value="">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" name="phone" type="text" value="">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
                                    <div class="messages"></div>
                                </div>
                            </div>
                            <div class="form-footer pt-lg-1">
                                <button type="submit" class="submitButton btn btn-primary">
                                    <span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
                                    Book appointment
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-right site-footer__content blue-overlay bg-cover ml-xl-auto">
                        <img src="assets/images/footer-bg.jpg" width="729" height="524" loading="lazy" alt="Footer BG">
                        <div class="site-footer__wrap text-center text-white">
                            <h2 class="h3">Contact us</h2>
                            <a href="tel:5165406708" class="footer-call">(516) 540-6708</a>
                            <p><a href="mailto:info@wonderyearsny.com" class="footer-mail">info@wonderyearsny.com</a></p>

                            <div class="site-footer__item">
                                <h2 class="h4">Brooklyn Height</h2>
                                <p>26 Court Street, Ste 816, <br> Brooklyn NY 11242</p>
                            </div>

                            <div class="site-footer__item">
                                <h2 class="h4">Garden City</h2>
                                <p>200 Garden City Plaza, Ste 402, <br> Garden City, NY 11530</p>
                            </div>
                            <div class="site-footer__item">
                                <h2 class="h4">Morristown</h2>
                                <p>26 Madison Avenue, <br> Morristown, NJ 07960</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-block text-center py-lg-2 py-1 container">
                <span class="copyright">Copyright &copy; <?php echo date('Y'); ?> Wonder Years Psychiatric Services PLLC. All rights reserved.</span>
            </div>
        </footer> <!-- / .site-footer -->
    </div> <!-- /.site-wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/underscore-min.js"></script>
    <!-- Add Following Select2 Style if you're using select2 selector; -->
    <!-- <script src="assets/js/select2.min.js"></script> -->
    <script src="assets/js/validate.min.js"></script>
    <script src="assets/js/builder.js"></script>
    <script src="vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
    <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script> -->
</body>

</html>