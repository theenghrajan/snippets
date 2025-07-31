<?php
// Start the engine.
include_once get_template_directory() . '/lib/init.php';

// Kreativ Theme Defaults.
include_once get_stylesheet_directory() . '/lib/theme-defaults.php';

// Kreativ Required Plugins.
include_once get_stylesheet_directory() . '/lib/required-plugins.php';

// Kreativ Demo Import.
include_once get_stylesheet_directory() . '/lib/demo-import.php';

// Kreativ Helper functions.
include_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Kreativ Customizer Options.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Kreativ Customizer Styles.
include_once get_stylesheet_directory() . '/lib/output.php';

// Add the required WooCommerce functions.
include_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Add the required WooCommerce custom CSS.
include_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Include notice to install Genesis Connect for WooCommerce.
include_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

// Kreativ Portfolio Widget.
include_once get_stylesheet_directory() . '/lib/widgets/featured-portfolio.php';

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'kreativ_localization_setup' );
function kreativ_localization_setup() {
	load_child_theme_textdomain( 'kreativ-pro', get_stylesheet_directory() . '/languages' );
}

// Setup Portfolio Widget.
add_action( 'widgets_init', 'kreativ_portfolio_widget' );
function kreativ_portfolio_widget() {
	register_widget( 'Kreativ_Featured_Portfolio' );
}

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Kreativ Pro' );
define( 'CHILD_THEME_URL', 'http://themesquare.com/themes/kreativ/' );
define( 'CHILD_THEME_VERSION', '1.2.6' );

// Enqueue Scripts & Styles.
add_action( 'wp_enqueue_scripts', 'kreativ_scripts_styles' );
function kreativ_scripts_styles() {
	wp_enqueue_style( 
		'kreativ-font', 	'//fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', 
		array(), 
		CHILD_THEME_VERSION 
	);
	wp_enqueue_style( 
		'kreativ-line-awesome', 
		'//maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css', 
		array(), 
		'1.1' 
	);

	wp_enqueue_style( 
		'kreativ-slick', 
		get_stylesheet_directory_uri() . '/css/slick.css', 
		array(), 
		'1.1' 
	);
	
	wp_enqueue_style( 
		'kreativ-slick-theme', 
		get_stylesheet_directory_uri() . '/css/slick-theme.css', 
		array(), 
		'1.1' 
	);
	
	wp_enqueue_style( 
		'kreativ-isotope', 
		get_stylesheet_directory_uri() . '/css/isotope.css', 
		array(), 
		'1.1' 
	);

	// New Product Options Styling
	// Added Feb 2022 - Openform (@abaumer)
	wp_enqueue_style( 
		'product-options', 
		get_stylesheet_directory_uri() . '/css/products/styles.css', 
		array(), 
		'1.0.8' 
	);
	
	if (!is_page(7061)) {
		wp_enqueue_script( 
			'product-options-script', 
			get_stylesheet_directory_uri() . '/js/po-scripts.js', 
			array( 'jquery', 'shopwp-public' ), 
			null, 
			true 
		);
		
		// Localize the script with wp_localize_script()
		wp_localize_script( 'product-options-script', 'wpfbp_data', array(
		    'ajax_url' => admin_url( 'admin-ajax.php' ),
		    'other_data' => 'value',
			'jkl' => get_current_user_id()
		) );
	}
	
	wp_enqueue_script( 
		'kreativ-match-height', 
		get_stylesheet_directory_uri() . '/js/match-height.js', 
		array( 'jquery' ), 
		'0.5.2', 
		true 
	);
	
	wp_enqueue_script( 
		'kreativ-js', 
		get_stylesheet_directory_uri() . '/js/kreativ.js', 
		array( 'jquery', 'kreativ-match-height' ), 
		CHILD_THEME_VERSION 
	);
	
	wp_enqueue_script( 
		'custom-js', 
		get_stylesheet_directory_uri() . '/js/custom.js', 
		array( 'jquery' ), 
		null, 
		true 
	);
	
	wp_enqueue_script( 
		'isotope-js', 
		get_stylesheet_directory_uri() . '/js/jquery.isotope.js', 
		array( 'jquery' ), 
		CHILD_THEME_VERSION 
	);
	
	wp_enqueue_script( 
		'slick-js', 
		get_stylesheet_directory_uri() . '/js/slick.min.js', 
		array( 'jquery' ), 
		CHILD_THEME_VERSION 
	);

	// Responsive Nav Menu.
	wp_enqueue_script( 
		'kreativ-responsive-menu', 
		get_stylesheet_directory_uri() . '/js/responsive-menus.js', 
		array( 'jquery' ), 
		CHILD_THEME_VERSION, 
		true 
	);
	
	wp_localize_script(
		'kreativ-responsive-menu',
		'genesis_responsive_menu',
		kreativ_responsive_menu_settings()
	);

}
//custom login
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('/wp-content/uploads/2023/09/essentials-in-writing-logo@768px.png');
        height:82px;
        width:300px;
        background-size: 300px 82px;
        background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Define our responsive menu settings.
function kreativ_responsive_menu_settings() {

	$settings = array(
		'mainMenu'    => __( '', 'kreativ-pro' ),
		'subMenu'     => __( 'Menu', 'kreativ-pro' ),
		'menuClasses' => array(
			'others' => array(
				'.nav-primary',
				'.nav-secondary',
			),
		),
	);

	return $settings;

}

// Enqueue RTL Styles.
add_action( 'wp_enqueue_scripts', 'kreativ_rtl_styles', 12 );
function kreativ_rtl_styles() {
	// Load RTL stylesheet.
	if ( ! is_rtl() ) {
		return;
	}

	wp_enqueue_style( 'kreativ-rtl', get_stylesheet_directory_uri() . '/rtl/style-rtl.css', array(), CHILD_THEME_VERSION );

}

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

// Add Accessibility support.
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 6 );

// Remove post meta.
//remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

// Remove the header right widget area.
unregister_sidebar( 'header-right' );

// Add support for footer menu.
add_theme_support( 'genesis-menus', array( 'primary' => 'Primary Navigation Menu', 'secondary' => 'Secondary Navigation Menu', 'footer' => 'Footer Navigation Menu' ) );

// Reposition the primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

/*
function wp_statpixel() {
   ?>
   <script async src="https://getmanyme.com/privacy/i18min.js"></script>
   <?php
}
add_action('wp_head', 'wp_statpixel');
*/

