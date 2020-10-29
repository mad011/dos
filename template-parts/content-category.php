<?php


$cur_cat = get_cat_ID( single_cat_title("",false) );
print_r($cur_cat);
$parent_cat_arg = array('hide_empty' => false, 'parent' => 0);

$parent_cat = get_terms('category', $parent_cat_arg);//category name
echo "<pre>";
//print_r($parent_cat);
echo "</pre>";


foreach ($parent_cat as $catVal) {
    if ($catVal->term_id === $cur_cat)  {

            echo '<h2>' . $catVal->name . '</h2>'; //Parent Category

            $child_arg = array('hide_empty' => false, 'parent' => $catVal->term_id);
            $child_cat = get_terms('category', $child_arg);

            echo '<ul>';
            foreach ($child_cat as $child_term) {
                {
                    echo '<li>' . $child_term->name . '</li>'; //Child Category
                }
            }
            echo '</ul>';

    }




}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <footer class="entry-footer">
        <?php dos_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

