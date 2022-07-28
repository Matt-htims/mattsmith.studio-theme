<section class="section-bg-offwhite full-width newsletter-outer">


    <div class="container">

        <div class="newsletter-wrap">


            <?php if(get_field('newsletter_image', 'option')) { ?>

                <div class="newsletter-image">
                                            
                    <?php $attachment_id = get_field('newsletter_image', 'option');
                    $size = "medium";
                    $image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
                    <img src="<?php echo $image[0]; ?>" />

            </div><!-- .newsletter-image -->
            
            <?php } ?>
        
            <div class="newsletter-text">

                <div class="newsletter-text-form">

                    <?php $formID = get_field('newsletter_form_id', 'option'); ?>
                
                    <?php gravity_form( $formID, true, true, false, '', true ); ?>

                    <?php /* ALTERNATIVE - add acf fields and uncomment for custom newsletter code (example below)

                    <h2><?php the_field('newsletter_title', 'option'); ?></h2>

                    <?php the_field('newsletter_text', 'option'); ?>

                    <a class="fancybox button" href="#newsletter-popup"><?php the_field('newsletter_button_text', 'option'); ?></a>


                    <div style="display: none;">

                        <div id="newsletter-popup" class="newsletter-popup">
                        
                            <div><h1 color="#000">Get the latest from Action Tutoring</h1><div><div><p>We'd love to keep you informed about our work.

                            Subscribe to receive our charity newsletter, event invites, education policy updates and more.

                            Choose which emails you'd like to receive from us using the form below.</p></div><form class="js-cm-form" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="2BE4EF332AA2E32596E38B640E9056193184605B2436BBA4606E81E3F46979F2CC4CF9F8F63600391DCF1C89E1D9B8D313FD323B7BE01F268166A5D06384B575"><div><div><label>Name </label><input aria-label="Name" id="fieldName" maxlength="200" name="cm-name"></div><div><label>Email </label><input autocomplete="Email" aria-label="Email" class="js-cm-email-input qa-input-email" id="fieldEmail" maxlength="200" name="cm-jrhyydk-jrhyydk" required="" type="email"></div><div><label>Updates on our work </label><span><select aria-label="Updates on our work" id="fieldjhirldh" name="cm-fo-jhirldh" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187108">Yes</option><option value="3187109">No</option></select></span></div><div><label>Reading Action Tutoring pupil stories and impact statistics </label><span><select aria-label="Reading Action Tutoring pupil stories and impact statistics" id="fieldjhirldk" name="cm-fo-jhirldk" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187110">Yes</option><option value="3187111">No</option></select></span></div><div><label>Action Tutoring job vacancies </label><span><select aria-label="Action Tutoring job vacancies" id="fieldjhirldu" name="cm-fo-jhirldu" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187112">Yes</option><option value="3187113">No</option></select></span></div><div><label>Getting tips and ideas to improve your tutoring </label><span><select aria-label="Getting tips and ideas to improve your tutoring" id="fieldjhirlhl" name="cm-fo-jhirlhl" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187114">Yes</option><option value="3187115">No</option></select></span></div><div><label>Event invites and fundraising opportunities </label><span><select aria-label="Event invites and fundraising opportunities" id="fieldjhirlhr" name="cm-fo-jhirlhr" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187116">Yes</option><option value="3187117">No</option></select></span></div><div><label>Learning about educational inequality </label><span><select aria-label="Learning about educational inequality" id="fieldjhirlhy" name="cm-fo-jhirlhy" required="" value=""><option disabled="" selected="" value="">Select...</option><option value="3187118">Yes</option><option value="3187119">No</option></select></span></div><div><div><div><div><input id="cm-privacy-email" name="cm-privacy-email" type="checkbox"><label for="cm-privacy-email">I agree to have my email activity tracked</label></div><input id="cm-privacy-email-hidden" name="cm-privacy-email-hidden" type="hidden" value="true"></div></div><p><a href="Action Tutoring privacy and data policy for website users - Action Tutoring" rel="noopener" target="_blank">Privacy policy</a></p></div></div><button type="submit">Subscribe</button></form></div></div><script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
                            
                        </div><!-- .newsletter-popup -->

                    </div>

                    */ ?>

                    
                </div><!-- .newsletter-text-form -->
                
            </div><!-- .newsletter-text -->
            
        </div><!-- .newsletter-wrap -->
        
    </div><!-- .container -->


</section>