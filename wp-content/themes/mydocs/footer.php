<?php
/**
 * The template for displaying the footer
 */
?>

</div>
<!-- Main Section End-->

     <!-- Footer section -->
      <footer id="footer" class="footer pb-0 bg-black-111">
        <div class="container pt-70 pb-40">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3">
              <div class="widget dark"> <img alt="" src="<?php the_field('footer_logo', 'option');?>">
                <p class="font-12 mt-20 mb-10"><?php the_field('footer_logo_bottom_text', 'option');?></p>
                <a class="text-gray font-12" href="<?php the_field('read_more_link', 'option');?>"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                <ul class="styled-icons icon-dark mt-20">
                  <?php if(get_field('facebook_url_link', 'option')):?>	
                  <li><a href="<?php the_field('facebook_url_link', 'option');?>" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
             	<?php endif; ?>
             	 <?php if(get_field('twitter_url_link', 'option')):?>	
                  <li><a href="<?php the_field('twitter_url_link', 'option');?>" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
             	<?php endif; ?>
             	 <?php if(get_field('skype_url_link', 'option')):?>	
                  <li><a href="<?php the_field('skype_url_link', 'option');?>" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
             	<?php endif; ?>
             	 <?php if(get_field('google_plus_url_link', 'option')):?>	
                  <li><a href="<?php the_field('google_plus_url_link', 'option');?>" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
             	<?php endif; ?>
             	 <?php if(get_field('youtube_url_link', 'option')):?>	
                  <li><a href="<?php the_field('youtube_url_link', 'option');?>" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
             	<?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h5 class="widget-title line-bottom">Pages</h5>
					<?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-2',
					'container'=> 'false',
					'menu_class'        => 'list list-border',
					)
					);
					?>	
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h5 class="widget-title line-bottom">Services</h5>
                <?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-3',
					'container'=> 'false',
					'menu_class'        => 'list-border list theme-colored angle-double-right',
					)
					);
					?>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="widget dark">
                <h5 class="widget-title line-bottom">Quick Contact</h5>
                <ul class="list list-border">
                  <li><a href="tel:<?php the_field('phone1', 'option');?>"><?php the_field('phone1', 'option');?></a></li>
                  <li><a href="mailto:<?php the_field('email1', 'option');?>"><?php the_field('email1', 'option');?></a></li>
                  <li><a href="##" class="lineheight-20"><?php the_field('address1', 'option');?></a></li>
                </ul>
              <!-- Newsletter Widget Section -->
				  <?php dynamic_sidebar('newsletter_1');?>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-nav bg-black-222 p-20">
          <div class="row text-center">
            <div class="col-md-12 copyriht">
            	<?php the_field('copyright_section', 'option');?>
            </div>
          </div>
        </div>
      </footer>
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>



</div>
<!-- Wrapper Section End-->

  <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.4.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-ui.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-plugin-collection.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
