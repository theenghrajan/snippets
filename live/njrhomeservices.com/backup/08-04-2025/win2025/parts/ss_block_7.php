<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
if (!empty($title)) {
?>
  <section class="bg-[#F3F3F3] py-10">
    <div class="container max-w-[1540px]">
      <?php if (!empty($title)) { ?>
        <div class="lg:py-5 text-center [&_h2]:font-semibold [&_h2]:font-lead text-ss-blue-100">
          <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : ''; ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>