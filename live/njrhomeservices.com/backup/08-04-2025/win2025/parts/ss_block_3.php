<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$content = acf_subfield($value, 'ss_content');
$icon_lists = acf_repeater($value, get_the_ID(), 'ss_icon_lists');
if (!empty($title) || !empty($content) || !empty($icon_lists)) {
?>
  <section class="bg-[#4A8B2C]/20 py-8 sm:py-[50px] px-[20px] font-lead">
    <div class="container sm:[&_ul]:pl-[20px] lg:[&_ul]:pl-[40px] [&_ul]:space-y-3 sm:[&_ul]:space-y-6 lg:[&_ul]:space-y-10">
      <?php echo !empty($title) ? '<h2 class="lg:text-4xl text-center mb-10">' . $title . '</h2>' : ''; ?>
      <?php if (!empty($icon_lists)) { ?>
        <div class="max-w-5xl mx-auto mb-8 lg:mb-12 space-y-6 lg:space-y-8">
          <?php foreach ($icon_lists as $list) {
            $icon_image = acf_subfield($list, 'ss_icon_image');
            $icon_url = wp_get_attachment_image_url($icon_image, 'full');
            $values_text = acf_subfield($list, 'ss_values_text');
          ?>
            <div class="flex items-center [&_p]:mb-0 font-medium">
              <figure class="flex-[0_0_auto] w-[80px] sm:w-[100px] [&_img]:max-w-[55px] sm:[&_img]:max-w-[70px]">
                <img src="<?php echo !empty($icon_url) ? $icon_url : get_theme_file_uri('/lp/assets/images/winback-2025/local-techs-img-icon.png'); ?>" loading="lazy" width="118" height="118" alt="Local Techs Image Icon">
              </figure>
              <div class="text-lg lg:text-2xl [&_span]:text-ss-green-1 text-black self-center [&_strong]:text-primary">
                <?php echo wpautop($values_text); ?>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php }
      if (!empty($content)) { ?>
        <div class="text-center text-lg lg:text-2xl mb-8 lg:mb-12">
          <?php echo wpautop($content); ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>