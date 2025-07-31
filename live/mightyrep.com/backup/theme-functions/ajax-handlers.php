<?php  
function load_more_posts(){
    check_ajax_referer('check_nonce', 'security') ;

    if( isset( $_POST['nextPage'] ) ){

        $posts_list = '';

        $posts_arr = array( 
            'post_type' => 'post', 
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => intval( $_POST['nextPage'] )
        );
        $posts_query = new WP_Query( $posts_arr );

        if ( $posts_query->have_posts() ){
            ob_start();
            while ( $posts_query->have_posts() ) { 
                $posts_query->the_post(); 
                get_template_part( 'template-parts/components/post-card' );
            }
            $posts_list = ob_get_clean();
        } 
        wp_reset_postdata();

        wp_send_json(array( 'success' => true, 'posts' => $posts_list, 'nextPage' => intval( $_POST['nextPage'] ) + 1 ));
    }

    wp_send_json(array( 'success' => false ));
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
?>