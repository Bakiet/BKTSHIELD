<?php
/**
 * New button implementation
 * array_merge is needed due to merging other shortcode data into params.
 * @since 4.5
 */

global $pixel_icons;
$icons_params = vc_map_integrate_shortcode( 'vc_icon', 'i_', '',
	array(
		'include_only_regex' => '/^(type|icon_\w*)/',
		// we need only type, icon_fontawesome, icon_blabla..., NOT color and etc
	), array(
		'element' => 'add_icon',
		'value' => 'true',
	)
);
// populate integrated vc_icons params.
if ( is_array( $icons_params ) && ! empty( $icons_params ) ) {
	foreach ( $icons_params as $key => $param ) {
		if ( is_array( $param ) && ! empty( $param ) ) {
			if ( $param['param_name'] == 'i_type' ) {
				// append pixelicons to dropdown
				$icons_params[ $key ]['value'][ __( 'Pixel', 'blackfyre' ) ] = 'pixelicons';
			}
			if ( isset( $param['admin_label'] ) ) {
				// remove admin label
				unset( $icons_params[ $key ]['admin_label'] );
			}

		}
	}
}
$params = array_merge(
	array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'title',
			// fully compatible to btn1 and btn2
			'value' => __( 'Text on the button', 'blackfyre' ),
		),
		array(
			'type' => 'vc_link',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Add link to button.', 'blackfyre' ),
			// compatible with btn2 and converted from href{btn1}
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'description' => __( 'Select button display style.', 'blackfyre' ),
			'param_name' => 'style',
			// partly compatible with btn2, need to be converted shape+style from btn2 and btn1
			'value' => array(
				__( 'Modern', 'blackfyre' ) => 'modern',
				__( 'Classic', 'blackfyre' ) => 'classic',
				__( 'Flat', 'blackfyre' ) => 'flat',
				__( 'Outline', 'blackfyre' ) => 'outline',
				__( '3d', 'blackfyre' ) => '3d',
				__( 'Custom', 'blackfyre' ) => 'custom',
				__( 'Outline custom', 'blackfyre' ) => 'outline-custom',
			),
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Background', 'blackfyre' ),
			'param_name' => 'custom_background',
			'description' => __( 'Select custom background color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'std' => '#ededed',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'custom_text',
			'description' => __( 'Select custom text color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'custom' )
			),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Outline and Text', 'blackfyre' ),
			'param_name' => 'outline_custom_color',
			'description' => __( 'Select outline and text color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Hover background', 'blackfyre' ),
			'param_name' => 'outline_custom_hover_background',
			'description' => __( 'Select hover background color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#666',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Hover text', 'blackfyre' ),
			'param_name' => 'outline_custom_hover_text',
			'description' => __( 'Select hover text color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'outline-custom' )
			),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'std' => '#fff',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'description' => __( 'Select button shape.', 'blackfyre' ),
			'param_name' => 'shape',
			// need to be converted
			'value' => array(
				__( 'Rounded', 'blackfyre' ) => 'rounded',
				__( 'Square', 'blackfyre' ) => 'square',
				__( 'Round', 'blackfyre' ) => 'round',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'description' => __( 'Select button color.', 'blackfyre' ),
			// compatible with btn2, need to be converted from btn1
			'param_holder_class' => 'vc_colored-dropdown vc_btn3-colored-dropdown',
			'value' => array(
				           // Btn1 Colors
				           __( 'Classic Grey', 'blackfyre' ) => 'default',
				           __( 'Classic Blue', 'blackfyre' ) => 'primary',
				           __( 'Classic Turquoise', 'blackfyre' ) => 'info',
				           __( 'Classic Green', 'blackfyre' ) => 'success',
				           __( 'Classic Orange', 'blackfyre' ) => 'warning',
				           __( 'Classic Red', 'blackfyre' ) => 'danger',
				           __( 'Classic Black', 'blackfyre' ) => "inverse"
				           // + Btn2 Colors (default color set)
			           ) + getVcShared( 'colors-dashed' ),
			'std' => 'grey',
			// must have default color grey
			'dependency' => array(
				'element' => 'style',
				'value_not_equal_to' => array( 'custom', 'outline-custom' )
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'description' => __( 'Select button display size.', 'blackfyre' ),
			// compatible with btn2, default md, but need to be converted from btn1 to btn2
			'std' => 'md',
			'value' => getVcShared( 'sizes' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Alignment', 'blackfyre' ),
			'param_name' => 'align',
			'description' => __( 'Select button alignment.', 'js_comopser' ),
			// compatible with btn2, default left to be compatible with btn1
			'value' => array(
				__( 'Inline', 'blackfyre' ) => 'inline',
				// default as well
				__( 'Left', 'blackfyre' ) => 'left',
				// default as well
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Center', 'blackfyre' ) => 'center'
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Set full width button?', 'blackfyre' ),
			'param_name' => 'button_block',
			'dependency' => array(
				'element' => 'align',
				'value_not_equal_to' => 'inline',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add icon?', 'blackfyre' ),
			'param_name' => 'add_icon',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon Alignment', 'blackfyre' ),
			'description' => __( 'Select icon alignment.', 'blackfyre' ),
			'param_name' => 'i_align',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
				// default as well
				__( 'Right', 'blackfyre' ) => 'right',
			),
			'dependency' => array(
				'element' => 'add_icon',
				'value' => 'true',
			),
		),
	),
	$icons_params,
	array(
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'i_icon_pixelicons',
			'value' => 'vc_pixel_icon vc_pixel_icon-alert',
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'pixelicons',
				'source' => $pixel_icons,
			),
			'dependency' => array(
				'element' => 'i_type',
				'value' => 'pixelicons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
	),
	array(
		vc_map_add_css_animation( true ),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		),
	)
);
/**
 * @class WPBakeryShortCode_VC_Btn
 */
vc_map( array(
	'name' => __( 'Button', 'blackfyre' ),
	'base' => 'vc_btn',
	'icon' => 'icon-wpb-ui-button',
	'category' => array(
		__( 'Content', 'blackfyre' ),
	),
	'description' => __( 'Eye catching button', 'blackfyre' ),
	'params' => $params,
	'js_view' => 'VcButton3View',
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><button class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-{{ params.shape }} vc_btn3-style-{{ params.style }} vc_btn3-color-{{ params.color }}">{{{ params.title }}}</button></div>',
) );
