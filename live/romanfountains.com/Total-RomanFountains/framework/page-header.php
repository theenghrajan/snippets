<?php
/**
 * Function used to display the page subheading
 *
 * @package Total
 * @subpackage Functions
 * @author Alexander Clarke
 * @copyright Copyright (c) 2014, Symple Workz LLC
 * @link http://www.wpexplorer.com
 * @since Total 1.0
 */

/**
 * Returns the correct title to display
 *
 * @since Total 1.0
 */
if ( ! function_exists('wpex_page_title') ) {
	function wpex_page_title( $title = '' ) {
		
		// Get post
		global $post;
		
		// Homepage - display blog description if not a static page
		if ( is_front_page() && !is_singular( 'page' ) ) {
			
			if ( get_bloginfo( 'description' ) ) {
				$title = get_bloginfo( 'description' );
			} else {
				return __( 'Recent Posts', 'wpex' );
			}

		// Homepage posts page
		} elseif ( is_home() && !is_singular( 'page' ) ) {

			$title = get_the_title( get_option('page_for_posts', true) );
			
		// Archives
		} elseif ( is_archive() ) {
			
			// Daily archive title
			if ( is_day() ) {
				$title = sprintf( __( 'Daily Archives: %s', 'wpex' ), get_the_date() );
			
			// Monthly archive title
			} elseif ( is_month() ) {
				$title = sprintf( __( 'Monthly Archives: %s', 'wpex' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'wpex' ) ) );
				
			// Yearly archive title
			} elseif ( is_year() ) {
				$title = sprintf( __( 'Yearly Archives: %s', 'wpex' ), get_the_date( _x( 'Y', 'yearly archives date format', 'wpex' ) ) );

			// Post Type archive title
			} elseif ( is_post_type_archive() ) {

				if ( is_post_type_archive( 'product' ) ) {
					if ( class_exists( 'Woocommerce' ) && function_exists( 'wc_get_page_id' ) ) {
						$title = get_the_title( wc_get_page_id( 'shop' ) );
					} else {
						$title = __( 'Shop', 'wpex' );
					}
				} else {
					$title = post_type_archive_title('', false);
				}
			
			// Standard term title
			} else {
				$title = single_term_title( "", false );
				
				// Fix for bbPress and other plugins that are archives but use
				// Standard templates...zzz
				if ( $title == '' ) {
					$title = get_the_title( $post->ID );
				}
			}
			
		// Search
		} elseif( is_search() ) {

			global $wp_query;
			
			$title = '<span id="search-results-count">'. $wp_query->found_posts .'</span> '. __( 'Search Results Found', 'wpex' );
			
		// 404 Page
		} elseif ( is_404() ) {
			
			$title = wpex_option( 'error_page_title', __( '404: Page Not Found', 'wpex') );
		
		// All else
		} elseif ( $post ) {
			// Singular products
			if ( is_singular( 'product' ) ) {
				$title = wpex_option( 'woo_shop_single_title', __( 'Store', 'wpex' ) );

			// Single posts
			} elseif( is_singular( 'post' ) ) {

				// Display custom text for blog post header
				if ( 'custom_text' == wpex_option( 'blog_single_header', 'custom_text' ) ) {
					$title = wpex_option( 'blog_single_header_custom_text', __( 'Blog', 'wpex' ) );
				}
				// Display post title for single posts
				else {
					$title = get_the_title( $post->ID );
				}

			}

			// All other
			else {
				$title = get_the_title( $post->ID );
			}
		}

		// Tribe Events Calendar Plugin title
		if ( function_exists( 'tribe_is_month' ) ) {
			if( tribe_is_month() ) {
				$title = __( 'Events Calendar', 'wpex' );
			} elseif ( function_exists( 'tribe_is_event' ) && function_exists( 'tribe_is_day' ) && tribe_is_event() && !tribe_is_day() && !is_single() ) {
				$title = __( 'Events List', 'wpex' );
			} elseif ( function_exists( 'tribe_is_event' ) && function_exists( 'tribe_is_day' ) && tribe_is_event() && !tribe_is_day() && is_single() ) {
				$title = __( 'Single Event', 'wpex' );
			} elseif ( function_exists( 'tribe_is_day' ) && tribe_is_day() ) {
				$title = __( 'Single Day', 'wpex' );
			}
		}

		// Backup
		$title = $title ? $title : get_the_title();

		// Return title and apply filters
		return apply_filters( 'wpex_title', $title );
		
	}
}

