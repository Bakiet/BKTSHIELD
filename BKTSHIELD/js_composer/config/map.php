<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package VPBakeryVisualComposer
 *
 */

$vc_is_wp_version_3_6_more = version_compare( preg_replace( '/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo( 'version' ) ), '3.6' ) >= 0;

// Used in "Button", "Call __( 'Blue', 'blackfyre' )to Action", "Pie chart" blocks
$colors_arr = array(
	__( 'Grey', 'blackfyre' ) => 'wpb_button',
	__( 'Blue', 'blackfyre' ) => 'btn-primary',
	__( 'Turquoise', 'blackfyre' ) => 'btn-info',
	__( 'Green', 'blackfyre' ) => 'btn-success',
	__( 'Orange', 'blackfyre' ) => 'btn-warning',
	__( 'Red', 'blackfyre' ) => 'btn-danger',
	__( 'Black', 'blackfyre' ) => "btn-inverse"
);

// Used in "Button" and "Call to Action" blocks
$size_arr = array(
	__( 'Regular', 'blackfyre' ) => 'wpb_regularsize',
	__( 'Large', 'blackfyre' ) => 'btn-large',
	__( 'Small', 'blackfyre' ) => 'btn-small',
	__( 'Mini', 'blackfyre' ) => "btn-mini"
);

$target_arr = array(
	__( 'Same window', 'blackfyre' ) => '_self',
	__( 'New window', 'blackfyre' ) => '_blank'
);
global $vc_add_css_animation;
$vc_add_css_animation = array(
	'type' => 'dropdown',
	'heading' => __( 'CSS Animation', 'blackfyre' ),
	'param_name' => 'css_animation',
	'admin_label' => true,
	'value' => array(
		__( 'No', 'blackfyre' ) => '',
		__( 'Top to bottom', 'blackfyre' ) => 'top-to-bottom',
		__( 'Bottom to top', 'blackfyre' ) => 'bottom-to-top',
		__( 'Left to right', 'blackfyre' ) => 'left-to-right',
		__( 'Right to left', 'blackfyre' ) => 'right-to-left',
		__( 'Appear from center', 'blackfyre' ) => 'appear'
	),
	'description' => __( 'Select type of animation for element to be animated when it "enters" the browsers viewport (Note: works only in modern browsers).', 'blackfyre' )
);

vc_map( array(
	'name' => __( 'Row', 'blackfyre' ),
	'base' => 'vc_row',
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Place content elements inside the row', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Row stretch', 'blackfyre' ),
			'param_name' => 'full_width',
			'value' => array(
				__( 'Default', 'blackfyre' ) => '',
				__( 'Stretch row', 'blackfyre' ) => 'stretch_row',
				__( 'Stretch row and content', 'blackfyre' ) => 'stretch_row_content',
				__( 'Stretch row and content (no paddings)', 'blackfyre' ) => 'stretch_row_content_no_spaces',
			),
			'description' => __( 'Select stretching options for row and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'blackfyre' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Full height row?', 'blackfyre' ),
			'param_name' => 'full_height',
			'description' => __( 'If checked row will be set to full height.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content position', 'blackfyre' ),
			'param_name' => 'content_placement',
			'value' => array(
				__( 'Middle', 'blackfyre' ) => 'middle',
				__( 'Top', 'blackfyre' ) => 'top',
			),
			'description' => __( 'Select content position within row.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'full_height',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use video background?', 'blackfyre' ),
			'param_name' => 'video_bg',
			'description' => __( 'If checked, video will be used as row background.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'YouTube link', 'blackfyre' ),
			'param_name' => 'video_bg_url',
			'description' => __( 'Add YouTube link.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'blackfyre' ),
			'param_name' => 'video_bg_parallax',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Simple', 'blackfyre' ) => 'content-moving',
				__( 'With fade', 'blackfyre' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'blackfyre' ),
			'param_name' => 'parallax',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Simple', 'blackfyre' ) => 'content-moving',
				__( 'With fade', 'blackfyre' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options).', 'blackfyre' ),
			'dependency' => array(
				'element' => 'video_bg',
				'is_empty' => true,
			),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Image', 'blackfyre' ),
			'param_name' => 'parallax_image',
			'value' => '',
			'description' => __( 'Select image from media library.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		/*
   array(
        'type' => 'colorpicker',
        'heading' => __( 'Custom Background Color', 'blackfyre' ),
        'param_name' => 'bg_color',
        'description' => __( 'Select backgound color for your row', 'blackfyre' ),
        'edit_field_class' => 'col-sm-6'
  ),
  array(
        'type' => 'textfield',
        'heading' => __( 'Padding', 'blackfyre' ),
        'param_name' => 'padding',
        'description' => __( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'blackfyre' ),
        'edit_field_class' => 'col-sm-6'
  ),
  array(
        'type' => 'textfield',
        'heading' => __( 'Bottom margin', 'blackfyre' ),
        'param_name' => 'margin_bottom',
        'description' => __( 'You can use px, em, %, etc. or enter just number and it will use pixels.', 'blackfyre' ),
        'edit_field_class' => 'col-sm-6'
  ),
  array(
        'type' => 'attach_image',
        'heading' => __( 'Background Image', 'blackfyre' ),
        'param_name' => 'bg_image',
        'description' => __( 'Select background image for your row', 'blackfyre' )
  ),
  array(
        'type' => 'dropdown',
        'heading' => __( 'Background Repeat', 'blackfyre' ),
        'param_name' => 'bg_image_repeat',
        'value' => array(
                          __( 'Default', 'blackfyre' ) => '',
                          __( 'Cover', 'blackfyre' ) => 'cover',
					  __('Contain', 'blackfyre') => 'contain',
					  __('No Repeat', 'blackfyre') => 'no-repeat'
					),
        'description' => __( 'Select how a background image will be repeated', 'blackfyre' ),
        'dependency' => array( 'element' => 'bg_image', 'not_empty' => true)
  ),
  */
		array(
			'type' => 'el_id',
			'heading' => __( 'Row ID', 'blackfyre' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'blackfyre' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'blackfyre' ),
			'param_name' => 'css',
			// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			'group' => __( 'Design Options', 'blackfyre' )
		),
	),
	'js_view' => 'VcRowView'
) );

vc_map( array(
	'name' => __( 'Row', 'blackfyre' ), //Inner Row
	'base' => 'vc_row_inner',
	'content_element' => false,
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'weight' => 1000,
	'show_settings_on_create' => false,
	'description' => __( 'Place content elements inside the row', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'el_id',
			'heading' => __( 'Row ID', 'blackfyre' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter optional row ID. Make sure it is unique, and it is valid as w3c specification: %s (Must not have spaces)', 'blackfyre' ), '<a target="_blank" href="http://www.w3schools.com/tags/att_global_id.asp">' . __( 'link', 'blackfyre' ) . '</a>' ),
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
		),
	),
	'js_view' => 'VcRowView'
) );
global $vc_column_width_list;
$vc_column_width_list = array(
	__( '1 column - 1/12', 'blackfyre' ) => '1/12',
	__( '2 columns - 1/6', 'blackfyre' ) => '1/6',
	__( '3 columns - 1/4', 'blackfyre' ) => '1/4',
	__( '4 columns - 1/3', 'blackfyre' ) => '1/3',
	__( '5 columns - 5/12', 'blackfyre' ) => '5/12',
	__( '6 columns - 1/2', 'blackfyre' ) => '1/2',
	__( '7 columns - 7/12', 'blackfyre' ) => '7/12',
	__( '8 columns - 2/3', 'blackfyre' ) => '2/3',
	__( '9 columns - 3/4', 'blackfyre' ) => '3/4',
	__( '10 columns - 5/6', 'blackfyre' ) => '5/6',
	__( '11 columns - 11/12', 'blackfyre' ) => '11/12',
	__( '12 columns - 1/1', 'blackfyre' ) => '1/1'
);

/**
 * @shortcode vc_column WPBakeryShortCode_VC_Column
 *     wp-content/plugins/js_composer/include/classes/shortcodes/vc-column.php/WPBakeryShortCode_VC_Column
 *
 * @param font_color wp-content/plugins/js_composer/include/params/colorpicker/colorpicker.php/vc_colorpicker_form_field -
 *  - colorpicker - defines font color for text
 * @param el_class - extra shortcode wrapper class
 * @param css_editor WPBakeryVisualComposerCssEditor wp-content/plugins/js_composer/include/params/css_editor/css_editor.php/
 *     -
 *  - css editor design options margin/padding/border and etc for shortcode wrapper
 * @param width wp-content/plugins/js_composer/include/params/default_params.php/vc_dropdown_form_field - array of
 *     columns width's
 * @param offset Vc_Column_Offset wp-content/plugins/js_composer/include/params/column_offset/column_offset.php/Vc_Column_Offset
 *     -
 *  - responsiveness offset properties for columns.
 *
 * @backend_view VcColumnView
 *     wp-content/plugins/js_composer/assets/js/backend/composer-custom-views.js/window.VcColumnView - custom backend
 *     shortcode view.
 */
vc_map( array(
	'name' => __( 'Column', 'blackfyre' ),
	'base' => 'vc_column',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
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
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'blackfyre' ),
			'param_name' => 'width',
			'value' => $vc_column_width_list,
			'group' => __( 'Responsive Options', 'blackfyre' ),
			'description' => __( 'Select column width.', 'blackfyre' ),
			'std' => '1/1'
		),
		array(
			'type' => 'column_offset',
			'heading' => __( 'Responsiveness', 'blackfyre' ),
			'param_name' => 'offset',
			'group' => __( 'Responsive Options', 'blackfyre' ),
			'description' => __( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'blackfyre' )
		)
	),
	'js_view' => 'VcColumnView'
) );

vc_map( array(
	"name" => __( "Column", "js_composer" ),
	"base" => "vc_column_inner",
	"class" => "",
	"icon" => "",
	"wrapper_class" => "",
	"controls" => "full",
	"allowed_container_element" => false,
	"content_element" => false,
	"is_container" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"heading" => __( "Extra class name", "js_composer" ),
			"param_name" => "el_class",
			"value" => "",
			"description" => __( "Style particular content element differently - add a class name and refer to it in custom CSS.", "js_composer" )
		),
		array(
			"type" => "css_editor",
			"heading" => __( 'CSS box', "js_composer" ),
			"param_name" => "css",
			// "description" => __("Style particular content element differently - add a class name and refer to it in custom CSS.", "js_composer"),
			"group" => __( 'Design Options', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'blackfyre' ),
			'param_name' => 'width',
			'value' => $vc_column_width_list,
			'group' => __( 'Responsive Options', 'blackfyre' ),
			'description' => __( 'Select column width.', 'blackfyre' ),
			'std' => '1/1'
		),
		array(
			'type' => 'column_offset',
			'heading' => __( 'Responsiveness', 'blackfyre' ),
			'param_name' => 'offset',
			'group' => __( 'Responsive Options', 'blackfyre' ),
			'description' => __( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'blackfyre' )
		)
	),
	"js_view" => 'VcColumnView'
) );
/* Text Block
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Text Block', 'blackfyre' ),
	'base' => 'vc_column_text',
	'icon' => 'icon-wpb-layer-shape-text',
	'wrapper_class' => 'clearfix',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'A block of text with WYSIWYG editor', 'blackfyre' ),
	'params' => array(
	 array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_text_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your text block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Remove background.', 'blackfyre' ),
            'param_name' => 'remove_boxed',
            'description' => __( 'Remove the blocks background', 'blackfyre' ),
            'value' => array( __( 'Yes, please', 'blackfyre' ) => 'Yes' )
        ),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'content',
			'value' => __( '<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>', 'blackfyre' )
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
	)
) );


$categories = get_categories( 

array(
        'type'          => 'post',
        'child_of'      => 0,
        'orderby'       => 'name',
        'order'         => 'ASC',
        'hide_empty'    => 1,
        'hierarchical'  => 1,
        'taxonomy'      => 'category',
        'pad_counts'    => false

) );
	
foreach ($categories as $cat) {
    $cats[$cat->cat_name] = $cat->cat_ID;
}
if(!isset($cats))$cats='';
/* News Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'News Block', 'blackfyre' ),
    'base' => 'vc_column_news',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'A block for news', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_news_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your news block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Categories', 'blackfyre' ),
            'param_name' => 'el_news_categories',
            'description' => __( 'Select categories you want to include.', 'blackfyre' ),
            'value' => $cats,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Number of posts to show', 'blackfyre' ),
            'param_name' => 'el_news_number_posts',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Enter number of posts you wolud like to show in this block.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),


    )
) );


/* News Block - Horizontal
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'News Block - Horizontal', 'blackfyre' ),
    'base' => 'vc_column_news_horizontal',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'A block for horizontal news', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_news_horizontal_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your news block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Categories', 'blackfyre' ),
            'param_name' => 'el_news_horizontal_categories',
            'description' => __( 'Select categories you want to include.', 'blackfyre' ),
            'value' => $cats,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Number of posts to show', 'blackfyre' ),
            'param_name' => 'el_news_horizontal_number_posts',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Enter number of posts you wolud like to show in this block.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),


    )
) );


/* News Block - Tabbed
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'News Block - Tabbed', 'blackfyre' ),
    'base' => 'vc_column_news_tabbed',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'A block for horizontal news', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_news_tabbed_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your news block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Categories', 'blackfyre' ),
            'param_name' => 'el_news_tabbed_categories',
            'description' => __( 'Select categories you want to include.', 'blackfyre' ),
            'value' => $cats,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Number of posts to show', 'blackfyre' ),
            'param_name' => 'el_news_tabbed_number_posts',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Enter number of posts you wolud like to show in this block.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),


    )
) );

/* Blog Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Blog Block', 'blackfyre' ),
    'base' => 'vc_column_blog',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'A blog block', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_blog_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your news block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Categories', 'blackfyre' ),
            'param_name' => 'el_blog_categories',
            'description' => __( 'Select categories you want to include.', 'blackfyre' ),
            'value' => $cats,
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Number of posts to show', 'blackfyre' ),
            'param_name' => 'el_blog_number_posts',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Enter number of posts you wolud like to show in this block.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),


    )
) );

/* Text Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Comments Block', 'blackfyre' ),
    'base' => 'vc_comments',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'Add comments to your page.', 'blackfyre' ),
     'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_comments_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your comments block.', 'blackfyre' )
        ),
    )

) );
/* Team Block
---------------------------------------------------------- */
/* vc_map( array(
    'name' => __( 'Members block', 'blackfyre' ),
    'base' => 'vc_column_team',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Clan Wars', 'blackfyre' ),
    'description' => __( 'A list of clan members.', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_member_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your members block.', 'blackfyre' )
        ),

        array(
            'type' => 'checkboxgames',
            'heading' => __( 'Games', 'blackfyre' ),
            'param_name' => 'el_games',
            'description' => __( 'Select games that your clan play.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'blackfyre' ),
            'param_name' => 'css',
            // 'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' ),
            'group' => __( 'Design options', 'blackfyre' )
        )
    )
) );
*/
/* Members Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Clan info block', 'blackfyre' ),
    'base' => 'vc_members_clan_page',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Clan Wars', 'blackfyre' ),
    'description' => __( 'Clan info block.', 'blackfyre' ),
    'params' => array(
     array(
            'type' => 'dropdown',
            'heading' => __( 'Clan country', 'blackfyre' ),
            'param_name' => 'el_countries',
            'value' => getVcShared( 'countries' ),
            'description' => __( 'Choose your clan country.', 'blackfyre' )
        ),
     array(
            'type' => 'dropdown',
            'heading' => __( 'Clan language', 'blackfyre' ),
            'param_name' => 'el_languages',
            'value' => getVcShared( 'languages' ),
            'description' => __( 'Choose your clan language.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link text 1', 'blackfyre' ),
            'param_name' => 'el_link_text1',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link text here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link 1', 'blackfyre' ),
            'param_name' => 'el_link1',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link text 2', 'blackfyre' ),
            'param_name' => 'el_link_text2',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link text here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link 2', 'blackfyre' ),
            'param_name' => 'el_link2',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link text 3', 'blackfyre' ),
            'param_name' => 'el_link_text3',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link text here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link 3', 'blackfyre' ),
            'param_name' => 'el_link3',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link  here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link text 4', 'blackfyre' ),
            'param_name' => 'el_link_text4',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link text here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link 4', 'blackfyre' ),
            'param_name' => 'el_link4',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link text 5', 'blackfyre' ),
            'param_name' => 'el_link_text5',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link text here.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Link 5', 'blackfyre' ),
            'param_name' => 'el_link5',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add your link here.', 'blackfyre' )
        ),
     )
) );

/* Clan Games Block
---------------------------------------------------------- */

global $wpClanWars;
$games = $wpClanWars->get_game('id=all&orderby=title&order=asc');

 foreach ( $games as $game ) {
 		$gms[$game->title] = $game->id; 
 }					

if(!isset($gms))$gms='';					
vc_map( array(
    'name' => __( 'Games Block', 'blackfyre' ),
    'base' => 'vc_clan_games',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Clan Wars', 'blackfyre' ),
    'description' => __( 'A list of games that you can select.', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_games_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your games block.', 'blackfyre' )
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Games', 'blackfyre' ),
            'param_name' => 'el_games',
            'description' => __( 'Select games that your clan play.', 'blackfyre' ),
            'value' => $gms
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),


    )
) );



/* Clan Matches Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Matches Block', 'blackfyre' ),
    'base' => 'vc_latest_matches',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Clan Wars', 'blackfyre' ),
    'description' => __( 'List of matches.', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_matches_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your matches block.', 'blackfyre' )
        ),
         array(
            'type' => 'checkbox',
            'heading' => __( 'Games', 'blackfyre' ),
            'param_name' => 'el_match_games',
            'description' => __( 'Select games for which you want to display matches.', 'blackfyre' ),
            'value' => $gms
        ),
          array(
            'type' => 'textfield',
            'heading' => __( 'Show matches', 'blackfyre' ),
            'param_name' => 'el_matches_number',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add number of matches you want to display.', 'blackfyre' )
        ),
          array(
            'type' => 'dropdown',
            'heading' => __( 'Hide older than', 'blackfyre' ),
            'param_name' => 'el_matches_hide',
            'holder' => 'div',
             'value' =>  array(
             __('Show all', 'blackfyre') => 'all',
            __('1 week', 'blackfyre') => '1w',
            __('2 weeks', 'blackfyre') => '2w',
            __('3 weeks', 'blackfyre') => '3w',
            __('1 month', 'blackfyre') => '1m',
            __('2 months', 'blackfyre') => '2m',
            __('3 months', 'blackfyre') => '3m',
            __('6 months', 'blackfyre') => '6m',
            __('1 year', 'blackfyre')=> '1y'
            ),
            'description' => __( 'Hide matches older than.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),

    )
) );

/* Clans  Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Clans Block', 'blackfyre' ),
    'base' => 'vc_clans',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Clan Wars', 'blackfyre' ),
    'description' => __( 'List of clans.', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_clans_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your matches block.', 'blackfyre' )
        ),
          array(
            'type' => 'textfield',
            'heading' => __( 'Number of clans to show', 'blackfyre' ),
            'param_name' => 'el_clans_number',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add number of clans that you want to display.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Extra class name', 'blackfyre' ),
            'param_name' => 'el_class',
            'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' )
        ),

    )
) );

/* Contact Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Contact Block', 'blackfyre' ),
    'base' => 'vc_contact',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'A block with contact form.', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_contact_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your contact block.', 'blackfyre' )
        )
    )
) );


/* Latest tweets
---------------------------------------------------------- */
/*vc_map( array(
    'name' => __( 'Twitter Widget', 'blackfyre' ),
    'base' => 'vc_twitter',
    'icon' => 'icon-wpb-balloon-twitter-left',
    'category' => __( 'Social', 'blackfyre' ),
    'params' => array(
  array(
        'type' => 'textfield',
        'heading' => __( 'Widget title', 'blackfyre' ),
        'param_name' => 'title',
        'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
  ),
  array(
        'type' => 'textfield',
        'heading' => __( 'Twitter username', 'blackfyre' ),
        'param_name' => 'twitter_name',
        'admin_label' => true,
        'description' => __( 'Type in twitter profile name from which load tweets.', 'blackfyre' )
  ),
  array(
        'type' => 'dropdown',
        'heading' => __( 'Tweets count', 'blackfyre' ),
        'param_name' => 'tweets_count',
        'admin_label' => true,
        'value' => array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15),
        'description' => __( 'How many recent tweets to load.', 'blackfyre' )
  ),
  array(
        'type' => 'textfield',
        'heading' => __( 'Extra class name', 'blackfyre' ),
        'param_name' => 'el_class',
        'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
  )
)
) );*/

include_once "shortcode-vc-icon-element.php";

