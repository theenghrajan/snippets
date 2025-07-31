<?php
/**
 * Used to display related portfolio items
 *
 * @package WordPress
 * @subpackage Total
 * @since Total 1.1
*/


if ( ! function_exists( 'wpex_portfolio_related' ) ) {
	function wpex_portfolio_related() {
		
		// Return if disabled
		if ( !wpex_option( 'portfolio_related', '1' ) ) {
			return;
		}
		
		// Return if full-screen post
		if ( 'full-screen' == wpex_get_post_layout_class() ) {
			return;
		}
		
		// Return if pass required
		if ( post_password_required() ) {
			return;
		}
		
		// Vars
		global $post;
		$post_id = $post->ID;
		$disable_related_items = get_post_meta( $post_id, 'wpex_disable_related_items', true );
		$post_count = wpex_option( 'portfolio_related_count', '4' );
		
		// Disabled via meta setting - goodbye
		if ( $disable_related_items == 'on' ) {
			return;
		}
		
		// Create an array of current category ID's
		$cats = wp_get_post_terms( $post_id, 'portfolio_category' ); 
		$cats_ids = array();
		foreach($cats as $wpex_related_cat) {
			$cats_ids[] = $wpex_related_cat->term_id; 
		}

		if ( !empty( $cats_ids ) ) {
			$tax_query = array (
				array (
					'taxonomy'		=> 'portfolio_category',
					'field'			=> 'id',
					'terms'			=> $cats_ids,
					'operator'		=> 'IN',
				),
			);
		} else {
			$tax_query = '';
		}
		
		// Related query arguments
		$args = array(
			'post_type'				=> 'portfolio',
			'posts_per_page'		=> $post_count,
			'orderby'				=> 'rand',
			'post__not_in'			=> array($post_id),
			'no_found_rows'			=> true,
			'tax_query'				=> $tax_query,
		);
		$args = apply_filters( 'wpex_related_portfolio_args', $args );
		$wpex_related_query = new wp_query( $args );
		
		// If posts were found display related items
		if( $wpex_related_query->have_posts() ) { ?>
			<section class="related-portfolio-posts clr">
				<div class="theme-heading"><span><?php echo wpex_option( 'portfolio_related_title', __( 'Related Projects', 'wpex' ) ); ?></span></div>
				<div class="wpex-row clr">
					<?php
					// Create counter var and set to 0
					$wpex_count='0';
					// Loop through related posts
					foreach( $wpex_related_query->posts as $post ) : setup_postdata( $post );
						// Counter for clearing floats
						$wpex_count++;
						// Get the portfolio entry content
						include( locate_template( 'content-portfolio.php' ) );
						// Reset loop counter
						if( $wpex_count == wpex_option( 'portfolio_related_columns', '3' ) ) {
							$wpex_count = '0';
						}
					// Related posts loop ends here
					endforeach; ?>
				</div><!-- .row -->
			</section><!-- .related-portfolio-posts -->
		<?php } // End related items
		
		// Reset query
		//wp_reset_query();
		wp_reset_postdata();

	}
}