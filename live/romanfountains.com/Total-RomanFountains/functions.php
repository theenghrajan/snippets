<?php

/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */


/*-----------------------------------------------------------------------------------*/
/*	- SAMPLE SNIPPETS
/*	- Below are some useful snippets you can use to tweak the theme.
/*	- See the Total FAQ for more useful snippets or ask me :)
/*-----------------------------------------------------------------------------------*/


/**
 * Load translations from your child theme
 * Add your .po/.mo files into a "languages" folder in your child theme then uncomment this function
 *
 * @link http://codex.wordpress.org/Function_Reference/load_child_theme_textdomain
 * @return url
 */
/*
function my_child_theme_setup() {
    load_child_theme_textdomain( 'my_child_theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );
*/



/**
 * Add page settings meta options to other post types
 *
 * @link Total/framework/redux/meta-config.php
 */
/*
function my_add_meta_to_post_types( $array ) {
    $array[] = 'gallery';
    return $array;
}
add_filter( 'wpex_main_metaboxes_post_types', 'my_add_meta_to_post_types' );
*/
function my_add_meta_to_post_types($array)
{
    $array[] = 'casestudies';
    return $array;
}
add_filter('wpex_main_metaboxes_post_types', 'my_add_meta_to_post_types');


/**
 * Alter the layout on any page, post, archive
 *
 * @link Total/framework/post-layout.php
 */
/*
function my_fullwidth_homepage( $class ) {
    // Make the front-page have a full-width layout
    if ( is_front_page() ) {
        return 'full-width';
    } else { 
        return $class;
    }
}
add_filter( 'wpex_post_layout_class', 'my_fullwidth_homepage' );
*/



/**
 * Disable the main header anywhere
 *
 * @link Total/framework/header/page-header.php
 */
/*
function my_disable_header( $return ) {
    // Disable header on the homepage
    if ( is_front_page() ) {
        return false;
    } else { 
        return $return;
    }
}
add_filter( 'wpex_display_header', 'my_disable_header' );
*/



/**
 * Customize the default logo URL
 *
 * @link Total/framework/header/header-logo.php
 * @return string
 */
/*
function my_custom_logo_url() {
    return 'wpexplorer.com';
}
add_filter( 'wpex_logo_url', 'my_custom_logo_url' );
*/



/**
 * Remove admin panel sections
 *
 * @link Total/framework/redux/admin-config.php
 * @return $sections
 */
/*
function my_override_redux_array( $sections ) {
    unset( $sections['5'] ); // Remove the 5th section
    return $sections;
}
add_filter( 'wpex_redux_sections', 'my_override_redux_array' );
*/



/**
 * Disable custom post types completely
 *
 * @link Total/framework/core-functions.php
 * @return $array
 */
/*
function my_disable_post_types( $array ) {
    unset( $array['portfolio'] ); // Remove portfolio
    unset( $array['staff'] ); // Remove staff
    unset( $array['testimonials'] ); // Remove testimonials.
    return $array; 
}
add_filter( 'wpex_theme_post_types', 'my_disable_post_types' );
*/


/**
 * Alter the header searchfield placeholder
 *
 * @link Total/framework/search/
 * @return $array
 */
/*
function my_search_placeholder() {
	return __( 'Your custom text', 'wpex' );
}
add_filter( 'wpex_search_placeholder_text', 'my_search_placeholder' );
*/



/**
 * Disable the page header/title
 *
 * @link Total/framework/page-header.php
 * @link http://codex.wordpress.org/Conditional_Tags
 * @return $array
 */
/*
function my_disable_title( $return ) {
	// Disable the title for singular products
    if ( is_singular( 'product' ) ) {
        return false;
    } else {
        return $return;
    }
}
add_filter( 'wpex_display_page_header', 'my_disable_title' );
*/



/**
 * Alter the mobile menu default "bars"
 *
 * @link Total/framework/header/menu/menu-mobile.php
 * @return $array
 */
/*
function my_alter_mobile_menu_toggle( $return ) {
   return 'Example';
}
add_filter( 'wpex_mobile_menu_open_button_text', 'my_alter_mobile_menu_toggle' );
*/



/**
 * Alter the default header <title> tag
 * This just overrides the theme function - no filter
 *
 * @link Total/framework/header/meta-tags.php
 */
/*
function wpex_meta_title() { ?>
     <title><?php wp_title('|'); ?></title>
<?php }
*/



/**
 * Display memory queries on the front-end
 *
 * @link Total/framework/core-functions.php
 */
