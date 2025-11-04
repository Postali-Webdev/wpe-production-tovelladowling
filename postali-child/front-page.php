<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="emerald padded texture" id="hp-header">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <?php the_field('header_copy'); ?>
                </div>

                <?php $args = array (
                    'post_type' => 'staff',
                    'post_per_page' => '-1',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'staff_type',
                            'value' => 'attorney'
                        )
                    )
                );
                $staff_query = new WP_Query($args);
                ?>

                <div class="banner-slider">
                    <div class="slider-nav">
                        <div class="prev-button-slick"><span class="icon-arrow-left"></span></div>
                        <div class="next-button-slick"><span class="icon-arrow-right"></span></div>
                    </div>

                    <div id="attorney-slider" class="slide">
                    <?php while ( $staff_query->have_posts() ) : $staff_query->the_post(); ?> 
                        <?php
                            $firstname = get_the_title();
                            $arr = explode(' ',trim($firstname));
                        ?>
                        <a class="attorney-slide centered block" href="<?php the_permalink(); ?>" title="Click to read <?php echo $arr[0]; ?>'s Bio">
                            <div class="attorney-img">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                <div class="attorney-img-gradient"></div>
                                <img src="<?php echo $image[0]; ?>" alt="" />
                            </div>
                            <div class="spacer-30"></div>
                            <div class="name-title">
                                <p class="sans"><strong><?php the_title(); ?></strong></p>
                                <p class="caps xsmall sans spaced"><?php the_field('attorney_title'); ?></p>
                                <div class="spacer-15"></div>
                                <p class="small">Read <?php echo $arr[0]; ?>'s Bio <span class="icon-arrow-right"></span></p>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>                

            </div>
        </div>
    </section>

    <section class="tan" id="hp-who-we-are">
        <div class="container">
            <div class="columns">
                <div class="column-40 white nomargin pad-sm" data-cue="fadeIn" data-duration="1000">
                    <div class="block-top">
                        <p class="caps burgundy spaced xsmall"><strong><?php the_field('white_box_subhead'); ?></strong></p>
                        <h2><?php the_field('white_box_section_title'); ?></h2>
                    </div>
                    <div class="spacer-30"></div>
                    <span class="learn-more"><p class="small"><a href="<?php the_field('white_box_learn_more_page_link'); ?>" title="<?php the_field('white_box_learn_more_link_text'); ?>"><?php the_field('white_box_learn_more_link_text'); ?></a></p></span>
                </div>
                <div class="column-60 nomargin pad-lg block" data-cue="fadeIn" data-duration="1000">
                <?php if( have_rows('who_we_are_accordions') ): ?>
                <?php while( have_rows('who_we_are_accordions') ): the_row(); ?>  
                    <div class="accordions">
                        <div class="accordions_title"><h3><?php the_sub_field('accordion_title'); ?></h3><span></span></div>
                        <div class="accordions_content"><?php the_sub_field('accordion_content'); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
                <div class="column-40 nomargin photo" data-cue="fadeIn" data-duration="1000">
                <?php 
                    $image = get_field('our_mission_photo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
                <div class="column-60 nomargin sage pad-lg vert-center" data-cue="fadeIn" data-duration="1000">
                    <p class="caps dktan spaced xsmall"><strong><?php the_field('our_mission_subhead'); ?></strong></p>
                    <p class="large tan"><?php the_field('mission_statement'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="lt-tan padded" id="hp-practice-areas">
        <div class="container">
            <div class="columns">
                <div class="column-66 block nomargin">
                    <p class="caps spaced xsmall"><strong><?php the_field('what_we_do_subhead'); ?></strong></p>
                    <h2><?php the_field('what_we_do_section_title'); ?></h2>
                    <?php the_field('what_we_do_section_content'); ?>
                </div>

                <?php if( have_rows('practice_area_boxes') ): ?>
                <?php while( have_rows('practice_area_boxes') ): the_row(); ?>  
                    <a class="column-33 sage pad-sm" href="<?php the_sub_field('practice_area_page_link'); ?>" data-cue="fadeIn" data-duration="1000">
                        <h3 class="tan"><span><?php the_sub_field('practice_area_title'); ?></span></h3>
                        <span class="learn-more"><p><?php the_sub_field('practice_area_page_link_title'); ?></p></span>
                    </a>
                <?php endwhile; ?>
                <?php endif; ?> 

            </div>
        </div>
    </section>

    <section class="tan" id="hp-bottom">
        <div class="container">
            <div class="columns">
                <div class="column-40 burgundy-gradient nomargin pad-sm vert-top block" data-cue="fadeIn" data-duration="1000">
                    <?php get_template_part('block','testimonial-slider'); ?>
                </div>
                <div class="column-60 pad-lg nomargin vert-center block" data-cue="fadeIn" data-duration="1000">
                    <p class="caps spaced xsmall"><strong><?php the_field('bottom_subhead'); ?></strong></p>
                    <h2><?php the_field('bottom_section_title'); ?></h2>
                    <?php the_field('bottom_section_content'); ?>
                </div>
                <div class="column-40 nomargin photo" style="background-image:url('<?php the_field('let_us_help_photo'); ?>);" data-cue="fadeIn" data-duration="1000">
                    &nbsp;
                </div>
                <div class="column-60 nomargin sage pad-lg vert-center" data-cue="fadeIn" data-duration="1000">
                    <?php get_template_part('block','banner-cta'); ?>
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>