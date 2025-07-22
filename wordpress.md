```php

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

// All-in-One plugin
// contants.php

// line 282 
// Max File Size 40


echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');

/**
 * Retrieve ACF Pro License Key from WordPress Database
 *
 * This function retrieves the ACF Pro license key from the WordPress database.
 * It is intended for use in development or debugging purposes.
 * 
 * Add this to your theme’s functions.php (remove after use!):
 * 
 */
add_action('admin_init', function() {
    $license = get_option('acf_pro_license');
    echo '<pre>ACF License Key: ' . print_r($license, true) . '</pre>';
});

/**
 * Register Multiple Nested Page Templates
 *
 * Adds custom nested page templates to the list of available templates in the WordPress admin.
 * Useful for organizing templates in subdirectories (e.g., 'lp/win2025/').
 *
 * @param array $templates Existing page templates.
 * @return array Modified array including custom templates.
 */
function register_multiple_nested_templates($templates)
{
	$my_templates = [
		'lp/win2025/tpl-win2025-lp.php' => 'WinBack 2025 Landing Page',
		// Add more as needed
	];

	return array_merge($templates, $my_templates);
}
add_filter('theme_page_templates', 'register_multiple_nested_templates');

```

// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
