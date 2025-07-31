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
				// Display the page content
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; ?>
			</div>

			<div class="theme-heading"><span>More Case Studies</span></div>

			<div class="wpex-row clr">

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
					<div class="portfolio-entry-media ">
						<a href="http://romanfountains.han-dev.com/portfolio-item/wilks/" title="<?php echo get_the_title(); ?>" class="portfolio-entry-media-link">
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

		</section><!-- #primary -->
	</div><!-- #content-wrap -->

<?php
// Get site footer
get_footer(); ?>