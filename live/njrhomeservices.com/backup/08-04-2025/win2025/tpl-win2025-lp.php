<?php

/**
 * Template Name: WinBack 2025 Landing Page
 * Template Post Type: page
 * 
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package njr-home-service
 */
include 'header-win2025.php';

$rows = acf_flexible('ss_winback_2025_page_content', get_the_ID());

foreach ($rows as $key => $value) {
	if ($key) {
		get_template_part('lp/win2025/parts/' . $value, null, array('values' => $key));
	}
}

include 'footer-win2025.php';
