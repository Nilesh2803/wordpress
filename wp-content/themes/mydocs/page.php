<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mydocs
 */

get_header();
while ( have_posts() ) : the_post();
?>
<section id="post-<?php the_ID(); ?>">
   <div class="container">
      <div class="row mtli-row-clearfix">
         <div class="col-sm-12">
            <div class="campaign maxwidth500 mb-sm-30">
				<?php if(has_post_thumbnail()):?>
               <div class="thumb">
                  <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fullwidth">
               </div>
				<?php endif; ?>
               <h2 class=""><?php the_title();?></h2>
            </div>
            <div class="event-details">
               <?php the_content();?>
            </div>
         </div>
      </div>
   </div>
</section>


<?php
endwhile;
get_footer();
