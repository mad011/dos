<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('front page'); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container-fluid">
        <div class="row">

            <div class="site-branding">

                <div class="col-lg-12">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <?php esc_html_e('Primary Menu', 'dos'); ?></button>
                        <?php
                        wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu'));
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="logo">
                    <?php echo get_custom_logo(); ?>

                </div>

                <?php if (get_header_image()) : ?>
                    <div id="site-header">

                        <div class="header-image">
                            <?php if (is_front_page()): ?>
                                <img src="<?php echo get_header_image() ?>">
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endif; ?>


            </div>

        </div>
    </div>
</header><!-- #masthead -->

