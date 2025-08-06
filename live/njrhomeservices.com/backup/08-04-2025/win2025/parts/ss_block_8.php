<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$section_content = acf_subfield($value, 'ss_section_content');
if (!empty($section_content) || !empty($title)) {
?>
  <section class="py-10">
    <div class="container">
      <div class="lg:py-5 [&_h2]:text-center [&_h2]:font-semibold [&_h2]:font-lead text-[#939393] xl:text-2xl font-lead [&_h2]:text-ss-blue-400 [&_p:last-child]:mb-0 xl:[&_p]:mb-8 [&_a]:whitespace-nowrap">
        <?php if (!empty($title)) { ?>
          <div class="max-w-[1439px] mx-auto mb-5 lg:mb-12">
            <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : ''; ?>
          </div>
        <?php } ?>
        <?php echo wpautop($section_content); ?>
      </div>
    </div>
  </section>
<?php } ?>