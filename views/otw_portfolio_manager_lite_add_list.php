<?php
	$writableCssError = $this->check_writing( SKIN_PML_PATH );
	
	$selectOptionData = array(
		array( 'value' => 0, 'text'	=> '------' ),
		array( 'value' => '1-column', 'text' => __('Grid - Portfolio 1 Column', OTW_PML_TRANSLATION) ),
		array( 'value' => '4-column', 'text' => __('Grid - Portfolio 4 Columns', OTW_PML_TRANSLATION) ),
		array( 'value' => '1-column-lft-img', 'text' => __('Image Left - Portfolio 1 Column', OTW_PML_TRANSLATION) ),
		array( 'value' => '3-column-news', 'text' => __('Newspaper - Portfolio 3 Columns', OTW_PML_TRANSLATION) ),
		array( 'value' => 'timeline', 'text' => __('Timeline', OTW_PML_TRANSLATION) ),
		array( 'value' => 'slider', 'text' => __('Slider', OTW_PML_TRANSLATION) ),
		array( 'value' => '3-column-carousel', 'text' => __('Carousel - 3 Columns', OTW_PML_TRANSLATION) ),
		array( 'value' => 'widget-lft', 'text' => __('Widget Style - Image Left', OTW_PML_TRANSLATION) )
	);
	
	$selectPaginationData = array(
		array( 'value' => '0', 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'pagination', 'text' => __('Standard Pagination', OTW_PML_TRANSLATION) )
	);	

	$selectSocialData = array(
		array( 'value' => '0', 'text' => __('None (default)', OTW_PML_TRANSLATION) )
	);	

	$selectOrderData = array(
		array( 'value' => 'date_desc', 'text' => __('Latest Created (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'date_asc', 'text' => __('Oldest Created', OTW_PML_TRANSLATION) ),
		array( 'value' => 'modified_desc', 'text' => __('Latest Modified', OTW_PML_TRANSLATION) ),
		array( 'value' => 'modified_asc', 'text' => __('Oldest Modified', OTW_PML_TRANSLATION) ),
		array( 'value' => 'title_asc', 'text' => __('Alphabetically: A-Z', OTW_PML_TRANSLATION) ),
		array( 'value' => 'title_desc', 'text' => __('Alphabetically: Z-A', OTW_PML_TRANSLATION) ),
		array( 'value' => 'rand_', 'text' => __('Random', OTW_PML_TRANSLATION) )
	);

	$selectHoverData = array(
		array( 'value' => 'hover-none', 'text' => __('None', OTW_PML_TRANSLATION) ),
		array( 'value' => 'otw_portfolio_manager-hover-effect-5', 'text' => __('Hover 5', OTW_PML_TRANSLATION) ),
		array( 'value' => 'otw_portfolio_manager-hover-effect-11', 'text' => __('Hover 11', OTW_PML_TRANSLATION) )
	);

	$selectIconData = array(
		array( 'value' => 0, 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-expand', 'text' => __('Icon Expand', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-youtube-play', 'text' => __('Icon YouTube Play', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-file', 'text' => __('Icon File', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-book', 'text' => __('Icon Book', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-check-sign', 'text' => __('Icon Check Sign', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-comments', 'text' => __('Icon Comments', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-ok-sign', 'text' => __('Icon OK Sign', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-zoom-in', 'text' => __('Icon Zoom In', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-thumbs-up-alt', 'text' => __('Icon Thumbs Up Alt', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-plus-sign', 'text' => __('Icon Plus Sign', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-cloud', 'text' => __('Icon Cloud', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-chevron-sign-right', 'text' => __('Icon Chevron Sign Right', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-hand-right', 'text' => __('Icon Hand Right', OTW_PML_TRANSLATION) ),
		array( 'value' => 'icon-fullscreen', 'text' => __('Icon Fullscreen', OTW_PML_TRANSLATION) ),
	);
	
	$selectLinkData = array(
		array( 'value' => 'single', 'text' => __('Single Post (default)', OTW_PML_TRANSLATION) )
	);

	$selectMetaData = array(
		array( 'value' => 'horizontal', 'text' => __('Horizontal (default)', OTW_PML_TRANSLATION) )
	);

	$selectStripTags = array(
		array( 'value' => 'yes', 'text' => __('Yes (default)', OTW_PML_TRANSLATION) )
	);
	
	$selectStripShortcodes = array(
		array( 'value' => 'yes', 'text' => __('Yes (default)', OTW_PML_TRANSLATION) )
	);

	$selectSliderAlignmentData = array(
		array( 'value' => 'left', 'text' => __('Left (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'center', 'text' => __('Center', OTW_PML_TRANSLATION) ),
		array( 'value' => 'right', 'text' => __('Right', OTW_PML_TRANSLATION) ),
	);

	$selectMosaicData = array(
		array( 'value' => 'full', 'text' => __('Full Content on Hover (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'slide', 'text' => __('Slide Content on Hover', OTW_PML_TRANSLATION) ),
	);

	$selectFontSizeData = array(
		array( 'value' => '', 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => '8', 'text' => '8px' ),
		array( 'value' => '10', 'text' => '10px' ),
		array( 'value' => '12', 'text' => '12px' ),
		array( 'value' => '14', 'text' => '14px' ),
		array( 'value' => '16', 'text' => '16px' ),
		array( 'value' => '18', 'text' => '18px' ),
		array( 'value' => '20', 'text' => '20px' ),
		array( 'value' => '22', 'text' => '22px' ),
		array( 'value' => '24', 'text' => '24px' ),
		array( 'value' => '26', 'text' => '26px' ),
		array( 'value' => '28', 'text' => '28px' ),
		array( 'value' => '30', 'text' => '30px' ),
		array( 'value' => '32', 'text' => '32px' ),
		array( 'value' => '34', 'text' => '34px' ),
		array( 'value' => '36', 'text' => '36px' ),
		array( 'value' => '38', 'text' => '38px' ),
		array( 'value' => '40', 'text' => '40px' ),
	);

	$selectFontStyleData = array(
		array( 'value' => '', 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'regular', 'text' => __('Regular', OTW_PML_TRANSLATION) ),
		array( 'value' => 'bold', 'text' => __('Bold', OTW_PML_TRANSLATION) ),
		array( 'value' => 'italic', 'text' => __('Italic', OTW_PML_TRANSLATION) ),
		array( 'value' => 'bold_italic', 'text' => __('Bold and Italic', OTW_PML_TRANSLATION) ),
	);

	$selectViewTargetData = array(
	);

	$selectCategoryTagRelation = array(
		array( 'value' => 'OR', 'text' => __('categories OR tags (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'AND', 'text' => __('categories AND tags', OTW_PML_TRANSLATION) )
	);
	
	$thumb_format_options = array(
		'' => __('Keep original file format (default)', OTW_PML_TRANSLATION ),
		'jpg' => 'jpg',
		'png' => 'png',
		'gif' => 'gif'
	);
	
	$selectBorderStyleData = array(
		array( 'value' => '', 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => 'solid', 'text' => 'Solid' ),
		array( 'value' => 'dashed', 'text' => 'Dashed' ),
		array( 'value' => 'dotted', 'text' => 'Dotted' )
	);
	
	$selectBorderSizeData = array(
		array( 'value' => '', 'text' => __('None (default)', OTW_PML_TRANSLATION) ),
		array( 'value' => '1', 'text' => '1px' ),
		array( 'value' => '2', 'text' => '2px' ),
		array( 'value' => '3', 'text' => '3px' ),
		array( 'value' => '4', 'text' => '4px' )
	);
	
	
	$js_template_options = array();
	
	if( isset( $templateOptions ) && is_array( $templateOptions ) ){
		
		foreach( $templateOptions as $t_option ){
			$js_template_options[ $t_option['name'] ] = $t_option;
		}
	}
	
	$total_meta_elements = 5;
	
	$meta_elements = array();
	$meta_elements['category'] = __( 'category', OTW_PML_TRANSLATION );
	$meta_elements['tags'] = __( 'tags', OTW_PML_TRANSLATION );
	
	$otw_details = $this->get_details();
	
	foreach( $otw_details as $detail ){
		$meta_elements['otw_portfolio_detail_'.$detail['id'] ] = $detail['title'];
		$total_meta_elements++;
	}
	
	$meta_elements_height = ( ( $total_meta_elements + 2 ) * 20 );
?>
<div class="wrap">
	<div id="icon-edit" class="icon32"></div>
	<h2>
		<?php
			if( empty($this->errors) && !empty($content['list_name']) ) {
				echo __( 'Edit Portfolio List', OTW_PML_TRANSLATION ); 	
			} else {
				echo __( 'Add New Portfolio List', OTW_PML_TRANSLATION );
			}
		?>
		<a class="add-new-h2" href="admin.php?page=otw-pml"><?php _e('Back', OTW_PML_TRANSLATION);?></a>
	</h2>
	<?php
		if( $writableCssError ) {
			$message = __('The folder \''.SKIN_PML_PATH.'\' is not writable. Please make sure you add read/write permissions to this folder.', OTW_PML_TRANSLATION);
			 echo '<div class="error"><p>'.$message.'</p></div>';
		}
	?>
	<?php
	if( !empty( $_GET['success'] ) && $_GET['success'] == 'true' ) {
			$message = __('Item was saved.', OTW_PML_TRANSLATION);
			echo '<div class="updated"><p>'.$message.'</p></div>';
	}
	?>
	<form name="otw-pm-list" method="post" action="" class="validate">

		<input type="hidden" name="id" value="<?php echo $nextID;?>" />
		<input type="hidden" name="edit" value="<?php echo $edit;?>" />
		<input type="hidden" name="date_created" value="<?php echo $content['date_created'];?>" />
		<input type="hidden" name="user_id" value="<?php echo get_current_user_id();?>" />

		<?php
			if( !empty($this->errors) ){
				$errorMsg = __('Oops! Please check form for errors.', OTW_PML_TRANSLATION);
				echo '<div class="error"><p>'.$errorMsg.'</p></div>';
			}
		?>
		<script type="text/javascript">
		<?php
			
			echo 'var js_template_options='.json_encode( $js_template_options ).';'
		?>
		</script>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row"><label for="list_name" class="required"><?php _e('Portfolio List Name', OTW_PML_TRANSLATION);?></label></th>
					<td>
						<input type="text" name="list_name" id="list_name" size="53" value="<?php echo $content['list_name'];?>" />
						<p class="description"><?php _e( 'Note: The List Name is going to be used ONLY for the admin as a reference.', OTW_PML_TRANSLATION);?></p>
						<div class="inline-error">
							<?php 
								( !empty($this->errors['list_name']) )? $errorMessage = $this->errors['list_name'] : $errorMessage = ''; 
								echo $errorMessage;
							?>
						</div>
					</td>
				</tr>				
				<tr valign="top">
					<th scope="row"><label for="template" class="required"><?php _e('Choose Template', OTW_PML_TRANSLATION);?></label></th>
					<td>
						<select id="template" name="template" class="js-template-style">
						<?php 
						foreach( $selectOptionData as $optionData ): 
							$selected = '';
							if( $optionData['value'] === $content['template'] ) {
								$selected = 'selected="selected"';
							}
							echo "<option value=\"".$optionData['value']."\" ".$selected.">".$optionData['text']."</option>";
							
						endforeach;
						?>
						</select>
						<div class="inline-error">
							<?php 
								( !empty($this->errors['template']) )? $errorMessage = $this->errors['template'] : $errorMessage = ''; 
								echo $errorMessage;
							?>
						</div>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="categories"><?php _e('Portfolio Categories:', OTW_PML_TRANSLATION);?></label>
					</th>
					<td>
						<?php 
								$categoriesCount 	= wp_count_terms( $this->portfolio_category, array( 'number' => '', 'hide_empty' => false  ) );
								$categoriesStatus = 'otw-admin-hidden';
								$categoriesAll 		= '';
								$categoriesInput 	= '';
								if( !empty($content['select_categories']) ) {
									
									$categoriesStatus = '';
									$categoriesAll = 'checked="checked"';
									$categoriesInput = 'disabled="disabled"';
								}
						?>
						<select name="categories[]" id="categories" class="js-categories" multiple="multiple" data-value="<?php echo $content['categories'];?>" <?php echo $categoriesInput ?>></select><br />
						<?php _e('- OR -', OTW_PML_TRANSLATION); ?><br/>
						<input type="hidden" name="all_categories" class="js-categories-select" value="<?php echo $content['all_categories'];?>" />
						<input type="checkbox" name="select_categories" value="1" data-size="<?php echo $categoriesCount;?>" class="js-select-categories" id="select_all_categories" data-section="categories" <?php echo $categoriesAll;?> />
						<label for="select_all_categories">
							<?php _e('Select All', OTW_PML_TRANSLATION);?>
							<span class="js-categories-count <?php echo $categoriesStatus; ?>">
								(
								<span class="js-categories-counter"><?php echo $categoriesCount;?></span>
								<?php _e(' categories selected', OTW_PML_TRANSLATION);?>
								)
							</span>
						</label>
						<p class="description"><?php _e( 'Choose categories to include posts from those categories in your list or use the Select all checkbox to include posts from all categories.', OTW_PML_TRANSLATION);?></p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="tags"><?php _e('Portfolio Tags:', OTW_PML_TRANSLATION);?></label>
					</th>
					<td>
						<?php 
								$tagsCount 	= wp_count_terms( $this->portfolio_tag, array( 'number' => '', 'hide_empty' => false  ) );
								$tagsStatus = 'otw-admin-hidden';
								$tagsAll 		= '';
								$tagsInput 	= '';
								if( !empty($content['select_tags']) ) {
									$tagsStatus = '';
									$tagsAll = 'checked="checked"';
									$tagsInput = 'disabled="disabled"';
								}
						?>
						<select name="tags[]" id="tags" class="js-tags" multiple="multiple" data-value="<?php echo $content['tags'];?>" <?php echo $tagsInput;?>></select><br />
						<?php _e('- OR -', OTW_PML_TRANSLATION); ?><br/><br/>
						<input type="hidden" name="all_tags" class="js-tags-select" value="<?php echo $content['all_tags'];?>" />
						<input type="checkbox" name="select_tags" value="1" data-size="<?php echo $tagsCount;?>" class="js-select-tags" id="select_all_tags" data-section="tags" <?php echo $tagsAll;?>/>
						<label for="select_all_tags">
							<?php _e('Select All', OTW_PML_TRANSLATION); ?>
							<span class="js-tags-count <?php echo $tagsStatus;?>">
								(
								<span class="js-tags-counter"><?php echo $tagsCount;?></span>
								<?php _e(' tags selected', OTW_PML_TRANSLATION);?>
								)
							</span>
						</label>
						<p class="description"><?php _e( 'Choose tags to include posts from those tags in your list or use the Select all checkbox to include posts from all tags.', OTW_PML_TRANSLATION);?></p>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="authors"><?php _e('Post Author:', OTW_PML_TRANSLATION);?></label>
					</th>
					<td>
						<?php 
								$count_users = count_users();
								$usersCount = $count_users['total_users'];
								$usersStatus = 'otw-admin-hidden';
								$usersAll 		= '';
								$usersInput 	= '';
								if( !empty($content['select_users']) ) {
									$usersStatus = '';
									$usersAll = 'checked="checked"';
									$usersInput = 'disabled="disabled"';
								}
						?>
						<select name="users[]" id="users" class="js-users" multiple="multiple" data-value="<?php echo $content['users'];?>" <?php echo $usersInput ?>></select><br />
						<?php _e('- OR -', OTW_PML_TRANSLATION); ?><br/><br/>
						<input type="hidden" name="all_users" class="js-users-select" value="<?php echo $content['all_users'];?>" />
						<input type="checkbox" name="select_users" value="1" data-size="<?php echo $usersCount; ?>" class="js-select-users" id="select_all_users" data-section="users" <?php echo $usersAll;?>/>
						<label for="select_all_users">
							<?php _e('Select All', OTW_PML_TRANSLATION); ?>
							<span class="js-users-count <?php echo $usersStatus; ?>">
								(
								<span class="js-users-counter"><?php echo $usersCount; ?></span>
								<?php _e(' authors selected', OTW_PML_TRANSLATION);?>
								)
							</span>
						</label>
						<p class="description"><?php _e( 'Choose authors to include posts from those authors in your list or use the Select all checkbox to include posts from all authors.', OTW_PML_TRANSLATION);?></p>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<div class="inline-error">
							<?php 
								( !empty($this->errors['content']) )? $errorMessage = $this->errors['content'] : $errorMessage = ''; 
								echo $errorMessage;
							?>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="accordion-container otw-accordion-container">
			<ul class="outer-border">
				
				<!-- List Elements and Order -->
				<li class="control-section accordion-section  add-page top">
					<h3 class="accordion-section-title hndl" tabindex="0" title="<?php _e('List Elements and Order', OTW_PML_TRANSLATION);?>"><?php _e('List Elements and Order', OTW_PML_TRANSLATION);?></h3>
					<div class="accordion-section-content" style="display: none;">
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th scope="row">
											<label for="meta_order"><?php _e('Portfolio List Items', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<div class="active_elements">
												<h3><?php _e('Active Elements', OTW_PML_TRANSLATION);?></h3>
												<input type="hidden" name="portfolio-items" class="js-portfolio-items" value="<?php echo $content['portfolio-items'];?>"/>
												<ul id="meta-active" class="b-pl-box js-pl-active">
												</ul>
											</div>
											<div class="inactive_elements">
												<h3><?php _e('Inactive Elements', OTW_PML_TRANSLATION);?></h3>
												<ul id="meta-inactive" class="b-pl-box js-pl-inactive">
													<li data-item="main" data-value="media" class="b-pl-items js-pl--item"><?php _e('Media', OTW_PML_TRANSLATION);?></li>
													<li data-item="main" data-value="title" class="b-pl-items js-pl--item"><?php _e('Title', OTW_PML_TRANSLATION);?></li>
													<li data-item="main" data-value="meta" class="b-pl-items js-pl--item"><?php _e('Portfolio Item Details', OTW_PML_TRANSLATION);?></li>
													<li data-item="main" data-value="description" class="b-pl-items js-pl--item"><?php _e('Description / Excerpt', OTW_PML_TRANSLATION);?></li>
													<li data-item="main" data-value="continue-reading" class="b-pl-items js-pl--item"><?php _e('Continue Reading', OTW_PML_TRANSLATION);?></li>
												</ul>
											</div>
											<p class="description">
												<?php _e('Drag & drop the items that you\'d like to show in the Active Elements area on the left. Arrange them however you want to see them in your list.', OTW_PML_TRANSLATION);?>
											</p>
											<p class="description">
												<?php _e('The setting will not affect the following templates: Slider, Carousel, Widget Style, Carousel Widget', OTW_PML_TRANSLATION); ?>
											</p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="show-pagination"><?php _e('Show Pagination', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											
										<select id="show-pagination" name="show-pagination">
											<?php 
											foreach( $selectPaginationData as $optionData ): 
												$selected = '';
												if( $optionData['value'] === $content['show-pagination'] ) {
													$selected = 'selected="selected"';
												}
												echo "<option value=\"".$optionData['value']."\" ".$selected.">".$optionData['text']."</option>";
												
											endforeach;
											?>
											</select>
											<p class="description">
												<?php _e('Choose pagination type for your template.', OTW_PML_TRANSLATION); ?><br/>
												<strong><?php _e('Note:', OTW_PML_TRANSLATION);?></strong><br/>
												<?php _e('Widget Style templates support only Load More Pagination.', OTW_PML_TRANSLATION); ?><br/>
												<?php _e('Slider templates do not support pagination.', OTW_PML_TRANSLATION); ?><br/>
												<?php _e('Timeline template will have the Infinite Scroll by default.', OTW_PML_TRANSLATION); ?>
											</p>
										</td>
									</tr>
									<tr id="otw-show-social-icons-custom">
										<th scope="row">
											<label for="show-social-icons-custom"><?php _e('Custom Social Icons', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<textarea id="show-social-icons-custom" name="show-social-icons-custom" rows="6" cols="80"><?php echo ( $content['show-social-icons-custom'] )?></textarea>
											<p class="description"><?php _e( 'Insert your Custom Social Icons. HTML and Shortcodes are allowed.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- .accordion-section-content -->

				</li><!-- .accordion-section -->
				<!-- END List Elements and Order -->

				<!-- Post Order and Limits -->
				<li class="control-section accordion-section add-page top">
					<h3 class="accordion-section-title hndl" tabindex="1" title="<?php _e('Posts Order and Limits', OTW_PML_TRANSLATION);?>"><?php _e('Posts Order and Limits', OTW_PML_TRANSLATION);?></h3>
					<div class="accordion-section-content" style="display: none;">
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr valign="top">
										<th scope="row">
											<label for="posts_limit"><?php _e('Number of Posts in the List:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<input type="text" name="posts_limit" id="posts_limit" value="<?php echo $content['posts_limit'];?>" />
											<p class="description"><?php _e('Please leave empty for all posts.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="posts_limit_skip"><?php _e('Number of Posts to Skip:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<input type="text" name="posts_limit_skip" id="posts_limit_skip" value="<?php echo $content['posts_limit_skip'];?>" />
											<p class="description"><?php _e('By default this field is empty which means no posts will be skipped.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="posts_limit_page"><?php _e('Number of Posts per Page:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<input type="text" name="posts_limit_page" id="posts_limit_page" value="<?php echo $content['posts_limit_page'];?>" />
											<p class="description"><?php _e('Show pagination should be ebabled in the section above in order for this option to work.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="posts_order"><?php _e('Order of Posts:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<select name="posts_order" id="posts_order">
											<?php 
											foreach( $selectOrderData as $optionData ): 
												$selected = '';
												if( $optionData['value'] === $content['posts_order'] ) {
													$selected = 'selected="selected"';
												}
												echo "<option value=\"".$optionData['value']."\" ".$selected.">".$optionData['text']."</option>";
												
											endforeach;
											?>
											</select>
											<p class="description"><?php _e('Choose the order of the posts in the list. Timeline Template will ignore this selection and use Latest Created. Note that when Random is selected and pagination is enabled there might be posts displayed on more than one of the pagination pages.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><!-- .accordion-section-content -->

				</li><!-- .accordion-section -->
				<!-- END Post Order and Limits -->

				<!-- Settings -->
				<li class="control-section accordion-section add-page top">
					<h3 class="accordion-section-title hndl" tabindex="2" title="<?php _e('Settings', OTW_PML_TRANSLATION);?>"><?php _e('Settings', OTW_PML_TRANSLATION);?></h3>
					<div class="accordion-section-content" style="display: none;">
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr valign="top">
										<th scope="row">
											<label for="excerpt_length"><?php _e('Excerpt Length:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<input type="text" name="excerpt_length" id="excerpt_length" value="<?php echo $content['excerpt_length'] ?>" size="53"/>
											<p class="description"><?php _e('Excerpt is pulled from excerpt field for each post. If excerpt fields is empty excerpt is pulled from the text area (the post editor). If Excerpt length is empty or 0 this means pull the entire text.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="image_hover"><?php _e('Hover Effect', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<select name="image_hover" id="image_hover">
											<?php 
											foreach( $selectHoverData as $optionData ): 
												$selected = '';
												if( $optionData['value'] === $content['image_hover'] ) {
													$selected = 'selected="selected"';
												}
												echo "<option value=\"".$optionData['value']."\" ".$selected.">".$optionData['text']."</option>";
												
											endforeach;
											?>
											</select>									
											<p class="description"><?php _e('Choose the hover for the images in the posts list.', OTW_PML_TRANSLATION);?></p>
											<p class="description">
												<?php _e('The setting will not affect the following templates since they have their own specific hovers: Slider, Carousel.', OTW_PML_TRANSLATION); ?> 
											</p>
											<p class="description">
												<?php _e('Widget Templates support only Full and None hover options.', OTW_PML_TRANSLATION); ?> 
											</p>
										</td>
									</tr>

								</tbody>
							</table>
						</div> <!-- .inside -->
					</div><!-- .accordion-section-content -->

				</li><!-- .accordion-section -->
				<!-- END Settings -->

				<!-- Media Tab -->
				<li class="control-section accordion-section add-page top">
					<h3 class="accordion-section-title hndl" tabindex="4" title="<?php _e('Media', OTW_PML_TRANSLATION);?>"><?php _e('Media', OTW_PML_TRANSLATION);?></h3>
					<div class="accordion-section-content" style="display: none;">
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr valign="top">
										<th scope="row">
											<label for="thumb_width"><?php _e('Thumbnail Width', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<?php ( !isset($content['thumb_width']) )? $thumbWidth = '' : $thumbWidth = $content['thumb_width']; ?>
											<input type="text" name="thumb_width" id="thumb_width" size="3" value="<?php echo $thumbWidth;?>" />
											<p class="description"><?php _e('The width for your thumbnails in px. If left empty the default value will be used. Default value for the selected template is: ', OTW_PML_TRANSLATION);?><span class="default_thumb_width"></span></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="thumb_height"><?php _e('Thumbnail Height', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<?php ( !isset($content['thumb_height']) )? $thumbHeight = '' : $thumbHeight = $content['thumb_height']; ?>
											<input type="text" name="thumb_height" id="thumb_height" size="3" value="<?php echo $thumbHeight;?>" />
											<p class="description"><?php _e('The height for your thumbnails in px. If left empty the default value will be used. Default value for the selected template is: ', OTW_PML_TRANSLATION);?><span class="default_thumb_height"></span></p>
										</td>
									</tr>
									<tr valign="top">
										<th scope="row">
											<label for="thumb_format"><?php _e('Thumbnail Format', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<?php ( !isset($content['thumb_format']) )? $thumbFormat = '' : $thumbFormat = $content['thumb_format']; ?>
											<select id="thumb_format" name="thumb_format">
											<?php foreach( $thumb_format_options as $key => $name ){?>
												<?php
													$selected = '';
													if( $thumbFormat == $key ){
														$selected = ' selected="selected"';
													}
												?>
												<option value="<?php echo $key?>"<?php echo $selected?>><?php echo $name?></option>
											<?php }?>
											</select>
											<p class="description"><?php _e('The format for your thumbnails.', OTW_PML_TRANSLATION);?></p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</li><!-- .accordion-section -->
				<!-- Style Tab -->
				
				<li class="control-section accordion-section add-page top">
					<h3 class="accordion-section-title hndl" tabindex="5" title="<?php _e('Styles', OTW_PML_TRANSLATION);?>"><?php _e('Styles', OTW_PML_TRANSLATION);?></h3>
					<div class="accordion-section-content" style="display: none;">
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr valign="top">
										<th scope="row">
											<label for="custom_css"><?php _e('Custom CSS:', OTW_PML_TRANSLATION);?></label>
										</th>
										<td>
											<textarea name="custom_css" cols="70" rows="10"><?php echo str_replace('\\', '', $content['custom_css']);?></textarea>
										</td>
									</tr>
								</tbody>
							</table>
						</div> <!-- .inside -->
					</div><!-- .accordion-section-content -->

				</li><!-- .accordion-section -->
				<!-- Style Tab -->
			</ul><!-- .outer-border -->
			
		</div>

		<p class="submit">
			<input type="submit" value="<?php _e( 'Save', OTW_PML_TRANSLATION) ?>" name="submit-otw-pml" class="button button-primary button-hero"/>
		</p>

	</form>

<div class="live_preview js-preview"></div>