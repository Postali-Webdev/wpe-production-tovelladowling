<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<div class="body-container">

    <section class="emerald texture banner">
        <div class="container wide">
            <div class="columns">
                <div class="column-full">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                </div>
            </div>
        </div>
        <div class="container wide">
            <div class="columns">
                <div class="left block">
                    <p class="dktan small spaced-lg caps sans"><strong>404</strong></p>
                    <span class="headline">The page you’re trying to visit has either been removed or doesn’t exist.</span>
                    <div class="spacer-60 mobile"></div>
                    <a href="/" title="Back to homepage" class="btn_reversed">Back to homepage</a>
                </div>
                <div class="right">
                    <?php get_template_part('block','banner-cta'); ?>
                </div>
            </div>
        </div>
        <div class="spacer-90 mobile"></div>
    </section>
    
</div>

<?php get_footer(); ?>

