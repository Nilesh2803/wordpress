  <!-- Client say -->
        <section class="layer-overlay overlay-theme-colored-9">
            <div class="container pt-60 pb-60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                <h2 class="line-bottom-center text-white text-center mt-0 mb-30"><?php the_field('testimonial_heading',5);?></h2>
                <div class="owl-carousel-1col" data-dots="true">
                    <?php
                    global $query;
                    $query_args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' =>-1,
                    'post_status' => 'publish',
                    'order' => 'DESC',

                    );
                    $query = new WP_Query( $query_args );
                    ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>  
                    <div class="item">
                    <div class="testimonial-wrapper text-center">
                        <?php if(has_post_thumbnail()):?>
                        <div class="thumb">
                            <img class="img-circle" alt="" src="<?php the_post_thumbnail_url();?>">
                        </div>
                    <?php endif; ?>
                        <div class="content pt-10">
                            <div class="conb">
                        <?php the_content();?>
                    </div>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h4 class="author text-white mb-0"><?php the_title();?></h4>
                        <h6 class="title text-gray-lightgray mt-0 mb-15"><?php the_field('designation');?></h6>
                        </div>
                    </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?> 
                </div>
                </div>
            </div>
            </div>
        </section>