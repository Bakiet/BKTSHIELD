<?php

/* Call to action
 * @since 4.5
 */
$h2_custom_heading = vc_map_integrate_shortcode( 'vc_custom_heading', 'h2_', __( 'Heading', 'blackfyre' ),
	array(
		'exclude' => array(
			'text',
			'css',
		),
	),
	array(
		'element' => 'use_custom_fonts_h2',
		'value' => 'true',
	)
);

// This is needed to remove custom heading _tag and _align options.
if ( is_array( $h2_custom_heading ) && ! empty( $h2_custom_heading ) ) {
	foreach ( $h2_custom_heading as $key => $param ) {
		if ( is_array( $param ) && isset( $param['type'] ) && $param['type'] == 'font_container' ) {
				$h2_custom_heading[ $key ]['value'] = '';
				if ( isset( $param['settings'] ) && is_array( $param['settings'] ) && isset( $param['settings']['fields'] ) ) {
				$sub_key = array_search( 'tag', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} else if ( isset( $param['settings']['fields']['tag'] ) ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields']['tag'] );
				}
				$sub_key = array_search( 'text_align', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} else if ( isset( $param['settings']['fields']['text_align'] ) ) {
					unset( $h2_custom_heading[ $key ]['settings']['fields']['text_align'] );
				}
			}
		}
	}
}
$h4_custom_heading = vc_map_integrate_shortcode( 'vc_custom_heading', 'h4_', __( 'Subheading', 'blackfyre' ),
	array(
		'exclude' => array(
			'text',
			'css',
		),
	),
	array(
		'element' => 'use_custom_fonts_h4',
		'value' => 'true',
	)
);

