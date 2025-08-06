<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  $site_logo = acf_field('ss_site_logo');
  $image_url = wp_get_attachment_url($site_logo);
  $phone = acf_field('ss_contact_number');
  ?>
  <div class="site-wrapper new-lp">

    <!-- Header - starts -->
    <header class="site-header bg-white py-5 lg:p-5 border-b-[34px] border-ss-blue-400">
      <div class="container max-w-[1600px]">
        <div class="flex flex-wrap items-center gap-4">
          <a href="/" class="w-32 lg:w-60">
            <img src="<?php echo !empty($image_url) ? $image_url : get_theme_file_uri('/lp/assets/images/njr-home-services-logo.png'); ?>" width="246" height="119" loading="lazy" alt="NJR Home Services Logo">
          </a>
          <?php if (!empty($phone)) { ?>
            <div class="flex-1 flex justify-end [&_ul]:flex [&_ul]:flex-wrap [&_ul]:-mx-3 [&_li]:px-3">
              <ul>
                <li>
                  <a href="tel:7329381149" class="group flex gap-1.5 lg:text-[27px] !underline hover:opacity-70 focus:opacity-70">
                    <strong class="text-ss-blue-100 hidden md:block">Call</strong>
                    <strong class="text-primary"><?php echo $phone['title']; ?></strong>
                  </a>
                </li>
              </ul>
            </div>
          <?php } ?>
        </div>
      </div>
    </header>
    <!-- Header - ends -->

    <main class="site-content">
      <?php
      $banner_bg = acf_field('ss_banner_bg');
      $banner_bg_url = wp_get_attachment_image_url($banner_bg, 'full');
      $banner_image = acf_field('ss_banner_image');
      $banner_img_url = wp_get_attachment_image_url($banner_image, 'full');
      $banner_title = acf_field('ss_banner_heading');
      $banner_content = acf_field('ss_banner_content');
      ?>
      <!-- Hero Section -->
      <section class="relative max-lg:pb-12">
        <figure class="lg:absolute lg:right-0 lg:top-0 lg:left-auto lg:bottom-0 lg:w-3/5 lg:h-full lg:-z-[1] lg:[&_img]:h-full lg:[&_img]:w-full lg:[&_img]:object-cover">
          <img src="<?php echo !empty($banner_bg_url) ? $banner_bg_url : get_theme_file_uri('/lp/assets/images/winback-2025/hero-bg-img.jpg'); ?>" alt="Hero Background Cover Image" width="1149" height="672" loading="lazy">
        </figure>
        <div class="container max-w-[1600px]">
          <div class="flex flex-col max-lg:gap-8 lg:flex-row max-lg:pt-8">
            <!-- Left Section: Promotional Content -->
            <div class="bg-white relative z-[1] lg:before:absolute lg:before:w-56 lg:before:h-full lg:before:top-0 lg:before:left-[90%] lg:before:bottom-0 lg:before:z-[-1] lg:before:skew-x-[-4deg] lg:before:skew-y-[0deg] lg:before:bg-white lg:py-5 w-full lg:w-[35%] flex flex-col justify-center items-start text-base md:text-xl xl:text-2xl">
              <div class="max-lg:mx-auto lg:pr-[10%] max-lg:text-center">
                <?php echo !empty($banner_title) ? '<h1 class="text-4xl/tight lg:text-5xl/tight font-lead font-black [&_span]:text-primary [&_span]:italic">' . $banner_title . ' </h1>' : '';
                echo wpautop($banner_content); ?>
                <span class="italic font-normal block max-lg:mb-4 lg:py-6">Sign Up Today!</span>
                <a href="#heroForm" class="js-has-smooth btn btn-primary text-3xl/none font-medium py-4 px-6">Sign Up</a>
              </div>
            </div>
            <!-- Right Section: Sign-Up Form -->
            <div class="flex-1 lg:py-5 flex flex-col relative z-[1]">
              <div id="heroForm" class="hero-form font-calibri ml-auto max-w-[23.75rem] bg-ss-blue-200 p-5 rounded-xl [&_strong]:text-[1.125rem] [&_strong]:text-ss-blue-100 [&_strong]:font-bold [&_strong]:block [&_strong]:mb-2 [&_strong]:leading-[1.25] max-xl:mr-auto border border-primary min-[1800px]:-mr-28">
                <?php /* echo do_shortcode('[gravityform id=7 title=false description=false ajax=true]') */ ?>
                <strong><span class="text-ss-green-1">Sign Up!</span> Fill in the fields below to sign up for a contract.</strong>
                <script src="https://js.hsforms.net/forms/embed/47783146.js" defer></script>
                <div class="hs-form-frame" data-region="na1" data-form-id="c2cd0815-1f40-4c03-b39a-9f8d1308141d" data-portal-id="47783146"></div>
              </div>
            </div>
          </div>
        </div>
      </section>