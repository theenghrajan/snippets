<?php
// Get Block List
get_template_part( 'acf-gutenberg-blocks/block-list' );

// Init Add full width block support.
add_theme_support('align-wide');

// Init add new category block Gutenberg.
add_filter( 'block_categories_all', 'custom_new_block_category' );
function custom_new_block_category( $block_categories ) {

    array_unshift( $block_categories, array(
		'slug' => 'theme-blocks',
		'title' => 'Theme Blocks'
	) );

	return $block_categories;
}

// Init add custom blocks for Gutenberg.
add_action('acf/init', 'gutenberg_block_acf_init');
function gutenberg_block_acf_init() {
    if( function_exists('acf_register_block') ) {
        if( !empty( GUTENBERG_BLOCKS ) ){
            foreach ( GUTENBERG_BLOCKS as $block ) {
                $block_dir = THEME_DIR . "/acf-gutenberg-blocks/{$block['name']}";
    
                if( file_exists( THEME_DIR . "/acf-gutenberg-blocks/{$block['name']}/preview.png" ) ){
                    $block_preview_img = THEME_URI.'/acf-gutenberg-blocks/'.$block['name'].'/preview.png';
                }else{
                    $block_preview_img = THEME_URI.'/acf-gutenberg-blocks/default-preview.png';
                }
                acf_register_block(
                    [
                        'name'              => $block['name'],
                        'title'             => $block['title'],
                        'description'       => ( $block['description'] && $block['description'] !== '' ) ? $block['description'] : '',
                        'render_callback'   => 'gutenberg_acf_block_render_callback',
                        'category'          => 'theme-blocks',
                        'icon'              => 'welcome-add-page',
                        'mode'              => 'edit',
                        'align'             => 'full',
                        'example'           => [
                            'attributes' => [
                                'mode' => 'preview',
                                'data' => [ 'preview_img' => $block_preview_img ]
                            ]
                        ],
                        'enqueue_assets' => function( $block ){
                            $slug = str_replace('acf/', '', $block['name']);
                            wp_enqueue_style( $slug, THEME_URI . '/static/css/'.$slug.'/'.$slug.'.min.css', [], THEME_VERSION );
                        }
                    ]
                );
                // If such directory already exists - go next.
                if( file_exists( $block_dir ) ) continue;
    
                theme_render_php_template( $block['name'], $block_dir );
                theme_render_scss_template( $block['name'], $block_dir );
                theme_render_js_template( $block['name'], $block_dir );
            }
        }
    }
}

function gutenberg_acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if( file_exists( get_theme_file_path("/acf-gutenberg-blocks/{$slug}/{$slug}.php") ) ) {
        include( get_theme_file_path("/acf-gutenberg-blocks/{$slug}/{$slug}.php") );
    }
}

function theme_render_php_template( string $block_name, string $block_dir ): ?bool
{
	if( ! $block_name ) return null;

	$template_php = "{$block_dir}/{$block_name}.php";

	// If such layout already has template OR can't create file.
	if( ! wp_mkdir_p( $block_dir ) ) return null;

	$block_name_human	= ucwords( str_replace( '-', ' ', $block_name ) );

	$php_file_content	= '<?php' . PHP_EOL . PHP_EOL .
		'/**' . PHP_EOL .
		' * ' . $block_name_human . ' - Custom Gutenberg Block.' . PHP_EOL .
		' *' . PHP_EOL .
		' * @see Page with Custom Gutenberg Blocks -> Page Blocks -> ' . $block_name_human . PHP_EOL .
		' *' . PHP_EOL .
		' * @package WordPress' . PHP_EOL .
		' * @subpackage ' . THEME_NAME . PHP_EOL .
		' */' . PHP_EOL . PHP_EOL .
		'//wp_enqueue_script( "' . $block_name . '", THEME_URI . "/static/js/' . $block_name . '/' . $block_name . '.min.js", [], THEME_VERSION, true );' . PHP_EOL . PHP_EOL;

	// Add starter HTML.
	$php_file_content .= '?>' . PHP_EOL . PHP_EOL;

    $php_file_content .= '<?php if( isset( $block["data"]["preview_img"] ) ) : ?>' . PHP_EOL;
    $php_file_content .= '  <img src="<?php echo $block["data"]["preview_img"]; ?>" alt="Block Preview Image" style="width: 100%; height: auto; display:block; margin: 0 auto;">' . PHP_EOL;
    $php_file_content .= '<?php else : ?>' . PHP_EOL;
    $php_file_content .= '  <section class="' . $block_name . '"></section>' . PHP_EOL;
    $php_file_content .= '<?php endif; ?>';

	// Create PHP template file for this layout.
	if( ! file_put_contents( $template_php, $php_file_content ) ) return false;

	return true;
}

function theme_render_scss_template( string $block_name, string $block_dir ): ?bool
{
	if( ! $block_name ) return null;

	$template_scss = "{$block_dir}/{$block_name}.scss";

	// If such layout already has template OR can't create file.
	if( ! wp_mkdir_p( $block_dir ) ) return null;

    $css_file_content = '@import \'../../src/scss/components/vars\';' . PHP_EOL;
    $css_file_content .= '@import \'../../node_modules/bootstrap/scss/mixins\';' . PHP_EOL . PHP_EOL;

	// Create SCSS template file for this layout.
	if( ! file_put_contents( $template_scss, $css_file_content ) ) return false;

	return true;
}

function theme_render_js_template( string $block_name, string $block_dir ): ?bool
{
	if( ! $block_name ) return null;

	$template_js = "{$block_dir}/{$block_name}.js";

	// If such layout already has template OR can't create file.
	if( ! wp_mkdir_p( $block_dir ) ) return null;

	$js_file_content = "document.addEventListener( 'DOMContentLoaded', () => {\n\t'use strict'\n} )";

	// Create SCSS template file for this layout.
	if( ! file_put_contents( $template_js, $js_file_content ) ) return false;

	return true;
}


?>