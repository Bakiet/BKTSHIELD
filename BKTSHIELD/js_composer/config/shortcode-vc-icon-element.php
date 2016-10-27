<?php
global $vc_add_css_animation;
/*
 * Icon Element
 * @since 4.4
 */
vc_map( array(
	'name' => __( 'Icon', 'blackfyre' ),
	'base' => 'vc_icon',
	'icon' => 'icon-wpb-vc_icon',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Eye catching icons from libraries', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'blackfyre' ),
			'value' => array(
				__( 'Font Awesome', 'blackfyre' ) => 'fontawesome',
				__( 'Open Iconic', 'blackfyre' ) => 'openiconic',
				__( 'Typicons', 'blackfyre' ) => 'typicons',
				__( 'Entypo', 'blackfyre' ) => 'entypo',
				__( 'Linecons', 'blackfyre' ) => 'linecons',
			),
			'admin_label' => true,
			'param_name' => 'type',
			'description' => __( 'Select icon library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-adjust', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_openiconic',
			'value' => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_typicons',
			'value' => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_entypo',
			'value' => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'entypo',
			),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_linecons',
			'value' => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'blackfyre' ) => 'custom' ) ),
			'description' => __( 'Select icon color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Custom color', 'blackfyre' ),
			'param_name' => 'custom_color',
			'description' => __( 'Select custom icon color.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'color',
				'value' => 'custom',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Background shape', 'blackfyre' ),
			'param_name' => 'background_style',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Circle', 'blackfyre' ) => 'rounded',
				__( 'Square', 'blackfyre' ) => 'boxed',
				__( 'Rounded', 'blackfyre' ) => 'rounded-less',
				__( 'Outline Circle', 'blackfyre' ) => 'rounded-outline',
				__( 'Outline Square', 'blackfyre' ) => 'boxed-outline',
				__( 'Outline Rounded', 'blackfyre' ) => 'rounded-less-outline',
			),
			'description' => __( 'Select background shape and style for icon.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Background color', 'blackfyre' ),
			'param_name' => 'background_color',
			'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'blackfyre' ) => 'custom' ) ),
			'std' => 'grey',
			'description' => __( 'Select background color for icon.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'dependency' => array(
				'element' => 'background_style',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Custom background color', 'blackfyre' ),
			'param_name' => 'custom_background_color',
			'description' => __( 'Select custom icon background color.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'background_color',
				'value' => 'custom',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => array_merge( getVcShared( 'sizes' ), array( 'Extra Large' => 'xl' ) ),
			'std' => 'md',
			'description' => __( 'Icon size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon alignment', 'blackfyre' ),
			'param_name' => 'align',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Center', 'blackfyre' ) => 'center',
			),
			'description' => __( 'Select icon alignment.', 'blackfyre' ),
		),
		array(
			'type' => 'vc_link',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Add link to icon.', 'blackfyre' )
		),
		$vc_add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),

	),
	'js_view' => 'VcIconElementView_Backend',
) );
