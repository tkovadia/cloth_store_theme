<?php
/**
 * The Sidebar containing the footer widget areas.
 *
 * @package ThemeGrill
 * @subpackage flash
 * @since flash 1.0
 */

/**
 * The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if( !is_active_sidebar( 'footer_sidebar1' ) &&
   !is_active_sidebar( 'footer_sidebar2' ) &&
   !is_active_sidebar( 'footer_sidebar3' ) &&
   !is_active_sidebar( 'footer_sidebar4' ) ) {
   return;
}
?>


			<?php

			for ($i = 1; $i <= 4; $i++ ) {
				?>
				<div class="col-md-3 col-sm-6">

				<?php
				if ( is_active_sidebar( 'footer_sidebar'.$i) ) {

					dynamic_sidebar( 'footer_sidebar'.$i);
				}
				?>
				</div>

			<?php } ?>
		
