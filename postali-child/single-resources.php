<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_image', 'options');

get_header();?>

<div class="body-container">

    <section class="emerald texture banner">
        <div class="container wide">
            <div class="columns">
                <div class="left block">
                    <p class="dktan small spaced-lg caps sans"><strong>Resources</strong></p>
                    <h1><?php the_title(); ?></h1>
                    <div class="spacer-30"></div>
                </div>
                <div class="right">
                    <?php get_template_part('block','banner-cta'); ?>
                </div>
            </div>
        </div>
        <div class="spacer-90 mobile"></div>
    </section>

    <section class="tan padded main-content">
        <div class="container wide"> 
            <div class="columns padding-vert top">
                <div class="left">
                    <article>
                        <?php the_content(); ?>
                    </article>	
                </div>

                <div class="right">
                <?php
                if( get_field('practice_areas_menu') ) { ?>                    
                    <p class="xsmall spaced caps">Practice Areas</p>
                    <?php $args = array(
                        'container' => false,
                        'theme_location' => 'sidebar-nav'
                    );
                    wp_nav_menu( $args ); ?>
                
                    <div class="spacer-90"></div>

                <?php } ?>

                    <p class="xsmall spaced caps">Client Reviews</p>
                    <div class="reviews">
                        <?php get_template_part('block','testimonial-slider'); ?>
                    </div>
                </div>
            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>

