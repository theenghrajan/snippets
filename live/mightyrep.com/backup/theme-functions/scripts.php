<?php
// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'markupus_inclusion_enqueue' );
function markupus_inclusion_enqueue(): void
{
	// Remove Gutenberg styles on front-end.
	if( ! is_admin() ){
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
	}

	// Styles.
	wp_enqueue_style( 'main', THEME_URI . '/static/css/main.min.css', [], THEME_VERSION, 'all' );

	$localize_params = array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		'ajax_nonce' => wp_create_nonce('check_nonce')
	);

	// Scripts.
	$localize_params = array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		'ajax_nonce' => wp_create_nonce('check_nonce')
	);
	wp_register_script( 'scripts', THEME_URI . '/static/js/main.min.js', ['jquery'], THEME_VERSION, true );
	wp_localize_script( 'scripts', 'params', $localize_params );
	wp_enqueue_script( 'scripts' );
}
?>