<?php

/** ----------------------------------------------
 * function: sanitize data
 * ----------------------------------------------- */
function clean($data)
{
  $data = htmlspecialchars($data);
  $data = stripslashes($data);
  $data = trim($data);
  return $data;
}
/** ---------------------------------------------- */
/** ----------------------------------------------
 * UTM Parameters
 * from URL
 * ----------------------------------------------- */
$utm_source = isset($_GET['utm_source']) ? clean($_GET['utm_source']) : '';
$utm_medium = isset($_GET['utm_medium']) ? clean($_GET['utm_medium']) : '';
$utm_campaign = isset($_GET['utm_campaign']) ? clean($_GET['utm_campaign']) : '';
$gclid = isset($_GET['gclid']) ? clean($_GET['gclid']) : '';
$msclkid = isset($_GET['msclkid']) ? clean($_GET['msclkid']) : '';
//echo $_GET['utm_source'];

//echo "GET PARAMETERS: ".$_GET['gyan'];
/** ---------------------------------------------- */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  <title>Premier Fat Camp</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header fixed top-0 inset-x-0 z-50 pt-7 px-4 sm:px-6 lg:px-20 pb-7 border-b border-white/30 transition duration-200 [&.sticky-header]:transition [&.sticky-header]:duration-200 [&.sticky-header]:bg-black/90 [&.sticky-header]:pt-4 [&.sticky-header]:pb-4 max-md:bg-black">
      <div class="container flex items-center justify-between">
        <figure class="lg:flex-shrink-0 mr-4">
          <img src="assets/images/premier-fitness-camp-logo.png" alt="Premier Fitness Camp Logo" width="247" height="48" loading="lazy">
        </figure>
        <nav class="flex items-center lg:gap-6">
          <ul class="flex items-center gap-4 md:mr-4 lg:gap-6">
            <li class="lg:flex items-center">
              <a href="mailto:info@premierfitnesscamp.com" class="text-white flex items-center group transition duration-200">
                <i class="icon-mail text-primary transition duration-200 lg:pr-2 max-lg:text-xl group-hover:scale-125 group-hover:text-primary/80 group-focus:scale-125 group-focus:text-primary/80"></i>
                <span class="hidden lg:block whitespace-nowrap max-xl:text-sm">info@premierfitnesscamp.com</span>
              </a>
            </li>
            <li class="lg:flex items-center">
              <a href="tel:8884888936" class="text-white flex items-center group transition duration-200">
                <i class="icon-call text-primary transition duration-200 lg:pr-2 max-lg:text-xl group-hover:scale-125 group-hover:text-primary/80 group-focus:scale-125 group-focus:text-primary/80"></i>
                <span class="hidden lg:block whitespace-nowrap max-xl:text-sm">(888) 488-8936</span>
              </a>
            </li>
          </ul>
          <!-- Book a Consult Button -->
          <a class="js-has-smooth js-mobile-sticky-top-btn btn btn-primary border-none bg-white text-primary max-xl:p-4 max-xl:text-sm max-md:fixed max-md:inset-x-0 max-md:top-0" href="#heroForm">BOOK A CONSULT</a>
        </nav>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content lg:pb-24">

      <section class="hero bg-black/70 relative z-[1] overflow-hidden min-h-96 md:min-h-[47.9375rem] md:before:absolute md:before:top-0 md:before:inset-x-0 md:before:h-[214px] md:before:bg-[linear-gradient(180deg,_#000_49.76%,_rgba(0,0,0,0.00)_100%)] md:before:-z-[1] before:opacity-50 after:inset-0 after:absolute after:bg-[linear-gradient(0deg,_rgba(0,0,0,0.34)_0%,_rgba(0,_0,_0,_0.34)_100%)] after:-z-[1] max-md:mt-7">
        <div class="md:absolute md:-z-[2] md:inset-0">
          <video width="1440" height="767" playsinline autoplay loop muted poster="#" class="object-cover object-center w-full h-full">
            <source src="assets/videos/hero-feature-video.mp4" type="video/mp4">
            <source src="assets/videos/hero-feature-video.webm" type="video/webm">
            Sorry, your browser doesn\'t support embedded videos, <a href="assets/videos/hero-feature-video.mp4">download</a> and watch with your favorite video player!
          </video>
        </div>
        <div class="container grid lg:grid-cols-2 items-center gap-8 lg:gap-8 xl:gap-12 py-12 lg:py-16 xl:pb-24">
          <div class="text-white text-lg lg:text-xl max-w-[39.5rem] xl:min-w-[39.5rem] max-lg:text-center max-lg:mx-auto">
            <h1 class="text-white drop-shadow-[0px_1px_28px_rgba(0,0,0,0.50)] xl:leading-[62px] font-lora mb-5 lg:mb-6"><span class="text-primary">#1 Fat Camp</span> for Adults Your Future Starts Here</h1>
            <p>Ready to reclaim your health & transform your life? Our fat camp offers real results in a supportive, luxurious environment tailored to your goals, whether it's fat loss or a total lifestyle shift.</p>
          </div>
          <div id="heroForm" class="mx-auto lg:mr-0 lg:ml-auto max-w-[29.5rem] bg-[linear-gradient(180deg,_rgba(255,255,255,0.18)_0%,_rgba(255,255,255,0.11)_100%)] border border-white/[0.15] backdrop-blur-xl p-6 lg:p-8">
            <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
              <div class="form-header text-white font-urbanist text-center">
                <h2 class="text-lg lg:text-xl xl:text-2xl font-lora text-primary font-medium uppercase">Schedule Your Personalized Consultation</h2>
                <p>Excited to Connect! We'll Reach Out With Expert Guidance to Help You Start Your Transformative Journey.</p>
              </div>

              <div class="form-section-0 grid lg:grid-cols-2 lg:gap-x-6 mb-6 lg:mb-9">
                <div class="form-group lg:col-span-2">
                  <input class="form-control text-white placeholder:text-white/50 border-white/[0.1] focus:text-white" placeholder="Full Name" name="full-name" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <input class="form-control text-white placeholder:text-white/50 border-white/[0.1] focus:text-white" placeholder="Email Address" name="email" type="email" value="">
                  <div class="messages"></div>
                </div>
                <div class="form-group">
                  <input class="form-control text-white placeholder:text-white/50 border-white/[0.1] focus:text-white" placeholder="Phone Number" name="phone-number" type="text" value="">
                  <div class="messages"></div>
                </div>
                <div class="form-group lg:col-span-2">
                  <select class="form-control text-white/50 placeholder:text-white/50 border-white/[0.1] [&_select]:text-white/50 focus:text-white" name="when-would-you-like-to-start" id="rPD6p">
                    <option value="">When would you like to start</option>
                    <option value="ASAP">ASAP</option>
                    <option value="1-3 months">1-3 months</option>
                    <option value="3-6 months">3-6 months</option>
                    <option value="6+ months">6+ months</option>
                    <option value="Not Sure">Not Sure</option>
                  </select>
                  <!-- Add more options if needed -->
                  <div class="messages"></div>
                </div>
                <div class="form-group lg:col-span-2 [&_textarea.form-control]:min-h-16 [&_textarea.form-control]:h-16 [&_textarea.form-control]:overflow-hidden [&_textarea.form-control]:resize-none">
                  <textarea class="form-control text-white placeholder:text-white/50 border-white/[0.1] focus:text-white" placeholder="Your Message Here..." name="your-message-here" cols="50" rows="10"></textarea>
                  <div class="messages"></div>
                </div>
                <div class="form-group m-0">
                  <div class="g-recaptcha-v2-visible" id="g-recaptcha-0"></div>
                  <div class="messages"></div>
                </div>
                <div class="form-group m-0">
                  <!-- You can enter a value here manually during local testing, That will bypass the validation -->
                  <input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-0">
                  <div class="messages"></div>
                </div>
                <div class="form-group m-0">
                  <input type="hidden" name="utm-source" value="<?php echo $utm_source; ?>">
                  <input type="hidden" name="utm-medium" value="<?php echo $utm_medium; ?>">
                  <input type="hidden" name="utm-campaign" value="<?php echo $utm_campaign; ?>">
                  <input type="hidden" name="gclid" value="<?php echo $gclid; ?>">
                  <input type="hidden" name="msclkid" value="<?php echo $msclkid; ?>">
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="submitButton btn btn-primary w-full">
                  <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                  </svg>
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- /section {Hero} -->