<?php


/* Template Name: Find us */

get_header();

?>
    <section class="find-Us"
             style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/header_photo_findus.jpg);"></section>


    <section class="find-Us-wrapper bg-wall"
             style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 offset-lg-1 mt-5 pr-5">
                    <div class="content-flexbox">
                        <h1>CONTACT US</h1>
                        <p class="form">Send us a message and we'll get back to you as soon as possible.<br>You can also
                            reach us by phone at +30 210 8087906
                            Looking forward to hearing from you.
                        </p>
                        <?php echo do_shortcode('[contact-form-7 id="38" title="Contact form 1"]'); ?>

                    </div>
                </div>

                <div class="col-lg-7 p-0">
                    <div class="image-flexbox">
                        <img class="img-fluid w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/photo_form.jpg">
                    </div>
                </div>


            </div>


        </div>

    </section>
    <section class="maps"
             style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_bg_prive.jpg);">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img src="../wp-content/themes/dos/images/map.png">
                    </div>
                </div>

                <div class="col-lg-6 pt-5 mt-5">

                    <div class="maps-content inner">
                        <h2>Dos Hermanos | Mexican Cuisine</h2>

                        <p class="maps wrapper">Κυριαζή 24 | Κηφισιά | Τ.Κ 145 62</p>
                        <p class="area">Αθήνα | Ελλάδα</p>
                        <div class="phone">
                            <span>+30 210 8087906</span>
                            <span>+30 210 8087906</span>
                            <span>info@doshermanos.gr</span>

                        </div>

                        <h2>HOW TO GET THERE</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parking-wrapper bg-wall"
             style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="content-flexbox">
                        <h1>CAR PARKING</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();