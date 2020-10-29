<?php
get_header();
?>
<section class="find-us page-<?php echo get_the_ID() ?>">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php

                while (have_posts()) :
                the_post(); ?> <!--Because the_content() works only inside a WP Loop -->

                <div class="entry-content-page">
                    <?php echo the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->
            </div>
            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>


        </div>


    </div>


</section>


<?php
get_footer();