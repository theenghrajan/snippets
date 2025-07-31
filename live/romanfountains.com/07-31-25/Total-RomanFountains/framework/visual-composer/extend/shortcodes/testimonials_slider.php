<?php
/**
 * Registers the testimonials slider shortcode and adds it to the Visual Composer
 *
 * @package Total
 * @subpackage Visual Composer
 * @since Total 1.41
 */

if( !function_exists('vcex_testimonials_slider_shortcode') ) {
	function vcex_testimonials_slider_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'count'					=> '3',
			'term_slug'				=> '',
			'include_categories'	=> '',
			'exclude_categories'	=> '',
			'category'				=> 'all',
			'order'					=> 'DESC',
			'orderby'				=> 'date',
			'skin'					=> 'light',
			'font_size'				=> '',
			'font_weight'			=> '',
			'background'			=> '',
			'background_image'		=> '',
			'background_style'		=> 'stretch',
			'css_animation'			=> '',
			'filter_content'		=> 'false',
			'excerpt'				=> 'false',
			'excerpt_length'		=> '20',
			'read_more'				=> 'true',
			'read_more_text'		=> __( 'read more', 'wpex' ),
			'offset'				=> 0,
			'unique_id'				=> '',
			'slideshow'				=> 'true',
			'slideshow_speed'		=> '7000',
			'animation_speed'		=> '600',
			'display_author_name'	=> 'false',
			'display_author_avatar'	=> 'false',
			'display_author_company'=> 'false',
		), $atts ) );

		// Turn output buffer on
		ob_start();
		
		// Animation
		$css_animation_classes = '';
		if ( $css_animation !== '' ) {
			$css_animation_classes = 'wpb_animate_when_almost_visible wpb_'. $css_animation .'';
		}

		// Background Color
		$background_css = '';
		if ( $background ) {
			$background_css .= 'background-color:'. $background .';';
		}
		
		// Background image
		if ( $background_image ) {
			$img_url = wp_get_attachment_url($background_image);
			$background_css .= 'background-image:url('. $img_url .');';
		}

		$background_css = 'style="'. $background_css .'"';

		// Slide Style
		$slide_style = array();

		if ( $font_size ) {
			$slide_style[] = 'font-size: '. $font_size .';';
		}
		
		if ( $font_weight ) {
			$slide_style[] = 'font-weight: '. $font_weight .';';
		}

		$slide_style = implode('', $slide_style);

		if ( $slide_style ) {
			$slide_style = wp_kses( $slide_style, array() );
			$slide_style = ' style="' . esc_attr($slide_style) . '"';
		}

		// Get post meta to check page layout
		if ( is_singular() ) {
			global $post;
			$post_id = $post->ID;
			$post_layout = get_post_meta( $post_id, 'wpex_post_layout', true );
		} else {
			$post_layout = '';
		}
		$inner_slide_container = ( 'full-screen' == $post_layout ) ? 'container' : '';
		
		// Include categories
		$include_categories = ( '' != $include_categories ) ? $include_categories : $term_slug;
		$include_categories = ( 'all' == $include_categories ) ? '' : $include_categories;
		$filter_cats_include = '';
		if ( $include_categories ) {
			$include_categories = explode( ',', $include_categories );
			$filter_cats_include = array();
			foreach ( $include_categories as $key ) {
				$key = get_term_by( 'slug', $key, 'testimonials_category' );
				$filter_cats_include[] = $key->term_id;
			}
		}

		// Exclude categories
		$filter_cats_exclude = '';
		if ( $exclude_categories ) {
			$exclude_categories = explode( ',', $exclude_categories );
			if( ! empty( $exclude_categories ) && is_array( $exclude_categories ) ) {
			$filter_cats_exclude = array();
			foreach ( $exclude_categories as $key ) {
				$key = get_term_by( 'slug', $key, 'testimonials_category' );
				$filter_cats_exclude[] = $key->term_id;
			}
			$exclude_categories = array(
					'taxonomy'	=> 'testimonials_category',
					'field'		=> 'slug',
					'terms'		=> $exclude_categories,
					'operator'	=> 'NOT IN',
				);
			} else {
				$exclude_categories = '';
			}
		}
		
		// Start Tax Query
		if( ! empty( $include_categories ) && is_array( $include_categories ) ) {
			$include_categories = array(
				'taxonomy'	=> 'testimonials_category',
				'field'		=> 'slug',
				'terms'		=> $include_categories,
				'operator'	=> 'IN',
			);
		} else {
			$include_categories = '';
		}
		
		// The Query
		$vcex_testimonials_query = new WP_Query(
			array(
				'post_type'			=> 'testimonials',
				'posts_per_page'	=> $count,
				'offset'			=> $offset,
				'order'				=> $order,
				'orderby'			=> $orderby,
				'filter_content'	=> $filter_content,
				'no_found_rows'		=> true,
				'tax_query'			=> array(
					'relation'		=> 'AND',
					$include_categories,
					$exclude_categories,
				),
				'no_found_rows'		=> true,
			)
		);

		//Output posts
		if( $vcex_testimonials_query->posts ) :
		
			$unique_id = $unique_id ? ' id="'. $unique_id .'"' : NULL;
			
			// Give flexslider a unique name
			$rand_num = rand(1, 100);
			$unique_flexslider_id = 'flexslider-'. $rand_num; ?>

				<script type="text/javascript">
					jQuery(function($){
						if ( $.fn.imagesLoaded != undefined && $.fn.flexslider != undefined ) {
							$(".vcex-flexslider-wrap").removeClass("flexslider-loader");
							var $slider = $("#<?php echo $unique_flexslider_id; ?>");
							$slider.imagesLoaded(function() {
								$slider.flexslider({
									animation: "fade",
									slideshow : <?php echo $slideshow; ?>,
									slideshowSpeed: <?php echo $slideshow_speed; ?>,
									animationSpeed: <?php echo $animation_speed; ?>,
									controlNav : true,
									directionNav: false,
									pauseOnHover: true,
									smoothHeight: true,
									prevText : '<i class=icon-angle-left"></i>',
									nextText : '<i class="icon-angle-right"></i>',
									controlsContainer: ".vcex-slider-container-<?php echo $rand_num; ?>"
								});
							});
						}
					});
				</script>
			
			<?php
			// Animation classes
			$css_animation_classes = '';
			if ( $css_animation !== '' ) {
				$css_animation_classes = 'wpb_animate_when_almost_visible wpb_'. $css_animation .'';
			} ?>
		
			<div class="vcex-testimonials-fullslider vcex-flexslider-wrap <?php echo $skin; ?>-skin vcex-background-<?php echo $background_style; ?> <?php echo $css_animation_classes; ?> vcex-slider-container-<?php echo $rand_num; ?>"<?php echo $unique_id; ?> <?php echo $background_css; ?>>
			
				<div id="<?php echo $unique_flexslider_id; ?>" class="flexslider">
				
					<ul class="slides">
						<?php
						// Loop through posts
						foreach ( $vcex_testimonials_query->posts as $post ) :
							// Post VARS
							$postid = $post->ID;
							$post_title = get_the_title($postid);
							$post_content = $post->post_content;
							$author_name = get_post_meta( $postid, 'wpex_testimonial_author', true );
							// Testimonial start
							if ( '' != $post_content ) { ?>
								<li class="slide">
									<article id="post-<?php echo $postid; ?>" class="vcex-testimonials-fullslider-entry <?php echo $inner_slide_container ; ?>" <?php echo $slide_style; ?>>
										<?php
										// Author avatar
										if ( 'yes' == $display_author_avatar && has_post_thumbnail($postid) ) {
											$post_thumb_id = get_post_thumbnail_id($postid);
											$attachment_url = wp_get_attachment_url( $post_thumb_id );
											/*if ( function_exists('wpex_image_resize') ) {
												$img_url = wpex_image_resize( $attachment_url, '70', '70', true );
											} else {*/
												$img_url = $attachment_url;
											//}
											?>
											<div class="vcex-testimonials-fullslider-avatar vc_col-sm-4 wpb_column column_container">
												<img src="<?php echo $img_url; ?>" alt="<?php echo $author_name; ?>" height="70" width="70" />
											</div>
											<div class="vc_col-sm-8 wpb_column column_container">
												<div class="content">
												<?php }
												// Custom Excerpt
												if ( 'true' == $excerpt ) {
													$read_more = $read_more == 'true' ? true : false;
													if ( 'true' == $read_more ) {
														$read_more_link = '...<a href="'. get_permalink() .'" title="'. $read_more_text .'">'. $read_more_text .'<span>&rarr;</span></a>';
													} else {
														$read_more_link = '...';
													}
													echo wp_trim_words( $post_content, $excerpt_length, $read_more_link );
												}
												// Full content
												else {
													echo "&ldquo;";
													echo apply_filters( 'the_content', $post_content );
													echo "&rdquo;";
												} ?>
												</div>
										<?php
										// Author name
										if ( $author_name && 'yes' == $display_author_name ) {
											$company = get_post_meta( get_the_ID(), 'wpex_testimonial_company', true ); ?>
											<div class="vcex-testimonials-fullslider-author">
												<?php echo '- '.$author_name; ?>
												<?php if ( $company && 'true' == $display_author_company ) {
													$company_url = get_post_meta( get_the_ID(), 'wpex_testimonial_url', true );
													if ( $company_url ) { ?>
														<a href="<?php echo esc_url( $company_url ); ?>" class="vcex-testimonials-fullslider-company" title="<?php echo $company; ?>" target="_blank"><?php echo $company; ?></a>
													<?php } else { ?>
														<span class="vcex-testimonials-fullslider-company"><?php echo $company; ?></span>
													<?php }
												} ?>
											</div>
										<?php } ?>
										</div>
									</article><!-- .vcex-testimonials-fullslider-entry -->
								</li>
							<?php } ?>
						<?php endforeach; ?>
					</ul>
				</div>
			</div><!-- .vcex-testimonials-fullslider --><div class="vcex-clear-floats"></div>
		
		<?php
		endif; // End has posts check
				
		// Reset the WP query postdata
		wp_reset_postdata();

		// Return outbut buffer
		return ob_get_clean();
		
		
	}
}
remove_shortcode('vcex_testimonials_slider');
add_shortcode('vcex_testimonials_slider', 'vcex_testimonials_slider_shortcode');

