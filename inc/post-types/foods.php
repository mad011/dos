<?php

/**
* Post Type: eat
* Taxonomy: eat_category
*/

$labels_foods = array(
	'name' => __( 'Foods', 'dos' ),
	'singular_name' => __( 'Food', 'dos' ),
);

$args_foods = array(
	'labels' => $labels_foods,
	'description' => '',
	'public' => true,
	'publicly_queryable' => false,
	'show_ui' => true,
	'show_in_rest' => true,
	'has_archive' => false,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'exclude_from_search' => false,
	'capability_type' => 'post',
	'map_meta_cap' => true,
	'hierarchical' => false,
	'rewrite' => array( 'slug' => 'eat', 'with_front' => false ),
	'query_var' => true,
	'menu_position' => 20,
	// 'menu_icon' => 'dashicons-money',
	'supports' => array( 'title', 'thumbnail', 'revisions', 'author', 'page-attributes', 'editor' ),
	'taxonomies' => array( 'eat_category' ),
);

register_post_type( 'food', $args_foods );


$labels_taxonomy = array(
	'name' => __( 'Foods Categories', 'dos' ),
	'singular_name' => __( 'Foods Category', 'dos' ),
);

$args_taxonomy = array(
	'label' => __( 'Foods Categories', 'dos' ),
	'labels' => $labels_taxonomy,
	'public' => true,
	'publicly_queryable' => false,
	'hierarchical' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'eat_category', 'with_front' => false, ),
	'show_admin_column' => true,
	'show_in_rest' => false,
	'show_in_quick_edit' => true,
);
register_taxonomy( 'eat_category', array( 'food' ), $args_taxonomy );
