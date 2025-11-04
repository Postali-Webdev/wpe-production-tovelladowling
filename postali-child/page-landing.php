<?php
/**
 * General Interior Page Template
 * Template Name: Practice Area Landing
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <section class="emerald texture banner">
        <div class="container wide">
            <div class="columns">
                <div class="column-full centered">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

        <div class="spacer-30 mobile"></div>

        <div class="container main-content"> 
            <div class="columns padding-vert top">
            <?php if( have_rows('child_pages') ): ?>
            <?php while( have_rows('child_pages') ): the_row(); ?>  

                <?php
                $post_object = get_sub_field('child_page');
                if($post_object) :
                    $post = $post_object;
                    // Overwrite $post
                    setup_postdata( $post ); ?>

                    <a class="column-33 sage tan-bg pad-sm" href="<?php the_permalink(); ?>" data-cue="fadeIn" data-duration="1000">
                        <?php if (get_sub_field('alternate_page_title')) { ?>
                            <h3 class="tan"><span><?php the_sub_field('alternate_page_title'); ?></span></h3>
                        <?php } else { ?>
                            <h3 class="tan"><span><?php the_title(); ?></span></h3>
                        <?php } ?>
                        <span class="learn-more"><p>Learn More</p></span>
                    </a>
                    <?php
                    // Reset $post so the rest of the page works
                    wp_reset_postdata();
                endif; 
                ?>
                
            <?php endwhile; ?>
            <?php endif; ?> 
            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>

