<?php
/**
 * Template part for first section after header with name AYTHENTIC MEXICAN CUISINE
 *
 *

 */

 $home_bg_1 = get_field( 'home_bg_1' ); // Image ID
 $home_bg_2 = get_field( 'home_bg_2' ); // Image ID

 ?>

<!-- Authentic Group Section -->
<?php if ( have_rows( 'home_authentic_group' ) ) : ?>
    <?php while ( have_rows( 'home_authentic_group' ) ) : the_row(); ?>

        <?php
        $main_image = get_sub_field( 'main_image' );
        $background_image = get_sub_field( 'background_image' );
        $left_image = get_sub_field( 'left_image' );
        $right_image_1 = get_sub_field( 'right_image_1' );
        $right_image_2 = get_sub_field( 'right_image_2' );
        $content = get_sub_field( 'content' );
        ?>

        <section class="cusine" style="background-image: url(<?php echo wp_get_attachment_image_url( $background_image, 'full' ); ?>);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 p-0">
                        <div class="wrapper-image cuisine">
                            <?php echo wp_get_attachment_image( $left_image, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="d-flex flex-column wrapper-content">
                            <div class="d-flex justify-content-center wrapper-content-image">
                                <?php echo wp_get_attachment_image( $main_image, 'full', false, array('class'=>'img-fluid') ); ?>
                            </div>
                            <div class="wrapper-content inner">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <div class="wrapper-image cusine">
                            <?php echo wp_get_attachment_image( $right_image_1, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                        <div class="wrapper-image move">
                            <?php echo wp_get_attachment_image( $right_image_2, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>                                                                                          
<?php endif; ?>

<!-- Parallax BG #1 -->
<?php if ( $home_bg_1 ) : ?>
<section class="cus-continue" style="background-image: url(<?php echo wp_get_attachment_image_url( $home_bg_1, 'full' ); ?>)">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">

           </div>
       </div>
   </div>
</section>
<?php endif; ?>

<!-- Cocktails Section -->
<?php if ( have_rows( 'home_cocktails' ) ) : ?>
    <?php while ( have_rows( 'home_cocktails' ) ) : the_row(); ?>

        <?php
        $main_image = get_sub_field( 'main_image' );
        $background_image = get_sub_field( 'background_image' );
        $left_image = get_sub_field( 'left_image' );
        $right_image_1 = get_sub_field( 'right_image_1' );
        $right_image_2 = get_sub_field( 'right_image_2' );
        $content = get_sub_field( 'content' );
        ?>

        <section class="coctails-continue" style="background-image: url(<?php echo wp_get_attachment_image_url( $background_image, 'full' ); ?>);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 p-0">
                        <div class="wrapper-image coctail">
                            <?php echo wp_get_attachment_image( $left_image, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="d-flex flex-column wrapper-content">
                            <div class="d-flex justify-content-center wrapper-content-image">
                                <?php echo wp_get_attachment_image( $main_image, 'full', false, array('class'=>'img-fluid') ); ?>
                            </div>
                            <div class="wrapper-content inner">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3">
                        <div class="wrapper-coctail coctail">
                            <?php echo wp_get_attachment_image( $right_image_1, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                        <div class="wrapper-coctail inner">
                            <?php echo wp_get_attachment_image( $right_image_2, 'full', false, array('class'=>'img-fluid') ); ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php endwhile; ?>                                                                                          
<?php endif; ?>

<!-- Parallax BG #2 -->
<?php if ( $home_bg_2 ) : ?>
<section class="coctails-continue after" style="background-image: url(<?php echo wp_get_attachment_image_url( $home_bg_2, 'full' ); ?>)">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">

           </div>
       </div>
   </div>
</section>
<?php endif; ?>
