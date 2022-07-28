<?php

/**
 * Visual Submenu Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'visual-submenu-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'visual-submenu';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

?>


<div class="visual-submenu-wrap">

    <div class="visual-submenu">

        <?php if( have_rows('visual_submenu') ): while ( have_rows('visual_submenu') ) : the_row(); ?>
        
            <div class="visual-submenu-item">
                                                
                <?php $attachment_id = get_sub_field('picture');
                $size = "large";
                $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
            
                <div class="vsi-image" style="background-image: url(<?php echo $image[0]; ?>);">
                </div><!-- .vsi-image -->

                <div class="vsi-text">
                
                    <span class="vsi-title"><?php the_sub_field('title'); ?></span>

                    <?php if(get_sub_field('subtitle')) { ?>
                    
                        <span class="vsi-subtitle"><?php the_sub_field('subtitle'); ?></span>
                    
                    <?php } ?>
                    
                </div><!-- .vsi-text -->

                <a class="block-link" href="<?php the_sub_field('link'); ?>"></a>
                
            </div><!-- .visual-submenu-item -->
        
        <?php endwhile; else : endif; ?>
        
    </div><!-- .visual-submenu -->
    
</div><!-- .visual-submenu-wrap -->