/*
function my_display_queries( $array ) {
    $array['helpers']['display_queries_memory'] = true;
    return $array;
}
add_filter( 'wpex_global_config', 'my_display_queries' );
*/



/**
 * Alter the default toggle bar button (plus icon)
 *
 * @link Total/framework/header/top-bar.php
 */
/*
function wpex_toggle_bar_btn() {
    if ( !wpex_toggle_bar_active() ) {
        return;
    }
    echo '<a href="#" class="toggle-bar-btn fade-toggle '. wpex_option( 'toggle_bar_visibility' ) .'"><span class="fa fa-plus" /></a>';
}
*/



/**
 * Alter the next/previous links
 *
 * @link Total/framework/header/next-prev.php
 */
/*
// Change previous post link text to 'Prev'
function my_custom_prev_post_link_title() {
    return __( 'Prev', 'wpex' );
}
add_filter( 'wpex_prev_post_link_title', 'my_custom_prev_post_link_title' );

// Change next post link text to 'next'
function my_custom_next_post_link_title() {
    return __( 'Next', 'wpex' );
}
add_filter( 'wpex_next_post_link_title', 'my_custom_next_post_link_title' );
*/



/**
 * Re-order the social sharing links
 *
 * @link Total/framework/social/social-share.php
 */
/*
function my_custom_social_sharing_sites( $array ) {
    return array(
        'twitter'        => 'Twitter',
        'facebook'       => 'Facebook',
        'google_plus'    => 'Google Plus',
        'pinterest'      => 'Pinterest',
        'linkedin'       => 'LinkedIn',
    );
}
add_filter( 'wpex_social_sharing_sites', 'my_custom_social_sharing_sites' );
*/



/**
 * Add a searchbar input into the navigation bar
 *
 * @link Total/framework/hooks/hooks.php
 */
/*
function add_search_to_header() { ?>
    <form role="search" method="get" class="my-custom-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" class="field" name="s" value="<?php _e( 'search', 'wpex' ); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
    </form>
<?php }
add_filter( 'wpex_hook_main_menu_bottom', 'add_search_to_header' );
*/



/**
 * Custom meta viewport
 *
 * @link Total/framework/header/meta-tags.php
 */
/*
function my_custom_viewport() { ?>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
<?php }
add_filter( 'wpex_meta_viewport', 'my_custom_viewport' );
*/



/**
 * Add portfolio post type support for jetpack publicize
 * In otherwords, edit the portfolio supports array
 *
 * @link Total/framework/posttypes-taxonomies/register-portfolio.php
 */
/*
function my_portfolio_add_publicize() {
	$args['supports'] =  array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'custom-fields', 'revisions', 'publicize’ )
}
add_filter( 'wpex_portfolio_args', 'my_portfolio_add_publicize' );
*/



/**
 * Add more items to the sidr mobile menu
 *
 * @link Total/framework/core-functions.php
 */
/*
function my_add_to_mobile_menu( $array ) {
	$array['my-custom-id'] = '#my-custom-id';
	return $array;
}
add_filter( 'wpex_mobile_menu_source', 'my_add_to_mobile_menu' );
*/



/**
 * How can I open the sidr Mobile menu from the right instead of the left
 *
 * @link Total/framework/scripts.php
 */
/*
function my_edit_localize_array( $array ) {
    $array['sidrSide'] = 'right';
    return $array;
}
add_filter( 'wpex_localize_array', 'my_edit_localize_array' );
*/

/**
 * -----------------
 * Customize
 */
require_once 'framework/visual-composer/extend/shortcodes/testimonials_slider.php';
require_once 'framework/staff/staff-entry.php';
require_once 'framework/social/social-share.php';




/*
 * Add Support for DWG files in the media library
 */
