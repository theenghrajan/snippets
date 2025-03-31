<?php

if (is_page_template('lp/tpl-winter-install-special-lp.php')) {
  wp_enqueue_style('lp-style', get_theme_file_uri('/lp/assets/css/style.css'), [], wp_get_theme()->get('Version'));

  wp_enqueue_script('lp-jquery', get_theme_file_uri('/lp/lib/jquery.min.js'), [], wp_get_theme()->get('Version'), true);
  wp_enqueue_script('lp-scripts', get_theme_file_uri('/lp/assets/js/main.js'), [], wp_get_theme()->get('Version'), true);
}


/*
// Disable the 'Main default_theme scripts and styles.'
======================================================
*/

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

/*
Get Script and Style IDs
Adds inline comment to your frontend pages
View source code near the <head> section
Lists only properly registered scripts
@ https://digwp.com/2019/03/disable-script-style-added-plugins/
*/

function default_inspect_script_style()
{
	global $wp_scripts, $wp_styles;
	echo "\n" . '<!--' . "\n\n";
	echo 'SCRIPT IDs:' . "\n";
	foreach ($wp_scripts->queue as $handle) echo $handle . "\n";
	echo "\n" . 'STYLE IDs:' . "\n";
	foreach ($wp_styles->queue as $handle) echo $handle . "\n";
	echo "\n" . '-->' . "\n\n";
}
add_action('wp_print_scripts', 'default_inspect_script_style');

/* WP Config */
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', WP_HOME);

// Gravity form Disable loading of CSS files
add_filter('gform_disable_css', '__return_true');