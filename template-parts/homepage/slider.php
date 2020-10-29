<?php
/**
 * this is reference to slider in homepage
 *
 */

$images = get_field( 'home_slider_gallery' );

$i = 0;

?>

<?php if( $images ) : ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        <?php foreach( $images as $image_id ): ?>

                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>

                        <?php endforeach; ?>

                    </ol>

                    <div class="carousel-inner">

                        <?php foreach( $images as $image_id ): ?>

                            <div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">

                                <?php echo wp_get_attachment_image( $image_id, 'full', false, array('class'=>'d-block w-100') ); ?>

                            </div>

                            <?php $i++; ?>

                        <?php endforeach; ?>

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

<?php endif; ?>
