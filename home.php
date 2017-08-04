<?php
/**
 * Template Name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cloth_store
 */

get_header(); ?>
<?php 
	$options = get_option( 'sample_theme_options' );
	if((is_home() || is_front_page()) && $options)
	{ 
		echo '<section><div class="banner_main">';	
		//echo do_shortcode('[avartanslider alias="'.$options['selectinput'].'"]');
		avartanslider($options['selectinput']);
		echo '</div>	</section>';
		
	}
	if(function_exists('avartanslider')) avartanslider('home_slider');
?>

<section>
  	<div class="product_list_main">
    	<div class="container">

			<?php
			while ( have_posts() ) : the_post();

				the_content();


			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
        <div class="container">
        	<div class="row">
				 <div class="col-md-4 col-sm-6 col-xs-12">
                	
                </div>
            </div>    
        </div>
	</div><!-- #primary -->
<section>
<?php

get_footer();