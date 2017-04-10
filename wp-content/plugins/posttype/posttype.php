<?php

/*
* Plugin Name: WP Post Type
* Plugin URL: http://facebook.com
* Description: http://facebook.com
* Author: Royal
*/

if(!defined('ABSPATH')){
	exit;
}

function mrwp_post_type(){
	$singular 	= 'Job Listing';
	$plural 	= 'Job Listings';

	$labels 	= [
					'name' 				=> $plural,
					'singular_name'		=> $singular,
					'add_name' 			=> 'Add New',
					'add_new_item'		=> 'Add New '. $singular,
					'edit'				=> 'Edit',
					'edit_item'			=> 'Edit '. $singular,
					'new_item'			=> 'New'. $singular,
					'view'				=> 'View'. $singular,
					'view_item'			=> 'View'. $singular,
					'search_term' 		=> 'Search'. $plural,
					'patient'			=> 'Parent'. $singular,
					'not_found'			=> 'No'. $plural. 'found',
					'not_found_in_trash'=> 'No'. $plural. 'in Trash'

				];

	$args = [
				'labels' 				=> $labels,
				'public' 				=> false,
				'publicly_queryable' 	=> true,
				'exclude_from_search' 	=> false,
				'show_in_nav_menus'		=> true,
				'show_ui' 				=> true,
				'show_in_menu' 			=> true,
				'show_in_admin_bar' 	=> true,
				'menu_position' 		=> 10,
				'menu_icon' 			=> 'dashicons-businessman',
				'can_export' 			=> true,
				'delete_with_user' 		=> false,
				'hierarchical' 			=> false,
				'query_var' 			=> true,
				'has_archive' 			=> true,
				'capability_type' 		=> 'post',
				'map_meta_cap' 			=> true,
				'rewrite' 				=> [
											'slug' => 'jobs',
											'with_front' => true,
											'pages' => true,
											'feeds' => true
										],
				'supports' 				=> [
											'title',
											'editor',
											'author',
											'custom_fields'
										]
 			];					


	register_post_type('jop', $args);
}

add_action( 'init', 'mrwp_post_type' );