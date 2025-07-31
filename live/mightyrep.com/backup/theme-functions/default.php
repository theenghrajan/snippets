<?php
// Theme initialization
add_action( 'init', 'markupus_init_theme' );
function markupus_init_theme(): void
{
	// Remove extra styles and default SVG tags.
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	load_theme_textdomain( THEME_NAME, get_stylesheet_directory() . '/languages' );

	add_theme_support( 'title-tag' );
}

// Add Page Options
add_action( 'acf/init', 'markupus_acf_init' );
function markupus_acf_init(): void
{
	$acf_parent_options = null;

	// Add ACF Options Page.
	if( function_exists( 'acf_add_options_page' ) ){
		$acf_parent_options = acf_add_options_page( [
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme_settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		] );
	}

	// Options sub-pages.
	if( function_exists( 'acf_add_options_sub_page' ) && $acf_parent_options ){
		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Global' ),
			'menu_title'	=> __( 'Global' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Header' ),
			'menu_title'	=> __( 'Header' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Footer' ),
			'menu_title'	=> __( 'Footer' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );
	}
}
?>