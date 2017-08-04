<?php
/**
 * cloth_store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cloth_store
 */

if ( ! function_exists( 'cloth_store_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cloth_store_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cloth_store, use a find and replace
		 * to change 'cloth_store' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cloth_store', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cloth_store' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cloth_store_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		add_theme_support( 'woocommerce' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cloth_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cloth_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cloth_store_content_width', 640 );
}
add_action( 'after_setup_theme', 'cloth_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cloth_store_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cloth_store' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cloth_store' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer 1
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'cloth_store' ),
		'id'            => 'footer_sidebar1',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 1.', 'cloth_store' ),
		'before_widget' => '<div class="footer_menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f_title">',
		'after_title'   => '</div>',
	) );
	// Footer 2
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'cloth_store' ),
		'id'            => 'footer_sidebar2',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 2.', 'cloth_store' ),
		'before_widget' => '<div class="footer_menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f_title">',
		'after_title'   => '</div>',
	) );
	// Footer 3
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'cloth_store' ),
		'id'            => 'footer_sidebar3',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 3.', 'cloth_store' ),
		'before_widget' => '<div class="footer_menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f_title">',
		'after_title'   => '</div>',
	) );
	// Footer 4
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 4', 'cloth_store' ),
		'id'            => 'footer_sidebar4',
		'description'   => esc_html__( 'Add widgets here for footer sidebar 4.', 'cloth_store' ),
		'before_widget' => '<div class="footer_menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f_title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'cloth_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cloth_store_scripts() {
	wp_enqueue_style( 'cloth_store-style', get_stylesheet_uri() );


	wp_enqueue_script( 'cloth_store-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cloth_store-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cloth_store_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


require_once ( get_stylesheet_directory() . '/inc/theme-options.php' );


add_shortcode( 'bestseller_product', 'sp_bestselling_products' );
function sp_bestselling_products($atts){
 
	global $woocommerce_loop;
 	$atts = shortcode_atts( array(
		'per_page' => 8,		
	), $atts, 'bartag' );
	
	$args = array(
	'post_type' => 'product',
	'meta_key' => 'total_sales',
	'orderby' => 'meta_value_num',
	'posts_per_page' => $atts['per_page'],
	);
	$products = new WP_Query( $args );
	 
	ob_start();
 
	echo "<div class='col-sm-12'><h3 class='p_title'>Best Sellers</h3></div>";
	if ( $products->have_posts() ) : 
		 woocommerce_product_loop_start(); 

			while ( $products->have_posts() ) : $products->the_post(); 

				woocommerce_get_template_part( 'content', 'product' );

			endwhile;

		woocommerce_product_loop_end(); 
	endif;
	wp_reset_postdata();

 
	return  ob_get_clean();
}

add_shortcode( 'latest_post', 'latest_post' );
function latest_post($atts){
 	$atts = shortcode_atts( array(
		'per_page' => 8,		
	), $atts, 'bartag' );
	$html = '';
	global $post;
	$args = array( 'posts_per_page' =>$atts['per_page'] );
	
	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); 
		$html .= '<div class="col-md-4 col-sm-6 col-xs-12">';
		$html .= get_the_title();	
		$html .= '</div>';
	endforeach; 
	wp_reset_postdata();

 
	return  $html;
}
