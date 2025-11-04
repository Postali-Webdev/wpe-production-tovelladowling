<?php
/**
 * Testimonials Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','header'); ?>

    <section class="tan padded main-content">
        <div class="container wide"> 
            <div class="columns padding-vert top">
                <div class="left">
                
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="events-block" >
                        <?php if (get_field('event_type') == 'event') { ?>
                        <span class="event-type event">
                        <?php } elseif (get_field('event_type') == 'award') { ?>
                        <span class="event-type award">
                        <?php } ?>
                            <?php the_field('event_type'); ?>
                        </span>
                        <h2><?php the_title(); ?></h2>
                        <div class="spacer-15"></div>
                        <p class="sans"><strong>Date: <?php echo get_the_date('F j, Y'); ?></strong></p>
                        <p class="sans"><strong><?php the_field('presented_by_event_topic'); ?></strong></p>
                        <div class="spacer-15"></div>
                        <p><?php the_content(); ?></p>
                        <div class="spacer-30"></div>
                        <p class="sans"><strong><?php the_field('testimonial_author'); ?></strong></p>
                        <p class="spaced xsmall caps"><?php the_field('testimonial_attribution'); ?></p>
                    </div>

                <?php endwhile; ?>

                <div class="spacer-60"></div>

                <?php echo the_posts_pagination(); ?>
                
                </div>

                <div class="right">
                    <?php get_template_part('block','sidebar-nav'); ?>
                </div>
            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>

