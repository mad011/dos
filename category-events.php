<?php
/*****
 *
 *  custom category
 */


get_header();



echo '<ul class="nav nav-tabs" role="tablist">';
$args = array(
    'hide_empty' => 1,
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($args);

foreach ($categories as $category) {

    echo '<li class="nav-item active"><a class="nav-link active" href="#' . $category->slug . '" role="tab" data-toggle="tab">' . $category->slug . '</a>
            </li>';

}
echo '</ul>';

echo '<div class="tab-content">';
foreach ($categories as $category) {
    echo '<div class="tab-pane" id="' .$category->slug.'">';

    $the_query = new WP_Query(array(
        'post_type' => 'events',
        'posts_per_page' => 100,
        'category_name' => $category->slug
    ));


    if (have_posts()):
        while ($the_query->have_posts()):
            $the_query->the_post();
            echo '<h1>';
            the_title();
            echo '</h1>';
        endwhile;
        wp_reset_postdata();
    endif;
}

echo '</div>';

?>
<div class="more"><?= get_post_meta(get_the_ID(),'spirit_member_job_description', true) ?></div>
