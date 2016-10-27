<?php
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-gitem-animated-block.php' );
global $vc_column_width_list;
global $vc_add_css_animation;
global $vc_gitem_add_link_param;
$vc_gitem_add_link_param = apply_filters( 'vc_gitem_add_link_param', array(
	'type' => 'dropdown',
	'heading' => __( 'Add link', 'blackfyre' ),
	'param_name' => 'link',
	'value' => array(
		__( 'None', 'blackfyre' ) => 'none',
		__( 'Post link', 'blackfyre' ) => 'post_link',
		__( 'Large image', 'blackfyre' ) => 'image',
		__( 'Large image (prettyPhoto)', 'blackfyre' ) => 'image_lightbox',
		__( 'Custom', 'blackfyre' ) => 'custom',
	),
	'description' => __( 'Select link option.', 'blackfyre' ),
) );
$zone_params = array(
	$vc_gitem_add_link_param,
	array(
		'type' => 'vc_link',
		'heading' => __( 'URL (Link)', 'blackfyre' ),
		'param_name' => 'url',
		'dependency' => array(
			'element' => 'link',
			'value' => array( 'custom' )
		),
		'description' => __( 'Add custom link.', 'blackfyre' ),
	),
	array(
		'type' => 'checkbox',
		'heading' => __( 'Use featured image on background?', 'blackfyre' ),
		'param_name' => 'featured_image',
		'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		'description' => __( 'Note: Featured image overwrites background image and color from "Design Options".', 'blackfyre' ),
	),
	array(
		'type' => 'css_editor',
		'heading' => __( 'CSS box', 'blackfyre' ),
		'param_name' => 'css',
		// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		'group' => __( 'Design Options', 'blackfyre' )
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Extra class name', 'blackfyre' ),
		'param_name' => 'el_class',
		'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
	),
);
$post_data_params = array(
	$vc_gitem_add_link_param,
	array(
		'type' => 'vc_link',
		'heading' => __( 'URL (Link)', 'blackfyre' ),
		'param_name' => 'url',
		'dependency' => array(
			'element' => 'link',
			'value' => array( 'custom' )
		),
		'description' => __( 'Add custom link.', 'blackfyre' ),
	),
	/*
	array(
		'type'        => 'textarea',
		'heading'     => __( 'Text', 'blackfyre' ),
		'param_name'  => 'text',
		'admin_label' => true,
		'value'       => __( 'This is custom heading element with Google Fonts', 'blackfyre' ),
		'description' => __( 'Enter your content. If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'blackfyre' ),
		'dependency'  => array(
			'element' => 'data_source',
			'value'   => array( '_custom_' ),
			//'callback' => 'vc_grid_include_dependency_callback',
		),
	),
	*/
	array(
		'type' => 'css_editor',
		'heading' => __( 'CSS box', 'blackfyre' ),
		'param_name' => 'css',
		// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		'group' => __( 'Design Options', 'blackfyre' )
	),
);
$custom_fonts_params = array(
	array(
		'type' => 'font_container',
		'param_name' => 'font_container',
		'value' => '',
		'settings' => array(
			'fields' => array(
				'tag' => 'div', // default value h2
				'text_align',
				//'font_style_italic'
				//'font_style_bold'
				//'font_family'

				'tag_description' => __( 'Select element tag.', 'blackfyre' ),
				'text_align_description' => __( 'Select text alignment.', 'blackfyre' ),
				'font_size_description' => __( 'Enter font size.', 'blackfyre' ),
				'line_height_description' => __( 'Enter line height.', 'blackfyre' ),
				'color_description' => __( 'Select color for your element.', 'blackfyre' ),
				//'font_style_description' => __('Put your description here','blackfyre'),
				//'font_family_description' => __('Put your description here','blackfyre'),
			),
		),
	),
	array(
		'type' => 'checkbox',
		'heading' => __( 'Use custom fonts?', 'blackfyre' ),
		'param_name' => 'use_custom_fonts',
		'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		'description' => __( 'Enable Google fonts.', 'blackfyre' ),
	),
	array(
		'type' => 'font_container',
		'param_name' => 'block_container',
		'value' => '',
		'settings' => array(
			'fields' => array(
				'font_size',
				'line_height',
				'color',
				//'font_style_italic'
				//'font_style_bold'
				//'font_family'

				'tag_description' => __( 'Select element tag.', 'blackfyre' ),
				'text_align_description' => __( 'Select text alignment.', 'blackfyre' ),
				'font_size_description' => __( 'Enter font size.', 'blackfyre' ),
				'line_height_description' => __( 'Enter line height.', 'blackfyre' ),
				'color_description' => __( 'Select color for your element.', 'blackfyre' ),
				//'font_style_description' => __('Put your description here','blackfyre'),
				//'font_family_description' => __('Put your description here','blackfyre'),
			),
		),
		'group' => __( 'Custom fonts', 'blackfyre' ),
		'dependency' => array(
			'element' => 'use_custom_fonts',
			'value' => array( 'yes' )
		),
	),
	array(
		'type' => 'checkbox',
		'heading' => __( 'Yes theme default font family?', 'blackfyre' ),
		'param_name' => 'use_theme_fonts',
		'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		'description' => __( 'Yes font family from the theme.', 'blackfyre' ),
		'group' => __( 'Custom fonts', 'blackfyre' ),
		'dependency' => array(
			'element' => 'use_custom_fonts',
			'value' => array( 'yes' )
		),
	),
	array(
		'type' => 'google_fonts',
		'param_name' => 'google_fonts',
		'value' => '',
		// Not recommended, this will override 'settings'. 'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900 bold italic:900:italic'),
		'settings' => array(
			//'no_font_style' // Method 1: To disable font style
			//'no_font_style'=>true // Method 2: To disable font style
			'fields' => array(
				//'font_family' => 'Abril Fatface:regular',
				//'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',// Default font family and all available styles to fetch
				//'font_style' => '400 regular:400:normal',
				// Default font style. Name:weight:style, example: "800 bold regular:800:normal"
				'font_family_description' => __( 'Select font family.', 'blackfyre' ),
				'font_style_description' => __( 'Select font styling.', 'blackfyre' )
			)
		),
		// 'description' => __( '', 'blackfyre' ),
		'group' => __( 'Custom fonts', 'blackfyre' ),
		'dependency' => array(
			'element' => 'use_theme_fonts',
			'value_not_equal_to' => 'yes',
		),
	),
);
$list = array(
	'vc_gitem' => array(
		'name' => __( 'Grid Item', 'blackfyre' ),
		'base' => 'vc_gitem',
		'is_container' => true,
		'icon' => 'icon-wpb-gitem',
		'content_element' => false,
		'show_settings_on_create' => false,
		'category' => __( 'Content', 'blackfyre' ),
		'description' => __( 'Main grid item', 'blackfyre' ),
		'params' => array(
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'blackfyre' ),
				'param_name' => 'css',
				// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		),
		'js_view' => 'VcGitemView',
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_animated_block' => array(
		'base' => 'vc_gitem_animated_block',
		'name' => __( 'A/B block', 'blackfyre' ),
		'content_element' => false,
		'is_container' => true,
		'show_settings_on_create' => false,
		'icon' => 'icon-wpb-gitem-block',
		'category' => __( 'Content', 'blackfyre' ),
		'controls' => array(),
		'as_parent' => array( 'only' => array( 'vc_gitem_zone_a', 'vc_gitem_zone_b' ) ),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Animation', 'blackfyre' ),
				'param_name' => 'animation',
				'value' => WPBakeryShortCode_VC_Gitem_Animated_Block::animations(),
			),
		),
		'js_view' => 'VcGitemAnimatedBlockView',
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_zone' => array(
		'name' => __( 'Zone', 'blackfyre' ),
		'base' => 'vc_gitem_zone',
		'content_element' => false,
		'is_container' => true,
		'show_settings_on_create' => false,
		'icon' => 'icon-wpb-gitem-zone',
		'category' => __( 'Content', 'blackfyre' ),
		'controls' => array( 'edit' ),
		'as_parent' => array( 'only' => 'vc_gitem_row' ),
		'js_view' => 'VcGitemZoneView',
		'params' => $zone_params,
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_zone_a' => array(
		'name' => __( 'Normal Block', 'blackfyre' ),
		'base' => 'vc_gitem_zone_a',
		'content_element' => false,
		'is_container' => true,
		'show_settings_on_create' => false,
		'icon' => 'icon-wpb-gitem-zone',
		'category' => __( 'Content', 'blackfyre' ),
		'controls' => array( 'edit' ),
		'as_parent' => array( 'only' => 'vc_gitem_row' ),
		'js_view' => 'VcGitemZoneView',
		'params' => array_merge( array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Height mode', 'blackfyre' ),
				'param_name' => 'height_mode',
				'value' => array(
					__( '1:1', 'blackfyre' ) => '1-1',
					__( 'Original', 'blackfyre' ) => 'original',
					__( '4:3', 'blackfyre' ) => '4-3',
					__( '3:4', 'blackfyre' ) => '3-4',
					__( '16:9', 'blackfyre' ) => '16-9',
					__( '9:16', 'blackfyre' ) => '9-16',
					__( 'Custom', 'blackfyre' ) => 'custom',
				),
				'description' => __( 'Sizing proportions for height and width. Select "Original" to scale image without cropping.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Height', 'blackfyre' ),
				'param_name' => 'height',
				'dependency' => array(
					'element' => 'height_mode',
					'value' => array( 'custom' )
				),
				'description' => __( 'Enter custom height.', 'blackfyre' ),
			),
		), $zone_params ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_zone_b' => array(
		'name' => __( 'Hover Block', 'blackfyre' ),
		'base' => 'vc_gitem_zone_b',
		'content_element' => false,
		'is_container' => true,
		'show_settings_on_create' => false,
		'icon' => 'icon-wpb-gitem-zone',
		'category' => __( 'Content', 'blackfyre' ),
		'controls' => array( 'edit' ),
		'as_parent' => array( 'only' => 'vc_gitem_row' ),
		'js_view' => 'VcGitemZoneView',
		'params' => $zone_params,
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_zone_c' => array(
		'name' => __( 'Additional Block', 'blackfyre' ),
		'base' => 'vc_gitem_zone_c',
		'content_element' => false,
		'is_container' => true,
		'show_settings_on_create' => false,
		'icon' => 'icon-wpb-gitem-zone',
		'category' => __( 'Content', 'blackfyre' ),
		'controls' => array( 'move', 'delete', 'edit' ),
		'as_parent' => array( 'only' => 'vc_gitem_row' ),
		'js_view' => 'VcGitemZoneCView',
		'params' => array(
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'blackfyre' ),
				'param_name' => 'css',
				// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
				// 'group'      => __( 'Design Options', 'blackfyre' )
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_row' => array(
		'name' => __( 'Row', 'blackfyre' ),
		'base' => 'vc_gitem_row',
		'content_element' => false,
		'is_container' => true,
		'icon' => 'icon-wpb-row',
		'show_settings_on_create' => false,
		'controls' => array( 'layout', 'delete' ),
		'allowed_container_element' => 'vc_gitem_col',
		'category' => __( 'Content', 'blackfyre' ),
		'description' => __( 'Place content elements inside the row', 'blackfyre' ),
		'params' => array(
			/*
			array(
				'type' => 'dropdown',
				'heading' => __( 'Position', 'blackfyre' ),
				'param_name' => 'position',
				'value' => array(
					__( 'Top', 'blackfyre' ) => 'top',
					__( 'Middle', 'blackfyre' ) => 'center',
					__( 'Bottom', 'blackfyre' ) => 'bottom',
					__( 'Full', 'blackfyre' ) => 'full',
				),
				'description' => __( '', 'blackfyre' ),
			),
			*/
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		),
		'js_view' => 'VcGitemRowView',
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_col' => array(
		'name' => __( 'Column', 'blackfyre' ),
		'base' => 'vc_gitem_col',
		'is_container' => true,
		'allowed_container_element' => false,
		'content_element' => false,
		'controls' => array( 'edit' ),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Width', 'blackfyre' ),
				'param_name' => 'width',
				'value' => $vc_column_width_list,
				'description' => __( 'Select column width.', 'blackfyre' ),
				'std' => '1/1'
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Use featured image on background?', 'blackfyre' ),
				'param_name' => 'featured_image',
				'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
				'description' => __( 'Note: Featured image overwrites background image and color from "Design Options".', 'blackfyre' ),
				// 'group' => __( 'Design Options', 'blackfyre' )
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'blackfyre' ),
				'param_name' => 'css',
				// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
				'group' => __( 'Design Options', 'blackfyre' )
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
			/*
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Align', 'blackfyre' ),
				'param_name'  => 'align',
				'value'       => array(
					__( 'Left', 'blackfyre' )   => 'left',
					__( 'Center', 'blackfyre' ) => 'center',
					__( 'Right', 'blackfyre' )  => 'right',
				),
				'description' => __( '', 'blackfyre' ),
			)
			*/
		),
		'js_view' => 'VcGitemColView',
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_post_data' => array(
		'name' => __( 'Post data', 'blackfyre' ),
		'base' => 'vc_gitem_post_data',
		'content_element' => false,
		'category' => __( 'Post', 'blackfyre' ),
		'params' => array_merge( array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Post data source', 'blackfyre' ),
				'param_name' => 'data_source',
				'value' => 'ID',
			)
		), $post_data_params, $custom_fonts_params, array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		) ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_post_title' => array(
		'name' => __( 'Post Title', 'blackfyre' ),
		'base' => 'vc_gitem_post_title',
		'icon' => 'vc_icon-vc-gitem-post-title',
		'category' => __( 'Post', 'blackfyre' ),
		'description' => __( 'Title of current post', 'blackfyre' ),
		'params' => array_merge( $post_data_params, $custom_fonts_params, array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		) ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_post_excerpt' => array(
		'name' => __( 'Post Excerpt', 'blackfyre' ),
		'base' => 'vc_gitem_post_excerpt',
		'icon' => 'vc_icon-vc-gitem-post-excerpt',
		'category' => __( 'Post', 'blackfyre' ),
		'description' => __( 'Excerpt or manual excerpt', 'blackfyre' ),
		'params' => array_merge( $post_data_params, $custom_fonts_params, array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		) ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_image' => array(
		'name' => __( 'Post Image', 'blackfyre' ),
		'base' => 'vc_gitem_image',
		'icon' => 'vc_icon-vc-gitem-image',
		'category' => __( 'Post', 'blackfyre' ),
		'description' => __( 'Featured image', 'blackfyre' ),
		'params' => array(
			$vc_gitem_add_link_param,
			array(
				'type' => 'vc_link',
				'heading' => __( 'URL (Link)', 'blackfyre' ),
				'param_name' => 'url',
				'dependency' => array(
					'element' => 'link',
					'value' => array( 'custom' )
				),
				'description' => __( 'Add custom link.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Image size', 'blackfyre' ),
				'param_name' => 'img_size',
				'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'blackfyre' )
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image alignment', 'blackfyre' ),
				'param_name' => 'alignment',
				'value' => array(
					__( 'Left', 'blackfyre' ) => '',
					__( 'Right', 'blackfyre' ) => 'right',
					__( 'Center', 'blackfyre' ) => 'center'
				),
				'description' => __( 'Select image alignment.', 'blackfyre' )
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image style', 'blackfyre' ),
				'param_name' => 'style',
				'value' => getVcShared( 'single image styles' ),
				'description' => __( 'Select image display style.', 'js_comopser' )
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Border color', 'blackfyre' ),
				'param_name' => 'border_color',
				'value' => getVcShared( 'colors' ),
				'std' => 'grey',
				'dependency' => array(
					'element' => 'style',
					'value' => array(
						'vc_box_border',
						'vc_box_border_circle',
						'vc_box_outline',
						'vc_box_outline_circle'
					)
				),
				'description' => __( 'Border color.', 'blackfyre' ),
				'param_holder_class' => 'vc_colored-dropdown'
			),
			$vc_add_css_animation,
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'blackfyre' ),
				'param_name' => 'css',
				// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
				'group' => __( 'Design Options', 'blackfyre' )
			)
		),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_post_date' => array(
		'name' => __( 'Post Date', 'blackfyre' ),
		'base' => 'vc_gitem_post_date',
		'icon' => 'vc_icon-vc-gitem-post-date',
		'category' => __( 'Post', 'blackfyre' ),
		'description' => __( 'Post publish date', 'blackfyre' ),
		'params' => array_merge( $post_data_params, $custom_fonts_params, array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		) ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
	'vc_gitem_post_meta' => array(
		'name' => __( 'Custom Field', 'blackfyre' ),
		'base' => 'vc_gitem_post_meta',
		'icon' => 'vc_icon-vc-gitem-post-meta',
		'category' => array(
			__( 'Elements', 'blackfyre' )
		),
		'description' => __( 'Custom fields data from meta values of the post.', 'blackfyre' ),
		'params' => array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Field key name', 'blackfyre' ),
				'param_name' => 'key',
				'description' => __( 'Enter custom field name to retrieve meta data value.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Label', 'blackfyre' ),
				'param_name' => 'label',
				'description' => __( 'Enter label to display before key value.', 'blackfyre' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Alignment', 'blackfyre' ),
				'param_name' => 'align',
				'value' => array(
					__( 'Left', 'blackfyre' ) => 'left',
					__( 'Right', 'blackfyre' ) => 'right',
					__( 'Center', 'blackfyre' ) => 'center',
					__( 'Justify', 'blackfyre' ) => 'justify',
				),
				'description' => __( 'Select alignment.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			),
		),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	),
);
$shortcode_vc_column_text = WPBMap::getShortCode( 'vc_column_text' );
if ( is_array( $shortcode_vc_column_text ) && isset( $shortcode_vc_column_text['base'] ) ) {
	$list['vc_column_text'] = $shortcode_vc_column_text;
	$list['vc_column_text']['post_type'] = Vc_Grid_Item_Editor::postType();
}
$shortcode_vc_separator = WPBMap::getShortCode( 'vc_separator' );
if ( is_array( $shortcode_vc_separator ) && isset( $shortcode_vc_separator['base'] ) ) {
	$list['vc_separator'] = $shortcode_vc_separator;
	$list['vc_separator']['post_type'] = Vc_Grid_Item_Editor::postType();
}
$shortcode_vc_text_separator = WPBMap::getShortCode( 'vc_text_separator' );
if ( is_array( $shortcode_vc_text_separator ) && isset( $shortcode_vc_text_separator['base'] ) ) {
	$list['vc_text_separator'] = $shortcode_vc_text_separator;
	$list['vc_text_separator']['post_type'] = Vc_Grid_Item_Editor::postType();
}
$shortcode_vc_icon = WPBMap::getShortCode( 'vc_icon' );
if ( is_array( $shortcode_vc_icon ) && isset( $shortcode_vc_icon['base'] ) ) {
	$list['vc_icon'] = $shortcode_vc_icon;
	$list['vc_icon']['post_type'] = Vc_Grid_Item_Editor::postType();
	$list['vc_icon']['params'] = vc_map_integrate_shortcode( 'vc_icon', '', '', array( 'exclude' => array( 'link' ) ) );
}
$list['vc_single_image'] = array(
	'name' => __( 'Single Image', 'blackfyre' ),
	'base' => 'vc_single_image',
	'icon' => 'icon-wpb-single-image',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Simple image with CSS animation', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Image', 'blackfyre' ),
			'param_name' => 'image',
			'value' => '',
			'description' => __( 'Select image from media library.', 'blackfyre' )
		),
		$vc_add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => __( 'Image size', 'blackfyre' ),
			'param_name' => 'img_size',
			'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Image alignment', 'blackfyre' ),
			'param_name' => 'alignment',
			'value' => array(
				__( 'Left', 'blackfyre' ) => '',
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Center', 'blackfyre' ) => 'center'
			),
			'description' => __( 'Select image alignment.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Image style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'single image styles' ),
			'description' => __( 'Select image display style.', 'js_comopser' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Border color', 'blackfyre' ),
			'param_name' => 'border_color',
			'value' => getVcShared( 'colors' ),
			'std' => 'grey',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'vc_box_border', 'vc_box_border_circle', 'vc_box_outline', 'vc_box_outline_circle' )
			),
			'description' => __( 'Border color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'blackfyre' ),
			'param_name' => 'css',
			// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			'group' => __( 'Design Options', 'blackfyre' )
		)
	),
	'post_type' => Vc_Grid_Item_Editor::postType(),
);
$shortcode_vc_button2 = WPBMap::getShortCode( 'vc_button2' );
if ( is_array( $shortcode_vc_button2 ) && isset( $shortcode_vc_button2['base'] ) ) {
	$list['vc_button2'] = $shortcode_vc_button2;
	$list['vc_button2']['post_type'] = Vc_Grid_Item_Editor::postType();
}

