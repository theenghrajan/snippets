<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$content = acf_subfield($value, 'ss_content');
$featured_image = acf_subfield($value, 'ss_featured_image');
$featured_image_url = wp_get_attachment_image_url($featured_image, 'full');
if (!empty($title) || !empty($content) || !empty($featured_image)) {
?>
  <section class="container pb-3">
    <div class="flex flex-col md:flex-row items-center md:items-start justify-center lg:gap-y-5">
      <?php if (!empty($title) || !empty($content)) { ?>
        <div class="py-8 max-xl:px-3 lg:py-16 md:w-[70%] md:text-left lg:[&_h2]:pb-[15px] [&_h2]:text-ss-blue-400 xl:text-[2.25rem]/tight">
          <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : '';
          echo wpautop($content); ?>
        </div>
      <?php }
      if (!empty($featured_image_url)) { ?>
        <div class="md:w-[30%] flex justify-center md:justify-end ">
          <div class="2xl:ml-[-130px] relative z-[-1] max-lg:[&_img]:max-h-[350px] max-lg:[&_img]:object-contain">
            <img src="<?php echo !empty($featured_image_url) ? $featured_image_url : get_theme_file_uri('/lp/assets/images/winback-2025/adiitional-equipment-img.png'); ?>" alt="Equipments" width="531px" height="531px" loading="lazy">
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>