<?php
return array(
	'vc_gitem_wocommerce' => array(
		'name' => __( 'WooCommerce field', 'blackfyre' ),
		'base' => 'vc_gitem_wocommerce',
		'icon' => 'icon-wpb-woocommerce',
		'category' => __( 'Content', 'blackfyre' ),
		'description' => __( 'Woocommerce', 'blackfyre' ),
		'php_class_name' => 'Vc_Gitem_Woocommerce_Shortcode',
		'params' => array(

			array(
				'type' => 'dropdown',
				'heading' => __( 'Content type', 'blackfyre' ),
				'param_name' => 'post_type',
				'value' => array(
					__( 'Product', 'blackfyre' ) => 'product',
					__( 'Order', 'blackfyre' ) => 'order',
				),
				'description' => __( 'Select Woo Commerce post type.', 'blackfyre' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Product field name', 'blackfyre' ),
				'param_name' => 'product_field_key',
				'value' => Vc_Vendor_Woocommerce::getProductsFieldsList(),
				'dependency' => array(
					'element' => 'post_type',
					'value' => array( 'product' )
				),
				'description' => __( 'Select field from product.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Product custom key', 'blackfyre' ),
				'param_name' => 'product_custom_key',
				'description' => __( 'Enter custom key.', 'blackfyre' ),
				'dependency' => array(
					'element' => 'product_field_key',
					'value' => array( '_custom_' )
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Order fields', 'blackfyre' ),
				'param_name' => 'order_field_key',
				'value' => Vc_Vendor_Woocommerce::getOrderFieldsList(),
				'dependency' => array(
					'element' => 'post_type',
					'value' => array( 'order' )
				),
				'description' => __( 'Select field from order.', 'blackfyre' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Order custom key', 'blackfyre' ),
				'param_name' => 'order_custom_key',
				'dependency' => array(
					'element' => 'order_field_key',
					'value' => array( '_custom_' )
				),
				'description' => __( 'Enter custom key.', 'blackfyre' ),
			),
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
		),
		'post_type' => Vc_Grid_Item_Editor::postType(),
	)
);