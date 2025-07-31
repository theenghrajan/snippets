<?php
/**
 * Used for your portfolio entries
 * See single-portfolio.php for single post layout
 *
 * @package	Total
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Counter for clearing floats and margins
if ( !isset( $wpex_related_query ) ) {
	global $wpex_count;
	$query = 'archive';
} else {
	$query = 'related';
} ?>

<article id="#post-<?php the_ID(); ?>" class="portfolio-entry col <?php echo wpex_portfolio_column_class( $query ); ?> col-<?php echo $wpex_count; ?>">
		<?php

		if( has_post_thumbnail() ) {
			$wpex_image = wpex_image( 'array' ); ?>
			<div class="portfolio-entry-media <?php echo wpex_overlay_classname(); ?>">
				
				<div class="portfolio-entry-media  vcex-img-hover-parent vcex-img-hover-grow">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="portfolio-entry-media-link">
					 <?php the_post_thumbnail( 'largecropped' ); ?> 
				</a>
				</div>
			</div><!-- .portfolio-entry-media -->
		<?php } ?>
				
		<?php 
		// Disabled via the theme admin
			if ( ! wpex_option( 'portfolio_entry_details', '1' ) ) {
				return;
			}
			// Disabled for related entries
			if ( is_singular( 'portfolio' ) && ! wpex_option( 'portfolio_related_excerpts', '1' ) ) {
				return;
			} ?>
			<div class="portfolio-entry-details clr">
				<?php
				// Match Height div
				if ( wpex_portfolio_match_height() ) { ?>
				<div class="match-height-content">
				<?php } ?>
				<h2 class="portfolio-entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
				<?php
				// Close Match Height div
				if ( wpex_portfolio_match_height() ) { ?>
				</div>
				<?php } ?>
			</div><!-- .portfolio-entry-details -->
</article><!-- .portfolio-entry -->