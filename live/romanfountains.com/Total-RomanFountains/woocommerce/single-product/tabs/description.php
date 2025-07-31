<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $post;

if ( wpex_option( 'woo_product_tabs_headings' ) ) {
	$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) ); ?>
	<h2 class="woo-tab-description-heading"><?php echo $heading; ?></h2>
<?php } ?>

<?php the_content(); ?>

<h3>Documentation &amp; Downloads</h3>

<div class="vc_row wpb_row vc_row-fluid doc-downloads">
	<div class="clr ">

		<?php
			if( get_field('cad_file') ){
				$attachment_id = get_field('cad_file');
				$dwgFileUrl = wp_get_attachment_url( $attachment_id );
				?>
				<div class="vc_col-sm-6 wpb_column column_container">
					<div class="clr">

						<div class="vcex-clr vcex-icon-box-one vcex-icon-box-with-link align-center">
							<?php
								if( !is_user_logged_in() ){
										echo '<a href="#" data-mfp-src="#account-required" class="open-popup-link">';
								}else{
								?>
									<a href="/cad-download?download=<?php echo $dwgFileUrl ?>" class="vcex-icon-box-one-link">
								<?php } ?>
								<div class="vcex-icon-box-one-icon vcex-icon-box-icon">
									<span class="fa fa-file-o"></span>
								</div>
								<h4 class="vcex-icon-box-one-heading font-weight-normal text-transform-uppercase"><?php echo get_the_title() ?> Cad File</h4>
							</a>
							<div class="vcex-icon-box-one-content clr">
								<p><small>DWG | <?php echo size_format(filesize( get_attached_file( $attachment_id ) )) ?></small></p>
							</div>
						</div>

					</div>
				</div>

		<?php } ?>

		<?php
			if( get_field('cut_sheet') ){
				$attachment_id2 = get_field('cut_sheet');
				$cutSheetFileUrl = wp_get_attachment_url( $attachment_id2 );
				?>
				<div class="vc_col-sm-6 wpb_column column_container">
					<div class="clr ">

						<div class="vcex-clr vcex-icon-box-one vcex-icon-box-with-link align-center">
							<a href="<?php echo $cutSheetFileUrl ?>" class="vcex-icon-box-one-link" target="_blank">
								<div class="vcex-icon-box-one-icon vcex-icon-box-icon">
									<span class="fa fa-file-pdf-o"></span>
								</div>
								<h4 class="vcex-icon-box-one-heading font-weight-normal"><?php echo get_the_title() ?> Cut Sheet</h4>
							</a>
							<div class="vcex-icon-box-one-content clr">
								<p><small>PDF | <?php echo size_format(filesize( get_attached_file( $attachment_id2 ) )); ?></small></p>
							</div>
						</div>

					</div>
				</div>

			<?php } ?>

	</div>
</div>