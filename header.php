<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cloth_store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- Bootstrap -->
    <link href="<?php echo  get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/menu_style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<noscript>
<div class="noscript"><img src="<?php echo  get_template_directory_uri(); ?>/images/noscript.png" alt="Noscript" class="noscript-img">Please enable javascript on your browser.</div>
</noscript>
<div class="site_main">
  <div class="menu-main">
    <header class="header header-two">
      <div class="header-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="logo-box">
                <div class="logo"> <a href="index01.html" class="logo_img" title="Clothstore"> <img src="images/logo.png" alt="Clothstore"> </a> </div>
              </div>
              <!-- .logo-box --> 
              
            </div>
            <div class="col-sm-12">
              <div class="head-top-main">
                <div class="head-top">
                  <div class="search-box-main"> <a class="head-search" href="javascript:void(0);"> <span class="search-icon"> <i class="fa fa-search"></i> </span> </a>
                    <div style="display: none;" class="search-main">
                        <?php get_search_form(); ?>
                    </div>
                  </div>
                </div>
                <div class="menu-bg">
                  <div class="right-box">
                    <div class="right-box-wrapper">
                      <div class="primary">
                        <div class="navbar navbar-default" role="navigation">
                          <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse"> <span class="text"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                         
                            <?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'container'       => 'nav',
									'container_class' => 'collapse collapsing navbar-collapse',
									'menu_class'      => 'nav navbar-nav navbar-center',
									'menu_id'        => 'primary-menu',
								) );
							?>
                           <!-- <nav class="collapse collapsing navbar-collapse"> 
                            <ul class="nav navbar-nav navbar-center">
                              <li class="selected"><a href="index01.html" title="Home">Home</a></li>
                              <li><a href="#" title="About">About</a></li>
                              <li class="parent"> <a href="#" title="Projects">Projects</a>
                                <ul class="sub">
                                  <li><a href="#" title="Demo1">Demo1</a></li>
                                  <li class="parent"> <a href="#" title="Demo2">Demo2</a>
                                    <ul class="sub">
                                      <li><a href="#" title="Demo3">Demo3</a></li>
                                      <li><a href="#" title="Demo4">Demo4</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="#" title="Services">Services</a></li>
                              <li><a href="#" title="Blog">Blog</a></li>
                              <li><a href="#" title="FAQ">FAQ</a></li>
                              <li><a href="#" title="Contact">Contact</a></li>
                            </ul>
                          </nav>-->
                        </div>
                      </div>
                      <!-- .primary --> 
                    </div>
                  </div>
                </div>
                <?php if( ( get_theme_mod( 'flash_header_cart', '' ) !=  '1' ) && class_exists( 'WooCommerce' ) ) : ?>
				<div class="cart-icon_section">
					
						<a href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" class="wcmenucart-contents">
							<i class="fa fa-shopping-cart"></i>
							<span ><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
						</a>
					
					<?php //the_widget( 'WC_Widget_Cart', '' ); ?>
				</div>
				<?php endif; ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .header-wrapper --> 
    </header>
  </div>
			<?php /*
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) ); */
			?>