// This is needed to remove custom heading _tag and _align options.
if ( is_array( $h4_custom_heading ) && ! empty( $h4_custom_heading ) ) {
	foreach ( $h4_custom_heading as $key => $param ) {
		if ( is_array( $param ) && isset( $param['type'] ) && $param['type'] == 'font_container' ) {
			$h4_custom_heading[ $key ]['value'] = '';
			if ( isset( $param['settings'] ) && is_array( $param['settings'] ) && isset( $param['settings']['fields'] ) ) {
				$sub_key = array_search( 'tag', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} else if ( isset( $param['settings']['fields']['tag'] ) ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields']['tag'] );
				}
				$sub_key = array_search( 'text_align', $param['settings']['fields'] );
				if ( false !== $sub_key ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields'][ $sub_key ] );
				} else if ( isset( $param['settings']['fields']['text_align'] ) ) {
					unset( $h4_custom_heading[ $key ]['settings']['fields']['text_align'] );
				}
			}
		}
	}
}
$params = array_merge(
	array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Heading', 'blackfyre' ),
			'admin_label' => true,
			'param_name' => 'h2',
			'value' => __( 'Hey! I am first heading line feel free to change me', 'blackfyre' ),
			'description' => __( 'Enter text for heading line.', 'blackfyre' ),
			'edit_field_class' => 'vc_col-sm-9 vc_column',
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use custom font?', 'blackfyre' ),
			'param_name' => 'use_custom_fonts_h2',
			'description' => __( 'Enable Google fonts.', 'blackfyre' ),
			'edit_field_class' => 'vc_col-sm-3 vc_column',
		),

	),
	$h2_custom_heading,
	array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Subheading', 'blackfyre' ),
			'param_name' => 'h4',
			'value' => '',
			'description' => __( 'Enter text for subheading line.', 'blackfyre' ),
			'edit_field_class' => 'vc_col-sm-9 vc_column',
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use custom font?', 'blackfyre' ),
			'param_name' => 'use_custom_fonts_h4',
			'description' => __( 'Enable custom font option.', 'blackfyre' ),
			'edit_field_class' => 'vc_col-sm-3 vc_column',
		),
	),
	$h4_custom_heading,
	array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Text alignment', 'blackfyre' ),
			'param_name' => 'txt_align',
			'value' => getVcShared( 'text align' ), // default left
			'description' => __( 'Select text alignment in "Call to Action" block.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'param_name' => 'shape',
			'std' => 'rounded',
			'value' => array(
				__( 'Square', 'blackfyre' ) => 'square',
				__( 'Rounded', 'blackfyre' ) => 'rounded',
				__( 'Round', 'blackfyre' ) => 'round',
			),
			'description' => __( 'Select call to action shape.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => array(
				__( 'Classic', 'blackfyre' ) => 'classic',
				__( 'Flat', 'blackfyre' ) => 'flat',
				__( 'Outline', 'blackfyre' ) => 'outline',
				__( '3d', 'blackfyre' ) => '3d',
				__( 'Custom', 'blackfyre' ) => 'custom',
			),
			'std' => 'classic',
			'description' => __( 'Select call to action display style.', 'blackfyre' ),
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Background color', 'blackfyre' ),
			'param_name' => 'custom_background',
			'description' => __( 'Select custom background color.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Text color', 'blackfyre' ),
			'param_name' => 'custom_text',
			'description' => __( 'Select custom text color.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => array( __( 'Classic', 'blackfyre' ) => 'classic' ) +
			           getVcShared( 'colors-dashed' ),
			'std' => 'classic',
			'description' => __( 'Select color schema.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown vc_cta3-colored-dropdown',
			'dependency' => array(
				'element' => 'style',
				'value_not_equal_to' => array( 'custom' )
			),
		),
		array(
			'type' => 'textarea_html',
			//holder' => 'div',
			//'admin_label' => true,
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'content',
			'value' => __( 'I am promo text. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'blackfyre' ),
			'param_name' => 'el_width',
			'value' => array(
				__( '100%', 'blackfyre' ) => '',
				__( '90%', 'blackfyre' ) => 'xl',
				__( '80%', 'blackfyre' ) => 'lg',
				__( '70%', 'blackfyre' ) => 'md',
				__( '60%', 'blackfyre' ) => 'sm',
				__( '50%', 'blackfyre' ) => 'xs',
			),
			'description' => __( 'Select call to action width (percentage).', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Add button', 'blackfyre' ) . '?',
			'description' => __( 'Add button for call to action.', 'blackfyre' ),
			'param_name' => 'add_button',
			'value' => array(
				__( 'No', 'blackfyre' ) => '',
				__( 'Top', 'blackfyre' ) => 'top',
				__( 'Bottom', 'blackfyre' ) => 'bottom',
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
			),
		),
	),
	vc_map_integrate_shortcode( 'vc_btn', 'btn_', __( 'Button', 'blackfyre' ),
		false,
		array(
			'element' => 'add_button',
			'not_empty' => true,
		)
	),
	array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Add icon?', 'blackfyre' ),
			'description' => __( 'Add icon for call to action.', 'blackfyre' ),
			'param_name' => 'add_icon',
			'value' => array(
				__( 'No', 'blackfyre' ) => '',
				__( 'Top', 'blackfyre' ) => 'top',
				__( 'Bottom', 'blackfyre' ) => 'bottom',
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
			),
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'i_on_border',
			'heading' => __( 'Place icon on border?', 'blackfyre' ),
			'description' => __( 'Display icon on call to action element border.', 'blackfyre' ),
			'group' => __( 'Icon', 'blackfyre' ),
			'dependency' => array(
				'element' => 'add_icon',
				'not_empty' => true,
			),
		),
	),
	vc_map_integrate_shortcode( 'vc_icon', 'i_', __( 'Icon', 'blackfyre' ),
		array(
			'exclude' => array( 'align' ),
		),
		array(
			'element' => 'add_icon',
			'not_empty' => true,
		)
	),
	array(
		/// cta3
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
);
vc_map( array(
	'name' => __( 'Call to Action', 'blackfyre' ),
	'base' => 'vc_cta',
	'icon' => 'icon-wpb-call-to-action',
	'category' => array( __( 'Content', 'blackfyre' ) ),
	'description' => __( 'Catch visitors attention with CTA block', 'blackfyre' ),
	'since' => '4.5',
	'params' => $params,
	'js_view' => 'VcCallToActionView3',
) );