// Move image above post title.
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

// Add support for custom header.
add_theme_support( 'custom-header', array(
	'width'           => 1600,
	'height'          => 1200,
	'flex-height'     => true,
	'flex-width'      => true,
	'header-selector' => '.site-header',
	'header-text'     => false,
) );

// Add support for custom logo.
add_theme_support( 'custom-logo', array(
	'width'       => 960,
	'height'      => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( '.site-title', '.site-description' ),
) );


add_action( 'genesis_site_title', 'kreativ_custom_logo', 0 );
/**
 * Display the custom logo.
 *
 * @since 1.1.0
 */
function kreativ_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

// Add image sizes.
add_image_size( 'blog', '800', '400', true );
add_image_size( 'portfolio', '570', '390', true );
add_image_size( 'custom-image1', '568', '422', true );
add_image_size( 'testimonial-image', '640', '430', true );
add_image_size( 'blog-thin', '1200', '425', true );

// Remove default gallery styles.
add_filter( 'use_default_gallery_style', '__return_false' );

// Add Genesis Layouts to Portfolio.
add_post_type_support( 'portfolio', 'genesis-layouts' );

// Register widget areas.
// genesis_register_sidebar( array(
// 	'id'          => 'topbar',
// 	'name'        => __( 'Topbar', 'kreativ-pro' ),
// 	'description' => __( 'This is the topbar section.', 'kreativ-pro' ),
// ) );

// Topbar with contact info and social links.
// add_action( 'genesis_before_header', 'kreativ_topbar' );
// function kreativ_topbar() {
// 	echo '<div class="site-topbar"><div class="wrap">';

// 	genesis_widget_area( 'topbar', array(
// 		'before' => '<div class="topbar-left">',
// 		'after'  => '</div>',
// 	) );

// 	genesis_widget_area( 'rightheader', array(
// 		'before' => '<div class="topbar-right">',
// 		'after'  => '</div>',
// 	) );

// 	echo '</div></div>';
// }

// Sticky Header.
add_filter( 'body_class', 'kreativ_sticky_header_class' );
function kreativ_sticky_header_class( $classes ) {
	$sticky_header = get_option( 'kreativ_sticky_header' );
	$classes[]     = ( $sticky_header !== 'disable' ) ? 'sticky-header-active' : '';
	return $classes;
}

// Hook menu in footer.
//add_action( 'genesis_footer', 'kreativ_footer_menu', 12 );
function kreativ_footer_menu() {
	printf( '<nav %s>', genesis_attr( 'nav-footer' ) );
	wp_nav_menu( array(
		'theme_location' => 'footer',
		'container'      => false,
		'depth'          => 1,
		'fallback_cb'    => false,
		'menu_class'     => 'genesis-nav-menu',
	) );
	echo '</nav>';
}

// Nav footer attributes.
add_filter( 'genesis_attr_nav-footer', 'kreativ_footer_nav_attr' );
function kreativ_footer_nav_attr( $attributes ) {
	$attributes['itemscope'] = true;
	$attributes['itemtype']  = 'http://schema.org/SiteNavigationElement';
	return $attributes;
}

// Add skip link needs to footer nav.
add_filter( 'genesis_attr_nav-footer', 'kreativ_nav_footer_id' );
function kreativ_nav_footer_id( $attributes ) {
	$attributes['id'] = 'genesis-nav-footer';
	return $attributes;
}

// Add skip link needs to footer nav.
add_filter( 'genesis_skip_links_output', 'kreativ_nav_footer_skip_link' );
function kreativ_nav_footer_skip_link( $links ) {
	if ( has_nav_menu( 'footer' ) ) {
		$links['genesis-nav-footer'] = __( 'Skip to footer navigation', 'kreativ-pro' );
	}
	return $links;
}

// Scroll to top link.
add_action( 'genesis_footer', 'kreativ_scrollup', 12 );
function kreativ_scrollup() {
	echo '<div class="scroll-up">';
	echo '<a href="#" class="scrollup"></a>';
	echo '</div>';
}

// Gravity form
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
// credit shortcodes + add year
add_shortcode( 'year', 'awd_get_year' );

function awd_get_year( $atts ) {
    // Parse attributes and set a default (in this case false so we can check)
    $a = shortcode_atts( array(
        'start' => false
    ), $atts );

    if( $a['start'] && $a['start'] != date( "Y" ) ) {
        return $a['start'] . ' - ' . date( "Y" );
    }

    return date( "Y" );
}

// credit shortcodes + AWD Credit
add_shortcode( 'awd-credit', 'awd_credit' );
function awd_credit() {
    if( is_front_page() ) {
    return '<span class="awd-mobile">Site by &nbsp;<a class="awd-site-credit" href="https://austinwebanddesign.com/" target="_blank" rel="noopener" title="Austin Web & Design">Austin Web & Design</a></span>';
    }
}

/**
 * Add "inner" class to 'body' element for inner pages.
 */
function custom_body_class( $classes ) {
	if ( !is_front_page() ) {
		$classes[] = 'awd-inner';
	}

	return $classes;
};

add_filter( 'body_class', 'custom_body_class' );

//Remove Existing Footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
/**
 * Add Footer Widget to Genesis
 *
 * @link http://wpbeaches.com/create-footer-widget-area-genesis-child-theme/
 */
 add_action( 'widgets_init', 'footer_custom_extra_widgets' );
// Add in new Widget area
function footer_custom_extra_widgets() {
	genesis_register_sidebar( array(
		'id'            => 'footercontent',
		'name'          => __( 'Footer', 'hello_pro' ),
		'description'   => __( 'This is the general footer area', 'hello_pro' ),
		'before_widget' => '<div class="footercontent">',
	    	'after_widget'  => '</div>',
	));
}

