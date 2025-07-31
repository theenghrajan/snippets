<?php
/**
 * Useful global functions for the portfolio
 *
 * @package Total
 * @subpackage Portfolio Functions
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.0
 */

/**
 * Displays the media (featured image or video ) for the portfolio entries
 *
 * @since Total 1.36
 */
if ( ! function_exists( 'wpex_portfolio_entry_media2' ) ) {
	function wpex_portfolio_entry_media() {
		if ( wpex_get_portfolio_featured_video_url() ) {
			wpex_portfolio_post_video();
		}
		// Media wrap if post has thumbnail
		elseif( has_post_thumbnail() ) {
			$wpex_image = wpex_image( 'array' ); ?>
			<div class="portfolio-entry-media <?php echo wpex_overlay_classname(); ?>">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="portfolio-entry-media-link">
					<img src="<?php echo $wpex_image['url']; ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" width="<?php echo $wpex_image['width']; ?>" height="<?php echo $wpex_image['height']; ?>" class="portfolio-entry-img" />
					<?php wpex_overlay( 'inside_link' ); ?>
				</a>
				<?php wpex_overlay( 'outside_link' ); ?>
			</div><!-- .portfolio-entry-media -->
		<?php } // End if
	}
}

/**
 * Displays the details for the portfolio entries
 *
 * @since Total 1.36
 */
if ( ! function_exists( 'wpex_portfolio_entry_content2' ) ) {
	function wpex_portfolio_entry_content() {
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
			<h2 class="portfolio-entry-title">test<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
			<div class="portfolio-entry-excerpt clr">yo test test<?php wpex_excerpt( wpex_option( 'portfolio_entry_excerpt_length', '20'), false ); ?></div>
			<?php
			// Close Match Height div
			if ( wpex_portfolio_match_height() ) { ?>
			</div>
			<?php } ?>
		</div><!-- .portfolio-entry-details -->
	<?php }
}