/**
 * Returns the page subheading
 *
 * @since Total 1.0
 */
if ( ! function_exists('wpex_post_subheading') ) {
	function wpex_post_subheading() {

		// Define output var
		$output='';
		
		// Posts & Pages
		if ( is_singular () ) {
			global $post;
			$subheading = get_post_meta( $post->ID, 'wpex_post_subheading', true );
			$subheading = apply_filters( 'wpex_post_subheading', $subheading );
			$output = '';
			if ( $subheading ) {
				$output .= '<div class="clr page-subheading">';
					$output .= do_shortcode( $subheading );
				$output .= '</div>';
			}
		}

		// Categories
		elseif ( is_category()
			&& wpex_option( 'category_descriptions', '1' )
			&& 'under_title' == wpex_option( 'category_description_position', 'under_title' ) ) {
			if ( term_description() ){
				$output .= '<div class="clr page-subheading term-description">';
					$output .= term_description();
				$output .= '</div>';
			}
		}
		
		// Taxonomies
		elseif ( is_tax() ) {
			$obj = get_queried_object();
			$taxonomy = $obj->taxonomy;
			$term_id = $obj->term_id;
			$description = term_description($term_id,$taxonomy);
			if ( ! empty( $description ) ){
				$output .= '<div class="clr page-subheading term-description">';
					$output .= $description;
				$output .= '</div>';
			}
		}
		
		// Return content
		return apply_filters( 'wpex_post_subheading', $output );
		
	}
}

/**
 * Outputs the entire page header/title
 *
 * @since Total 1.0
 */
if ( ! function_exists( 'wpex_page_header' ) ) {
	function wpex_page_header() {

		// Get global $post var
		global $post;

		// If title is empty return false
		if ( ! wpex_page_title() ) {
			return;
		}
		
		// Not used for author archives
		if ( is_author() ) {
			return;
		}

		// Disable on store
		if ( is_post_type_archive( 'product' ) && !wpex_option( 'woo_shop_title' ) ) {
			return;
		} elseif ( class_exists( 'Woocommerce' ) && function_exists( 'wc_get_page_id' ) ) {
			$shop_id = wc_get_page_id( 'shop' );
			if ( is_post_type_archive( 'product' ) && isset( $shop_id ) ) {
				if ( 'on' == get_post_meta( $shop_id, 'wpex_disable_title', true ) ) {
					return;
				}
			}
		}

		// Return if page header is disabled via custom field
		if ( $post && is_singular() ) {
			if ( 'on' == get_post_meta( get_the_ID(), 'wpex_disable_title', true ) ) {
				return;
			}
		}
		
		// Declare vars
		$output=$classes=$height=$style=$title_bg=$title_style='';
		$disable_title = isset($disable_title) ? $disable_title : '';
		$breadcrumbs = true;

		// Get title style via custom fields
		if ( $post ) {
			$title_style = get_post_meta( $post->ID, 'wpex_post_title_style', true );
		}
		
		// Page meta options
		if ( is_singular ( 'page' ) || is_singular ( 'portfolio' ) || is_singular ( 'staff' ) || is_singular ( 'post' ) ) {
			
			// Get title style
			if ( empty( $title_style ) ) {
				$title_style = wpex_option( 'page_header_style' );
			}
			
			// Custom Classes
			if ( $title_style !== 'default' && $title_style ) { 
				$classes .= $title_style .'-page-header';
			}
			
			// Disable breadcrumbs if background image set
			if ( $title_style == 'background-image' || $title_style == 'centered' || $title_style == 'centered-minimal' ) {
				$breadcrumbs = false;
			}
		
		}
		
		
		// Before Hook
		wpex_hook_page_header_before(); ?>
		<?php if ( !is_home() ) { ?>
			<header class="page-header <?php echo $classes; ?>">
				<?php
				// Top Hook
				wpex_hook_page_header_top(); ?>
				<div class="container clr page-header-inner">
					<?php
					// Inner hook - IN PROGRESS!!!
					wpex_hook_page_header_inner();

					//  Main header
					if (is_product()) {
                        $heading = apply_filters( 'wpex_page_header_heading', 'h1');
					echo '<'. $heading .' class="page-header-title">'. get_the_title() .'</'. $heading .'>';
                    }else{
					//  Main header
					$heading = apply_filters( 'wpex_page_header_heading', 'h1');
					echo '<'. $heading .' class="page-header-title">'. wpex_page_title() .'</'. $heading .'>'; 
                    }
					
					// Function used to display the subheading defined in the meta options
					echo wpex_post_subheading();
					
					// Display built-in breadcrumbs - see functions/breadcrumbs.php
					if ( ! is_front_page() && $breadcrumbs ) {
						wpex_display_breadcrumbs();
					} 
					
					
					
					?>
					
				</div><!-- .page-header-inner -->
				<?php
				// Bottom Hook
				wpex_hook_page_header_bottom(); ?>
			</header><!-- .page-header -->
		<?php } ?>
		<?php
		// After Hook
		wpex_hook_page_header_after(); ?>
		
	<?php
	}
}

