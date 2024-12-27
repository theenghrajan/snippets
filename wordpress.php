<?php

/*
if (is_page_template('lp/tpl-winter-install-special-lp.php')) {
  wp_enqueue_style('lp-style', get_theme_file_uri('/lp/assets/css/style.css'), [], wp_get_theme()->get('Version'));

  wp_enqueue_script('lp-jquery', get_theme_file_uri('/lp/lib/jquery.min.js'), [], wp_get_theme()->get('Version'), true);
  wp_enqueue_script('lp-scripts', get_theme_file_uri('/lp/assets/js/main.js'), [], wp_get_theme()->get('Version'), true);
}
  */

/*
// Disable the 'Main default_theme scripts and styles.'
======================================================
function disable_default_theme_scripts_styles()
{
	if (is_page_template('lp/tpl-winter-install-special-lp.php')) {
        wp_deregister_script('njr-home-service-script');
		wp_dequeue_script('njr-home-service-script');

		wp_deregister_style('njr-home-service-style');
		wp_dequeue_style('njr-home-service-style');
	}
}
add_action('wp_enqueue_scripts', 'disable_default_theme_scripts_styles', 999);
*/