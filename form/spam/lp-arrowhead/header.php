<?php
// Start session: Added by FED(GS) on 7th Feb 2025
session_start();

// Generate CSRF token and store in session variable
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  <title>Arrowhead</title>
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WGF3896J');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGF3896J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="site-wrapper">

    <!-- Header - starts -->
    <div class="sm:hidden">
      <a href="#footer-form" class="js-has-smooth btn btn-primary w-full rounded-none">Contact Us</a>
    </div>

    <header class="site-header absolute top-[50px] sm:top-0 left-0 right-0 w-full pb-3 lg:pb-4 z-[999] transition-all duration-300">
      <div class="container">
        <div class="flex justify-between items-center border-b border-white/70 py-4 lg:py-5">
          <figure class="max-w-[180px] sm:max-w-[200px] md:max-w-[240px] lg:max-w-[260px] xl:max-w-[295px]">
            <img src="assets/images/site-logo.webp" alt=" Logo" width="589" height="135" loading="lazy">
          </figure>

          <div class="pl-4 flex items-center justify-end flex-wrap gap-y-2 gap-x-4 lg:gap-14">
            <ul class="flex items-center [&_li]:inline-block [&_li]:mx-1 lg:[&_li]:mx-2 xl:[&_li]:mx-2.5 [&_li:first-child]:ml-0 [&_li:last-child]:mr-0">
              <li>
                <a href="mailto:admin@arrowheadmanor.com" class="text-white relative inline-flex items-center duration-300 group hover:text-primary">
                  <span class="bg-transparent border border-ss-yellow-200 p-0.5 flex justify-center items-center [&_i]:text-ss-dark w-10 h-10 rounded-full transition-all group-hover:border-primary duration-300">
                    <i class="icon-mail-alt w-8 h-8 p-1 flex items-center justify-center bg-ss-yellow-200 rounded-full text-base transition-all duration-300 group-hover:bg-primary group-hover:text-white"></i>
                  </span>
                  <span class="max-lg:hidden text-lg font-medium leading-7 ml-2 lg:ml-2.5 xl:ml-[14px]">admin@arrowheadmanor.com</span>
                </a>
              </li>
              <li class="max-sm:!mr-0">
                <a href="tel:3037388454" class="text-white relative inline-flex items-center duration-300 group hover:text-primary">
                  <span class="bg-transparent border border-ss-yellow-200 p-0.5 flex justify-center items-center [&_i]:text-ss-dark w-10 h-10 rounded-full transition-all group-hover:border-primary duration-300">
                    <i class="icon-phone-alt w-8 h-8 p-1 flex items-center justify-center bg-ss-yellow-200 rounded-full text-base transition-all duration-300 group-hover:bg-primary group-hover:text-white"></i>
                  </span>
                  <span class="max-lg:hidden text-lg font-medium leading-7 ml-2 lg:ml-2.5 xl:ml-[14px]">303-738-8454</span>
                </a>
              </li>
              <li class="max-sm:!hidden">
                <div>
                  <a href="#footer-form" class="js-has-smooth btn btn-primary">Contact Us</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">
      <section class="text-white bg-cover bg-no-repeat bg-center bg-[url(../../assets/images/hero-bg.webp)]">
        <div class="container">
          <div class="flex min-h-[720px] sm:min-h-[780px] lg:min-h-[840px] xl:min-h-[920px] pt-32 lg:pt-36 pb-8 lg:pb-10 flex-col justify-end">
            <div class="lg:max-w-[840px] mb-6 sm:mb-8 lg:mb-10 last:[&_p]:mb-0 [&_p]:text-white/90">
              <h1 class="mb-4 lg:mb-6 uppercase">Bed and Breakfast <br class="max-lg:hidden"> Denver - Red Rocks hotel</h1>
              <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus di optio cumque nihil impedit.</p> -->
            </div>

            <div id="heroForm" class="hero-form relative lg:flex lg:items-center lg:justify-between">
              <div class="lg:max-w-[840px] xl:max-w-[880px]">
                <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
                  <div class="form-section-0 flex flex-wrap -mx-[9px]">
                    <div class="form-group w-full md:w-1/2 lg:w-1/3 px-[9px]">
                      <input class="form-control" placeholder="Name" name="full-name" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group w-full md:w-1/2 lg:w-1/3 px-[9px]">
                      <input class="form-control" placeholder="Email" name="email" type="email" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group w-full md:w-1/2 lg:w-1/3 px-[9px]">
                      <input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group w-full md:w-1/2 lg:w-2/3 px-[9px]">
                      <textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
                      <div class="messages"></div>
                    </div>
                    <div class="form-footer w-full lg:w-1/3 px-[9px]">
                      <button type="submit" class="submitButton btn btn-primary w-full">
                        <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Book Now </button>
                    </div>
                    <div class="form-group m-0 w-full px-[9px]">
                    	<div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
                    	<div class="messages"></div>
                    </div>
                    <div class="form-group m-0 w-full px-[9px]">
                    	<!-- You can enter a value here manually during local testing, That will bypass the validation -->
                    	<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
                    	<div class="messages"></div>
                    </div>
                    <!-- Hidden honepot fields for spam detection validation : Added by FED(GS) on 7th Feb 2025 -->
                    <div class="form-group" style="display:none;">
                        <input type="text" name="honeypot" style="display:none;" value="">
                        <div class="messages"></div>
                    </div>
                    <!-- Hidden CSRF Token validation using Session : Added by FED(GS) on 7th Feb 2025 -->
                    <div class="form-group" style="display:none;">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="messages"></div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="scroll-btn text-center mt-4 lg:mt-0">
                <a href="#discover" class="js-has-smooth inline-block text-white">
                  <figure class="max-w-[110px] inline-block relative before:absolute before:z-[3] before:top-1/2 before:-translate-y-1/2 before:left-1/2 before:-translate-x-1/2 before:font-icomoon before:content-['\e90e'] before:text-[50px] before:leading-[1] before:text-ss-dark">
                    <img class="animate-hero-slow" src="./assets/images/scroll-down-img.webp" width="224" height="221" alt="Scroll Down Image" loading="lazy">
                  </figure>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero Section -->