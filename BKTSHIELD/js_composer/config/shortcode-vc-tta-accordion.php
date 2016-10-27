<?php

vc_map( array(
	'name' => __( 'Accordion', 'blackfyre' ),
	'base' => 'vc_tta_accordion',
	'icon' => 'icon-wpb-ui-accordion',
	'is_container' => true,
	'show_settings_on_create' => false,
	'as_parent' => array(
		'only' => 'vc_tta_section'
	),
	'category' => __( 'Content', 'blackfyre' ),
	'description' => __( 'Collapsible content panels', 'blackfyre' ),
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
			'description' => __( 'Select accordion display style.', 'blackfyre' ),
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
			'description' => __( 'Select accordion shape.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'color',
			'value' => getVcShared( 'colors-dashed' ),
			'std' => 'grey',
			'heading' => __( 'Color', 'blackfyre' ),
			'description' => __( 'Select accordion color.', 'blackfyre' ),
			'param_holder_class' => 'vc_colored-dropdown',
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'no_fill',
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
			'description' => __( 'Select accordion spacing.', 'blackfyre' ),
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
			'description' => __( 'Select accordion gap.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'c_align',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
				__( 'Center', 'blackfyre' ) => 'center',
			),
			'heading' => __( 'Alignment', 'blackfyre' ),
			'description' => __( 'Select accordion section title alignment.', 'blackfyre' ),
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
			'description' => __( 'Select auto rotate for accordion in seconds (Note: disabled by default).', 'blackfyre' ),
		),
		array(
			'type' => 'checkbox',
			'param_name' => 'collapsible_all',
			'heading' => __( 'Allow collapse all?', 'blackfyre' ),
			'description' => __( 'Allow collapse all accordion sections.', 'blackfyre' ),
		),
		// Control Icons
		array(
			'type' => 'dropdown',
			'param_name' => 'c_icon',
			'value' => array(
				__( 'None', 'blackfyre' ) => '',
				__( 'Chevron', 'blackfyre' ) => 'chevron',
				__( 'Plus', 'blackfyre' ) => 'plus',
				__( 'Triangle', 'blackfyre' ) => 'triangle',
			),
			'std' => 'plus',
			'heading' => __( 'Icon', 'blackfyre' ),
			'description' => __( 'Select accordion navigation icon.', 'blackfyre' ),
		),
		array(
			'type' => 'dropdown',
			'param_name' => 'c_position',
			'value' => array(
				__( 'Left', 'blackfyre' ) => 'left',
				__( 'Right', 'blackfyre' ) => 'right',
			),
			'dependency' => array(
				'element' => 'c_icon',
				'not_empty' => true,
			),
			'heading' => __( 'Position', 'blackfyre' ),
			'description' => __( 'Select accordion navigation icon position.', 'blackfyre' ),
		),
		// Control Icons END
		array(
			'type' => 'textfield',
			'param_name' => 'active_section',
			'heading' => __( 'Active section', 'blackfyre' ),
			'value' => 1,
			'description' => __( 'Enter active section number (Note: to have all sections closed on initial load enter non-existing number).', 'blackfyre' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'blackfyre' ),
			'param_name' => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'blackfyre' ),
		),
	),
	'js_view' => 'VcBackendTtaAccordionView',
	'custom_markup' => '
<div class="vc_tta-container" data-vc-action="collapseAll">
	<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-backend-accordion-white vc_tta-style-flat vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-gap-2">
	   <div class="vc_tta-panels vc_clearfix {{container-class}}">
	      {{ content }}
	      <div class="vc_tta-panel vc_tta-section-append">
	         <div class="vc_tta-panel-heading">
	            <h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
	               <a href="javascript:;" aria-expanded="false" class="vc_tta-backend-add-control">
	                   <span class="vc_tta-title-text">' . __( 'Add Section', 'blackfyre' ) . '</span>
	                    <i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
					</a>
	            </h4>
	         </div>
	      </div>
	   </div>
	</div>
</div>',
	'default_content' => '
[vc_tta_section title="' . sprintf( "%s %d", __( 'Section', 'blackfyre' ), 1 ) . '"][/vc_tta_section]
[vc_tta_section title="' . sprintf( "%s %d", __( 'Section', 'blackfyre' ), 2 ) . '"][/vc_tta_section]
	',
	'admin_enqueue_js' => vc_asset_url( 'lib/vc_accordion/vc-accordion.js' ),
) );