add_action('genesis_footer','footer_custom_extra_widget');
// Position the Footer Area
function footer_custom_extra_widget() {
	genesis_widget_area ('footercontent', array(
		'before' => '<div class ="footercontainer">',
		'after'  => '</div>',
	));
}
add_action('genesis_before_footer','footer_before_extra_widget', 0);
// Position the Footer Area
function footer_before_extra_widget() {
	if ( ! is_page_template('page_product.php') && ! is_page_template('page_product_both.php')  ) :
		$top_footer_bg_img = get_field('top_footer_bg_img', 'options');
		$top_footer_bg_color = get_field('top_footer_bg_color', 'options');
		$top_footer_img = get_field('top_footer_img', 'options');
		$size = 'full';


		?>
	<div class="strat-section" style="<?php if ($top_footer_bg_img) : echo 'background: url("' .  $top_footer_bg_img . '")'; endif; ?> <?php if ($top_footer_bg_color) : echo 'background-color:' . $top_footer_bg_color .'"'; endif; ?>">
		<div class="wrap">
	    	<div class="two-thirds first strat-left">
	            <div class="start-left-wrap">
	            <?php if ($top_footer_img) : ?>
	    		<div class="start-left-img">
	    			<?php echo wp_get_attachment_image( $top_footer_img, $size ); ?>
	    		</div>
	    		<?php endif; ?>
	    		<div class="start-left-content">
	            <?php echo get_field('top_footer_left', 'options'); ?>
	            </div>
	         	</div>
	        </div>

	        <div class="one-third strat-right">
	        	<?php echo get_field('top_footer_right', 'options'); ?>
	        </div>
	        <div class="clear"></div>
	    </div>
	</div>
<?php endif;
}


/* Breadcrumbs
*************************/

add_filter('genesis_breadcrumb_args', 'remove_breadcrumbs_yourarehere_text');
function remove_breadcrumbs_yourarehere_text( $args ) {
    $args['labels']['prefix'] = '';
    return $args;
}

add_filter('genesis_breadcrumb_args', 'modify_separator_breadcrumbs');
function modify_separator_breadcrumbs($args) {
    $args['sep'] = '<span> / </span>';
    $args['prefix'] = '<div class="breadcrumb opensans">';
 	$args['suffix'] = '</div>';
    return $args;
}

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs');
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs', 16 );

/*inner page header title*/
function inner_page_banner_bg() {
    //Execute if singular
    if ( is_singular() ) {
        $id = get_queried_object_id ();
        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {
            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
            $url = $image[0];
        } else {
            //Set a default image if Featured Image isn't set
            $url = '';
        }
    }
    return $url;
}


function all_page_banner_section() {
	    $inner_all_banner_title = get_field('inner_all_banner_title');
?>
	<?php if ( ! is_front_page() ): ?>
		<div class="entry-header inner-page-banner-bg" style="background-image: url('<?php echo inner_page_banner_bg();?>');">
			<div class="wrap">
				<div class="top-title">
					<h1 class="heading-1" itemprop="headline"><?php wp_title( '', true, 'right' ); ?></h1>
				</div>

	<?php endif; ?>
<?php
}
// add_action( 'genesis_after_header', 'all_page_banner_section', 14);

function banner_area_after() {
	echo "</div></div>";
}
// add_action( 'genesis_after_header', 'banner_area_after', 16);

// add custom drop down in editor
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {

// Define the style_formats array

    $style_formats = array(
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
        array(
            'title' => 'As Heading 1',
            'block' => 'span',
            'classes' => 'as-heading-1',
            'wrapper' => true,

        ),
        array(
            'title' => 'As Heading 2',
            'block' => 'span',
            'classes' => 'as-heading-2',
            'wrapper' => true,

        ),
        array(
            'title' => 'As Heading 3',
            'block' => 'span',
            'classes' => 'as-heading-3',
            'wrapper' => true,

        ),
        array(
            'title' => 'As Heading 4',
            'block' => 'span',
            'classes' => 'as-heading-4',
            'wrapper' => true,

        ),
        array(
            'title' => 'As Heading 5',
            'block' => 'span',
            'classes' => 'as-heading-5',
            'wrapper' => true,

        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

//add_action( 'genesis_header_right', 'right_header_widget_area' );
function right_header_widget_area() {
	genesis_widget_area( 'rightheader', array(
		'before' => '<div class="header-right">',
		'after'  => '</div>',
	) );
}

genesis_register_sidebar( array(
	'id'          => 'rightheader',
	'name'        => __( 'Header Right Widget', 'hello_pro' ),
	'description' => __( 'This is the header right widget area.', 'hello_pro' ),
) );

// Add Global ACF page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' => 'Theme Options',
		'menu_title' => 'Theme Options',
		'menu_slug' => 'theme-options',
		'capability' => 'edit_posts',
		'parent_slug' => '',
		'position' => false,
		'icon_url' => false,
		'redirect' => false,
	));

}

/* Create Social Links Shortcode */
add_shortcode( 'social-links', 'social_items' );
function social_items() {
	$social_items = '';

	if( have_rows('social_items', 'options') ):
		$social_items .= '<div class="social-items">';

			while( have_rows('social_items', 'options') ): the_row();

				// vars
				$social_item_ico_type = get_sub_field('social_item_ico_type');
				$social_item_icon = get_sub_field('social_item_icon');
				$social_item_link = get_sub_field('social_item_link');
				$social_item_icon_img = get_sub_field('social_item_icon_img');
				$social_item_icon_img = (!empty($social_item_icon_img) ? $social_item_icon_img['url'] : '');
				$social_icon = '';
				$social_brands = 'fa';
	
				if ($social_item_icon == 'x-twitter') {
					$social_brands = 'fa-brands';
				}
					
				if($social_item_ico_type == 'fontawesome') :
					$social_icon = '<i class="'.$social_brands.' fa-'.$social_item_icon.'"></i>';
				else :
					$social_icon = '<i class="fa fa-'. $social_item_icon .' custom-icon" style="-webkit-mask-image: url(' . $social_item_icon_img . ');	mask-image: url(' . $social_item_icon_img . ');    "></i>';
				endif;

				$social_items .= '<div class="social-item">';
				$social_items .= '<a href="'. $social_item_link .'" target="_blank">';
				$social_items .= $social_icon;
				$social_items .= '</a>';
				$social_items .= '</div>';
			endwhile;

		$social_items .= '</div>';
	endif;
	return $social_items;
}

/* add social items to primary menu item */
add_filter( 'wp_nav_menu_items', 'wdm_add_menu_items', 10, 2 );
function wdm_add_menu_items( $menu, $args ) {
    // check if it is the 'primary' navigation menu
    if ( 'primary' === $args->theme_location )
    {
      // add the search form
      ob_start();
      $pri_additional_menus = pri_additional_menus();
      $menu  .= '<li class="menu-item menu-item-type-post_type menu-item-object-page eiw-menu-items">' . $pri_additional_menus . '</li>';
    }
    return $menu;
}

