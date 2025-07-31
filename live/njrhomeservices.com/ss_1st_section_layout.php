<?php
$value = $args['values'];

$form_title = acf_subfield($value, 'ss_form_title');
$highlighted_content = acf_subfield($value, 'ss_highlighted_content');
$image = acf_subfield($value, 'ss_image');
$form_id = acf_subfield($value, 'ss_form_id');
?>

<?php if (!empty($form_title) || !empty($highlighted_content) || !empty($image) || !empty($form_id)) { ?>
    <section class="relative bg-cover bg-center pt-8 xl:pt-12 pb-20 xl:pb-12 border-t-[0.9375rem] border-b-[0.9375rem] border-ss-green-1" style="background-image: url('<?php if (!empty($image)) { echo wp_get_attachment_url($image); } else { echo site_url() . '/wp-content/uploads/img-premier-banner.jpg'; } ?>)">
        <div class="container max-sm:px-0">
            <div class="max-sm:px-4">
                <div id="form" class="banner-form banner-form--alt font-calibri ml-auto max-w-[23.75rem] bg-ss-blue-12 p-5 rounded-xl [&_strong]:text-[1.125rem] [&_strong]:text-primary [&_strong]:font-bold [&_strong]:block [&_strong]:mb-2 [&_strong]:leading-[1.25] max-xl:mr-auto border border-primary">
                    <?php if (!empty($form_title) || !empty($highlighted_content)) { ?> <strong><?php if (!empty($highlighted_content)) { ?><span class="text-ss-green-1"><?php echo $highlighted_content; ?></span><?php } ?> <?php echo $form_title; ?></strong> <?php } ?>
                    <?php if (!empty($form_id)) { ?>
                        <?php echo do_shortcode('[gravityform id=' . $form_id . ' title=false description=false ajax=true tabindex=9]') ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>