<?php

/**
 * Class Vc_ParamAnimation
 *
 * For working with animations
 * array(
 *        'type' => 'animation_style',
 *        'heading' => __( 'Animation', 'blackfyre' ),
 *        'param_name' => 'animation',
 * ),
 * Preview in http://daneden.github.io/animate.css/
 * @since 4.4
 */
class Vc_ParamAnimation {
	/**
	 * @since 4.4
	 * @var array $settings parameter settings from vc_map
	 */
	protected $settings;
	/**
	 * @since 4.4
	 * @var string $value parameter value
	 */
	protected $value;

	/**
	 * Define available animation effects
	 * @since 4.4
	 * vc_filter: vc_param_animation_style_list - to override animation styles array
	 * @return array
	 */
	protected function animationStyles() {
		$styles = array(
			array(
				'values' => array(
					__( 'None', 'blackfyre' ) => 'none',
				),
			),
			array(
				'label' => __( 'Attention Seekers', 'blackfyre' ),
				'values' => array(
					// text to display => value
					__( 'bounce', 'blackfyre' ) => array(
						'value' => 'bounce',
						'type' => 'other',
					),
					__( 'flash', 'blackfyre' ) => array(
						'value' => 'flash',
						'type' => 'other',
					),
					__( 'pulse', 'blackfyre' ) => array(
						'value' => 'pulse',
						'type' => 'other',
					),
					__( 'rubberBand', 'blackfyre' ) => array(
						'value' => 'rubberBand',
						'type' => 'other',
					),
					__( 'shake', 'blackfyre' ) => array(
						'value' => 'shake',
						'type' => 'other',
					),
					__( 'swing', 'blackfyre' ) => array(
						'value' => 'swing',
						'type' => 'other',
					),
					__( 'tada', 'blackfyre' ) => array(
						'value' => 'tada',
						'type' => 'other',
					),
					__( 'wobble', 'blackfyre' ) => array(
						'value' => 'wobble',
						'type' => 'other',
					),
				),
			),
			array(
				'label' => __( 'Bouncing Entrances', 'blackfyre' ),
				'values' => array(
					// text to display => value
					__( 'bounceIn', 'blackfyre' ) => array(
						'value' => 'bounceIn',
						'type' => 'in',
					),
					__( 'bounceInDown', 'blackfyre' ) => array(
						'value' => 'bounceInDown',
						'type' => 'in',
					),
					__( 'bounceInLeft', 'blackfyre' ) => array(
						'value' => 'bounceInLeft',
						'type' => 'in',
					),
					__( 'bounceInRight', 'blackfyre' ) => array(
						'value' => 'bounceInRight',
						'type' => 'in',
					),
					__( 'bounceInUp', 'blackfyre' ) => array(
						'value' => 'bounceInUp',
						'type' => 'in',
					),
				),
			),
			array(
				'label' => __( 'Bouncing Exits', 'blackfyre' ),
				'values' => array(
					// text to display => value
					__( 'bounceOut', 'blackfyre' ) => array(
						'value' => 'bounceOut',
						'type' => 'out',
					),
					__( 'bounceOutDown', 'blackfyre' ) => array(
						'value' => 'bounceOutDown',
						'type' => 'out',
					),
					__( 'bounceOutLeft', 'blackfyre' ) => array(
						'value' => 'bounceOutLeft',
						'type' => 'out',
					),
					__( 'bounceOutRight', 'blackfyre' ) => array(
						'value' => 'bounceOutRight',
						'type' => 'out',
					),
					__( 'bounceOutUp', 'blackfyre' ) => array(
						'value' => 'bounceOutUp',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Fading Entrances', 'blackfyre' ),
				'values' => array(
					// text to display => value
					__( 'fadeIn', 'blackfyre' ) => array(
						'value' => 'fadeIn',
						'type' => 'in',
					),
					__( 'fadeInDown', 'blackfyre' ) => array(
						'value' => 'fadeInDown',
						'type' => 'in',
					),
					__( 'fadeInDownBig', 'blackfyre' ) => array(
						'value' => 'fadeInDownBig',
						'type' => 'in',
					),
					__( 'fadeInLeft', 'blackfyre' ) => array(
						'value' => 'fadeInLeft',
						'type' => 'in',
					),
					__( 'fadeInLeftBig', 'blackfyre' ) => array(
						'value' => 'fadeInLeftBig',
						'type' => 'in'
					),
					__( 'fadeInRight', 'blackfyre' ) => array(
						'value' => 'fadeInRight',
						'type' => 'in',
					),
					__( 'fadeInRightBig', 'blackfyre' ) => array(
						'value' => 'fadeInRightBig',
						'type' => 'in',
					),
					__( 'fadeInUp', 'blackfyre' ) => array(
						'value' => 'fadeInUp',
						'type' => 'in',
					),
					__( 'fadeInUpBig', 'blackfyre' ) => array(
						'value' => 'fadeInUpBig',
						'type' => 'in',
					),
				),
			),
			array(
				'label' => __( 'Fading Exits', 'blackfyre' ),
				'values' => array(
					__( 'fadeOut', 'blackfyre' ) => array(
						'value' => 'fadeOut',
						'type' => 'out',
					),
					__( 'fadeOutDown', 'blackfyre' ) => array(
						'value' => 'fadeOutDown',
						'type' => 'out',
					),
					__( 'fadeOutDownBig', 'blackfyre' ) => array(
						'value' => 'fadeOutDownBig',
						'type' => 'out',
					),
					__( 'fadeOutLeft', 'blackfyre' ) => array(
						'value' => 'fadeOutLeft',
						'type' => 'out',
					),
					__( 'fadeOutLeftBig', 'blackfyre' ) => array(
						'value' => 'fadeOutLeftBig',
						'type' => 'out',
					),
					__( 'fadeOutRight', 'blackfyre' ) => array(
						'value' => 'fadeOutRight',
						'type' => 'out',
					),
					__( 'fadeOutRightBig', 'blackfyre' ) => array(
						'value' => 'fadeOutRightBig',
						'type' => 'out',
					),
					__( 'fadeOutUp', 'blackfyre' ) => array(
						'value' => 'fadeOutUp',
						'type' => 'out',
					),
					__( 'fadeOutUpBig', 'blackfyre' ) => array(
						'value' => 'fadeOutUpBig',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Flippers', 'blackfyre' ),
				'values' => array(
					__( 'flip', 'blackfyre' ) => array(
						'value' => 'flip',
						'type' => 'other',
					),
					__( 'flipInX', 'blackfyre' ) => array(
						'value' => 'flipInX',
						'type' => 'in',
					),
					__( 'flipInY', 'blackfyre' ) => array(
						'value' => 'flipInY',
						'type' => 'in',
					),
					__( 'flipOutX', 'blackfyre' ) => array(
						'value' => 'flipOutX',
						'type' => 'out',
					),
					__( 'flipOutY', 'blackfyre' ) => array(
						'value' => 'flipOutY',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Lightspeed', 'blackfyre' ),
				'values' => array(
					__( 'lightSpeedIn', 'blackfyre' ) => array(
						'value' => 'lightSpeedIn',
						'type' => 'in',
					),
					__( 'lightSpeedOut', 'blackfyre' ) => array(
						'value' => 'lightSpeedOut',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Rotating Entrances', 'blackfyre' ),
				'values' => array(
					__( 'rotateIn', 'blackfyre' ) => array(
						'value' => 'rotateIn',
						'type' => 'in',
					),
					__( 'rotateInDownLeft', 'blackfyre' ) => array(
						'value' => 'rotateInDownLeft',
						'type' => 'in',
					),
					__( 'rotateInDownRight', 'blackfyre' ) => array(
						'value' => 'rotateInDownRight',
						'type' => 'in',
					),
					__( 'rotateInUpLeft', 'blackfyre' ) => array(
						'value' => 'rotateInUpLeft',
						'type' => 'in',
					),
					__( 'rotateInUpRight', 'blackfyre' ) => array(
						'value' => 'rotateInUpRight',
						'type' => 'in',
					),
				),
			),
			array(
				'label' => __( 'Rotating Exits', 'blackfyre' ),
				'values' => array(
					__( 'rotateOut', 'blackfyre' ) => array(
						'value' => 'rotateOut',
						'type' => 'out',
					),
					__( 'rotateOutDownLeft', 'blackfyre' ) => array(
						'value' => 'rotateOutDownLeft',
						'type' => 'out',
					),
					__( 'rotateOutDownRight', 'blackfyre' ) => array(
						'value' => 'rotateOutDownRight',
						'type' => 'out',
					),
					__( 'rotateOutUpLeft', 'blackfyre' ) => array(
						'value' => 'rotateOutUpLeft',
						'type' => 'out',
					),
					__( 'rotateOutUpRight', 'blackfyre' ) => array(
						'value' => 'rotateOutUpRight',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Specials', 'blackfyre' ),
				'values' => array(
					__( 'hinge', 'blackfyre' ) => array(
						'value' => 'hinge',
						'type' => 'out',
					),
					__( 'rollIn', 'blackfyre' ) => array(
						'value' => 'rollIn',
						'type' => 'in',
					),
					__( 'rollOut', 'blackfyre' ) => array(
						'value' => 'rollOut',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Zoom Entrances', 'blackfyre' ),
				'values' => array(
					__( 'zoomIn', 'blackfyre' ) => array(
						'value' => 'zoomIn',
						'type' => 'in',
					),
					__( 'zoomInDown', 'blackfyre' ) => array(
						'value' => 'zoomInDown',
						'type' => 'in',
					),
					__( 'zoomInLeft', 'blackfyre' ) => array(
						'value' => 'zoomInLeft',
						'type' => 'in',
					),
					__( 'zoomInRight', 'blackfyre' ) => array(
						'value' => 'zoomInRight',
						'type' => 'in',
					),
					__( 'zoomInUp', 'blackfyre' ) => array(
						'value' => 'zoomInUp',
						'type' => 'in',
					),
				),
			),
			array(
				'label' => __( 'Zoom Exits', 'blackfyre' ),
				'values' => array(
					__( 'zoomOut', 'blackfyre' ) => array(
						'value' => 'zoomOut',
						'type' => 'out',
					),
					__( 'zoomOutDown', 'blackfyre' ) => array(
						'value' => 'zoomOutDown',
						'type' => 'out',
					),
					__( 'zoomOutLeft', 'blackfyre' ) => array(
						'value' => 'zoomOutLeft',
						'type' => 'out',
					),
					__( 'zoomOutRight', 'blackfyre' ) => array(
						'value' => 'zoomOutRight',
						'type' => 'out',
					),
					__( 'zoomOutUp', 'blackfyre' ) => array(
						'value' => 'zoomOutUp',
						'type' => 'out',
					),
				),
			),
			array(
				'label' => __( 'Slide Entrances', 'blackfyre' ),
				'values' => array(
					__( 'slideInDown', 'blackfyre' ) => array(
						'value' => 'slideInDown',
						'type' => 'in',
					),
					__( 'slideInLeft', 'blackfyre' ) => array(
						'value' => 'slideInLeft',
						'type' => 'in',
					),
					__( 'slideInRight', 'blackfyre' ) => array(
						'value' => 'slideInRight',
						'type' => 'in',
					),
					__( 'slideInUp', 'blackfyre' ) => array(
						'value' => 'slideInUp',
						'type' => 'in',
					),
				),
			),
			array(
				'label' => __( 'Slide Exits', 'blackfyre' ),
				'values' => array(
					__( 'slideOutDown', 'blackfyre' ) => array(
						'value' => 'slideOutDown',
						'type' => 'out',
					),
					__( 'slideOutLeft', 'blackfyre' ) => array(
						'value' => 'slideOutLeft',
						'type' => 'out',
					),
					__( 'slideOutRight', 'blackfyre' ) => array(
						'value' => 'slideOutRight',
						'type' => 'out',
					),
					__( 'slideOutUp', 'blackfyre' ) => array(
						'value' => 'slideOutUp',
						'type' => 'out',
					),
				),
			),
		);

		/**
		 * Used to override animation style list
		 * @since 4.4
		 */

		return apply_filters( 'vc_param_animation_style_list', $styles );
	}

	/**
	 * @param array $styles - array of styles to group
	 * @param string|array $type - what type to return
	 *
	 * @since 4.4
	 * @return array
	 */
	public function groupStyleByType( $styles, $type ) {
		$grouped = array();
		foreach ( $styles as $group ) {
			$inner_group = array( 'values' => array() );
			if ( isset( $group['label'] ) ) {
				$inner_group['label'] = $group['label'];
			}
			foreach ( $group['values'] as $key => $value ) {
				if ( ( is_array( $value ) && isset( $value['type'] ) && ( ( is_string( $type ) && $value['type'] == $type ) || is_array( $type ) && in_array( $value['type'], $type ) ) ) || ! is_array( $value ) || ! isset( $value['type'] ) ) {
					$inner_group['values'][ $key ] = $value;
				}
			}
			if ( ! empty( $inner_group['values'] ) ) {
				$grouped[] = $inner_group;
			}
		}

		return $grouped;
	}

	/**
	 * Set variables and register animate-css asset
	 * @since 4.4
	 *
	 * @param $settings
	 * @param $value
	 */
	public function __construct( $settings, $value ) {
		$this->settings = $settings;
		$this->value = $value;
		wp_register_style( 'animate-css', vc_asset_url( 'lib/bower/animate-css/animate.min.css' ), array(), WPB_VC_VERSION, false );
	}

	/**
	 * Render edit form output
	 * @since 4.4
	 * @return string
	 */
	public function render() {
		$output = '<div class="vc_row">';
		wp_enqueue_style( 'animate-css' );

		$styles = $this->animationStyles();
		if ( isset( $this->settings['settings']['type'] ) ) {
			$styles = $this->groupStyleByType( $styles, $this->settings['settings']['type'] );
		}

		if ( is_array( $styles ) && ! empty( $styles ) ) {
			$left_side = '<div class="vc_col-sm-6">';
			$build_style_select = "\n" . '<select class="vc_param-animation-style">' . "\n";
			foreach ( $styles as $style ) {
				$build_style_select .= "\t\t" . '<optgroup ' . ( isset( $style['label'] ) ? 'label="' . $style['label'] . '"' : '' ) . '>' . "\n";
				if ( is_array( $style['values'] ) && ! empty( $style['values'] ) ) {
					foreach ( $style['values'] as $key => $value ) {
						$build_style_select .= "\t\t\t" . '<option value="' . ( is_array( $value ) ? $value['value'] : $value ) . '">' . $key . '</option>' . "\n";
					}
				}
				$build_style_select .= "\t\t" . '</optgroup>' . "\n";
			}
			$build_style_select .= '</select>' . "\n";
			$left_side .= $build_style_select;
			$left_side .= '</div>'; // Close left_side div
			$output .= $left_side;

			$right_side = '<div class="vc_col-sm-6">';
			$right_side .= '<div class="vc_param-animation-style-preview"><button class="vc_btn vc_btn-grey vc_btn-sm vc_param-animation-style-trigger">' . __( 'Animate it', 'blackfyre' ) . '</button></div>';
			$right_side .= '</div>'; // Close right_side div
			$output .= $right_side;
		}

		$output .= '</div>'; // Close Row
		$output .= '<input name="' .
		           $this->settings['param_name'] .
		           '" class="wpb_vc_param_value  ' .
		           $this->settings['param_name'] . ' ' .
		           $this->settings['type'] . '_field" type="hidden" value="' . $this->value . '" ' .
		           ' />';

		return $output;
	}
}

/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered 'values'.
 *
 * @param array $settings - parameter settings in vc_map
 * @param string $value - parameter value
 * @param string $tag - shortcode tag
 *
 * vc_filter: vc_animation_style_render_filter - filter to override editor form field output
 *
 * @since 4.4
 * @return mixed|void rendered template for params in edit form
 *
 */
function vc_animation_style_form_field( $settings, $value, $tag ) {

	$field = new Vc_ParamAnimation( $settings, $value, $tag );

	/**
	 * Filter used to override full output of edit form field animation style
	 * @since 4.4
	 */

	return apply_filters( 'vc_animation_style_render_filter', $field->render(), $settings, $value, $tag );
}