if ( ! function_exists( 'vcex_testimonials_slider_shortcode_vc_map' ) ) {
	function vcex_testimonials_slider_shortcode_vc_map() {
		vc_map( array(
			"name"					=> __( "Testimonials Slider", 'wpex' ),
			"description"			=> __( "Recent testimonials slider", 'wpex' ),
			"base"					=> "vcex_testimonials_slider",
			'category'				=> WPEX_THEME_BRANDING,
			"icon"					=> "vcex-testimonials-slider",
			"params"				=> array(

				// General
				array(
					"type"			=> "dropdown",
					"heading"		=> __("CSS Animation", "wpex"),
					"param_name"	=> "css_animation",
					"value"			=> array(
						__("No", "wpex")				=> '',
						__("Top to bottom", "wpex")		=> "top-to-bottom",
						__("Bottom to top", "wpex")		=> "bottom-to-top",
						__("Left to right", "wpex")		=> "left-to-right",
						__("Right to left", "wpex")		=> "right-to-left"),
				),

				// Query
				array(
					"type"			=> "textfield",
					"class"			=> "",
					"heading"		=> __( "Include Categories", 'wpex' ),
					"param_name"	=> "include_categories",
					"admin_label"	=> true,
					"value"			=> "",
					"description"	=> __('Enter the slugs of a categories (comma seperated) to pull posts from or enter "all" to pull recent posts from all categories. Example: category-1, category-2.','wpex'),
					'group'			=> __( 'Query', 'wpex' ),
				),
				array(
					"type"			=> "textfield",
					"class"			=> "",
					"heading"		=> __( "Exclude Categories", 'wpex' ),
					"param_name"	=> "exclude_categories",
					"admin_label"	=> true,
					"value"			=> "",
					"description"	=> __('Enter the slugs of a categories (comma seperated) to exclude. Example: category-1, category-2.','wpex'),
					'group'			=> __( 'Query', 'wpex' ),
				),
				array(
					"type"			=> "textfield",
					"heading"		=> __( "Post Count", "wpex" ),
					"param_name"	=> "count",
					"value"			=> "3",
					'group'			=> __( 'Query', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"class"			=> "",
					"heading"		=> __( "Order", 'wpex' ),
					"param_name"	=> "order",
					"value"			=> array(
						__( "DESC", "wpex")	=> "DESC",
						__( "ASC", "wpex" )	=> "ASC",
					),
					'group'			=> __( 'Query', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"class"			=> "",
					"heading"		=> __( "Order By", 'wpex' ),
					"param_name"	=> "orderby",
					"value"			=> array(
						__( "Date", "wpex")				=> "date",
						__( "Name", "wpex" )			=> "name",
						__( "Modified", "wpex")			=> "modified",
						__( "Author", "wpex" )			=> "author",
						__( "Random", "wpex")			=> "rand",
						__( "Comment Count", "wpex" )	=> "comment_count",
					),
					'group'			=> __( 'Query', 'wpex' ),
				),

				// Design
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Style", "wpex"),
					"param_name"	=> "skin",
					"value"			=> array(
						__("Black Text", "wpex")	=> "dark",
						__("White Text", "wpex")	=> "light",
					),
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "textfield",
					"heading"		=> __("Custom Font Size", "wpex"),
					"param_name"	=> "font_size",
					"value"			=> "",
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "textfield",
					"heading"		=> __("Custom Font Weight", "wpex"),
					"param_name"	=> "font_weight",
					"value"			=> "",
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Display Author Name?", "wpex"),
					"param_name"	=> "display_author_name",
					"value"			=> array(
						__( "Yes", "wpex" )	=> "yes",
						__( "No", "wpex" )	=> "no",
					),
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Display Author Avatar?", "wpex"),
					"param_name"	=> "display_author_avatar",
					"value"			=> array(
						__( "Yes", "wpex" )	=> "yes",
						__( "No", "wpex" )	=> "no",
					),
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Display Author Company?", "wpex"),
					"param_name"	=> "display_author_company",
					"value"			=> array(
						__( "No", "wpex" )	=> "false",
						__( "Yes", "wpex" )	=> "true",
					),
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					'type'			=> "dropdown",
					'heading'		=> __( "Excerpt", 'wpex' ),
					'param_name'	=> "excerpt",
					'value'			=> array(
						__( "No", "wpex" )	=> "false",
						__( "Yes", "wpex")	=> "true",
					),
					'group'			=> __( 'Design', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __( "Trim Custom Excerpts", 'wpex' ),
					"param_name"	=> "custom_excerpt_trim",
					"value"			=> array(
						__( 'Yes', 'wpex' )	=> 'true',
						__( 'No', 'wpex' )	=> 'false',
					),
					'group'			=> __( 'Design', 'wpex' ),
					"dependency"	=> Array(
						'element'	=> "excerpt",
						'value'		=> array( 'true' ),
					),
				),
				array(
					'type'			=> "textfield",
					'heading'		=> __( "Excerpt Length", 'wpex' ),
					'param_name'	=> "excerpt_length",
					'value'			=> "20",
					'description'	=> __( 'Enter a custom excerpt length. Will trim the excerpt by this number of words. Enter "-1" to display the_content instead of the auto excerpt.', 'wpex' ),
					'group'			=> __( 'Design', 'wpex' ),
					"dependency"	=> Array(
						'element'	=> 'excerpt',
						'value'		=> array( 'true' )
					),
				),
				array(
					'type'			=> "dropdown",
					'heading'		=> __( "Read More", 'wpex' ),
					'param_name'	=> "read_more",
					'value'			=> array(
						__( "Yes", "wpex")	=> "true",
						__( "No", "wpex" )	=> "false",
					),
					'group'			=> __( 'Design', 'wpex' ),
					"dependency"	=> Array(
						'element'	=> 'excerpt',
						'value'		=> array( 'true' )
					),
				),
				array(
					'type'			=> 'textfield',
					'heading'		=> __( 'Read More Text', 'wpex' ),
					'param_name'	=> 'read_more_text',
					'value'			=> __( 'read more', 'wpex' ),
					'group'			=> __( 'Design', 'wpex' ),
					"dependency"	=> Array(
						'element'	=> 'excerpt',
						'value'		=> array( 'true' )
					),
				),

				// Background
				array(
					"type"			=> "colorpicker",
					"class"			=> "",
					"heading"		=> __( "Background Color", 'wpex' ),
					"param_name"	=> "background",
					"value"			=> "",
					'group'			=> __( 'Background', 'wpex' ),
				),
				array(
					"type"			=> "attach_image",
					"class"			=> "",
					"heading"		=> __( "Background Image", 'wpex' ),
					"param_name"	=> "background_image",
					"value"			=> "",
					'group'			=> __( 'Background', 'wpex' ),
				),
				array(
					"type"			=> "dropdown",
					"heading"		=> __("Background Image Style", "wpex"),
					"param_name"	=> "background_style",
					"value"			=> array(
						__("Stretched", "wpex")	=> 'stretch',
						__("Fixed", "wpex")		=> "fixed",
						__("Parallax", "wpex")	=> "parallax",
						__("Repeat", "wpex")	=> "repeat",
					),
					'group'			=> __( 'Background', 'wpex' ),
				),
			),

		) );
	}
}
add_action( 'init', 'vcex_testimonials_slider_shortcode_vc_map' );