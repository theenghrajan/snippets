<?php  
// Start session: Added by FED(RT) on 8th Apr 2025
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
  <title>Serene Comfort</title>
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Outfit:wght@100..900&display=swap"
    rel="stylesheet">
  <!-- Fonts -->
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M587WG6G');</script>
<!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M587WG6G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header">
      <div class="container absolute top-4 md:top-6 left-0 right-0 z-10">
        <div class="bg-white rounded-full sm:py-3 p-2 sm:px-6">
          <div class="flex items-center flex-wrap justify-between">
            <figure class="max-sm:max-w-32">
              <img src="assets/images/site-logo.jpg" width="177" height="64" alt="Header Logo" loading="lazy">
            </figure>
            <div
              class="relative inline-flex gap-3 items-center group md:bg-white shadow-[0px_4px_14px_0px_rgba(0,0, 0,0.16)] rounded-full pl-4 pr-5 py-3">
              <a href="tel:2487651714" class="stretched-link">
                <i
                  class="icon-call border-[0.815px] text-xl size-10 flex justify-center items-center border-ss-green bg-transparent rounded-full group-hover:bg-ss-green group-hover:text-white transition-all duration-300 text-ss-green max-md:bg-white"></i>
              </a>
              <div class="[&_p]:mb-0 text-black/70 group-hover:text-black transition-all text-sm max-md:hidden">
                <p>Call Us Now</p>
                <strong
                  class="font-lead text-[20px] text-ss-green leading-8 tracking-[0.4px] group-hover:text-black transition-all">(248) 765-1714</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">

      <section class="bg-[url('../../assets/images/banner-bg.jpg')] bg-no-repeat bg-[center_right] md:bg-cover md:bg-top md:pb-36 lg:pb-[202px] py-36 md:pt-40 lg:pt-[216px] relative z-[1] before:absolute before:inset-0 before:bg-[linear-gradient(270deg,rgba(0,0,0,0.19)_27.03%,rgba(0,0,0,0.42)_37.39%,rgba(0,0,0,0.73)_51.77%,rgba(0,0,0,0.89)_75.73%,#000_98.49%)] before:z-[-1]">
        <div class="container">
          <div class="max-w-4xl text-white/80 [&_h1]:text-white [&_p]:leading-[1.75] [&_h1]:mb-6">
            <h1>Air Conditioning & Furnace Repair <nobr>Service
                <span class="relative z-[1] before:absolute before:z-[-1] before:bottom-0 lg:before:bottom-3 before:bg-ss-orange-200 before:w-full before:h-3">Experts
              </nobr></span>
            </h1>
            <div class="max-w-2xl">
              <p>Welcome to <strong class="text-white">Serene Comfort Heating, Cooling and Refrigeration!</strong> From
                your home furnace and air conditioner
                to your
                businesses roof top units and refrigeration systems, we do it all. Our team of
                professionals will work with you from maintenance to service or replacing your
                whole heating and air conditioning system.</p>
            </div>
            <div class="mt-8 lg:mt-10 flex items-center flex-wrap gap-6">
              <a href="#headerForm" class="btn btn-primary js-has-smooth">Contact Us Today</a>
              <a href="tel:2487651714" class="btn btn-outline">Call (248) 765-1714</a>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section {Hero} -->

      <section class="relative z-[2] -mt-20 -mb-[9.3rem]">
        <div class="container">
          <div class="relative before:absolute before:left-0 before:right-0 before:-bottom-3 md:before:-bottom-5 before:w-full before:h-[90%] before:max-w-[1280px] before:bg-ss-green before:z-[-1] before:rounded px-3 md:px-5">
            <div id="headerForm" class="lg:max-w-[1240px] mx-auto bg-ss-orange-200 text-black py-5 md:py-6 lg::py-9 px-3 sm:px-5 md:px-8 rounded shadow-[0px_4px_32px_0px_rgba(0,0,0,0.16);] ">
              <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form justify-center flex flex-wrap -mx-7">
                <div class="form-header w-full lg:w-[27%] px-7 max-sm:mb-4 max-lg:mb-5">
                  <h2 class="h4">Get a System Assessment</h2>
                  <p>Contact us today for a system assessment and discover the perfect air conditioning, furnace and water heater solution for your home!</p>
                </div>
                <div class="w-full lg:w-[73%] px-7">
                  <div class="form-section-0 flex flex-wrap -mx-[10px]">
                    <div class="form-group">
                      <input class="form-control" placeholder="Full Name" name="full-name" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Email Address" name="email" type="email" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group max-md:w-full">
                      <input class="form-control" placeholder="Phone Number" name="phone" type="text" value="">
                      <div class="messages"></div>
                    </div>
                    <div class="form-group w-full">
                      <textarea class="form-control" placeholder="Your Message Here..." name="your-message-here"
                        cols="50" rows="10"></textarea>
                      <div class="messages"></div>
                    </div>
                    <div class="form-group">
                    	<div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
                    	<div class="messages"></div>
                    </div>
                    <div class="form-group">
                    	<!-- You can enter a value here manually during local testing, That will bypass the validation -->
                    	<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
                    	<div class="messages"></div>
                    </div>
                    <!-- Hidden honepot fields for spam detection validation : Added by FED(RT) on 8th Apr 2025 -->
    				<div class="form-group" style="display:none;">
    					<input type="text" name="honeypot" style="display:none;" value="">
    					<div class="messages"></div>
    				</div>
    				<!-- Hidden CSRF Token validation using Session : Added by FED(RT) on 8th Apr 2025 -->
    				<div class="form-group" style="display:none;">
    					<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    					<div class="messages"></div>
    				</div>
                  </div>
                  <div class="form-footer w-full md:w-4/12 px-[10px]"> <button type="submit"
                        class="submitButton btn btn-primary w-full">
                        <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"
                          style="display: none">
                          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                          </circle>
                          <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                          </path>
                        </svg>
                        Contact Us </button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /Section {Form} -->