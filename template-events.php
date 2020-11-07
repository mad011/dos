
<?php

/* Template Name: Events */

get_header();

?>

<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
		
		<?php $background = get_sub_field( 'background' ); ?>

		<?php if ( $background ) : ?>
            <section class="events-header" style="background-image: url(<?php echo wp_get_attachment_url( $background, 'full' ); ?>)">
            </section>
        <?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php $tab_button_section = get_field( 'tab_button_section' ); ?>

<section class="events" style="background-image: url(<?php echo wp_get_attachment_url( $tab_button_section['background_image'], 'full' ); ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div id="inside" class="text-center">

                    <?php echo wp_get_attachment_image( $tab_button_section['main_image'], 'full', false, array('class'=>'img-fluid') ) ?>

                </div>
                <div class="event-tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-center" id="tab-events-tab" data-toggle="pill" href="#tab-events" role="tab" aria-controls="tab-events" aria-selected="true">
                                <img class="d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/events-icon.svg" width="60px">
                                <span>EVENTS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="tab-news-tab" data-toggle="pill" href="#tab-news" role="tab" aria-controls="tab-news" aria-selected="false">
                                <img class="d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/news-icon.svg" width="60px">
                                <span>NEWS</span>
                            </a>

                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $posts_news = get_field( 'posts_news' ); ?>

<section class="event-bg bg-wall" style="background-image: url(<?php echo wp_get_attachment_url( $posts_news['background_image'], 'full' ); ?>);">
    <div class="container">
        <div class="row">
            <div class="tab-content" id="pills-tabContent">

                <?php 

                $args = array(
                    'post_type' => 'events',
                    'posts_per_page' => -1,
                );
                
                $events_query = new WP_Query( $args ); ?>

                <?php if ( $events_query->have_posts() ) : ?>    
                        
                    <div id="tab-events" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-NEWS-tab">
                        <div class="row">

                            <!-- the loop -->
                            <?php while ( $events_query->have_posts() ) : $events_query->the_post(); ?>

                                <div class="col-lg-6 mt-5 mb-2">
                                    <div class="box event">
                                        <div class="box-event image">
                                            <?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid w-100') ) ?>
                                        </div>
                                    </div>
                                    <div class="wrapper box describe">
                                        
                                         <?php echo wp_get_attachment_image( $posts_news['post_title_background'], 'full', false, array('class'=>'img-fluid') ) ?>

                                        <?php the_title('<h3 class="title">', '</h3>'); ?>
                                    </div>

                                    <div class="wrapper details">
                                        
                                        <?php dos_posted_on(); ?>

                                        <?php the_excerpt(); ?>

                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <!-- end of the loop -->

                        </div>
                    </div>

                                        
                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>


                <?php 

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                );
                
                $post_query = new WP_Query( $args ); ?>

                <?php if ( $post_query->have_posts() ) : ?>    
                        
                    <div id="tab-news" class="tab-pane fade" role="tabpanel" aria-labelledby="tab-news-tab">
                        <div class="row">

                            <!-- the loop -->
                            <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

                                <div class="col-lg-6 mt-5 mb-2">
                                    <div class="box event">
                                        <div class="box-event image">
                                            <?php the_post_thumbnail( 'post-thumbnail', array('class'=>'img-fluid w-100') ) ?>
                                        </div>
                                    </div>
                                    <div class="wrapper box describe">
                                        
                                        <img class="img-fluid w-10="src="<?php echo get_stylesheet_directory_uri(); ?>/images/paper_bg_title_news.png">

                                        <?php the_title('<h3 class="title">', '</h3>'); ?>
                                    </div>

                                    <div class="wrapper details">
                                        
                                        <?php dos_posted_on(); ?>

                                        <?php the_excerpt(); ?>

                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <!-- end of the loop -->

                        </div>
                    </div>

                                        
                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>                

            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
