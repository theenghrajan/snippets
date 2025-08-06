<?php

/**
 * njr-home-service functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package njr-home-service
 */

if (!defined('NJR_HOME_SERVICE_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('NJR_HOME_SERVICE_VERSION', '0.1.0');
}

if (!defined('NJR_HOME_SERVICE_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `njr_home_service_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'NJR_HOME_SERVICE_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('njr_home_service_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function njr_home_service_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on njr-home-service, use a find and replace
		 * to change 'njr-home-service' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('njr-home-service', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		add_theme_support('custom-logo');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __('Primary', 'njr-home-service'),
				'about' => __('About Us', 'njr-home-service'),
				'resources' => __('Resources', 'njr-home-service'),
				'footer_menu' => __('Footer Menu', 'njr-home-service'),
				'site-map' => __('Site Map', 'njr-home-service'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'njr_home_service_setup');

include_once get_template_directory() . '/inc/SmartSites/SmartSites.php';

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function njr_home_service_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Footer', 'njr-home-service'),
			'id' => 'sidebar-1',
			'description' => __('Add widgets here to appear in your footer.', 'njr-home-service'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'njr_home_service_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function njr_home_service_scripts()
{
	global $wp_query;
	wp_enqueue_style('njr-home-service-slick-css', get_template_directory_uri() . '/vendors/slick/slick.css');
	wp_enqueue_style('njr-home-service-fancybox-css', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.css');
	wp_enqueue_style('njr-home-service-style', get_stylesheet_uri(), array(), NJR_HOME_SERVICE_VERSION);

	wp_enqueue_script('jquery');
	wp_enqueue_script('njr-home-service-match-height-js', get_template_directory_uri() . '/vendors/match-height/jquery.matchHeight.js', '', null, true);
	wp_enqueue_script('njr-home-service-slick-js', get_template_directory_uri() . '/vendors/slick/slick.min.js', '', null, true);
	wp_enqueue_script('njr-home-service-fancybox-js', get_template_directory_uri() . '/vendors/fancybox/jquery.fancybox.min.js', '', null, true);
	wp_enqueue_script('njr-home-service-script', get_template_directory_uri() . '/js/script.min.js', array(), NJR_HOME_SERVICE_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_register_script('ajax_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery'), null, true);

	if (is_page_template('lp/tpl-winter-install-special-lp.php')) {
		wp_enqueue_style('lp-style', get_theme_file_uri('/lp/assets/css/style.css'), [], wp_get_theme()->get('Version'));

		wp_enqueue_script('lp-jquery', get_theme_file_uri('/lp/lib/jquery.min.js'), [], wp_get_theme()->get('Version'), true);
		wp_enqueue_script('lp-scripts', get_theme_file_uri('/lp/assets/js/main.js'), [], wp_get_theme()->get('Version'), true);
	}

	if (is_page_template('lp/tpl-spring-install-lp.php')) {
		wp_enqueue_style('lp-style', get_theme_file_uri('/lp/assets/css/style.css'), [], wp_get_theme()->get('Version'));

		wp_enqueue_script('lp-jquery', get_theme_file_uri('/lp/lib/jquery.min.js'), [], wp_get_theme()->get('Version'), true);
		wp_enqueue_script('lp-scripts', get_theme_file_uri('/lp/assets/js/main.js'), [], wp_get_theme()->get('Version'), true);
	}

	// now the most interesting part
	// we have to pass parameters to ss_loadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script(
		'ajax_loadmore',
		'loadmore_params',
		array(
			'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
			'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
			'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
			'max_page' => $wp_query->max_num_pages
		)
	);

	wp_enqueue_script('ajax_loadmore');
}
add_action('wp_enqueue_scripts', 'njr_home_service_scripts');

// Disable the 'Main default_theme scripts and styles.'
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

/**
 * Enqueue the block editor script.
 */
function njr_home_service_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'njr-home-service-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		NJR_HOME_SERVICE_VERSION,
		true
	);
}
add_action('enqueue_block_editor_assets', 'njr_home_service_enqueue_block_editor_script');

/**
 * Create a JavaScript array containing the Tailwind Typography classes from
 * NJR_HOME_SERVICE_TYPOGRAPHY_CLASSES for use when adding Tailwind Typography support
 * to the block editor.
 */
function njr_home_service_admin_scripts()
{
?>
	<script>
		tailwindTypographyClasses = '<?php echo esc_attr(NJR_HOME_SERVICE_TYPOGRAPHY_CLASSES); ?>'.split(' ');
	</script>
	<?php
}
add_action('admin_print_scripts', 'njr_home_service_admin_scripts');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function njr_home_service_tinymce_add_class($settings)
{
	$settings['body_class'] = NJR_HOME_SERVICE_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'njr_home_service_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * ACF
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Header Settings',
			'menu_title' => 'Header',
			'parent_slug' => 'theme-general-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Footer Settings',
			'menu_title' => 'Footer',
			'parent_slug' => 'theme-general-settings',
		)
	);
	acf_add_options_sub_page(
		array(
			'page_title' => 'Brand Setting',
			'menu_title' => 'Brand ',
			'parent_slug' => 'theme-general-settings',
		)
	);
	acf_add_options_sub_page(
		array(
			'page_title' => 'FAQs Settings',
			'menu_title' => 'FAQs Setting',
			'parent_slug' => 'edit.php?post_type=ss_faqs',
		)
	);
	acf_add_options_sub_page(
		array(
			'page_title' => 'Testimonials Settings',
			'menu_title' => 'Testimonials Setting',
			'parent_slug' => 'edit.php?post_type=ss_testimonials',
		)
	);
}

add_filter('gform_confirmation', function ($confirmation, $form) {
	$isRedirect = isset($confirmation['redirect']) && $confirmation['redirect'];

	$trackingCode = "<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        event: 'FormSubmission',
        formId: 'gf_{$form['id']}',
        formName: '{$form['title']}'"
		. ($isRedirect ? ",\neventCallback: function(){window.location.href = '" . esc_url_raw($confirmation['redirect']) . "';}" : "") . "
    });
</script>";

	if ($isRedirect) {
		$confirmation = $trackingCode;
	} else {
		$confirmation .= $trackingCode;
	}

	return $confirmation;
}, 10, 2);

