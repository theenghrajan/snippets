<?php
// Start session: Added by FED(RT) on 07-08-25
session_start();

// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token_form1'])) {
  $_SESSION['csrf_token_form1'] = bin2hex(random_bytes(32));
}

// Repeat for additional forms as needed
if (empty($_SESSION['csrf_token_form2'])) {
  $_SESSION['csrf_token_form2'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="googlebot" content="noindex" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Henningsen Injury Attorney</title>
</head>

<body>

  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header bg-ss-blue-900 pt-8 pb-10 md:pb-16 lg:pb-20">
      <div class="container">
        <div class="flex justify-between items-center">
          <figure>
            <img src="assets/images/company-logo.png" alt="header-logo" width="186" height="60" loading="lazy">
          </figure>
          <a href="tel:4048826810" class="text-white flex items-center space-x-2.5 group">
            <span class="py-3 px-4 bg-white/20 rounded-full flex justify-center items-center [&_i]:text-xl group-hover:bg-white group-hover:[&_i]:text-ss-blue-900">
              <i class="icon-phone"></i>
            </span>
            <span class="text-[27px] text-white/90 max-md:hidden ">404-882-6810</span>
          </a>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">

      <section class=" bg-ss-blue-900 text-white" style="padding-bottom: 3rem;">
        <div class="container">
          <div class="flex flex-wrap -mx-6">
            <div class="px-6 w-full lg:w-[55%]">
              <div class="text-xl opacity-80 font-light mb-[50px]">
                <h1>ATLANTA PERSONAL INJURY LAWYER</h1>
                <p>A CLIENT-CENTERED APPROACH TO FIT YOUR INDIVIDUAL NEEDS. Get the Local, Trusted Legal Help You Deserve</p>
              </div>
              <div class="relative [&_video]:w-full max-lg:[&_video]:aspect-video lg:[&_video]:h-[430px] [&_video]:object-center [&_video]:object-cover mb-8 lg:mb-14">
                <figure class="max-lg:hidden absolute bottom-full right-[-7%] mb-4">
                  <img src="./assets/images/decor.svg" width="96" height="46" loading="lazy" alt="Image Description">
                </figure>
                <video controls autoplay muted>
                  <source src="./assets/video/crisp-short-video.mp4" type="video/mp4">
                  <source src="./assets/video/crisp-short-video.webm" type="video/webm">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="relative z-[1] before:w-[16%] before:absolute before:top-0 before:bottom-0 before:bg-gradient-to-l before:from-ss-blue-900/0 before:via-ss-blue-900/0 before:to-ss-blue-900 before:z-[3] after:w-[16%] after:absolute after:top-0 after:bottom-0 after:bg-gradient-to-l after:from-ss-blue-900 after:via-ss-blue-900/0 after:to-ss-blue-900/0 after:z-[3] after:right-0">
                <div class="swiper logoSlider  mb-4 lg:mb-6">
                  <div class="swiper-wrapper flex items-center max-sm:[&_img]:max-h-16 md:[&_img]:max-h-[100px] max-md:[&_img]:object-contain">
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-one.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-two.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-three.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-four.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-five.png" alt="Gallery Feature Image" width="241" height="106" loading="lazy">
                      </figure>
                    </div>

                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-six.png" alt="Gallery Feature Image" width="123" height="106" loading="lazy">
                      </figure>
                    </div>

                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-seven.png" alt="Gallery Feature Image" width="264" height="71" loading="lazy">
                      </figure>
                    </div>

                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-two.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-three.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-four.png" alt="Gallery Feature Image" width="106" height="106" loading="lazy">
                      </figure>
                    </div>
                    <div class="swiper-slide w-auto">
                      <figure>
                        <img src="./assets/images/logo-five.png" alt="Gallery Feature Image" width="241" height="106" loading="lazy">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="px-6 w-full lg:w-[45%]">
              <div class="bg-white mt-8 lg:mt-[45px] xl:mt-20 py-4 px-5 lg:py-8 lg:px-10 rounded-[3px] relative before:absolute before:w-[256px] before:h-[6px] before:top-0 before:left-1/2 before:border-b-[6px] before:border-b-black before:-translate-x-1/2 before:-rotate-180 before:border-l-[4px] before:border-l-transparent before:border-r-[4px] before:border-r-transparent ">
                <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form text-black">
                  <div class="form-header [&_h2]:text-ss-blue-900 text-ss-gray text-center [&_h2]:mb-1 [&_p]:mb-5">
                    <div class="flex gap-1 items-center  pb-1.5 uppercase font-medium lg:text-lg text-ss-gray-900 mb-2 [&_img]:h-[19px] [&_img]:align-middle justify-center">
                      <figure>
                        <img src="./assets/images/path.png" width="21" height="19" loading="lazy" alt="icon path">
                      </figure>
                      <span>Have Any Questions?</span>
                    </div>
                    <h2>CONTACT US TODAY</h2>
                    <p>Trust our firm to deliver the results you deserve...</p>
                  </div>
                  <div class="form-section-0">
                    <div class="form-group">
                      <input class="form-control" placeholder="First name" name="first-name" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Last name" name="last-name" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Enter email address" name="email" type="email" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Enter phone number" name="phone" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Enter your message" name="message" cols="50" rows="10"></textarea>
                      <div class="messages"></div>
                    </div>
                    <!-- Google reCAPTCHA widget -->
                    <div class="form-group">
                      <div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <!-- For local testing, you can set a value here to bypass validation -->
                      <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1" />
                      <div class="messages"></div>
                    </div>

                    <!-- Honeypot field for spam detection -->
                    <div class="form-group" style="display:none;">
                      <input type="text" name="honeypot" style="display:none;" value="" />
                      <div class="messages"></div>
                    </div>

                    <!-- CSRF token field using session -->
                    <div class="form-group" style="display:none;">
                      <input type="hidden" name="csrf_token_form1" value="<?php echo $_SESSION['csrf_token_form1']; ?>" />
                      <div class="messages"></div>
                    </div>
                  </div>
                  <div class="form-footer"> <button type="submit" class="submitButton btn btn-primary w-full">
                      <span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
                      Get A Free Consultation</button></div>
                </form>
              </div>
              <div class="mt-3 lg:mt-6 xl:mt-10">
                <h2>5-star rated</h2>
                <div class="flex space-x-4">
                  <div class="flex space-x-0.5 text-ss-orange-100">
                    <i class="icon-star size-3.5 "></i>
                    <i class="icon-star size-3.5"></i>
                    <i class="icon-star size-3.5"></i>
                    <i class="icon-star size-3.5"></i>
                    <i class="icon-star size-3.5"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
  </div>
  </div>
  </section>
  <!-- Section {Section's Name Here...} -->