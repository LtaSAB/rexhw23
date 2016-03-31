<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Выбор цветовой схемы', 'hw23' ), __( 'Выбор цветовой схемы', 'hw23' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'default' =>	'default',
		'label' => __( 'default', 'hw23' )
	),
	'bridge-theme' => array(
		'value' =>	'bridge-theme',
		'label' => __( 'bridge-theme', 'hw23' )
	),
	'dark-red-theme' => array(
		'value' => 'dark-red-theme',
		'label' => __( 'dark-red-theme', 'hw23' )
	),
	'green-theme' => array(
		'value' => 'green-theme',
		'label' => __( 'green-theme', 'hw23' )
	),
	'lite-blue-theme' => array(
		'value' => 'lite-blue-theme',
		'label' => __( 'lite-blue-theme', 'hw23' )
	),
	'orange-theme' => array(
		'value' => 'orange-theme',
		'label' => __( 'orange-theme', 'hw23' )
	),
	'pink-theme' => array(
		'value' => 'pink-theme',
		'label' => __( 'pink-theme', 'hw23' )
	)
,
	'purple-theme' => array(
		'value' => 'purple-theme',
		'label' => __( 'purple-theme', 'hw23' )
	)
,
	'red-theme' => array(
		'value' => 'red-theme',
		'label' => __( 'red-theme', 'hw23' )
	)
,
	'yellow-theme' => array(
		'value' => 'yellow-theme',
		'label' => __( 'yellow-theme', 'hw23' )
	)
);


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php  echo "<h2>" . __( ' Опции темы', 'hw23' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
			<div class="updated fade"><p><strong><?php _e( 'Опции сохранены', 'hw23' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'sample_theme_options' ); ?>

			<table class="form-table">

				<?php
				/**
				 * A sample select input option
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Выбор цветовой схемы', 'hw23' ); ?></th>
					<td>
						<select name="sample_theme_options[selectinput]">
							<?php
							$selected = $options['selectinput'];
							$p = '';
							$r = '';

							foreach ( $select_options as $option ) {
								$label = $option['label'];
								if ( $selected == $option['value'] ) // Make default first in list
									$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
								else
									$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
							}
							echo $p . $r;
							?>
						</select>
						<label class="description" for="sample_theme_options[selectinput]"><?php _e( ' ', 'hw23' ); ?></label>
					</td>
				</tr>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Сохранить опции', 'hw23' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options;



	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	return $input;
}