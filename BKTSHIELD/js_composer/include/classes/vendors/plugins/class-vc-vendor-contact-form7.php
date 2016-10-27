<?php

/**
 * Contact form7 vendor
 * =======
 * Plugin Contact form 7 vendor
 * To fix issues when shortcode doesn't exists in frontend editor. #1053, #1054 etc.
 * @since 4.3
 */
Class Vc_Vendor_ContactForm7 implements Vc_Vendor_Interface {

	/**
	 * Add action when contact form 7 is initialized to add shortcode.
	 * @since 4.3
	 */
	public function load() {
		/**
		 * Add Shortcode To Visual Composer
		 */
		$cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );

		$contact_forms = array();
		if ( $cf7 ) {
			foreach ( $cf7 as $cform ) {
				$contact_forms[ $cform->post_title ] = $cform->ID;
			}
		} else {
			$contact_forms[ __( 'No contact forms found', 'blackfyre' ) ] = 0;
		}
		vc_map( array(
			'base' => 'contact-form-7',
			'name' => __( 'Contact Form 7', 'blackfyre' ),
			'icon' => 'icon-wpb-contactform7',
			'category' => __( 'Content', 'blackfyre' ),
			'description' => __( 'Place Contact Form7', 'blackfyre' ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Form title', 'blackfyre' ),
					'param_name' => 'title',
					'admin_label' => true,
					'description' => __( 'What text use as form title. Leave blank if no title is needed.', 'blackfyre' )
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Select contact form', 'blackfyre' ),
					'param_name' => 'id',
					'value' => $contact_forms,
					'description' => __( 'Choose previously created contact form from the drop down list.', 'blackfyre' )
				)
			)
		) );
	}
}