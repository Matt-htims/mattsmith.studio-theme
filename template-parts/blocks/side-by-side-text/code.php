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

            <h2><?php the_field('large_text'); ?></h2>

        <?php } ?>

    </div>

    <div class="sbs-small">

        <?php if (get_field('small_text')) { ?>
            
            <p><?php the_field('small_text'); ?></p>
        
        <?php } ?>

    </div>

    <?php the_field('text'); ?>
  
</div><!-- .large-text -->
</div>
