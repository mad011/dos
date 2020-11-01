<?php
/**
 * this is reference to slider in homepage
 *
 */

$home_slider_gallery = get_field( 'home_slider_gallery' );

$slideTo = $item = 0;

?>

<?php if( $home_slider_gallery ) : ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div id="home-main-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <?php foreach( $home_slider_gallery as $image_id ): ?>

                            <li data-target="#home-main-slider" data-slide-to="<?php echo $slideTo; ?>" class="<?php echo $slideTo == 0 ? 'active' : ''; ?>"></li>

                            <?php $slideTo++; ?>

                        <?php endforeach; ?>

                    </ol>

                    <div class="carousel-inner">

                        <?php foreach( $home_slider_gallery as $image_id ): ?>

                            <div class="carousel-item <?php echo $item == 0 ? 'active' : ''; ?>">

                                <?php echo wp_get_attachment_image( $image_id, 'full', false, array('class'=>'d-block img-fluid') ); ?>

                            </div>

                            <?php $item++; ?>

                        <?php endforeach; ?>

                    </div>
                    
                    <a class="carousel-control-prev" href="#home-main-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#home-main-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
