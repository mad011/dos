<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webo2
 */
?>
<section class="no-results not-found d-flex align-items-center flex-column">
    <header class="page-header">
        <h1 class="h1 pt-5"><?php esc_html_e('Δε βρέθηκαν αποτελέσματα', 'webo2'); ?></h1>
    </header><!-- .page-header -->
    <div class="page-content p-5">
        <?php if (is_home() && current_user_can('publish_posts')) :
            printf(
                '<p>' . wp_kses(
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'webo2'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );
        else : ?>
            <p><?php esc_html_e('Δοκιμάστε διαφορετικά κριτήρια αναζήτησης.', 'webo2'); ?></p>
            <?php //get_search_form(); ?>
        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->