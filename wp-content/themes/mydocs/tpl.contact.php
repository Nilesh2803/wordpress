<?php
/**
 * Template Name: Contact
 */

get_header();
while(have_posts()):the_post();
?>

<!-- Section: Have Any Question -->
        <section class="address">
            <div class="container pt-60 pb-60">
            <div class="section-title mb-60">
                <div class="row">
                <div class="col-md-12">
                    <div class="esc-heading small-border text-center">
                    <h3><?php the_field('heading5');?></h3>
                    </div>
                </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                    <h4><?php the_field('call_us');?></h4>
                    <h6 class="text-gray">Phone: <?php the_field('phone');?></h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                    <h4><?php the_field('address_title');?></h4>
                    <h6 class="text-gray"><?php the_field('address55');?></h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="contact-info text-center">
                    <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                    <h4><?php the_field('email_title');?></h4>
                    <h6 class="text-gray"><?php the_field('email5');?></h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    
        <!-- Section Contact -->
        <section id="contact" class="divider bg-lighter">
            <div class="container-fluid pt-0 pb-0">
                <div class="section-content">
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-wrapper">
                        <h3 class="line-bottom mt-0 mb-20"><?php the_field('contact_form_heading');?></h3>
                        <p class="mb-30"><?php the_field('short_description5');?></p>
        
                        <!-- Contact Form -->
                        <?php echo do_shortcode(get_field('contact_form_shortcode'));?>
                       
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0" data-bg-img="<?php the_field('right_block_image');?>" style="height: 680px;"></div>
                    </div>
                </div>
            </div>
        </section>


<?php endwhile; 
get_footer();
