<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */


get_header();?>

<div class="body-container">

    <section class="emerald texture">
        <div class="container">
            <div class="columns">
                <?php while( have_posts() ) : the_post(); ?>
                    <div class="column-33">
                        <div class="attorney-img">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <div class="attorney-img-gradient"></div>
                            <img src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                    </div>
                    <div class="column-66 block">
                        <div class="spacer-60"></div>
                        <h1><?php the_title(); ?></h2>
                        <p class="caps dktan sans spaced small"><strong><?php the_field('attorney_title'); ?></strong></p>
                        <div class="attorney-contact">
                            <?php if (get_field('attorney_phone')) { ?>
                            <div class="attorney-phone"><span>P</span> <a href="tel:<?php the_field('attorney_phone'); ?>" title="Call <?php the_title(); ?> Today"><?php the_field('attorney_phone'); ?></a></div>
                            <div class="separator">//</div>
                            <?php } ?>
                            <?php if (get_field('attorney_email')) { ?>
                            <div class="attorney-email"><span>E</span> <a href="mailto:<?php the_field('attorney_email'); ?>" title="Call <?php the_title(); ?> Today"><?php the_field('attorney_email'); ?></a></div>
                            <?php } ?>
                        </div>
                        <div class="spacer-60"></div>
                        <?php
                            $firstname = get_the_title();
                            $arr = explode(' ',trim($firstname));
                        ?>
                        <p class="dktan caps spaced small"><?php echo $arr[0]; ?>'s Bio</p>
                        <?php the_content(); ?>
                        <div class="spacer-60"></div>
                        <?php if( have_rows('attorney_credentials') ): ?>
                        <?php while( have_rows('attorney_credentials') ): the_row(); ?>  
                            <div class="accordions">
                                <div class="accordions_title"><h3><?php the_sub_field('credential_title'); ?></h3><span></span></div>
                                <div class="accordions_content"><?php the_sub_field('credential_details'); ?></div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>            
        </div>
        <div class="spacer-90"></div>
    </section>

</div>

<?php get_footer(); ?>