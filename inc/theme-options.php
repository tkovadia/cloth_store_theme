	<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'sample_theme_options' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}



/**
 * Create the options page
 */
function theme_options_do_page() {
	

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'sampletheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'sample_theme_options' ); ?>

			<table class="form-table">
				
				<tr valign="top"><th scope="row"><?php _e( 'Select input', 'sampletheme' ); ?></th>
					<td>
						<select name="sample_theme_options[selectinput]">
							<option value=''>Select Slider</option>
							<?php
								$selected = $options['selectinput'];
								$p = '';
								$r = '';
								global $wpdb;
								$table_name = $wpdb->prefix . 'avartan_sliders';
								
								$select_options = $wpdb->get_results( 'SELECT * FROM '.$table_name, ARRAY_N);
									
								print_r($select_options);
								foreach ( $select_options as $option ) {
									$label = $option['1'];
									if ( $selected == $option['2'] ) // Make default first in list
										$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['2'] ) . "'>$label</option>";
									else
										$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['2'] ) . "'>$label</option>";
								}
								echo $p . $r;
							?>
						</select>
						
					</td>
				</tr>
                
                <tr valign="top"><th scope="row"><?php _e( 'Copyright', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[copyright]" class="regular-text" type="text" name="sample_theme_options[copyright]" value="<?php esc_attr_e( $options['copyright'] ); ?>" />

					</td>
				</tr>
                <tr valign="top"><th scope="row"><?php _e( 'shortcode', 'sampletheme' ); ?></th>
					<td>
						<p>[recent_products per_page="8"] For What's new <p>
                        <p>[bestseller_product per_page="8" ] For Best Sellers <p>

					</td>
				</tr>

				
			</table>
            
           

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}
