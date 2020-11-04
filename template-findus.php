<?php


/* Template Name: Find us */

get_header();

?>
<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) :	the_row(); ?>
		
		<?php $background = get_sub_field( 'background' ); ?>

		<?php if ( $background ) : ?>

            <section class="find-Us" style="background-image: url(<?php echo wp_get_attachment_url( $background ); ?>);"></section>

        <?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'contact_form' ) ) : ?>
	<?php while ( have_rows( 'contact_form' ) ) : the_row(); ?>

        <?php
        $background = get_sub_field( 'background' );
        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        $right_image = get_sub_field( 'right_image' );
        ?>
        <section class="find-Us-wrapper bg-wall" style="background-image: url(<?php echo wp_get_attachment_url( $background ); ?>);">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4 offset-lg-1 mt-5 pr-5">
                        <div class="content-flexbox">

                            <?php if ( $title ) : ?>
                                <h1><?php echo $title; ?></h1>
                            <?php endif; ?>

                            <?php if ( $sub_title ) : ?>
                                <p class="form">
                                    <?php echo $sub_title; ?>
                                </p>
                            <?php endif; ?>

                            <?php echo do_shortcode('[contact-form-7 id="354" title="Contact form 1"]'); ?>

                        </div>
                    </div>
                    
                    <?php if ( $right_image ) : ?>
                        <div class="col-lg-7 p-0">
                            <div class="image-flexbox">
                                <?php echo wp_get_attachment_image( $right_image, 'full', false, array('class'=>'img-fluid w-100') ); ?>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>


            </div>

        </section>

	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'map' ) ) : ?>
	<?php while ( have_rows( 'map' ) ) : the_row(); ?>

        <?php
        $background = get_sub_field( 'background' );
        $map_image = get_sub_field( 'map_image' );
        $content = get_sub_field( 'content' );
        ?>

        <section class="maps" style="background-image:url(<?php echo wp_get_attachment_url( $background ); ?>);">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <?php if ( $map_image ) : ?>
                                <?php echo wp_get_attachment_image( $map_image, 'full' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6 pt-5 mt-5">

                        <?php if ( $content ) : ?>
                            <div class="maps-content inner">
                                <?php echo $content; ?>
                            </div>
                        <?php endif; ?>                       

                    </div>
                </div>
            </div>
        </section>

	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'car_parking' ) ) : ?>
	<?php while ( have_rows( 'car_parking' ) ) : the_row(); ?>

        <?php
        $background = get_sub_field( 'background' );
        $title = get_sub_field( 'title' );
        $sub_title = get_sub_field( 'sub_title' );
        ?>

        <section class="parking-wrapper bg-wall" style="background-image: url(<?php echo wp_get_attachment_url( $background ); ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="content-flexbox">

                            <?php if ( $title ) : ?>
                                <h1><?php echo esc_html( $title ); ?></h1>
                            <?php endif; ?>

                            <?php if ( $sub_title ) : ?>
                                <?php echo $sub_title; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
