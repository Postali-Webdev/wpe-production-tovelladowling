<?php
/**
 * Template Name: Form Success
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
                    <?php the_content(); ?>
                    <div class="spacer-30 mobile"></div>
                    <a class="btn_reversed" title="Back to homepage" href="/">Back to homepage</a>
                </div>
                <div class="right">
                    
                </div>
            </div>
        </div>
        <div class="spacer-90 mobile"></div>
    </section>

</div>

<?php get_footer(); ?>

