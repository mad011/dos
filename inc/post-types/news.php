<?php

if (!function_exists('create_news')) :
    function create_news()
    {
        $labels = array(
            'name' => _x('news', 'post type general name', 'dos'),
            'singular_name' => _x('news', 'post type singular name', 'dos'),
            'menu_name' => _x('news', 'admin menu', 'dos'),
            'name_admin_bar' => _x('news', 'add new on admin bar', 'dos'),
            'add_new' => _x('Add news', 'book', 'dos'),
            'add_new_item' => __('Add New news', 'dos'),
            'new_item' => __('New news', 'dos'),
            'edit_item' => __('Edit news', 'dos'),
            'view_item' => __('View news', 'dos'),
            'all_items' => __('All news', 'dos'),
            'search_items' => __('Search news', 'dos'),
            'parent_item_colon' => __('Parent news:', 'dos'),
            'not_found' => __('No news found.', 'dos'),
            'not_found_in_trash' => __('No news found in Trash.', 'dos')
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
            'rewrite' => array('slug' => 'news'),
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

        register_post_type('news', $args);
    }

    add_action('init', 'create_news');

    function news_shortcode($atts)
    {
        $atts = shortcode_atts(array(
            'numberposts' => '-1',
            'offset' => 0,
            'category' => 0,
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'post_type' => 'news',
            'post_status' => 'publish',
            'suppress_filters' => true,
            'item_class' => 'news',
            'item_wrapper_class' => 'col-md-6',
            'container_class' => 'row'
        ), $atts, 'w2_news');

        $args = array(
            'numberposts' => $atts['numberposts'],
            'offset' => $atts['offset'],
            'category' => $atts['category'],
//            'orderby' => $atts['orderby'],
//            'order' => $atts['order'],
            'post_type' => $atts['post_type'],
            'post_status' => $atts['post_status'],
            'suppress_filters' => $atts['suppress_filters'],
            'order_by' => 'publish_date',
            'order' => 'ASC'
        );
        $news = new WP_Query($args);
        ob_start();
        if ($news->have_posts()) : ?>
            <div class="<?= $atts['container_class'] ?>">
                <?php while ($news->have_posts()) : $news->the_post(); ?>
                    <div class="<?= $atts['item_wrapper_class'] ?>">
                        <div class="<?= $atts['item_class'] ?>">
                            <?php get_template_part('template-parts/list', get_post_type()); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        return ob_get_clean();
    }

    add_shortcode('Dos_news', 'news_shortcode');
endif;