$shortcode_vc_btn = WPBMap::getShortCode( 'vc_btn' );
if ( is_array( $shortcode_vc_btn ) && isset( $shortcode_vc_btn['base'] ) ) {
	$list['vc_btn'] = $shortcode_vc_btn;
	$list['vc_btn']['post_type'] = Vc_Grid_Item_Editor::postType();
	unset( $list['vc_btn']['params'][1] );
}
$shortcode_vc_custom_heading = WPBMap::getShortCode( 'vc_custom_heading' );
if ( is_array( $shortcode_vc_custom_heading ) && isset( $shortcode_vc_custom_heading['base'] ) ) {
	$list['vc_custom_heading'] = $shortcode_vc_custom_heading;
	$list['vc_custom_heading']['post_type'] = Vc_Grid_Item_Editor::postType();
	unset( $list['vc_custom_heading']['params'][1] );
}
$shortcode_vc_empty_space = WPBMap::getShortCode( 'vc_empty_space' );
if ( is_array( $shortcode_vc_empty_space ) && isset( $shortcode_vc_empty_space['base'] ) ) {
	$list['vc_empty_space'] = $shortcode_vc_empty_space;
	$list['vc_empty_space']['post_type'] = Vc_Grid_Item_Editor::postType();
}
foreach ( array( 'vc_icon', 'vc_button2', 'vc_btn', 'vc_custom_heading', 'vc_single_image' ) as $key ) {
	if ( isset( $list[ $key ] ) ) {
		if ( ! isset( $list[ $key ]['params'] ) ) {
			$list[ $key ]['params'] = array();
		}
		if ( 'vc_button2' === $key ) {
			// change settings for vc_link in dropdown. Add dependency.
			$list[ $key ]['params'][0] = array(
				'type' => 'vc_link',
				'heading' => __( 'URL (Link)', 'blackfyre' ),
				'param_name' => 'url',
				'dependency' => array(
					'element' => 'link',
					'value' => array( 'custom' )
				),
				'description' => __( 'Add custom link.', 'blackfyre' ),
			);
		} else {
			array_unshift( $list[ $key ]['params'], array(
				'type' => 'vc_link',
				'heading' => __( 'URL (Link)', 'blackfyre' ),
				'param_name' => 'url',
				'dependency' => array(
					'element' => 'link',
					'value' => array( 'custom' )
				),
				'description' => __( 'Add custom link.', 'blackfyre' ),
			) );
		}
		// Add link dropdown
		array_unshift( $list[ $key ]['params'], $vc_gitem_add_link_param );
	}
}

return $list;
