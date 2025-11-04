<?php
/**
 * General Interior Page Template
 * Template Name: Resources Landing
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <section class="emerald texture ">
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="spacer-30 mobile"></div>

        <div class="container main-content"> 
            <div class="columns padding-vert top">

            <?php 
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'     => 'resources',
                    'order'         => 'DESC',
                    'post_status'   => 'publish'
                    );
                $wp_query = new WP_Query($args); 
            ?>

            <?php if($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                <a class="column-33 sage tan-bg pad-sm" href="<?php the_permalink(); ?>" data-cue="fadeIn" data-duration="1000">
                    <h3 class="tan"><span><?php the_title(); ?></span></h3>
                    <span class="learn-more"><p>Learn More</p></span>
                </a>

            <?php endwhile; ?>
            <?php endif; ?>

                <a class="column-33 sage tan-bg pad-sm" href="/blog/" data-cue="fadeIn" data-duration="1000">
                    <h3 class="tan"><span>Legal Blog</span></h3>
                    <span class="learn-more"><p>Learn More</p></span>
                </a>

            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>