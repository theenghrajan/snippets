<?php

/**
 * Logo
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
$hippa_logo = get_field('hippa_complient_logo', 'option');
$main_logo = get_field('main_logo', 'option');
$phonenumber = get_field('phone_number', 'option');
if ($hippa_logo || $main_logo || $phonenumber) {
?>
	<div class="header-top">
		<?php if ($hippa_logo) { ?>
			<figure class="header-top__logo">
				<img width="120" height="63" loading="lazy" src="<?php echo $hippa_logo['url']; ?>" alt="<?php echo $hippa_logo['alt']; ?>">
			</figure><!-- /.header-top__logo -->
		<?php }
		if ($main_logo) { ?>
			<div class="header-top__brand">
				<a href="/">
					<figure>
						<img width="336" height="106" loading="lazy" src="<?php echo $main_logo['url']; ?>" alt="<?php echo $main_logo['alt']; ?>">
					</figure>
				</a>
			</div><!-- /.header-top__brand -->

		<?php }
		if ($phonenumber) { ?>
			<div class="header-top__cta">
				<a href="<?php echo $phonenumber['url']; ?>" class="button button-lg button_theme button_theme--alt"><?php echo $phonenumber['title']; ?></a>
			</div><!-- /.header-top__cta -->
		<?php }
		?>
	</div><!-- /.header-top -->
<?php } ?>