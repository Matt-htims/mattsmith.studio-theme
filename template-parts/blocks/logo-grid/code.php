<?php

/**
 * Logo Grid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'logo-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'logo-grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$rand = rand(1, 9999);

?>


<div class="logo-grid-wrap contained">

    <div class="logo-grid">

        <?php $posts = get_field('partner_logos'); if( $posts ): ?>
        
            <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                

                <div class="client-pod <?php if(get_field('link', $p->ID)) { ?>client-pod-hoverable<?php } ?>">

                    <?php /* if(get_field('link', $p->ID)) { ?><a href="<?php the_field('link', $p->ID); ?>" target="_blank"><?php } */ ?>
                                                    
                        <?php $attachment_id = get_field('logo', $p->ID);
                        $size = "full";
                        $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                        <img src="<?php echo $image[0]; ?>" />

                    <?php /* if(get_field('link', $p->ID)) { ?></a><?php } */ ?>

                    <?php if(get_field('link', $p->ID)) { ?>
                    
                        <a href="<?php the_field('link', $p->ID); ?>" target="_blank" class="block-link"></a>
                    
                    <?php } ?>
                    
                </div><!-- .client-pod -->
                    
                
            <?php endforeach; ?>
            
        <?php endif; ?>
        
    </div><!-- .logo-grid -->
    
</div><!-- .logo-grid-wrap -->