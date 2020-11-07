<?php
/* Template Name: Eat - Food */
get_header();
     
$args = array(
    'taxonomy' => 'eat_category',
    'include' => get_field( 'order_food_categories' ),
    'orderby' => 'include',
);

$eat_categories = get_terms( $args );
?>

<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) :	the_row(); ?>

		<?php $background_image = get_sub_field( 'background_image' ); ?>

        <section class="Eat" style="background-image: url(<?php echo wp_get_attachment_url( $background_image, 'full' ); ?>)">
        </section>

	<?php endwhile; ?>
<?php endif; ?>



<?php $tab_section = get_field( 'tab_section' )  ?>

<section class="Eat_Sub_Menu" style="background-image:url(<?php echo wp_get_attachment_url( $tab_section['background_image'], 'full' ); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="center-image">
                    <?php echo wp_get_attachment_image( $tab_section['main_image'], 'full', false, array('class'=>'center') ) ?>
                </div>

                <?php if( $eat_categories ) : ?>
                    
                    <?php $i = 0; ?>

                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                            <?php foreach ( $eat_categories as $eat_category ) : ?>
                                <a class="text-center nav-item nav-link <?php echo $i == 0 ? 'active' : ''; ?>" data-toggle="tab" href="#nav-<?php echo $eat_category->slug; ?>" role="tab" aria-controls="nav-ensa" aria-selected="true">
                                    <?php echo wp_get_attachment_image( get_field( 'feature_image', $eat_category->taxonomy . '_' . $eat_category->term_id ), 'full', false, array('style'=>'height:50px') ); ?>
                                    <?php echo $eat_category->name; ?>
                                </a>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </div>
                    </nav>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>



<?php if( $eat_categories ) : ?>

    <?php $menu_section = get_field( 'menu_section' )  ?>    
    
    <?php $i = 0; ?>

    <section class="Food-wrapper" style="background-image:url(<?php echo wp_get_attachment_url( $menu_section['background_image'], 'full' ); ?>)">
        <div class="container">

            <div id="nav-tabContent" class="tab-content py-3 px-3 px-sm-0">

                <?php foreach ( $eat_categories as $eat_category ) : ?>
                
                    <div id="nav-<?php echo $eat_category->slug; ?>" class="tab-pane fade show <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $eat_category->slug; ?>-tab">
                        <div class="row">

                            <?php 

                            $args = array(
                                'post_type' => 'food',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'eat_category',
                                        'field' => 'slug',
                                        'terms' => $eat_category->slug,
                                    )
                                )
                            );

                            $foods_query = new WP_Query( $args ); ?>

                            <?php if ( $foods_query->have_posts() ) : ?>

                                <div class="col-12 column-1-2-md">

                                    <div class="image-flexbox">
                                        <?php echo wp_get_attachment_image( $menu_section['title_background'], 'full' ) ?>
                                        <div class="inside">
                                            
                                            <?php echo wp_get_attachment_image( $menu_section['left_title_image'], 'full' ) ?>
                                            
                                            <h2 class="food"><?php echo $eat_category->name; ?></h2>
                                        </div>
                                    </div>

                                    <?php while ( $foods_query->have_posts() ) : $foods_query->the_post(); ?>

                                        <div class="flex-content-food">
                                        
                                            <?php the_title( '<h3 class="food-title">', '</h3>') ?>
                                            
                                            <?php the_content(); ?>

                                            <div class="food_price">
                                                <span><?php echo '&euro; ' . number_format_i18n( get_field( 'price' ), 2 ); ?></span>
                                            </div>

                                            <?php if( get_field( 'show_feature_image' ) && has_post_thumbnail() ) :?>
                                                <div class="image">
                                                    <?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid') ) ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>

                                    <?php endwhile; ?>                                                                            

                                </div>

                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>

                        </div>

                    </div>

                    <?php $i++; ?>
                <?php endforeach; ?>





            </div>
        </div>

    </section>

<?php endif; ?>


<?php
get_footer();
