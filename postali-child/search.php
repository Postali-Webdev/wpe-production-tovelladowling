<?php
/**
 * Search results template.
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
                <div class="left block">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php $content = get_the_content(); ?>
                            <p><?php echo wp_trim_words( $content , '35', '' ); ?> ...</p>
                            <span class="learn-more"><p class="small"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Visit Page </a></p></span>
                            <div class="spacer-line"></div>
                        <?php endwhile; ?>
                        <div class="spacer-60"></div>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <p><?php printf( esc_html__( 'Our apologies but there\'s nothing that matches your search for "%s"', 'postali' ), get_search_query() ); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>
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

