<?php
$value = $args['values'];
$content = acf_subfield($value, 'ss_content');
if (!empty($content)) {
?>
<section class="flex flex-wrap items-center -mx-4 px-4 gap-y-4 py-6 md:py-9 xl:py-12">
    <div class="w-full lg:w-3/12 px-4">
        <picture class="max-w-[90px] lg:max-w-[192px] mx-auto mb-0">
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-up.png" type="image/png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-up.png" width="192" height="200" alt="puzzle piece" loading="lazy">
        </picture>
    </div>
    <div class="w-full lg:w-6/12 px-4">
        <div class="bg-ss-green-2 text-center rounded-[25px] text-white text-[24px] sm:text-[28px] md:text-[32px] xl:text-[40px] title-white p-4 leading-normal last-of-type:[&_p]:mb-0 [&_a:not(.btn)]:text-white [&_a:not(.btn)]:inline-block [&_a:not(.btn)]:font-bold [&_a:not(.btn)]:no-underline">
            <?php echo wpautop($content); ?>
        </div>
    </div>
    <div class="w-full lg:w-3/12 px-4">
        <picture class="max-w-[90px] lg:max-w-[192px] mx-auto mb-0">
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-down.png" type="image/png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/puzzle-piece-down.png" width="192" height="200" alt="puzzle piece" loading="lazy">
        </picture>
    </div>
</section>
<?php } ?>