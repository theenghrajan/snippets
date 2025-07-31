<?php
//Custom Menu Walker
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<div class=\"drop-holder\"><ul>\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul></div>\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}
}

// Theme Custom _Post Type Class
class Theme_Custom_Post_Type{
	public $slug;
	public $single_name;
	public $multiple_name;
	public $menu_icon;
	public $is_archive;
	public $is_public;
	public $supports;
	public $exclude_search;

	function __construct( $values ) {
		$this->slug           = $values['slug'];
		$this->single_name    = $values['single-name'];
		$this->multiple_name  = $values['multiple-name'];
		$this->menu_icon      = isset( $values['menu-icon'] ) ? $values['menu-icon'] : 'dashicons-admin-post';
		$this->has_archive    = isset( $values['has-archive'] ) ? $values['has-archive'] : true;
		$this->is_public      = isset( $values['is-public'] ) ? $values['is-public'] : true;
		$this->supports	  = !empty( $values['supports'] ) ? $values['supports'] : array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' );
		$this->exclude_search = isset( $values['exclude-search'] ) ? $values['exclude-search'] : true;
		
		$this->register_cpt();
	}

	function register_cpt() {
		$labels = array(
			'name'                => __( $this->multiple_name, 'Post Type General Name', THEME_NAME ),
			'singular_name'       => __( $this->single_name, 'Post Type Singular Name', THEME_NAME ),
			'menu_name'           => __( $this->multiple_name, THEME_NAME ),
			'parent_item_colon'   => __( 'Parent ' . $this->single_name, THEME_NAME ),
			'all_items'           => __( 'All ' . $this->multiple_name, THEME_NAME ),
			'view_item'           => __( 'View ' . $this->single_name, THEME_NAME ),
			'add_new_item'        => __( 'Add New ' . $this->single_name, THEME_NAME ),
			'add_new'             => __( 'Add ' . $this->single_name, THEME_NAME ),
			'edit_item'           => __( 'Edit ' . $this->single_name, THEME_NAME ),
			'update_item'         => __( 'Update ' . $this->single_name, THEME_NAME ),
			'search_items'        => __( 'Search ' . $this->single_name, THEME_NAME ),
			'not_found'           => __( 'Not found', THEME_NAME ),
			'not_found_in_trash'  => __( 'Not found in trash', THEME_NAME ),
		);
		$args = array(
			'label'               => __( $this->slug, THEME_NAME ),
			'labels'              => $labels,
			'supports'            => $this->supports,
			'public'              => $this->is_public,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_icon'           => $this->menu_icon,
			'menu_position'       => 6,
			'can_export'          => true,
			'has_archive'         => $this->has_archive,
			'exclude_from_search' => $this->exclude_search,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type( $this->slug, $args );
	}
}

// Theme Custom Taxonomy Class
class Theme_Custom_Taxonomy{
	public $slug;
	public $cpt_slug;
	public $single_name;
	public $multiple_name;
	public $hierarchical;
	public $is_public;

	function __construct( $values ) {
		$this->slug          = $values['slug'];
		$this->cpt_slug      = $values['cpt_slug'];
		$this->single_name   = $values['single-name'];
		$this->multiple_name = $values['multiple-name'];
		$this->hierarchical  = isset( $values['hierarchical'] ) ? $values['hierarchical'] : true;
		$this->is_public     = isset( $values['is-public'] ) ? $values['is-public'] : true;
		
		$this->register_custom_taxonomy();
	}

	function register_custom_taxonomy() {
		$labels = array(
			'name'                => __( $this->multiple_name, 'Taxonomy General Name', THEME_NAME ),
			'singular_name'       => __( $this->single_name, 'Taxonomy Singular Name', THEME_NAME ),
			'menu_name'           => __( $this->multiple_name, THEME_NAME ),
			'all_items'           => __( 'All ' . $this->multiple_name, THEME_NAME ),
			'parent_item'         => __( 'Parent ' . $this->single_name, THEME_NAME ),
			'parent_item_colon'   => __( 'Parent ' . $this->single_name, THEME_NAME ),
			'new_item_name'       => __( 'New ' . $this->single_name, THEME_NAME ),
			'add_new_item'        => __( 'Create New ' . $this->single_name, THEME_NAME ),
			'edit_item'           => __( 'Edit ' . $this->single_name, THEME_NAME ),
			'update_item'         => __( 'Update ' . $this->single_name, THEME_NAME ),
			'add_or_remove_items' => __( 'Add or Remove ' . $this->multiple_name, THEME_NAME )
		);
		$args = array(
			'labels'            => $labels,
			'hierarchical'      => $this->hierarchical,
			'public'            => $this->is_public,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,
		);
		register_taxonomy( $this->slug, $this->cpt_slug, $args );
	}
}
?>