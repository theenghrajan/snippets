<?php
/**
 * Create simple social sharing buttons.
 *
 * @package Total
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link  http://www.wpexplorer.com
 * @since Total 1.0
*/

if ( !function_exists( 'wpex_social_share' ) ) {
	function wpex_social_share( $postid = '' ) {

		// Get sharing sites
		$sharing_sites = wpex_option( 'social_share_sites' );

		// Disable if all social sharing options are disabled
		if ( empty( $sharing_sites ) ) {
			return;
		}
		
		// Don't show social sharing on password protected posts
		if ( post_password_required() ) {
			return;
		}
		
		// Get sharing options
		$position = wpex_option( 'social_share_position' );
		$style = wpex_option( 'social_share_style' );
		
		// Get post & Post ID
		global $post;
		if ( !$post ) {
			return;
		}
		$postid = $postid ? $postid :$post->ID;
		
		// Check if social sharing is disabled
		if ( get_post_meta( $postid, 'wpex_disable_social', true ) == 'on' ) {
			return;
		} elseif ( !is_singular( 'post' ) && 'post' == get_post_type( $postid ) && '1' != wpex_option( 'social_share_blog_entries', '1' ) ) {
			return;
		} elseif ( is_singular( 'post' ) && '1' != wpex_option( 'social_share_blog_posts', '1' ) ) {
			return;
		} elseif ( is_singular( 'page' ) && '1' != wpex_option( 'social_share_pages', '1' ) ) {
			return;
		} elseif ( is_singular( 'portfolio' ) && '1' != wpex_option( 'social_share_portfolio', '1' ) ) {
			return;
		} elseif ( is_singular( 'staff' ) && '1' != wpex_option( 'social_share_staff', '1' ) ) {
			return;
		} elseif ( class_exists('Woocommerce') ) {
			if ( is_singular('product') && is_woocommerce() && '1' != wpex_option( 'social_share_woo' ) ) {
				return;
			} elseif ( !is_singular('product') && is_woocommerce() ) {
				return;
			} elseif ( is_cart() || is_checkout() ) {
				return;
			}
		}
		
		// Vars
		$output = '';
		$permalink = get_permalink($postid);
		$url = urlencode( $permalink );
		$title = urlencode( esc_attr( the_title_attribute( 'echo=0' ) ) );
		//CHAS: Fix bug where share doesn't strip HTML Tags
		$summary = urlencode( strip_tags (wpex_get_excerpt( '40' ) ) );
		$img = wp_get_attachment_url( get_post_thumbnail_id($postid) );
		$source = home_url();
		$social_share_title = wpex_option( 'social_share_heading', __( 'Please Share This', 'wpex' ) );
		$social_share_title = apply_filters( 'wpex_social_share_title', $social_share_title );
		$wpex_post_layout = wpex_get_post_layout_class();

		// Only display horizontal style menu for mobile devices
		$position = wp_is_mobile() ? 'horizontal' : $position;
		
		// Tooltip Style
		if ( is_rtl() ) {
			$tooltip_class = 'tooltip-right';
		} elseif( $position == 'horizontal' ) {
			$tooltip_class = 'tooltip-up';
		} else {
			if ( $wpex_post_layout == 'left-sidebar' ) {
				$tooltip_class ='tooltip-left';
			} else {
				$tooltip_class ='tooltip-right';
			}
		}
		
		// Display heading on Boxed layout
		if( is_singular() && $position == 'horizontal' ) { ?>
			<div class="social-share-title theme-heading"><span><?php echo $social_share_title; ?></span></div>
		<?php } ?>

		<ul class="social-share-buttons position-<?php echo $position; ?> style-<?php echo $style; ?> clr">
			<?php
			// Loop through each social sharing site that is enabled
			foreach ( $sharing_sites as $key => $value ) {
				// Twitter
				if ( $key == 'twitter' && $value ) { ?>
					<li class="share-twitter">
						<a href="http://twitter.com/share?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>" target="_blank" title="<?php _e( 'Share on Twitter', 'wpex' ); ?>" rel="nofollow" class="<?php echo $tooltip_class; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<span class="fa fa-twitter"></span>
							<?php if ( $position == 'horizontal' ) { ?>
								<span class="social-share-button-text"><?php _e('Tweet','wpex'); ?></span>
							<?php } ?>
						</a>
					</li>
				<?php }
				// Facebook
				if ( $key == 'facebook' && $value ) { ?>
					<li class="share-facebook">
						<a href="http://www.facebook.com/share.php?u=<?php echo $url; ?>" target="_blank" title="<?php _e( 'Share on Facebook', 'wpex' ); ?>" rel="nofollow" class="<?php echo $tooltip_class; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<span class="fa fa-facebook"></span>
							<?php if ( $position == 'horizontal' ) { ?>
								<span class="social-share-button-text"><?php _e('Like','wpex'); ?></span>
							<?php } ?>
						</a>
					</li>
				<?php }
				// Google+
				if ( $key == 'google_plus' && $value ) { ?>
					<li class="share-googleplus">
						<a title="<?php _e( 'Share on Google+', 'wpex' ); ?>" rel="external" href="https://plus.google.com/share?url=<?php echo $url; ?>" class="<?php echo $tooltip_class; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<span class="fa fa-google-plus"></span>
							<?php if ( $position == 'horizontal' ) { ?>
								<span class="social-share-button-text"><?php _e('Plus one','wpex'); ?></span>
							<?php } ?>
						</a>
					</li>
				<?php }
				// Pinterest
				if ( $key == 'pinterest' && $value ) { ?>
					<li class="share-pinterest">
						<a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;media=<?php echo $img; ?>&amp;description=<?php echo $summary; ?>" target="_blank" title="<?php _e( 'Share on Pinterest', 'wpex' ); ?>" rel="nofollow" class="<?php echo $tooltip_class; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<span class="fa fa-pinterest"></span>
							<?php if ( $position == 'horizontal' ) { ?>
								<span class="social-share-button-text"><?php _e('Pin It','wpex'); ?></span>
							<?php } ?>
						</a>
					</li>
				<?php }
				// LinkedIn
				if ( $key == 'linkedin' && $value ) { ?>
					<li class="share-linkedin">
						<a title="<?php _e( 'Share on LinkedIn', 'wpex' ); ?>" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>&amp;summary=<?php echo $summary; ?>&amp;source=<?php echo $source; ?>" target="_blank" rel="nofollow" class="<?php echo $tooltip_class; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
							<span class="fa fa-linkedin"></span>
							<?php if ( $position == 'horizontal' ) { ?>
								<span class="social-share-button-text"><?php _e('Share','wpex'); ?></span>
							<?php } ?>
						</a>
					</li>
				<?php }
			} ?>
		</ul>
	<?php
	}
}