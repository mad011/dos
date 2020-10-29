<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php wp_body_open(); ?>

    <header id="masthead" class="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">


                        <div id="site-header">
                            <div class="header-image">
                                <?php if (is_front_page()): ?>
                                    <img src="<?php echo get_header_image() ?>">
                                <?php endif; ?>
                            </div>

                            <div class="logo">
                                <a href="<?php echo home_url(); ?>">
                                    <?php echo get_custom_logo(); ?>
                                </a>
                            </div>


                            <nav id="site-navigation" class="main-navigation">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                    <?php esc_html_e('Primary Menu', 'dos'); ?></button>
                                <?php
                                wp_nav_menu(array('theme_location' => 'my-custom-menu', 'menu_id' => 'primary-menu', 'container_class' => 'custom-menu-class'));
                                ?>
                            </nav><!-- #site-navigation -->


                        </div>

                </div>
            </div>
        </div>
    </header><!-- #masthead -->
<!--    <div id="content" class="site-content">-->
