<?php

$theme_config = array(
	'show-admin-bar' 		=> false,
	'max-posts-per-page'	=> 6,
	'theme-support' 		=> array(
		'support-thumbnail' => array(
			'feature' => 'post-thumbnails',
			'arguments' => array()
		)
	),
	'post-thumbnail-size' 	=> array(
		'width' => 585,
		'height' => 400
	),
	'images-sizes'			=> array(
		'figure' => array(
			'width' => 680,
			'height' => 680,
			'crop' => true
		),
		'detail' => array(
			'width' => 585,
			'height' => 400,
			'crop' => true
		),
		'water_mark' => array(
			'width' => 1025,
			'height' => 1024,
			'crop' => true
		),
	),
	'pages_required'		=> array(
		// array(
		// 	'title' => 'Home',
		// 	'slug' => 'home',
		// ),
		// array(
		// 	'title' => 'Notícias',
		// 	'slug' => 'noticias',
		// ),
		// array(
		// 	'title' => 'Sobre',
		// 	'slug' => 'sobre',
		// ),
		// array(
		// 	'title' => 'Contato',
		// 	'slug' => 'contato',
		// ),
	)
);

function execute_theme_config(){
	global $theme_config;

	theme_config_show_admin_bar($theme_config['show-admin-bar']);
	theme_config_add_theme_support($theme_config['theme-support']);
	theme_config_add_image_size($theme_config['images-sizes']);
	theme_config_create_pages_required_if_not_exist($theme_config['pages_required']);
	theme_config_remove_page_attribute_support();
}

add_action('init', 'execute_theme_config');

/*
 *
 * Theme config functions
 * ---------------------- */

function theme_config_remove_page_attribute_support() {
   remove_post_type_support('page','page-attributes');
}

function theme_config_show_admin_bar($show = true){
	show_admin_bar($show);
}

function theme_config_add_theme_support($supports){
	if ($supports){
		foreach ($supports as $key => $support) {
			if ($support['arguments'])
				add_theme_support($support['feature'], $support['arguments']);
			else
				add_theme_support($support['feature']);
		}
	}
}

function theme_config_set_post_thumbnail_size($thumbnail_size){
	if ($thumbnail_size){
		set_post_thumbnail_size($thumbnail_size['width'], $thumbnail_size['height']);
	}
}

function theme_config_add_image_size($image_sizes){
	if ($image_sizes){
		foreach ($image_sizes as $key => $size) {
			// Set crop true if blank
			if (!array_key_exists('crop', $size)){
				$size['crop'] = true;
			}
			add_image_size($key, $size['width'], $size['height'], $size['crop']);
		}
	}
}

function theme_config_create_pages_required_if_not_exist($pages){
	if ($pages){
		foreach ($pages as $page) {
			if(get_page_by_title($page['title']) == NULL){
				create_pages_on_the_fly_by_page_name($page);
			}
		}
	}
}

/*
 *
 * Theme config utility functions
 * ------------------------------ */

function create_pages_on_the_fly_by_page_name($page) {
	$createPage = array(
		'post_title'    => $page['title'],
		'post_content'  => '',
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_type'     => 'page',
		'post_name'     => $page['slug']
		);

	wp_insert_post($createPage);
}

function get_assets_root_uri(){
    return str_replace("application/style.css","assets", get_stylesheet_uri());
}

function get_media_root_uri(){
    return str_replace("application/style.css", "media", get_stylesheet_uri());
}

function get_image($imagePath){
    return get_assets_root_uri().'/images/'.$imagePath;
}
