<?php

/**
 * Picture / Text Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$rand = rand(1, 9999);

$bg = get_field('background');
$thumbnailStyle = get_field('thumbnail_style');

 ?>

<?php $posts = get_field('work_linker'); if ($posts): $t = 1; ?>

    <div class="ig-wrap">

        <div class="ig-title">

            <?php if(get_field('title')) { ?>
                
                <h2><?php the_field('title'); ?></h2>

            <?php } ?>
        
        </div>

        <div class="ig-content">

                <?php foreach( $posts as $p): ?>

                    <div class="ig-indiv">

                        <div class="ig-image">

                        </div>

                        <div class="ig-text">

                            <h2><?php echo get_the_title($p->ID); ?></h2>

                        </div>

                    </div>

                <?php $t++; endforeach; ?>

        </div>

    </div><!-- .pic-text-wrap -->

<?php endif; ?>