function pri_additional_menus() {
	$menu_items = '';
	$menu_items = '<div class="additional-btn">';
	
	$social_items = '';
	if( have_rows('social_items', 'options') ):
			while( have_rows('social_items', 'options') ): the_row();
				// vars
				$social_item_ico_type = get_sub_field('social_item_ico_type');
				$social_item_icon = get_sub_field('social_item_icon');
				$social_item_link = get_sub_field('social_item_link');
				$social_item_icon_img = get_sub_field('social_item_icon_img');
				$social_item_icon_img = (!empty($social_item_icon_img) ? $social_item_icon_img['url'] : '');
				$social_icon = '';
				$social_brands = 'fa';
	
				if ($social_item_icon == 'x-twitter') {
					$social_brands = 'fa-brands';
				}
					
				if($social_item_ico_type == 'fontawesome') :
					$social_icon = '<i class="'.$social_brands.' fa-'.$social_item_icon.'"></i>';
				else :
					$social_icon = '<i class="fa fa-'. $social_item_icon .' custom-icon" style="-webkit-mask-image: url(' . $social_item_icon_img . ');	mask-image: url(' . $social_item_icon_img . ');    "></i>';
				endif;

				$social_items .= '<div class="social-item">';
				$social_items .= '<a href="'. $social_item_link .'" target="_blank">';
				$social_items .= $social_icon;
				$social_items .= '</a>';
				$social_items .= '</div>';
			endwhile;
	endif;
	
	$menu_items .= $social_items;

        if( have_rows('pri_menu_items', 'options') ) {
            $count = 1;

            while( have_rows( 'pri_menu_items', 'options' ) ) {
                the_row();

                $pri_menu_item_img = get_sub_field('pri_menu_item_img', 'options');
                $pri_menu_item_img = $pri_menu_item_img['url'];
                $pri_menu_item_link = get_sub_field('pri_menu_item_link', 'options');
                $pri_menu_label = get_sub_field('pri_menu_label', 'options');
                $pri_menu_class = get_sub_field('pri_menu_class', 'options');

                if( isset( $pri_menu_item_link['url'] ) AND !empty( $pri_menu_item_link['url'] ) AND "/" != $pri_menu_item_link['url'] ) {
					if (!empty($pri_menu_label)) {
						$menu_items .= '<div class="eiw-menu-item '.$pri_menu_class.'"><a href="'. $pri_menu_item_link['url'] .'" class="menu-btn">'.$pri_menu_label.'</a></div>';
					} else {
						$menu_items .= '<div class="eiw-menu-item  '.$pri_menu_class.'"><a class="eiw-menu-img" href="'. $pri_menu_item_link['url'] .'"><img src="'. $pri_menu_item_img .'"/></a></div>';
					}
                } else {
					if (!empty($pri_menu_label)) {
						$menu_items .= '<div class="eiw-menu-item  '.$pri_menu_class.'"><a class="menu-btn">'.$pri_menu_label.'</a></div>';
					} else {
						$menu_items .= '<div class="eiw-menu-item  '.$pri_menu_class.'"><img src="'. $pri_menu_item_img .'"/></div>';
					}                    
                }
                $count ++;
            }
        }	
	
	$menu_items .= '</div>';

	return $menu_items;
}

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

function all_page_banner_links() {
	    $inner_all_banner_title = get_field('inner_all_banner_title');
	    //top bar hook
	    if ( function_exists( 'get_field') ) :
		$topbar_status = get_field('topbar_status', 'option');
		$topbar_notif = get_field('topbar_notif', 'option');
			if ( is_front_page() && $topbar_status==1 ) :
			?>
			<div class="topbar-notication">
				<div class="top-wrap">
					<?php if ($topbar_notif) : echo $topbar_notif; endif; ?>
				</div>
			</div>
		<?php
			endif;
		endif;
	?>
	<?php if ( ! is_front_page() && ! is_page_template('page_product.php') && ! is_page_template('page_home_clones.php') && !is_page_template('page_product_both.php')): ?>
		<div class="wrap">
			<div class="htu-btn">
	        <?php if( have_rows('awd_content_links', 'options') ): $count = 1; while( have_rows('awd_content_links', 'options')): the_row();?>
				<?php
	                $awd_btn_link = get_sub_field('awd_btn_link', 'options');
	            ?>
	            <div class="htu-item"><a href="<?php echo $awd_btn_link['url']; ?>"><?php echo $awd_btn_link['title']; ?> »</a></div>
		    <?php $count ++; endwhile; endif; ?>
			</div>
		</div>
	<?php endif; ?>
<?php
}
add_action( 'genesis_after_header', 'all_page_banner_links');

add_action('genesis_footer','footer_btn_items');
function footer_btn_items() { ?>
	<div class="footer-btn-items">
		<div class="htu-btn">
        <?php if( have_rows('awd_content_links', 'options') ): $count = 1; while( have_rows('awd_content_links', 'options')): the_row();?>
			<?php
                $awd_btn_link = get_sub_field('awd_btn_link', 'options');
            ?>
            <div class="htu-item"><a href="<?php echo $awd_btn_link['url']; ?>"><?php echo $awd_btn_link['title']; ?></a></div>
	    <?php $count ++; endwhile; endif; ?>
		</div>
	</div>
<?php
}

add_action('genesis_footer', 'footer_my_purchases');
function footer_my_purchases(){ ?>
    <!-- <div class="footer-purchases">
        <div class="account-btn"> -->
            <?php // if( get_field('footer_account_link', 'options') ):
                // $account_link = get_field('footer_account_link', 'options');
                // $account_link_url = $account_link['url'];
                // $account_link_title = $account_link['title'];
                // $account_link_target = $account_link['target'] ? $account_link['target']: '_self';
            ?>
            <!-- <a href="<?php // echo $account_link_url; ?>" target="<?php //echo $account_link_target; ?>"><?php // echo $account_link_title; ?></a> -->
            <?php // endif; ?>
  <!--       </div>
    </div> -->

<?php
}

add_action('genesis_footer','social_items_shortcode');
function social_items_shortcode() {
	echo '<div class="footer-social_items">';
	echo do_shortcode('[social-links]');
	echo '</div>';
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 3);
function my_wp_nav_menu_objects( $items, $args ) {

	// loop
	foreach( $items as &$item ) {

		// vars
		$icon = get_field('sub_title', $item);


		// append icon
		if( $icon ) {

			$item->title .= '<span>'. $icon.'</span>';

		}

	}


	// return
	return $items;

}

remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
if ( is_home() ) {

	add_action('genesis_loop', 'genesis_top', 8);
	function genesis_top() {
	  ?>

	  <div class="wrap">
	    <div class="blog_top_section">
	      <div class="lft_blog">
	          <?php echo get_field('blog_top_content','option'); ?>
	        </div>
	        <div class="rgt_blog">
	          <form  action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" >
	                  <div class="form-group has-feedback ">
	                  <span class="lft_sear">
	                   <input type="text" class="form-control input-lg"  placeholder="Search Here"  name="s">
	                   <input type="hidden" name="post_type" value="post" />
	                   </span>
	                   <span class="rgt_sear">
	                    <input type="submit" value="Go">
	                   </span>

	               </div>
	           </form>
	        </div>
	    </div>
	  </div>

	  <?php
	}

}

add_action( 'loop_start', 'works' );
function works() {
if ( genesis_is_blog_template() )
echo( 'Works Within The Blog Page Template Loop' );
}

add_filter( 'gform_submit_button', 'dw_add_span_tags', 10, 2 );
function dw_add_span_tags ( $button, $form ) {
    return $button .= "<span aria-hidden='true'></span>";
}

// level wizard shortcodes
function level_wizard() {
	$link = get_field('level_wizard_link', 'option');
	$wizardLink =  '<p>Not sure which level is right for your student? <a href="'.$link.'">Use the Placement Test</a>.</p>';
	return $wizardLink;
}
add_shortcode( 'level-wizard', 'level_wizard' );

// customize ACF layout
function load_custom_wp_acf_style() {
        wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/acf-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_acf_style' );

// Add Read More Link to Excerpts
add_filter('excerpt_more', 'get_read_more_link');
add_filter( 'the_content_more_link', 'get_read_more_link' );
function get_read_more_link() {
  return '... <div class="blog_read_pnl"><a class="more-link" href="' . get_permalink() . '">Read this post <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>';
}
// customize post meta
add_filter('genesis_post_meta', 'post_meta_filter');
function post_meta_filter($post_meta) {
$post_meta = '[post_tags sep="" before=""]';
 return $post_meta;
}
/* Display Post Author Avatars */
function wpsites_post_author_avatars() {
	if ( ! is_page()) :
  echo get_avatar(get_the_author_meta('email'), 30);
    endif;
}

add_action('genesis_entry_header', 'wpsites_post_author_avatars', 9);

//* Position post info above post title
remove_action( 'genesis_entry_header', 'genesis_post_info', 12);
add_action( 'genesis_entry_header', 'genesis_post_info', 9 );

/* Code to Display Featured Image on top of the post with ACF*/
add_action( 'genesis_entry_header', 'featured_post_image', 8 );
/** Conditionally add the post thumbnail to single post */
function featured_post_image()  {
	if ( ! is_singular( 'post' ) )
		return;
	if( ! function_exists( 'get_field' ) )
		return;
	if ( get_field( 'show_image_single' ) ) {
		the_post_thumbnail( 'large' );
		// the_post_thumbnail( 'blog' );
	}
}
//* Populate Related Posts in Genesis based on Category // https://sridharkatakam.com/related-posts-with-thumbnails-in-genesis-reloaded/
add_action( 'genesis_after_entry_content', 'sk_related_posts', 12 );

function sk_related_posts() { global $do_not_duplicate;

 if ( ! is_singular ( 'post' ) ) { return; }

 $count = 0; $related = ''; $do_not_duplicate = array(); $cats = wp_get_post_categories( get_the_ID() );


 // If we have some categories and less than 5 posts, run the cat query.
 if ( $cats && $count <= 4 ) { $query = sk_related_cat_query( $cats, $count ); $related .= $query['related']; $count = $query['count'];}

 // End here if we don't have any related posts.
 if ( ! $related ) { return; }

 // Display the related posts section.
 echo '<div class="related-posts bottom_latest">';
 echo '<h3 class="related-title h-custom-headline resp-h tt-upper mvn center-text accent"><span>Explore More Popular Posts</span></h3>';
 echo '<div class="related-posts-list" data-columns>' . $related . '</div>';
 echo '</div>';

}

function sk_related_cat_query( $cats, $count ) {
    global $do_not_duplicate;

    if ( ! $cats ) {
        return;
    }

    $postIDs = array_merge( array( get_the_ID() ), $do_not_duplicate );

    $catIDs = array();

    foreach ( $cats as $cat ) {
        if ( 3 == $cat ) {
            continue;
        }

        $catIDs[] = $cat;
    }

    $showposts = 2 - $count;

    $tax_query = array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array(
                'post-format-link',
                'post-format-status',
                'post-format-aside',
                'post-format-quote'
            ),
            'operator' => 'NOT IN'
        )
    );

    $args = array(
        'category__in' => $catIDs,
        'post__not_in' => $postIDs,
        'showposts' => $showposts,
        'ignore_sticky_posts' => 1,
        'orderby' => 'rand',
        'tax_query' => $tax_query,
    );

    $related = '';

    $cat_query = new WP_Query( $args );

    // add_filter( "excerpt_length", function( $length ) {
    //     return 10;
    // } );


    if ( $cat_query->have_posts() ) {
        ob_start();

            while ( $cat_query->have_posts() ) {
                $cat_query->the_post();
                $count++;
                ?>
                <div class="one-half">
                    <header class="entry-header">
                        <a class="related-image entry-image-link" href="<?= get_permalink(); ?>" rel="bookmark" title="Permanent Link to <?= get_the_title(); ?>">
                            <?= get_the_post_thumbnail( get_the_ID(), 'blog-thin' ); ?>
                        </a>

                        <?= get_avatar( get_the_author_meta( 'ID' ) ); ?>
						<?php $authBio = get_field('team_profile', 'user_' .get_the_author_meta( 'ID' )); $authBioID = $authBio->ID; 
									$job_title = get_post_meta( $authBioID, 'job_title', true ); 
                                    $job_level = get_post_meta( $authBioID, 'job_level', true );
									?>
                        <p class="entry-meta">
                            <span class="entry-author test">
                                By:
                                <span class="entry-author-name">
                                    <em><a href="/contact-us/team/?bio=<?= $authBioID; ?>#member-<?= $authBioID; ?>"><?= get_the_author_meta( 'display_name'); ?></a></em>
                                </span>
                            </span>

                            <time class="entry-time"><?= get_the_date(); ?></time>
                        </p>

                    </header>

                    <div class="entry-wrap blog_pnl_section">
                        <h2 class="entry-title">
                            <a class="related-post-title entry-title-link" href="<?= get_permalink(); ?>" rel="bookmark" title="Permanent Link to <?= get_the_title(); ?>">
                                <?= get_the_title(); ?>
                            </a>
                        </h2>

                        <div class="clearfix"></div>

                        <div class="entry-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            <?php
            }

            $related = ob_get_contents();

        ob_end_clean();

        wp_reset_postdata();
    }

    $output = array( 'related' => $related, 'count' => $count );

    return $output;
}


