<?php

get_header();
?>


<!--    <main id="primary" class="site-main">-->

        <?php if ( have_posts() ) : ?>

<!--            <header class="page-header-category">-->


                <?php

                echo single_cat_title( '<h1 class="page-title">', '</h1>' );
//
                ?>
<!--            </header><!-- .page-header -->-->

            <?php
            /* Start the Loop */

            while ( have_posts() ) :
                the_post();


                get_template_part('template-parts/content', 'category');

            endwhile;

            the_posts_navigation();

        else :

			get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

<!--    </main><!-- #main -->-->

<?php
get_sidebar();
get_footer();
