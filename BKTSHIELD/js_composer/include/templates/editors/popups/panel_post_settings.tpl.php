<div id="vc_post-settings-panel" class="vc_panel" style="display: none;">
	<div class="vc_panel-heading">
		<a title="<?php _e( 'Close panel', 'blackfyre' ); ?>" href="#" class="vc_close" data-dismiss="panel"
		   aria-hidden="true"><i class="vc_icon"></i></a>
		<a title="<?php _e( 'Hide panel', 'blackfyre' ); ?>" href="#" class="vc_transparent" data-transparent="panel"
		   aria-hidden="true"><i class="vc_icon"></i></a>

		<h3 class="vc_panel-title"><?php _e( 'Page Settings', 'blackfyre' ) ?></h3>
	</div>
	<div class="vc_panel-body vc_properties-list">
		<div class="vc_row">
			<div class="vc_col-sm-12 vc_column" id="vc_settings-title-container">
				<div class="wpb_element_label"><?php _e( 'Page title', 'blackfyre' ) ?></div>
				<div class="edit_form_line">
					<input name="page_title" class="wpb-textinput vc_title_name" type="text" value=""
					       id="vc_page-title-field"
					       placeholder="<?php _e( 'Please enter page title', 'blackfyre' ) ?>">
					<span
						class="vc_description"><?php printf( __( 'Change title of the current %s (Note: changes may not be displayed in a preview, but will take effect after saving page).', 'blackfyre' ), get_post_type() ); ?></span>
				</div>
			</div>
			<div class="vc_col-sm-12 vc_column">
				<div class="wpb_element_label"><?php _e( 'Custom CSS settings', 'blackfyre' ) ?></div>
				<div class="edit_form_line">
					<pre id="wpb_csseditor" class="wpb_content_element custom_css wpb_frontend"></pre>
					<span
						class="vc_description vc_clearfix"><?php _e( 'Enter custom CSS (Note: it will be outputted only on this particular page).', "js_composer" ) ?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="vc_panel-footer">
		<button type="button" class="vc_btn vc_btn-default"
		        data-dismiss="panel"><?php _e( 'Close', 'blackfyre' ) ?></button>
		<button type="button" class="vc_btn vc_btn-primary"
		        data-save="true"><?php _e( 'Save Changes', 'blackfyre' ) ?></button>
	</div>
</div>