// add options CF h1 title
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
add_action( 'genesis_entry_header', 'custom_page_title' );

function custom_page_title() {
	if ( get_field( "custom_page_title" )) : ?>
<header class="entry-header"><h1 class="entry-title"><?php  the_field( "custom_page_title" ) ?></h1>
</header>
<?php
	else :
          genesis_do_post_title();
	endif;
}

//* Remove the edit link
add_filter ( 'genesis_edit_post_link' , '__return_false' );


// Set style.css Last Modified Date Versioning for Cache Busting
// remove default Genesis child theme stylesheet
// remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
// Create function to append last modified file to stylesheet URL
// add_action( 'wp_enqueue_scripts', 'awd_genesis_child_stylesheet' );
function awd_genesis_child_stylesheet() {
     $theme_name = defined('CHILD_THEME_NAME') && CHILD_THEME_NAME ? sanitize_title_with_dashes(CHILD_THEME_NAME) : 'child-theme';
     $version = defined( 'CHILD_THEME_VERSION' ) && CHILD_THEME_VERSION ? CHILD_THEME_VERSION : PARENT_THEME_VERSION;
     $version .= '.' . date ( "njYHi", filemtime( get_stylesheet_directory() . '/style.css' ) );
     wp_enqueue_style( $theme_name, get_stylesheet_uri(), array(), $version );
}

// Temp Mobile Styles.
add_action( 'wp_enqueue_scripts', 'bmw_styles' );
function bmw_styles() {
	wp_enqueue_style( 'temp-mobile', get_stylesheet_directory_uri() . '/css/bstyle.css', array(), '1.1' );
}

// Custom Homepage FB image
/*add_action( 'genesis_meta', 'FB_image' );
function FB_image() {
	if (is_front_page()) {
		$fbImg = '<meta property="og:image:secure_url" content="https://essentialsinwriting.com/wp-content/uploads/2019/08/18839665_1546748355389103_3841532394459174507_o.jpg" />';
		echo $fbImg;
	}
}*/

/**
 * Tracked Video PopIn
 */
/* function awd_inject_video_popin() { ?>
	<!-- <div class="popupbox mymove_show" style="display:none;">
		<div class="backdrop box">
			<div class="side_close"><img src="/wp-content/themes/kreativ-pro/images/close.png"></div>
			<div class="vedio_box">
				<div class="title">
					Need help placing your child?
				</div>
				<p>Find out which level to choose</p>
				<iframe src="https://player.vimeo.com/video/412339745?title=0&byline=0&portrait=0" width="362" height="203" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>					
				
			</div>
		</div>
	</div> -->
	<!-- <script type="text/javascript">
		function close_pop() {
			jQuery(".popupbox").addClass("mymove_hide");
			window.setTimeout(function(){jQuery(".mymove_hide").addClass("hide");}, 1000);
			setCookie('hide', true, 365);
			return false;
		}
		function getCookie(c_name) {
			var c_value = document.cookie;
			var c_start = c_value.indexOf(" " + c_name + "=");
			if (c_start == -1) {
				c_start = c_value.indexOf(c_name + "=");
			}
			if (c_start == -1) {
				c_value = null;
			} else {
				c_start = c_value.indexOf("=", c_start) + 1;
				var c_end = c_value.indexOf(";", c_start);
				if (c_end == -1) {
					c_end = c_value.length;
				}
				c_value = unescape(c_value.substring(c_start, c_end));
			}
			return c_value;
		}
		function setCookie(c_name, value, exdays) {
			var exdate = new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString()) + "; path=/; domain=essentialsinwriting.com";
			document.cookie = c_name + "=" + c_value;
		}

		window.onload=function () {
			if( !getCookie('eiwArrived') ) {
				setCookie( 'eiwArrived', Date.now(), 1 );
			}

			let eiwInt = window.setInterval(() => {
				if( !getCookie( "hide" ) ) {
					let popInDelaySeconds = 110;
					let eiwArrival = getCookie( 'eiwArrived' );
					let timeElapsedMillis = ( Date.now() - eiwArrival );
					let timeElapsed = Math.floor( timeElapsedMillis / 1000 );

					if( timeElapsed >= popInDelaySeconds ) {
						window.setTimeout(function () {
							jQuery('.popupbox').show();
							jQuery('.side_close').click(function () {
								close_pop();
								jQuery(".popupbox").removeClass("mymove_show");
								jQuery('#popup-youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
								stopEIWInt();
							});
						}, 1000);
					}
				} else {
					stopEIWInt();
				}
			}, 5000);

			function stopEIWInt() {
				clearInterval( eiwInt );
			}
		}
	</script> -->
<?php // } */
// add_action( "wp_footer", "awd_inject_video_popin" );

function testimonial_filter_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
        'category' => '',
    ), $atts );
	
	$testiCatslug = $a['category'];
	if ($testiCatslug == "") {
		
	$args = array(
	'post_type' => 'testimonial',
	'posts_per_page' => -1,
	'orderby' => 'date',	
	);	
		
	} else {
	
	$args = array(
	'post_type' => 'testimonial',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'tax_query' => array(
            array(
                'taxonomy'  => 'testimonial_category',
                'field'     => 'slug',
                'terms'     => $testiCatslug,
                'operator'  => 'AND'
            ),
    ),
	);
	};
	
