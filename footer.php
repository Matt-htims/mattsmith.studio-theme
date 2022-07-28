<!-- begin footer -->

<div class="padder_0">
</div>

<div class="sticky-release">
</div><!-- .sticky-release -->

<div class="footer-rescue">
</div><!-- .footer-rescue -->


</div><!-- .body-area -->


<?php include(TEMPLATEPATH."/includes/newsletter.php");?>


<div id="footer">

    <div class="container">

        <div class="footer-wrap">
        
            <div class="footer-left">

                <a href="<?php echo get_settings('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" width="244" height="50" /></a>

                <?php if(get_field('company_details', 'option')) { ?>

                    <div class="footer-company-details">
                
                        <?php the_field('company_details', 'option'); ?>
                    
                    </div><!-- .footer-address -->
                    
                <?php } ?>

                <div class=footer-social">
                    
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
                    
                </div><!-- footer-social -->
                
            </div><!-- .footer-left -->
        
            <div class="footer-left">

                <div class="footer-email-phone">
                
                    <?php if(get_field('phone_number', 'option')) { ?>
                
                        <a class="footer-phone" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                    
                    <?php } ?>
                
                    <?php if(get_field('email_address', 'option')) { ?>
                
                        <a class="footer-email" href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
                    
                    <?php } ?>
                    
                </div><!-- .footer-email-phone -->

                <?php if(get_field('address', 'option')) { ?>

                    <div class="footer-address">
                
                        <?php the_field('address', 'option'); ?>
                    
                    </div><!-- .footer-address -->
                    
                <?php } ?>
                
            </div><!-- .footer-left -->

            <div class="footer-right">

                <?php if( have_rows('awards', 'options') ): ?>

                    <div class="award-wrapper">

                        <?php while ( have_rows('awards', 'options') ) : the_row(); ?>
                    
                            <?php if(get_sub_field('award_link')) { ?>
                            
                                <a href="<?php the_sub_field('award_link'); ?>" target="_blank">
                            
                            <?php } ?>
                                                            
                            <?php $attachment_id = get_sub_field('award_image');
                            $size = "full";
                            $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                            <img src="<?php echo $image[0]; ?>" />
                    
                            <?php if(get_sub_field('award_link')) { ?>
                            
                                </a>
                            
                            <?php } ?>
                    
                        <?php endwhile; ?>
                        
                    </div><!-- .award-wrapper -->

                <?php else : endif; ?>
                
            </div><!-- .footer-right -->

        </div><!-- .footer-wrap -->
        
    </div><!-- .container -->

</div><!-- .footer -->

<div class="bottom-bar">

    <div class="container">

        <div class="bottom-bar-wrap">

            <div class="bottom-bar-left">

                <?php if(get_field('copyright_text', 'option')) { ?>
                
                    <?php the_field('copyright_text', 'option'); ?>
                
                <?php } else { ?>

                    © <?php echo date('Y') . " " . get_bloginfo( 'name' ); ?>. All rights reserved.

                <?php } ?>

            </div><!-- .bottom-bar-left -->

            <div class="bottom-bar-right">

                <?php if( have_rows('bottom_bar_links', 'option') ): while ( have_rows('bottom_bar_links', 'option') ) : the_row(); ?>
                
                    <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        
                    <?php endif; ?>
                
                <?php endwhile; else : endif; ?>

                <?php /*<a class="unsetcookie">Unset Cookies</a>*/ ?>
                
            </div><!-- .bottom-bar-right -->

        </div><!-- .bottom-bar-wrap -->
        
    </div><!-- .container -->
    
</div><!-- .bottom-bar -->


</div><!-- .body-area-wrap -->


<?php include(TEMPLATEPATH."/includes/mobile-menu.php");?>


<?php include(TEMPLATEPATH."/includes/search-overlay.php");?>


<?php do_action('wp_footer'); ?>

</body>
</html>