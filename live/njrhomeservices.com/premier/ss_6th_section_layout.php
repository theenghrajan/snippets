<?php
$value = $args['values'];

$content = acf_subfield($value, 'ss_content');
?>

<?php if (!empty($content)) { ?>
    <section class="container text-black py-9 lg:py-12 xl:py-16 text-[16px] xl:text-[18px] leading-[1.33] 2xl:max-w-[1330px] space-y-6 md:space-y-8 xl:space-y-10">
        <?php echo wpautop($content); ?>
    </section>
<?php } ?>