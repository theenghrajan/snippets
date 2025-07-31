<?php
/**
 * The template used for single portfolio posts.
 *
 * @package Total
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @since Total 1.0
 * @link  http://www.wpexplorer.com
 */

// Get site header
get_header(); ?>

	<?php
	// Start the standard WP loop
	while ( have_posts() ) : the_post(); ?>
		<div id="content-wrap" class="container clr <?php echo wpex_get_post_layout_class(); ?>">
			<section id="primary" class="content-area">
				<div id="content" class="site-content clr" role="main">
					
					<?php
					// Social Sharing links
					wpex_social_share(); ?>
					<div class="vc-row wpb_row vc-row-fluid">
						<div class="clr">
							<div class="center-row-inner clr">
									
									<div class="vc_col-md-12 vc_col-sm-12 wpb_column column_container content-holder">
										<div class="vc_col-md-8 vc_col-sm-12 wpb_column column_container">
										<div class="hotspot">
											<?php if ( get_field( "hotspot_id" ) ) { ?>
												<?php echo do_shortcode('[hotspot id='.get_field("hotspot_id").' /]'); ?>
											<?php } else { ?>
												<?php wpex_portfolio_single_media(); ?>
											<?php } ?>
										</div>
									</div>
										<article class="entry clr">
											<?php the_content(); ?>
										</article><!-- .entry clr -->
										
											<!--<?php if(get_the_term_list( $post->ID, 'portfolio_tag' )) { ?>
												<div class="tags">
													<div class="theme-heading shrink"><span>Tags</span></div>
													<?php echo get_the_term_list( $post->ID, 'portfolio_tag', '', '&nbsp;|&nbsp;', '' ); ?>
												</div>
											<?php } ?>-->
									</div>
								</div>
						</div>
					</div>
					
										<?php     
										$thumb_ID = get_post_thumbnail_id( $post->ID );
										
										 $args = array(
										   'post_type' => 'attachment',
										   'post_status' => null,
										   'post_parent' => $post->ID,
										   'exclude' => $thumb_ID
										  );
										
										  $attachments = get_posts( $args ); 
										 ?>
										   <?php if ( $attachments ) { ?>
										   	<section class="add-photos clr">
													<div class="theme-heading shrink"><span>Additional Photos</span></div>
													<!-- Display all attached photos -->
													<div class="additional-photos wpex-gallery-lightbox">
													<?php $i = 0;
													 foreach ( $attachments as $attachment ) {
													 	 if($i%4 == 0) {
														    echo $i > 0 ? "</div>" : ""; // close div if it's not the first
														    echo "<div class='wpex-row'>";
														  } ?>
														  <div class="vc_col-sm-6 vc_col-md-3 column_container">
													       <a href="<?php echo wp_get_attachment_url( $attachment->ID ) ?>">
													         <?php echo wp_get_attachment_image( $attachment->ID, 'largecropped' ); ?>
													        </a>
													      </div>
													 <?php
														$i++;
														}
													 ?>
													</div>
												    </div><!-- end additional-photos -->
											</section>				
										  <?php } ?>

										<?php if ( have_rows('videos') ): ?>
											<section class="add-photos clr">
												<div class="theme-heading shrink"><span>Videos</span></div>
												<div class="additional-photos">
													<?php $i = 0; ?>
													<?php while( have_rows('videos') ): the_row(); ?>
														<?php if($i%4 == 0) {
														    echo $i > 0 ? "</div>" : ""; // close div if it's not the first
														    echo "<div class='wpex-row'>";
														  } ?>

														  <div class="vc_col-sm-6 vc_col-md-3 column_container video-wrapper">
													      	<iframe width="100%" height="56.25%" src="https://www.youtube.com/embed/<?php the_sub_field('video-id'); ?>" frameborder="0" allowfullscreen></iframe>
													      </div>
													<?php $i++; ?>														
													<?php endwhile; ?>
													</div>
												</div>
											</section>
										<?php endif; ?>

					<?php
					// Get comments & comment form if enabled for portfoliop posts
					if ( wpex_option( 'portfolio_comments' ) == '1' ) { ?>
					<section id="portfolio-post-comments" class="clr">
						<?php comments_template(); ?>
					</section><!-- #portfolio-post-comments -->
					<?php } ?>
					<?php
					// Related Portfolio Items
					// See /functions/portfolio/portfolio-related.php
					wpex_portfolio_related(); ?>

				</div><!-- #content -->
			</section><!-- #primary -->
			<?php
			// Get main sidebar
			get_sidebar(); ?>
			<?php
			// Display next/prev links if enabled
			if ( wpex_option( 'portfolio_next_prev', '1' ) == '1' ) {
				wpex_next_prev();
			} ?>
		</div><!-- .container -->
	<?php endwhile; ?>

<?php
// Get site footer
get_footer();?>