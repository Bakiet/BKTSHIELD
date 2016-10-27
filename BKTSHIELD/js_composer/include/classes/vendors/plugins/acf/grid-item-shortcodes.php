<?php
$groups = function_exists( 'acf_get_field_groups' ) ? acf_get_field_groups() : apply_filters( 'acf/get_field_groups', array() );
$groups_param_values = $fields_params = array();
foreach ( $groups as $group ) {
	$id = isset( $group['id'] ) ? 'id' : ( isset( $group['ID'] ) ? 'ID' : 'id' );
	$groups_param_values[ $group['title'] ] = $group[ $id ];
	$fields = function_exists( 'acf_get_fields' ) ? acf_get_fields( $group[ $id ] ) : apply_filters( 'acf/field_group/get_fields', array(), $group[ $id ] );
	$fields_param_value = array();
	foreach ( $fields as $field ) {
		$fields_param_value[ $field['label'] ] = (string) $field['key'];
	}
	$fields_params[] = array(
		'type' => 'dropdown',
		'heading' => __( 'Field name', 'blackfyre' ),
		'param_name' => 'field_from_' . $group[ $id ],
		'value' => $fields_param_value,
		'description' => __( 'Select field from group.', 'blackfyre' ),
		'dependency' => array(
			'element' => 'field_group',
			'value' => array( (string) $group[ $id ] )
		),
	);
}
return array(
	'vc_gitem_acf' => array(
		'name' => __( 'Advanced Custom Field', 'blackfyre' ),
		'base' => 'vc_gitem_acf',
		'icon' => 'vc_icon-acf',
		'category' => __( 'Content', 'blackfyre' ),
		'description' => __( 'Advanced Custom Field', 'blackfyre' ),
		'php_class_name' => 'Vc_Gitem_Acf_Shortcode',
		'params' => array_merge( array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Field group', 'blackfyre' ),
				'param_name' => 'field_group',
				'value' => $groups_param_values,
				'description' => __( 'Select field group.', 'blackfyre' ),
			)
		), $fields_params, array(
			array(
				'type' => 'checkbox',
				'heading' => __( 'Show label', 'blackfyre' ),
				'param_name' => 'show_label',
				'value' => array( __( 'Yes', 'blackfyre' ) => 'yes' ),
				'description' => __( 'Enter label to display before key value.', 'blackfyre' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Align', 'blackfyre' ),
				'param_name' => 'align',
				'value' => array(
					__( 'left', 'blackfyre' ) => 'left',
					__( 'right', 'blackfyre' ) => 'right',
					__( 'center', 'blackfyre' ) => 'center',
					__( 'justify', 'blackfyre' ) => 'justify',
				),
				'description' => __( 'Select alignment.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'blackfyre' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'blackfyre' )
			),
		) ),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	)
);