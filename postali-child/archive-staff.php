<?php
/**
 * Post Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

<section class="emerald texture">
    <div class="container">
        <div class="columns">
            <div class="column-full centered">
                <h1>The Tovella Dowling Team</h1>
                <div class="spacer-60"></div>
                <h2 class="dktan">Attorneys</h2>
                <div class="spacer-30"></div>
            </div>
        </div>
        <div class="columns attorney-list">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if (get_field('staff_type') == 'attorney') { ?>
            <a href="<?php the_permalink(); ?>" title="Click to read <?php echo $arr[0]; ?>'s Bio" class="column-25 centered block" data-cue="fadeIn" data-duration="1000">
                <div class="attorney-img">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div class="attorney-img-gradient"></div>
                    <img src="<?php echo $image[0]; ?>" alt="" />
                </div>
                <div class="spacer-30"></div>
                <p class="sans"><strong><?php the_title(); ?></strong></p>
                <p class="caps xsmall sans spaced"><?php the_field('attorney_title'); ?></p>
                <div class="spacer-15"></div>
                <?php
                    $firstname = get_the_title();
                    $arr = explode(' ',trim($firstname));
                ?>
                <p class="small">Read <?php echo $arr[0]; ?>'s Bio <span class="icon-arrow-right"></span></p>
            </a>
            <?php } ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="container">
        <div class="columns">
            <div class="column-full centered">
                <h2 class="dktan">Staff</h2>
                <div class="spacer-30"></div>
            </div>
        </div>
        <div class="columns attorney-list">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if (get_field('staff_type') == 'staff') { ?>
            <div class="column-25 centered block" data-cue="fadeIn" data-duration="1000">
                <div class="attorney-img">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div class="attorney-img-gradient"></div>
                    <img src="<?php echo $image[0]; ?>" alt="" />
                </div>
                <div class="spacer-30"></div>
                <p class="sans"><strong><?php the_title(); ?></strong></p>
                <p class="caps xsmall sans spaced"><?php the_field('attorney_title'); ?></p>
                <div class="spacer-15"></div>
                <?php
                    $firstname = get_the_title();
                    $arr = explode(' ',trim($firstname));
                ?>
                <p class="small"><a href="<?php the_permalink(); ?>" title="Click to read <?php echo $arr[0]; ?>'s Bio<">Read <?php echo $arr[0]; ?>'s Bio</a> <span class="icon-arrow-right"></span></p>
            </div>
            <?php } ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="spacer-90"></div>
</section>


<?php get_footer();
