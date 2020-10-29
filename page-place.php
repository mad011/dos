<?php
/****
 * this is tempate from page our place
 *
 *
 */

get_header();
?>
<section id="our-place">
    <div class="container-fluid pt-5">
        <div class="row">
<script>
    jQuery( document ).ready(function() {
        console.log( "document loaded" );
    });


</script>
            <?php while (have_posts()) : ?>


                <?php the_post(); ?>


                <?php get_template_part('template-parts/content', 'page'); ?>


            <?php endwhile; ?>

        </div>
    </div>


</section>


<?php
get_footer();