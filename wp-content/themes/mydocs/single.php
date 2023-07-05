<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mydocs
 */

get_header();
?>
    <section>
        <div class="container">
          <div class="row mtli-row-clearfix">
            <div class="col-sm-12">
				 <h2 class=""><?php the_title();?></h2>
				<?php if(has_post_thumbnail()):?>
				 <div class="thumb mt-10 mb-10">
                  <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fullwidth">
                </div>
				<?php endif; ?>
				 <div class="contbox">
				<?php the_content();?>
			  </div>
			  </div>
			</div>
		</div>
</section>

<?php
get_footer();
