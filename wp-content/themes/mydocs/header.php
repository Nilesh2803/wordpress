<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mydocs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Stylesheet -->
<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/css-plugin-collections.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri();?>/css/menuzord-boxed.css" id="menuzord-menu-skins" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri();?>/css/style-main.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/theme-skin-blue.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

<link href="<?php echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Wrapper Section Start-->
  <div id="wrapper" class="clearfix">

    <header id="header" class="header">
      <div class="header-top bg-lighter sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="widget no-border m-5">
                <i class="fa fa-clock-o text-theme-colored"></i> <?php the_field('opening_hours', 'option');?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget no-border m-0">
                <ul class="styled-icons icon-gray icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <?php if(get_field('facebook_url_link', 'option')):?>	
                  <li><a href="<?php the_field('facebook_url_link', 'option');?>"><i class="fa fa-facebook text-theme-colored"></i></a></li>
             	<?php endif; ?>
             	<?php if(get_field('twitter_url_link', 'option')):?>	
                  <li><a href="<?php the_field('twitter_url_link', 'option');?>"><i class="fa fa-twitter text-theme-colored"></i></a></li>
             	<?php endif; ?>
                  	<?php if(get_field('google_plus_url_link', 'option')):?>	
                  <li><a href="<?php the_field('google_plus_url_link', 'option');?>"><i class="fa fa-google-plus text-theme-colored"></i></a></li>
             	<?php endif; ?>
             	<?php if(get_field('instagram_url_link', 'option')):?>	
                  <li><a href="<?php the_field('instagram_url_link', 'option');?>"><i class="fa fa-instagram text-theme-colored"></i></a></li>
             	<?php endif; ?>
             	<?php if(get_field('linkedin_url_link', 'option')):?>	
                  <li><a href="<?php the_field('linkedin_url_link', 'option');?>"><i class="fa fa-linkedin text-theme-colored"></i></a></li>
             	<?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
          <div class="container">
            <nav id="menuzord-right" class="menuzord blue no-bg">
              <a class="menuzord-brand pull-left flip mb-15" href="<?php echo site_url();?>">
                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>" alt="Logo">
<!-- 				    <img src="<?php echo get_theme_mod( 'transparent_logo' ) ;?>" alt="Logo"> -->
              </a>
              
              <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'=> 'false',
					'menu_class'        => 'menuzord-menu',
					'walker' => new My_Walker_Nav_Menu(),
				)
			);
			?>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Main Section Start-->
    <div class="main-content">

<?php if(!is_front_page()):?>
<!-- Section: inner-header -->
<section class="inner-header parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo site_url();?>/wp-content/uploads/2022/10/bg1.jpg">
    <div class="container pt-90 pb-50">
    <!-- Section Content -->
    <div class="section-content pt-100">
        <div class="row"> 
        <div class="col-md-12">
            <h3 class="title text-white"><?php the_title();?></h3>
            <ol class="breadcrumb text-black mt-10">
                <li><a class="text-white" href="<?php echo site_url();?>">Home</a></li>
                <li class="active text-theme-colored"><?php the_title();?></li>
            </ol>
        </div>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>