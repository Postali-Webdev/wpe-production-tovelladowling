<?php if (is_tree('183')) { 
    $practice = 'nonprofit';
} elseif (is_tree('199')) {
    $practice = 'fundraising';
} elseif (is_tree('205')) {
    $practice = 'social';
} elseif (is_tree('195')) {
    $practice = 'corporate';
} elseif (is_tree('197')) {
    $practice = 'estate';
}?>

<?php if( have_rows( $practice .'_related_resources','options') ): ?>

    <section class="lt-tan padded" id="footer-related">
        <div class="container">
            <div class="columns">
                <div class="column-66 block nomargin">
                    <p class="caps spaced xsmall"><strong>Resources</strong></p>
                    <h2><?php the_field($practice .'_related_block_headline','options'); ?></h2>
                    <p><?php the_field($practice .'_related_block_copy','options'); ?></p>
                    <a href="/resources/" title="View all resources" class="btn burgundy">View All Resources</a>
                </div>

                <?php while( have_rows($practice .'_related_resources','options') ): the_row(); ?>
                    <?php $post_object = get_sub_field('resource'); ?>
                    <?php if( $post_object ): ?>
                        <?php // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <a class="column-33 sage pad-sm" href="<?php the_permalink(); ?>" data-cue="fadeIn" data-duration="1000">
                            <h3 class="tan"><span><?php the_title(); ?></span></h3>
                            <span class="learn-more"><p>Learn more</p></span>
                        </a>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                
                <a class="column-33 sage pad-sm" href="/blog/">
                    <h3 class="tan"><span>Legal Blog</span></h3>
                    <span class="learn-more"><p>Learn more</p></span>
                </a>

            </div>
        </div>
    </section>

<?php endif; ?>
