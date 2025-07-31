<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <div class="site-wrapper">

    <!-- Header - starts -->
    <header class="site-header fixed top-0 left-0 right-0 bg-ss-purple py-4 z-40">
      <div class="container flex flex-wrap items-center max-md:justify-center">
        <div class="w-[80px] md:w-[104px]">
          <figure>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt="Life Purpose Institute" width="104" height="80" loading="lazy">
          </figure>
        </div>

        <div class="max-md:hidden flex-1 flex justify-end">
          <ul class="flex flex-wrap items-center gap-4 lg:gap-16">
            <li>
              <div class="relative flex items-center group cursor-pointer">
                <a class="md:text-lg font-medium flex items-center justify-center" href="tel:8584843400">
                  <i class="icon-phone bg-ss-purple-100 group-hover:bg-white size-8 md:size-[42px] rounded-full group-hover:text-primary text-white flex items-center justify-center"></i>
                  <div class="block font-bold text-white max-lg:hidden flex-1 pl-[18px] leading-none group-hover:opacity-75 transition-all">
                    <span class="capitalize block text-sm text-white/50 font-semibold">Phone Number</span>
                    858-484-3400
                  </div>
                </a>
              </div>
            </li>
            <li>
              <a href="#heroForm" class="max-sm:text-[9px] js-has-smooth btn btn-primary">Book Consultation</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">
      <!-- Hero - starts -->
      <section class="headerSpace pb-9 lg:py-9 min-h-[625px] relative z-[1] lg:flex items-end max-lg:bg-ss-purple-100">
        <div class="max-lg:hidden bg-cover absolute inset-0 -z-[1] bg-no-repeat before:bg-ss-orange/[0.4] xl:before:bg-ss-orange/[0.16] before:top-0 before:bottom-0 before:absolute before:left-0 before:right-0" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/bg-hero.jpg');"></div>
        <figure class="lg:hidden w-full mb-12">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bg-hero.jpg" width="" height="" loading="lazy" alt="Image Description">
        </figure>
        <div class="container">
          <div class="flex flex-wrap justify-between -mx-8 relative min-h-[550px]">
            <div class="px-8 w-full lg:flex-[0_0_50%] lg:max-w-[50%] xl:flex-[0_0_60%] xl:max-w-[60%] lg:pt-[42px] max-lg:mb-12 max-lg:text-white">
              <h1 class="max-xl:mb-8">Create A Positive Future With A Life Coach Certification, Proven Since 1995</h1>
              <ul class="flex flex-wrap [&_li]:px-12 [&_li]:mb-4 [&_li]:w-full md:[&_li]:w-1/2 [&_li]:pl-10 [&_li]:relative before:[&_li]:content-['\e904'] before:[&_li]:font-icomoon before:[&_li]:absolute before:[&_li]:left-0 before:[&_li]:top-[2px] before:[&_li]:text-primary lg:text-lg">
                <li>Highly Rated: 5-Star Google Reviews</li>
                <li>Over 100 Proven Techniques</li>
                <li>Personalized Coaching Programs</li>
                <li>ICF Accredited</li>
              </ul>
            </div>

            <div class="form-wrapper px-8 w-full form-block lg:flex-[0_0_50%] lg:max-w-[50%] xl:max-w-[40%] xl:flex-[0_0_40%] lg:-mb-[72px]" id="heroForm">
              <?php echo do_shortcode('[gravityform id="9" title="false" ajax=true]'); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero - ends -->