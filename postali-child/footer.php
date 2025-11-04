<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

   <section class="footer padded">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <a href="/" class="custom-logo-link" rel="home">
                        <img src="/wp-content/uploads/2022/10/footer-logo.svg" class="custom-logo" alt="Tovella Dowling">
                    </a>
                </div>
                <div class="spacer-30"></div>
                <div class="column-33 block footer-main-contact">
                    <p>CONTACT US</p>
                    <div class="spacer-15"></div>
                    <p><span>P</span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Tovella Dowling Today"><?php the_field('global_phone','options'); ?></a></p>
                    <p><span>E</span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Tovella Dowling today"><?php the_field('global_email','options'); ?></a></p>
                    <?php if ('social_linkedin') { ?>
                        <div class="spacer-30"></div>
                        <p class="footer-social">
                            <a href="<?php the_field('social_linkedin','options'); ?>" title="Follow us on LinkedIn" target="blank"><span class="icon-linkedin"></span></a>
                            <a href="<?php the_field('social_facebook','options'); ?>" title="Follow us on Facebook" target="blank"><span class="icon-facebook"></span></a>
                            <a href="<?php the_field('social_instagram','options'); ?>" title="Follow us on Instagram" target="blank"><span class="icon-instagram"></span></a>
                        </p>
                    <?php } ?>
                </div>
                <div class="column-66 locations">
                    <p>FIRM LOCATIONS</p>
                    <div class="spacer-15"></div>
                    <?php if( have_rows('location_info','options') ): ?>
                    <?php while( have_rows('location_info','options') ): the_row(); ?>  
                        <div class="column-33 block">
                            <p class="sans"><strong><?php the_sub_field('location_name'); ?></strong></p>
                            <?php if(get_sub_field('location_address')) { ?>
                                <span class="location-address">
                                    <span>O</span><p class="location-address"><?php the_sub_field('location_address'); ?></p>
                                </span>
                            <?php } ?>
                            <p><span>P</span> <a href="tel:<?php the_sub_field('location_phone'); ?>" title="Call Tovella Dowling Today"><?php the_sub_field('location_phone'); ?></a></p>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                </div>
            </div>

            <div class="column-full utility" style="flex-wrap:wrap;">
                <p>
                    &copy; Copyright <?php echo date("Y"); ?> Tovella Dowling, P.C. All Rights Reserved. 
                    <?php $args = array(
                        'container' => false,
                        'theme_location' => 'utility-nav'
                    );
                    wp_nav_menu( $args ); ?>
                </p>
                <?php if(is_page_template('front-page.php')) { ?>
                <div class="spacer-15"></div>
                <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin: 0;"></a>
                <?php } ?>
            </div>

        </div>
   </section>

</footer>

<script type="text/javascript" src="//cdn.callrail.com/companies/781537829/4323f66ce71fcfe990bd/12/swap.js"></script>

<?php wp_footer(); ?>

<script src="/wp-content/themes/postali-child/assets/js/scrollCue.min.js"></script>
<script>scrollCue.init();</script>

<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
</body>
</html>


