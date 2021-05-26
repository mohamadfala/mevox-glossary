<?php
/**
 *
 * @link              https://mevox.co/
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Mevox Glossary
 * Plugin URI:        http://mevox.co
 * Description:       Display glossary terms for your business.
 * Version:           1.0.0
 * Author:            Mohamad Fala
 * Author URI:        https://mevox.co/
 * Text Domain:       mevox-glossary
 */

function glossary_custom_post_type() {
	$supports = array(
		'title', // post title
		'editor', // post content
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'revisions', // post revisions
		'post-formats', // post formats
	);
	
	$labels = array(
		'name' => _x('Terms', 'plural'),
		'singular_name' => _x('Term', 'singular'),
		'menu_name' => _x('Glossary', 'admin menu'),
		'name_admin_bar' => _x('Glossary', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New Term'),
		'new_item' => __('New term'),
		'edit_item' => __('Edit term'),
		'view_item' => __('View term'),
		'all_items' => __('All Terms'),
		'search_items' => __('Search terms'),
		'not_found' => __('No terms found.'),
	);
	
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'glossary'),
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-editor-spellcheck',
	);
	register_post_type('terms', $args);
}
add_action('init', 'glossary_custom_post_type');

?>