<?php

/**
 * Kreativ Pro.
 *
 * This file adds the front page template to the Kreativ Pro Theme.
 *
 * Template Name: Scoring Template
 *
 * @package Kreativ
 * @author  ThemeSquare
 * @license GPL-2.0+
 * @link    http://themesquare.com/themes/kreativ/
 */

// Add landing page body class to the head.
remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'awd_container');

function awd_container()
{ ?>
	<div class="scoring-template awd-template">
		<div class="wrap">
			<div class="awd-wrap">
				<?php if (have_rows('score_btn_links')): $count = 1; ?>
					<div class="scoring-btn">
						<?php while (have_rows('score_btn_links')): the_row(); ?>
							<?php
							$score_link_item = get_sub_field('score_link_item', 'options');
							?>
							<div class="scoring-item"><a href="<?php echo $score_link_item['url']; ?>"><?php echo $score_link_item['title']; ?></a></div>
						<?php $count++;
						endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="scoring-title-area text-center">
					<?php if (get_field('scoring_sec_title')) : ?><h1 class="section-title"><?php echo get_field('scoring_sec_title'); ?></h1><?php endif; ?>
					<p>Take the pressure out of grading with writing scoring services to support homeschool families. At Essentials in Writing, we know how important it is for parents to have a simple and effective homeschool grading system that gives students the feedback they need to improve. Our scoring services offer detailed, precise evaluations that free up your time while helping students grow as confident writers.</p>
					<?php if (get_field('score_sec_year')) : ?><div class="section-year"><?php echo get_field('score_sec_year'); ?></div><?php endif; ?>
					<?php if (get_field('score_sec_status')) : ?><div class="section-status"><?php echo get_field('score_sec_status'); ?></div><?php endif; ?>
				</div>
				<div class="two-thirds first">
					<?php if (get_field('score_left_content')) : ?>
						<div class="left-content">
							<?php echo get_field('score_left_content'); ?>
						</div>
					<?php endif; ?>
					<div class="feedback-items">
						<?php if (get_field('score_feedback_title')) : ?>
							<div class="feedback-title">
								<h3 class="text-center"><?php echo get_field('score_feedback_title'); ?></h3>
							</div>
						<?php endif; ?>
						<?php if (have_rows('score_feedback_items')): $count = 1;
							while (have_rows('score_feedback_items')): the_row(); ?>
								<?php
								$sf_item_content = get_sub_field('sf_item_content');
								$sf_item_name = get_sub_field('sf_item_name');
								$sf_item_date = get_sub_field('sf_item_date');
								?>
								<div class="feedback-item">
									<div class="feedback-star">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</div>
									<div class="feedback-content"><?php echo $sf_item_content; ?></div>
									<div class="feedback-author">
										<div class="feedback-name"><?php echo $sf_item_name; ?></div>
										<div class="feedback-date"><?php echo $sf_item_date; ?></div>
									</div>
								</div>
						<?php $count++;
							endwhile;
						endif; ?>
					</div>
				</div>
				<div class="one-third">
					<?php if (get_field('scoring_right_content')) : ?>
						<?php $scoring_right_content = get_field('scoring_right_content'); ?>
						<div class="scoring-right-content"><?php echo $scoring_right_content; ?></div>
					<?php endif; ?>
					<?php if (have_rows('service_items')): $count = 1; ?>
						<div class="service-items">
							<?php while (have_rows('service_items')): the_row(); ?>
								<?php
								$service_item_title = get_sub_field('service_item_title');
								$service_shopify_product = get_sub_field('shopify_scoring_product');
								$service_disabled = get_sub_field('disabled');

								$service_item_pdf = get_sub_field('service_item_pdf');
								if ($service_item_pdf) :
									$pdf_url = $service_item_pdf['url'];
									$pdf_title = $service_item_pdf['title'];
									$pdf_caption = $service_item_pdf['caption'];
									$pdf_icon = $service_item_pdf['icon'];
								endif;

								$service_item2_pdf = get_sub_field('service_item2_pdf');
								if ($service_item2_pdf) :
									$pdf_url2 = $service_item2_pdf['url'];
									$pdf_title2 = $service_item2_pdf['title'];
									$pdf_caption2 = $service_item2_pdf['caption'];
									$pdf_icon2 = $service_item2_pdf['icon'];
								endif;

								?>
								<div class="service-item">
									<div class="service-title"><?php echo $service_item_title; ?></div>
									<div class="service-btn">
										<?php if ($service_disabled) : ?>
											<a class="service-disabled"><span>SOLD OUT</span></a>
										<?php else : ?>
											<a href="#" class="add-to-shopify-cart"
												data-itemname="<?= $service_item_title ?>"
												data-shopify="<?= $service_shopify_product ?>">Buy now</a>
										<?php endif; ?>
									</div>
									<div class="service-pdf">
										<?php if ($service_item_pdf) : ?>
											<a href="<?php echo esc_url($pdf_url); ?>" target="_blank"><span><?php echo esc_html($pdf_title); ?></span></a>
										<?php endif; ?>
										<?php if ($service_item2_pdf) : ?>
											<a href="<?php echo esc_url($pdf_url2); ?>" target="_blank"><span><?php echo esc_html($pdf_title2); ?></span></a>
										<?php endif; ?>
									</div>
								</div>
							<?php $count++;
							endwhile; ?>
						</div>
					<?php endif; ?>
					<div class="phone-section">
						<?php if (get_field('scoring_phone_title')) : ?>
							<div class="phone-title"><?php echo get_field('scoring_phone_title'); ?></div>
						<?php endif; ?>
						<?php if (get_field('scoring_phone_link')) : ?>
							<?php $scoring_phone_link = get_field('scoring_phone_link'); ?>
							<div class="phone-link"><a href="<?php echo $scoring_phone_link['url']; ?>"><?php echo $scoring_phone_link['title']; ?></a></div>
						<?php endif; ?>
					</div>
					<div class="sidebar-tag">
						<?php if (get_field('end_of_sidebar_content')) : ?>
							<div><?php echo get_field('end_of_sidebar_content'); ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> <!-- /.scoring-template -->

	<div class="awd-col1 awd-sec testimonial-blue-slider testimonial-bg-center"
		style="background: url('<?php echo site_url('/wp-content/uploads/2023/12/essential-in-writing-student-campus-studying.jpg'); ?>">
		<div class="wrap">
			<?php echo do_shortcode('[testimonial-slider count="4" category="Featured"]'); ?>
		</div>
	</div>
<?php
}

// Run the Genesis loop.
genesis();
