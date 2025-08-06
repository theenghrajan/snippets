<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$content = acf_subfield($value, 'ss_content');
$featured_image = acf_subfield($value, 'ss_featured_image');
$featured_image_url = wp_get_attachment_image_url($featured_image, 'full');
if (!empty($title) || !empty($content) || !empty($featured_image)) {
?>
  <section class="bg-ss-gray max-lg:pb-4 lg:pr-[140px] bg-[#EBF0F3]">
    <div class="flex flex-col lg:flex-row justify-center gap-y-10 lg:gap-[65px] [&_img]:w-full">
      <?php if (!empty($featured_image_url)) { ?>
        <figure class="max-lg:[&_img]:h-[400px] w-[100%] lg:w-[40%] clip-path [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:object-center">
          <img src="<?php echo !empty($featured_image_url) ? $featured_image_url : get_theme_file_uri('/lp/assets/images/winback-2025/repair-and-installtion-img.jpg'); ?>" alt="repairs, and installation" width="689" height="759" loading="lazy">
        </figure>
      <?php }
      if (!empty($title) || !empty($content)) { ?>
        <div class="self-center w-[100%] max-lg:px-4 lg:py-8 lg:w-[60%] [&_h2]:text-ss-blue-400 [&_h2]:font-bold lg:[&_h2]:mb-8 font-medium lg:text-2xl">
          <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : '';
          echo wpautop($content); ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>