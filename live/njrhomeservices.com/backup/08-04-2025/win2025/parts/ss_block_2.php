<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
$content = acf_subfield($value, 'ss_content');
if (!empty($title) || !empty($content)) {
?>
  <section class="container max-w-[1520px] py-10 lg:py-16">
    <div class="text-center [&_h2]:text-[#0066a4] [&_h2]:font-bold lg:[&_h2]:mb-12 lg:text-[2.25rem]/tight [&_h2]:!leading-tight [&_h2]:font-lead">
      <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : '';
      echo wpautop($content); ?>
    </div>
  </section>
<?php } ?>