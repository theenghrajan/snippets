<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$subtitle = acf_subfield($value, 'ss_sub_title');
$content = acf_subfield($value, 'ss_content');
$save_garphic = acf_subfield($value, 'ss_save_graphic');
if (!empty($title) || !empty($subtitle) || !empty($content) || !empty($save_garphic)) {
?>
    <section class="container lg:max-w-[1030px] py-6 md:py-8 xl:py-12">
        <div class="relative border-[0.375rem] text-center leading-[1.2] border-ss-green-1 py-6 sm:py-8 xl:py-12 px-4 sm:px-8 lg:pr-12 lg:pl-28 2xl:pr-16 lg:ml-28 [&_small]:block [&_small]:text-2xl">
            <?php if ($save_garphic) {
                $alt = get_post_meta($save_garphic, '_wp_attachment_image_alt', TRUE);
                $image_url = wp_get_attachment_url($save_garphic);
            ?>
                <figure class="[&_img]:mx-auto lg:absolute lg:top-1/2 lg:-translate-y-1/2 lg:-left-28">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>" width="208" height="209" loading="lazy">
                </figure>
            <?php } ?>
            <?php echo !empty($title) ? '<h2 class="h1">' . $title . '</h2>' : '';
            echo !empty($content) ? '<h3 class="h2">' . $subtitle . '</h3>' : '';
            echo wpautop($content); ?>
        </div>
    </section>
<?php } ?>