function add_cad($existing_mimes)
{
    // add webm to the list of mime types
    $existing_mimes['dwg'] = 'application/dwg';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter('mime_types', 'add_cad');

/*
 * Add Scripts/Styles
 */
function load_scripts()
{
    // Enqueue the parent stylesheet
    wp_enqueue_style('custom-fonts', 'https://fast.fonts.net/cssapi/2a386d7c-d1be-45c2-bec2-98e698832fdc.css', array(), '1', 'all');
    wp_enqueue_style('cluetip-css', get_stylesheet_directory_uri() . '/css/jquery.cluetip.css', array(), '1', 'all');
    wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri() . '/css/magnific-popup.css', array(), '1', 'all');
    wp_enqueue_style('roman-fountains-custom-css', get_stylesheet_directory_uri() . '/custom-style.css', array(), '1', 'all');

    wp_enqueue_script('cluetip', get_stylesheet_directory_uri() . '/js/lib/jquery.cluetip.min.js', array(), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_stylesheet_directory_uri() . '/js/lib/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('smoothscroll', get_stylesheet_directory_uri() . '/js/lib/jquery.smooth-scroll.js', array(), '1.0.0', true);
    wp_enqueue_script('matchHeight', get_stylesheet_directory_uri() . '/js/lib/jquery.matchHeight.min.js', array(), '1.0.0', true);
    wp_enqueue_script('rof-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

    //Only Load on estimator pages
    if ((is_page('dry-deck') || is_page('traditional')) && is_user_logged_in()) {
        wp_enqueue_script('rof-estimator', get_stylesheet_directory_uri() . '/js/estimator-min.js', array(), '1.0.0', true);
        wp_enqueue_script('rof-range-slider', get_stylesheet_directory_uri() . '/js/lib/rangeslider.min.js', array(), '1.0.0', true);

        wp_enqueue_style('rangeslider-css', get_stylesheet_directory_uri() . '/css/rangeslider.css', array(), '1', 'all');
    }

    //Only Load on Custom landing Pages
    if (is_page_template(['custom/custom-template-lp.php', 'custom/custom-template-lp-parts.php'])) {        
        wp_enqueue_style('custom-swiper', get_theme_file_uri() . '/custom/lib/swiper/swiper-bundle.min.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_style('custom-fancybox', get_theme_file_uri() . '/custom/lib/fancybox/jquery.fancybox.min.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_style('custom-icomoon', get_theme_file_uri() . '/custom/lib/icomon/style.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_style('custom-style', get_theme_file_uri() . '/custom/assets/css/style.css', [], wp_get_theme()->get('Version'));

        wp_enqueue_script('jquery');
        wp_enqueue_script('custom-swiper', get_theme_file_uri() . '/custom/lib/swiper/swiper-bundle.min.js', [], wp_get_theme()->get('Version'), true);
        wp_enqueue_script('custom-fancybox', get_theme_file_uri() . '/custom/lib/fancybox/jquery.fancybox.min.js', [], wp_get_theme()->get('Version'), true);
        wp_enqueue_script('custom-script', get_theme_file_uri() . '/custom/assets/js/main.js', [], wp_get_theme()->get('Version'), true);
    }
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_image_size('cropped', 229, 171, array('center', 'center'));
add_image_size('largecropped', 671, 502, array('center', 'center'));
add_image_size('largecroppedtop', 671, 502, array('center', 'top'));
/*
 * CREATE CUSTOM POST TYPES
 */
// Register Custom Post Type
function casestudies()
{

    $labels = array(
        'name'                => _x('Case Studies', 'Post Type General Name', 'text_domain'),
        'singular_name'       => _x('Case Study', 'Post Type Singular Name', 'text_domain'),
        'menu_name'           => __('Case Studies', 'text_domain'),
        'parent_item_colon'   => __('Parent Case Study:', 'text_domain'),
        'all_items'           => __('All Case Studies', 'text_domain'),
        'view_item'           => __('View Case Study', 'text_domain'),
        'add_new_item'        => __('Add New Case Study', 'text_domain'),
        'add_new'             => __('Add New', 'text_domain'),
        'edit_item'           => __('Edit Case Study', 'text_domain'),
        'update_item'         => __('Update Case Study', 'text_domain'),
        'search_items'        => __('Search Case Studies', 'text_domain'),
        'not_found'           => __('Not found', 'text_domain'),
        'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
    );
    $args = array(
        'label'               => __('casestudies', 'text_domain'),
        'description'         => __('Case Studies', 'text_domain'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite' => array('slug' => 'our-projects/case-studies')
    );
    register_post_type('casestudies', $args);
}

// Hook into the 'init' action
add_action('init', 'casestudies', 0);


/* Enable this if they ever want to put in actual careers
function careers() {

    $labels = array(
        'name'                => _x( 'Careers', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Careers', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Career:', 'text_domain' ),
        'all_items'           => __( 'All Careers', 'text_domain' ),
        'view_item'           => __( 'View Career', 'text_domain' ),
        'add_new_item'        => __( 'Add New Career', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Career', 'text_domain' ),
        'update_item'         => __( 'Update Career', 'text_domain' ),
        'search_items'        => __( 'Search Careers', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'careers', 'text_domain' ),
        'description'         => __( 'Careers', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite' => array('slug' => 'about/careers')
    );
    register_post_type( 'careers', $args );

}

// Hook into the 'init' action
add_action( 'init', 'careers', 0 );

*/





function add_custom_rewrite_rule()
{

    // First, try to load up the rewrite rules. We do this just in case
    // the default permalink structure is being used.
    if (($current_rules = get_option('rewrite_rules'))) {

        // Next, iterate through each custom rule adding a new rule
        // that replaces 'movies' with 'films' and give it a higher
        // priority than the existing rule.
        foreach ($current_rules as $key => $val) {
            if (strpos($key, 'casestudies') !== false) {
                add_rewrite_rule(str_ireplace('casestudies', 'our-projects/case-studies', $key), $val, 'top');
            } // end if
        } // end foreach

    } // end if/else

    // ...and we flush the rules
    flush_rewrite_rules();
} // end add_custom_rewrite_rule
add_action('init', 'add_custom_rewrite_rule');

/*
 * Force user login for certain pages
 */
function require_login()
{
    if (is_user_logged_in()) return;

    //Dry Deck Estimator, Traditional Estimator
    $restricted = array(91, 367); // all your restricted pages

    if (in_array(get_queried_object_id(), $restricted)) {
        wp_redirect(site_url('/my-account'));
        exit();
    }
}

add_action('template_redirect', 'require_login');


/*
 * Force user to custom login screen
 */
function custom_login()
{
    if (is_user_logged_in()) return;

    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == 'wp-login.php' && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect(site_url('/'));
        exit();
    }
}

add_action('template_redirect', 'custom_login');

/*
 * Hide the My Account page from user
 */
function block_my_account()
{
    if (!is_user_logged_in()) return;

    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == 'my-account') {
        wp_redirect(site_url('/my-account/edit-account/'));
        exit();
    }
}

add_action('template_redirect', 'block_my_account');



/* Tweak the related items query to just include the first category */
function my_tweak_portfolio($args)
{
    // Get first category
    $first_cat_id = '';
    $terms = wp_get_post_terms(get_the_ID(), 'portfolio_category');
    if (!empty($terms) && isset($terms[0])) {
        $first_cat_id = $terms[0]->term_id;
    }
    // Alter the default tax_query
    $args['tax_query'] = array(
        array(
            'taxonomy'        => 'portfolio_category',
            'field'           => 'id',
            'terms'           => array($first_cat_id),
            'operator'        => 'IN',
        ),
    );
    // Return args
    return $args;
}
add_filter('wpex_related_portfolio_args', 'my_tweak_portfolio');


// Modify the default WooCommerce orderby dropdown
//
// Options: menu_order, popularity, rating, date, price, price-desc
function my_woocommerce_catalog_orderby($orderby)
{
    unset($orderby["price"]);
    unset($orderby["price-desc"]);
    unset($orderby["popularity"]);

    return $orderby;
}
add_filter("woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20);

//Redirect to homepage on logout
function go_home()
{
    wp_redirect(home_url());
    exit();
}
add_action('wp_logout', 'go_home');

// function remove_update_notifications($value)
// {

//     if (isset($value) && is_object($value)) {
//         unset($value->response['LayerSlider/layerslider.php']);
//     }

//     return $value;
// }
// add_filter('site_transient_update_plugins', 'remove_update_notifications');

// Disable the 'Main default_theme scripts and styles.'
function disable_default_theme_scripts_styles()
{
    if (is_page_template(['custom/custom-template-lp.php', 'custom/custom-template-lp-parts.php'])) {
        // wp_deregister_script('revmin');
        // wp_dequeue_script('revmin');

        
        wp_deregister_style('global-styles');
        wp_dequeue_style('global-styles');
        wp_deregister_style('wpex-style');
        wp_dequeue_style('wpex-style');
        wp_deregister_style('js_composer_front');
        wp_dequeue_style('js_composer_front');
    }
}
add_action('wp_enqueue_scripts', 'disable_default_theme_scripts_styles', 999);

$wpex_is_admin = is_admin();
if ( ! $wpex_is_admin ) {
	
	// The main page title class - displays title/breadcrumbs/title backgrounds/subheading - etc.
	require_once get_stylesheet_directory() . '/framework/page-header.php';
	
}

function remove_woocommerce_account_functionality() {
    remove_menu_page('my-account');
    
    if (is_account_page() || is_wc_endpoint_url()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'remove_woocommerce_account_functionality', 1);

function remove_account_menu_items($items) {
    return array();
}
add_filter('woocommerce_account_menu_items', 'remove_account_menu_items', 1000);

function disable_all_registration() {
    if (isset($_GET['action']) && $_GET['action'] === 'register') {
        wp_redirect(home_url());
        exit;
    }
    
    add_filter('register_url', '__return_empty_string');
    add_filter('login_form_bottom', function($content) {
        return preg_replace('/<p class="nav">.*?<\/p>/', '', $content);
    });
}
add_action('login_init', 'disable_all_registration');

function remove_auth_links($items, $args) {
    foreach ($items as $key => $item) {
        if (in_array('my-account', (array)$item->classes)) {
            unset($items[$key]);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'remove_auth_links', 10, 2);

function remove_wc_account_widget() {
    unregister_widget('WC_Widget_Account');
}
add_action('widgets_init', 'remove_wc_account_widget', 15);

function hide_admin_bar_for_non_admins() {
    if (!current_user_can('manage_options')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_non_admins');

function block_dashboard_access() {
    if (is_admin() && !current_user_can('manage_options') && !wp_doing_ajax()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('admin_init', 'block_dashboard_access', 1);

function remove_lost_password_link($text) {
    return str_replace('? <a href="' . wp_lostpassword_url() . '">', '? ', $text);
}
add_filter('login_message', 'remove_lost_password_link');

function disable_rest_user_endpoints($endpoints) {
    if (!current_user_can('manage_options')) {
        if (isset($endpoints['/wp/v2/users'])) {
            unset($endpoints['/wp/v2/users']);
        }
        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
            unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }
    }
    return $endpoints;
}
add_filter('rest_endpoints', 'disable_rest_user_endpoints');

add_filter('woocommerce_checkout_show_login', '__return_false');
add_filter('woocommerce_checkout_show_coupon', '__return_false');

// Send CAD Files to the Email 
add_action('wp_ajax_send_cad_email', 'handle_send_cad_email');
add_action('wp_ajax_nopriv_send_cad_email', 'handle_send_cad_email');

function handle_send_cad_email() {
    $email = sanitize_email($_POST['email'] ?? '');
    $product_id = intval($_POST['product_id'] ?? 0);

    if (!$email || !$product_id || !is_email($email)) {
        wp_send_json_error(['message' => 'Invalid email or product.']);
    }

    $cad_file = get_field('cad_file', $product_id);
    $cad_url = wp_get_attachment_url( $cad_file );

    if (!$cad_url) {
        wp_send_json_error(['message' => 'CAD file not found.']);
    }

    $subject = 'Your CAD File Download';
    $message = "Hi,\n\nHere is your CAD file download link:\n\n" . esc_url($cad_url);
    $headers = ['From: Roman Fountains <romanfountainsnr@gmail.com>', 'Content-Type: text/plain; charset=UTF-8'];

    $sent = wp_mail($email, $subject, $message, $headers);

    if (!$sent) {
        wp_send_json_error(['message' => 'Email failed to send.']);
    }

    global $wpdb;
    $table = $wpdb->prefix . 'cad_downloads';

    $wpdb->insert($table, [
        'email'         => sanitize_email($email),
        'product_id'    => intval($product_id),
        'downloaded_at' => current_time('mysql'),
    ]);

    wp_send_json_success(['message' => 'Email sent!']);
}

// CAD Files Download Dashboard
add_action('admin_menu', function () {
    add_management_page(
        'CAD Download Stats',
        'CAD Downloads',
        'manage_options',
        'cad-downloads-dashboard',
        'render_cad_download_dashboard'
    );
});

function render_cad_download_dashboard() {
    global $wpdb;
    $table = $wpdb->prefix . 'cad_downloads';

    // Get download count per product
    $downloads = $wpdb->get_results("
        SELECT 
            d.product_id,
            p.post_title,
            COUNT(d.id) AS total,
            GROUP_CONCAT(DISTINCT d.email ORDER BY d.email SEPARATOR ', ') AS emails
        FROM {$table} d
        JOIN {$wpdb->posts} p ON d.product_id = p.ID
        GROUP BY d.product_id
        ORDER BY total DESC
    ");

    echo '<div class="wrap"><h1>CAD Download Counts</h1>';

    if (!$downloads) {
        echo '<p>No downloads recorded yet.</p>';
    } else {
        echo '<table class="widefat fixed striped">';
        echo '<thead><tr><th>Product</th><th>Download Count</th><th>Emails</th></tr></thead><tbody>';

        foreach ($downloads as $row) {
            echo '<tr>';
            echo '<td><a href="' . get_edit_post_link($row->product_id) . '">' . esc_html($row->post_title) . '</a></td>';
            echo '<td>' . intval($row->total) . '</td>';
            echo '<td>' . esc_html($row->emails) . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
    }

    echo '</div>';
}