// completely disable image size threshold
add_filter('big_image_size_threshold', '__return_false');

// increase the image size threshold to 4000px
function mynamespace_big_image_size_threshold($threshold)
{
	return 4000; // new threshold
}
add_filter('big_image_size_threshold', 'mynamespace_big_image_size_threshold', 999, 1);

//Gravity form hidden field for UTM
add_filter('gform_field_input', 'custom_hidden_field_input', 10, 5);
function custom_hidden_field_input($input, $field, $value, $lead_id, $form_id)
{
    if ($field->type === 'hidden') {

        if ($field->defaultValue === 'common_hidden_field') {
            $input = '<input name="input_' . $field->id . '" id="input_' . $form_id . '_' . $field->id . '" type="hidden" class="gform_hidden hidden-source ' . esc_attr($field->inputName) . '" aria-invalid="false" value="">';
        } else {
            $input = '<input name="input_' . $field->id . '" id="input_' . $form_id . '_' . $field->id . '" type="hidden" class="gform_hidden hidden-source-back-link ' . esc_attr($field->inputName) . '" aria-invalid="false" value="' . esc_attr($value) . '">';
        }
    }

    return $input;
}
// add_filter( 'gform_field_css_class', 'hidden_field_css_class', 10, 3 );
// function hidden_field_css_class( $classes, $field, $form ) {
// 	if( $field->type == 'hidden' ){
// 		$classes .= ' '.$field->inputName;
// 	}
// 	return $classes;
// }

function custom_search_query($query)
{
	if ($query->is_search && !is_admin()) {
		// Define the post types to include in the search and their priority
		$post_types_priority = array('page', 'post', 'any');

		// Set the post types to include in the search
		$query->set('post_type', $post_types_priority);

		// Set orderby parameter to order by post type and relevance
		$query->set(
			'orderby',
			array(
				'post_type' => 'ASC',
				'relevance' => 'DESC',
			)
		);

		// Exclude thank you pages
		$query->set(
			'post__not_in',
			array(4350, 4348, 4367, 5394, 4282, 4286, 3889, 3902, 4458, 4273, 4280, 4289, 4271, 4587, 4300, 4466)
		);
	}
}
add_action('pre_get_posts', 'custom_search_query');

