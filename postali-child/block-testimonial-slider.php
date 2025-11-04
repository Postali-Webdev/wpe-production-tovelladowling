<?php

$testimonials = new WP_Query( array(
	'posts_per_page'         => 3,
    'post_type' => 'testimonials',
    'order' => 'ASC',          // name of post type.
) );
?>

<div class="testimonial-slider">
    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
        <div class="slide">
            <?php 
            $content = get_the_excerpt(); ?>
            <p class="large"><?php echo wp_trim_words( $content , '25' ); ?></p>
            <div class="spacer-30"></div>
            <p class="sans"><strong><?php the_field('testimonial_author'); ?></strong></p>
            <p class="spaced xsmall"><?php the_field('testimonial_attribution'); ?></p>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<div class="nav-dots"></div>
