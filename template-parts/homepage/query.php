<?php
/***
 *
 * the query lATEST EVENTS & NEWS WE NEED ONE POST BY ONE
 * EVENT & NEW
 *
 *
 */
?>

<?php if ( have_rows( 'news_events' ) ) : ?>
	<?php while ( have_rows( 'news_events' ) ) : the_row(); ?>

        <?php
        $bg_image = get_sub_field( 'bg_image' );
        $main_image = get_sub_field( 'main_image' );
        $title_bg = get_sub_field( 'title_bg' );
        $arrow = get_sub_field( 'arrow' );
        $show_more_link = get_sub_field( 'show_more_link' );
        ?>
		
        <section class="Latest events" style="background-image: url(<?php echo wp_get_attachment_image_url( $bg_image, 'full' ); ?>);">
            <div class="container-fluid pt-5 pb-5">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="image logo">
                            <?php echo wp_get_attachment_image( $main_image, 'full', false, array('class'=>'img-rounded') ); ?>
                        </div>
                        <div class="learn-more">
                            <a class="btn btn-danger" href="<?php echo $show_more_link['url']; ?>"><?php echo $show_more_link['title']; ?></a>
                        </div>

                    </div>


                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                    );

                    $news_query = new WP_Query( $args ); ?>
                    
                    <?php if ( $news_query->have_posts() ) : ?>
                                        
                        <!-- the loop -->
                        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>

                            <div class="col-lg-4">
                                <div class="box event">
                                    <div class="box-event image">
                                        <?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid') ); ?>
                                    </div>
                                </div>
                                <div class="wrapper box describe">
                                    <?php echo wp_get_attachment_image( $title_bg, 'full', false, array('class'=>'img-fluid') ); ?>
                                    <h3 class="title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <div class="wrapper details">
                                    <?php the_date( 'd/m/Y', '<span class="date">', '</span>' ); ?>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $arrow, 'full', false, array('class'=>'img-fluid') ); ?></a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                    <?php
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => 1,
                    );

                    $events_query = new WP_Query( $args ); ?>
                    
                    <?php if ( $events_query->have_posts() ) : ?>
                                        
                        <!-- the loop -->
                        <?php while ( $events_query->have_posts() ) : $events_query->the_post(); ?>

                            <div class="col-lg-4 mt-2">
                                <div class="box event">
                                    <div class="box-event image">
                                        <?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid') ); ?>
                                    </div>
                                </div>
                                <div class="wrapper box describe">
                                    <?php echo wp_get_attachment_image( $title_bg, 'full', false, array('class'=>'img-fluid') ); ?>
                                    <h3 class="title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <div class="wrapper details">
                                    <?php the_date( 'd/m/Y', '<span class="date">', '</span>' ); ?>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $arrow, 'full', false, array('class'=>'img-fluid') ); ?></a>
                                </div>
                            </div>                            

                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    
                        <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
