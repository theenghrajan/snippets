<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package	Total
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.0
 */


// Get header
get_header(); 

$reading_id = get_option('page_for_posts');

if ( is_home() ) { 
	$bg_img = get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_background_image', true);
	$title = get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_title', true);
	$botton_header = get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_bottom_section_header', true);
	$bottom_desc = get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_bottom_section_description', true);
?>
	<section class="ss-banner" style="background-image: url('<?php echo !empty($bg_img) ? wp_get_attachment_url($bg_img) : site_url() . "/wp-content/uploads/2024/09/new-blog-banner-bg-img.jpg"; ?>');">
		<div class="container">
			<h1><?php echo !empty($title) ? $title : 'Our Blog' ;?></h1>
			<?php if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<div id="breadcrumbs" class="ss-banner__breadcrumbs">', '</div>');
			} ?>
			<?php wpex_display_breadcrumbs();?> 
		</div>
	</section>
	<!-- /.ss-banner -->
	<section class="blog-section container">
		<?php the_title('<h2 class="hidden-title">', '</h2>'); ?>
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 9,
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $paged
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
		?>
			<div class="blog-card__row">
				<?php
					while ($query->have_posts()) : $query->the_post(); 
				?>
					<div class="blog-card__item">
						<article class="blog-card">
							<?php
								$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
								$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'medium' )[0];
								
								if(!empty($thumbnail_url)){
							?>
								<picture class="blog-card__media">
									<source srcset="<?php echo esc_url( $thumbnail_url ); ?>" type="image/jpg">
									<img width="416" height="263" src="<?php echo esc_url( $thumbnail_url ); ?>" loading="lazy" alt="<?php the_title_attribute(); ?>">
								</picture>
							<?php }else{ ?>
								<picture class="blog-card__media">
									<source srcset="<?php echo site_url(); ?>/wp-content/uploads/2024/09/blog-feature-img01.jpg" type="image/jpg">
									<img width="416" height="263" src="<?php echo site_url(); ?>/wp-content/uploads/2024/09/blog-feature-img01.jpg" loading="lazy" alt="Blog image">
								</picture>
							<?php } ?>
							<div class="blog-card__body">
								<h3><?php the_title(); ?></h3>
								<div class="line-clamp-4">
									<?php echo wpautop(wp_trim_words( get_the_content(), 20, '...' )); ?>
								</div>
							</div>
							<a href="<?php echo the_permalink(); ?>" class="blog-card__link">Read More <img width="20" height="10" src="<?php echo site_url(); ?>/wp-content/uploads/2024/09/arrow-right-blue.png" loading="lazy" alt="Blog image"></a>
						</article>
						<!-- /.blog-card -->
					</div>
				<?php endwhile; ?>
			</div>

		<!-- Pagination goes here -->
		<?php
				$big = 999999999; 
				$current_page = max( 1, get_query_var('paged') );
				$total_pages = $query->max_num_pages;
			
				
				echo '<div class="ss-pagination-wrapper">';
				echo '<div class="pagination-info">';
				printf( 'Showing Page %d of %d', $current_page, $total_pages );
				echo '</div>';
			
				
				$pagination = paginate_links( array(
					'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'    => 'page/%#%/', 
					'current'   => $current_page,
					'total'     => $total_pages,
					'prev_text' => __('Previous'),
					'next_text' => __('Next'),
					'type'      => 'array',
					'mid_size'  => 0,
					'end_size'  => 0,
					'show_all'  => false,
				) );
			
				if ( $pagination ) {
					echo '<div class="pagination-links">';
					foreach ( $pagination as $link ) {
						if ( strpos( $link, 'Previous' ) !== false || strpos( $link, 'Next' ) !== false ) {
							echo $link;
						}
					}
					echo '</div>';
				}
				echo '</div>'; 
			
				wp_reset_postdata();
			
			endif;
		?>
		<!-- Pagination goes here -->
	</section>
	<?php if(!empty($botton_header) || !empty($bottom_desc) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['url']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['url'])) {?>
		<!-- Blog section -->
		<div class="vc_row wpb_row vc_row-fluid footer-callout  ">
			<div class="clr   footer-callout">
				<div class="container clr">
					<div class="center-row-inner clr">
						<?php if(!empty($botton_header) || !empty($bottom_desc)){  ?>
							<div class="vc_col-sm-6 wpb_column column_container   ">
								<div class="clr ">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<?php if(!empty($botton_header)){ ?><h2><?php echo $botton_header; ?></h2><?php } ?>
											<?php if(!empty($bottom_desc)){ ?><h3><?php echo $bottom_desc; ?></h3><?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php if (!empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['url']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['url'])) { ?>
							<div class="vc_col-sm-6 wpb_column column_container   ">
								<div class="clr ">
									<?php if (!empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['url'])) { ?><a class="wpb_button_a" title="<?php echo esc_url(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['title']); ?>" href="<?php echo esc_url( get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['url'] ); ?>"><span class="wpb_button  wpb_wpb_button wpb_btn-large"><?php echo get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_contact_us_cta', true)['title'] ; ?></span></a><?php } ?>
									<?php if (!empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['title']) || !empty(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['url'])) { ?><a class="wpb_button_a" title="<?php echo esc_url(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['title']); ?>" href="<?php echo esc_url(get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['url']); ?>"><span class="wpb_button  wpb_wpb_button wpb_btn-large"><?php echo get_post_meta(get_queried_object_id(),'ss_blog_archive_ss_create_account_cta', true)['title']; ?></span></a><?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- CTA block -->
	<?php } ?>
<?php } 
else {?>
	<div id="content-wrap" class="container clr <?php echo wpex_get_post_layout_class(); ?>">
		<section id="primary" class="content-area clr">
			<div id="content" class="site-content" role="main">
				<?php
				// Display posts if there are some
				if ( have_posts() ) : ?>
					<div id="blog-entries" class="clr <?php wpex_blog_wrap_classes(); ?>">
						<?php
						// Start counters to create rows
						$wpex_total_posts=0;
						$wpex_count=0;
						// Loop through posts
						while ( have_posts() ) : the_post();
							// Add row for the fit rows style blog
							if ( 0 == $wpex_count && wpex_blog_fit_rows() ) { ?>
								<div class="blog-row clr">
							<?php }
							// Add to counters
							$wpex_count++;
							$wpex_total_posts++;
							 // Get correct entry template part
							get_template_part( 'content', get_post_format() );
							// Reset counter
							if ( wpex_blog_entry_columns() == $wpex_count ) {
								// Close row for the fit rows style blog
								if ( 'grid-entry-style' == wpex_blog_fit_rows() ) {
									echo '</div><!-- .row -->';
								}
								$wpex_count=0;
							}
						// End loop
						endwhile;
						// Make sure row is closed for the fit rows style blog
						if ( 'grid-entry-style' == wpex_blog_fit_rows() ) {
							if ( '4' == wpex_blog_entry_columns() && ( $wpex_total_posts % 4 != 0 ) ) {
								echo '</div><!-- .row -->';
							}
							if ( '3' == wpex_blog_entry_columns() && ( $wpex_total_posts % 3 != 0 ) ) {
								echo '</div><!-- .row -->';
							}
							if ( '2' == wpex_blog_entry_columns() && ( $wpex_total_posts % 2 != 0 ) ) {
								echo '</div><!-- .row -->';
							}
						} ?>
					</div><!-- #blog-entries -->
				<?php
				// Display pagination
				// See function/pagination.php
				wpex_blog_pagination(); ?>
				<?php endif; ?>
			</div><!-- #content -->
		</section><!-- #primary -->
		<?php
		// Get site sidebar
		get_sidebar(); ?>
    </div><!-- .container -->
<?php } ?>
<?php
// Get site footer
get_footer(); ?>