<?php
if ( !function_exists( 'create_events' ) ) {

    function create_events() {
        $labels = array(
            'name' => _x('Events', 'post type general name', 'dos'),
            'singular_name' => _x('Events', 'post type singular name', 'dos'),
            'menu_name' => _x('Events', 'admin menu', 'dos'),
            'name_admin_bar' => _x('Events', 'add new on admin bar', 'dos'),
            'add_new' => _x('Add Events', 'book', 'dos'),
            'add_new_item' => __('Add New Events', 'dos'),
            'new_item' => __('New Events', 'dos'),
            'edit_item' => __('Edit Events', 'dos'),
            'view_item' => __('View Events', 'dos'),
            'all_items' => __('All Events', 'dos'),
            'search_items' => __('Search Events', 'dos'),
            'parent_item_colon' => __('Parent Events:', 'dos'),
            'not_found' => __('No events found.', 'dos'),
            'not_found_in_trash' => __('No events found in Trash.', 'dos')
        );

        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'dos'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'exclude_from_search' => false,
            'show_in_menu' => true,
            'query_var' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'events'),
            'show_in_admin_bar' => false,
            'show_in_nav_menus' => true,
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-sticky',
            'supports' => array(
                'title',
                'editor',
                'page-attributes',
                'revisions'
            )
        );

        register_post_type('events', $args);
    }

    add_action('init', 'create_events');

}
