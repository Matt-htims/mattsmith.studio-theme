<?php

/**
 * Job List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'job-list-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
} ?>



<div class="job-list-wrap contained">

    <?php
    $type = 'job';
    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1
        );
    query_posts( $args );
    if ( have_posts() ): $num = 0;  while ( have_posts() ) : the_post(); ?>
    
        <div class="job-list-pod">
        
            <span class="as-h4"><?php the_title(); ?></span>

            <a class="button" href="<?php the_permalink(); ?>">Find out more</a>
            
        </div><!-- .job-list-pod -->
        
    <?php endwhile; $num++; else : endif; wp_reset_query(); ?>
    
</div><!-- .job-list-wrap -->