<?php

/**
 * @since 4.4 vendors initialization moved to hooks in autoload/vendors.
 *
 * Used to add gravity forms shortcode into visual composer
 */
add_action( 'plugins_loaded', 'vc_init_vendor_gravity_forms' );
function vc_init_vendor_gravity_forms() {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // Require plugin.php to use is_plugin_active() below
	if ( is_plugin_active( 'gravityforms/gravityforms.php' ) || class_exists( 'RGForms' ) || class_exists( 'RGFormsModel' ) ) {
		// Call on map
		add_action( 'vc_after_set_mode', 'vc_vendor_gravityforms_load' );
	} // if gravityforms active
}

function vc_vendor_gravityforms_load() {
	$gravity_forms_array[ __( 'No Gravity forms found.', 'blackfyre' ) ] = '';
	if ( class_exists( 'RGFormsModel' ) ) {
		$gravity_forms = RGFormsModel::get_forms( 1, 'title' );
		if ( $gravity_forms ) {
			$gravity_forms_array = array( __( 'Select a form to display.', 'blackfyre' ) => '' );
			foreach ( $gravity_forms as $gravity_form ) {
				$gravity_forms_array[ $gravity_form->title ] = $gravity_form->id;
			}
		}
	}
	vc_map( array(
		'name' => __( 'Gravity Form', 'blackfyre' ),
		'base' => 'gravityform',
		'icon' => 'icon-wpb-vc_gravityform',
		'category' => __( 'Content', 'blackfyre' ),
		'description' => __( 'Place Gravity form', 'blackfyre' ),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Form', 'blackfyre' ),
				'param_name' => 'id',
				'value' => $gravity_forms_array,
				'description' => __( 'Select a form to add it to your post or page.', 'blackfyre' ),
				'admin_label' => true
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Display Form Title', 'blackfyre' ),
				'param_name' => 'title',
				'value' => array(
					__( 'No', 'blackfyre' ) => 'false',
					__( 'Yes', 'blackfyre' ) => 'true'
				),
				'description' => __( 'Would you like to display the forms title?', 'blackfyre' ),
				'dependency' => array(
					'element' => 'id',
					'not_empty' => true
				)
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Display Form Description', 'blackfyre' ),
				'param_name' => 'description',
				'value' => array(
					__( 'No', 'blackfyre' ) => 'false',
					__( 'Yes', 'blackfyre' ) => 'true'
				),
				'description' => __( 'Would you like to display the forms description?', 'blackfyre' ),
				'dependency' => array(
					'element' => 'id',
					'not_empty' => true
				)
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Enable AJAX?', 'blackfyre' ),
				'param_name' => 'ajax',
				'value' => array(
					__( 'No', 'blackfyre' ) => 'false',
					__( 'Yes', 'blackfyre' ) => 'true'
				),
				'description' => __( 'Enable AJAX submission?', 'blackfyre' ),
				'dependency' => array(
					'element' => 'id',
					'not_empty' => true
				)
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Tab Index', 'blackfyre' ),
				'param_name' => 'tabindex',
				'description' => __( '(Optional) Specify the starting tab index for the fields of this form. Leave blank if you\'re not sure what this is.',
					'blackfyre' ),
				'dependency' => array(
					'element' => 'id',
					'not_empty' => true
				)
			)
		)
	) );
}