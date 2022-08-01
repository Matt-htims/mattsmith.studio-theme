<?php

/**
 * cta-section text template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="container">
    <div class="ctas-container">
        
        <div class="ctas-text">

            <?php if (get_field('main_text')) { ?>

               <h3><?php the_field('main_text'); ?></h3>

            <?php } ?>

            <?php if (get_field('sub_text')) { ?>

               <p><?php the_field('sub_text'); ?></p>

            <?php } ?>

        </div>

        <div class="ctas-button">

            <?php if (get_field('button_text') & (get_field('button_link'))) { ?>


                <a href="<?php the_field('button_link') ?>"><button><?php the_field('button_text') ?></button></a>
            
            <?php } ?>

        </div>
    
    </div><!-- .large-text -->
</div>