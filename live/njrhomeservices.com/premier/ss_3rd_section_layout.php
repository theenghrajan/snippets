<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$offer_lists = acf_repeater($value, get_the_ID(), 'ss_offer_lists');
$image = acf_subfield($value, 'ss_image');
if (!empty($title) || !empty($offer_lists) || !empty($image)) {
?>
    <section class="container pt-12 md:pt-16 2xl:pt-20 pb-4 text-[1.125rem] lg:text-[1.25rem] 2xl:text-[1.625rem] text-black">
        <div class="flex flex-wrap -mx-4 xl:-mx-6 mb-8 2xl:mb-12 gap-y-6">
            <div class="w-full lg:w-1/2 px-4 xl:px-6 [&_strong]:text-primary space-y-6 md:space-y-8 xl:space-y-10">
                <?php if (!empty($title)) { ?>
                    <?php echo !empty($title) ? '<p>' . $title . '</p>' : ''; ?>
                <?php } ?>
                <?php if (!empty($offer_lists)) { ?>
                    <ul class="mb-4 space-y-4 2xl:space-y-6 [&_li]:relative [&_li]:pl-5 2xl:[&_li]:pl-6 [&_li]:before:absolute [&_li]:before:content-[''] [&_li]:before:top-[0.6rem] lg:[&_li]:before:top-[0.625rem] 2xl:[&_li]:before:top-5 [&_li]:before:left-0 [&_li]:before:w-1.5 [&_li]:before:h-1.5 lg:[&_li]:before:w-2 lg:[&_li]:before:h-2 2xl:[&_li]:before:w-3 2xl:[&_li]:before:h-3 [&_li]:before:rounded-full [&_li]:before:bg-ss-blue-13">
                        <?php foreach ($offer_lists as $offer) {
                            $offer_content = acf_subfield($offer, 'ss_offer_content');
                            if (!empty($offer_content)) { ?>
                                <li><?php echo $offer_content; ?></li>
                        <?php }
                        } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="w-full lg:w-1/2 px-4 xl:px-6">
                <?php if ($image) {
                    $alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);
                    $image_url = wp_get_attachment_url($image);
                    $image_type = get_post_mime_type($image);
                ?>
                    <picture class="lg:[&_img]:ml-auto">
                        <source srcset="<?php echo $image_url; ?>" type="<?php echo $image_type; ?>">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $alt; ?>" width="479" height="794" loading="lazy">
                    </picture>
                <?php } else { ?>
                    <picture class="lg:[&_img]:ml-auto">
                        <source srcset="<?php echo site_url(); ?>/wp-content/uploads/img-premier-equipment.png" type="image/png">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/img-premier-equipment.png" width="479" height="794" alt="Equipment Right" loading="lazy">
                    </picture>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>