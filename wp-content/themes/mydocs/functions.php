<?php
/**
 * mydocs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mydocs
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mydocs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mydocs, use a find and replace
		* to change 'mydocs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mydocs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mydocs' ),
			'menu-2' => esc_html__( 'Footer Page Menu', 'mydocs' ),	
			'menu-3' => esc_html__( 'Footer Service Menu', 'mydocs' ),
				)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mydocs_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mydocs_setup' );

/* Add Transparent Logo in customize setting  */
add_action('customize_register', 'transparent_logo_customize_register');
function transparent_logo_customize_register($wp_customize){
$wp_customize->add_setting('transparent_logo');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'transparent_logo', array(
    'label'    => __('Transparent Logo', 'store-front'),
    'section'  => 'title_tagline',
    'settings' => 'transparent_logo',
    'priority'       => 4,
)));
}

/*Change Default Post Label */
function change_default_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blogs';
    $submenu['edit.php'][5][0] = 'Blogs';
    $submenu['edit.php'][10][0] = 'Add New Blog';
}
add_action( 'admin_menu', 'change_default_post_label' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mydocs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mydocs_content_width', 640 );
}
add_action( 'after_setup_theme', 'mydocs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mydocs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mydocs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mydocs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter', 'mydocs' ),
			'id'            => 'newsletter_1',
			'description'   => esc_html__( 'Add widgets here.', 'mydocs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => ' <p class="text-white mb-15 mt-20">',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'mydocs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mydocs_scripts() {
	wp_enqueue_style( 'mydocs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mydocs-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'mydocs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mydocs_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*Add Active class in header menu */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

/*Removed ACF Pro Plugin Update */
add_filter('site_transient_update_plugins', 'my_remove_update_nag');
function my_remove_update_nag($value) {
 unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
 return $value;
}

/*ACF pro Add Options Page*/
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

/* Add dropdown class in UL submenu in header menu */
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown\">\n";
  }
}