<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Media Magazine for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'media_magazine_register_required_plugins', 0);
function media_magazine_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'media-magazine',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function media_magazine_pattern_styles()
{
	wp_enqueue_style('media-magazine-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('media-magazine-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'media_magazine_pattern_styles');

function wpdocs_theme_add_editor_styles() {
    add_editor_style( '/assets/css/block-editor.css' );
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/block-editor.css' );

}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Media Magazine pattern categories
function media_magazine_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'media-magazine'),
			'description' => __('Header patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'media-magazine'),
			'description' => __('Call to action patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'media-magazine'),
			'description' => __('Media Magazine content patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'media-magazine'),
			'description' => __('Team patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'media-magazine'),
			'description' => __('Banner patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'media-magazine'),
			'description' => __('Contact patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'media-magazine'),
			'description' => __('layout patterns', 'media-magazine'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'media-magazine'),
			'description' => __('Testimonial and review patterns', 'media-magazine'),
		)
	);

}

add_action('init', 'media_magazine_register_block_pattern_categories');
