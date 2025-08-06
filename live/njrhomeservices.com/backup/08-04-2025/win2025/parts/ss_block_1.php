<?php
$value = $args['values'];
$title = acf_subfield($value, 'ss_title');
if (!empty($title)) {
?>
  <section class="text-center bg-[#0066a4] text-white [&_h2]:!leading-tight [&_h2]:font-lead xl:[&_h2]:text-6xl/tight py-10 lg:py-12">
    <div class="container">
      <?php echo !empty($title) ? '<h2>' . $title . '</h2>' : ''; ?>
    </div>
  </section>
<?php } ?>