<?php

vc_map( array(
	'name' => __( 'Tabs', 'blackfyre' ),
	'base' => 'vc_tta_tabs',
	'icon' => 'icon-wpb-ui-tab-content',
	'is_container' => true,
	'show_settings_on_create' => false,
	'as_parent' => array(
		'only' => 'vc_tta_section'
	),
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Tabbed content', 'blackfyre' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'param_name' => 'title',
			'heading' => __( 'Widget title', 'blackfyre' ),
			'description' => __( 'Enter text used as widget title (Note: located above content element).', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'style',
			'value' => array(
				__( 'Classic', 'blackfyre' ) => 'classic',
				__( 'Modern', 'blackfyre' ) => 'modern',
				__( 'Flat', 'blackfyre' ) => 'flat',
				__( 'Outline', 'blackfyre' ) => 'outline',
			),
			'heading' => __( 'Style', 'blackfyre' ),
			'description' => __( 'Select tabs display style.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'shape',
			'value' => array(
				__( 'Rounded', 'blackfyre' ) => 'rounded',
				__( 'Square', 'blackfyre' ) => 'square',
				__( 'Round', 'blackfyre' ) => 'round',
			),
			'heading' => __( 'Shape', 'blackfyre' ),
			'description' => __( 'Select tabs shape.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'color',
			'heading' => __( 'Color', 'blackfyre' ),
			'description' => __( 'Select tabs color.', 'blackfyre' ),
			'value' => getVcShared( 'colors-dashed' ),
			'std' => 'grey',
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'no_fill_content_area',
			'heading' => __( 'Do not fill content area?', 'blackfyre' ),
			'description' => __( 'Do not fill content area with color.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'spacing',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
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
			'heading' => __( 'Spacing', 'blackfyre' ),
			'description' => __( 'Select tabs spacing.', 'blackfyre' ),
			'std' => '1'
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'gap',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
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
			'heading' => __( 'Gap', 'blackfyre' ),
			'description' => __( 'Select tabs gap.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'tab_position',
			'value' => array(
				__( 'Top', 'blackfyre' ) => 'top',
				__( 'Bottom', 'blackfyre' ) => 'bottom',
			),
			'heading' => __( 'Position', 'blackfyre' ),
			'description' => __( 'Select tabs navigation position.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'alignment',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Center', 'blackfyre' ) => 'center',
			),
			'heading' => __( 'Alignment', 'blackfyre' ),
			'description' => __( 'Select tabs section title alignment.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'autoplay',
			'value' => array(
				__( 'None', 'blackfyre' ) => 'none',
				__( '1', 'blackfyre' ) => '1',
				__( '2', 'blackfyre' ) => '2',
				__( '3', 'blackfyre' ) => '3',
				__( '4', 'blackfyre' ) => '4',
				__( '5', 'blackfyre' ) => '5',
				__( '10', 'blackfyre' ) => '10',
				__( '20', 'blackfyre' ) => '20',
				__( '30', 'blackfyre' ) => '30',
				__( '40', 'blackfyre' ) => '40',
				__( '50', 'blackfyre' ) => '50',
				__( '60', 'blackfyre' ) => '60',
			),
			'std' => 'none',
			'heading' => __( 'Autoplay', 'blackfyre' ),
			'description' => __( 'Select auto rotate for tabs in seconds (Note: disabled by default).', 'blackfyre' ),
		),
		array(
			'type' => 'textfield',
			'param_name' => 'active_section',
			'heading' => __( 'Active section', 'blackfyre' ),
			'value' => 1,
			'description' => __( 'Enter active section number (Note: to have all sections closed on initial load enter non-existing number).', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'pagination_style',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Square Dots', 'blackfyre' ) => 'outline-square',
				__( 'Radio Dots', 'blackfyre' ) => 'outline-round',
				__( 'Point Dots', 'blackfyre' ) => 'flat-round',
				__( 'Fill Square Dots', 'blackfyre' ) => 'flat-square',
				__( 'Rounded Fill Square Dots', 'blackfyre' ) => 'flat-rounded',
			),
			'heading' => __( 'Pagination style', 'blackfyre' ),
			'description' => __( 'Select pagination style.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'pagination_color',
			'value' => getVcShared( 'colors-dashed' ),
			'heading' => __( 'Pagination color', 'blackfyre' ),
			'description' => __( 'Select pagination color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown',
			'std' => 'grey',
			'dependency' => array(
				'element' => 'pagination_style',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' ),
		),
	),
	'js_view' => 'VcBackendTtaTabsView',
	'custom_markup' => '
<div class="vc_tta-container" data-vc-action="collapse">
	<div class="vc_general vc_tta vc_tta-tabs vc_tta-color-backend-tabs-white vc_tta-style-flat vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-left">
		<div class="vc_tta-tabs-container">'
	                   . '<ul class="vc_tta-tabs-list">'
	                   . '<li class="vc_tta-tab" data-vc-tab data-vc-target-model-id="{{ model_id }}" data-element_type="vc_tta_section"><a href="javascript:;" data-vc-tabs data-vc-container=".vc_tta" data-vc-target="[data-model-id=\'{{ model_id }}\']" data-vc-target-model-id="{{ model_id }}"><span class="vc_tta-title-text">{{ section_title }}</span></a></li>'
	                   . '</ul>
		</div>
		<div class="vc_tta-panels vc_clearfix {{container-class}}">
		  {{ content }}
		</div>
	</div>
</div>',
	'default_content' => '
[vc_tta_section title="' . sprintf( "%s %d", __( 'Tab', 'blackfyre' ), 1 ) . '"][/vc_tta_section]
[vc_tta_section title="' . sprintf( "%s %d", __( 'Tab', 'blackfyre' ), 2 ) . '"][/vc_tta_section]
	',
	'admin_enqueue_js' => array(
		vc_asset_url( 'lib/vc_accordion/vc-accordion.js' ),
		vc_asset_url( 'lib/vc_tabs/vc-tabs.js' ),
	),
) );