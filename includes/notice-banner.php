<?php if(get_field('notice_banner_active', 'option')) { ?>

    <?php if(!isset($_COOKIE['notice-hidden'])) { ?>

        <div class="notice-banner">
        
            <div class="container">

                <div class="notice-banner-wrap">

                    <div class="notice-text">
                    
                        <?php the_field('notice', 'option'); ?>
                        
                    </div><!-- .notice-text -->

                    <?php 
                    $link = get_field('notice_link', 'option');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                        <a class="button button-small" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

                    <?php endif; ?>

                    <a class="notice-banner-close"><img src="<?php bloginfo('template_url'); ?>/images/close.png" width="15" height="15" /></a>
                    
                </div><!-- .notice-banner-wrap -->
                
            </div><!-- .container -->
            
        </div><!-- .notice-banner -->

    <?php } ?>

<?php } ?>