<?php
/**
 *
 * FIESTA DE TEQUILA WEEK
 *
 */
?>

<?php if ( have_rows( 'fiesta' ) ) : ?>
	<?php while ( have_rows( 'fiesta' ) ) : the_row(); ?>

        <?php
        $image_slider = get_sub_field( 'image_slider' );
        $main_image = get_sub_field( 'main_image' );
        $main_background = get_sub_field( 'main_background' );
        $main_content = get_sub_field( 'main_content' );
        $main_link = get_sub_field( 'main_link' );

        $left_background = get_sub_field( 'left_background' );
        $left_link = get_sub_field( 'left_link' );
        $left_title = get_sub_field( 'left_title' );
        $left_content = get_sub_field( 'left_content' );        
        ?>
		

        <section class="Fiesta" style="background-image: url(<?php echo wp_get_attachment_image_url( $main_background, 'full' ); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div class="flexbox">
                                
                                <?php echo wp_get_attachment_image( $main_image, 'full', false, array('class'=>'img-fluid') ); ?>

                                <div class="wrapper-content fiesta">

                                    <?php echo $main_content; ?>

                                    <div class="join"></div>
                                    
                                    <a class="btn btn-danger" href="<?php echo $main_link['url']; ?>"><?php echo $main_link['title']; ?></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="Private Party" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
            <div class="container-fluid p-0">
                <div class="row no-gutters">

                    <div class="col-lg-4 p-0">
                        <div class="Private" style="background-image: url(<?php echo wp_get_attachment_image_url( $left_background, 'full' ); ?>);">
                            <div class="flexbox">
                                <div class="title">
                                    <h2><?php echo $left_title; ?></h2>
                                </div>
                                <div class="content">

                                    <?php echo $left_content; ?>

                                </div>

                                <div class="flex more">
                                    <a class="btn btn-danger" href="<?php echo $left_link['url']; ?>"><?php echo $left_link['title']; ?></a>
                                </div>
                            </div>

                        </div>


                    </div>


                    <?php if( $image_slider ) : ?>

                    <?php $slideTo = $item = 0; ?>

                    <div class="col-lg-8 p-0 ">
                        <div id="fiesta-slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <?php foreach( $image_slider as $image_id ): ?>

                                <li data-target="#fiesta-slider" data-slide-to="<?php echo $slideTo; ?>" class="<?php echo $slideTo == 0 ? 'active' : ''; ?>"></li>

                                <?php $slideTo++; ?>

                            <?php endforeach; ?>
                            </ol>

                            <div class="carousel-inner">

                                <?php foreach( $image_slider as $image_id ): ?>

                                    <div class="carousel-item <?php echo $item == 0 ? 'active' : ''; ?>">

                                        <?php echo wp_get_attachment_image( $image_id, 'full', false, array('class'=>'d-block img-fluid') ); ?>

                                    </div>

                                    <?php $item++; ?>

                                <?php endforeach; ?>

                            </div>

                            <a class="carousel-control-prev" href="#fiesta-slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#fiesta-slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <?php endif; ?>


                </div>
                <div class="row no-gutters">
                    <section class="testimonial" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bg_wall.jpg);">
                        <div class="col-lg-12 mt-5">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <h3>ATHINORAMA</h3>
                                        <p class="col-md-8 offset-md-2">O Peter παραμένει ο chef Patron του Dos Hermanos.Θα τον δείς να μπαινοβγαίνει στην κουζίνα να προσέχει την κάθε λεπτομέρεια,έστω και μια φορά να του μιλήσεις θα καταλάβεις οτι αυτό που κάνει το γνωρίζει καλά,το αγαπάει και το σέβεται</p>
                                    </div>
                                    <div class="carousel-item">
                                        <h3>ATHINORAMA</h3>
                                        <p class="col-md-8 offset-md-2">O Peter παραμένει ο chef Patron του Dos Hermanos.Θα τον δείς να μπαινοβγαίνει στην κουζίνα να προσέχει την κάθε λεπτομέρεια,έστω και μια φορά να του μιλήσεις θα καταλάβεις οτι αυτό που κάνει το γνωρίζει καλά,το αγαπάει και το σέβεται</p>

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


                    </section>


                </div>


        </section>

    <?php endwhile; ?>
<?php endif; ?>
