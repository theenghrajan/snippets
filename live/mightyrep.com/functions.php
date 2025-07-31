<?php

/**
 * Theme functions.
 *
 * @package WordPress
 * @subpackage mightyrep
 */

// Global Variables
define('THEME_NAME', 'mightyrep');
define('THEME_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());
define('THEME_VERSION', mt_rand());

// Load Theme Dependencies
function markupus_load_theme_dependencies(): void
{
	// Init Theme Default
	require_once('theme-functions/default.php');
	// Init Scripts
	require_once('theme-functions/scripts.php');
	// Init Theme Functions
	require_once('theme-functions/theme-functions.php');
	// Init Thumbnails
	require_once('theme-functions/thumbnails.php');
	// Init Menus
	require_once('theme-functions/menus.php');
	// Init Custom Classes
	require_once('theme-functions/classes.php');
	// Custom Post Types
	require_once('theme-functions/cpt.php');
	// Init Gutenberg Blocks
	require_once('theme-functions/gutenberg-blocks.php');
	// Ajax Handlers
	require_once('theme-functions/ajax-handlers.php');
}

add_action('after_setup_theme', 'markupus_load_theme_dependencies');

function enqueue_custom_stylesheet()
{
	wp_enqueue_style(
		'custom-css',
		THEME_URI . '/static/css/custom.css',
		array()
	);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheet');


function get_reading_time($post_id = null)
{
	$post_id = $post_id ? $post_id : get_the_ID();
	$content = get_post_field('post_content', $post_id);
	$word_count = str_word_count(strip_tags($content));
	$reading_speed = 200; // average words per minute

	$minutes = ceil($word_count / $reading_speed);

	return $minutes;
}

function custom_outreach_section_shortcode()
{
	ob_start();
	$shortcodeContent = get_field('ss_shortcode_content');
	if ($shortcodeContent) {
?>
		<div class="custom-outreach-box">
			<?php echo $shortcodeContent ?>
			<?php
			$button_link = get_field('ss_hero_button');
			if ($button_link):
			?>
				<a href="<?php echo esc_url($button_link['url']); ?>"
					class="btn-cta"
					target="<?php echo esc_attr($button_link['target']); ?>">
					<?php echo esc_html($button_link['title']); ?>
				</a>
			<?php endif; ?>
		</div>
<?php }
	return ob_get_clean();
}
add_shortcode('outreach_box', 'custom_outreach_section_shortcode');

// Auto-add IDs to headings in content
function add_heading_ids_to_content($content)
{
	$pattern = '/<h([2-4])([^>]*)>(.*?)<\/h\1>/i';

	$content = preg_replace_callback($pattern, function ($matches) {
		$level = $matches[1];
		$attrs = $matches[2];
		$text = $matches[3];

		// Create a slug for the ID
		$slug = sanitize_title($text);

		// Only add ID if not already present
		if (strpos($attrs, 'id=') === false) {
			return "<h{$level} id=\"toc-{$slug}\"{$attrs}>{$text}</h{$level}>";
		}
		return $matches[0];
	}, $content);

	return $content;
}
add_filter('the_content', 'add_heading_ids_to_content');


// Generate TOC from post content
function generate_post_toc_shortcode($atts)
{
	global $post;

	if (!$post) return '';

	$content = $post->post_content;

	// Match headings
	preg_match_all('/<h([2-4])[^>]*>(.*?)<\/h\1>/i', $content, $matches, PREG_SET_ORDER);

	if (empty($matches)) return '';

	$toc = '<div class="post-toc"><strong>In this article:</strong><ul>';
	foreach ($matches as $match) {
		$level = $match[1];
		$text = strip_tags($match[2]);
		$slug = sanitize_title($text);
		$toc .= "<li class='toc-level-{$level}'><a href='#toc-{$slug}'>{$text}</a></li>";
	}
	$toc .= '</ul></div>';

	return $toc;
}
add_shortcode('post_toc', 'generate_post_toc_shortcode');
