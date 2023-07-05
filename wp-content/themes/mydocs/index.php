<?php
/**
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header();
?>

  <!-- Slider section -->
      <section id="home" class="divider">
        <div class="fullwidth-carousel"  data-nav="true">
        	<?php while(have_rows('banner_slider')):the_row();?>
          <div class="item">
            <img src="<?php the_sub_field('slider_image');?>">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="slider-content inline-block pb-60 pl-60 pr-60 pt-40">
                    <h4 class="font-weight-400 mt-0"><?php the_sub_field('slider_text');?></h4>
                    <a class="btn btn-colored btn-theme-colored btn-flat smooth-scroll-to-target mt-20" href="<?php the_sub_field('button_link_url');?>"><?php the_sub_field('button_text');?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile; ?>  
        </div>
      </section>
      

<section class="">
        <div class="container pb-0">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-gray mt-0 mt-sm-30 mb-0"><?php the_field('first_heading');?></h3>
              <h2 class="text-theme-colored mt-0"><?php the_field('second_heading');?></h2>
              <?php the_field('short_content1');?>
             
              <a href="<?php the_field('read_more_button_url_link');?>" class="btn btn-default btn-theme-colored mt-15 mb-sm-30"><?php the_field('read_more_button_text');?></a>
            </div>
            <div class="col-md-4">
              <img src="<?php the_field('right_block_image');?>" alt="">
            </div>
          </div>
        </div>
      </section>

      <!-- services section -->
      <section class="bg-lighter">
        <div class="container">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase mt-0 line-height-1"><?php the_field('heading2');?></h2>
                <div class="title-icon">
                  <img class="mb-10" src="<?php the_field('icon2');?>" alt="">
                </div>
                <p><?php the_field('short_content2');?></p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
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
                <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                <div class="col-xs-12 col-sm-6 col-md-3 mb-30 services">
                <img class="img-fullwidth" alt="" src="<?php the_post_thumbnail_url();?>">
                <h4><?php the_title();?></h4>
                  <p><?php 
                  $content = get_the_content();
                  $content = strip_tags($content);
                  echo substr($content, 0, 100);
                  ?></p>
                <a href="<?php the_permalink();?>" class="btn-read-more text-theme-colored">Read more</a>
                </div>
                <?php endwhile; wp_reset_query(); ?>  
              <!-- <div class="col-lg-12 text-center">
                <a href="#" class="btn btn-colored btn-theme-colored btn-flat smooth-scroll-to-target mt-40">Load more...</a>
              </div> -->
            </div>
          </div>
        </div>
      </section>

      <!-- sports-section section -->
      <section class="layer-overlay overlay-theme-colored-9 sports-section">
          <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="sports p-30 text-white">
                <div class="section-title text-center">
                  <h2 class="text-uppercase mt-0 line-height-1"><?php the_field('heading3');?></h2>
                  <div class="title-icon">
                    <img class="mb-10" src="<?php the_field('icon3');?>" alt="">
                  </div>
                  <p><?php the_field('short_description3');?></p>
                </div>
                 <?php the_field('full_description3');?>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
              <img class="wow flipInY w-100" data-wow-duration="1.5s" data-wow-offset="10" src="<?php the_field('right_side_images3');?>" alt=""> 
            </div>
          </div>
      </section>

      <!-- pricing section -->
      <section id="pricing">
        <div class="container pb-30">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="text-uppercase mt-0 line-height-1">Pricing</h2>
                <div class="title-icon">
                  <img class="mb-10" src="images/title-icon.png" alt="">
                </div>
                <p>New patients require a consultation so cost is €65.00 plus €40.00 bloods</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="owl-carousel-5col">
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Medical card holders until we have GMS service</h3>
                    <h1 class="price text-theme-colored mb-10">24<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Echocardiogram including full report</h3>
                    <h1 class="price text-theme-colored mb-10">200<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Under 6s GP card</h3>
                    <h1 class="price text-theme-colored mb-10">20<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">X-Ray</h3>
                    <h1 class="price text-theme-colored mb-10">100<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Video/Phone Consultation</h3>
                    <h1 class="price text-theme-colored mb-10">50<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Walk-In GP Consultation / Out of hours services</h3>
                    <h1 class="price text-theme-colored mb-10">75<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Blood review</h3>
                    <h1 class="price text-theme-colored mb-10">30<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Minor Injuries
                      XRAY with report FROM</h3>
                    <h1 class="price text-theme-colored mb-10">100<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Consultation</h3>
                    <h1 class="price text-theme-colored mb-10">65<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">BOOT</h3>
                    <h1 class="price text-theme-colored mb-10">65<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Pair Cruches</h3>
                    <h1 class="price text-theme-colored mb-10">30<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Ear Syringing(WITHOUT CONSULTATION)</h3>
                    <h1 class="price text-theme-colored mb-10">50<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
              <div class="items hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                <div class="pricing-table style1 bg-white border-10px text-center">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-stethoscopes"></i>
                  </div>
                  <div class="p-40">
                    <h3 class="package-type mt-90">Ear Syringing(WITH CONSULTATION)</h3>
                    <h1 class="price text-theme-colored mb-10">65<span class="font-48">&euro;</span></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- Testimonial Section Start -->

      <?php get_template_part( 'testimonial'); ?>

<!-- Testimonial Section End -->


      <!-- Appointment section -->
      <section id="Appoinment" data-bg-img="images/p4.png">
        <div class="container pt-50 pb-0">
          <div class="row">
            <div class="col-md-6">
              <div class="p-10">
                <!-- Reservation Form Start-->
                <form id="reservation_form" name="reservation_form" class="reservation-form">
                  <h2 class="mt-0 line-bottom line-height-1 text-black mb-30">Make An Appoinment<span class="text-theme-colored font-weight-600"> Now!</span></h2>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <div class="styled-select">
                          <select id="car_select" name="car_select" class="form-control" required="">
                            <option value="">- Select Your Services -</option>
                            <option value="value1">New Patient Registration</option>
                            <option value="value2">GP Walking Clinic</option>
                            <option value="value3">Urgent Care Services</option>
                            <option value="value4">Travel Vaccination</option>
                            <option value="value5">Blood Test</option>
                            <option value="value6">Specialist Services</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input name="reservation_date" class="form-control required date-picker" type="text" placeholder="Select Date" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-0">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-theme-colored btn-lg btn-block">Submit Now</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <img src="<?php the_field('right_block_image5');?>" alt="">
            </div>
          </div>
        </div>
      </section>

<?php
get_footer();
