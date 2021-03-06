<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dos
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <?php if (have_posts()) : ?>
                    <?php if (is_home() && !is_front_page()) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
                    <?php endif; ?>
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-6">
                                <?php get_template_part('template-parts/content', get_post_type()); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php the_posts_navigation(); ?>
                    </div>
                <?php else :
                    get_template_part('template-parts/content', 'none');
                endif; ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer();?>
<?php echo "hello"; ?>
