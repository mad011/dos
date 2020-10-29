<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dos
 */



?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <h2 class="entry-title"></h2>
        <a href="<?php the_permalink(); ?>"> </a>

            <?php echo the_content();?>

<!--            --><?php //the_excerpt(); ?>

</article>




