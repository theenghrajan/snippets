<?php
/**
 * Outputs the single media on portfolio pages if enabled
 *
 * @package Total
 * @subpackage Portfolio Functions
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.1
 */

if ( ! function_exists( 'wpex_portfolio_single_media' ) ) {
	function wpex_portfolio_single_media() {
		// Return if disabled
		if ( ! wpex_option( 'portfolio_single_media' ) ) {
			return;
		} ?>
		<div id="portfolio-single-media" class="clr">
			<?php
			// Post Video
			if ( wpex_get_portfolio_featured_video_url() ) {
				wpex_portfolio_post_video();
			}
			// Post Thumbnail
			elseif( has_post_thumbnail() ) {
				$wpex_image = wpex_image( 'array', '', true ); ?>
					<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="wpex-lightbox">
						<img src="<?php echo $wpex_image['url']; ?>" alt="<?php the_title(); ?>" class="portfolio-single-media-img" width="<?php echo $wpex_image['width']; ?>" height="<?php echo $wpex_image['height']; ?>" />
					</a>
			<?php } // End if ?>
		</div><!-- .portfolio-entry-media -->
	<?php }
}