<section class="emerald texture banner">
    <div class="container">
        <div class="columns">
            <div class="left block">
                <?php if(is_tree('170') || is_post_type_archive('testimonials') || is_page('633')) { ?>
                    <p class="dktan small spaced-lg caps sans"><strong>About Us</strong></p>
                <?php } elseif(is_page('289')) { ?>
                    <p class="dktan small spaced-lg caps sans"><strong>Form Success</strong></p>
                <?php } elseif(is_page('605') || is_page('606') || is_page('607') || is_page('648')) { ?>
                    <p class="dktan small spaced-lg caps sans"><strong>Site Information</strong></p>
                <?php } elseif(is_page_template('page-practice-parent.php')) { ?>
                    <p class="dktan small spaced-lg caps sans"><strong>Focus Areas</strong></p>                   
                <?php } ?>

                <?php if(is_post_type_archive('testimonials')) { ?>
                    <h1>Client Testimonials</h1>
                <?php } elseif(is_post_type_archive('events')) { ?>
                    <h1>Events and Awards</h1>
                <?php } elseif(is_404()) { ?>
                    <h1>Page Not Found</h1>
                <?php } elseif(is_search()) { ?>
                    <h1>Search Results</h1>
                    <p class="large">You searched for <span class="header-caps"><?php printf( esc_html__( '"%s"', 'postali' ), get_search_query() ); ?></p>
                <?php } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>

                <?php if(is_page_template('page-contact.php')) { ?>
                    <div class="spacer-15"></div>
                    <p class="sans small"><span>P</span> <a href="tel:<?php the_field('global_phone','options'); ?>" titl="Call Tovella Dowling Today"><?php the_field('global_phone','options'); ?></a> <span class="contact-separator"> // </span> <span>E</span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Tovella Dowling today"><?php the_field('global_email','options'); ?></a></p>
                <?php } ?>
            </div>
            <?php if(!is_search() && !is_page('289'))  { ?>
            <div class="right">
                <?php get_template_part('block','banner-cta'); ?>
                <?php if(is_page_template('page-contact.php')) { ?>
                    <div class="spacer-30"></div>
                    <div class="learn-more"><p class="small"><a href="#offices" title="Our Offices">Our Offices</a></p></div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php if(is_page_template('page-contact.php')) { ?>
        <div class="spacer-60 mobile"></div>
    <?php } else { ?>
        <div class="spacer-90 mobile"></div>
    <?php } ?>
</section>