<?php
/**
 * Template Name: Price
 */

get_header();
while(have_posts()):the_post();
?>

   <!-- pricing section -->
      <section id="pricing">
        <div class="container pb-30">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase mt-0 line-height-1">Pricing</h2>
                <div class="title-icon">
                  <img class="mb-10" src="<?php echo site_url();?>/wp-content/uploads/2022/10/title-icon.png" alt="">
                </div>
                    <?php the_content();?>
              </div>
            </div>
          </div>
          <div class="section-content">
           <table class="table table-striped table-bordered table-responsive table-hover" style="display: none;">
  <thead>
    <tr>
      <th scope="col">SERVICES</th>
      <th scope="col">PRICE</th>
    </tr>
  </thead>
  <tbody>
     <?php while(have_rows('price_list')):the_row();?>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
    <tr>
      <td><?php the_sub_field('name6');?></td>
      <td><?php the_sub_field('price6');?></td>
    </tr>
     <?php endwhile; ?>
    
  </tbody>
</table>

          </div>
        </div>
      </section>
<?php endwhile; 
get_footer();
