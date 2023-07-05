<?php
/**
 * Template Name: About Us
 */

get_header();
while(have_posts()):the_post();
?>

        <!-- Aboput info section -->
        <section class="">
            <div class="container pb-0">
                <div class="row">
                    <div class="col-md-8">
                    <h3 class="text-gray mt-0 mt-sm-30 mb-0"><?php the_field('first_heading');?></h3>
                    <h2 class="text-theme-colored mt-0"><?php the_field('second_heading');?></h2>
                 	
                 	<?php the_content();?>
                  
                    </div>
                    <div class="col-md-4">
                    <img src="<?php the_field('right_block_image');?>" alt="">
                    </div>
                </div>
            </div>
        </section>

<!-- Testimonial Section Start -->

      <?php get_template_part( 'testimonial'); ?>

<!-- Testimonial Section End -->

<?php endwhile; 
get_footer();
