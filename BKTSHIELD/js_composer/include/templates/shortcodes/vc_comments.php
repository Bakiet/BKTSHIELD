<?php
$el_comments_title = '';
global $post;
extract( shortcode_atts( array(
    'el_comments_title' => '',
), $atts ) );

?>

<div class="block mcomments">
    <div class="title-wrapper"><h3 class="widget-title"><i class="fa fa-comments"></i>&nbsp;<?php if(!empty($el_comments_title)) echo $el_comments_title; ?></h3></div>
    <div class="wcontainer">
<?php if(comments_open()){?>
      <?php comments_template('/short-comments-blog.php'); ?>
<?php }else{_e('Comments are closed!', 'blackfyre');} ?>
    </div>
</div>
