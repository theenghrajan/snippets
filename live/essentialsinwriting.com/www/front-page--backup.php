<?php

/**
 * Kreativ Pro.
 *
 * This file adds the front page template to the Kreativ Pro Theme.
 *
 * Template Name: Front Page
 *
 * @package Kreativ
 * @author  ThemeSquare
 * @license GPL-2.0+
 * @link    http://themesquare.com/themes/kreativ/
 */

// Add landing page body class to the head.
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'awd_container');

function awd_container() {

    if( have_rows('flexible_sections') ): while( have_rows('flexible_sections') ): the_row(); ?>
    	<?php
          $section_type = get_row_layout();
          switch ($section_type) {

          case 'top_banner_slider': // One Column Section
        ?>
            <?php
                $awd_two_slide_bgimg = get_sub_field('awd_two_slide_bgimg');
                $awd_two_slide_bgcolor = get_sub_field('awd_two_slide_bgcolor');
                $awd_col1_bgcolor_value = $awd_two_slide_bgcolor['value'];
	            $awd_col1_bt_style = get_sub_field('awd_col1_bt_style');
	            $awd_col1_bt_style_value = $awd_col1_bt_style['value'];
	            $awd_col1_btinfo = get_sub_field('awd_col1_btinfo');
            ?>

        	<div class="two-col-slider <?php if( get_sub_field('awd_two_slide_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col1_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_two_slide_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_two_slide_bgimg; ?> ');"<?php endif; ?>>
				<div class="tb-items">
					<div class="main-content top-banner-slider">
					<?php if( have_rows('awd_top_banner_items') ): $count = 1; while( have_rows('awd_top_banner_items')): the_row();?>
		            <?php
		    			$count_compare = $count % 3;
		                $tb_item_title = get_sub_field('tb_item_title');
		                $tb_item_img = get_sub_field('tb_item_img');
		                $tb_item_logo = get_sub_field('tb_item_logo');
		                $tb_item_desc = get_sub_field('tb_item_desc');
		                $tb_item_links = get_sub_field('tb_item_links');
		                $tb_item_customer_content = get_sub_field('tb_item_customer_content');
		                $tb_item_customer_name = get_sub_field('tb_item_customer_name');
		                $tb_item_customer_position = get_sub_field('tb_item_customer_position');
		                $tb_item_customer_img = get_sub_field('tb_item_customer_img');
		            ?>
		            <div class="tb-item">
			            <div class="tb-item-wrap" style="background: url(<?php echo $tb_item_img['url']; ?>) no-repeat center center;">
			            	<div class="wrap">
			            	<div class="left-area">
			            		<?php if( $tb_item_desc) : ?><div class="left-content"><?php echo $tb_item_desc; ?></div><?php endif; ?>
			            		<?php if( have_rows('tb_item_links') ): echo '<div class="tb-btn-area">'; $count = 1; while( have_rows('tb_item_links')): the_row();
			            		$tb_item_link = get_sub_field('tb_item_link');
			            		$tb_item_link_target = $tb_item_link['target'] ? $tb_item_link['target'] : '_self';
			            		$tb_item_btn_style = get_sub_field('tb_item_btn_style');
	            				$tb_item_btn_style_value = $tb_item_btn_style['value'];
			            		?>
			            			<div class="tb-btn-item">
			            				<a class="<?php echo $tb_item_btn_style_value; ?>" href="<?php echo esc_url($tb_item_link['url']); ?>" target="<?php echo esc_attr($tb_item_link_target); ?>"><?php echo esc_html($tb_item_link['title']); ?></a>
			            			</div>
			        			<?php endwhile; echo '</div>'; endif; ?>
			            	</div>
			            	<div class="customer-area">
				            	<?php if( $tb_item_customer_content) : ?><div class="tb-customer-content"><?php echo $tb_item_customer_content; ?></div><?php endif; ?>
				            	<div class="customer-details">
				            	<?php if( $tb_item_customer_name) : ?><div class="tb-customer-name"><?php echo $tb_item_customer_name; ?></div><?php endif; ?>
				            	<?php if( $tb_item_customer_position) : ?><div class="two-slide-position"><?php echo $tb_item_customer_position; ?></div><?php endif; ?>
				            	</div>
				            	<div class="tb-customer-logo" style="background-image: url(<?php echo $tb_item_customer_img['url']; ?>); "></div>
			            	</div>
			            	</div>
			            </div>
		            </div>
	            	<?php $count++; ?>
			   	 	<?php endwhile; endif; ?>
			   	 	</div>
            <?php if( have_rows('awd_top_banner_items') ): $count = 1; while( have_rows('awd_top_banner_items')): the_row();?>
			   	 	<div class="wrap">
						<div class="top-banner-nav">
			            <?php
			    			$count_compare = $count % 3;
			                $tb_item_title = get_sub_field('tb_item_title');
			                $tb_item_logo = get_sub_field('tb_item_logo');
			            ?>
				            <div class="nav-item">
				            	<div class="img-area">
				            		<?php if( $tb_item_logo) : ?><div><img src="<?php echo $tb_item_logo['url']; ?>"></div><?php endif; ?>
				            	</div>
				            	<div class="title-area">
					            	<?php if( $tb_item_title) : ?><div class="two-slide-title"><h3><?php echo $tb_item_title; ?></h3></div><?php endif; ?>
				            	</div>
				            </div>
		            	<?php $count++; ?>
				   	 	</div>
			   	 	</div>
            <?php endwhile; endif; ?>
				</div>
		    </div>
          <?php
              break;
              case 'top_banner':
          ?>
              <div class="two-col-banner <?php if( get_sub_field('awd_two_slide_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col1_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_two_slide_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_two_slide_bgimg; ?> ');"<?php endif; ?>>
                  <div class="tb-items">
                      <div class="main-content">
                          <?php
                          $tb_item_title = get_sub_field('tb_item_title');
                          $tb_item_img = get_sub_field('tb_item_img');
                          $tb_item_logo = get_sub_field('tb_item_logo');
                          $tb_item_desc = get_sub_field('tb_item_desc');
                          $tb_item_links = get_sub_field('tb_item_links');
                          $tb_item_customer_content = get_sub_field('tb_item_customer_content');
                          $tb_item_customer_name = get_sub_field('tb_item_customer_name');
                          $tb_item_customer_position = get_sub_field('tb_item_customer_position');
                          $tb_item_customer_img = get_sub_field('tb_item_customer_img');
                          ?>
                          <div class="tb-item">
                              <div class="tb-item-wrap" style="background: url(<?php echo $tb_item_img['url']; ?>) no-repeat center center;">
                                  <div class="wrap">
                                      <div class="left-area">
                                          <?php if( $tb_item_desc) : ?><div class="left-content"><?php echo $tb_item_desc; ?></div><?php endif; ?>
                                          <?php if( have_rows('tb_item_links') ): echo '<div class="tb-btn-area">'; $count = 1; while( have_rows('tb_item_links')): the_row();
                                              $tb_item_link = get_sub_field('tb_item_link');
                                              $tb_item_link_target = $tb_item_link['target'] ? $tb_item_link['target'] : '_self';
                                              $tb_item_btn_style = get_sub_field('tb_item_btn_style');
                                              $tb_item_btn_style_value = (isset($tb_item_btn_style) && !empty($tb_item_btn_style['value']) ? $tb_item_btn_style['value'] : '');
                                              ?>
                                              <div class="tb-btn-item">
                                                  <a class="<?php echo $tb_item_btn_style_value; ?>" href="<?php echo esc_url($tb_item_link['url']); ?>" target="<?php echo esc_attr($tb_item_link_target); ?>"><?php echo esc_html($tb_item_link['title']); ?></a>
                                              </div>
                                          <?php endwhile; echo '</div>'; endif; ?>
                                      </div>
                                      <div class="customer-area">
                                          <?php if( $tb_item_customer_content) : ?><div class="tb-customer-content"><?php echo $tb_item_customer_content; ?></div><?php endif; ?>
                                          <div class="customer-details">
                                              <?php if( $tb_item_customer_name) : ?><div class="tb-customer-name"><?php echo $tb_item_customer_name; ?></div><?php endif; ?>
                                              <?php if( $tb_item_customer_position) : ?><div class="two-slide-position"><?php echo $tb_item_customer_position; ?></div><?php endif; ?>
                                          </div>
                                          <div class="tb-customer-logo" style="background-image: url(<?php echo $tb_item_customer_img['url']; ?>); "></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="wrap">
                          <div class="top-banner-nav">
                              <?php if( have_rows('tb_item_logos') ): $count = 1; while( have_rows('tb_item_logos')): the_row();?>
                                  <?php
                                  $count_compare = $count % 3;
                                  $tb_item_logo = get_sub_field('tb_item_logo');
                                  $tb_logo_link = get_sub_field('tb_logo_link');
                                  $tb_logo_link_url = $tb_logo_link['url'];
                                  $tb_logo_link_title = $tb_logo_link['title'];
                                  $tb_logo_link_target = $tb_logo_link['target'];
                                  ?>
                                  <div class="nav-item">
                                      <div class="img-area">
                                          <?php if( $tb_item_logo) : ?>
                                            <a href="<?php if( $tb_logo_link_url ): echo $tb_logo_link_url; else: echo '<script>void(0)</script>'; endif; ?>" target="<?php echo $tb_logo_link_target ? $tb_logo_link_target : '_self'; ?>">
                                                <img src="<?php echo $tb_item_logo['url']; ?>">
                                            </a>
                                          <?php endif; ?>
                                      </div>
                                      <div class="title-area">
                                          <?php if( $tb_logo_link_title) : ?>
                                              <div class="two-slide-title test">
                                                    <h3><a href="<?php if( $tb_logo_link_url ): echo $tb_logo_link_url; else: echo '<script>void(0)</script>'; endif; ?>" target="<?php echo $tb_logo_link_target ? $tb_logo_link_target : 'self'; ?>"><?php echo $tb_logo_link_title; ?> </a></h3>

                                              </div>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <?php $count++; ?>
                              <?php endwhile; endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
		<?php
		  break;
      //new redesign Featured Banner Section v2
      case 'top_banner_v2':
          ?>
              <div class="one-col-banner featured-banner <?php if( get_sub_field('awd_two_slide_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col1_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_two_slide_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_two_slide_bgimg; ?> ');"<?php endif; ?>>
                  <div class="tb-items">
                      <div class="main-content">
                          <?php
                          $custom_class = get_sub_field('custom_class');
                          $tb_item_img = get_sub_field('tb_item_img');
                          $tb_heading_h1 = get_sub_field('tb_heading_h1');
                          $tb_sub_heading = get_sub_field('tb_sub_heading');
                          $tb_item_desc = get_sub_field('tb_item_desc');
                          $tb_item_links = get_sub_field('tb_item_links');
				  		            $tb_banner_prods = get_sub_field('banner_products');

                          ?>
                          <div class="tb-item">
                              <div class="tb-item-wrap<?php if( $tb_banner_prods ): echo ' banner-product-design'; endif; ?>" style="background: url(<?php echo $tb_item_img['url']; ?>) no-repeat center center;">
                                  <div class="wrap">
                                      <div class="featured-area">
                                        <div class="featured-area-content">
                                          <?php if( $tb_heading_h1) : ?>
                                            <h1 class="featured-banner-title"><?php echo $tb_heading_h1; ?></h1>
                                          <?php endif; ?>
                                           <?php if( $tb_sub_heading) : ?>
                                            <p class="featured-banner-subtitle"><?php echo $tb_sub_heading; ?></p>
                                          <?php endif; ?>

                                          <?php if( $tb_item_links ): ?>
                                            <div class="tb-btn-area">
                                          <?php
                                              $count = 1;
                                              endif;
                                            if( have_rows('tb_item_links') ): while( have_rows('tb_item_links')): the_row();
                                              $tb_item_link = get_sub_field('tb_item_link');
                                              $tb_item_link_target = $tb_item_link['target'] ? $tb_item_link['target'] : '_self';
                                              $tb_item_btn_style = get_sub_field('tb_item_btn_style');

                                              if( get_sub_field('tb_item_btn_style') == 'awd-bt2' ) :
                                              $tb_item_btn_style_val   = 'awd-bt2';
                                              elseif ( get_sub_field('tb_item_btn_style') == 'awd-bt3' ) :
                                              $tb_item_btn_style_val   = 'awd-bt3';
                                              else:
                                              $tb_item_btn_style_val   = 'awd-bt';
                                              endif;
                                              ?>
                                              <div class="tb-btn-item">
                                                  <a id="shop" class="<?php echo $tb_item_btn_style_val; ?>" href="<?php echo esc_url($tb_item_link['url']); ?>" target="<?php echo esc_attr($tb_item_link_target); ?>"><?php echo esc_html($tb_item_link['title']); ?></a>
                                              </div>
                                          <?php endwhile; ?>
                                            </div>
                                         <?php endif; ?>
                                         <!-- start button reveal -->
                                          <?php
                                          if( have_rows('tb_hiddent_btns') ):  ?>
                                            <div id="shopoptions" class="btns-reveal">
                                            <?php
                                            while( have_rows('tb_hiddent_btns')): the_row();
                                              $tb_hidden_btn_link = get_sub_field('tb_hidden_btn_link');
                                              $tb_item_link_target = $tb_hidden_btn_link['target'] ? $tb_hidden_btn_link['target'] : '_self';
                                              $tb_item_btn_style = get_sub_field('tb_hidden_btn_style');

                                              if( get_sub_field('tb_hidden_btn_style') == 'awd-bt2' ) :
                                              $tb_item_btn_style_val   = 'awd-bt2';
                                              elseif ( get_sub_field('tb_item_btn_style') == 'awd-bt3' ) :
                                              $tb_item_btn_style_val   = 'awd-bt3';
                                              else:
                                              $tb_item_btn_style_val   = 'awd-bt';
                                              endif;
                                              ?>
                                              <div class="tb-btn-item">
                                                  <a class="<?php echo $tb_item_btn_style_val; ?>" href="<?php echo esc_url($tb_hidden_btn_link['url']); ?>" target="<?php echo esc_attr($tb_item_link_target); ?>"><?php echo esc_html($tb_hidden_btn_link['title']); ?></a>
                                              </div>
                                          <?php endwhile; ?>
                                        </div>
                                        <? endif; ?>
                                          <!-- end button reveal -->
                                          </div>
                                          <?php if( have_rows('banner_products') ): ?>
                                          <!-- start banner products  -->
                                          <div class="banner-product-column">
                                            <?php if( have_rows('banner_products') ): echo '<div class="tb-product-area">'; $count = 1; while( have_rows('banner_products')): the_row();
                                              $product_img = get_sub_field('product_img');
                                              $size = 'full';
                                              $product_title = get_sub_field('product_title');
                                              $product_price = get_sub_field('product_price');
                                              $product_link = get_sub_field('product_link');
                                              if( $product_link ):
                                              $link_url = $product_link['url'];
                                              $link_title = $product_link['title'];
                                              $link_target = $product_link['target'] ? $product_link['target'] : '_self';
                                              endif;
                                              ?>
                                              <div class="tb-banner-product-item">
                                                <?php if ($product_link) : ?>
                                                    <a class="product-banner-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                <?php endif?>
                                                  <div class="banner-product-img">
                                                  <?php if ($product_img) :
                                                          echo wp_get_attachment_image( $product_img, $size );
                                                        else :
                                                          echo '<img width="82" height="82" src="/wp-content/uploads/2023/11/literature-curriculum.svg" class="attachment-full size-full service-default" alt="EIW Courses" decoding="async" loading="lazy">';
                                                        endif; ?>
                                                  </div>
                                                  <div class="banner-product-meta">
                                                  <?php if ($product_title) :?>
                                                  <h5 class="banner-product-heading<?php if (!$product_price) : echo ' no-price'; endif;?>"><?php echo $product_title; ?></h5>
                                                  <?php endif; ?>
                                                  <?php if ($product_price) :?>
                                                  <div class="banner-product-price"><?php echo $product_price; ?></div>
                                                  <?php endif; ?>
                                                </div>
                                              </div>
                                          <?php endwhile; echo '</div>'; endif; ?>
                                          </div>
                                        </div>
                                        <?php // endif; ?>
                                      </div>
                                          <!-- end banner products  -->
                                          <?php endif; ?>

                                          <?php if( have_rows('icon_services') ): ?>
                                          <div class="service-icons">
                                            <?php if( have_rows('icon_services') ): echo '<div class="tb-service-icon-area">'; $count = 1; while( have_rows('icon_services')): the_row();
                                              $service_icon = get_sub_field('service_icon');
                                              $size = 'full';
                                              $service_link = get_sub_field('service_link');
                                              if( $service_link ):
                                              $link_url = $service_link['url'];
                                              $link_title = $service_link['title'];
                                              $link_target = $service_link['target'] ? $service_link['target'] : '_self';
                                              endif;
                                              ?>
                                              <div class="tb-service-icon-item">
                                                  <a class="" href="<?php echo esc_url($service_link['url']); ?>" target="<?php echo esc_attr($link_target); ?>"></a>
                                                  <div class="service-icon-img">
                                                  <?php if ($service_icon) :
                                                          echo wp_get_attachment_image( $service_icon, $size );
                                                        else :
                                                          echo '<img width="82" height="82" src="/wp-content/uploads/2023/11/literature-curriculum.svg" class="attachment-full size-full service-default" alt="EIW Courses" decoding="async" loading="lazy">';
                                                        endif; ?>
                                                  </div>
                                                  <p class="service-icon-heading">
                                                  <?php echo esc_html($service_link['title']); ?>
                                                  </p>
                                              </div>
                                          <?php endwhile; echo '</div>'; endif; ?>
                                          </div>
                                        <?php endif; ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php if( have_rows('tb_item_logos') ): ?>
                      <div class="wrap">
                          <div class="top-banner-nav">
                              <?php if( have_rows('tb_item_logos') ): $count = 1; while( have_rows('tb_item_logos')): the_row();?>
                                  <?php
                                  $count_compare = $count % 3;
                                  $tb_item_logo = get_sub_field('tb_item_logo');
                                  $tb_logo_link = get_sub_field('tb_logo_link');
                                  $tb_logo_link_url = $tb_logo_link['url'];
                                  $tb_logo_link_title = $tb_logo_link['title'];
                                  $tb_logo_link_target = $tb_logo_link['target'];
                                  ?>
                                  <div class="nav-item">
                                      <div class="img-area">
                                          <?php if( $tb_item_logo) : ?>
                                            <a href="<?php if( $tb_logo_link_url ): echo $tb_logo_link_url; else: echo '<script>void(0)</script>'; endif; ?>" target="<?php echo $tb_logo_link_target ? $tb_logo_link_target : '_self'; ?>">
                                                <img src="<?php echo $tb_item_logo['url']; ?>">
                                            </a>
                                          <?php endif; ?>
                                      </div>
                                      <div class="title-area">
                                          <?php if( $tb_logo_link_title) : ?>
                                              <div class="two-slide-title test">
                                                    <h3><a href="<?php if( $tb_logo_link_url ): echo $tb_logo_link_url; else: echo '<script>void(0)</script>'; endif; ?>" target="<?php echo $tb_logo_link_target ? $tb_logo_link_target : 'self'; ?>"><?php echo $tb_logo_link_title; ?> </a></h3>

                                              </div>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                  <?php $count++; ?>
                              <?php endwhile; endif; ?>
                          </div>
                      </div>
                      <?php endif; ?>
                  </div>
              </div>
        <?php
          break;
          case 'testimonial_section': // One Column Section
        ?>	<div class="awd-testimonial-section  <?php echo get_sub_field('custom_class'); ?>">
	        	<div class="wrap">
					<div class="testimonial-slider">
						<div class="testimonial-item">
							<div class="item-block">
								<div class="item-img">
									<?php $featured_img = get_sub_field('testimonial_img');
									if( !empty( $featured_img ) ): ?>
									    <img src="<?php echo esc_url($featured_img['url']); ?>" alt="<?php echo esc_attr($featured_img['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div class="item-content">
                                    <h2>Testimonial</h2>
									<div class="item-description"><?php echo get_sub_field('testimonial_content'); ?></div>
									<div class="item-author"><?php echo get_sub_field('testimonial_client'); ?></div>
								</div>
							</div>
						</div>
				    </div>
			    </div>
		    </div>

		<?php
		  break;
          case 'two_column_slider': // One Column Section
        ?>
            <?php
                $awd_two_slide_bgimg = get_sub_field('awd_two_slide_bgimg');
                $awd_two_slide_bgcolor = get_sub_field('awd_two_slide_bgcolor');
                $awd_col1_bgcolor_value = $awd_two_slide_bgcolor['value'];
	            $awd_col1_bt_style = get_sub_field('awd_col1_bt_style');
	            $awd_col1_bt_style_value = $awd_col1_bt_style['value'];
	            $awd_col1_btinfo = get_sub_field('awd_col1_btinfo');
            ?>
        	<div class="awd-col1 two-col-slider awd-sec three-col-slider <?php if( get_sub_field('awd_two_slide_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col1_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_two_slide_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_two_slide_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_two_slide_heading') ): ?><h2><?php the_sub_field("awd_two_slide_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_two_slide_subheading') ): ?><h5><?php the_sub_field("awd_two_slide_subheading"); ?></h5><?php endif; ?>
					<div class="two-slider-items">
					<?php if( have_rows('awd_two_slide_items') ): $count = 1; while( have_rows('awd_two_slide_items')): the_row();?>
		            <?php
		    			$count_compare = $count % 3;
		                $two_slide_img = get_sub_field('two_slide_img');
		                $two_slide_title = get_sub_field('two_slide_title');
		                $two_slide_desc = get_sub_field('two_slide_desc');
		            ?>
		            <div>
			            <div class="box-item">
			            	<div class="img-area">
			            		<?php if( $two_slide_img) : ?><div><img class="slider-item-img" src="<?php echo $two_slide_img['url']; ?>" alt="<?php echo $two_slide_img['alt']; ?>"></div><?php endif; ?>
			            	</div>
			            	<div class="content-area">
				            	<?php if( $two_slide_title) : ?><div class="two-slide-title"><h3><?php echo $two_slide_title; ?></h3></div><?php endif; ?>
				            	<?php if( $two_slide_desc) : ?><div class="two-slide-content"><?php echo $two_slide_desc; ?></div><?php endif; ?>
			            	</div>
			            	<div class="clear"></div>
			            </div>
		            </div>
	            	<?php $count++; ?>
			   	 	<?php endwhile; endif; ?>
					</div>
				</div>
		    </div>

		<?php
	      break;
          case 'one_column_section': // One Column Section
        ?>
            <?php
                $awd_col1_bgimg = get_sub_field('awd_col1_bgimg');
                $awd_col1_bgcolor = get_sub_field('awd_col1_bgcolor');
                $awd_col1_bgcolor_value = $awd_col1_bgcolor['value'];
	            $awd_col1_bt_style = get_sub_field('awd_col1_bt_style');
	            $awd_col1_bt_style_value = $awd_col1_bt_style['value'];
	            $awd_col1_btinfo = get_sub_field('awd_col1_btinfo');
            ?>
        	<div class="awd-col1 awd-sec <?php if( get_sub_field('awd_col1_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col1_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col1_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col1_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_col1_heading') ): ?><h2><?php the_sub_field("awd_col1_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_col1_subheading') ): ?><h5><?php the_sub_field("awd_col1_subheading"); ?></h5><?php endif; ?>
					<?php if( get_sub_field('awd_col1_content') ): ?><div><?php the_sub_field("awd_col1_content"); ?></div><?php endif; ?>
				    <?php if( $awd_col1_btinfo ):
                        $awd_col1_bt_url = $awd_col1_btinfo['url'];
                        $awd_col1_bt_title = $awd_col1_btinfo['title'];
                        $awd_col1_bt_target = $awd_col1_btinfo['target'] ? $awd_col1_btinfo['target'] : '_self';
                    ?>
                    <div style="width:100%; clear: both;text-align: center;">
                    <a class="<?php echo $awd_col1_bt_style_value; ?>" href="<?php echo esc_url($awd_col1_bt_url); ?>" target="<?php echo esc_attr($awd_col1_bt_target); ?>"><span><?php echo esc_html($awd_col1_bt_title); ?></span></a>
                    </div>
                    <?php endif; ?>
				</div>
		    </div>

		<?php
           break;
           case 'two_column_text_section': // 2 Column Text
        ?>
	        <?php
	            $awd_col2_bgimg = get_sub_field('awd_col2_bgimg');
	            $awd_col2_bgcolor = get_sub_field('awd_col2_bgcolor');
	            $awd_col2_bgcolor_value = $awd_col2_bgcolor['value'];
	            $awd_col2_bt_style = get_sub_field('awd_col2_bt_style');
	            $awd_col2_bt_style_value = $awd_col2_bt_style['value'];
	            $awd_col2_btinfo = get_sub_field('awd_col2_btinfo');
              $awd_col2_bt_pos = get_sub_field('awd_col2_bt_pos');

	        ?>
	    	<div class="awd-col2txt awd-sec <?php if( get_sub_field('awd_col2_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col2_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col2_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col2_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_col2_heading') ): ?><h2 class="col2txt-heading"><?php the_sub_field("awd_col2_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_col2_leftcontent') ): ?>
						<div class="one-half first">
						  <?php the_sub_field("awd_col2_leftcontent"); ?>
              <?php if ( $awd_col2_bt_pos == 'left' &&  $awd_col2_btinfo) :
                $awd_col2_bt_url = $awd_col2_btinfo['url'];
                $awd_col2_bt_title = $awd_col2_btinfo['title'];
                $awd_col2_bt_target = $awd_col2_btinfo['target'] ? $awd_col2_btinfo['target'] : '_self';
              ?>
              <div class="left-col-btn" style="width:100%; clear: both;">
                  <a class="<?php echo $awd_col2_bt_style_value; ?>" href="<?php echo esc_url($awd_col2_bt_url); ?>" target="<?php echo esc_attr($awd_col2_bt_target); ?>"><span><?php echo esc_html($awd_col2_bt_title); ?></span></a>
                  </div>
                 <?php endif; ?>
					    </div>
				    <?php endif; ?>
				    <?php if( get_sub_field('awd_col2_rightcontent') ): ?>
						<div class="one-half last">
						  <?php the_sub_field("awd_col2_rightcontent"); ?>
              <?php if ( $awd_col2_bt_pos == 'right' &&  $awd_col2_btinfo) :
                $awd_col2_bt_url = $awd_col2_btinfo['url'];
                $awd_col2_bt_title = $awd_col2_btinfo['title'];
                $awd_col2_bt_target = $awd_col2_btinfo['target'] ? $awd_col2_btinfo['target'] : '_self';
              ?>
              <div class="right-col-btn" style="width:100%; clear: both;">
                  <a class="<?php echo $awd_col2_bt_style_value; ?>" href="<?php echo esc_url($awd_col2_bt_url); ?>" target="<?php echo esc_attr($awd_col2_bt_target); ?>"><span><?php echo esc_html($awd_col2_bt_title); ?></span></a>
                  </div>
                 <?php endif; ?>
					    </div>
				    <?php endif; ?>
				    <?php if ( $awd_col2_bt_pos == 'center' &&  $awd_col2_btinfo) :
                $awd_col2_bt_url = $awd_col2_btinfo['url'];
                $awd_col2_bt_title = $awd_col2_btinfo['title'];
                $awd_col2_bt_target = $awd_col2_btinfo['target'] ? $awd_col2_btinfo['target'] : '_self';
              ?>
              <div class="center-col-btn" style="width:100%; clear: both;">
                  <a class="<?php echo $awd_col2_bt_style_value; ?>" href="<?php echo esc_url($awd_col2_bt_url); ?>" target="<?php echo esc_attr($awd_col2_bt_target); ?>"><span><?php echo esc_html($awd_col2_bt_title); ?></span></a>
                  </div>
                 <?php endif; ?>
				</div>
		    </div>

		<?php
           break;
           case 'two_column_bullets_section': // 2 Column Bullets W/ Intro
        ?>
	        <?php
	            $awd_col2b_bgimg = get_sub_field('awd_col2b_bgimg');
	            $awd_col2b_bgcolor = get_sub_field('awd_col2b_bgcolor');
	            $awd_col2b_bgcolor_value = $awd_col2b_bgcolor['value'];
	            $awd_col2b_bt_style = get_sub_field('awd_col2b_bt_style');
	            $awd_col2b_bt_style_value = $awd_col2b_bt_style['value'];
	            $awd_col2b_btinfo = get_sub_field('awd_col2b_btinfo');
	        ?>
	    	<div class="awd-col2b awd-sec <?php if( get_sub_field('awd_col2b_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col2b_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col2b_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col2b_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_col2b_heading') ): ?><h2><?php the_sub_field("awd_col2b_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_col2b_subheading') ): ?><h5><?php the_sub_field("awd_col2b_subheading"); ?></h5><?php endif; ?>
					<?php if( get_sub_field('awd_col2b_leftcontent') ): ?>
						<div class="one-half first">
						  <?php the_sub_field("awd_col2b_leftcontent"); ?>
					    </div>
				    <?php endif; ?>
				    <?php if( get_sub_field('awd_col2b_rightcontent') ): ?>
						<div class="one-half">
						  <?php the_sub_field("awd_col2b_rightcontent"); ?>
					    </div>
				    <?php endif; ?>
				    <?php if( $awd_col2b_btinfo ):
	                    $awd_col2b_bt_url = $awd_col2b_btinfo['url'];
	                    $awd_col2b_bt_title = $awd_col2b_btinfo['title'];
	                    $awd_col2b_bt_target = $awd_col2b_btinfo['target'] ? $awd_col2b_btinfo['target'] : '_self';
	                ?>
	                <div style="width:100%; clear: both;">
	                <a class="<?php echo $awd_col2b_bt_style_value; ?>" href="<?php echo esc_url($awd_col2b_bt_url); ?>" target="<?php echo esc_attr($awd_col2b_bt_target); ?>"><span><?php echo esc_html($awd_col2b_bt_title); ?></span></a>
	                </div>
	                <?php endif; ?>
				</div>
		    </div>

		<?php
           break;
           case 'two_column_image_section': // 2 Column Image
        ?>
	        <?php
	            $awd_col2img_bgtype = get_sub_field('awd_col2img_bgtype');
	            $awd_col2img_bgcolor = get_sub_field('awd_col2img_bgcolor');
	            $awd_col2img_bgcolor_value = $awd_col2img_bgcolor['value'];
	            $awd_col2img_bt_style = get_sub_field('awd_col2img_bt_style');
	            $awd_col2img_bt_style_value = $awd_col2img_bt_style['value'];
	            $awd_col2img_btinfo = get_sub_field('awd_col2img_btinfo');
	            $awd_col2img_image = get_sub_field('awd_col2img_image');
	        ?>
	    	<div class="awd-col2img awd-sec <?php if( get_sub_field('awd_col2img_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col2img_bgcolor_value; ?><?php endif; ?> <?php if( get_sub_field('awd_col2img_placement') == 'left' ): ?>col-2ltimg<?php elseif( get_sub_field('awd_col2img_placement') == 'right' ): ?>col-2rtimg<?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col2img_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col2img_bgtype; ?> ');"<?php endif; ?>>
				<div class="wrap">

						<?php if( get_sub_field('awd_col2img_placement') == 'left' ): ?>

							<div class="one-half col-img first">
						        <?php if( $awd_col2img_image) : ?><img src="<?php echo $awd_col2img_image['url']; ?>" alt="<?php echo $awd_col2img_image['alt']; ?>" /><?php endif; ?>
					        </div>
					        <div class="one-half col-txt">
						        <?php if( get_sub_field('awd_col2img_content') ): ?><div><?php the_sub_field('awd_col2img_content'); ?></div><?php endif; ?>
						        <?php if( $awd_col2img_btinfo ):
				                    $awd_col2img_bt_url = $awd_col2img_btinfo['url'];
				                    $awd_col2img_bt_title = $awd_col2img_btinfo['title'];
				                    $awd_col2img_bt_target = $awd_col2img_btinfo['target'] ? $awd_col2img_btinfo['target'] : '_self';
				                ?>
				                <div style="width:100%; clear: both;">
									 <a class="<?php echo $awd_col2img_bt_style_value; ?>" href="<?php echo esc_url($awd_col2img_bt_url); ?>" target="<?php echo esc_attr($awd_col2img_bt_target); ?>"><?php echo esc_html($awd_col2img_bt_title); ?></a>
				                </div>
		                        <?php endif; ?>
					        </div>
					        <div class="clearfix"></div>

					    <?php elseif( get_sub_field('awd_col2img_placement') == 'right' ): ?>

	                        <div class="one-half col-txt first">
						        <?php if( get_sub_field('awd_col2img_content') ): ?><div><?php the_sub_field('awd_col2img_content'); ?></div><?php endif; ?>
						        <?php if( $awd_col2img_btinfo ):
				                    $awd_col2img_bt_url = $awd_col2img_btinfo['url'];
				                    $awd_col2img_bt_title = $awd_col2img_btinfo['title'];
				                    $awd_col2img_bt_target = $awd_col2img_btinfo['target'] ? $awd_col2img_btinfo['target'] : '_self';
				                ?>
				                <div style="width:100%; clear: both;">
					                <a class="<?php echo $awd_col2img_bt_style_value; ?>" href="<?php echo esc_url($awd_col2img_bt_url); ?>" target="<?php echo esc_attr($awd_col2img_bt_target); ?>"><?php echo esc_html($awd_col2img_bt_title); ?></a>
				                </div>
		                        <?php endif; ?>
					        </div>
					        <div class="one-half col-img">
						        <?php if( $awd_col2img_image) : ?><img src="<?php echo $awd_col2img_image['url']; ?>" alt="<?php echo $awd_col2img_image['alt']; ?>" /><?php endif; ?>
					        </div>
                            <!-- <div class="clearfix"></div> -->
					    <?php endif; ?>

				</div>
		    </div>

		<?php
           break;
           case 'three_column_boxes': // 3 Column Boxes
        ?>
	        <?php
	            $awd_col3box_bgimg = get_sub_field('awd_col3box_bgimg');
	            $awd_col3box_bgcolor = get_sub_field('awd_col3box_bgcolor');
	            $awd_col3box_bgcolor_value = $awd_col3box_bgcolor['value'];
	        ?>
	    	<div class="awd-col3box awd-box awd-sec <?php if( get_sub_field('awd_col3box_bgtype') == 'image' ): ?>overlay-color<?php endif; ?> <?php if( get_sub_field('awd_col3box_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col3box_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col3box_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col3box_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( have_rows('awd_box_items') ): $count = 1; while( have_rows('awd_box_items')): the_row();?>
		            <?php
		    			$count_compare = $count % 3;
				        $awd_box_itemsubtitle = get_sub_field('awd_box_itemsubtitle');
		                $awd_box_itemtitle = get_sub_field('awd_box_itemtitle');
		                $awd_box_itemdesc = get_sub_field('awd_box_itemdesc');
		            ?>
		            <div class="one-third <?php if( $count_compare == "1" ): ?>first<?php endif; ?> box-item">
		            	<?php if( $awd_box_itemdesc) : ?><div><?php echo $awd_box_itemdesc; ?></div><?php endif; ?>
		            </div>
	            <?php $count++; ?>
			    <?php endwhile; endif; ?>
			    <div class="clearfix"></div>
				</div>
		    </div>

		<?php
           break;
           case 'home_three_column_boxes': // 3 Column Boxes
        ?>
	        <?php
	        	$awd_home_col3box_title = get_sub_field('awd_home_col3box_title');
	            $awd_home_col3box_bgimg = get_sub_field('awd_home_col3box_bgimg');
	            $awd_home_col3box_bgcolor = get_sub_field('awd_home_col3box_bgcolor');
	            $awd_col3box_bgcolor_value = $awd_home_col3box_bgcolor['value'];
	        ?>
	    	<div class="awd-col3box custom-col3box awd-box awd-sec <?php if( get_sub_field('awd_home_col3box_bgtype') == 'image' ): ?>overlay-color<?php endif; ?> <?php if( get_sub_field('awd_home_col3box_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col3box_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_home_col3box_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_home_col3box_bgimg; ?> ');"<?php endif; ?>>
	    		<div class="wrap">
					<div class="section-title">
						<h2 class="text-center"><?php echo $awd_home_col3box_title; ?></h2>
						<div class="title-logo custom-logo-row">
						<?php if( have_rows('awd_home_col3box_logo') ):
              $count = 1;
              while( have_rows('awd_home_col3box_logo')):
              the_row();?>
							<?php
							$awd_home_col3box_logo_img = get_sub_field('awd_home_col3box_logo_img');
              $size = 'full';
							$awd_home_col3box_logo_link = get_sub_field('awd_home_col3box_logo_link');
              if( $awd_home_col3box_logo_link ):
              $link_url = $awd_home_col3box_logo_link['url'];
              $link_title = $awd_home_col3box_logo_link['title'];
              $link_target = $awd_home_col3box_logo_link['target'] ? $awd_home_col3box_logo_link['target'] : '_self';
             endif;

							?>
              <?php if ( $awd_home_col3box_logo_link ) : ?><div><a href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php endif; ?>
			<?php if ( $awd_home_col3box_logo_img ) : echo '<div>' . wp_get_attachment_image( $awd_home_col3box_logo_img, $size ) . '</div>';
                  endif; ?><?php if ( $awd_home_col3box_logo_link ) : ?></div></a><?php endif; ?>
						<?php endwhile; endif; ?>

						</div>

					</div>
	    		</div>
				<div class="wrap box-item-flex">
					<?php if( have_rows('awd_home_box_items') ): $count = 1; while( have_rows('awd_home_box_items')): the_row();?>
		            <?php
		    			$count_compare = $count % 3;
		                $awd_home_box_img = get_sub_field('awd_home_box_img');
		                $awd_home_box_title = get_sub_field('awd_home_box_title');
		                $awd_home_box_content = get_sub_field('awd_home_box_content');
		            ?>
		            <div class="one-third <?php if( $count_compare == "1" ): ?>first<?php endif; ?>">
		            	<div class="box-item">
			            	<div class="section-count"><?php echo $count; ?></div>
			            	<?php if( $awd_home_box_img) : ?><div class="awd_home_box_item-img"><img src="<?php echo $awd_home_box_img['url']; ?>" alt="<?php echo $awd_home_box_img['alt']; ?>"></div><?php endif; ?>
                    <div class="awd_home_box_item-meta">
			            	<?php if( $awd_home_box_title) : ?><div><h3><?php echo $awd_home_box_title; ?></h3></div><?php endif; ?>
			            	<?php if( $awd_home_box_content) : ?><div class="box-desc"><?php echo $awd_home_box_content; ?></div><?php endif; ?>
                  </div>
		            	</div>
		            </div>
	            	<?php $count++; ?>
			   	 	<?php endwhile; endif; ?>
				</div>
		    </div>


		<?php
           break;
           case 'four_column_boxes': // 4 Column Boxes
        ?>
	        <?php
	            $awd_col4box_bgtype = get_sub_field('awd_col4box_bgtype');
	            $awd_col4box_bgcolor = get_sub_field('awd_col4box_bgcolor');
	            $awd_col4box_bgcolor_value = $awd_col4box_bgcolor['value'];
	        ?>
	    	<div class="awd-col4box awd-box awd-sec <?php if( get_sub_field('awd_col4box_bgtype') == 'image' ): ?>overlay-color<?php endif; ?> <?php if( get_sub_field('awd_col4box_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col4box_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col3box_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col4box_bgtype; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_col4box_heading') ): ?><h2><?php the_sub_field("awd_col4box_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_col4box_subheading') ): ?><h5><?php the_sub_field("awd_col4box_subheading"); ?></h5><?php endif; ?>
					<?php if( have_rows('awd_col4box_items') ): $count = 1; while( have_rows('awd_col4box_items')): the_row();?>
		            <?php
		    			$count_compare = $count % 4;
				        $awd_col4box_itemdesc = get_sub_field('awd_col4box_itemdesc');
		                $awd_col4box_itemlink = get_sub_field('awd_col4box_itemlink');
		            ?>
		            <div class="one-fourth <?php if( $count_compare == "1" ): ?>first<?php endif; ?> box4-item">
		            	<?php if( $awd_col4box_itemdesc) : ?><div><?php echo $awd_col4box_itemdesc; ?></div><?php endif; ?>
		            	<?php if( $awd_col4box_itemlink ):
				            $awd_col4box_itemlink_url = $awd_col4box_itemlink['url'];
				            $awd_col4box_itemlink_title = $awd_col4box_itemlink['title'];
				            $awd_col4box_itemlink_target = $awd_col4box_itemlink['target'] ? $awd_col4box_itemlink['target'] : '_self';
				        ?>
				            <div class="box-link">
					            <a class="box-bt" href="<?php echo esc_url($awd_col4box_itemlink_url); ?>" target="<?php echo esc_attr($awd_col4box_itemlink_target); ?>">
					               <span><?php echo $awd_col4box_itemlink_title ?></span>
					            </a>
				            </div>
			            <?php endif; ?>
		            </div>
	            <?php $count++; ?>
			    <?php endwhile; endif; ?>
			    <div class="clearfix"></div>
				</div>
		    </div>


        <?php
           break;
           case 'awd_accordions': // Accordions
        ?>
	        <?php
	            $awd_ac_bgimg = get_sub_field('awd_ac_bgimg');
	            $awd_ac_bgcolor = get_sub_field('awd_ac_bgcolor');
	            $awd_ac_bgcolor_value = $awd_ac_bgcolor['value'];
	        ?>
	    	<div class="awd-accordion awd-sec <?php if( get_sub_field('awd_ac_bgtype') == 'image' ): ?>overlay-color<?php endif; ?> <?php if( get_sub_field('awd_ac_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_ac_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_ac_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_ac_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<div style="margin-bottom: 40px;"><?php the_sub_field("awd_ac_topcontent"); ?></div>
					<div class="accordion">
		                <?php if( have_rows('awd_ac_items') ): $count = 1; while( have_rows('awd_ac_items')): the_row();?>
							<?php
				                $awd_ac_itemtitle = get_sub_field('awd_ac_itemtitle');
				                $awd_ac_itemdesc = get_sub_field('awd_ac_itemdesc');
		                    ?>
		                    <div class="accordion-title "><h5><?php echo $awd_ac_itemtitle; ?></h5></div>
		                    <div class="accordion-answer" ><?php echo $awd_ac_itemdesc; ?></div>
					    <?php $count ++; endwhile; endif; ?>
			        </div>
			        <div class="clearfix"></div>
				</div>
		    </div>

		    <?php
	           break;
	           case 'three_column_bullets': // 3 Column Bullets
            ?>

		    <?php
                $awd_col3bullets_bgimg = get_sub_field('awd_col3bullets_bgimg');
                $awd_col3bullets_bgcolor = get_sub_field('awd_col3bullets_bgcolor');
                $awd_col3bullets_bgcolor_value = $awd_col3bullets_bgcolor['value'];
            ?>
        	<div class="awd-col3-bullets awd-sec <?php if( get_sub_field('awd_col3bullets_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_col3bullets_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_col3bullets_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_col3bullets_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_col3bullets_heading') ): ?><h2><?php the_sub_field("awd_col3bullets_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_col3bullets_subheading') ): ?><div class="col3bullets_subheading"><?php the_sub_field("awd_col3bullets_subheading"); ?></div><?php endif; ?>
					<div class="wrap-inner">
						<div class="one-third first"><?php if( get_sub_field('awd_col3bullets_leftc') ): ?><?php the_sub_field("awd_col3bullets_leftc"); ?><?php endif; ?></div>
						<div class="one-third"><?php if( get_sub_field('awd_col3bullets_middlec') ): ?><?php the_sub_field("awd_col3bullets_middlec"); ?><?php endif; ?></div>
						<div class="one-third"><?php if( get_sub_field('awd_col3bullets_rightc') ): ?><?php the_sub_field("awd_col3bullets_rightc"); ?><?php endif; ?></div>
						<div class="clearfix"></div>
				    </div>
				</div>
		    </div>

		    <?php
	           break;
	           case 'awd_gallery': // Gallery
            ?>

		    <?php
                $awd_gallery_bgimg = get_sub_field('awd_gallery_bgimg');
                $awd_gallery_bgcolor = get_sub_field('awd_gallery_bgcolor');
                $awd_gallery_bgcolor_value = $awd_gallery_bgcolor['value'];
            ?>
        	<div class="awd-gallery awd-sec <?php if( get_sub_field('awd_gallery_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_gallery_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_gallery_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_gallery_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<?php if( get_sub_field('awd_gallery_heading') ): ?><h2><?php the_sub_field("awd_gallery_heading"); ?></h2><?php endif; ?>
					<?php if( get_sub_field('awd_gallery_subheading') ): ?><h5><?php the_sub_field("awd_gallery_subheading"); ?></h5><?php endif; ?>
					<div class="gallery-container">
						<?php if( have_rows('awd_gallery_items') ): $count = 1; while( have_rows('awd_gallery_items')): the_row();?>
							<?php
				                $awd_galleryitem_title = get_sub_field('awd_galleryitem_title');
				                $awd_galleryitem_desc = get_sub_field('awd_galleryitem_desc');
				                $awd_galleryitem_img = get_sub_field('awd_galleryitem_img');
		                    ?>
		                    <div class="awd-galleryitem">
			                    <?php if( $awd_galleryitem_img) : ?><div class="awd-image awd-lightbox" data-src="<?php echo $awd_galleryitem_img['url']; ?>" data-caption="<?php echo $awd_galleryitem_title; ?>" style="background-image:url(<?php echo $awd_galleryitem_img['url']; ?>);"/></div><?php endif; ?>
			                    <?php if( $awd_galleryitem_title) : ?>
			                    	<div class="awd-gallerytitle">
			                    	     <h6><?php echo $awd_galleryitem_title; ?></h6>
			                    	     <?php if( $awd_galleryitem_desc) : ?><div><?php echo $awd_galleryitem_desc; ?></div><?php endif; ?>
			                    	</div><?php endif; ?>
		                    </div>
					    <?php $count ++; endwhile; endif; ?>
					</div>
				</div>
		    </div>


        <?php
           break;
           case 'awd_tabs': // Tabs
        ?>
	        <?php
	            $awd_tabs_bgimg = get_sub_field('awd_tabs_bgimg');
	            $awd_tabs_bgcolor = get_sub_field('awd_tabs_bgcolor');
	            $awd_tabs_bgcolor_value = $awd_tabs_bgcolor['value'];
	        ?>
	    	<div class="awd-tabs awd-sec <?php if( get_sub_field('awd_tabs_bgtype') == 'image' ): ?>overlay-color<?php endif; ?> <?php if( get_sub_field('awd_tabs_bgtype') == 'color' ): ?>bg-color-<?php echo $awd_tabs_bgcolor_value; ?><?php endif; ?> <?php echo get_sub_field('custom_class'); ?>" <?php if( get_sub_field('awd_tabs_bgtype') == 'image' ): ?>style="background: url('<?php echo $awd_tabs_bgimg; ?> ');"<?php endif; ?>>
				<div class="wrap">
					<div class="tabs-container">
						<div class="tabs-menuitem">
			                <?php if( have_rows('awd_tab_items') ): $count = 1; while( have_rows('awd_tab_items')): the_row();?>
								<?php
					                $awd_tab_itemtitle = get_sub_field('awd_tab_itemtitle');
			                    ?>
			                    <div class="tab-menu <?php if( $count == "1" ): ?>active-tab<?php endif; ?>" tab-attr="tab-<?php echo $count ?>">
			                    	   <?php echo $awd_tab_itemtitle; ?>
			                    </div>
						    <?php $count ++; endwhile; endif; ?>
						    <div class="clearfix"></div>
					    </div>
					    <div class="tab-inner">
						    <?php if( have_rows('awd_tab_items') ): $count = 1; while( have_rows('awd_tab_items')): the_row();?>
								<?php
					                $awd_tab_itemldesc = get_sub_field('awd_tab_itemldesc');
					                $awd_ac_itemrdesc = get_sub_field('awd_ac_itemrdesc');
			                    ?>
			                    <div id="tab-<?php echo $count ?>" class="tabs-content" >
			                    	<div class="one-half first"><?php echo $awd_tab_itemldesc; ?></div>
			                    	<div class="one-half"><?php echo $awd_ac_itemrdesc; ?></div>
			                    	<div class="clearfix"></div>
			                    </div>
						    <?php $count ++; endwhile; endif; ?>
					    </div>
			        </div>
			        <div class="clearfix"></div>
				</div>
		    </div>


        <?php
          break;
          case 'social_section_v2':
          ?>
              <div class="social-section">
                  <div class="social-columns">
                      <div class="main-content">
                          <?php
                          $tb_item_img = get_sub_field('tb_item_img');
                          $social_heading = get_sub_field('social_heading');
                          $tb_sub_heading = get_sub_field('tb_sub_heading');
                          $tb_item_desc = get_sub_field('tb_item_desc');
                          $tb_item_links = get_sub_field('tb_item_links');
                          ?>
                          <div class="social-main">
                            <?php if ($social_heading) : ?>
                              <h4><?php echo $social_heading; ?></h4>
                            <?php endif; ?>
                             <?php if ($tb_sub_heading) : ?>
                              <p><?php echo $tb_sub_heading; ?></p>
                            <?php endif; ?>
                            <?php if( have_rows('tb_item_links') ): echo '<div class="tb-btn-area">'; $count = 1; while( have_rows('tb_item_links')): the_row();
                              $tb_item_link = get_sub_field('tb_item_link');
                              $tb_item_link_target = $tb_item_link['target'] ? $tb_item_link['target'] : '_self';
                              $tb_item_btn_style = get_sub_field('tb_item_btn_style');
                              if( get_sub_field('tb_item_btn_style') == 'awd-bt2' ) :
                              $tb_item_btn_style_val   = 'awd-bt2';
                              elseif ( get_sub_field('tb_item_btn_style') == 'awd-bt3' ) :
                              $tb_item_btn_style_val   = 'awd-bt3';
                              else:
                              $tb_item_btn_style_val   = 'awd-bt';
                              endif;
                              ?>
                              <div class="tb-btn-item">
                                  <a class="<?php echo $tb_item_btn_style_val; ?>" href="<?php echo esc_url($tb_item_link['url']); ?>" target="<?php echo esc_attr($tb_item_link_target); ?>"><?php echo esc_html($tb_item_link['title']); ?> <span><svg height="15" viewBox="0 0 33 15" width="33" xmlns="http://www.w3.org/2000/svg"><path d="m25.1.53c-.38.38-.39 1 0 1.39l4.59 4.6h-28.69c-.54 0-.98.44-.97.98h-0c0 .54.43.98.97.98h28.67l-4.59 4.6c-.37.39-.37 1 0 1.39.38.38 1 .38 1.38 0l6.22-6.27c.08-.09.15-.2.2-.31.05-.12.08-.25.08-.38 0-.26-.1-.5-.28-.69l-6.21-6.27c-.37-.39-.97-.4-1.36-.03 0 0 0 0-.01.01z" fill="#fff"/></svg></span></a>
                              </div>
                          <?php endwhile; echo '</div>'; endif; ?>
                          </div>
                          <!-- end of social main -->
                          <div class="social-content">
                            <?php
                             $social_content = get_sub_field('social_content');
                             $social_content_2 = get_sub_field('social_content_2');
                             $social_content_3 = get_sub_field('social_content_3');
                           ?>
                           <div class="social-embeds">
                           <?php
                            if ($social_content) :
                              echo '<div class="social-content-1 social-content-item">' . $social_content . '</div>';
                             endif;
                            if ($social_content_2) :
                              echo '<div class="social-content-2 social-content-item">' . $social_content_2 . '</div>';
                             endif;
                            if ($social_content_3) :
                              echo '<div class="social-content-3 social-content-item">' . $social_content_3 . '</div>';
                             endif;
                             ?>
                           </div>
                              <!-- social profiles -->
                            <div class="social-sources">
                      <?php  if( have_rows('social_links') ):
                              while( have_rows('social_links') ) : the_row();
                                  $social_type = get_sub_field('social_type');
                                  $social_link = get_sub_field('social_link');
                                  if( $social_link ):
                                    $social_link_url = $social_link['url'];
                                    $social_link_title = $social_link['title'];
                                    $social_link_target = $social_link['target'] ? $social_link['target'] : '_self';
                                  endif;
                                  ?>
                                    <div class="social-links">
                                      <div class="social-icon">
                                      <?php if ( $social_link ) :?>
                                      <a class="social-link" href="<?php echo esc_url( $social_link_url ); ?>" target="<?php echo esc_attr( $social_link_title ); ?>" title="<?php echo esc_html( $social_link_title ); ?>"></a>
                                       <?php endif; ?>
                                      <?php if ( $social_type == 'facebook') : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                      <?php elseif ( $social_type == 'instagram') : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                      <?php elseif ( $social_type == 'linkedin') : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                        <?php elseif ( $social_type == 'youtube') : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                                      <?php elseif ( $social_type == 'tiktok') : ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></svg>
                                      <?php endif; ?>
                                  </div>
                                </div>
                                <?php
                              endwhile;
                          else :
                          endif; ?>
                          <!-- end social profiles -->
                          </div>
                        </div>

                  </div>
              </div>
            </div>
              <?php
        }
        endwhile;
        endif;
} 
?>
<?php
// Run the Genesis loop.
genesis();
?>