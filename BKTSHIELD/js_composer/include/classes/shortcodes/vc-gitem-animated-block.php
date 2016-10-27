<?php
require_once vc_path_dir( 'SHORTCODES_DIR', 'vc-gitem.php' );

class WPBakeryShortCode_VC_Gitem_Animated_Block extends WPBakeryShortCode_VC_Gitem {
	protected static $animations = array();

	public function itemGrid() {
		$output = '';
		$output .= '<div class="vc_gitem-animated-block-content-controls">'
		           . '<ul class="vc_gitem-tabs vc_clearfix" data-vc-gitem-animated-block="tabs">'
		           . '</ul>'
		           . '</div>';
		$output .= ''
		           . '<div class="vc_gitem-zone-tab vc_clearfix" data-vc-gitem-animated-block="add-a"></div>'
		           . '<div class="vc_gitem-zone-tab vc_clearfix" data-vc-gitem-animated-block="add-b"></div>';

		return $output;
	}

	public function containerHtmlBlockParams( $width, $i ) {
		return 'class="vc_gitem-animated-block-content"';
	}

	public static function animations() {
		return array(
			__( 'Single block (no animation)', 'blackfyre' ) => '',
			__( 'Double block (no animation)', 'blackfyre' ) => 'none',
			__( 'Fade in', 'blackfyre' ) => 'fadeIn',
			__( 'Scale in', 'blackfyre' ) => 'scaleIn',
			__( 'Scale in with rotation', 'blackfyre' ) => 'scaleRotateIn',
			__( 'Blur out', 'blackfyre' ) => 'blurOut',
			__( 'Blur scale out', 'blackfyre' ) => 'blurScaleOut',
			__( 'Slide in from left', 'blackfyre' ) => 'slideInRight',
			__( 'Slide in from right', 'blackfyre' ) => 'slideInLeft',
			__( 'Slide bottom', 'blackfyre' ) => 'slideBottom',
			__( 'Slide top', 'blackfyre' ) => 'slideTop',
			__( 'Vertical flip in with fade', 'blackfyre' ) => 'flipFadeIn',
			__( 'Horizontal flip in with fade', 'blackfyre' ) => 'flipHorizontalFadeIn',
			__( 'Go top', 'blackfyre' ) => 'goTop20',
			__( 'Go bottom', 'blackfyre' ) => 'goBottom20',
		);
	}
}
