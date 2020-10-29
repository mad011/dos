<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Webo2
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="p-5">
                    <div class="row">
                        <div class="col-md-4 p-5 m-auto d-flex justify-content-center">
                            <section class="error-404 not-found">
                                <header class="page-header">
                                    <h1 class="page-title"><?php _e('404', 'dos') ?></h1>
                                </header><!-- .page-header -->
                                <div class="page-content">
                                    <p><?php esc_html_e('Η σελίδα δεν βρέθηκε!', 'dos'); ?></p>
                                    <a href="<?= get_bloginfo('url') ?>" class="back-btn"><?php _e('Επιστροφή στην αρχική') ?></a>
                                </div><!-- .page-content -->
                            </section><!-- .error-404 -->
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