/**
 * Checks whether or not the page header should display on a given page
 *
 * @since Total 1.52
 * @return bool
 */
if ( ! function_exists( 'wpex_display_page_header' ) ) {
	function wpex_display_page_header( $return = true ) {
		if ( wpex_is_overlay_header_enabled() ) {
			$return = false;
		}
		$return = apply_filters( 'wpex_display_page_header', $return );
		if ( $return == true ) {
			return wpex_page_header();
		}
	}
}

/**
 * Outputs Custom CSS for the page title
 *
 * @since Total 1.53
 */
if ( !function_exists( 'wpex_page_header_overlay' ) ) {
	function wpex_page_header_overlay() {

		// Only needed for single posts
		if ( !is_singular() ) {
			return;
		}

		// If a background image is defined
		if ( 'background-image' == get_post_meta( get_the_ID(), 'wpex_post_title_style', true ) ) {
			// Check that overlay style isn't set to none
			if ( 'none' != get_post_meta( get_the_ID(), 'wpex_post_title_background_overlay', true ) ) {
				// Add opacity style if opacity is defined
				if ( '' != get_post_meta( get_the_ID(), 'wpex_post_title_background_overlay_opacity', true ) ) {
					$opacity = 'style="opacity:'. get_post_meta( get_the_ID(), 'wpex_post_title_background_overlay_opacity', true ) .'"';
				} else {
					$opacity = '';
				}
				// Echo the span for the background overlay
				echo '<span class="background-image-page-header-overlay style-'. get_post_meta( get_the_ID(), 'wpex_post_title_background_overlay', true ) .'" '. $opacity .'></span>';
			}
		}
		// No background image defined so return nothing
		else {
			return;
		}

	}
}
add_action( 'wpex_hook_page_header_bottom', 'wpex_page_header_overlay' );

/**
 * Outputs Custom CSS for the page title
 *
 * @since Total 1.53
 */
if ( ! function_exists( 'wpex_page_header_css' ) ) {
	function wpex_page_header_css( $output ) {

		// Only needed for singular posts
		if ( !is_singular() ) {
			return $output;
		}

		// Define var
		$css = $bg_img = '';
		$title_style = get_post_meta( get_the_ID(), 'wpex_post_title_style', true );

		// Background Color
		if ( $title_style == 'solid-color' || $title_style == 'background-image' ) {
			$title_bg_color = get_post_meta( get_the_ID(), 'wpex_post_title_background_color', true );
			if ( $title_bg_color ) {
				$css .='background-color: '. $title_bg_color .';';
			}
		}

		// Background image
		if ( $title_style == 'background-image' ) {
			$bg_img = get_post_meta( get_the_ID(), 'wpex_post_title_background_redux', true );
			if ( is_array( $bg_img ) && !empty( $bg_img['url'] ) ) {
				$bg_img = $bg_img['url'];
			} else {
				$bg_img = get_post_meta( get_the_ID(), 'wpex_post_title_background', true );
			}
			if ( $bg_img ) {
				$css .= 'background-image: url('. $bg_img .');background-position:50% 0;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;';
			}
		}

		// Custom height
		$title_height = get_post_meta( get_the_ID(), 'wpex_post_title_height', true );
		$title_height = $title_height ? $title_height : '400';
		$title_height = intval( $title_height ) .'px';
		if ( $title_height && $bg_img ) {
			$css .= 'height: '.$title_height.';';
		}

		// Put everything together and return CSS
		if ( '' != $css ) {
			$output .= '.page-header { '. $css .' }';
		}

		// Return css
		return $output;
	}
}
add_filter( 'wpex_custom_css_filter', 'wpex_page_header_css' );
