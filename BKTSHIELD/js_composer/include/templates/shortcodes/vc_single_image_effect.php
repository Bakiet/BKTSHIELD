<?php
$image  = $link = $img_link_target  = $title  = $css_animation = '';

extract( shortcode_atts( array(
    'title' => '',
    'image' => $image,
    'link' => '',
    'img_link_target' => '_self',
    'css_animation' => ''
), $atts ) );

$css_class .= $this->getCSSAnimation( $css_animation );
$img_src = wp_get_attachment_image_src($image, 'full');
?>
<div class="<?php echo $css_class; ?>">
    <div class="img-heffect">
    	<a target="<?php echo $img_link_target; ?>" href="<?php echo $link; ?>">
    	<div class="img-he-img"><img alt="img" src="<?php echo $img_src[0]; ?>"></div>
    	<h2><?php echo $title; ?></h2>
    	</a>
    </div>
</div>

