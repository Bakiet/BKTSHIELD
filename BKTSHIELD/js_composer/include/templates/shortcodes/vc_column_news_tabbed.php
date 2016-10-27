<?php
$el_news_tabbed_number_posts = $el_news_tabbed_categories =  $el_news_tabbed_title = $el_class = '';
$posts = array();
extract( shortcode_atts( array(
    'el_news_tabbed_title' => '',
    'el_news_tabbed_number_posts' => '',
    'el_class' => '',
    'el_news_tabbed_categories' => ''
), $atts ) );
if(empty($css)) $css = '';
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_text_column wpb_content_element ' . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
wp_enqueue_script('jquery-ui-tabs');
?>

<div class="<?php echo $css_class; if(!empty($el_class)) echo $el_class; ?>">
    <div class="wpb_wrapper">
        <div class="title-wrapper">
            <h3 class="widget-title"><i class="fa fa-newspaper-o"></i> <?php if(!empty($el_news_tabbed_title)) echo $el_news_tabbed_title; ?></h3>
            <div class="clear"></div>
        </div>
        <div class="news_tabbed">
        <div id="block_tabs_<?php echo  rand(1, 100); ?>" class="block_tabs">
            <div class="tab-inner">
                <ul class="nav cf nav-tabs">

                 <?php

                    $ct = array();
                    if ( $el_news_tabbed_categories != '' ) {
                        $el_news_tabbed_categories = explode( ",", $el_news_tabbed_categories );
                        foreach ( $el_news_tabbed_categories as $category ) {
                            array_push( $ct, $category );
                        }
                    }

                    $args = array( 'taxonomy' => 'category', 'hide_empty' => true, 'include' => $ct  );
                    $terms = get_terms('category', $args);

                    $count = count($terms); $i=0;
                    if ($count > 0) {
                    foreach ($terms as $term) {
                    $i++;

                    echo '<li >
                            <a href="#tab-' .$i.'">' . $term->name . '</a>
                        </li>';
                                                }
                                    }  ?>
                </ul>
                <div class="wcontainer">
                <?php
                $j=0;
                foreach ($terms as $term) {
                $j++;
                $termsarray=array();
                $termsarray[]= $term->term_id; ?>
                    <div class="tab tab-content" id="tab-<?php echo $j; ?>" >
                        <ul class="newsbv">
                        <?php $post_ids = get_objects_in_term( $termsarray, 'category' ); ?>

                            <?php query_posts(array(  'posts_per_page' => $el_news_tabbed_number_posts, 'post__in' => $post_ids )); ?>
                            <?php $i = 0; ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <li class="<?php if( $i == 0 ) { ?>newsbv-item-first<?php }else{ echo 'newsbv-item'; }?>">
                                    <div class="newsb-thumbnail">
                                        <a rel="bookmark" href="<?php the_permalink(); ?>">


                                            <?php if(strlen( $img = get_the_post_thumbnail( get_the_ID(), array( 150, 150 ) ) ) ){

                                                    $thumb = get_post_thumbnail_id();
                                                    $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL

                                                    if($i == 0){
                                                    $image = blackfyre_aq_resize( $img_url, 422, 422, true, '', true ); //resize & crop img

                                                        }else{
                                                    $image = blackfyre_aq_resize( $img_url, 75, 75, true, '', true ); //resize & crop img
                                                        }
                                                    ?>
                                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />

                                            <?php } else{
                                                        if($i == 0){ ?>
                                                        <img src="<?php echo get_template_directory_uri().'/img/defaults/305x305.jpg'?> " alt="<?php the_title(); ?>" />
                                                    <?php }else{  ?>
                                                        <img src="<?php echo get_template_directory_uri().'/img/defaults/75x75.jpg'?> " alt="<?php the_title(); ?>" />
                                            <?php   }

                                                }?>
                                            <span class="overlay-link"></span>
                                        </a>
                                    </div><!--newsb-thumbnail -->

                                        <h4 class="newsb-title"><a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="post-meta">
                                            <i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> -
                                              <?php if ( is_plugin_active( 'disqus-comment-system/disqus.php' )){ ?>
                                                <a  href="<?php echo the_permalink(); ?>#comments" >
                                                <i class="fa fa-comments-o"></i> <?php comments_number( __('0', 'blackfyre'), __('1', 'blackfyre'), __('%', 'blackfyre') ); ?></a> &nbsp;
                                               <?php }else{ ?>
                                                <a data-original-title="<?php comments_number( __('No comments in this post', 'blackfyre'), __('One comment in this post', 'blackfyre'), __('% comments in this post', 'blackfyre')); ?>" href="<?php echo the_permalink(); ?>#comments" data-toggle="tooltip">
                                                <i class="fa fa-comments-o"></i> <?php comments_number( __('0', 'blackfyre'), __('1', 'blackfyre'), __('%', 'blackfyre') ) ?></a> &nbsp;

                                               <?php } ?>
                                        </p>
                                        <?php if( $i == 0 ) : ?>
                                        <?php global $more; $more = 1; echo substr(get_the_content(), 0,198);echo '[...]' ?>
                                        <?php endif; ?>

                                </li>
                        <?php $i++; endwhile;endif; ?>

                    <?php wp_reset_query(); ?>
                        </ul>
                        <div class="clear"></div>
                    </div><!--tab-content -->
                 <?php } ?>
            </div>
        </div>
    </div>
</div>
    </div>
</div>