<?php

/**
 * Side by side text template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="container">
    <div class="sbs-container">

        <div class="sbs-large">

            <?php if (get_field('large_text')) { ?>

               <?php the_field('large_text'); ?>

            <?php } ?>

        </div>

        <div class="sbs-small">

            <?php if (get_field('small_text')) { ?>
                
                <div class="sbs-small-inner"><?php the_field('small_text'); ?></div>
            
            <?php } ?>

        </div>

        <?php the_field('text'); ?>
    
    </div><!-- .large-text -->
</div>
