<?php
get_header();
?>

<section class="container pt-12 lg:pt-16 2xl:pt-24">

	<?php
	/* Start the Loop */
	while (have_posts()) : the_post();
		
        $post_ID = get_the_ID();
        ?>
        <section class="<?php post_class('container pt-10 lg:pt-16'); ?>" id="post-<?php the_ID(); ?>">
            <div class="flex max-lg:flex-col gap-8 2xl:gap-x-[5.5rem]">
                <div class="w-full lg:w-[70%] 2xl:w-[72%]">
                <article class="group relative flex items-center gap-4 2xl:gap-8">
                    <?php
                        $post_thumbnail_id = get_post_thumbnail_id();
                        if(!empty($post_thumbnail_id)) {
                            $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE);  
                            $image_url = wp_get_attachment_url($post_thumbnail_id);
                            $image_type = get_post_mime_type($post_thumbnail_id);                                
                        }  
                    ?>
                    <picture class="flex-none mb-0 overflow-hidden max-w-20 h-20 2xl:h-[5.8125rem] [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:transition-all [&_img]:duration-300 group-hover:[&_img]:scale-105">
                        <source srcset="<?php echo $image_url? $image_url : ''; ?>" type="<?php echo esc_attr($image_type); ?>">
                        <img src="<?php echo $image_url? $image_url : ''; ?>"  alt="<?php echo !empty($alt) ? esc_attr($alt) : 'Recent Blogs Img'; ?>">
                    </picture>
                    
                    <div class="last:[&_p]:mb-0">
                        <h2 class="font-bold text-[1.125rem] [&_a:not(:hover)]:text-black">
                            <a href="<?php the_permalink( ); ?>" class="stretched-link"><?php the_title(); ?></a>
                        </h2>
                        
                        <?php the_content(); ?>
                    </div>
                </article>
                </div>

               
            </div>
        </section>

        <div class="post-navigation">
            <div class="nav-previous">
                <?php previous_post_link('%link', '← Previous Post: %title'); ?>
            </div>
            
            <div class="nav-next">
                <?php next_post_link('%link', 'Next Post: %title →'); ?>
            </div>
        </div>
    
        <?php

	// End the loop.
	endwhile;
	?>

</section>

<?php
get_footer();
