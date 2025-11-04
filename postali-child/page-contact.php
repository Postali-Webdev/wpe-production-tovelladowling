<?php
/**
 * ContactTemplate
 * Template Name: Contact
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','header'); ?>

    <section class="tan">
        <div class="container"> 
            <div class="columns padding-vert">
                <div class="column-66 white pad-sm form">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
                </div>
                <div class="column-33 lt-tan pad-sm vert-center">
                    <?php get_template_part('block','testimonial-slider'); ?>
                </div>
                <?php if( have_rows('location_info','options') ): ?>
                <?php while( have_rows('location_info','options') ): the_row(); ?>  
                    <div class="location-container" id="offices">
                        <div class="column-full sage pad-lg locations block">
                            <h3><?php the_sub_field('location_name'); ?></h3>
                            <?php if(get_sub_field('location_address')) { ?>
                                <div class="location-address">
                                    <span>O</span><p class="location-address"><?php the_sub_field('location_address'); ?></p>
                                    <div class="spacer-15"></div>
                                </div>
                            <?php } ?>

                            <?php if(get_sub_field('location_phone')) { ?>
                                <div class="location-address">
                                    <span>P</span><p><a href="tel:<?php the_sub_field('location_phone'); ?>" title="Call Tovella Dowling Today"><?php the_sub_field('location_phone'); ?></a></p>
                                </div>
                            <?php } else { ?>
                                <div class="location-address">
                                    <p>&nbsp;</p>
                                </div>
                            <?php } ?>

                            <?php if(get_sub_field('location_hours')) { ?>
                                <div class="location-address">
                                    <span>H</span><p><?php the_sub_field('location_hours'); ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="location-address">
                                    <p>&nbsp;</p>
                                </div>
                            <?php } ?>

                            <?php if(get_sub_field('location_address')) { ?>
                                <div class="spacer-60"></div>
                            <?php } else { ?>
                                <div class="spacer-90"></div>
                            <?php } ?>

                            <?php if(get_sub_field('location_directions')) { ?>
                                <div class="learn-more"><p class="small"><a href="<?php the_sub_field('location_directions'); ?>" title="Directions to our <?php the_field('location_name'); ?>" target="_blank">Directions</a></p></div>
                            <?php } else { ?>
                                <p class="small">&nbsp;</p>
                            <?php } ?>
                        </div>

                        <?php if(get_sub_field('location_map')) { ?>
                            <div class="location-map">
                                <iframe src="<?php echo get_sub_field('location_map'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        <?php } else { ?>
                            <?php $image = get_sub_field('location_image'); ?>
                            <div class="location-image" style="background:url('<?php echo esc_url($image['url']); ?>')"></div>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>    
        </div>
        <div class="spacer-90"></div>
    </section>

</div>

<?php get_footer(); ?>

