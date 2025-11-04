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

                    <div class="testimonials-block" >
                        <span class="stars">★★★★★</span>
                        <h2>"...<?php the_title(); ?>."</h2>
                        <p><?php the_content(); ?></p>
                        <div class="spacer-30"></div>
                        <div class="attribution">
                            <?php if(get_field('add_google_logo')) { ?>
                            <div class="logo">  
                                <img src="/wp-content/uploads/2023/04/google_reviews.svg" />
                            </div>
                            <?php } ?>
                            <div class="client">
                                <p class="sans"><strong><?php the_field('testimonial_author'); ?></strong></p>
                                <p class="spaced xsmall"><?php the_field('testimonial_attribution'); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                
                </div>

                <div class="right">
                    <?php get_template_part('block','sidebar-nav'); ?>
                </div>
            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>

