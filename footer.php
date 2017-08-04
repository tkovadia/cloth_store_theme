<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cloth_store
 */

?>

	<footer>
    <div class="footer_main">
      <div class="container">
        <div class="row">
          <?php get_sidebar( 'footer' ); ?>
        </div>
       </div>
    </div>
    <div class="footer_main copyright">
    	<div class="container">   
        <div class="row">
        	
        	<?php $options = get_option( 'sample_theme_options' ); ?>
         	<div class="col-md-6 col-sm-4 col-xs-6"><span><?php echo !$options['copyright'] ? $options['copyright'] : 'Copyright &copy; '.date('Y') .' '. get_bloginfo( 'name' ).'. All Rights Reserved.'; ?></span></div>
            <div class="col-md-6	 col-sm-4 col-xs-6 text-right"><span>Designed By <a href="#">Solwin Infotech</a></span></div>
            
        </div>
        </div>
      </div>
  </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/menu_js.js"></script> 
<script src="<?php echo  get_template_directory_uri(); ?>/js/custom_js.js"></script>

<?php wp_footer(); ?>

</body>
</html>