/* Separator (Divider)
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Separator', 'blackfyre' ),
	'base' => 'vc_separator',
	'icon' => 'icon-wpb-ui-separator',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'blackfyre' ),
	//"controls"	=> 'popup_delete',
	'description' => __( 'Horizontal separator line', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'blackfyre' ) => 'custom' ) ),
			'std' => 'grey',
			'description' => __( 'Select color of separator.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Alignment', 'blackfyre' ),
			'param_name' => 'align',
			'value' => array(
				__( 'Center', 'blackfyre' ) => 'align_center',
				__( 'Left', 'blackfyre' ) => 'align_left',
				__( 'Right', 'blackfyre' ) => "align_right"
			),
			'description' => __( 'Select separator alignment.', 'blackfyre' )
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Custom Border Color', 'blackfyre' ),
			'param_name' => 'accent_color',
			'description' => __( 'Select border color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'color',
				'value' => array( 'custom' )
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'separator styles' ),
			'description' => __( 'Separator display style.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Border width', 'blackfyre' ),
			'param_name' => 'border_width',
			'value' => getVcShared( 'separator border widths' ),
			'description' => __( 'Select border width (pixels).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Element width', 'blackfyre' ),
			'param_name' => 'el_width',
			'value' => getVcShared( 'separator widths' ),
			'description' => __( 'Select separator width (percentage).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Textual block
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Separator with Text', 'blackfyre' ),
	'base' => 'vc_text_separator',
	'icon' => 'icon-wpb-ui-separator-label',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Horizontal separator line with heading', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Title', 'blackfyre' ),
			'param_name' => 'title',
			'holder' => 'div',
			'value' => __( 'Title', 'blackfyre' ),
			'description' => __( 'Add text to separator.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Title position', 'blackfyre' ),
			'param_name' => 'title_align',
			'value' => array(
				__( 'Center', 'blackfyre' ) => 'separator_align_center',
				__( 'Left', 'blackfyre' ) => 'separator_align_left',
				__( 'Right', 'blackfyre' ) => "separator_align_right"
			),
			'description' => __( 'Select title location.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Separator alignment', 'blackfyre' ),
			'param_name' => 'align',
			'value' => array(
				__( 'Center', 'blackfyre' ) => 'align_center',
				__( 'Left', 'blackfyre' ) => 'align_left',
				__( 'Right', 'blackfyre' ) => "align_right"
			),
			'description' => __( 'Select separator alignment.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => array_merge( getVcShared( 'colors' ), array( __( 'Custom color', 'blackfyre' ) => 'custom' ) ),
			'std' => 'grey',
			'description' => __( 'Select color of separator.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Custom Color', 'blackfyre' ),
			'param_name' => 'accent_color',
			'description' => __( 'Custom separator color for your element.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'color',
				'value' => array( 'custom' )
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'separator styles' ),
			'description' => __( 'Separator display style.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Border width', 'blackfyre' ),
			'param_name' => 'border_width',
			'value' => getVcShared( 'separator border widths' ),
			'description' => __( 'Select border width (pixels).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Element width', 'blackfyre' ),
			'param_name' => 'el_width',
			'value' => getVcShared( 'separator widths' ),
			'description' => __( 'Separator element width in percents.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),
		array(
			'type' => 'hidden',
			'param_name' => 'layout',
			'value' => 'separator_with_text',
		)
	),
	'js_view' => 'VcTextSeparatorView'
) );

/* Message box 2
---------------------------------------------------------- */
global $pixel_icons;
$pixel_icons = array(
	array( 'vc_pixel_icon vc_pixel_icon-alert' => __( 'Alert', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-info' => __( 'Info', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-tick' => __( 'Tick', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-explanation' => __( 'Explanation', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-address_book' => __( 'Address book', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-alarm_clock' => __( 'Alarm clock', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-anchor' => __( 'Anchor', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-application_image' => __( 'Application Image', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-arrow' => __( 'Arrow', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-asterisk' => __( 'Asterisk', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-hammer' => __( 'Hammer', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-balloon' => __( 'Balloon', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-balloon_buzz' => __( 'Balloon Buzz', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-balloon_facebook' => __( 'Balloon Facebook', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-balloon_twitter' => __( 'Balloon Twitter', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-battery' => __( 'Battery', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-binocular' => __( 'Binocular', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_excel' => __( 'Document Excel', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_image' => __( 'Document Image', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_music' => __( 'Document Music', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_office' => __( 'Document Office', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_pdf' => __( 'Document PDF', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_powerpoint' => __( 'Document Powerpoint', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-document_word' => __( 'Document Word', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-bookmark' => __( 'Bookmark', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-camcorder' => __( 'Camcorder', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-camera' => __( 'Camera', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-chart' => __( 'Chart', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-chart_pie' => __( 'Chart pie', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-clock' => __( 'Clock', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-fire' => __( 'Fire', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-heart' => __( 'Heart', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-mail' => __( 'Mail', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-play' => __( 'Play', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-shield' => __( 'Shield', 'blackfyre' ) ),
	array( 'vc_pixel_icon vc_pixel_icon-video' => __( 'Video', 'blackfyre' ) ),
);
$custom_colors = array(
	__( 'Informational', 'blackfyre' ) => 'info',
	__( 'Warning', 'blackfyre' ) => 'warning',
	__( 'Success', 'blackfyre' ) => 'success',
	__( 'Error', 'blackfyre' ) => "danger",
	__( 'Informational Classic', 'blackfyre' ) => 'alert-info',
	__( 'Warning Classic', 'blackfyre' ) => 'alert-warning',
	__( 'Success Classic', 'blackfyre' ) => 'alert-success',
	__( 'Error Classic', 'blackfyre' ) => "alert-danger",
);
global $vc_add_css_animation_no_label;
$vc_add_css_animation_no_label = $vc_add_css_animation;
unset( $vc_add_css_animation_no_label['admin_label'] );
/**
 * @since 4.4
 * New message box shortcode (replaces old)
 */
vc_map( array(
	'name' => __( 'Message Box', 'blackfyre' ),
	'base' => 'vc_message',
	'icon' => 'icon-wpb-information-white',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Notification box', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'params_preset',
			'heading' => __( 'Message Box Presets', 'blackfyre' ),
			'param_name' => 'color', // due to backward compatibility, really it is message_box_type
			'value' => '',
			'options' => array(
				array(
					'label' => __( 'Custom', 'blackfyre' ),
					'value' => '',
					'params' => array(),
				),
				array(
					'label' => __( 'Informational', 'blackfyre' ),
					'value' => 'info',
					'params' => array(
						'message_box_color' => 'info',
						'icon_type' => 'fontawesome',
						'icon_fontawesome' => 'fa fa-info-circle',
					),
				),
				array(
					'label' => __( 'Warning', 'blackfyre' ),
					'value' => 'warning',
					'params' => array(
						'message_box_color' => 'warning',
						'icon_type' => 'fontawesome',
						'icon_fontawesome' => 'fa fa-exclamation-triangle',
					),
				),
				array(
					'label' => __( 'Success', 'blackfyre' ),
					'value' => 'success',
					'params' => array(
						'message_box_color' => 'success',
						'icon_type' => 'fontawesome',
						'icon_fontawesome' => 'fa fa-check',
					),
				),
				array(
					'label' => __( 'Error', 'blackfyre' ),
					'value' => 'danger',
					'params' => array(
						'message_box_color' => 'danger',
						'icon_type' => 'fontawesome',
						'icon_fontawesome' => 'fa fa-times',
					),
				),
				array(
					'label' => __( 'Informational Classic', 'blackfyre' ),
					'value' => 'alert-info', // due to backward compatibility
					'params' => array(
						'message_box_color' => 'alert-info',
						'icon_type' => 'pixelicons',
						'icon_pixelicons' => 'vc_pixel_icon vc_pixel_icon-info',
					),
				),
				array(
					'label' => __( 'Warning Classic', 'blackfyre' ),
					'value' => 'alert-warning', // due to backward compatibility
					'params' => array(
						'message_box_color' => 'alert-warning',
						'icon_type' => 'pixelicons',
						'icon_pixelicons' => 'vc_pixel_icon vc_pixel_icon-alert',
					),
				),
				array(
					'label' => __( 'Success Classic', 'blackfyre' ),
					'value' => 'alert-success',  // due to backward compatibility
					'params' => array(
						'message_box_color' => 'alert-success',
						'icon_type' => 'pixelicons',
						'icon_pixelicons' => 'vc_pixel_icon vc_pixel_icon-tick',
					),
				),
				array(
					'label' => __( 'Error Classic', 'blackfyre' ),
					'value' => 'alert-danger',  // due to backward compatibility
					'params' => array(
						'message_box_color' => 'alert-danger',
						'icon_type' => 'pixelicons',
						'icon_pixelicons' => 'vc_pixel_icon vc_pixel_icon-explanation',
					),
				),
			),
			'description' => __( 'Select predefined message box design or choose "Custom" for custom styling.', 'blackfyre' ),
			'param_holder_class' => 'vc_message-type vc_colored-dropdown',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'param_name' => 'message_box_style',
			'value' => getVcShared( 'message_box_styles' ),
			'description' => __( 'Select message box design style.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'param_name' => 'style', // due to backward compatibility message_box_shape
			'std' => 'rounded',
			'value' => array(
				__( 'Square', 'blackfyre' ) => 'square',
				__( 'Rounded', 'blackfyre' ) => 'rounded',
				__( 'Round', 'blackfyre' ) => 'round',
			),
			'description' => __( 'Select message box shape.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'message_box_color',
			'value' => $custom_colors + getVcShared( 'colors' ),
			'description' => __( 'Select message box color.', 'blackfyre' ),
			'param_holder_class' => 'vc_message-type vc_colored-dropdown',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'blackfyre' ),
			'value' => array(
				__( 'Font Awesome', 'blackfyre' ) => 'fontawesome',
				__( 'Open Iconic', 'blackfyre' ) => 'openiconic',
				__( 'Typicons', 'blackfyre' ) => 'typicons',
				__( 'Entypo', 'blackfyre' ) => 'entypo',
				__( 'Linecons', 'blackfyre' ) => 'linecons',
				__( 'Pixel', 'blackfyre' ) => 'pixelicons',
			),
			'param_name' => 'icon_type',
			'description' => __( 'Select icon library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-info-circle',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_openiconic',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_typicons',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_entypo',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'entypo',
			),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_linecons',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon_pixelicons',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'type' => 'pixelicons',
				'source' => $pixel_icons,
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'pixelicons',
			),
			'description' => __( 'Select icon from library.', 'blackfyre' ),
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'class' => 'messagebox_text',
			'heading' => __( 'Message text', 'blackfyre' ),
			'param_name' => 'content',
			'value' => __( '<p>I am message box. Click edit button to change this text.</p>', 'blackfyre' )
		),
		$vc_add_css_animation_no_label,
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'js_view' => 'VcMessageView_Backend'
) );

/* Social Block
---------------------------------------------------------- */
vc_map( array(
    'name' => __( 'Social media Block', 'blackfyre' ),
    'base' => 'vc_social',
    'icon' => 'icon-wpb-layer-shape-text',
    'wrapper_class' => 'clearfix',
    'category' => __( 'Content', 'blackfyre' ),
    'description' => __( 'Add social media links', 'blackfyre' ),
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => __( 'Title (optional)', 'blackfyre' ),
            'param_name' => 'el_social_title',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add title to your social media block.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Rss link', 'blackfyre' ),
            'param_name' => 'el_social_rss',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Rss feed.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Dribbble link', 'blackfyre' ),
            'param_name' => 'el_social_dribbble',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Dribbble profile.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Vimeo link', 'blackfyre' ),
            'param_name' => 'el_social_vimeo',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Vimeo profile.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Youtube link', 'blackfyre' ),
            'param_name' => 'el_social_youtube',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Youtube profile.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Twitch link', 'blackfyre' ),
            'param_name' => 'el_social_twitch',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Twitch profile.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Steam link', 'blackfyre' ),
            'param_name' => 'el_social_steam',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Steam profile.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Pinterest link', 'blackfyre' ),
            'param_name' => 'el_social_pinterest',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Pinterest profile.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Google+ link', 'blackfyre' ),
            'param_name' => 'el_social_google',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Google+ profile.', 'blackfyre' )
        ),
        array(
            'type' => 'textfield',
            'heading' => __( 'Twitter link', 'blackfyre' ),
            'param_name' => 'el_social_twitter',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Twitter profile.', 'blackfyre' )
        ),
         array(
            'type' => 'textfield',
            'heading' => __( 'Facebook link', 'blackfyre' ),
            'param_name' => 'el_social_facebook',
            'holder' => 'div',
            'value' => '',
            'description' => __( 'Add link to your Facebook profile.', 'blackfyre' )
        ),

    )
) );
/* Facebook like button
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Facebook Like', 'blackfyre' ),
	'base' => 'vc_facebook',
	'icon' => 'icon-wpb-balloon-facebook-left',
	'category' => __( 'Social', 'blackfyre' ),
	'description' => __( 'Facebook "Like" button', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button type', 'blackfyre' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Horizontal', 'blackfyre' ) => 'standard',
				__( 'Horizontal with count', 'blackfyre' ) => 'button_count',
				__( 'Vertical with count', 'blackfyre' ) => 'box_count'
			),
			'description' => __( 'Select button type.', 'blackfyre' )
		)
	)
) );

/* Tweetmeme button
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Tweetmeme Button', 'blackfyre' ),
	'base' => 'vc_tweetmeme',
	'icon' => 'icon-wpb-tweetme',
	'show_settings_on_create' => false,
	'category' => __( 'Social', 'blackfyre' ),
	'description' => __( '"Tweet" button', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button type', 'blackfyre' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Horizontal with count', 'blackfyre' ) => 'horizontal',
				__( 'Vertical with count', 'blackfyre' ) => 'vertical',
				__( 'Horizontal', 'blackfyre' ) => 'none'
			),
			'description' => __( 'Select button type.', 'blackfyre' )
		)
	)
) );

/* Google+ button
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Google+ Button', 'blackfyre' ),
	'base' => 'vc_googleplus',
	'icon' => 'icon-wpb-application-plus',
	'category' => __( 'Social', 'blackfyre' ),
	'description' => __( 'Recommend on Google', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button size', 'blackfyre' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Standard', 'blackfyre' ) => 'standard',
				__( 'Small', 'blackfyre' ) => 'small',
				__( 'Medium', 'blackfyre' ) => 'medium',
				__( 'Tall', 'blackfyre' ) => 'tall'
			),
			'description' => __( 'Select button size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Annotation', 'blackfyre' ),
			'param_name' => 'annotation',
			'admin_label' => true,
			'value' => array(
				__( 'Bubble', 'blackfyre' ) => 'bubble',
				__( 'Inline', 'blackfyre' ) => 'inline',
				__( 'None', 'blackfyre' ) => 'none',
			),
			'std' => 'bubble',
			'description' => __( 'Select type of annotation.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Width', 'blackfyre' ),
			'param_name' => 'widget_width',
			'dependency' => array(
				'element' => 'annotation',
				'value' => array( 'inline' )
			),
			'description' => __( 'Minimum width of 120px to display. If annotation is set to "inline", this parameter sets the width in pixels to use for button and its inline annotation. Default width is 450px.', 'blackfyre' )
		),
	)
) );

/* Pinterest button
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Pinterest', 'blackfyre' ),
	'base' => 'vc_pinterest',
	'icon' => 'icon-wpb-pinterest',
	'category' => __( 'Social', 'blackfyre' ),
	'description' => __( 'Pinterest button', 'blackfyre' ),
	"params" => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button type', 'blackfyre' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Horizontal', 'blackfyre' ) => 'horizontal',
				__( 'Vertical', 'blackfyre' ) => 'vertical',
				__( 'No count', 'blackfyre' ) => 'none'
			),
			'description' => __( 'Select button layout.', 'blackfyre' )
		)
	)
) );

/* Toggle 2
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'FAQ', 'blackfyre' ),
	'base' => 'vc_toggle',
	'icon' => 'icon-wpb-toggle-small-expand',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Toggle element for Q&A block', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'h4',
			'class' => 'vc_toggle_title',
			'heading' => __( 'Toggle title', 'blackfyre' ),
			'param_name' => 'title',
			'value' => __( 'Toggle title', 'blackfyre' ),
			'description' => __( 'Enter title of toggle block.', 'blackfyre' )
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'class' => 'vc_toggle_content',
			'heading' => __( 'Toggle content', 'blackfyre' ),
			'param_name' => 'content',
			'value' => __( '<p>Toggle content goes here, click edit button to change this text.</p>', 'blackfyre' ),
			'description' => __( 'Toggle block content.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'toggle styles' ),
			'description' => __( 'Select toggle design style.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => array( __( 'Default', 'blackfyre' ) => 'default' ) + getVcShared( 'colors' ),
			'description' => __( 'Select icon color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => array_diff_key( getVcShared( 'sizes' ), array( 'Mini' => '' ) ),
			'std' => 'md',
			'description' => __( 'Select toggle size', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Default state', 'blackfyre' ),
			'param_name' => 'open',
			'value' => array(
				__( 'Closed', 'blackfyre' ) => 'false',
				__( 'Open', 'blackfyre' ) => 'true'
			),
			'description' => __( 'Select "Open" if you want toggle to be open by default.', 'blackfyre' )
		),
		$vc_add_css_animation,
		array(
			'type' => 'el_id',
			'heading' => __( 'Element ID', 'blackfyre' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter optional ID. Make sure it is unique, and it is valid as w3c specification: %s (Must not have spaces)', 'blackfyre' ), '<a target="_blank" href="http://www.w3schools.com/tags/att_global_id.asp">' . __( 'link', 'blackfyre' ) . '</a>' ),
			'settings' => array(
				'auto_generate' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),
	),
	'js_view' => 'VcToggleView'
) );

/* Single image */
vc_map( array(
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
		array(
			'type' => 'textfield',
			'heading' => __( 'Image size', 'blackfyre' ),
			'param_name' => 'img_size',
			'value' => 'thumbnail',
			'description' => __( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Image alignment', 'blackfyre' ),
			'param_name' => 'alignment',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
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
			'type' => 'checkbox',
			'heading' => __( 'Link to large image?', 'blackfyre' ),
			'param_name' => 'img_link_large',
			'description' => __( 'If checked, image will link to the larger image.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'href',
			'heading' => __( 'Image link', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Enter URL if you want this image to have a link (Note: parameters like "mailto:" are also accepted).', 'blackfyre' ),
			'dependency' => array(
				'element' => 'img_link_large',
				'is_empty' => true,
				'callback' => 'wpb_single_image_img_link_dependency_callback'
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Link Target', 'blackfyre' ),
			'param_name' => 'img_link_target',
			'value' => $target_arr,
			'dependency' => array(
				'element' => 'link',
				'not_empty' => true
			)
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
	)
) );

/* Gallery/Slideshow
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Image Gallery', 'blackfyre' ),
	'base' => 'vc_gallery',
	'icon' => 'icon-wpb-images-stack',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Responsive image gallery', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Gallery type', 'blackfyre' ),
			'param_name' => 'type',
			'value' => array(
				__( 'Flex slider fade', 'blackfyre' ) => 'flexslider_fade',
				__( 'Flex slider slide', 'blackfyre' ) => 'flexslider_slide',
				__( 'Nivo slider', 'blackfyre' ) => 'nivo',
				__( 'Image grid', 'blackfyre' ) => 'image_grid'
			),
			'description' => __( 'Select gallery type.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Auto rotate', 'blackfyre' ),
			'param_name' => 'interval',
			'value' => array( 3, 5, 10, 15, __( 'Disable', 'blackfyre' ) => 0 ),
			'description' => __( 'Auto rotate slides each X seconds.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'type',
				'value' => array( 'flexslider_fade', 'flexslider_slide', 'nivo' )
			)
		),
		array(
			'type' => 'attach_images',
			'heading' => __( 'Images', 'blackfyre' ),
			'param_name' => 'images',
			'value' => '',
			'description' => __( 'Select images from media library.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Image size', 'blackfyre' ),
			'param_name' => 'img_size',
			'value' => 'thumbnail',
			'description' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'On click action', 'blackfyre' ),
			'param_name' => 'onclick',
			'value' => array(
				__( 'Open prettyPhoto', 'blackfyre' ) => 'link_image',
				__( 'None', 'blackfyre' ) => 'link_no',
				__( 'Open custom links', 'blackfyre' ) => 'custom_link'
			),
			'description' => __( 'Select action for click action.', 'blackfyre' )
		),
		array(
			'type' => 'exploded_textarea',
			'heading' => __( 'Custom links', 'blackfyre' ),
			'param_name' => 'custom_links',
			'description' => __( 'Enter links for each slide (Note: divide links with linebreaks (Enter)).', 'blackfyre' ),
			'dependency' => array(
				'element' => 'onclick',
				'value' => array( 'custom_link' )
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Custom link target', 'blackfyre' ),
			'param_name' => 'custom_links_target',
			'description' => __( 'Select where to open  custom links.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'onclick',
				'value' => array( 'custom_link' )
			),
			'value' => $target_arr
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Image Carousel
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Image Carousel', 'blackfyre' ),
	'base' => 'vc_images_carousel',
	'icon' => 'icon-wpb-images-carousel',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Animated carousel with images', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'attach_images',
			'heading' => __( 'Images', 'blackfyre' ),
			'param_name' => 'images',
			'value' => '',
			'description' => __( 'Select images from media library.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Carousel size', 'blackfyre' ),
			'param_name' => 'img_size',
			'value' => 'thumbnail',
			'description' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size. If used slides per view, this will be used to define carousel wrapper size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'On click action', 'blackfyre' ),
			'param_name' => 'onclick',
			'value' => array(
				__( 'Open prettyPhoto', 'blackfyre' ) => 'link_image',
				__( 'None', 'blackfyre' ) => 'link_no',
				__( 'Open custom links', 'blackfyre' ) => 'custom_link'
			),
			'description' => __( 'Select action for click event.', 'blackfyre' )
		),
		array(
			'type' => 'exploded_textarea',
			'heading' => __( 'Custom links', 'blackfyre' ),
			'param_name' => 'custom_links',
			'description' => __( 'Enter links for each slide (Note: divide links with linebreaks (Enter)).', 'blackfyre' ),
			'dependency' => array(
				'element' => 'onclick',
				'value' => array( 'custom_link' )
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Custom link target', 'blackfyre' ),
			'param_name' => 'custom_links_target',
			'description' => __( 'Select how to open custom links.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'onclick',
				'value' => array( 'custom_link' )
			),
			'value' => $target_arr
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Slider orientation', 'blackfyre' ),
			'param_name' => 'mode',
			'value' => array(
				__( 'Horizontal', 'blackfyre' ) => 'horizontal',
				__( 'Vertical', 'blackfyre' ) => 'vertical'
			),
			'description' => __( 'Select slider position (Note: this affects swiping orientation).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Slider speed', 'blackfyre' ),
			'param_name' => 'speed',
			'value' => '5000',
			'description' => __( 'Duration of animation between slides (in ms).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Slides per view', 'blackfyre' ),
			'param_name' => 'slides_per_view',
			'value' => '1',
			'description' => __( 'Enter number of slides to display at the same time.', 'blackfyre' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Slider autoplay', 'blackfyre' ),
			'param_name' => 'autoplay',
			'description' => __( 'Enable autoplay mode.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Hide pagination control', 'blackfyre' ),
			'param_name' => 'hide_pagination_control',
			'description' => __( 'If checked, pagination controls will be hidden.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Hide prev/next buttons', 'blackfyre' ),
			'param_name' => 'hide_prev_next_buttons',
			'description' => __( 'If checked, prev/next buttons will be hidden.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Partial view', 'blackfyre' ),
			'param_name' => 'partial_view',
			'description' => __( 'If checked, part of the next slide will be visible.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Slider loop', 'blackfyre' ),
			'param_name' => 'wrap',
			'description' => __( 'Enable slider loop mode.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/**
 * @since 4.6 new TTA, tabs tours and accordions
 */
include_once "shortcode-vc-tta-tabs.php";
include_once "shortcode-vc-tta-tour.php";
include_once "shortcode-vc-tta-accordion.php";
include_once "shortcode-vc-tta-section.php";

/* Tabs
---------------------------------------------------------- */
$tab_id_1 = ''; // 'def' . time() . '-1-' . rand( 0, 100 );
$tab_id_2 = ''; // 'def' . time() . '-2-' . rand( 0, 100 );
vc_map( array(
	"name" => __( 'Tabs', 'blackfyre' ),
	'base' => 'vc_tabs',
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => 'icon-wpb-ui-tab-content',
	'category' => __( 'Content', 'blackfyre' ),
	'deprecated' => '4.6',
	'description' => __( 'Tabbed content', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Auto rotate', 'blackfyre' ),
			'param_name' => 'interval',
			'value' => array( __( 'Disable', 'blackfyre' ) => 0, 3, 5, 10, 15 ),
			'std' => 0,
			'description' => __( 'Auto rotate tabs each X seconds.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'custom_markup' => '
<div class="wpb_tabs_holder wpb_holder vc_container_for_children">
<ul class="tabs_controls">
</ul>
%content%
</div>'
,
	'default_content' => '
[vc_tab title="' . __( 'Tab 1', 'blackfyre' ) . '" tab_id="' . $tab_id_1 . '"][/vc_tab]
[vc_tab title="' . __( 'Tab 2', 'blackfyre' ) . '" tab_id="' . $tab_id_2 . '"][/vc_tab]
',
	'js_view' => $vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35'
) );

/* Tour section
---------------------------------------------------------- */
$tab_id_1 = ''; // time() . '-1-' . rand( 0, 100 );
$tab_id_2 = ''; // time() . '-2-' . rand( 0, 100 );
vc_map( array(
	'name' => __( 'Tour', 'blackfyre' ),
	'base' => 'vc_tour',
	'show_settings_on_create' => false,
	'is_container' => true,
	'container_not_allowed' => true,
	'deprecated' => '4.6',
	'icon' => 'icon-wpb-ui-tab-content-vertical',
	'category' => __( 'Content', 'blackfyre' ),
	'wrapper_class' => 'vc_clearfix',
	'description' => __( 'Vertical tabbed content', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Auto rotate slides', 'blackfyre' ),
			'param_name' => 'interval',
			'value' => array( __( 'Disable', 'blackfyre' ) => 0, 3, 5, 10, 15 ),
			'std' => 0,
			'description' => __( 'Auto rotate slides each X seconds.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'custom_markup' => '
<div class="wpb_tabs_holder wpb_holder vc_clearfix vc_container_for_children">
<ul class="tabs_controls">
</ul>
%content%
</div>'
,
	'default_content' => '
[vc_tab title="' . __( 'Tab 1', 'blackfyre' ) . '" tab_id="' . $tab_id_1 . '"][/vc_tab]
[vc_tab title="' . __( 'Tab 2', 'blackfyre' ) . '" tab_id="' . $tab_id_2 . '"][/vc_tab]
',
	'js_view' => $vc_is_wp_version_3_6_more ? 'VcTabsView' : 'VcTabsView35'
) );

vc_map( array(
	'name' => __( 'Tab', 'blackfyre' ),
	'base' => 'vc_tab',
	'allowed_container_element' => 'vc_row',
	'is_container' => true,
	'content_element' => false,
	'deprecated' => '4.6',
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter title of tab.', 'blackfyre' )
		),
		array(
			'type' => 'tab_id',
			'heading' => __( 'Tab ID', 'blackfyre' ),
			'param_name' => "tab_id"
		)
	),
	'js_view' => $vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35'
) );

/* Accordion block
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Accordion', 'blackfyre' ),
	'base' => 'vc_accordion',
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => 'icon-wpb-ui-accordion',
	'deprecated' => '4.6',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Collapsible content panels', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Active section', 'blackfyre' ),
			'param_name' => 'active_tab',
			'value' => 1,
			'description' => __( 'Enter section number to be active on load or enter "false" to collapse all sections.', 'blackfyre' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Allow collapse all sections?', 'blackfyre' ),
			'param_name' => 'collapsible',
			'description' => __( 'If checked, it is allowed to collapse all sections.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Disable keyboard interactions?', 'blackfyre' ),
			'param_name' => 'disable_keyboard',
			'description' => __( 'If checked, disables keyboard arrow interactions (Keys: Left, Up, Right, Down, Space).', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'custom_markup' => '
<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
%content%
</div>
<div class="tab_controls">
    <a class="add_tab" title="' . __( 'Add section', 'blackfyre' ) . '"><span class="vc_icon"></span> <span class="tab-label">' . __( 'Add section', 'blackfyre' ) . '</span></a>
</div>
',
	'default_content' => '
    [vc_accordion_tab title="' . __( 'Section 1', 'blackfyre' ) . '"][/vc_accordion_tab]
    [vc_accordion_tab title="' . __( 'Section 2', 'blackfyre' ) . '"][/vc_accordion_tab]
',
	'js_view' => 'VcAccordionView'
) );
vc_map( array(
	'name' => __( 'Section', 'blackfyre' ),
	'base' => 'vc_accordion_tab',
	'allowed_container_element' => 'vc_row',
	'is_container' => true,
	'deprecated' => '4.6',
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Title', 'blackfyre' ),
			'param_name' => 'title',
			'value' => __( 'Section', 'blackfyre' ),
			'description' => __( 'Enter accordion section title.', 'blackfyre' )
		),
		array(
			'type' => 'el_id',
			'heading' => __( 'Section ID', 'blackfyre' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter optional row ID. Make sure it is unique, and it is valid as w3c specification: %s (Must not have spaces)', 'blackfyre' ), '<a target="_blank" href="http://www.w3schools.com/tags/att_global_id.asp">' . __( 'link', 'blackfyre' ) . '</a>' ),
		),
	),
	'js_view' => 'VcAccordionTabView'
) );

/* Posts Grid
---------------------------------------------------------- */
$vc_layout_sub_controls = array(
	array( 'link_post', __( 'Link to post', 'blackfyre' ) ),
	array( 'no_link', __( 'No link', 'blackfyre' ) ),
	array( 'link_image', __( 'Link to bigger image', 'blackfyre' ) )
);
vc_map( array(
	'name' => __( 'Posts Grid', 'blackfyre' ),
	'base' => 'vc_posts_grid',
	'content_element' => false,
	'deprecated' => '4.4',
	'icon' => 'icon-wpb-application-icon-large',
	'description' => __( 'Posts in grid view', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'loop',
			'heading' => __( 'Grids content', 'blackfyre' ),
			'param_name' => 'loop',
			'value' => 'size:10|order_by:date',
			'settings' => array(
				'size' => array( 'hidden' => false, 'value' => 10 ),
				'order_by' => array( 'value' => 'date' ),
			),
			'description' => __( 'Create WordPress loop, to populate content from your site.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns count', 'blackfyre' ),
			'param_name' => 'grid_columns_count',
			'value' => array( 6, 4, 3, 2, 1 ),
			'std' => 3,
			'admin_label' => true,
			'description' => __( 'Select columns count.', 'blackfyre' )
		),
		array(
			'type' => 'sorted_list',
			'heading' => __( 'Teaser layout', 'blackfyre' ),
			'param_name' => 'grid_layout',
			'description' => __( 'Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.', 'blackfyre' ),
			'value' => 'title,image,text',
			'options' => array(
				array( 'image', __( 'Thumbnail', 'blackfyre' ), $vc_layout_sub_controls ),
				array( 'title', __( 'Title', 'blackfyre' ), $vc_layout_sub_controls ),
				array(
					'text',
					__( 'Text', 'blackfyre' ),
					array(
						array( 'excerpt', __( 'Teaser/Excerpt', 'blackfyre' ) ),
						array( 'text', __( 'Full content', 'blackfyre' ) )
					)
				),
				array( 'link', __( 'Read more link', 'blackfyre' ) )
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Link target', 'blackfyre' ),
			'param_name' => 'grid_link_target',
			'value' => $target_arr,
			// 'dependency' => array(
			//     'element' => 'grid_link',
			//     'value' => array( 'link_post', 'link_image_post' )
			// )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show filter', 'blackfyre' ),
			'param_name' => 'filter',
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'description' => __( 'Select to add animated category filter to your posts grid.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Layout mode', 'blackfyre' ),
			'param_name' => 'grid_layout_mode',
			'value' => array(
				__( 'Fit rows', 'blackfyre' ) => 'fitRows',
				__( 'Masonry', 'blackfyre' ) => 'masonry'
			),
			'description' => __( 'Teaser layout template.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Thumbnail size', 'blackfyre' ),
			'param_name' => 'grid_thumb_size',
			'value' => 'thumbnail',
			'description' => __( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
	// 'html_template' => dirname(__DIR__).'/composer/shortcodes_templates/vc_posts_grid.php'
) );

/* Post Carousel
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Post Carousel', 'blackfyre' ),
	'base' => 'vc_carousel',
	'content_element' => false,
	'deprecated' => '4.4',
	'class' => '',
	'icon' => 'icon-wpb-vc_carousel',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Animated carousel with posts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'loop',
			'heading' => __( 'Carousel content', 'blackfyre' ),
			'param_name' => 'posts_query',
			'value' => 'size:10|order_by:date',
			'settings' => array(
				'size' => array( 'hidden' => false, 'value' => 10 ),
				'order_by' => array( 'value' => 'date' )
			),
			'description' => __( 'Create WordPress loop, to populate content from your site.', 'blackfyre' )
		),
		array(
			'type' => 'sorted_list',
			'heading' => __( 'Teaser layout', 'blackfyre' ),
			'param_name' => 'layout',
			'description' => __( 'Control teasers look. Enable blocks and place them in desired order. Note: This setting can be overrriden on post to post basis.', 'blackfyre' ),
			'value' => 'title,image,text',
			'options' => array(
				array( 'image', __( 'Thumbnail', 'blackfyre' ), $vc_layout_sub_controls ),
				array( 'title', __( 'Title', 'blackfyre' ), $vc_layout_sub_controls ),
				array(
					'text',
					__( 'Text', 'blackfyre' ),
					array(
						array( 'excerpt', __( 'Teaser/Excerpt', 'blackfyre' ) ),
						array( 'text', __( 'Full content', 'blackfyre' ) )
					)
				),
				array( 'link', __( 'Read more link', 'blackfyre' ) )
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Link target', 'blackfyre' ),
			'param_name' => 'link_target',
			'value' => $target_arr,
			// 'dependency' => array( 'element' => 'link', 'value' => array( 'link_post', 'link_image_post', 'link_image' ) )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Thumbnail size', 'blackfyre' ),
			'param_name' => 'thumb_size',
			'value' => 'thumbnail',
			'description' => __( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Slider speed', 'blackfyre' ),
			'param_name' => 'speed',
			'value' => '5000',
			'description' => __( 'Duration of animation between slides (in ms).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Slider orientation', 'blackfyre' ),
			'param_name' => 'mode',
			'value' => array(
				__( 'Horizontal', 'blackfyre' ) => 'horizontal',
				__( 'Vertical', 'blackfyre' ) => 'vertical'
			),
			'description' => __( 'Select slider position (Note: this affects swiping orientation).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Slides per view', 'blackfyre' ),
			'param_name' => 'slides_per_view',
			'value' => '1',
			'description' => __( 'Enter number of slides to display at the same time.', 'blackfyre' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Slider autoplay', 'blackfyre' ),
			'param_name' => 'autoplay',
			'description' => __( 'Enable autoplay mode.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Hide pagination control', 'blackfyre' ),
			'param_name' => 'hide_pagination_control',
			'description' => __( 'If "YES" pagination control will be removed', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Hide prev/next buttons', 'blackfyre' ),
			'param_name' => 'hide_prev_next_buttons',
			'description' => __( 'If "YES" prev/next control will be removed', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Partial view', 'blackfyre' ),
			'param_name' => 'partial_view',
			'description' => __( 'If "YES" part of the next slide will be visible on the right side', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Slider loop', 'blackfyre' ),
			'param_name' => 'wrap',
			'description' => __( 'Enable slider loop mode.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Posts slider
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Posts Slider', 'blackfyre' ),
	'base' => 'vc_posts_slider',
	'icon' => 'icon-wpb-slideshow',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Slider with WP Posts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Slider type', 'blackfyre' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Flex slider fade', 'blackfyre' ) => 'flexslider_fade',
				__( 'Flex slider slide', 'blackfyre' ) => 'flexslider_slide',
				__( 'Nivo slider', 'blackfyre' ) => 'nivo'
			),
			'description' => __( 'Select slider type.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Slider count', 'blackfyre' ),
			'param_name' => 'count',
			'value' => 3,
			'description' => __( 'Enter number of slides to display (Note: Enter "All" to display all slides).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Auto rotate', 'blackfyre' ),
			'param_name' => 'interval',
			'value' => array( 3, 5, 10, 15, __( 'Disable', 'blackfyre' ) => 0 ),
			'description' => __( 'Auto rotate slides each X seconds.', 'blackfyre' )
		),
		array(
			'type' => 'posttypes',
			'heading' => __( 'Post types', 'blackfyre' ),
			'param_name' => 'posttypes',
			'description' => __( 'Select source for slider.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Description', 'blackfyre' ),
			'param_name' => 'slides_content',
			'value' => array(
				__( 'No description', 'blackfyre' ) => '',
				__( 'Teaser (Excerpt)', 'blackfyre' ) => 'teaser'
			),
			'description' => __( 'Select source to use for description (Note: some sliders do not support it).', 'blackfyre' ),
			'dependency' => array(
				'element' => 'type',
				'value' => array( 'flexslider_fade', 'flexslider_slide' )
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Output post title?', 'blackfyre' ),
			'param_name' => 'slides_title',
			'description' => __( 'If selected, title will be printed before the teaser text.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => true ),
			'dependency' => array(
				'element' => 'slides_content',
				'value' => array( 'teaser' )
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Link', 'blackfyre' ),
			'param_name' => 'link',
			'value' => array(
				__( 'Link to post', 'blackfyre' ) => 'link_post',
				__( 'Link to bigger image', 'blackfyre' ) => 'link_image',
				__( 'Open custom links', 'blackfyre' ) => 'custom_link',
				__( 'No link', 'blackfyre' ) => 'link_no'
			),
			'description' => __( 'Link type.', 'blackfyre' )
		),
		array(
			'type' => 'exploded_textarea',
			'heading' => __( 'Custom links', 'blackfyre' ),
			'param_name' => 'custom_links',
			'value' => site_url() . '/',
			'dependency' => array( 'element' => 'link', 'value' => 'custom_link' ),
			'description' => __( 'Enter links for each slide here. Divide links with linebreaks (Enter).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Thumbnail size', 'blackfyre' ),
			'param_name' => 'thumb_size',
			'value' => 'medium',
			'description' => __( 'Enter thumbnail size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height) . ', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Post/Page IDs', 'blackfyre' ),
			'param_name' => 'posts_in',
			'description' => __( 'Enter page/posts IDs to display only those records (Note: separate values by commas (,)). Use this field in conjunction with "Post types" field.', 'blackfyre' )
		),
		array(
			'type' => 'exploded_textarea',
			'heading' => __( 'Categories', 'blackfyre' ),
			'param_name' => 'categories',
			'description' => __( 'Enter categories by names to narrow output (Note: only listed categories will be displayed, divide categories with linebreak (Enter)).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'orderby',
			'value' => array(
				'',
				__( 'Date', 'blackfyre' ) => 'date',
				__( 'ID', 'blackfyre' ) => 'ID',
				__( 'Author', 'blackfyre' ) => 'author',
				__( 'Title', 'blackfyre' ) => 'title',
				__( 'Modified', 'blackfyre' ) => 'modified',
				__( 'Random', 'blackfyre' ) => 'rand',
				__( 'Comment count', 'blackfyre' ) => 'comment_count',
				__( 'Menu order', 'blackfyre' ) => 'menu_order'
			),
			'description' => sprintf( __( 'Select how to sort retrieved posts. More at %s.', 'blackfyre' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'order',
			'value' => array(
				__( 'Descending', 'blackfyre' ) => 'DESC',
				__( 'Ascending', 'blackfyre' ) => 'ASC'
			),
			'description' => sprintf( __( 'Select ascending or descending order. More at %s.', 'blackfyre' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Widgetised sidebar
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Widgetised Sidebar', 'blackfyre' ),
	'base' => 'vc_widget_sidebar',
	'class' => 'wpb_widget_sidebar_widget',
	'icon' => 'icon-wpb-layout_sidebar',
	'category' => __( 'Structure', 'blackfyre' ),
	'description' => __( 'WordPress widgetised sidebar', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'widgetised_sidebars',
			'heading' => __( 'Sidebar', 'blackfyre' ),
			'param_name' => 'sidebar_id',
			'description' => __( 'Select widget area to display.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Button
---------------------------------------------------------- */
$icons_arr = array(
	__( 'None', 'blackfyre' ) => 'none',
	__( 'Address book icon', 'blackfyre' ) => 'wpb_address_book',
	__( 'Alarm clock icon', 'blackfyre' ) => 'wpb_alarm_clock',
	__( 'Anchor icon', 'blackfyre' ) => 'wpb_anchor',
	__( 'Application Image icon', 'blackfyre' ) => 'wpb_application_image',
	__( 'Arrow icon', 'blackfyre' ) => 'wpb_arrow',
	__( 'Asterisk icon', 'blackfyre' ) => 'wpb_asterisk',
	__( 'Hammer icon', 'blackfyre' ) => 'wpb_hammer',
	__( 'Balloon icon', 'blackfyre' ) => 'wpb_balloon',
	__( 'Balloon Buzz icon', 'blackfyre' ) => 'wpb_balloon_buzz',
	__( 'Balloon Facebook icon', 'blackfyre' ) => 'wpb_balloon_facebook',
	__( 'Balloon Twitter icon', 'blackfyre' ) => 'wpb_balloon_twitter',
	__( 'Battery icon', 'blackfyre' ) => 'wpb_battery',
	__( 'Binocular icon', 'blackfyre' ) => 'wpb_binocular',
	__( 'Document Excel icon', 'blackfyre' ) => 'wpb_document_excel',
	__( 'Document Image icon', 'blackfyre' ) => 'wpb_document_image',
	__( 'Document Music icon', 'blackfyre' ) => 'wpb_document_music',
	__( 'Document Office icon', 'blackfyre' ) => 'wpb_document_office',
	__( 'Document PDF icon', 'blackfyre' ) => 'wpb_document_pdf',
	__( 'Document Powerpoint icon', 'blackfyre' ) => 'wpb_document_powerpoint',
	__( 'Document Word icon', 'blackfyre' ) => 'wpb_document_word',
	__( 'Bookmark icon', 'blackfyre' ) => 'wpb_bookmark',
	__( 'Camcorder icon', 'blackfyre' ) => 'wpb_camcorder',
	__( 'Camera icon', 'blackfyre' ) => 'wpb_camera',
	__( 'Chart icon', 'blackfyre' ) => 'wpb_chart',
	__( 'Chart pie icon', 'blackfyre' ) => 'wpb_chart_pie',
	__( 'Clock icon', 'blackfyre' ) => 'wpb_clock',
	__( 'Fire icon', 'blackfyre' ) => 'wpb_fire',
	__( 'Heart icon', 'blackfyre' ) => 'wpb_heart',
	__( 'Mail icon', 'blackfyre' ) => 'wpb_mail',
	__( 'Play icon', 'blackfyre' ) => 'wpb_play',
	__( 'Shield icon', 'blackfyre' ) => 'wpb_shield',
	__( 'Video icon', 'blackfyre' ) => "wpb_video"
);

vc_map( array(
	'name' => __( 'Button', 'blackfyre' ) . " 1",
	'base' => 'vc_button',
	'icon' => 'icon-wpb-ui-button',
	'category' => __( 'Content', 'blackfyre' ),
	'deprecated' => '4.5',
	'description' => __( 'Eye catching button', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Text', 'blackfyre' ),
			'holder' => 'button',
			'class' => 'wpb_button',
			'param_name' => 'title',
			'value' => __( 'Text on the button', 'blackfyre' ),
			'description' => __( 'Enter text on the button.', 'blackfyre' )
		),
		array(
			'type' => 'href',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'href',
			'description' => __( 'Enter button link.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Target', 'blackfyre' ),
			'param_name' => 'target',
			'value' => $target_arr,
			'dependency' => array(
				'element' => 'href',
				'not_empty' => true,
				'callback' => 'vc_button_param_target_callback'
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => $colors_arr,
			'description' => __( 'Select button color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon', 'blackfyre' ),
			'param_name' => 'icon',
			'value' => $icons_arr,
			'description' => __( 'Select icon to display on button.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => $size_arr,
			'description' => __( 'Select button size.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'js_view' => 'VcButtonView'
) );

vc_map( array(
	'name' => __( 'Button', 'blackfyre' ) . " 2",
	'base' => 'vc_button2',
	'icon' => 'icon-wpb-ui-button',
	'deprecated' => '4.5',
	'category' => array(
		__( 'Content', 'blackfyre' )
	),
	'description' => __( 'Eye catching button', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'vc_link',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Add link to button.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Text', 'blackfyre' ),
			'holder' => 'button',
			'class' => 'vc_btn',
			'param_name' => 'title',
			'value' => __( 'Text on the button', 'blackfyre' ),
			'description' => __( 'Enter text on the button.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Alignment', 'blackfyre' ),
			'param_name' => 'align',
			'value' => array(
				__( 'Inline', 'blackfyre' ) => "inline",
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Center', 'blackfyre' ) => 'center',
				__( 'Right', 'blackfyre' ) => "right"
			),
			'description' => __( 'Select button alignment.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'button styles' ),
			'description' => __( 'Select button display style and shape.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => getVcShared( 'colors' ),
			'description' => __( 'Select button color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		/*array(
        'type' => 'dropdown',
        'heading' => __( 'Icon', 'blackfyre' ),
        'param_name' => 'icon',
        'value' => getVcShared( 'icons' ),
        'description' => __( 'Button icon.', 'blackfyre' )
  ),*/
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => getVcShared( 'sizes' ),
			'std' => 'md',
			'description' => __( 'Select button size.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'js_view' => 'VcButton2View'
) );

/* Call to Action Button
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Call to Action', 'blackfyre' ),
	'base' => 'vc_cta_button',
	'icon' => 'icon-wpb-call-to-action',
	'deprecated' => '4.5',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Catch visitors attention with CTA block', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textarea',
			'admin_label' => true,
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'call_text',
			'value' => __( 'Click edit button to change this text.', 'blackfyre' ),
			'description' => __( 'Enter text content.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Text on the button', 'blackfyre' ),
			'param_name' => 'title',
			'value' => __( 'Text on the button', 'blackfyre' ),
			'description' => __( 'Enter text on the button.', 'blackfyre' )
		),
		array(
			'type' => 'href',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'href',
			'description' => __( 'Enter button link.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Target', 'blackfyre' ),
			'param_name' => 'target',
			'value' => $target_arr,
			'dependency' => array(
				'element' => 'href',
				'not_empty' => true,
				'callback' => 'vc_cta_button_param_target_callback'
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => $colors_arr,
			'description' => __( 'Select button color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button icon', 'blackfyre' ),
			'param_name' => 'icon',
			'value' => $icons_arr,
			'description' => __( 'Select icon to display on button.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => $size_arr,
			'description' => __( 'Select button size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button position', 'blackfyre' ),
			'param_name' => 'position',
			'value' => array(
				__( 'Right', 'blackfyre' ) => 'cta_align_right',
				__( 'Left', 'blackfyre' ) => 'cta_align_left',
				__( 'Bottom', 'blackfyre' ) => 'cta_align_bottom'
			),
			'description' => __( 'Select button alignment.', 'blackfyre' )
		),
		$vc_add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	),
	'js_view' => 'VcCallToActionView'
) );

vc_map( array(
	'name' => __( 'Call to Action Button', 'blackfyre' ) . ' 2',
	'base' => 'vc_cta_button2',
	'icon' => 'icon-wpb-call-to-action',
	'deprecated' => '4.5',
	'category' => array( __( 'Content', 'blackfyre' ) ),
	'description' => __( 'Catch visitors attention with CTA block', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Heading', 'blackfyre' ),
			'admin_label' => true,
			//'holder' => 'h2',
			'param_name' => 'h2',
			'value' => __( 'Hey! I am first heading line feel free to change me', 'blackfyre' ),
			'description' => __( 'Enter text for heading line.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Subheading', 'blackfyre' ),
			//'holder' => 'h4',
			//'admin_label' => true,
			'param_name' => 'h4',
			'value' => '',
			'description' => __( 'Enter text for subheading line.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'param_name' => 'style',
			'value' => getVcShared( 'cta styles' ),
			'description' => __( 'Select display shape and style.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'blackfyre' ),
			'param_name' => 'el_width',
			'value' => getVcShared( 'cta widths' ),
			'description' => __( 'Select element width (percentage).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Text alignment', 'blackfyre' ),
			'param_name' => 'txt_align',
			'value' => getVcShared( 'text align' ),
			'description' => __( 'Select text alignment in "Call to Action" block.', 'blackfyre' )
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Background color', 'blackfyre' ),
			'param_name' => 'accent_color',
			'description' => __( 'Select background color.', 'blackfyre' )
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
			'type' => 'vc_link',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Add link to button (Important: adding link automatically adds button).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Text on the button', 'blackfyre' ),
			//'holder' => 'button',
			//'class' => 'wpb_button',
			'param_name' => 'title',
			'value' => __( 'Text on the button', 'blackfyre' ),
			'description' => __( 'Add text on the button.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Shape', 'blackfyre' ),
			'param_name' => 'btn_style',
			'value' => getVcShared( 'button styles' ),
			'description' => __( 'Select button display style and shape.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => getVcShared( 'colors' ),
			'description' => __( 'Select button color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Size', 'blackfyre' ),
			'param_name' => 'size',
			'value' => getVcShared( 'sizes' ),
			'std' => 'md',
			'description' => __( 'Select button size.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button position', 'blackfyre' ),
			'param_name' => 'position',
			'value' => array(
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Bottom', 'blackfyre' ) => 'bottom'
			),
			'description' => __( 'Select button alignment.', 'blackfyre' )
		),
		$vc_add_css_animation,
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Video element
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Video Player', 'blackfyre' ),
	'base' => 'vc_video',
	'icon' => 'icon-wpb-film-youtube',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Embed YouTube/Vimeo player', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Video link', 'blackfyre' ),
			'param_name' => 'link',
			'value' => 'http://vimeo.com/92033601',
			'admin_label' => true,
			'description' => sprintf( __( 'Enter link to video (Note: read more about available formats at WordPress <a href="%s" target="_blank">codex page</a>).', 'blackfyre' ), 'http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F' )
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
	)
) );

/* Google maps element
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Google Maps', 'blackfyre' ),
	'base' => 'vc_gmaps',
	'icon' => 'icon-wpb-map-pin',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Map block', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'textarea_safe',
			'heading' => __( 'Map embed iframe', 'blackfyre' ),
			'param_name' => 'link',
			'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
			'description' => sprintf( __( 'Visit %s to create your map (Step by step: 1) Find location 2) Click the cog symbol in the lower right corner and select "Share or embed map" 3) On modal window select "Embed map" 4) Copy iframe code and paste it).' ),
				'<a href="https://www.google.com/maps" target="_blank">' . __( 'Google maps', 'blackfyre' ) . '</a>')
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Map height', 'blackfyre' ),
			'param_name' => 'size',
			'value' => 'standard',
			'admin_label' => true,
			'description' => __( 'Enter map height (in pixels or leave empty for responsive map).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Raw HTML
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Raw HTML', 'blackfyre' ),
	'base' => 'vc_raw_html',
	'icon' => 'icon-wpb-raw-html',
	'category' => __( 'Structure', 'blackfyre' ),
	'wrapper_class' => 'clearfix',
	'description' => __( 'Output raw HTML code on your page', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textarea_raw_html',
			'holder' => 'div',
			'heading' => __( 'Raw HTML', 'blackfyre' ),
			'param_name' => 'content',
			'value' => base64_encode( '<p>I am raw html block.<br/>Click edit button to change this html</p>' ),
			'description' => __( 'Enter your HTML content.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Raw JS
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Raw JS', 'blackfyre' ),
	'base' => 'vc_raw_js',
	'icon' => 'icon-wpb-raw-javascript',
	'category' => __( 'Structure', 'blackfyre' ),
	'wrapper_class' => 'clearfix',
	'description' => __( 'Output raw JavaScript code on your page', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textarea_raw_html',
			'holder' => 'div',
			'heading' => __( 'JavaScript Code', 'blackfyre' ),
			'param_name' => 'content',
			'value' => __( base64_encode( '<script type="text/javascript"> alert("Enter your js here!" ); </script>' ), 'blackfyre' ),
			'description' => __( 'Enter your JavaScript code.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Flickr
---------------------------------------------------------- */
vc_map( array(
	'base' => 'vc_flickr',
	'name' => __( 'Flickr Widget', 'blackfyre' ),
	'icon' => 'icon-wpb-flickr',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Image feed from Flickr account', 'blackfyre' ),
	"params" => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Flickr ID', 'blackfyre' ),
			'param_name' => 'flickr_id',
			'value' => '95572727@N00',
			'admin_label' => true,
			'description' => sprintf( __( 'To find your flickID visit %s.', 'blackfyre' ), '<a href="http://idgettr.com/" target="_blank">idGettr</a>' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Number of photos', 'blackfyre' ),
			'param_name' => 'count',
			'value' => array( 9, 8, 7, 6, 5, 4, 3, 2, 1 ),
			'description' => __( 'Select number of photos to display.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Type', 'blackfyre' ),
			'param_name' => 'type',
			'value' => array(
				__( 'User', 'blackfyre' ) => 'user',
				__( 'Group', 'blackfyre' ) => 'group'
			),
			'description' => __( 'Select photo stream type.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Display order', 'blackfyre' ),
			'param_name' => 'display',
			'value' => array(
				__( 'Latest first', 'blackfyre' ) => 'latest',
				__( 'Random', 'blackfyre' ) => 'random'
			),
			'description' => __( 'Select photo display order.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Graph
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Progress Bar', 'blackfyre' ),
	'base' => 'vc_progress_bar',
	'icon' => 'icon-wpb-graph',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Animated progress bar', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' )
		),
		array(
			'type' => 'exploded_textarea',
			'heading' => __( 'Values', 'blackfyre' ),
			'param_name' => 'values',
			'description' => __( 'Enter values for graph - value, title and color. Divide value sets with linebreak "Enter" (Example: 90|Development|#e75956).', 'blackfyre' ),
			'value' => '90|Development,80|Design,70|Marketing'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Units', 'blackfyre' ),
			'param_name' => 'units',
			'description' => __( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'bgcolor',
			'value' => array(
				__( 'Grey', 'blackfyre' ) => 'bar_grey',
				__( 'Blue', 'blackfyre' ) => 'bar_blue',
				__( 'Turquoise', 'blackfyre' ) => 'bar_turquoise',
				__( 'Green', 'blackfyre' ) => 'bar_green',
				__( 'Orange', 'blackfyre' ) => 'bar_orange',
				__( 'Red', 'blackfyre' ) => 'bar_red',
				__( 'Black', 'blackfyre' ) => 'bar_black',
				__( 'Custom Color', 'blackfyre' ) => 'custom'
			),
			'description' => __( 'Select bar background color.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Bar custom color', 'blackfyre' ),
			'param_name' => 'custombgcolor',
			'description' => __( 'Select custom background color for bars.', 'blackfyre' ),
			'dependency' => array( 'element' => 'bgcolor', 'value' => array( 'custom' ) )
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Options', 'blackfyre' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Add stripes', 'blackfyre' ) => 'striped',
				__( 'Add animation (Note: visible only with striped bar).', 'blackfyre' ) => 'animated'
			)
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/**
 * Pie chart
 */
vc_map( array(
	'name' => __( 'Pie Chart', 'blackfyre' ),
	'base' => 'vc_pie',
	'class' => '',
	'icon' => 'icon-wpb-vc_pie',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Animated pie chart', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Value', 'blackfyre' ),
			'param_name' => 'value',
			'description' => __( 'Enter value for graph (Note: choose range from 0 to 100).', 'blackfyre' ),
			'value' => '50',
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Label value', 'blackfyre' ),
			'param_name' => 'label_value',
			'description' => __( 'Enter label for pie chart (Note: leaving empty will set value from "Value" field).', 'blackfyre' ),
			'value' => ''
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Units', 'blackfyre' ),
			'param_name' => 'units',
			'description' => __( 'Enter measurement units (Example: %, px, points, etc. Note: graph value and units will be appended to graph title).', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Color', 'blackfyre' ),
			'param_name' => 'color',
			'value' => $colors_arr, //$pie_colors,
			'description' => __( 'Select pie chart color.', 'blackfyre' ),
			'admin_label' => true,
			'param_holder_class' => 'vc_colored-dropdown'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),

	)
) );

/**
 * Round chart
 */
vc_map( array(
	'name' => __( 'Round Chart', 'blackfyre' ),
	'base' => 'vc_round_chart',
	'class' => '',
	'icon' => 'icon-wpb-vc-round-chart',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Pie and Doughnat charts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Design', 'blackfyre' ),
			'param_name' => 'type',
			'value' => array(
				__( 'Pie', 'blackfyre' ) => 'pie',
				__( 'Doughnut', 'blackfyre' ) => 'doughnut',
			),
			'description' => __( 'Select type of chart.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'description' => __( 'Select chart color style.', 'blackfyre' ),
			'param_name' => 'style',
			'value' => array(
				__( 'Flat', 'blackfyre' ) => 'flat',
				__( 'Modern', 'blackfyre' ) => 'modern',
				__( 'Custom', 'blackfyre' ) => 'custom',
			),
			'dependency' => array(
				'callback' => 'vcChartCustomColorDependency',
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Gap', 'blackfyre' ),
			'param_name' => 'stroke_width',
			'value' => array(
				0 => 0,
				1 => 1,
				2 => 2,
				5 => 5,
			),
			'description' => __( 'Select gap size.', 'blackfyre' ),
			'std' => 2
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Outline color', 'blackfyre' ),
			'param_name' => 'stroke_color',
			'value' => getVcShared( 'colors-dashed' ) + array( __( 'Custom', 'blackfyre' ) => 'custom' ),
			'description' => __( 'Select outline color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'std' => 'white',
			'dependency' => array(
				'element' => 'stroke_width',
				'value_not_equal_to' => '0'
			),
		),
		array(
			'type' => 'colorpicker',
			'heading' => __( 'Custom outline color', 'blackfyre' ),
			'param_name' => 'custom_stroke_color',
			'description' => __( 'Select custom outline color.', 'blackfyre' ),
			'dependency' => array(
				'element' => 'stroke_color',
				'value' => array( 'custom' )
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show legend?', 'blackfyre' ),
			'param_name' => 'legend',
			'description' => __( 'If checked, chart will have legend.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'std' => 'yes'
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show hover values?', 'blackfyre' ),
			'param_name' => 'tooltips',
			'description' => __( 'If checked, chart will show values on hover.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'std' => 'yes'
		),
		array(
			'type' => 'param_group',
			'heading' => __( 'Values', 'blackfyre' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => __( 'One', 'blackfyre' ),
					'value' => '60',
					'color' => 'blue'
				),
				array(
					'title' => __( 'Two', 'blackfyre' ),
					'value' => '40',
					'color' => 'pink'
				)
			) ) ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Title', 'blackfyre' ),
					'param_name' => 'title',
					'description' => __( 'Enter title for chart area.', 'blackfyre' ),
					'admin_label' => true
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Value', 'blackfyre' ),
					'param_name' => 'value',
					'description' => __( 'Enter value for area.', 'blackfyre' ),
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Color', 'blackfyre' ),
					'param_name' => 'color',
					'value' => getVcShared( 'colors-dashed' ),
					'description' => __( 'Select area color.', 'blackfyre' ),
					'param_holder_class' => 'vc_colored-dropdown',
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Custom color', 'blackfyre' ),
					'param_name' => 'custom_color',
					'description' => __( 'Select custom area color.', 'blackfyre' ),
				),
			),
			'callbacks' => array(
				'after_add' => 'vcChartParamAfterAddCallback'
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Animation', 'blackfyre' ),
			'description' => __( 'Select animation style.', 'blackfyre' ),
			'param_name' => 'animation',
			'value' => getVcShared( 'animation styles' ),
			'std' => 'easeinOutCubic'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),

	)
) );

/**
 * Line chart
 */
vc_map( array(
	'name' => __( 'Line Chart', 'blackfyre' ),
	'base' => 'vc_line_chart',
	'class' => '',
	'icon' => 'icon-wpb-vc-line-chart',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Line and Bar charts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Design', 'blackfyre' ),
			'param_name' => 'type',
			'value' => array(
				__( 'Line', 'blackfyre' ) => 'line',
				__( 'Bar', 'blackfyre' ) => 'bar',
			),
			'std' => 'bar',
			'description' => __( 'Select type of chart.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Style', 'blackfyre' ),
			'description' => __( 'Select chart color style.', 'blackfyre' ),
			'param_name' => 'style',
			'value' => array(
				__( 'Flat', 'blackfyre' ) => 'flat',
				__( 'Modern', 'blackfyre' ) => 'modern',
				__( 'Custom', 'blackfyre' ) => 'custom',
			),
			'dependency' => array(
				'callback' => 'vcChartCustomColorDependency',
			)
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show legend?', 'blackfyre' ),
			'param_name' => 'legend',
			'description' => __( 'If checked, chart will have legend.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'std' => 'yes'
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show hover values?', 'blackfyre' ),
			'param_name' => 'tooltips',
			'description' => __( 'If checked, chart will show values on hover.', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'std' => 'yes'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'X-axis values', 'blackfyre' ),
			'param_name' => 'x_values',
			'description' => __( 'Enter values for axis (Note: separate values with ";").', 'blackfyre' ),
			'value' => 'JAN; FEB; MAR; APR; MAY; JUN; JUL; AUG'
		),
		array(
			'type' => 'param_group',
			'heading' => __( 'Values', 'blackfyre' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => __( 'One', 'blackfyre' ),
					'y_values' => '10; 15; 20; 25; 27; 25; 23; 25',
					'color' => 'blue'
				),
				array(
					'title' => __( 'Two', 'blackfyre' ),
					'y_values' => '25; 18; 16; 17; 20; 25; 30; 35',
					'color' => 'pink'
				)
			) ) ),
			'params' => array(
				array(
					'type' => 'textfield',
					'heading' => __( 'Title', 'blackfyre' ),
					'param_name' => 'title',
					'description' => __( 'Enter title for chart dataset.', 'blackfyre' ),
					'admin_label' => true
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Y-axis values', 'blackfyre' ),
					'param_name' => 'y_values',
					'description' => __( 'Enter values for axis (Note: separate values with ";").', 'blackfyre' ),
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Color', 'blackfyre' ),
					'param_name' => 'color',
					'value' => getVcShared( 'colors-dashed' ),
					'description' => __( 'Select chart color.', 'blackfyre' ),
					'param_holder_class' => 'vc_colored-dropdown',
				),
				array(
					'type' => 'colorpicker',
					'heading' => __( 'Custom color', 'blackfyre' ),
					'param_name' => 'custom_color',
					'description' => __( 'Select custom chart color.', 'blackfyre' ),
				),
			),
			'callbacks' => array(
				'after_add' => 'vcChartParamAfterAddCallback'
			)
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Animation', 'blackfyre' ),
			'description' => __( 'Select animation style.', 'blackfyre' ),
			'param_name' => 'animation',
			'value' => getVcShared( 'animation styles' ),
			'std' => 'easeinOutCubic'
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		),

	)
) );

/* WordPress default Widgets (Appearance->Widgets)
---------------------------------------------------------- */
vc_map( array(
	'name' => 'WP ' . __( 'Search' ),
	'base' => 'vc_wp_search',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'A search form for your site', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Meta' ),
	'base' => 'vc_wp_meta',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Log in/out, admin, feed and WordPress links', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Meta' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Recent Comments' ),
	'base' => 'vc_wp_recentcomments',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'The most recent comments', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Recent Comments' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Number of comments', 'blackfyre' ),
			'description' => __( 'Enter number of comments to display.', 'blackfyre' ),
			'param_name' => 'number',
			'value' => 5,
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Calendar' ),
	'base' => 'vc_wp_calendar',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'A calendar of your sites posts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Pages' ),
	'base' => 'vc_wp_pages',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Your sites WordPress Pages', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Pages' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'sortby',
			'value' => array(
				__( 'Page title', 'blackfyre' ) => 'post_title',
				__( 'Page order', 'blackfyre' ) => 'menu_order',
				__( 'Page ID', 'blackfyre' ) => 'ID'
			),
			'description' => __( 'Select how to sort pages.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Exclude', 'blackfyre' ),
			'param_name' => 'exclude',
			'description' => __( 'Enter page IDs to be excluded (Note: separate values by commas (,)).', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

$tag_taxonomies = array();
$taxonomies = get_taxonomies();
if ( is_array( $taxonomies ) && ! empty( $taxonomies ) ) {
	foreach ( $taxonomies as $taxonomy ) {
		$tax = get_taxonomy( $taxonomy );
		if ( ( is_object( $tax ) && ( ! $tax->show_tagcloud || empty( $tax->labels->name ) ) ) || ! is_object( $tax ) ) {
			continue;
		}
		$tag_taxonomies[ $tax->labels->name ] = esc_attr( $taxonomy );
	}
}
vc_map( array(
	'name' => 'WP ' . __( 'Tag Cloud' ),
	'base' => 'vc_wp_tagcloud',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Your most used tags in cloud format', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'value' => __( 'Tags', 'blackfyre' ),
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Taxonomy', 'blackfyre' ),
			'param_name' => 'taxonomy',
			'value' => $tag_taxonomies,
			'description' => __( 'Select source for tag cloud.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

$custom_menus = array();
$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
if ( is_array( $menus ) && ! empty( $menus ) ) {
	foreach ( $menus as $single_menu ) {
		if ( is_object( $single_menu ) && isset( $single_menu->name, $single_menu->term_id ) ) {
			$custom_menus[ $single_menu->name ] = $single_menu->term_id;
		}
	}
}
vc_map( array(
	'name' => 'WP ' . __( "Custom Menu" ),
	'base' => 'vc_wp_custommenu',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Use this widget to add one of your custom menus as a widget', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Menu', 'blackfyre' ),
			'param_name' => 'nav_menu',
			'value' => $custom_menus,
			'description' => empty( $custom_menus ) ? __( 'Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu.', 'blackfyre' ) : __( 'Select menu to display.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Text' ),
	'base' => 'vc_wp_text',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Arbitrary text or HTML', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'content',
			// 'admin_label' => true
		),
		/*array(
        'type' => 'checkbox',
        'heading' => __( 'Automatically add paragraphs', 'blackfyre' ),
        'param_name' => "filter"
  ),*/
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Recent Posts' ),
	'base' => 'vc_wp_posts',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'The most recent posts on your site', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Recent Posts' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Number of posts', 'blackfyre' ),
			'description' => __( 'Enter number of posts to display.', 'blackfyre' ),
			'param_name' => 'number',
			'value' => 5,
			'admin_label' => true
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Display post date?', 'blackfyre' ),
			'param_name' => 'show_date',
			'value' => array( __( 'Yes', 'blackfyre' ) => true ),
			'description' => __( 'If checked, date will be displayed.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

$link_category = array( __( 'All Links', 'blackfyre' ) => '' );
$link_cats = get_terms( 'link_category' );
if ( is_array( $link_cats ) && ! empty( $link_cats ) ) {
	foreach ( $link_cats as $link_cat ) {
		if ( is_object( $link_cat ) && isset( $link_cat->name, $link_cat->term_id ) ) {
			$link_category[ $link_cat->name ] = $link_cat->term_id;
		}
	}
}
vc_map( array(
	'name' => 'WP ' . __( 'Links' ),
	'base' => 'vc_wp_links',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'content_element' => (bool) get_option( 'link_manager_enabled' ),
	'weight' => - 50,
	'description' => __( 'Your blogroll', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Link Category', 'blackfyre' ),
			'param_name' => 'category',
			'value' => $link_category,
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'orderby',
			'value' => array(
				__( 'Link title', 'blackfyre' ) => 'name',
				__( 'Link rating', 'blackfyre' ) => 'rating',
				__( 'Link ID', 'blackfyre' ) => 'id',
				__( 'Random', 'blackfyre' ) => 'rand'
			)
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Options', 'blackfyre' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Show Link Image', 'blackfyre' ) => 'images',
				__( 'Show Link Name', 'blackfyre' ) => 'name',
				__( 'Show Link Description', 'blackfyre' ) => 'description',
				__( 'Show Link Rating', 'blackfyre' ) => 'rating'
			)
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Number of links to show', 'blackfyre' ),
			'param_name' => 'limit',
			'value' => - 1,
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Categories' ),
	'base' => 'vc_wp_categories',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'A list or dropdown of categories', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Categories' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Display options', 'blackfyre' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Dropdown', 'blackfyre' ) => 'dropdown',
				__( 'Show post counts', 'blackfyre' ) => 'count',
				__( 'Show hierarchy', 'blackfyre' ) => 'hierarchical'
			),
			'description' => __( 'Select display options for categories.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'Archives' ),
	'base' => 'vc_wp_archives',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'A monthly archive of your sites posts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' ),
			'value' => __( 'Archives' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Display options', 'blackfyre' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Dropdown', 'blackfyre' ) => 'dropdown',
				__( 'Show post counts', 'blackfyre' ) => 'count'
			),
			'description' => __( 'Select display options for archives.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

vc_map( array(
	'name' => 'WP ' . __( 'RSS' ),
	'base' => 'vc_wp_rss',
	'icon' => 'icon-wpb-wp',
	'category' => __( 'WordPress Widgets', 'blackfyre' ),
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'description' => __( 'Entries from any RSS or Atom feed', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'param_name' => 'title',
			'description' => __( 'What text use as a widget title. Leave blank to use default widget title.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'RSS feed URL', 'blackfyre' ),
			'param_name' => 'url',
			'description' => __( 'Enter the RSS feed URL.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Items', 'blackfyre' ),
			'param_name' => 'items',
			'value' => array(
				__( '10 - Default', 'blackfyre' ) => 10,
				1,
				2,
				3,
				4,
				5,
				6,
				7,
				8,
				9,
				10,
				11,
				12,
				13,
				14,
				15,
				16,
				17,
				18,
				19,
				20
			),
			'description' => __( 'Select how many items to display.', 'blackfyre' ),
			'admin_label' => true
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Options', 'blackfyre' ),
			'param_name' => 'options',
			'value' => array(
				__( 'Item content', 'blackfyre' ) => 'show_summary',
				__( 'Display item author if available?', 'blackfyre' ) => 'show_author',
				__( 'Display item date?', 'blackfyre' ) => 'show_date'
			),
			'description' => __( 'Select display options for RSS feeds.', 'blackfyre' )
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
		)
	)
) );

/* Empty Space Element
---------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Empty Space', 'blackfyre' ),
	'base' => 'vc_empty_space',
	'icon' => 'icon-wpb-ui-empty_space',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Blank space with custom height', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __( 'Height', 'blackfyre' ),
			'param_name' => 'height',
			'value' => '32px',
			'admin_label' => true,
			'description' => __( 'Enter empty space height (Note: CSS measurement units allowed).', 'blackfyre' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		),
	),
) );

/* Custom Heading element
----------------------------------------------------------- */
vc_map( array(
	'name' => __( 'Custom Heading', 'blackfyre' ),
	'base' => 'vc_custom_heading',
	'icon' => 'icon-wpb-ui-custom_heading',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Text with Google fonts', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textarea',
			'heading' => __( 'Text', 'blackfyre' ),
			'param_name' => 'text',
			'admin_label' => true,
			'value' => __( 'This is custom heading element', 'blackfyre' ),
			'description' => __( 'Note: If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'blackfyre' ),
		),
		array(
			'type' => 'vc_link',
			'heading' => __( 'URL (Link)', 'blackfyre' ),
			'param_name' => 'link',
			'description' => __( 'Add link to custom heading.', 'blackfyre' ),
			// compatible with btn2 and converted from href{btn1}
		),
		array(
			'type' => 'font_container',
			'param_name' => 'font_container',
			'value' => 'tag:h2|text_align:left',
			'settings' => array(
				'fields' => array(
					'tag' => 'h2', // default value h2
					'text_align',
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
					'color_description' => __( 'Select heading color.', 'blackfyre' ),
					//'font_style_description' => __('Put your description here','blackfyre'),
					//'font_family_description' => __('Put your description here','blackfyre'),
				),
			),
			// 'description' => __( '', 'blackfyre' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use theme default font family?', 'blackfyre' ),
			'param_name' => 'use_theme_fonts',
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'description' => __( 'Use font family from the theme.', 'blackfyre' ),
		),
		array(
			'type' => 'google_fonts',
			'param_name' => 'google_fonts',
			'value' => 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
			// default
			//'font_family:'.rawurlencode('Abril Fatface:400').'|font_style:'.rawurlencode('400 regular:400:normal')
			// this will override 'settings'. 'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900 bold italic:900:italic'),
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
			'dependency' => array(
				'element' => 'use_theme_fonts',
				'value_not_equal_to' => 'yes',
			),
			// 'description' => __( '', 'blackfyre' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'blackfyre' ),
			'param_name' => 'css',
			// 'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' ),
			'group' => __( 'Design Options', 'blackfyre' )
		)
	),
) );

// Note this shortcodes integrates custom heading!
include_once "shortcode-vc-btn.php";

include_once "shortcode-vc-cta3.php";

$post_types = get_post_types( array() );
$post_types_list = array();
if ( is_array( $post_types ) && ! empty( $post_types ) ) {
	foreach ( $post_types as $post_type ) {
		if ( $post_type !== 'revision' && $post_type !== 'nav_menu_item'/* && $post_type !== 'attachment'*/ ) {
			$label = ucfirst( $post_type );
			$post_types_list[] = array( $post_type, __( $label, 'blackfyre' ) );
		}
	}
}
$post_types_list[] = array( 'custom', __( 'Custom query', 'blackfyre' ) );
$post_types_list[] = array( 'ids', __( 'List of IDs', 'blackfyre' ) );

// $taxonomies_list = array();
$taxonomies_for_filter = array();

if ( 'vc_edit_form' === vc_post_param( 'action' ) ) {
	$vc_taxonomies_types = vc_taxonomies_types();
	if ( is_array( $vc_taxonomies_types ) && ! empty( $vc_taxonomies_types ) ) {
		foreach ( $vc_taxonomies_types as $t => $data ) {
			if ( $t !== 'post_format' && is_object( $data ) ) {
				$taxonomies_for_filter[ $data->labels->name ] = $t;
			}
		}
	}
}

/*
$grid_cols_list = array();
for( $i=2; $i<=12; $i++ ) {
	$grid_cols_list[__( $i . ' columns', 'blackfyre' )] = (string)$i;
}*/
$grid_cols_list = array(
	//__( '12 items per row') => 1,
	array( 'label' => "6", 'value' => 2 ),
	array( 'label' => "4", 'value' => 3 ),
	array( 'label' => "3", 'value' => 4 ),
	array( 'label' => "2", 'value' => 6 ),
	array( 'label' => "1", 'value' => 12 ),
);
$grid_params = array(

	array(
		'type' => 'dropdown',
		'heading' => __( 'Data source', 'blackfyre' ),
		'param_name' => 'post_type',
		'value' => $post_types_list,
		'description' => __( 'Select content type for your grid.', 'blackfyre' )
	),
	array(
		'type' => 'autocomplete',
		'heading' => __( 'Include only', 'blackfyre' ),
		'param_name' => 'include',
		'description' => __( 'Add posts, pages, etc. by title.', 'blackfyre' ),
		'settings' => array(
			'multiple' => true,
			'sortable' => true,
			'groups' => true,
		),
		'dependency' => array(
			'element' => 'post_type',
			'value' => array( 'ids' ),
			//'callback' => 'vc_grid_include_dependency_callback',
		),
	),
	// Custom query tab
	array(
		'type' => 'textarea_safe',
		'heading' => __( 'Custom query', 'blackfyre' ),
		'param_name' => 'custom_query',
		'description' => __( 'Build custom query according to <a href="http://codex.wordpress.org/Function_Reference/query_posts">WordPress Codex</a>.', 'blackfyre' ),
		'dependency' => array(
			'element' => 'post_type',
			'value' => array( 'custom' ),
		),
	),
	array(
		'type' => 'autocomplete',
		'heading' => __( 'Narrow data source', 'blackfyre' ),
		'param_name' => 'taxonomies',
		'settings' => array(
			'multiple' => true,
			// is multiple values allowed? default false
			// 'sortable' => true, // is values are sortable? default false
			'min_length' => 1,
			// min length to start search -> default 2
			// 'no_hide' => true, // In UI after select doesn't hide an select list, default false
			'groups' => true,
			// In UI show results grouped by groups, default false
			'unique_values' => true,
			// In UI show results except selected. NB! You should manually check values in backend, default false
			'display_inline' => true,
			// In UI show results inline view, default false (each value in own line)
			'delay' => 500,
			// delay for search. default 500
			'auto_focus' => true,
			// auto focus input, default true
			// 'values' => $taxonomies_list,
		),
		'param_holder_class' => 'vc_not-for-custom',
		'description' => __( 'Enter categories, tags or custom taxonomies.', 'blackfyre' ),
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
		),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Total items', 'blackfyre' ),
		'param_name' => 'max_items',
		'value' => 10, // default value
		'param_holder_class' => 'vc_not-for-custom',
		'description' => __( 'Set max limit for items in grid or enter -1 to display all (limited to 1000).', 'blackfyre' ),
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
		),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Display Style', 'blackfyre' ),
		'param_name' => 'style',
		'value' => array(
			__( 'Show all', 'blackfyre' ) => 'all',
			__( 'Load more button', 'blackfyre' ) => 'load-more',
			__( 'Lazy loading', 'blackfyre' ) => 'lazy',
			__( 'Pagination', 'blackfyre' ) => 'pagination',
		),
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'custom' ),
		),
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'description' => __( 'Select display style for grid.', 'blackfyre' ),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Items per page', 'blackfyre' ),
		'param_name' => 'items_per_page',
		'description' => __( 'Number of items to show per page.', 'blackfyre' ),
		'value' => '10',
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'lazy', 'load-more', 'pagination' ),
		),
		'edit_field_class' => 'vc_col-sm-6 vc_column',
	),
	array(
		'type' => 'checkbox',
		'heading' => __( 'Show filter', 'blackfyre' ),
		'param_name' => 'show_filter',
		'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		'description' => __( 'Append filter to grid.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Grid elements per row', 'blackfyre' ),
		'param_name' => 'element_width',
		'value' => $grid_cols_list,
		'std' => '4',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'description' => __( 'Select number of single grid elements per row.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Gap', 'blackfyre' ),
		'param_name' => 'gap',
		'value' => array(
			__( '0px', 'blackfyre' ) => '0',
			__( '1px', 'blackfyre' ) => '1',
			__( '2px', 'blackfyre' ) => '2',
			__( '3px', 'blackfyre' ) => '3',
			__( '4px', 'blackfyre' ) => '4',
			__( '5px', 'blackfyre' ) => '5',
			__( '10px', 'blackfyre' ) => '10',
			__( '15px', 'blackfyre' ) => '15',
			__( '20px', 'blackfyre' ) => '20',
			__( '25px', 'blackfyre' ) => '25',
			__( '30px', 'blackfyre' ) => '30',
			__( '35px', 'blackfyre' ) => '35',
		),
		'std' => '30',
		'description' => __( 'Select gap between grid elements.', 'blackfyre' ),
		'edit_field_class' => 'vc_col-sm-6 vc_column',
	),
	// Data settings
	array(
		'type' => 'dropdown',
		'heading' => __( 'Order by', 'blackfyre' ),
		'param_name' => 'orderby',
		'value' => array(
			__( 'Date', 'blackfyre' ) => 'date',
			__( 'Order by post ID', 'blackfyre' ) => 'ID',
			__( 'Author', 'blackfyre' ) => 'author',
			__( 'Title', 'blackfyre' ) => 'title',
			__( 'Last modified date', 'blackfyre' ) => 'modified',
			__( 'Post/page parent ID', 'blackfyre' ) => 'parent',
			__( 'Number of comments', 'blackfyre' ) => 'comment_count',
			__( 'Menu order/Page Order', 'blackfyre' ) => 'menu_order',
			__( 'Meta value', 'blackfyre' ) => 'meta_value',
			__( 'Meta value number', 'blackfyre' ) => 'meta_value_num',
			// __('Matches same order you passed in via the 'include' parameter.', 'blackfyre') => 'post__in'
			__( 'Random order', 'blackfyre' ) => 'rand',
		),
		'description' => __( 'Select order type. If "Meta value" or "Meta value Number" is chosen then meta key is required.', 'blackfyre' ),
		'group' => __( 'Data Settings', 'blackfyre' ),
		'param_holder_class' => 'vc_grid-data-type-not-ids',
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
		),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Sorting', 'blackfyre' ),
		'param_name' => 'order',
		'group' => __( 'Data Settings', 'blackfyre' ),
		'value' => array(
			__( 'Descending', 'blackfyre' ) => 'DESC',
			__( 'Ascending', 'blackfyre' ) => 'ASC',
		),
		'param_holder_class' => 'vc_grid-data-type-not-ids',
		'description' => __( 'Select sorting order.', 'blackfyre' ),
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
		),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Meta key', 'blackfyre' ),
		'param_name' => 'meta_key',
		'description' => __( 'Input meta key for grid ordering.', 'blackfyre' ),
		'group' => __( 'Data Settings', 'blackfyre' ),
		'param_holder_class' => 'vc_grid-data-type-not-ids',
		'dependency' => array(
			'element' => 'orderby',
			'value' => array( 'meta_value', 'meta_value_num' ),
		),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Offset', 'blackfyre' ),
		'param_name' => 'offset',
		'description' => __( 'Number of grid elements to displace or pass over.', 'blackfyre' ),
		'group' => __( 'Data Settings', 'blackfyre' ),
		'param_holder_class' => 'vc_grid-data-type-not-ids',
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
		),
	),
	array(
		'type' => 'autocomplete',
		'heading' => __( 'Exclude', 'blackfyre' ),
		'param_name' => 'exclude',
		'description' => __( 'Exclude posts, pages, etc. by title.', 'blackfyre' ),
		'group' => __( 'Data Settings', 'blackfyre' ),
		'settings' => array(
			'multiple' => true,
		),
		'param_holder_class' => 'vc_grid-data-type-not-ids',
		'dependency' => array(
			'element' => 'post_type',
			'value_not_equal_to' => array( 'ids', 'custom' ),
			'callback' => 'vc_grid_exclude_dependency_callback',
		),
	),
	//Filter tab
	array(
		'type' => 'dropdown',
		'heading' => __( 'Filter by', 'blackfyre' ),
		'param_name' => 'filter_source',
		'value' => $taxonomies_for_filter,
		'group' => __( 'Filter', 'blackfyre' ),
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
		),
		'description' => __( 'Select filter source.', 'blackfyre' ),
	),
	array(
		'type' => 'autocomplete',
		'heading' => __( 'Exclude from filter list', 'blackfyre' ),
		'param_name' => 'exclude_filter',
		'settings' => array(
			'multiple' => true,
			// is multiple values allowed? default false
			// 'sortable' => true, // is values are sortable? default false
			'min_length' => 1,
			// min length to start search -> default 2
			// 'no_hide' => true, // In UI after select doesn't hide an select list, default false
			'groups' => true,
			// In UI show results grouped by groups, default false
			'unique_values' => true,
			// In UI show results except selected. NB! You should manually check values in backend, default false
			'display_inline' => true,
			// In UI show results inline view, default false (each value in own line)
			'delay' => 500,
			// delay for search. default 500
			'auto_focus' => true,
			// auto focus input, default true
			// 'values' => $taxonomies_list,
		),
		'description' => __( 'Enter categories, tags won\'t be shown in the filters list', 'blackfyre' ),
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
			'callback' => 'vcGridFilterExcludeCallBack'
		),
		'group' => __( 'Filter', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Style', 'blackfyre' ),
		'param_name' => 'filter_style',
		'value' => array(
			__( 'Rounded', 'blackfyre' ) => 'default',
			__( 'Less Rounded', 'blackfyre' ) => 'default-less-rounded',
			__( 'Border', 'blackfyre' ) => 'bordered',
			__( 'Rounded Border', 'blackfyre' ) => 'bordered-rounded',
			__( 'Less Rounded Border', 'blackfyre' ) => 'bordered-rounded-less',
			__( 'Filled', 'blackfyre' ) => 'filled',
			__( 'Rounded Filled', 'blackfyre' ) => 'filled-rounded',
			__( 'Dropdown', 'blackfyre' ) => 'dropdown',
		),
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
		),
		'group' => __( 'Filter', 'blackfyre' ),
		'description' => __( 'Select filter display style.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Alignment', 'blackfyre' ),
		'param_name' => 'filter_align',
		'value' => array(
			__( 'Center', 'blackfyre' ) => 'center',
			__( 'Left', 'blackfyre' ) => 'left',
			__( 'Right', 'blackfyre' ) => 'right',
		),
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
		),
		'group' => __( 'Filter', 'blackfyre' ),
		'description' => __( 'Select filter alignment.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Color', 'blackfyre' ),
		'param_name' => 'filter_color',
		'value' => getVcShared( 'colors' ),
		'std' => 'grey',
		'param_holder_class' => 'vc_colored-dropdown',
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
		),
		'group' => __( 'Filter', 'blackfyre' ),
		'description' => __( 'Select filter color.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Filter size', 'blackfyre' ),
		'param_name' => 'filter_size',
		'value' => getVcShared( 'sizes' ),
		'std' => 'md',
		'description' => __( 'Select filter size.', 'blackfyre' ),
		'dependency' => array(
			'element' => 'show_filter',
			'value' => array( 'yes' ),
		),
		'group' => __( 'Filter', 'blackfyre' ),
	),
	// Load more btn
	array(
		'type' => 'dropdown',
		'heading' => __( 'Button style', 'blackfyre' ),
		'param_name' => 'button_style',
		'value' => getVcShared( 'button styles' ),
		'param_holder_class' => 'vc_colored-dropdown',
		'group' => __( 'Load More Button', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'load-more' ),
		),
		'description' => __( 'Select button style.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Button color', 'blackfyre' ),
		'param_name' => 'button_color',
		'value' => getVcShared( 'colors' ),
		'param_holder_class' => 'vc_colored-dropdown',
		'group' => __( 'Load More Button', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'load-more' ),
		),
		'description' => __( 'Select button color.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Button size', 'blackfyre' ),
		'param_name' => 'button_size',
		'value' => getVcShared( 'sizes' ),
		'std' => 'md',
		'description' => __( 'Select button size.', 'blackfyre' ),
		'group' => __( 'Load More Button', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'load-more' ),
		),
	),
	// Paging controls
	array(
		'type' => 'dropdown',
		'heading' => __( 'Arrows design', 'blackfyre' ),
		'param_name' => 'arrows_design',
		'value' => array(
			__( 'None', 'blackfyre' ) => 'none',
			__( 'Simple', 'blackfyre' ) => 'vc_arrow-icon-arrow_01_left',
			__( 'Simple Circle Border', 'blackfyre' ) => 'vc_arrow-icon-arrow_02_left',
			__( 'Simple Circle', 'blackfyre' ) => 'vc_arrow-icon-arrow_03_left',
			__( 'Simple Square', 'blackfyre' ) => 'vc_arrow-icon-arrow_09_left',
			__( 'Simple Square Rounded', 'blackfyre' ) => 'vc_arrow-icon-arrow_12_left',
			__( 'Simple Rounded', 'blackfyre' ) => 'vc_arrow-icon-arrow_11_left',
			__( 'Rounded', 'blackfyre' ) => 'vc_arrow-icon-arrow_04_left',
			__( 'Rounded Circle Border', 'blackfyre' ) => 'vc_arrow-icon-arrow_05_left',
			__( 'Rounded Circle', 'blackfyre' ) => 'vc_arrow-icon-arrow_06_left',
			__( 'Rounded Square', 'blackfyre' ) => 'vc_arrow-icon-arrow_10_left',
			__( 'Simple Arrow', 'blackfyre' ) => 'vc_arrow-icon-arrow_08_left',
			__( 'Simple Rounded Arrow', 'blackfyre' ) => 'vc_arrow-icon-arrow_07_left',

		),
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
		'description' => __( 'Select design for arrows.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Arrows position', 'blackfyre' ),
		'param_name' => 'arrows_position',
		'value' => array(
			__( 'Inside Wrapper', 'blackfyre' ) => 'inside',
			__( 'Outside Wrapper', 'blackfyre' ) => 'outside',
		),
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'arrows_design',
			'value_not_equal_to' => array( 'none' ), // New dependency
		),
		'description' => __( 'Arrows will be displayed inside or outside grid.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Arrows color', 'blackfyre' ),
		'param_name' => 'arrows_color',
		'value' => getVcShared( 'colors' ),
		'param_holder_class' => 'vc_colored-dropdown',
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'arrows_design',
			'value_not_equal_to' => array( 'none' ), // New dependency
		),
		'description' => __( 'Select color for arrows.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Pagination style', 'blackfyre' ),
		'param_name' => 'paging_design',
		'value' => array(
			__( 'None', 'blackfyre' ) => 'none',
			__( 'Square Dots', 'blackfyre' ) => 'square_dots',
			__( 'Radio Dots', 'blackfyre' ) => 'radio_dots',
			__( 'Point Dots', 'blackfyre' ) => 'point_dots',
			__( 'Fill Square Dots', 'blackfyre' ) => 'fill_square_dots',
			__( 'Rounded Fill Square Dots', 'blackfyre' ) => 'round_fill_square_dots',
			__( 'Pagination Default', 'blackfyre' ) => 'pagination_default',
			__( 'Outline Default Dark', 'blackfyre' ) => 'pagination_default_dark',
			__( 'Outline Default Light', 'blackfyre' ) => 'pagination_default_light',
			__( 'Pagination Rounded', 'blackfyre' ) => 'pagination_rounded',
			__( 'Outline Rounded Dark', 'blackfyre' ) => 'pagination_rounded_dark',
			__( 'Outline Rounded Light', 'blackfyre' ) => 'pagination_rounded_light',
			__( 'Pagination Square', 'blackfyre' ) => 'pagination_square',
			__( 'Outline Square Dark', 'blackfyre' ) => 'pagination_square_dark',
			__( 'Outline Square Light', 'blackfyre' ) => 'pagination_square_light',
			__( 'Pagination Rounded Square', 'blackfyre' ) => 'pagination_rounded_square',
			__( 'Outline Rounded Square Dark', 'blackfyre' ) => 'pagination_rounded_square_dark',
			__( 'Outline Rounded Square Light', 'blackfyre' ) => 'pagination_rounded_square_light',
			__( 'Stripes Dark', 'blackfyre' ) => 'pagination_stripes_dark',
			__( 'Stripes Light', 'blackfyre' ) => 'pagination_stripes_light',
		),
		'std' => 'radio_dots',
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
		'description' => __( 'Select pagination style.', 'blackfyre' ),
	),
	array(
		'type' => 'dropdown',
		'heading' => __( 'Pagination color', 'blackfyre' ),
		'param_name' => 'paging_color',
		'value' => getVcShared( 'colors' ),
		'std' => 'grey',
		'param_holder_class' => 'vc_colored-dropdown',
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'paging_design',
			'value_not_equal_to' => array( 'none' ), // New dependency
		),
		'description' => __( 'Select pagination color.', 'blackfyre' ),
	),
	array(
		'type' => 'checkbox',
		'heading' => __( 'Loop pages?', 'blackfyre' ),
		'param_name' => 'loop',
		'description' => __( 'Allow items to be repeated in infinite loop (carousel).', 'blackfyre' ),
		'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
	),
	array(
		'type' => 'textfield',
		'heading' => __( 'Autoplay delay', 'blackfyre' ),
		'param_name' => 'autoplay',
		'value' => '-1',
		'description' => __( 'Enter value in seconds. Set -1 to disable autoplay.', 'blackfyre' ),
		'group' => __( 'Pagination', 'blackfyre' ),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
	),
	array(
		'type' => 'animation_style',
		'heading' => __( 'Animation In', 'blackfyre' ),
		'param_name' => 'paging_animation_in',
		'group' => __( 'Pagination', 'blackfyre' ),
		'settings' => array(
			'type' => array( 'in', 'other' ),
		),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
		'description' => __( 'Select "animation in" for page transition.', 'blackfyre' ),
	),
	array(
		'type' => 'animation_style',
		'heading' => __( 'Animation Out', 'blackfyre' ),
		'param_name' => 'paging_animation_out',
		'group' => __( 'Pagination', 'blackfyre' ),
		'settings' => array(
			'type' => array( 'out' ),
		),
		'dependency' => array(
			'element' => 'style',
			'value' => array( 'pagination' ),
		),
		'description' => __( 'Select "animation out" for page transition.', 'blackfyre' ),
	),
	/*
	array(
		'type' => 'dropdown',
		'heading' => __( 'Element style', 'blackfyre' ),
		'param_name' => 'content',
		'value' => array(
			__( 'None', 'blackfyre' ) => 'none',
			__( 'Fade in', 'blackfyre' ) => 'fadein',
			__( 'Scale in', 'blackfyre' ) => 'imageScale',
			__( 'Slide from bottom', 'blackfyre') => 'slideBottom',
			__( 'Slide from right', 'blackfyre' ) => 'slideFromRight',
			__( 'Flip mode', 'blackfyre' ) => 'flipCenter',
			__( 'imageScaleRotate', 'blackfyre') => 'imageScaleRotate',
			__('Blur in' , 'blackfyre') => 'blurIn',
			__('Blur border in' , 'blackfyre') => 'blurBorderIn',
			__( 'Horizontal', 'blackfyre' ) => 'horizontal'

		),
		'group' => __( 'Item Design', 'blackfyre' ),
	),
	*/
	array(
		'type' => 'vc_grid_item',
		'heading' => __( 'Grid element template', 'blackfyre' ),
		'param_name' => 'item',
		'description' => sprintf( __( '%sCreate new%s template or %smodify selected%s. Predefined templates will be cloned.', 'blackfyre' ), '<a href="'
		                                                                                                                                       . esc_url( admin_url( 'post-new.php?post_type=vc_grid_item' ) ) . '" target="_blank">', '</a>', '<a href="#" target="_blank" data-vc-grid-item="edit_link">', '</a>' ),
		'group' => __( 'Item Design', 'blackfyre' ),
		'value' => 'none',
	),
	array(
		'type' => 'vc_grid_id',
		'param_name' => 'grid_id',
	)
);
vc_map( array(
	'name' => __( 'Post Grid', 'blackfyre' ),
	'base' => 'vc_basic_grid',
	'icon' => 'icon-wpb-application-icon-large',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Posts, pages or custom posts in grid', 'blackfyre' ),
	'params' => $grid_params
) );
$media_grid_params = array(
	array(
		'type' => 'attach_images',
		'heading' => __( 'Images', 'blackfyre' ),
		'param_name' => 'include',
		'description' => __( 'Select images from media library.', 'blackfyre' )
	),
	$grid_params[5],
	$grid_params[6],
	$grid_params[8],
	$grid_params[9],
	// $grid_params[20], filter size
	$grid_params[21],
	$grid_params[22],
	$grid_params[23],
	$grid_params[24],
	$grid_params[25],
	$grid_params[26],
	$grid_params[27],
	$grid_params[28],
	$grid_params[29],
	$grid_params[30],
	$grid_params[31],
	array(
		'type' => 'vc_grid_item',
		'heading' => __( 'Grid element template', 'blackfyre' ),
		'param_name' => 'item',
		'description' => sprintf( __( '%sCreate new%s template or %smodify selected%s. Predefined templates will be cloned.', 'blackfyre' ), '<a href="'
		                                                                                                                                       . esc_url( admin_url( 'post-new.php?post_type=vc_grid_item' ) ) . '" target="_blank">', '</a>', '<a href="#" target="_blank" data-vc-grid-item="edit_link">', '</a>' ),
		'group' => __( 'Item Design', 'blackfyre' ),
		'value' => 'mediaGrid_Default',
	),
	array(
		'type' => 'vc_grid_id',
		'param_name' => 'grid_id',
	)
);
$media_grid_params[4]['std'] = '5';
vc_map( array(
	'name' => __( 'Media Grid', 'blackfyre' ),
	'base' => 'vc_media_grid',
	'icon' => 'vc_icon-vc-media-grid',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Media grid from Media Library', 'blackfyre' ),
	'params' => $media_grid_params,
) );
$masonry_grid_params = $grid_params;
unset( $masonry_grid_params[5]['value'][ __( 'Pagination', 'blackfyre' ) ] );
$masonry_grid_params[33]['value'] = 'masonryGrid_Default';
vc_map( array(
	'name' => __( 'Post Masonry Grid', 'blackfyre' ),
	'base' => 'vc_masonry_grid',
	'icon' => 'vc_icon-vc-masonry-grid',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Posts, pages or custom posts in masonry grid', 'blackfyre' ),
	'params' => $masonry_grid_params
) );
$masonry_media_grid_params = $media_grid_params;
$masonry_media_grid_params[16]['value'] = 'masonryMedia_Default';
unset( $masonry_media_grid_params[1]['value'][ __( 'Pagination', 'blackfyre' ) ] );
vc_map( array(
	'name' => __( 'Masonry Media Grid', 'blackfyre' ),
	'base' => 'vc_masonry_media_grid',
	'icon' => 'vc_icon-vc-masonry-media-grid',
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Masonry media grid from Media Library', 'blackfyre' ),
	'params' => $masonry_media_grid_params
) );
/*
vc_map( array(
	'name' => __( 'Grid', 'blackfyre' ),
	'base' => 'vc_grid_old',
	'icon' => 'icon-wpb-ui-grid',
	'show_settings_on_create' => true,
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'All in one grid element', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'params_preset',
			'heading' => __( 'Source', 'blackfyre' ),
			'param_name' => 'source',
			'options' => array(),
			'description' => __( 'Predefined sources', 'blackfyre' ),
		),
		array(
			'type' => 'params_preset',
			'heading' => __( 'Design', 'blackfyre' ),
			'param_name' => 'design',
			'options' => array(),
			'description' => __( 'Predefined sources', 'blackfyre' ),
		),
		// Design options
		array(
			'type' => 'dropdown',
			'heading' => __( 'Layout', 'blackfyre' ),
			'param_name' => 'layout',
			'value' => array(
				__( 'Basic', 'blackfyre' ) => 'basic',
				__( 'Masonry', 'blackfyre' ) => 'masonry',
				//__( 'Packery', 'blackfyre' ) => 'packery',
			),
			'group' => __( 'Design', 'blackfyre' ),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Grid in full width', 'blackfyre' ),
			'param_name' => 'full_width',
			'value' => array(
				__( 'Yes please', 'blackfyre' ) => 'yes',
			),
			'group' => __( 'Design', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Element width', 'blackfyre' ),
			'param_name' => 'element_width',
			'value' => $grid_cols_list,
			'std' => '4',
			'group' => __( 'Design', 'blackfyre' )
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Gap', 'blackfyre' ),
			'param_name' => 'gap',
			'value' => array(
				__( '0px', 'blackfyre' ) => '0',
				__( '1px', 'blackfyre' ) => '1',
				__( '2px', 'blackfyre' ) => '2',
				__( '3px', 'blackfyre' ) => '3',
				__( '4px', 'blackfyre' ) => '4',
				__( '5px', 'blackfyre' ) => '5',
				__( '10px', 'blackfyre' ) => '10',
				__( '15px', 'blackfyre' ) => '15',
				__( '20px', 'blackfyre' ) => '20',
				__( '25px', 'blackfyre' ) => '25',
				__( '30px', 'blackfyre' ) => '30',
				__( '35px', 'blackfyre' ) => '35',
			),
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Design', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Filter', 'blackfyre' ),
			'param_name' => 'filter',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Default', 'blackfyre' ) => 'default',
				__( 'Bordered', 'blackfyre' ) => 'bordered',
				__( 'Filled', 'blackfyre' ) => 'filled',
				__( 'Dropdown', 'blackfyre' ) => 'dropdown',
			),
			'group' => __( 'Design', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Filter align', 'blackfyre' ),
			'param_name' => 'filter_align',
			'value' => array(
				__( 'Center', 'blackfyre' ) => 'center',
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
			),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'filter',
				'value_not_equal_to' => array( 'none', '' ), // New dependency
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Filter color', 'blackfyre' ),
			'param_name' => 'filter_color',
			'value' => getVcShared( 'colors' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'filter',
				'value_not_equal_to' => array( 'none', '' ), // New dependency
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Grid Display Style', 'blackfyre' ),
			'param_name' => 'style',
			'value' => array(
				__( 'Show all', 'blackfyre' ) => 'all',
				__( 'Lazy loading', 'blackfyre' ) => 'lazy',
				__( 'Load more button', 'blackfyre' ) => 'load-more',
				__( 'Pagination', 'blackfyre' ) => 'pagination',
			),
			'group' => __( 'Design', 'blackfyre' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Posts per page', 'blackfyre' ),
			'param_name' => 'posts_per_page',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Design', 'blackfyre' ),
			'value' => '10',
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'lazy', 'load-more', 'pagination' ),
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button style', 'blackfyre' ),
			'param_name' => 'button_style',
			'value' => getVcShared( 'button styles' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'load-more' ),
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button color', 'blackfyre' ),
			'param_name' => 'button_color',
			'value' => getVcShared( 'colors' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'load-more' ),
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Arrows design', 'blackfyre' ),
			'param_name' => 'arrows_design',
			'value' => array(
				__( 'None', 'blackfyre' ) => 'none',
				__( 'fa-angle', 'blackfyre' ) => 'fa fa-angle-left',
				__( 'fa-arrow-circle', 'blackfyre' ) => 'fa fa-arrow-circle-left',
				__( 'fa-arrow', 'blackfyre' ) => 'fa fa-arrow-left',
				__( 'fa-caret', 'blackfyre' ) => 'fa fa-caret-left',
				__( 'fa-chevron-circle', 'blackfyre' ) => 'fa fa-chevron-circle-left',
				__( 'fa-chevron', 'blackfyre' ) => 'fa fa-chevron-left',
				__( 'fa-arrow-circle-o', 'blackfyre' ) => 'fa fa-arrow-circle-o-left',
				__( 'fa-angle-double', 'blackfyre' ) => 'fa fa-angle-double-left ',
			),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Arrows position', 'blackfyre' ),
			'param_name' => 'arrows_position',
			'value' => array(
				__( 'Inside Wrapper', 'blackfyre' ) => 'inside',
				__( 'Outside Wrapper', 'blackfyre' ) => 'outside',
			),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'arrows_design',
				'value_not_equal_to' => array( 'none' ), // New dependency
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Arrows color', 'blackfyre' ),
			'param_name' => 'arrows_color',
			'value' => getVcShared( 'colors' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'arrows_design',
				'value_not_equal_to' => array( 'none' ), // New dependency
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Paging design', 'blackfyre' ),
			'param_name' => 'paging_design',
			'value' => array(
				__( 'None', 'blackfyre' ) => 'none',
				__( 'Square Dots', 'blackfyre' ) => 'square_dots',
				__( 'Radio Dots', 'blackfyre' ) => 'radio_dots',
				__( 'Point Dots', 'blackfyre' ) => 'point_dots',
				__( 'Fill Square Dots', 'blackfyre' ) => 'fill_square_dots',
				__( 'Rounded Fill Square Dots', 'blackfyre' ) => 'round_fill_square_dots',
				__( 'Pagination Default', 'blackfyre' ) => 'pagination_default',
				__( 'Pagination Rounded', 'blackfyre' ) => 'pagination_rounded',
				__( 'Pagination Square', 'blackfyre' ) => 'pagination_square',
				__( 'Pagination Rounded Square', 'blackfyre' ) => 'pagination_rounded_square',
			),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Paging color', 'blackfyre' ),
			'param_name' => 'paging_color',
			'value' => getVcShared( 'colors' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'paging_design',
				'value_not_equal_to' => array( 'none' ), // New dependency
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Loop', 'blackfyre' ),
			'param_name' => 'loop',
			'description' => __( '', 'blackfyre' ),
			'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Autoplay time', 'blackfyre' ),
			'param_name' => 'autoplay',
			'value' => '-1',
			'description' => __( 'Default -1. Disabled autoplay.', 'blackfyre' ),
			'group' => __( 'Design', 'blackfyre' ),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		array(
			'type' => 'animation_style',
			'heading' => __( 'Animation In', 'blackfyre' ),
			'param_name' => 'paging_animation_in',
			'group' => __( 'Design', 'blackfyre' ),
			'settings' => array(
				'type' => array( 'in', 'other' ),
			),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		array(
			'type' => 'animation_style',
			'heading' => __( 'Animation Out', 'blackfyre' ),
			'param_name' => 'paging_animation_out',
			'group' => __( 'Design', 'blackfyre' ),
			'settings' => array(
				'type' => array( 'out', 'other' ),
			),
			'dependency' => array(
				'element' => 'style',
				'value' => array( 'pagination' ),
			),
		),
		// Source options
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content', 'blackfyre' ),
			'param_name' => 'post_type',
			'value' => $post_types_list,
			'group' => __( 'Source', 'blackfyre' ),
		),
		array(
			'type' => 'textarea_safe',
			'heading' => __( 'Custom query', 'blackfyre' ),
			'param_name' => 'custom_query',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'dependency' => array(
				'element' => 'post_type',
				'value' => array( 'custom' ),
				'callback' => 'vc_grid_custom_query_dependency',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Filter source', 'blackfyre' ),
			'param_name' => 'filter_source',
			'value' => $taxonomies_for_filter,
			'group' => __( 'Source', 'blackfyre' ),
			'param_holder_class' => 'vc_not-for-custom',
		),
		array(
			'type' => 'autocomplete',
			'heading' => __( 'Taxonomies', 'blackfyre' ),
			'param_name' => 'taxonomies',
			'settings' => array(
				'multiple' => true,
				// is multiple values allowed? default false
				// 'sortable' => true, // is values are sortable? default false
				'min_length' => 1,
				// min length to start search -> default 2
				// 'no_hide' => true, // In UI after select doesn't hide an select list, default false
				'groups' => true,
				// In UI show results grouped by groups, default false
				'unique_values' => true,
				// In UI show results except selected. NB! You should manually check values in backend, default false
				'display_inline' => true,
				// In UI show results inline view, default false (each value in own line)
				'delay' => 500,
				// delay for search. default 500
				'auto_focus' => true,
				// auto focus input, default true
				'values' => $taxonomies_list,
			),
			'group' => __( 'Source', 'blackfyre' ),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'orderby',
			'value' => array(
				__( 'Date', 'blackfyre' ) => 'date',
				__( 'Order by post id', 'blackfyre' ) => 'ID',
				__( 'Author', 'blackfyre' ) => 'author',
				__( 'Title', 'blackfyre' ) => 'title',
				__( 'Last modified date', 'blackfyre' ) => 'modified',
				__( 'Post/page parent id', 'blackfyre' ) => 'parent',
				__( 'Number of comments', 'blackfyre' ) => 'comment_count',
				__( 'Menu order/Order by Page Order', 'blackfyre' ) => 'menu_order',
				__( 'Meta value', 'blackfyre' ) => 'meta_value',
				__( 'Meta value number', 'blackfyre' ) => 'meta_value_num',
				// __('Matches same order you passed in via the 'include' parameter.', 'blackfyre') => 'post__in'
				__( 'Random order', 'blackfyre' ) => 'rand',
			),
			'description' => __( 'Note that meta key must also be present if "Meta value" or "Meta value Number" is set.', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Order by', 'blackfyre' ),
			'param_name' => 'order',
			'group' => __( 'Source', 'blackfyre' ),
			'value' => array(
				__( 'Ascending', 'blackfyre' ) => 'ASC',
				__( 'Descending', 'blackfyre' ) => 'DSC',
			),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Meta key', 'blackfyre' ),
			'param_name' => 'meta_key',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'dependency' => array(
				'element' => 'orderby',
				'value' => array( 'meta_value', 'meta_value_num' ),
			),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Limit', 'blackfyre' ),
			'param_name' => 'limit',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'param_holder_class' => 'vc_not-for-custom'

		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Offset', 'blackfyre' ),
			'param_name' => 'offset',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'autocomplete',
			'heading' => __( 'Include', 'blackfyre' ),
			'param_name' => 'include',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'settings' => array(
				'multiple' => true,
				// is multiple values allowed? default false
				// 'sortable' => true, // is values are sortable? default false
				'min_length' => 2,
				// min length to start search -> default 2
				// 'no_hide' => true, // In UI after select doesn't hide an select list, default false
				'groups' => true,
				// In UI show results grouped by groups, default false
				'unique_values' => true,
				// In UI show results except selected. NB! You should manually check values in backend, default false
				'display_inline' => true,
				// In UI show results inline view, default false (each value in own line)
				'delay' => 500,
				// delay for search. default 500
				'auto_focus' => true,
				// auto focus input, default true
			),
			'dependency' => array(
				'element' => 'post_type',
				'not_empty' => true,
				'callback' => 'vc_grid_include_dependency_callback',
			),
			'param_holder_class' => 'vc_not-for-custom',

		),
		array(
			'type' => 'autocomplete',
			'heading' => __( 'Exclude', 'blackfyre' ),
			'param_name' => 'exclude',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Source', 'blackfyre' ),
			'settings' => array(
				'multiple' => true,
				// is multiple values allowed? default false
				// 'sortable' => true, // is values are sortable? default false
				'min_length' => 2,
				// min length to start search -> default 2
				// 'no_hide' => true, // In UI after select doesn't hide an select list, default false
				'groups' => true,
				// In UI show results grouped by groups, default false
				'unique_values' => true,
				// In UI show results except selected. NB! You should manually check values in backend, default false
				'display_inline' => true,
				// In UI show results inline view, default false (each value in own line)
				'delay' => 500,
				// delay for search. default 500
				'auto_focus' => true,
				// auto focus input, default true
			),
			'dependency' => array(
				'element' => 'post_type',
				'not_empty' => true,
				'callback' => 'vc_grid_exclude_dependency_callback',
			),
			'param_holder_class' => 'vc_not-for-custom',
		),
		array(
			'type' => 'vc_grid_element',
			'heading' => __( 'Builder', 'blackfyre' ),
			'param_name' => 'content',
			'description' => __( '', 'blackfyre' ),
			'group' => __( 'Item Design', 'blackfyre' ),
		),
	),
) );
*/

add_filter( 'vc_autocomplete_vc_basic_grid_include_callback',
	'vc_include_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_vc_basic_grid_include_render',
	'vc_include_field_render', 10, 1 ); // Render exact product. Must return an array (label,value)
add_filter( 'vc_autocomplete_vc_masonry_grid_include_callback',
	'vc_include_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_vc_masonry_grid_include_render',
	'vc_include_field_render', 10, 1 ); // Render exact product. Must return an array (label,value)


// Narrow data taxonomies
add_filter( 'vc_autocomplete_vc_basic_grid_taxonomies_callback',
	'vc_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_vc_basic_grid_taxonomies_render',
	'vc_autocomplete_taxonomies_field_render', 10, 1 );

add_filter( 'vc_autocomplete_vc_masonry_grid_taxonomies_callback',
	'vc_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_vc_masonry_grid_taxonomies_render',
	'vc_autocomplete_taxonomies_field_render', 10, 1 );

// Narrow data taxonomies for exclude_filter
add_filter( 'vc_autocomplete_vc_basic_grid_exclude_filter_callback',
	'vc_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_vc_basic_grid_exclude_filter_render',
	'vc_autocomplete_taxonomies_field_render', 10, 1 );

add_filter( 'vc_autocomplete_vc_masonry_grid_exclude_filter_callback',
	'vc_autocomplete_taxonomies_field_search', 10, 1 );
add_filter( 'vc_autocomplete_vc_masonry_grid_exclude_filter_render',
	'vc_autocomplete_taxonomies_field_render', 10, 1 );
/**
 * @since 4.5.2
 *
 * @param $term
 *
 * @return array|bool
 */
function vc_autocomplete_taxonomies_field_render( $term ) {
	$vc_taxonomies_types = vc_taxonomies_types();
	$terms = get_terms( array_keys( $vc_taxonomies_types ), array(
		'include' => array( $term['value'] ),
		'hide_empty' => false,
	) );
	$data = false;
	if ( is_array( $terms ) && 1 === count( $terms ) ) {
		$term = $terms[0];
		$data = vc_get_term_object( $term );
	}

	return $data;
}

/**
 * @since 4.5.2
 *
 * @param $search_string
 *
 * @return array|bool
 */
function vc_autocomplete_taxonomies_field_search( $search_string ) {
	$data = array();
	$vc_filter_by = vc_post_param( 'vc_filter_by', '' );
	$vc_taxonomies_types = strlen( $vc_filter_by ) > 0 ? array( $vc_filter_by ) : array_keys( vc_taxonomies_types() );
	$vc_taxonomies = get_terms( $vc_taxonomies_types, array(
		'hide_empty' => false,
		'search' => $search_string
	) );
	if ( is_array( $vc_taxonomies ) && ! empty( $vc_taxonomies ) ) {
		foreach ( $vc_taxonomies as $t ) {
			if ( is_object( $t ) ) {
				$data[] = vc_get_term_object( $t );
			}
		}
	}

	return $data;
}

/**
 * @param $search
 * @param $wp_query
 *
 * @return string
 */
function vc_search_by_title_only( $search, &$wp_query ) {
	global $wpdb;
	if ( empty( $search ) ) {
		return $search;
	} // skip processing - no search term in query
	$q = $wp_query->query_vars;
	if ( isset( $q['vc_search_by_title_only'] ) && $q['vc_search_by_title_only'] == true ) {
		$n = ! empty( $q['exact'] ) ? '' : '%';
		$search =
		$searchand = '';
		//die(print_r(array($q,$search),true));
		foreach ( (array) $q['search_terms'] as $term ) {
			//die($term);
			$term = $wpdb->esc_like( $term );
			$like = $n . $term . $n;
			$search .= $wpdb->prepare( "{$searchand}($wpdb->posts.post_title LIKE %s)", $like );
			//die($search);
			$searchand = ' AND ';
		}
		if ( ! empty( $search ) ) {
			$search = " AND ({$search}) ";
			if ( ! is_user_logged_in() ) {
				$search .= " AND ($wpdb->posts.post_password = '') ";
			}
		}
	}

	//die($search);
	return $search;
}

/**
 * @param $search_string
 *
 * @return array
 */
function vc_include_field_search( $search_string ) {
	$query = $search_string;
	$data = array();
	$args = array( 's' => $query, 'post_type' => 'any' );
	$args['vc_search_by_title_only'] = true;
	$args['numberposts'] = - 1;
	if ( strlen( $args['s'] ) == 0 ) {
		unset( $args['s'] );
	}
	add_filter( 'posts_search', 'vc_search_by_title_only', 500, 2 );
	$posts = get_posts( $args );
	if ( is_array( $posts ) && ! empty( $posts ) ) {
		foreach ( $posts as $post ) {
			$data[] = array(
				'value' => $post->ID,
				'label' => $post->post_title,
				'group' => $post->post_type,
			);
		}
	}

	return $data;
}

/**
 * @param $value
 *
 * @return array|bool
 */
function vc_include_field_render( $value ) {
	$post = get_post( $value['value'] );

	return is_null( $post ) ? false : array(
		'label' => $post->post_title,
		'value' => $post->ID,
		'group' => $post->post_type
	);
}

add_filter( 'vc_autocomplete_vc_basic_grid_exclude_callback',
	'vc_exclude_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_vc_basic_grid_exclude_render',
	'vc_exclude_field_render', 10, 1 ); // Render exact product. Must return an array (label,value)
add_filter( 'vc_autocomplete_vc_masonry_grid_exclude_callback',
	'vc_exclude_field_search', 10, 1 ); // Get suggestion(find). Must return an array
add_filter( 'vc_autocomplete_vc_masonry_grid_exclude_render',
	'vc_exclude_field_render', 10, 1 ); // Render exact product. Must return an array (label,value)
/**
 * @param $data_arr
 *
 * @return array
 */
function vc_exclude_field_search( $data_arr ) {
	$query = isset( $data_arr['query'] ) ? $data_arr['query'] : null;
	$term = isset( $data_arr['term'] ) ? $data_arr['term'] : "";
	$data = array();
	$args = ! empty( $query ) ? array( 's' => $term, 'post_type' => $query ) : array(
		's' => $term,
		'post_type' => 'any'
	);
	$args['vc_search_by_title_only'] = true;
	$args['numberposts'] = - 1;
	if ( strlen( $args['s'] ) == 0 ) {
		unset( $args['s'] );
	}
	add_filter( 'posts_search', 'vc_search_by_title_only', 500, 2 );
	$posts = get_posts( $args );
	if ( is_array( $posts ) && ! empty( $posts ) ) {
		foreach ( $posts as $post ) {
			$data[] = array(
				'value' => $post->ID,
				'label' => $post->post_title,
				'group' => $post->post_type,
			);
		}
	}

	return $data;
}

/**
 * @param $value
 *
 * @return array|bool
 */
function vc_exclude_field_render( $value ) {
	$post = get_post( $value['value'] );

	return is_null( $post ) ? false : array(
		'label' => $post->post_title,
		'value' => $post->ID,
		'group' => $post->post_type
	);
}

/*** Visual Composer Content elements refresh ***/
class VcSharedLibrary {
	// Here we will store plugin wise (shared) settings. Colors, Locations, Sizes, etc...
	/**
	 * @var array
	 */
	 
	 
	private static $colors = array(
		'Blue' => 'blue', // Why __( 'Blue', 'blackfyre' ) doesn't work?
		'Turquoise' => 'turquoise',
		'Pink' => 'pink',
		'Violet' => 'violet',
		'Peacoc' => 'peacoc',
		'Chino' => 'chino',
		'Mulled Wine' => 'mulled_wine',
		'Vista Blue' => 'vista_blue',
		'Black' => 'black',
		'Grey' => 'grey',
		'Orange' => 'orange',
		'Sky' => 'sky',
		'Green' => 'green',
		'Juicy pink' => 'juicy_pink',
		'Sandy brown' => 'sandy_brown',
		'Purple' => 'purple',
		'White' => 'white'
	);
	public static function sw_langs() {
	 $languages = array(
        'Abkhaz' => __('Abkhaz', 'blackfyre'),
        'Adyghe' => __('Adyghe','blackfyre'),
        'Afrikaans' => __('Afrikaans','blackfyre'),
        'Akan' => __('Akan','blackfyre'),
        'American Sign Language' => __('American Sign Language','blackfyre'),
        'Amharic' => __('Amharic','blackfyre'),
        'Ancient Greek' => __('Ancient Greek','blackfyre'),
        'Arabic' => __('Arabic','blackfyre'),
        'Aragonese' => __('Aragonese','blackfyre'),
        'Armenian' => __('Armenian','blackfyre'),
        'Aymara' => __('Aymara','blackfyre'),
        'Balinese' => __('Balinese','blackfyre'),
        'Basque' => __('Basque','blackfyre'),
        'Betawi' => __('Betawi','blackfyre'),
        'Bosnian' => __('Bosnian','blackfyre'),
        'Breton' => __('Breton','blackfyre'),
        'Bulgarian' => __('Bulgarian','blackfyre'),
        'Cantonese' => __('Cantonese','blackfyre'),
        'Catalan' => __('Catalan','blackfyre'),
        'Cherokee' => __('Cherokee','blackfyre'),
        'Chickasaw' => __('Chickasaw','blackfyre'),
        'Chinese' => __('Chinese','blackfyre'),
        'Coptic' => __('Coptic','blackfyre'),
        'Cornish' => __('Cornish','blackfyre'),
        'Corsican' => __('Corsican','blackfyre'),
        'Crimean Tatar' => __('Crimean Tatar','blackfyre'),
        'Croatian' => __('Croatian','blackfyre'),
        'Czech' => __('Czech','blackfyre'),
        'Danish' => __('Danish','blackfyre'),
        'Dawro' => __('Dawro','blackfyre'),
        'Dutch' => __('Dutch','blackfyre'),
        'English' => __('English','blackfyre'),
        'Esperanto' => __('Esperanto','blackfyre'),
        'Estonian' => __('Estonian','blackfyre'),
        'Ewe' => __('Ewe','blackfyre'),
        'Fiji Hindi' => __('Fiji Hindi','blackfyre'),
        'Filipino' => __('Filipino','blackfyre'),
        'Finnish' => __('Finnish','blackfyre'),
        'French' => __('French','blackfyre'),
        'Galician' => __('Galician','blackfyre'),
        'Georgian' => __('Georgian','blackfyre'),
        'German' => __('German','blackfyre'),
        'Greek, Modern' => __('Greek, Modern','blackfyre'),
        'Greenlandic' => __('Greenlandic','blackfyre'),
        'Haitian Creole' => __('Haitian Creole','blackfyre'),
        'Hawaiian' => __('Hawaiian','blackfyre'),
        'Hebrew' => __('Hebrew','blackfyre'),
        'Hindi' => __('Hindi','blackfyre'),
        'Hungarian' => __('Hungarian','blackfyre'),
        'Icelandic' => __('Icelandic','blackfyre'),
        'Indonesian' => __('Indonesian','blackfyre'),
        'Interlingua' => __('Interlingua','blackfyre'),
        'Inuktitut' => __('Inuktitut','blackfyre'),
        'Irish' => __('Irish','blackfyre'),
        'Italian' => __('Italian','blackfyre'),
        'Japanese' => __('Japanese','blackfyre'),
        'Kabardian' => __('Kabardian','blackfyre'),
        'Kannada' => __('Kannada','blackfyre'),
        'Kashubian' => __('Kashubian','blackfyre'),
        'Khmer' => __('Khmer','blackfyre'),
        'Kinyarwanda' => __('Kinyarwanda','blackfyre'),
        'Korean' => __('Korean','blackfyre'),
        'Kurdish/Kurdî' => __('Kurdish/Kurdî','blackfyre'),
        'Ladin' => __('Ladin','blackfyre'),
        'Latgalian' => __('Latgalian','blackfyre'),
        'Latin' => __('Latin','blackfyre'),
        'Lingala' => __('Lingala','blackfyre'),
        'Livonian' => __('Livonian','blackfyre'),
        'Lojban' => __('Lojban','blackfyre'),
        'Low German' => __('Low German','blackfyre'),
        'Lower Sorbian' => __('Lower Sorbian','blackfyre'),
        'Macedonian' => __('Macedonian','blackfyre'),
        'Malay' => __('Malay','blackfyre'),
        'Malayalam' => __('Malayalam','blackfyre'),
        'Mandarin' => __('Mandarin','blackfyre'),
        'Manx' => __('Manx','blackfyre'),
        'Maori' => __('Maori','blackfyre'),
        'Mauritian Creole' => __('Mauritian Creole','blackfyre'),
        'Min Nan' => __('Min Nan','blackfyre'),
        'Mongolian' => __('Mongolian','blackfyre'),
        'Norwegian' => __('Norwegian','blackfyre'),
        'Old Armenian' => __('Old Armenian','blackfyre'),
        'Old English' => __('Old English','blackfyre'),
        'Old French' => __('Old French','blackfyre'),
        'Old Norse' => __('Old Norse','blackfyre'),
        'Old Prussian' => __('Old Prussian','blackfyre'),
        'Oriya' => __('Oriya','blackfyre'),
        'Pangasinan' =>__('Pangasinan','blackfyre'),
        'Papiamentu' => __('Papiamentu','blackfyre'),
        'Pashto' => __('Pashto','blackfyre'),
        'Persian' => __('Persian','blackfyre'),
        'Pitjantjatjara' => __('Pitjantjatjara','blackfyre'),
        'Polish' => __('Polish','blackfyre'),
        'Portuguese' => __('Portuguese','blackfyre'),
        'Proto-Slavic' => __('Proto-Slavic','blackfyre'),
        'Rapa Nui' => __('Rapa Nui','blackfyre'),
        'Romanian' => __('Romanian','blackfyre'),
        'Russian' => __('Russian','blackfyre'),
        'Sanskrit' => __('Sanskrit','blackfyre'),
        'Scots' => __('Scots','blackfyre'),
        'Scottish Gaelic' => __('Scottish Gaelic','blackfyre'),
        'Serbian' => __('Serbian','blackfyre'),
        'Serbo-Croatian' => __('Serbo-Croatian','blackfyre'),
        'Sina Bidoyoh' => __('Sina Bidoyoh','blackfyre'),
        'Sinhalese' => __('Sinhalese','blackfyre'),
        'Slovak' => __('Slovak','blackfyre'),
        'Slovene' => __('Slovene','blackfyre'),
        'Spanish' => __('Spanish','blackfyre'),
        'Swahili' => __('Swahili','blackfyre'),
        'Swedish' => __('Swedish','blackfyre'),
        'Tagalog' => __('Tagalog','blackfyre'),
        'Tajik' => __('Tajik','blackfyre'),
        'Tamil' => __('Tamil','blackfyre'),
        'Tarantino' => __('Tarantino','blackfyre'),
        'Telugu' => __('Telugu','blackfyre'),
        'Thai' => __('Thai','blackfyre'),
        'Tok Pisin' => __('Tok Pisin','blackfyre'),
        'Turkish' => __('Turkish','blackfyre'),
        'Twi' => __('Twi','blackfyre'),
        'Ukrainian' => __('Ukrainian','blackfyre'),
        'Upper Sorbian' => __('Upper Sorbian','blackfyre'),
        'Urdu' => __('Urdu','blackfyre'),
        'Uzbek' => __('Uzbek','blackfyre'),
        'Venetian' => __('Venetian','blackfyre'),
        'Vietnamese' => __('Vietnamese','blackfyre'),
        'Vilamovian' => __('Vilamovian','blackfyre'),
        'Volapük' => __('Volapük','blackfyre'),
        'Võro' => __('Võro','blackfyre'),
        'Welsh' => __('Welsh','blackfyre'),
        'Xhosa' => __('Xhosa','blackfyre'),
        'Yiddish' => __('Yiddish','blackfyre'),

    );
	
	return $languages;
    }

public static function sw_countries() {
    $countries = array(
        'Afghanistan' => __('Afghanistan','blackfyre'),
        'Algeria' => __('Algeria','blackfyre'),
        'American Samoa' => __('American Samoa','blackfyre'),
        'Andorra' => __('Andorra','blackfyre'),
        'Angola' => __('Angola','blackfyre'),
        'Anguilla' => __('Anguilla','blackfyre'),
        'Antarctica' => __('Antarctica','blackfyre'),
        'Antigua and Barbuda' => __('Antigua and Barbuda','blackfyre'),
        'Argentina' => __('Argentina','blackfyre'),
        'Armenia' => __('Armenia','blackfyre'),
        'Aruba' => __('Aruba','blackfyre'),
        'Australia' => __('Australia','blackfyre'),
        'Austria' => __('Austria','blackfyre'),
        'Azerbaijan' => __('Azerbaijan','blackfyre'),
        'Bahamas' => __('Bahamas','blackfyre'),
        'Bahrain' => __('Bahrain','blackfyre'),
        'Bangladesh' => __('Bangladesh','blackfyre'),
        'Barbados' => __('Barbados','blackfyre'),
        'Belarus' => __('Belarus','blackfyre'),
        'Belgium' => __('Belgium','blackfyre'),
        'Belize' => __('Belize','blackfyre'),
        'Benin' => __('Benin','blackfyre'),
        'Bermuda' => __('Bermuda','blackfyre'),
        'Bhutan' => __('Bhutan','blackfyre'),
        'Bolivia' => __('Bolivia','blackfyre'),
        'Bosnia and Herzegowina' => __('Bosnia and Herzegowina','blackfyre'),
        'Botswana' => __('Botswana','blackfyre'),
        'Bouvet Island' => __('Bouvet Island','blackfyre'),
        'Brazil' => __('Brazil','blackfyre'),
        'British Indian Ocean Territory' => __('British Indian Ocean Territory','blackfyre'),
        'Brunei Darussalam' => __('Brunei Darussalam','blackfyre'),
        'Bulgaria' => __('Bulgaria','blackfyre'),
        'Burkina Faso' => __('Burkina Faso','blackfyre'),
        'Burundi' => __('Burundi','blackfyre'),
        'Cambodia' => __('Cambodia','blackfyre'),
        'Cameroon' => __('Cameroon','blackfyre'),
        'Canada' => __('Canada','blackfyre'),
        'Cape Verde' => __('Cape Verde','blackfyre'),
        'Cayman Islands' => __('Cayman Islands','blackfyre'),
        'Central African Republic' => __('Central African Republic','blackfyre'),
        'Chad' => __('Chad','blackfyre'),
        'Chile' => __('Chile','blackfyre'),
        'China' => __('China','blackfyre'),
        'Christmas Island' => __('Christmas Island','blackfyre'),
        'Cocos (Keeling) Islands' => __('Cocos (Keeling) Islands','blackfyre'),
        'Colombia' => __('Colombia','blackfyre'),
        'Comoros' => __('Comoros','blackfyre'),
        'Congo' => __('Congo','blackfyre'),
        'Cook Islands' => __('Cook Islands','blackfyre'),
        'Costa Rica' => __('Costa Rica','blackfyre'),
        'Cote D\'Ivoire' => __('Cote D\'Ivoire','blackfyre'),
        'Croatia' => __('Croatia','blackfyre'),
        'Cuba' => __('Cuba','blackfyre'),
        'Cyprus' => __('Cyprus','blackfyre'),
        'Czech Republic' => __('Czech Republic','blackfyre'),
        'Denmark' => __('Denmark','blackfyre'),
        'Djibouti' => __('Djibouti','blackfyre'),
        'Dominica' => __('Dominica','blackfyre'),
        'Dominican Republic' => __('Dominican Republic','blackfyre'),
        'East Timor' => __('East Timor','blackfyre'),
        'Ecuador' => __('Ecuador','blackfyre'),
        'Egypt' => __('Egypt','blackfyre'),
        'El Salvador' => __('El Salvador','blackfyre'),
        'Equatorial Guinea' => __('Equatorial Guinea','blackfyre'),
        'Eritrea' => __('Eritrea','blackfyre'),
        'Estonia' => __('Estonia','blackfyre'),
        'Ethiopia' => __('Ethiopia','blackfyre'),
        'Falkland Islands (Malvinas)' => __('Falkland Islands (Malvinas)','blackfyre'),
        'Faroe Islands' => __('Faroe Islands','blackfyre'),
        'Fiji' => __('Fiji','blackfyre'),
        'Finland' => __('Finland','blackfyre'),
        'France' => __('France','blackfyre'),
        'France, Metropolitan' => __('France, Metropolitan','blackfyre'),
        'French Guiana' => __('French Guiana','blackfyre'),
        'French Polynesia' => __('French Polynesia','blackfyre'),
        'French Southern Territories' => __('French Southern Territories','blackfyre'),
        'Gabon' => __('Gabon','blackfyre'),
        'Gambia' => __('Gambia','blackfyre'),
        'Georgia' => __('Georgia','blackfyre'),
        'Germany' => __('Germany','blackfyre'),
        'Ghana' => __('Ghana','blackfyre'),
        'Gibraltar' => __('Gibraltar','blackfyre'),
        'Greece' => __('Greece','blackfyre'),
        'Greenland' => __('Greenland','blackfyre'),
        'Grenada' => __('Grenada','blackfyre'),
        'Guadeloupe' => __('Guadeloupe','blackfyre'),
        'Guam' => __('Guam','blackfyre'),
        'Guatemala' => __('Guatemala','blackfyre'),
        'Guinea' => __('Guinea','blackfyre'),
        'Guinea-bissau' => __('Guinea-bissau','blackfyre'),
        'Guyana' => __('Guyana','blackfyre'),
        'Haiti' => __('Haiti','blackfyre'),
        'Heard and Mc Donald Islands' => __('Heard and Mc Donald Islands','blackfyre'),
        'Honduras' => __('Honduras','blackfyre'),
        'Hong Kong' => __('Hong Kong','blackfyre'),
        'Hungary' => __('Hungary','blackfyre'),
        'Iceland' => __('Iceland','blackfyre'),
        'India' => __('India','blackfyre'),
        'Indonesia' => __('Indonesia','blackfyre'),
        'Iran (Islamic Republic of)' => __('Iran (Islamic Republic of)','blackfyre'),
        'Iraq' => __('Iraq','blackfyre'),
        'Ireland' => __('Ireland','blackfyre'),
        'Israel' => __('Israel','blackfyre'),
        'Italy' => __('Italy','blackfyre'),
        'Jamaica' => __('Jamaica','blackfyre'),
        'Japan' => __('Japan','blackfyre'),
        'Jordan' => __('Jordan','blackfyre'),
        'Kazakhstan' => __('Kazakhstan','blackfyre'),
        'Kenya' => __('Kenya','blackfyre'),
        'Kiribati' => __('Kiribati','blackfyre'),
        'Korea, Democratic People\'s Republic of' => __('Korea, Democratic People\'s Republic of','blackfyre'),
        'Korea, Republic of' => __('Korea, Republic of','blackfyre'),
        'Kuwait' => __('Kuwait','blackfyre'),
        'Kyrgyzstan' => __('Kyrgyzstan','blackfyre'),
        'Lao People\'s Democratic Republic' => __('Lao People\'s Democratic Republic','blackfyre'),
        'Latvia' => __('Latvia','blackfyre'),
        'Lebanon' => __('Lebanon','blackfyre'),
        'Lesotho' => __('Lesotho','blackfyre'),
        'Liberia' => __('Liberia','blackfyre'),
        'Libyan Arab Jamahiriya' => __('Libyan Arab Jamahiriya','blackfyre'),
        'Liechtenstein' => __('Liechtenstein','blackfyre'),
        'Lithuania' => __('Lithuania','blackfyre'),
        'Luxembourg' => __('Luxembourg','blackfyre'),
        'Macau' => __('Macau','blackfyre'),
        'Macedonia, The Former Yugoslav Republic of' => __('Macedonia, The Former Yugoslav Republic of','blackfyre'),
        'Madagascar' => __('Madagascar','blackfyre'),
        'Malawi' => __('Malawi','blackfyre'),
        'Malaysia' => __('Malaysia','blackfyre'),
        'Maldives' => __('Maldives','blackfyre'),
        'Mali' => __('Mali','blackfyre'),
        'Malta' => __('Malta','blackfyre'),
        'Marshall Islands' => __('Marshall Islands','blackfyre'),
        'Martinique' => __('Martinique','blackfyre'),
        'Mauritania' => __('Mauritania','blackfyre'),
        'Mauritius' => __('Mauritius','blackfyre'),
        'Mayotte' => __('Mayotte','blackfyre'),
        'Mexico' => __('Mexico','blackfyre'),
        'Micronesia, Federated States of' => __('Micronesia, Federated States of','blackfyre'),
        'Moldova, Republic of' => __('Moldova, Republic of','blackfyre'),
        'Monaco' => __('Monaco','blackfyre'),
        'Mongolia' => __('Mongolia','blackfyre'),
        'Montserrat' => __('Montserrat','blackfyre'),
        'Morocco' => __('Morocco','blackfyre'),
        'Mozambique' => __('Mozambique','blackfyre'),
        'Myanmar' => __('Myanmar','blackfyre'),
        'Namibia' => __('Namibia','blackfyre'),
        'Nauru' => __('Nauru','blackfyre'),
        'Nepal' => __('Nepal','blackfyre'),
        'Netherlands' => __('Netherlands','blackfyre'),
        'Netherlands Antilles' => __('Netherlands Antilles','blackfyre'),
        'New Caledonia' => __('New Caledonia','blackfyre'),
        'New Zealand' => __('New Zealand','blackfyre'),
        'Nicaragua' => __('Nicaragua','blackfyre'),
        'Niger' => __('Niger','blackfyre'),
        'Nigeria' => __('Nigeria','blackfyre'),
        'Niue' => __('Niue','blackfyre'),
        'Norfolk Island' => __('Norfolk Island','blackfyre'),
        'Northern Mariana Islands' => __('Northern Mariana Islands','blackfyre'),
        'Norway' => __('Norway','blackfyre'),
        'Oman' => __('Oman','blackfyre'),
        'Pakistan' => __('Pakistan','blackfyre'),
        'Palau' => __('Palau','blackfyre'),
        'Panama' => __('Panama','blackfyre'),
        'Papua New Guinea' => __('Papua New Guinea','blackfyre'),
        'Paraguay' => __('Paraguay','blackfyre'),
        'Peru' => __('Peru','blackfyre'),
        'Philippines' => __('Philippines','blackfyre'),
        'Pitcairn' => __('Pitcairn','blackfyre'),
        'Poland' =>__('Poland','blackfyre'),
        'Portugal' =>__('Portugal','blackfyre'),
        'Puerto Rico' => __('Puerto Rico','blackfyre'),
        'Qatar' => __('Qatar','blackfyre'),
        'Reunion' => __('Reunion','blackfyre'),
        'Romania' => __('Romania','blackfyre'),
        'Russian Federation' => __('Russian Federation','blackfyre'),
        'Rwanda' => __('Rwanda','blackfyre'),
        'Saint Kitts and Nevis' => __('Saint Kitts and Nevis','blackfyre'),
        'Saint Lucia' => __('Saint Lucia','blackfyre'),
        'Saint Vincent and the Grenadines' => __('Saint Vincent and the Grenadines','blackfyre'),
        'Samoa' => __('Samoa','blackfyre'),
        'San Marino' => __('San Marino','blackfyre'),
        'Sao Tome and Principe' => __('Sao Tome and Principe','blackfyre'),
        'Saudi Arabia' => __('Saudi Arabia','blackfyre'),
        'Senegal' => __('Senegal','blackfyre'),
        'Serbia' => __('Serbia','blackfyre'),
        'Seychelles' => __('Seychelles','blackfyre'),
        'Sierra Leone' => __('Sierra Leone','blackfyre'),
        'Singapore' => __('Singapore','blackfyre'),
        'Slovakia (Slovak Republic)' => __('Slovakia (Slovak Republic)','blackfyre'),
        'Slovenia' => __('Slovenia','blackfyre'),
        'Solomon Islands' => __('Solomon Islands','blackfyre'),
        'Somalia' => __('Somalia','blackfyre'),
        'South Africa' => __('South Africa','blackfyre'),
        'South Georgia and the South Sandwich Islands' => __('South Georgia and the South Sandwich Islands','blackfyre'),
        'Spain' => __('Spain','blackfyre'),
        'Sri Lanka' => __('Sri Lanka','blackfyre'),
        'St. Helena' => __('St. Helena','blackfyre'),
        'St. Pierre and Miquelon' => __('St. Pierre and Miquelon','blackfyre'),
        'Sudan' => __('Sudan','blackfyre'),
        'Suriname' => __('Suriname','blackfyre'),
        'Svalbard and Jan Mayen Islands' => __('Svalbard and Jan Mayen Islands','blackfyre'),
        'Swaziland' => __('Swaziland','blackfyre'),
        'Sweden' => __('Sweden','blackfyre'),
        'Switzerland' => __('Switzerland','blackfyre'),
        'Syrian Arab Republic' => __('Syrian Arab Republic','blackfyre'),
        'Taiwan' => __('Taiwan','blackfyre'),
        'Tajikistan' => __('Tajikistan','blackfyre'),
        'Tanzania, United Republic of' => __('Tanzania, United Republic of','blackfyre'),
        'Thailand' => __('Thailand','blackfyre'),
        'Togo' => __('Togo','blackfyre'),
        'Tokelau' => __('Tokelau','blackfyre'),
        'Tonga' => __('Tonga','blackfyre'),
        'Trinidad and Tobago' => __('Trinidad and Tobago','blackfyre'),
        'Tunisia' => __('Tunisia','blackfyre'),
        'Turkey' => __('Turkey','blackfyre'),
        'Turkmenistan' => __('Turkmenistan','blackfyre'),
        'Turks and Caicos Islands' => __('Turks and Caicos Islands','blackfyre'),
        'Tuvalu' => __('Tuvalu','blackfyre'),
        'Uganda' => __('Uganda','blackfyre'),
        'Ukraine' => __('Ukraine','blackfyre'),
        'United Arab Emirates' => __('United Arab Emirates','blackfyre'),
        'United Kingdom' => __('United Kingdom','blackfyre'),
        'United States' => __('United States','blackfyre'),
        'United States Minor Outlying Islands' => __('United States Minor Outlying Islands','blackfyre'),
        'Uruguay' => __('Uruguay','blackfyre'),
        'Uzbekistan' => __('Uzbekistan','blackfyre'),
        'Vanuatu' => __('Vanuatu','blackfyre'),
        'Vatican City State (Holy See)' => __('Vatican City State (Holy See)','blackfyre'),
        'Venezuela' => __('Venezuela','blackfyre'),
        'Viet Nam' => __('Viet Nam','blackfyre'),
        'Virgin Islands (British)' => __('Virgin Islands (British)','blackfyre'),
        'Virgin Islands (U.S.)' => __('Virgin Islands (U.S.)','blackfyre'),
        'Wallis and Futuna Islands' => __('Wallis and Futuna Islands','blackfyre'),
        'Western Sahara' => __('Western Sahara','blackfyre'),
        'Yemen' => __('Yemen','blackfyre'),
        'Zaire' => __('Zaire','blackfyre'),
        'Zambia' => __('Zambia','blackfyre'),
        'Zimbabwe' => __('Zimbabwe', 'blackfyre')
    );
	
	 return $countries; 
    }	
	/**
	 * @var array
	 */
	 public static function sw_icons() {
	return $icons = array(
		__('Glass','blackfyre') => 'glass',
		__('Music','blackfyre') => 'music',
		__('Search','blackfyre') => 'search'
	);
	}
	/**
	 * @var array
	 */
	 
	  public static function sw_sizes() {
	 $sizes = array(
		__('Mini','blackfyre') => 'xs',
		__('Small','blackfyre') => 'sm',
		__('Normal','blackfyre') => 'md',
		__('Large','blackfyre') => 'lg'
	);
	 
	return $sizes;
	}
	/**
	 * @var array
	 */
	 
	 public static function sw_buttons() {
	 $button_styles = array(
		__('Rounded','blackfyre') => 'rounded',
		__('Square','blackfyre') =>  'square',
		__('Round','blackfyre') =>  'round',
		__('Outlined','blackfyre') =>  'outlined',
		__('3D','blackfyre') =>  '3d',
		__('Square Outlined','blackfyre') => 'square_outlined'
	);
	
	return $button_styles;
	 }
	/**
	 * @var array
	 */
	 
	  public static function sw_message_box() {
	 $message_box_styles = array(
		__('Standard','blackfyre') => 'standard',
		__('Solid','blackfyre') => 'solid',
		__('Solid icon','blackfyre') => 'solid-icon',
		__('Outline','blackfyre') => 'outline',
		__('3D','blackfyre') => '3d',
	);
	
	return $message_box_styles;
	  }
	/**
	 * Toggle styles
	 * @var array
	 */
	 public static function sw_toggle_styles() {
	$toggle_styles = array(
		__('Default','blackfyre') => 'default',
		__('Simple','blackfyre') => 'simple',
		__('Round','blackfyre') => 'round',
		__('Round Outline','blackfyre') => 'round_outline',
		__('Rounded','blackfyre') => 'rounded',
		__('Rounded Outline','blackfyre') => 'rounded_outline',
		__('Square','blackfyre') => 'square',
		__('Square Outline','blackfyre') => 'square_outline',
		__('Arrow','blackfyre') => 'arrow',
		__('Text Only','blackfyre') => 'text_only',
	);
	
	return $toggle_styles;
	 }
	/**
	 * Animation styles
	 * @var array
	 */
	 
	  public static function sw_animation_styles() {
	$animation_styles = array(
		__('Bounce','blackfyre') => 'easeOutBounce',
		__('Elastic','blackfyre') => 'easeOutElastic',
		__('Back','blackfyre') => 'easeOutBack',
		__('Cubic','blackfyre') => 'easeinOutCubic',
		__('Quint','blackfyre') => 'easeinOutQuint',
		__('Quart','blackfyre') => 'easeOutQuart',
		__('Quad','blackfyre') => 'easeinQuad',
		__('Sine','blackfyre') => 'easeOutSine'
	);
	
	return $animation_styles;
	  }
	/**
	 * @var array
	 */
	  public static function sw_cta_styles() {
	$cta_styles = array(
		__('Rounded','blackfyre') => 'rounded',
		__('Square','blackfyre') => 'square',
		__('Round','blackfyre') => 'round',
		__('Outlined','blackfyre') => 'outlined',
		__('Square Outlined','blackfyre') => 'square_outlined'
	);
	
	return $cta_styles;
	}
	/**
	 * @var array
	 */
	 
	  public static function sw_txt_align() {
	$txt_align = array(
		__('Left','blackfyre') => 'left',
		__('Right','blackfyre') => 'right',
		__('Center','blackfyre') => 'center',
		__('Justify','blackfyre') => 'justify'
	);
	
	return $txt_align;
	  }
	/**
	 * @var array
	 */
	public static $el_widths = array(
		'100%' => '',
		'90%' => '90',
		'80%' => '80',
		'70%' => '70',
		'60%' => '60',
		'50%' => '50'
	);

	/**
	 * @var array
	 */
	public static $sep_widths = array(
		'1px' => '',
		'2px' => '2',
		'3px' => '3',
		'4px' => '4',
		'5px' => '5',
		'6px' => '6',
		'7px' => '7',
		'8px' => '8',
		'9px' => '9',
		'10px' => '10'
	);

	/**
	 * @var array
	 */
	  public static function sw_sep_styles() {
	 $sep_styles = array(
		__('Border','blackfyre') => '',
		__('Dashed','blackfyre') => 'dashed',
		__('Dotted','blackfyre') => 'dotted',
		__('Double','blackfyre') => 'double'
	);
	return $sep_styles;
	  }
	/**
	 * @var array
	 */
	  public static function sw_box_styles() {
	 $box_styles = array(
		__('Default','blackfyre') => '',
		__('Rounded','blackfyre') => 'vc_box_rounded',
		__('Border','blackfyre') => 'vc_box_border',
		__('Outline','blackfyre') => 'vc_box_outline',
		__('Shadow','blackfyre') => 'vc_box_shadow',
		__('Bordered shadow','blackfyre') => 'vc_box_shadow_border',
		__('3D Shadow','blackfyre') => 'vc_box_shadow_3d',
		__('Round','blackfyre') => 'vc_box_circle', //new
		__('Round Border','blackfyre') => 'vc_box_border_circle', //new
		__('Round Outline','blackfyre') => 'vc_box_outline_circle', //new
		__('Round Shadow','blackfyre') => 'vc_box_shadow_circle', //new
		__('Round Border Shadow','blackfyre') => 'vc_box_shadow_border_circle', //new
		__('Circle','blackfyre') => 'vc_box_circle_2', //new
		__('Circle Border','blackfyre') => 'vc_box_border_circle_2', //new
		__('Circle Outline','blackfyre') => 'vc_box_outline_circle_2', //new
		__('Circle Shadow','blackfyre') => 'vc_box_shadow_circle_2', //new
		__('Circle Border Shadow','blackfyre') => 'vc_box_shadow_border_circle_2' //new
	);
	
	return $box_styles;
	  }
	/**
	 * @return array
	 */
	public static function getColors() {
		return self::$colors;
	}
	
	 public static function getCountries() {
        return self::sw_countries();
    }

    public static function getLanguages() {
        return self::sw_langs();
    }
	
	/**
	 * @return array
	 */
	public static function getIcons() {
		return self::sw_icons();
	}

	/**
	 * @return array
	 */
	public static function getSizes() {
		return self::sw_sizes();
	}

	/**
	 * @return array
	 */
	public static function getButtonStyles() {
		return self::sw_buttons();
	}

	/**
	 * @return array
	 */
	public static function getMessageBoxStyles() {
		return self::sw_message_box();
	}

	/**
	 * @return array
	 */
	public static function getToggleStyles() {
		return self::sw_toggle_styles();
	}

	/**
	 * @return array
	 */
	public static function getAnimationStyles() {
		return self::sw_animation_styles();
	}

	/**
	 * @return array
	 */
	public static function getCtaStyles() {
		return self::sw_cta_styles();
	}

	/**
	 * @return array
	 */
	public static function getTextAlign() {
		return self::sw_txt_align();
	}

	/**
	 * @return array
	 */
	public static function getBorderWidths() {
		return self::$sep_widths;
	}

	/**
	 * @return array
	 */
	public static function getElementWidths() {
		return self::$el_widths;
	}

	/**
	 * @return array
	 */
	public static function getSeparatorStyles() {
		return self::sw_sep_styles();
	}

	/**
	 * @return array
	 */
	public static function getBoxStyles() {
		return self::sw_box_styles();
	}

	public static function getColorsDashed() {
		$colors = array(
			__( 'Blue', 'blackfyre' ) => 'blue',
			__( 'Turquoise', 'blackfyre' ) => 'turquoise',
			__( 'Pink', 'blackfyre' ) => 'pink',
			__( 'Violet', 'blackfyre' ) => 'violet',
			__( 'Peacoc', 'blackfyre' ) => 'peacoc',
			__( 'Chino', 'blackfyre' ) => 'chino',
			__( 'Mulled Wine', 'blackfyre' ) => 'mulled-wine',
			__( 'Vista Blue', 'blackfyre' ) => 'vista-blue',
			__( 'Black', 'blackfyre' ) => 'black',
			__( 'Grey', 'blackfyre' ) => 'grey',
			__( 'Orange', 'blackfyre' ) => 'orange',
			__( 'Sky', 'blackfyre' ) => 'sky',
			__( 'Green', 'blackfyre' ) => 'green',
			__( 'Juicy pink', 'blackfyre' ) => 'juicy-pink',
			__( 'Sandy brown', 'blackfyre' ) => 'sandy-brown',
			__( 'Purple', 'blackfyre' ) => 'purple',
			__( 'White', 'blackfyre' ) => 'white'
		);

		return $colors;
	}
}

//VcSharedLibrary::getColors();
/**
 * @param string $asset
 *
 * @return array
 */
function getVcShared( $asset = '' ) {
	switch ( $asset ) {
		 case 'countries':
            return VcSharedLibrary::getCountries();
            break;
        case 'languages':
            return VcSharedLibrary::getLanguages();
            break;
		case 'colors':
			return VcSharedLibrary::getColors();
			break;

		case 'colors-dashed':
			return VcSharedLibrary::getColorsDashed();
			break;

		case 'icons':
			return VcSharedLibrary::getIcons();
			break;

		case 'sizes':
			return VcSharedLibrary::getSizes();
			break;

		case 'button styles':
		case 'alert styles':
			return VcSharedLibrary::getButtonStyles();
			break;
		case 'message_box_styles':
			return VcSharedLibrary::getMessageBoxStyles();
			break;
		case 'cta styles':
			return VcSharedLibrary::getCtaStyles();
			break;

		case 'text align':
			return VcSharedLibrary::getTextAlign();
			break;

		case 'cta widths':
		case 'separator widths':
			return VcSharedLibrary::getElementWidths();
			break;

		case 'separator styles':
			return VcSharedLibrary::getSeparatorStyles();
			break;

		case 'separator border widths':
			return VcSharedLibrary::getBorderWidths();
			break;

		case 'single image styles':
			return VcSharedLibrary::getBoxStyles();
			break;

		case 'toggle styles':
			return VcSharedLibrary::getToggleStyles();
			break;

		case 'animation styles':
			return VcSharedLibrary::getAnimationStyles();
			break;

		default:
			# code...
			break;
	}

	return '';
}