//dav banner blocks and section
add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
	register_block_type(__DIR__ . '/blocks/banner');
}


function display_dav_banner($value = null)
{
	$desktop_image = acf_subfield($value, 'ss_desktop_image');
	$mobile_image = acf_subfield($value, 'ss_mobile_image');
	$cta = acf_subfield($value, 'ss_dav_ban_mod_cta');

	if (!empty($desktop_image)) {
		$image_url = wp_get_attachment_url($desktop_image);
		$alt = get_post_meta($desktop_image, '_wp_attachment_image_alt', TRUE);
	?>
		<div class="container my-8 sm:my-10 lg:my-12">
			<a href="<?php echo !empty($cta['url']) ? $cta['url'] : 'javascript:void(0)'; ?>"
				target="<?php echo !empty($cta['target']) ? $cta['target'] : '_self'; ?>">
				<figure class="max-sm:hidden [&_img]:w-full">
					<img width="728" height="112" loading="lazy" src="<?php echo $image_url; ?>"
						alt="<?php echo !empty($alt) ? $alt : 'DAV-2024-Promo-web-banner.png'; ?>">
				</figure>
				<?php if (!empty($mobile_image)) {
					$mobile_image_url = wp_get_attachment_url($mobile_image);
					$m_alt = get_post_meta($mobile_image, '_wp_attachment_image_alt', TRUE);
				} else {
					$mobile_image_url = $image_url;
					$m_alt = $alt;
				} ?>
				<figure class="sm:hidden [&_img]:w-full">
					<img width="728" height="112" loading="lazy" src="<?php echo $mobile_image_url; ?>"
						alt="<?php echo !empty($m_alt) ? $m_alt : 'DAV-2024-Promo-web-banner.png'; ?>">
				</figure>
			</a>
		</div>
<?php }
}

add_filter('gform_confirmation_17', 'custom_confirmation_redirect', 10, 4);
function custom_confirmation_redirect($confirmation, $form, $entry, $ajax)
{
	$custom_thank_you_url = 'https://www.njrhomeservices.com/fallsavings/thank-you/';

	if ($form['id'] == 17) {
		$confirmation = array(
			'redirect' => $custom_thank_you_url
		);
	}

	return $confirmation;
}

add_action('template_redirect', function () {
	$current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	if (strpos($current_path, 'fallsavings') === 0) {
		wp_redirect(home_url(), 301);
		exit;
	}
});

add_filter('gform_confirmation_19', 'custom_confirmation_redirection', 10, 4);
function custom_confirmation_redirection($confirmation, $form, $entry, $ajax)
{
	$custom_thank_you_url = 'https://www.njrhomeservices.com/winter-install/winter-install-thank-you/';

	if ($form['id'] == 19) {
		$confirmation = array(
			'redirect' => $custom_thank_you_url
		);
	}

	return $confirmation;
}

add_filter('wp_mail', 'send_email_to_secondary_admin');
function send_email_to_secondary_admin($args)
{

	$primary_admin_email = get_option('admin_email');
	$secondary_admin_email = 'JWolan@njresources.com';

	if (!is_array($args['to'])) {
		$emails = $args['to'];
		$email_array = explode(',', $emails);
		$to_emails = array_map('trim', $email_array);
	} else {
		$to_emails = is_array($args['to']) ? $args['to'] : [$args['to']];
	}

	if (in_array($primary_admin_email, $to_emails)) {
		$args['headers'][] = 'Bcc: ' . $secondary_admin_email;
	}

	return $args;
}

/**
 * Redirect Gravity Form submission to a custom URL
 */
add_filter('gform_confirmation', 'custom_gform_redirect', 10, 4);
function custom_gform_redirect($confirmation, $form, $entry, $ajax)
{
	if ($form['id'] == 21) {
		$confirmation = array('redirect' => 'https://www.njrhomeservices.com/summersavings/thank-you');
	}
	return $confirmation;
}
