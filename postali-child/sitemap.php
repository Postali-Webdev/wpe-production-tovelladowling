<?php
/**
 * General Sitemap Page Template
 * Template Name: Sitemap
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','header'); ?>

    <section class="tan padded main-content">
        <div class="container wide"> 
            <div class="columns padding-vert top">

                <?php if (have_posts()) : 
		        while (have_posts()) : the_post(); ?>
                <div class="column-50 block">
					<h2>Pages</h2> 
					<ul class="sitemap">
						<?php wp_list_pages("title_li=" ); ?>
					</ul> 
				</div>
                <div class="column-50 block">
					<h2>Blog Posts</h2> 
					<div class="spacer-30"></div>
					<ul class="sitemap">
						<?php wp_get_archives('type=postbypost'); ?>
					</ul>
				</div>
                <?php endwhile; ?>
	            <?php endif; ?>


            </div>    
        </div>
    </section>

</div>

<?php get_footer(); ?>

