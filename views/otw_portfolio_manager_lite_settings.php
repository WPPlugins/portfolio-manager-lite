<?php
	$_wp_column_headers['toplevel_page_otw-pm'] = array(
	'title' => __( 'Title', OTW_PML_TRANSLATION ),
	'order' => __( 'Order', OTW_PML_TRANSLATION )
);
	
	$otw_pm_plugin_options = get_option( 'otw_pm_plugin_options' );
	
	$otw_pm_plugin_options['otw_pm_promotions'] = get_option( $otw_pml_plugin_id.'_dnms' );
	
	if( empty( $otw_pm_plugin_options['otw_pm_promotions'] ) ){
		$otw_pm_plugin_options['otw_pm_promotions'] = 'on';
	}
	
	$otw_pm_plugin_options = $this->init_portfolio_item_values( $otw_pm_plugin_options );
	
	$otw_details = get_option( 'otw_pm_portfolio_details' );
	
	$message = '';
	$massages = array();
	$messages[1] = __( 'Detail saved.', OTW_PML_TRANSLATION );
	$messages[2] = __( 'Detail deleted.', OTW_PML_TRANSLATION );
	$messages[3] = __( 'OTW Portfolio Light plugin items imported successfully.', OTW_PML_TRANSLATION );
	
	if( isset( $_GET['message'] ) && isset( $messages[ $_GET['message'] ] ) ){
		$message .= $messages[ $_GET['message'] ];
	}
	
	$otw_pm_templates = array( 'default' => __( 'Default Theme\'s Post Template', OTW_PML_TRANSLATION ) ) + $this->otwDispatcher->portfolio_templates;
	
	$otw_pm_social_icons = array(
		'' => __( 'None (default)', OTW_PML_TRANSLATION ),
		'share_icons' => __( 'Share Icons', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_prev_next_nav_options = array(
		'' => __( 'No (default)', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_item_title_options = array(
		'yes' => __( 'Yes (default)', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_related_posts_options = array(
		'' => __( 'No (default)', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_related_posts_criteria_options = array(
		$this->portfolio_category => __( 'Category (default)', OTW_PML_TRANSLATION ),
		$this->portfolio_tag => __( 'Tag', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_item_media_format_options = array(
		'' => __('Keep original file format (default)', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_media_lightbox_options = array(
		'no' => __( 'No', OTW_PML_TRANSLATION )
	);
	
	$otw_pm_grid_pages_options = array(
		'yes' => __( 'Yes (default)', OTW_PML_TRANSLATION ),
		'no' => __( 'No', OTW_PML_TRANSLATION )
	);
?>
<?php if ( $message ) : ?>
<div id="message" class="updated"><p><?php echo $message; ?></p></div>
<?php
 endif; ?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2><?php _e('Portfolio Options', OTW_PML_TRANSLATION); ?></h2>
  <?php
    if( $writableCssError ) {
      $message = __('The file \''.SKIN_PML_PATH.'custom.css\' is not writable. Please make sure you add read/write permissions to this file.', OTW_PML_TRANSLATION);
      echo '<div class="error"><p>'.$message.'</p></div>';
    }

  ?>
	<?php
		if( !empty( $_GET['success_css'] ) && $_GET['success_css'] == 'true' ) {
			$message = __('Options page has been saved.', OTW_PML_TRANSLATION);
			echo '<div class="updated"><p>'.$message.'</p></div>';
			flush_rewrite_rules();
		}
	?>
	<div id="icon-options-general" class="icon32"></div>
	
	<form name="otw-pm-list-style" method="post" action="" class="validate">
		<br />
		<h3><?php _e('OTW Promotions', OTW_PML_TRANSLATION); ?></h3>
		<div class="otw_pm_sp_settings">
			<table class="form-table">
				<tr>
					<th>
						<label for="otw_pm_promotions"><?php _e('Show OTW Promotion Messages in my WordPress admin', OTW_PML_TRANSLATION); ?></label>
						<select id="otw_pm_promotions" name="otw_pm_promotions">
							<option value="on" <?php echo ( isset( $otw_pm_plugin_options['otw_pm_promotions'] ) && ( $otw_pm_plugin_options['otw_pm_promotions'] == 'on' ) )? 'selected="selected"':''?>>on(default)</option>
							<option value="off"<?php echo ( isset( $otw_pm_plugin_options['otw_pm_promotions'] ) && ( $otw_pm_plugin_options['otw_pm_promotions'] == 'off' ) )? 'selected="selected"':''?>>off</option>
						</select>
					</th>
				</tr>
			</table>
		</div>
		<p class="submit">
			<input type="hidden" name="otw_pm_save_settings" value="1" />
			<input type="submit" value="<?php _e( 'Save', OTW_PML_TRANSLATION) ?>" name="submit" class="button button-primary button-hero"/>
		</p>
		<h3><?php _e('Portfolio items single page', OTW_PML_TRANSLATION); ?></h3>
		<div class="otw_pm_sp_settings">
			<table class="form-table">
				<tr>
					<th scope="row"><label for="otw_pm_template"><?php _e('Template', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<select id="otw_pm_template" name="otw_pm_template">
						<?php foreach( $otw_pm_templates as $template_key => $template_name ){?>
							<?php
								$selected = '';
								if( isset( $otw_pm_plugin_options['otw_pm_template'] ) && ( $otw_pm_plugin_options['otw_pm_template'] == $template_key ) ){
									$selected = ' selected="selected"';
								}
							?>
							<?php if( $template_key == '-' ){ ?>
								<option disabled="disabled">------------------------------------------</option>
							<?php }else{ ?>
								<option value="<?php echo $template_key?>"<?php echo $selected?>><?php echo $template_name?></option>
							<?php } ?>
						<?php }?>
						</select>
						<p class="description"><?php _e( 'This is the template for your single portfolio page.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_social_icons"><?php _e('Social Icons', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<select id="otw_pm_social_icons" name="otw_pm_social_icons">
						<?php foreach( $otw_pm_social_icons as $icon_key => $icon_name ){?>
							<?php
								$selected = '';
								if( isset( $otw_pm_plugin_options['otw_pm_social_icons'] ) && ( $otw_pm_plugin_options['otw_pm_social_icons'] == $icon_key ) ){
									$selected = ' selected="selected"';
								}
							?>
							<option value="<?php echo $icon_key?>"<?php echo $selected?>><?php echo $icon_name?></option>
						<?php }?>
						</select>
						<p class="description"><?php _e( 'Show Social Icons for Portfolio items single page.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_item_media_width"><?php _e('Media Width', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_item_media_width" id="otw_pm_item_media_width" value="<?php echo $otw_pm_plugin_options['otw_pm_item_media_width']?>" />
						<p class="description"><?php _e( 'Default 650px.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_item_media_height"><?php _e('Media Height', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_item_media_height" id="otw_pm_item_media_height" value="<?php echo $otw_pm_plugin_options['otw_pm_item_media_height']?>" />
						<p class="description"><?php _e( 'Default 580px.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
			</table>
		</div>
		<p class="submit">
			<input type="hidden" name="otw_pm_save_settings" value="1" />
			<input type="submit" value="<?php _e( 'Save', OTW_PML_TRANSLATION) ?>" name="submit" class="button button-primary button-hero"/>
		</p>
		<h3><?php _e('Slugs', OTW_PML_TRANSLATION); ?></h3>
		<div class="otw_pm_sp_settings">
			<table class="form-table">
				<tr>
					<th scope="row"><label for="otw_pm_portfolio_slug"><?php _e('Portfolio Single Page Slug', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_portfolio_slug" id="otw_pm_portfolio_slug" value="<?php echo $otw_pm_plugin_options['otw_pm_portfolio_slug']?>" />
						<p class="description"><?php _e( 'Edit the Portfolio Single Page Slug. Default is: '.$this->portfolio_post_type, OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_portfolio_category_slug"><?php _e('Portfolio Category Slug', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_portfolio_category_slug" id="otw_pm_portfolio_category_slug" value="<?php echo $otw_pm_plugin_options['otw_pm_portfolio_category_slug']?>" />
						<p class="description"><?php _e( 'Edit the Portfolio Category Slug. Default is: '.$this->portfolio_category, OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_portfolio_tag_slug"><?php _e('Portfolio Tag Slug', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_portfolio_tag_slug" id="otw_pm_portfolio_tag_slug" value="<?php echo $otw_pm_plugin_options['otw_pm_portfolio_tag_slug']?>" />
						<p class="description"><?php _e( 'Edit the Portfolio Tag Slug. Default is: '.$this->portfolio_tag, OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
			</table>
		</div>
		<br />
		<h3><?php _e('Category & Tag Archive Pages', OTW_PML_TRANSLATION); ?></h3>
		<div class="otw_pm_sp_settings">
			<table class="form-table">
				<tr>
					<th scope="row"><label for="otw_pm_archive_media_width"><?php _e('Media Width', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_archive_media_width" id="otw_pm_archive_media_width" value="<?php echo $otw_pm_plugin_options['otw_pm_archive_media_width']?>" />
						<p class="description"><?php _e( 'Default 220px.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_archive_media_height"><?php _e('Media Height', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<input type="text" name="otw_pm_archive_media_height" id="otw_pm_archive_media_height" value="<?php echo $otw_pm_plugin_options['otw_pm_archive_media_height']?>" />
						<p class="description"><?php _e( 'Default 170px.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="otw_pm_archive_media_format"><?php _e('Media Lightbox Format', OTW_PML_TRANSLATION); ?></label></th>
					<td>
						<select id="otw_pm_archive_media_format" name="otw_pm_archive_media_format">
						<?php foreach( $otw_pm_item_media_format_options as $key => $name ){?>
							<?php
								$selected = '';
								if( isset( $otw_pm_plugin_options['otw_pm_archive_media_format'] ) && ( $otw_pm_plugin_options['otw_pm_archive_media_format'] == $key ) ){
									$selected = ' selected="selected"';
								}
							?>
							<option value="<?php echo $key?>"<?php echo $selected?>><?php echo $name?></option>
						<?php }?>
						</select>
						<p class="description"><?php _e( 'Cropping images formats.', OTW_PML_TRANSLATION )?></p>
					</td>
				</tr>
			</table>
		</div>
		<p class="submit">
			<input type="submit" value="<?php _e( 'Save', OTW_PML_TRANSLATION) ?>" name="submit" class="button button-primary button-hero"/>
		</p>
		<h3><?php _e('Custom CSS', OTW_PML_TRANSLATION); ?></h3>
		<p class="description"><?php _e('Adjust your own CSS for all of your Portfolio Lists. Please use with caution.', OTW_PML_TRANSLATION); ?></p>
		
		
		<textarea name="otw_css" cols="100" rows="35" class="otw-pm-custom-css" ><?php echo $customCss;?></textarea>
		<p class="submit">
			<input type="submit" value="<?php _e( 'Save', OTW_PML_TRANSLATION) ?>" name="submit" class="button button-primary button-hero"/>
		</p>
		<?php if( isset( $import_from_light ) && $import_from_light ){?>
		<br />
		<h3><?php _e('Import from OTW Portfolio Light', OTW_PML_TRANSLATION); ?></h3>
		<p class="description"><?php _e( 'This button will import portfolio items from your OTW Portfolio Light plugin into Portfolio Manager Pro.', OTW_PML_TRANSLATION) ?></p>
		<br />
		<a href="admin.php?page=otw-pm-import-from-light" class="add-new-h2"><?php _e('Import from OTW Portfolio Light', OTW_PML_TRANSLATION); ?></a>
		<?php }?>
	</form>
</div>