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
    <?php
    $rows = acf_flexible('ss_premier_flexible_content', get_the_ID());

    foreach ($rows as $key => $value) {
        if ($key) {
            if ($value == 'small_page_banner') {
                display_dav_banner($key);
            } else {
                get_template_part('template-parts/premier/' . $value, null, array('values' => $key));
            }
        }
    }
    ?>
</div>

<?php
get_footer();
