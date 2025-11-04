<div class="banner-cta">
    <p class="caps dktan spaced xsmall"><strong><?php the_field('cta_subhead','options'); ?></strong></p>
    <p class="med tan">
        <?php if (is_front_page()) { ?>
            <?php the_field('cta_content_hp_footer','options'); ?>
        <?php } else { ?>
            <?php the_field('cta_content','options'); ?>
        <?php } ?>
    </p>
    <div class="cta-contact">
        <a href="<?php the_field('cta_consultation_link','options'); ?>" class="btn_reversed">Book a Consultation</a>
        <p class="small">Or call <a href="tel:<?php the_field('global_phone','options'); ?>"><?php the_field('global_phone','options'); ?></a></p>
    </div>
</div>