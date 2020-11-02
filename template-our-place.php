<?php


/* Template Name: Our Place */


get_header();
?>
<section class="Our-Place"
         style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/header_photo_ourplace.jpg);"></section>
<section class="Our-Place-wrapper" style="background-image: url('../wp-content/themes/dos/images/bg_wall.jpg');">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h1>Our story</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="flex-our">


                    <p class="our-lighter">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                        of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                        Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                        1.10.32
                        and 1.10.33 of “de Finibus Bonorum et Malorum” (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..”, comes from a
                        line in
                        section 1.10.32.
                    </p>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="flex-our">
                    <p class="our-lighter">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                        of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                        Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                        1.10.32
                        and 1.10.33 of “de Finibus Bonorum et Malorum” (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet..”, comes from a
                        line in
                        section 1.10.32.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Our-Place-Slider">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-12 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="Our-Place-Party"
         style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="Private"
                     style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_bg_prive.jpg);">
                    <div class="Private-flexbox">
                        <div class="private-title">
                            <h2>PRIVATE PARTY</h2>
                        </div>
                        <div class="private-content">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries</p>

                        </div>

                        <div class="private more">
                            <button type="button" class="btn btn-warning">ΔΕΙΤΕ ΠΕΡΙΣΣΟΤΕΡΑ</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-8 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png/images/banner_prive_photo.jpg"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png/images/banner_prive_photo.jpg"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png/images/banner_prive_photo.jpg"
                                 alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="Corporate"
         style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="corporate-left-wrapper">
                    <h2>Corporate Events</h2>
                    <p class="bolder">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has
                    been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley
                    of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries
                    </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8 mt-5 p-lg-0">
                <div class="corporate-form-contact">
                    <div class="corporate-icon">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Photo_slider.png/images/bg_title_yellow.png">
                        <div class="reserve-text">
                            <h2>Reservation Form</h2>
                        </div>
                    </div>

                </div>
                <div class="corporate-form">
                    <div class="instructions">
                        <p class="instructions-inside">
                            Συμπληρώστε τα στοιχεία σας και την ημερομηνία σας που σας ενδιαφέρει να κλείσετε τον χώρο
                            σας
                            για το event σας και θα επικοινωνήσουμε άμεσα μαζί σας.
                        </p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="39" title="Reservation form"]') ?>


                </div>

            </div>

        </div>

    </div>

</section>
