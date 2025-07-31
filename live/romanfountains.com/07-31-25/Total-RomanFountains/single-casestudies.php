<?php
/**
 * @package WordPress
 * @subpackage Total
 * @since 1.0
*/

// Get site header
get_header(); ?>

	<div id="content-wrap" class="container clr full-width">
		<section id="primary" class="content-area clr">
			<div id="content" class="site-content clr" role="main">
				<?php
				the_date();
				echo '<br /><br />';

				// Social Sharing links
				wpex_social_share();

				// Display the page content
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; ?>
			</div>

			<div class="wpex-row clr">
				<div class="container">
					<div class="center-row-inner clr">

					<div class="theme-heading"><span>More Case Studies</span></div>

					<?php
						$currentID = get_the_ID();
				    $args=array(
				      'post_type' => 'casestudies',
				      'post_status' => 'publish',
				      'posts_per_page' => -1,
				      'caller_get_posts'=> 1
				      );
				    $my_query = new WP_Query($args);

				    while ($my_query->have_posts()) : $my_query->the_post();
				    if( get_the_ID() !==  $currentID ):
				  ?>

					<article class="portfolio-entry col span_1_of_4 col-1">
						<div class="portfolio-entry-media vcex-img-hover-parent vcex-img-hover-grow">
							<a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>" class="portfolio-entry-media-link">
								<?php the_post_thumbnail(); ?>
							</a>
						</div><!-- .portfolio-entry-media -->
						<div class="portfolio-entry-details clr">
							<div class="match-height-content">
								<h2 class="portfolio-entry-title"><a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a></h2>
								<div class="portfolio-entry-excerpt clr"></div>
							</div>
						</div><!-- .portfolio-entry-details -->
					</article><!-- .portfolio-entry -->

					<?php
						endif;
						endwhile;
						wp_reset_query();  // Restore global post data stomped by the_post().
					?>
					</div>
				</div>
			</div>
		</section><!-- #primary -->
	</div><!-- #content-wrap -->

	<div class="vc_row wpb_row vc_row-fluid footer-callout">
				<div class="clr footer-callout">
					<div class="container clr">
						<div class="center-row-inner clr">
							<div class="vc_col-sm-6 wpb_column column_container">
								<div class="clr ">

									<div class="wpb_text_column wpb_content_element">
										<div class="wpb_wrapper">
											<h2>We’d love to help you!</h2>
											<h3>Contact us or to find out how we can help you on your next project or create an account to access all the features of our website!</h3>
										</div>
									</div>
								</div>
							</div>

							<div class="vc_col-sm-6 wpb_column column_container">
								<div class="clr ">
									<a class="wpb_button_a" title="Contact Us" href="/contact-us/"><span class="wpb_button  wpb_wpb_button wpb_btn-large">Contact Us</span></a>
									<a class="wpb_button_a" title="Create Account" href="/wp-login.php?action=register"><span class="wpb_button  wpb_wpb_button wpb_btn-large">Create Account</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
// Get site footer
get_footer(); ?>