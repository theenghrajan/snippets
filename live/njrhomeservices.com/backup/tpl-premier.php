<?php

/**
 * Template Name: Premier
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package njr-home-service
 */

get_header();
?>


<div class="font-arial heading-arial heading-bold [&_.h1]:text-primary [&_.h1]:text-[38px] md:[&_.h1]:text-[44px] lg:[&_.h1]:text-[53px] xl:[&_.h1]:text-[63px]  [&_.h2]:text-[32px] md:[&_.h2]:text-[40px] lg:[&_.h2]:text-[46px] text-[20px] md:text-[24px] xl:text-[27px] text-black [&_strong]:text-primary">
    <section class="relative bg-cover bg-center pt-8 xl:pt-12 pb-20 xl:pb-12 border-t-[0.9375rem] border-b-[0.9375rem] border-ss-green-1" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/img-premier-banner.jpg')" id="banner-form">
        <div class="container max-sm:px-0">
            <div class="max-sm:px-4">
                <div class="banner-form banner-form--alt font-calibri ml-auto max-w-[23.75rem] bg-ss-blue-12 p-5 rounded-xl [&_strong]:text-[1.125rem] [&_strong]:text-primary [&_strong]:font-bold [&_strong]:block [&_strong]:mb-2 [&_strong]:leading-[1.25] max-xl:mr-auto border border-primary">
                    <strong><span class="text-ss-green-2 text-ss-green-1">Sign Up!</span> Fill in the fields below to sign up for a contract.</strong>
                    <?php echo do_shortcode('[gravityform id=15 title=false description=false ajax=true tabindex=9]') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-9 md:pt-12 xl:pt-16 space-y-8 md:space-y-10 xl:space-y-12">
        <div class="text-center max-w-[1200px] mx-auto lg:[&_.h2]:leading-[1.43] 2xl:[&_.h1]:text-[84px] [&_.h2]:text-ss-green-2">
            <h2 class="h1">The Perfect fit For Your Home</h2>
            <h3 class="h2">Get the ultimate protection from HVAC breakdowns with a Premier Heating and Cooling Plan.*</h3>
        </div>
        <p><strong> <span style="color: #0066a4;">Expensive. Inconvenient. Time-consuming. </span></strong> These words will cross your mind when your heating or cooling system or water heater inevitably breaks down. With our <strong> <span style="color: #0066a4;">Premier Heating and Cooling Plan,</span></strong> protect your budget from expensive repairs – and get the added <strong><span style="color: #0066a4;">benefit of yearly inspections </span></strong> for your heating and AC system and water heater.</p>
        <p>With a <strong> <span style="color: #0066a4;"> Premier Heating and Cooling Plan </span></strong> from <strong> <span style="color: #4a8b2d;"> NJR Home Services</span>,</strong> you don’t have to worry. If there’s ever a problem with your system, you can sleep easy knowing most repairs are covered under your <strong> <span style="color: #4a8b2d;"> protection plan!*</span></strong></p>
    </section>
    <section class="container pt-12 md:pt-16 2xl:pt-20 pb-4 text-[1.125rem] lg:text-[1.25rem] 2xl:text-[1.625rem] text-black">
        <div class="flex flex-wrap -mx-4 xl:-mx-6 mb-8 2xl:mb-12 gap-y-6">
            <div class="w-full lg:w-1/2 px-4 xl:px-6 [&_strong]:text-primary space-y-6 md:space-y-8 xl:space-y-10">
                <p>The Premier Heating and Cooling Plan includes:</p>
                <ul class="mb-4 space-y-4 2xl:space-y-6 [&_li]:relative [&_li]:pl-5 2xl:[&_li]:pl-6 [&_li]:before:absolute [&_li]:before:content-[''] [&_li]:before:top-[0.6rem] lg:[&_li]:before:top-[0.625rem] 2xl:[&_li]:before:top-5 [&_li]:before:left-0 [&_li]:before:w-1.5 [&_li]:before:h-1.5 lg:[&_li]:before:w-2 lg:[&_li]:before:h-2 2xl:[&_li]:before:w-3 2xl:[&_li]:before:h-3 [&_li]:before:rounded-full [&_li]:before:bg-ss-blue-13">

                    <li><strong>Expert, year-round service</strong> for your heating and AC system and water heater.</li>
                    <li><strong>FREE repairs</strong> on covered parts, including labor.*</li>
                    <li><strong>No trip charges</strong> or emergency service fees – even on weekends and holidays.</li>
                    <li><strong>Annual inspections</strong> of your heating and AC system and water heater.*</li>
                </ul>

            </div>
            <div class="w-full lg:w-1/2 px-4 xl:px-6">
                <picture class="lg:[&_img]:ml-auto">
                    <source srcset="<?php echo site_url(); ?>/wp-content/uploads/img-premier-equipment.png" type="image/png">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/img-premier-equipment.png" width="479" height="794" alt="Equipment Right" loading="lazy">
                </picture>
            </div>
        </div>

    </section>
    <section class="container lg:max-w-[1030px] py-6 md:py-8 xl:py-12">
        <div class="border-[0.375rem] text-center leading-[1.2] border-ss-green-1 py-6 sm:py-8 xl:py-12 px-4 sm:px-8 lg:px-12 2xl:px-16">
            <h2 class="h1">Premier Heating and Cooling Plan</h2>
            <h3 class="h2">$40.07 per month</h3>
            <p>Includes coverage for one natural gas heating unit, one central air conditioner and one standard water heater.</p>
        </div>
    </section>
    <section class="flex flex-wrap items-center -mx-4 px-4 gap-y-4 py-6 md:py-9 xl:py-12">
        <div class="w-full lg:w-3/12 px-4">
            <picture class="max-w-[90px] lg:max-w-[192px] mx-auto mb-0">
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-up.png" type="image/png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-up.png" width="192" height="200" alt="puzzle piece" loading="lazy">
            </picture>
        </div>
        <div class="w-full lg:w-6/12 px-4">
            <div class="bg-ss-green-2 text-center rounded-[25px] text-white text-[24px] sm:text-[28px] md:text-[32px] xl:text-[40px] title-white p-4 leading-normal last-of-type:[&_p]:mb-0 [&_a:not(.btn)]:text-white [&_a:not(.btn)]:inline-block [&_a:not(.btn)]:font-bold">
                <p>For more information, fill in the <strong><a href="#banner-form">form</a> </strong> or call<strong> <a href="tel:877-851-1975">877-851-1975</a></strong>
                </p>
            </div>
        </div>
        <div class="w-full lg:w-3/12 px-4">
            <picture class="max-w-[90px] lg:max-w-[192px] mx-auto mb-0">
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-down.png" type="image/png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-down.png" width="192" height="200" alt="puzzle piece" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="container  text-black py-9 lg:py-12 xl:py-16 text-[16px] xl:text-[18px] leading-[1.33] 2xl:max-w-[1330px] space-y-6 md:space-y-8 xl:space-y-10">
        <p>*NJR Home Services is not the same company as New Jersey Natural Gas, the utility, and is not regulated by the New Jersey Board of Public Utilities. You do not have to buy products or services from NJR Home Services in order to continue receiving regulated services from New Jersey Natural Gas. Electrical Contractor Bus. Permit #34EB01231200 NJ Home Improvement #13VH00361500. 1415 Wyckoff Road, Wall, NJ. Not valid on prior purchases and cannot be combined with any other offer. Terms and conditions apply. Price and offer subject to change without notice. Detailed terms and conditions are available at <a href="/terms-conditions/"><strong>njrhomeservices.com/terms-conditions</strong></a> and by mail upon request. Inspection scheduling subject to availability and weather conditions.</p>
    </section>
</div>
<?php
get_footer();
