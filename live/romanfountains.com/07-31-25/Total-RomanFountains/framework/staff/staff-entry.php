<?php
/**
 * Returns correct classes for the staff grid
 *
 * @package WordPress
 * @subpackage Total
 * @since Total 1.52
*/
if ( ! function_exists( 'wpex_staff_column_class' ) ) {
	function wpex_staff_column_class( $query ) {
		if ( 'related' == $query ) {
			return wpex_grid_class( wpex_option( 'staff_related_columns', '3' ) );
		} else {
			return wpex_grid_class( wpex_option( 'staff_entry_columns', '3' ) );
		}
	}
}

/**
 * Displays the media (featured image or video ) for the staff entries
 *
 * @package WordPress
 * @subpackage Total
 * @since Total 1.36
*/
if ( ! function_exists( 'wpex_staff_entry_media' ) ) {
	function wpex_staff_entry_media() {
		if ( has_post_thumbnail() ) {
			$wpex_image = wpex_image( 'array' ); ?>
			<div class="staff-entry-media <?php echo wpex_overlay_classname(); ?> clr vcex-img-hover-parent vcex-img-hover-grow">
				<?php if ( wpex_option( 'staff_links_enable', '1' ) == '1' ) { ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<?php } ?>
				<?php the_post_thumbnail('largecroppedtop'); ?>
					<!--<img src="<?php echo $wpex_image['url']; ?>" alt="<?php the_title(); ?>" width="<?php echo $wpex_image['width']; ?>" height="<?php echo $wpex_image['height']; ?>" />-->
					<?php wpex_overlay( 'inside_link' ); ?>
				<?php if ( wpex_option( 'staff_links_enable', '1' ) == '1' ) echo '</a>'; ?>
				<?php wpex_overlay( 'outside_link' ); ?>
			</div><!-- .staff-entry-media -->
		<?php }
	}
}

/**
 * Displays the details for the staff entries
 *
 * @package WordPress
 * @subpackage Total
 * @since Total 1.56
*/
if ( ! function_exists( 'wpex_staff_entry_content' ) ) {
	function wpex_staff_entry_content() {
		// Disabled via the theme admin
		if ( ! wpex_option( 'staff_entry_details', '1' ) ) {
			return;
		}
		// Disabled for related entries
		if ( is_singular( 'staff' ) && ! wpex_option( 'staff_related_excerpts', '1' ) ) {
			return;
		} ?>
		<div class="staff-entry-details">
			<?php
			// Match Height div
			if ( wpex_staff_match_height() ) { ?>
			<div class="match-height-content">
			<?php } ?>
			<h2 class="staff-entry-title">
			<?php if ( wpex_option( 'staff_links_enable', '1' ) == '1' ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" ><?php the_title(); ?></a>
				
			<?php } else { ?>
				<?php the_title(); ?>
			<?php } ?>
			</h2>
			<div class="staff-position"><?php echo wpex_option('wpex_staff_position') ?></div>
			<?php /*
			<div class="staff-entry-excerpt clr">
				<?php wpex_excerpt( wpex_option( 'staff_entry_excerpt_length', '20' ), false ); ?>
			</div><!-- .staff-entry-excerpt -->
			*/ ?>
			<?php
			// Close Match Height div
			if ( wpex_staff_match_height() ) { ?>
			</div>
			<?php } ?>
		</div><!-- .staff-entry-details -->
	<?php }
}