<?php
// Added custom theme menus
register_nav_menus( [
    'header_menu'	=> esc_html__( 'Header Menu', THEME_NAME ),
    'footer_menu'	=> esc_html__( 'Footer Menu', THEME_NAME )
] );
?>