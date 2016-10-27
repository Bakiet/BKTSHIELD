<?php
$el_games =  '';
extract( shortcode_atts( array(
    'el_games' => '',
    'el_class' => '',
    'el_member_title' => ''
), $atts) );

    global $wpClanWars, $post;

    $game_ids = array();
  //  if ( $el_games != '' ) {
    	?>
    	<!--
<div id="buddypress" class="<?php echo $css_class; if(!empty($el_class)) echo $el_class; ?> members-block">
    <div class="wpb_wrapper" id="members">
        <div class="title-wrapper">
            <h3 class="widget-title"><?php if(!empty($el_member_title)) echo $el_member_title; ?></h3>
            <div class="clear"></div>
        </div>
		<ul id="members-list" class="item-list" >
		   <li>
		        <div class="member-list-wrapper">

		            <div class="item-avatar">
		               <a href="http://themes.themicrolex.com/blackfyreWP/members//">
		                <img src="http://gravatar.com/avatar/ccf2e856d472e2211ace58458850aaee?d=mm&amp;s=50&amp;r=G" class="avatar user-15-avatar avatar-50 photo" width="50" height="50" alt="&quot; class=&quot;avatar user-1-avatar avatar-50 photo" style="cursor: pointer;">
		               </a>
		            </div>

		            <div class="item">
		                <div class="item-title">
		                    <a href="http://themes.themicrolex.com/blackfyreWP/members//"></a>
		                    <div class="item-meta"><span class="activity">Joined: 16475 days ago</span></div>
		                </div>
		            </div>
		            <div class="clear"></div>
		        </div>
		    	<div class="member-list-more">
		        </div>
		    </li>
		     <li>
		        <div class="member-list-wrapper">

		            <div class="item-avatar">
		               <a href="http://themes.themicrolex.com/blackfyreWP/members//">
		                <img src="http://gravatar.com/avatar/ccf2e856d472e2211ace58458850aaee?d=mm&amp;s=50&amp;r=G" class="avatar user-15-avatar avatar-50 photo" width="50" height="50" alt="&quot; class=&quot;avatar user-1-avatar avatar-50 photo" style="cursor: pointer;">
		               </a>
		            </div>

		            <div class="item">
		                <div class="item-title">
		                    <a href="http://themes.themicrolex.com/blackfyreWP/members//"></a>
		                    <div class="item-meta"><span class="activity">Joined: 16475 days ago</span></div>
		                </div>
		            </div>
		            <div class="clear"></div>
		        </div>
		    	<div class="member-list-more">
		        </div>
		    </li>
		    <div class="clear"></div>
    </ul>



    </div>
</div>
    	<?php
   // }




?> -->
