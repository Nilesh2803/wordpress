<?php
/**
 * The template for displaying all single posts
 */

get_header();
$curentpage = get_the_ID();
?>
        <!-- Section: Services -->
    <section>
        <div class="container">
          <div class="row mtli-row-clearfix">
            <div class="col-sm-6 col-md-8 col-lg-8">
              <div class="campaign maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fullwidth">
                  <div class="campaign-overlay"></div>
                </div>
                <h2 class=""><?php the_title();?></h2>
              </div>
              <div class="event-details">
                <?php the_content();?>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom">All Services</h5>
                  <ul class="list-divider list-border list check">
                    <?php
                global $query;
                $query_args = array(
                'post_type' => 'service',
                'posts_per_page' =>-1,
                'post_status' => 'publish',
                'order' => 'DESC',
                );
                $query = new WP_Query( $query_args );
                ?>
                <?php while ( $query->have_posts()) : $query->the_post(); ?> 
                    <li><a class="<?php if($curentpage == $post->ID){echo 'text-theme-colored';}?> " href="<?php the_permalink();?>"><?php the_title();?></a></li>
                     <?php endwhile; wp_reset_query(); ?>  
                   
                  </ul>
                </div>

                <div class="widget">
                  <div class="border-10px p-30">
                    <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
                    <div class="opening-hours text-left">
                      <ul class="list-unstyled">
                        <li class="clearfix line-height-1"> <span> Monday - Friday </span>
                          <div class="value"> 9.00 - 20.00 </div>
                        </li>
                        <li class="clearfix line-height-1"> <span> Saturday </span>
                          <div class="value"> 10.00 - 16.00 </div>
                        </li>
                        <li class="clearfix line-height-1"> <span> Sunday </span>
                          <div class="value"> 9.30 - 18.00 </div>
                        </li>
                      </ul>
                    </div>
                    <a href="<?php echo site_url();?>/?page_id=33" class="btn btn-dark btn-theme-colored mt-15">Book Appointment</a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </section>

<?php
get_footer();
