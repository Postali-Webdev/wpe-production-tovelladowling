<?php
/**
 * General Interior Page Template
 * Template Name: Interior / Practice Area
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','header'); ?>

    <section class="tan padded main-content">

    <?php if (is_page('170')) { ?>
    <div class="firm-intro">
        <div class="container">
            <div class="columns">
                <div class="column-50 center centered">
                    <p class="large dktan">
                        <?php the_field('intro_block_large_text'); ?>
                    </p>
                    <p class="white">
                        <?php the_field('intro_block_small_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

        <div class="container wide"> 
            <div class="columns padding-vert top">
                <div class="left block">
                    <?php the_content(); ?>

                    <?php if (is_page('170')) { ?> <!-- get sliders for 'the firm' page -->

                        <?php $n=1 ?>
                        <?php if( have_rows('slideshow_block') ): ?>
                        <?php while( have_rows('slideshow_block') ): the_row(); ?>  
                            <h3><?php the_sub_field('h3_headline'); ?></h3>
                            <div class="firm-slider" id="firm_slider_<?php echo $n; ?>">
                                <p class="sans white"><?php the_sub_field('slideshow_copy'); ?></p>

                                <?php if( have_rows('slideshow_images') ): ?>
                                <div class="slides" id="slides_<?php echo $n; ?>">
                                <?php while( have_rows('slideshow_images') ): the_row(); ?>  
                                    <div class="slide">
                                    <?php 
                                    $image = get_sub_field('image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                                </div>
                                <?php endif; ?> 
                                <span class="nav-dots_<?php echo $n; ?>"></span>

                            </div>
                            <?php $n++; ?>
                        <?php endwhile; ?>
                        <?php endif; ?> 

                    <?php } ?>
                </div>

                <div class="right">
                    <?php if( have_rows('focus_areas') ): ?>
                    <p class="xsmall spaced caps">Related Focus Areas</p>
                    <ul class="menu" id="menu-practice-areas-sidebar">
                    <?php while( have_rows('focus_areas') ): the_row(); ?>  
                        <?php $post_object = get_sub_field('focus_area_link'); ?>
                        <?php if( $post_object ): ?>
                            <?php // override $post
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_sub_field('focus_area_link_page_title'); ?></a></li>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>

                    <?php $parentId = $post->post_parent;
                    $linkToParent = get_permalink($parentId);
                    ?>
                    <span class="learn-more"><a title="All practice areas" href="<?php echo $linkToParent; ?>"><p>View All Focus Areas</p></a></span>
                    <?php else: ?>
                    <?php get_template_part('block','sidebar-nav'); ?>
                    <?php endif; ?> 

                    <div class="spacer-60"></div>

                    <?php if(is_page(170)) { ?>
                    <p class="xsmall spaced caps">Client Reviews</p>
                    <div class="reviews">
                        <?php get_template_part('block','testimonial-slider'); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>    
        </div>
    </section>

   <?php get_template_part('block','related-resources'); ?>

</div>

<?php get_footer(); ?>

