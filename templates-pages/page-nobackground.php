<?php
/* Template Name: No Background Page*/
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main no-background">
            <div class="container">
                <?php while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'page');
                endwhile; ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer();
