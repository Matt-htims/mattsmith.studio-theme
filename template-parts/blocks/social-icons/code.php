<?php

/**
 * Social Icons Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'social-icons-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'social-icons';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

                                
<div class="social-icons-inline contained">

    <div class="social-inner-wrap">
                        
        <?php if(get_field('facebook', 'option')) { ?>
        
            <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><?php include(TEMPLATEPATH."/includes/social-media/facebook.php");?></a>
        
        <?php } ?>

        <?php if(get_field('twitter', 'option')) { ?>

            <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><?php include(TEMPLATEPATH."/includes/social-media/twitter.php");?></a>
        
        <?php } ?>
            
        <?php if(get_field('linkedin', 'option')) { ?>
        
            <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><?php include(TEMPLATEPATH."/includes/social-media/linkedin.php");?></a>
        
        <?php } ?>
        
        <?php if(get_field('instagram', 'option')) { ?>
        
            <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><?php include(TEMPLATEPATH."/includes/social-media/instagram.php");?></a>
        
        <?php } ?>
            
        <?php if(get_field('youtube', 'option')) { ?>
        
            <a href="<?php the_field('youtube', 'option'); ?>" target="_blank"><?php include(TEMPLATEPATH."/includes/social-media/youtube.php");?></a>
        
        <?php } ?>
        
    </div><!-- .social-inner-wrap -->
    
</div><!-- .social-icons-inline -->