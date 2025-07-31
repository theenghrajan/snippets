<?php

/**
 * Template Name: Cad Files
 *
 * @package WordPress
 * @subpackage Total
 * @since 1.0
 */

// Get site header
get_header(); ?>

<div id="content-wrap" class="container clr <?php echo wpex_get_post_layout_class(); ?>">
	<section id="primary" class="content-area clr">
		<div id="content" class="site-content clr" role="main">
			<?php
			// Display the page content
			while (have_posts()) : the_post();
				the_content();
			endwhile; ?>

			<?php
			//get all categories then display all products in each term
			$taxonomy = 'product_cat';
			$term_args = array(
				'orderby' => 'name',
				'order' => 'ASC',
				'parent' => 0
			);
			$terms = get_terms($taxonomy, $term_args);

			if ($terms) {
				foreach ($terms as $term) {
			?>

					<?php
					$args = array(
						'post_type' => 'product',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'caller_get_posts' => 1,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'term_id',
								'terms'    => $term->term_id,
							),
						),
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if ($my_query->have_posts()) {  ?>

						<div class="category section">
							<h2><?php echo $term->name; ?></h2>

							<div class="vc_row wpb_row vc_row-fluid">
								<div class="clr" style="padding-top: 20px;">

									<?php
									while ($my_query->have_posts()) : $my_query->the_post();

										//Check if it has a cad file
										if (get_field('cad_file')) {
											$attachment_id = get_field('cad_file');
											$url = wp_get_attachment_url($attachment_id);
									?>

											<div class="vc_col-sm-3 wpb_column column_container cad_file">
												<div class="clr">
													<div class="vcex-clr vcex-icon-box-one vcex-icon-box-with-link  align-center">
														<div class="vcex-icon-box-one-icon vcex-icon-box-icon">
															<span class="fa fa-file-o"></span>
														</div>
														<div class="vcex-icon-box-one-content clr">
															<h3><?php the_title() ?></h3>
															<?php
															// if( !is_user_logged_in() ){
															// 	echo '<a href="#" data-mfp-src="#account-required" class="open-popup-link vcex-icon-box-one-link">Download</a>';
															// }else{
															$myfile = filesize(get_attached_file($attachment_id));
															$docsize = size_format($myfile);

															echo '<small>DWG | ' . $docsize . '</small><br />';
															echo '<a href="#" class="cad-download-trigger" data-product_id="' . get_the_ID() . '">Download</a>';
															// }
															?>
														</div>
													</div>
												</div>
											</div>

									<?php
										}

									endwhile;
									?>
								</div>
							</div>

						</div> <?php //End Section 
								?>
			<?php
					}
				}
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>

		</div>
	</section><!-- #primary -->
	<?php
	// Get site sidebar
	get_sidebar(); ?>
</div><!-- #content-wrap -->

<?php
// Get site footer
get_footer(); ?>


<div id="cad-download-popup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999;">
	<div class="popup-inner">
		<div class="popup-content">
			<button id="cad-popup-close">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
					<circle cx="15.9997" cy="16" r="10.6667" fill="black" />
					<path d="M16 0C7.21188 0 0 7.21188 0 16C0 24.7881 7.21188 32 16 32C24.7881 32 32 24.7881 32 16C32 7.21188 24.7881 0 16 0ZM23.955 21.3036L21.3036 23.955L16 18.6514L10.6964 23.955L8.045 21.3036L13.3486 16L8.045 10.6964L10.6964 8.045L16 13.3486L21.3036 8.045L23.955 10.6964L18.6514 16L23.955 21.3036Z" fill="white" />
				</svg>
			</button>
			<form id="cad-download-form">
				<div class="popup-title">
					<h2>Get Free Instant Access!</h2>
					<p>Enter your email below to receive immediate access</p>
				</div>
				<div class="form-wrap">
					<input type="email" name="email" required placeholder="Email">
					<input type="hidden" name="product_id" value="">
					<button type="submit" class="btn-submit">Submit</button>
				</div>
			</form>
			<div id="cad-thank-you-message" style="display:none; color: green; margin-top: 20px;">
				Thank you! The download link has been sent to your email.
			</div>
		</div>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('.cad-download-trigger').forEach(el => {
			el.addEventListener('click', function(e) {
				e.preventDefault();
				const productId = el.getAttribute('data-product_id');
				const popup = document.getElementById('cad-download-popup');
				popup.querySelector('input[name="product_id"]').value = productId;
				popup.style.display = 'block';
				popup.querySelector('#cad-thank-you-message').style.display = 'none';
				popup.querySelector('#cad-download-form').style.display = 'block';
			});
		});

		document.getElementById('cad-popup-close').addEventListener('click', function() {
			document.getElementById('cad-download-popup').style.display = 'none';
		});

		document.getElementById('cad-download-form').addEventListener('submit', function(e) {
			e.preventDefault();

			const form = e.target;
			const email = form.email.value;
			const product_id = form.product_id.value;

			const formData = new FormData();
			formData.append('action', 'send_cad_email');
			formData.append('email', email);
			formData.append('product_id', product_id);

			fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
				method: 'POST',
				body: formData
			}).then(res => res.json()).then(data => {
				if (data.success) {
					form.style.display = 'none';
					document.getElementById('cad-thank-you-message').style.display = 'block';
					setTimeout(() => {
						document.getElementById('cad-download-popup').style.display = 'none';
						form.reset();
					}, 5000);
				} else {
					alert(data.message || 'Something went wrong.');
				}
			});
		});
	});
</script>