<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dos
 */

?>


        <footer id="colophon" class="site-footer">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4 mt-4">
                        <div class="flex">
                            <div class="flexbox-container col">
                                <div class="address">
                                    <p class="addr">Κυριαζή 24 - Κηφισιά</p>
                                    <span><a href="#">info@doshermanos.gr</a></span>
                                </div>
                                <div class="reserve">
                                    <p>Για κρατησεις</p>
                                    <p class="phone">+30 210 8087906 | +30 210 8017337</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class="flex">
                            <div class="flexbox-container2 col">
                                <div class="image">
                                    <img src="wp-content/themes/dos/images/dos-logo-footer.png" class="img-fluid">
                                </div>
                                <?php wp_nav_menu(array('theme_location' => 'menu-2', 'Menu_id' => 'my_extra_m')); ?>


                                <div class="site-info">
                                    <a href="<?php echo esc_url(__('https://wordpress.org/', 'dos')); ?>">
                                        <?php
                                        //				/* translators: %s: CMS name, i.e. WordPress. */
                                        printf(esc_html__('@2020 DOS HERMANOS  %s', 'dos'), '');
                                        //				?>
                                    </a>
                                    <span class="sep">

                                    <?php
                                    //				/* translators: 1: Theme name, 2: Theme author. */
                                    printf(esc_html__('ALL rights Reserved: %1$s  %2$s', ''), '', '<a class="direct" href="http://underscores.me/">Όροι χρήσης</a>');
                                    ?>
                                        </span>
                                </div><!-- .site-info -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="flex third">
                            <div class="flexbox-container3 col">
                                <div class="image">

                                    <span> <img src="wp-content/themes/dos/images/FB_icon_menu.png" class="img-fluid"></span>
                                    <span><img src="wp-content/themes/dos/images/instagram_icon_menu.png"
                                            class="img-fluid"></span>
                                    <span><img src="wp-content/themes/dos/images/youtube_icon_menu.png"
                                            class="img-fluid"></span>
                                    <span><img src="wp-content/themes/dos/images/tripadvicer_footer.png"
                                            class="img-fluid"></span>

                                </div>
                                <div class="opening">
                                    <div class="opening-title">
                                        <div>
                                            <h6>opening Hours</h6>
                                        </div>
                                        <div>
                                            <p>
                                                Δευτέρα - Παρασκευή από 18.30 μ.μ.
                                            </p>
                                            <p>
                                                Σάββατο & Κυριακη από 12.30 μ.μ
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </footer><!-- #colophon -->

    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
