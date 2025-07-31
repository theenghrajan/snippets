<?php
$value = $args['values'];

$title = acf_subfield($value, 'ss_title');
$sub_title = acf_subfield($value, 'ss_sub_title');
$content = acf_subfield($value, 'ss_content');
?>
<?php if (!empty($title) || !empty($sub_title) || !empty($content)) { ?>
    <section class="container pt-9 md:pt-12 xl:pt-16 space-y-8 md:space-y-10 xl:space-y-12">
        <div class="text-center max-w-[1200px] mx-auto lg:[&_.h2]:leading-[1.43] 2xl:[&_.h1]:text-[84px] [&_.h2]:text-ss-green-2">
            <?php if (!empty($title)) { ?><h1 class="h1"><?php echo $title; ?></h1><?php } ?>
            <?php if (!empty($sub_title)) { ?><h2 class="h2"><?php echo $sub_title; ?></h2><?php } ?>
        </div>
        <?php echo wpautop($content); ?>
    </section>
<?php } ?>