$testiLoop = new WP_Query( $args  );	
ob_start();
echo "<style>
.head_cont{width: 878px; margin:0px auto; font: italic 400 30px 'Lato', Arial; color:#fff; text-align:center;}
.oppo-platform .top_border.testi{ padding:105px 0px 123px;}
.oppo-platform .top_border.testi .author h3{color: #000000;font: 400 20px/28px 'Lato', Arial; margin-top:10px;}
.oppo-platform .top_border.testi .location h4{font: bold 12px/14px 'Lato';color: #999999;letter-spacing: 1.6px; margin:0px; text-transform:uppercase;}
.oppo-platform.testimonial .top_cont{ padding-bottom:73px;padding-top:17px; text-align:center; color:#808080; font: 400 15px 'Lato', Arial;}
.clear { clear:both;}
.testimonial-slider .item-content {width: 100%; float: none;}
.testimonial-slider .slick-dots { bottom: 0; top: 100%; left: 50%; width: auto; transform: translateX(-50%); }
.testimonial_sec{margin:0px 0px 0px 0;}
.testimonial_sec .testimonial_pnl{width:33.333%; float:left; padding:0px 0px 0px 40px; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;font: italic 15px/27px 'Lato', Arial; color:#333333;}
.testimonial_sec .testimonial_pnl p{margin:20px 0px 21px;}
.oppo-platform .headerpnl .head_cont p.testi{font: bold 16.45px/29.43px 'Lato'; text-transform:uppercase; letter-spacing:1.6px;}
.testimonial_sec .testimonial_pnl .fa{ color:#83c250; padding-right:4px;}
.oppo-platform.testimonial .top_border{ padding:0px 0px 38px;}
.oppo-platform.testimonial .headerpnl{background: rgba(0,91,153,0.8); min-height:519px; display:table; width:100%;}
.oppo-platform.testimonial .headerpnl .top_header_banner{ display:table-cell; vertical-align:middle; padding: 30px 0; }
.oppo-platform.testimonial .top_border.no-pad{padding:66px 0px 93px;}
.oppo-platform.testimonial .top_cont h3{ font-size:24.84px; line-height:34px; color:#1a1a1a; margin-bottom:12px;}
.testi_detail:after{ background:#1783d1; content:''; width:15px; height:3px; display:block; margin-top:13px; margin-bottom:51px;}
.page-template-testimonials .tab-container{ position:absolute; right:0px; z-index:99;}
.testi_img{ width:70px; height:70px; float:left; box-sizing:border-box;  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; }
.testi_img img{width:70px; height:70px; border-radius:50%; -moz-border-radius:50%; -webkit-border-radius:50%; }
.testi_detail{ width:100%; float:none;}
.testi_detail.h_ful{ width:calc(100% - 70px);float: left;padding-left: 19px; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box;}
.oppo-platform .top_border.testi .testi_detail.h_ful .author h3 { margin-top:0px;}
.page-template-testimonials  .tab-container a.tab-writing{-webkit-box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);
-moz-box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);
box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);}
.page-template-testimonials  .tab-container a.tab-lit{-webkit-box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);
-moz-box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);
box-shadow: -3px 4px 31px 3px rgba(0,0,0,0.33);}
@media only screen  and (max-width: 1076px) {
	.oppo-platform.testimonial  .banner{ top:134px;}
	.head_cont{ width:80%; font-size:26px;}
	}
@media only screen  and (max-width: 767px) {.head_cont {
    width:90%;font-size: 21px;}.oppo-platform .headerpnl .head_cont p.testi{ font-size:14px;}.oppo-platform.testimonial .top_cont{padding-bottom:43px;
    padding-top: 15px; font-size:13px;}.testimonial_sec .testimonial_pnl{ width:100%; float:none; padding:0 0 10px;} .testimonial_sec{ margin:0px;} }
@media only screen  and (max-width: 587px) {.page-template-testimonials .tab-container { position:static;    margin-top: 20px;} .oppo-platform.testimonial .headerpnl{ min-height:418px;} .oppo-platform.testimonial{ margin-top:20px;}.page-template-testimonials  .tab-container a.tab-writing{-webkit-box-shadow:none;-moz-box-shadow: none;
box-shadow:none;}
.page-template-testimonials  .tab-container a.tab-lit{-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow:none;}}

</style>";
echo '<section class="top_border testi"><div class="x-container max width"><div class="testimonial_sec"><div class="awd-testimonial-section"><div class="wrap">';
echo '<div class="testimonial-slider">';
while ( $testiLoop->have_posts() ) : $testiLoop->the_post();
$testiAuthor = get_field('testimonial_author');
echo '<div class="testimonial-item"><div class="item-block"><div class="item-content"><div class="item-description">'.get_the_content().'</div><div class="item-author">'.$testiAuthor.'</div></div></div></div>';
endwhile;
echo '</div></div></div><div class="clear"></div></div></div></section>';
	
wp_reset_postdata();
$testiContent = ob_get_clean();
	
return $testiContent;
	
}

add_shortcode('testimonial_filter','testimonial_filter_shortcode');

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

add_action( 'genesis_after_content', function() { 
    if( is_page( 'test-pdf' ) ) {
        echo '<div style="max-width: 98%; padding: 0 1%; box-sizing: border-box; margin: 40px auto;">';
        echo do_shortcode( '[eiw-pdf-embed url="https://essentialsinwriting.com/wp-content/uploads/2021/12/EIW-5se-Workbook.pdf"]' );
        echo '</div>';
    }
});

add_action('genesis_meta', 'google_tag_head');
function google_tag_head() { ?>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF38386');</script>
<!-- End Google Tag Manager -->

	
<?php } 

add_action('genesis_before', 'google_tag_body');
function google_tag_body() { ?>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF38386"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	
<?php } 

//testimonial slider shortcode
add_shortcode( "testimonial-slider", function($atts, $content = null) {
    $a = shortcode_atts( array(
        'category' => '',
        'count' => '', // Add Shortcode Attribute for post count
    ), $atts );
    // Get slug of taxonomy
    $categorySlug = $a['category'];
    $postCount = $a['count']; // Make a variable for the count attribute, we'll need to check this for a value.

    if ($postCount == "") {
        $postCount = "-1"; // If no postCount attribute, show all.
    }

    // if empty show all, else show single category

    if ($categorySlug == "") {

    // Get loop set up
        $args = array(
            'posts_per_page' => $postCount,
            'post_type' => 'testimonial',
            'orderby' => 'date',
            'order' => 'desc'
        );

    } else {
        $args = array(
            'posts_per_page' => $postCount,
            'post_type' => 'testimonial',
            'orderby' => 'date',
            'order' => 'desc',
            'tax_query' => array(
            array(
                'taxonomy'  => 'testimonial_category',
                'field'     => 'slug',
                'terms'     => $categorySlug,
            ),
    ),
        );
    }

    $reviewQuery = new WP_Query( $args );
    // Buffer shortcode output
    ob_start();
    if( function_exists( 'get_field' ) ) :
?>
<div class="testimonial-slider-v2">
    <?php if( $reviewQuery->have_posts() ) {
        $counter=0;
        while( $reviewQuery->have_posts() ) {
            $reviewQuery->the_post();
			$testimonial_author = get_field('testimonial_author');
			$testimonial_details = get_field('testimonial_details');
			$testimonial_rating = get_field('testimonial_rating');

            if ( $testimonial_author) :
            $awd_team = $testimonial_author;
            else :
            $awd_team = get_the_title();
            endif;
            ?>
    <div class="testimonial-item">
        <div class="testimonial-wrap">
            <div class="testimonial-content">
            	<div class="testimonial-copy">
            		<div class="testi-copy-align">
                <?php the_content(); ?>
                	</div>
            </div>
                <div class="testimonial-rating">
                	<ul class="rating-stars">
                	<?php if ( $testimonial_rating >= 5) : echo '<li class="rating-5"><svg height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m26.67 10.08h-9l-2.74-8.16c-.19-.51-.76-.78-1.27-.59-.27.1-.49.31-.59.59l-2.73 8.17h-9.07c-.54 0-.98.44-.98.98 0 .06 0 .11.02.16.03.28.18.53.41.69l7.4 5.22-2.84 8.26c-.14.4 0 .84.34 1.1.15.14.35.22.55.24.22-.02.43-.09.61-.22l7.22-5.15 7.22 5.15c.18.13.39.21.61.22.2-.01.4-.1.55-.24.34-.25.48-.7.34-1.1l-2.84-8.26 7.34-5.26.18-.15c.18-.17.3-.41.32-.65-.03-.55-.49-.98-1.04-.98z" fill="#fff"/></svg></li>'; endif; ?>
                	<?php if ( $testimonial_rating >= 4) : echo '<li class="rating-4"><svg height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m26.67 10.08h-9l-2.74-8.16c-.19-.51-.76-.78-1.27-.59-.27.1-.49.31-.59.59l-2.73 8.17h-9.07c-.54 0-.98.44-.98.98 0 .06 0 .11.02.16.03.28.18.53.41.69l7.4 5.22-2.84 8.26c-.14.4 0 .84.34 1.1.15.14.35.22.55.24.22-.02.43-.09.61-.22l7.22-5.15 7.22 5.15c.18.13.39.21.61.22.2-.01.4-.1.55-.24.34-.25.48-.7.34-1.1l-2.84-8.26 7.34-5.26.18-.15c.18-.17.3-.41.32-.65-.03-.55-.49-.98-1.04-.98z" fill="#fff"/></svg></li>'; endif; ?>
                	<?php if ( $testimonial_rating >= 3) : echo '<li class="rating-3"><svg height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m26.67 10.08h-9l-2.74-8.16c-.19-.51-.76-.78-1.27-.59-.27.1-.49.31-.59.59l-2.73 8.17h-9.07c-.54 0-.98.44-.98.98 0 .06 0 .11.02.16.03.28.18.53.41.69l7.4 5.22-2.84 8.26c-.14.4 0 .84.34 1.1.15.14.35.22.55.24.22-.02.43-.09.61-.22l7.22-5.15 7.22 5.15c.18.13.39.21.61.22.2-.01.4-.1.55-.24.34-.25.48-.7.34-1.1l-2.84-8.26 7.34-5.26.18-.15c.18-.17.3-.41.32-.65-.03-.55-.49-.98-1.04-.98z" fill="#fff"/></svg></li>'; endif; ?>
                	<?php if ( $testimonial_rating >= 2) : echo '<li class="rating-2"><svg height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m26.67 10.08h-9l-2.74-8.16c-.19-.51-.76-.78-1.27-.59-.27.1-.49.31-.59.59l-2.73 8.17h-9.07c-.54 0-.98.44-.98.98 0 .06 0 .11.02.16.03.28.18.53.41.69l7.4 5.22-2.84 8.26c-.14.4 0 .84.34 1.1.15.14.35.22.55.24.22-.02.43-.09.61-.22l7.22-5.15 7.22 5.15c.18.13.39.21.61.22.2-.01.4-.1.55-.24.34-.25.48-.7.34-1.1l-2.84-8.26 7.34-5.26.18-.15c.18-.17.3-.41.32-.65-.03-.55-.49-.98-1.04-.98z" fill="#fff"/></svg></li>'; endif; ?>
                	<?php if ( $testimonial_rating >= 1) : echo ''; endif; ?>
                	</ul>
                </div>
                <div class="testimonial-author">
                <?php echo $awd_team; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
     }
    } else { ?>
    <h4><em>Currently no testimonial posts.</em></h4>
    <?php }
    ?>
</div>
<?php endif;
    wp_reset_postdata();
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
});
add_filter( 'acf/the_field/allow_unsafe_html', function( $allowed, $selector ) {
    if ( $selector ) {
        return true;
    }
    return $allowed;
}, 10, 2);
add_filter( 'acf/shortcode/allow_unsafe_html', function ( $allowed, $atts ) {
    if ( $atts ) {
        return true;
    }
    return $allowed;
}, 10, 2 );

function inject_preload_image_homepage() {
    if (is_front_page()) {
        echo '<link rel="preload" as="image" href="https://essentialsinwriting.com/wp-content/uploads/2023/11/essentials-in-writing-comprehensive-k-12-writing-literature-curriculum.jpg">';
    }
}
// add_action('wp_head', 'inject_preload_image_homepage');
add_shortcode('awd_post_author','post_author_popup');
function post_author_popup() {
	ob_start();
	$authBio = false;
	$authBio = get_field('team_profile', 'user_' .get_the_author_meta( 'ID' )); 
	if($authBio) : 
		$authBioID = $authBio->ID; $job_title = get_post_meta( $authBioID, 'job_title', true ); $job_level = get_post_meta( $authBioID, 'job_level', true ); 
	echo '<span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person">By: <em><a href="/contact-us/team/?bio='. $authBioID.'#member-'.$authBioID.'"><span class="entry-author-name" itemprop="name">'.get_the_author().'</span></a></em></span>';
	else: 
	echo '<span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person">By: <em><a href="/contact-us/team/"><span class="entry-author-name" itemprop="name">'.get_the_author().'</span></a></em></span>';
	endif;
	$content = ob_get_clean();
	return $content;
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