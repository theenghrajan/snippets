<?php
/**
 * The Template for displaying all single posts.
 *
 * @package	Total
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.0
 */

// Get site header
get_header();

// Loop through the current post


	// Standard post template file
	if ( 'post' == get_post_type() ) {
		get_template_part( 'single', 'standard' );

	// 3rd party post type template
	} else {
		get_template_part( 'single', 'other' );
	}




// Get site footer
get_footer(); ?>