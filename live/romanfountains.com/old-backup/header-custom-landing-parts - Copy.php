<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="site-wrapper">

    <header class="site-header">
      <div class="header-bottom transition-all bg-black/90">
        <div class="container py-5 flex items-center justify-between">
          <div class="[&_figure]:inline-block [&_figure]:w-[110px] sm:[&_figure]:w-[130px] lg:[&_figure]:w-[200px]">
            <figure>
              <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/site-logo.png" alt="Roman fountains logo" width="200" height="50" loading="lazy">
            </figure>
          </div>
          <div class="flex items-center md:space-x-6 lg:space-x-10">
            <a href="tel:8339981855" class="flex justify-between items-center hover:text-white text-white space-x-2">
              <i class="icon-header-call flex items-center justify-center bg-primary hover:bg-primary/90 size-9 lg:size-14 rounded-full"></i>
              <span class="lg:flex flex-col text-base hidden">
                <span class="text-xs leading-loose">Phone Number</span>
                <span class="font-bold leading-tight">833-998-1855</span>
              </span>
            </a>
            <a href="#heroForm" class="js-has-smooth btn btn-primary fixed top-full left-0 right-0 md:static rounded-none md:rounded">
              Speak With One of Our Fountain Experts
            </a>
          </div>
        </div>
      </div>
    </header>
    <!-- /.site-header -->

    <main class="site-content">

      <section class="group-block overflow-hidden flex items-center pt-60 pb-24 md:pb-36 lg:py-36 min-h-[600px] lg:min-h-[800px] relative z-[1] [&_.bg-slider]:absolute [&_.bg-slider]:inset-0 [&_.bg-slider]:z-[-2] before:inset-0 before:absolute before:bg-black/50 before:z-[-1]">
        <div class="swiper bg-slider [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <figure class="w-full h-full [&_img]:object-cover [&_img]:object-top [&_img]:w-full [&_img]:h-full">
                <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hero-bg-cover-img01.jpg" width="1440" height="800" loading="lazy" alt="Hero Background Cover Image">
              </figure>
            </div> <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <figure class="w-full h-full [&_img]:object-cover [&_img]:object-top [&_img]:w-full [&_img]:h-full">
                <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hero-bg-cover-img02.jpg" width="1440" height="800" loading="lazy" alt="Hero Background Cover Image">
              </figure>
            </div> <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <figure class="w-full h-full [&_img]:object-cover [&_img]:object-top [&_img]:w-full [&_img]:h-full">
                <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hero-bg-cover-img03.jpg" width="1440" height="800" loading="lazy" alt="Hero Background Cover Image">
              </figure>
            </div> <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <figure class="w-full h-full [&_img]:object-cover [&_img]:object-top [&_img]:w-full [&_img]:h-full">
                <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hero-bg-cover-img04.jpg" width="1440" height="800" loading="lazy" alt="Hero Background Cover Image">
              </figure>
            </div> <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <figure class="w-full h-full [&_img]:object-cover [&_img]:object-top [&_img]:w-full [&_img]:h-full">
                <img src="<?php echo get_theme_file_uri(); ?>/custom/assets/images/hero-bg-cover-img05.jpg" width="1440" height="800" loading="lazy" alt="Hero Background Cover Image">
              </figure>
            </div> <!-- /.swiper-slide -->
          </div>
        </div>
        <div class="absolute top-0 left-1/2 bottom-0 w-[60%] -translate-x-1/2 z-[-1] " style="background: rgba(35, 91, 168, 0.47);
          filter: blur(237px);"></div>
        <div class="container">
          <div class="text-center [&_p]:font-bold [&_p]:text-white/80 text-white lg:[&_h1]:mb-5">
            <h1><?php the_field('ss_hero_title'); ?></h1>
            <?php the_field('ss_hero_description'); ?>
          </div>
        </div>
      </section>
      <!-- /.group-block {Hero} -->