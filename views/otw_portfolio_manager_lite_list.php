<?php
	$_wp_column_headers['toplevel_page_otw-pm'] = array(
		'list_name'			=> __( 'Portfolio List Name', OTW_PML_TRANSLATION ),
		'shortcode'			=> __( 'Short Code', OTW_PML_TRANSLATION ),
		'user_id'				=> __( 'Author', OTW_PML_TRANSLATION ),
		'date_created'	=> __( 'Created', OTW_PML_TRANSLATION ),
		'date_modified'	=> __( 'Modified', OTW_PML_TRANSLATION ),
	);
?>
<div class="wrap">
	<div id="icon-edit" class="icon32"></div>
	<h2>
		<?php _e('Portfolio Lists', OTW_PML_TRANSLATION); ?>
		<a class="add-new-h2" href="admin.php?page=otw-pml-add"><?php _e('Add List', OTW_PML_TRANSLATION);?></a>
	</h2>
	<?php
		if( !empty( $action['success'] ) && $action['success'] == 'true' ) {
			$message = __('Item was saved.', OTW_PML_TRANSLATION);
			echo '<div class="updated"><p>'.$message.'</p></div>';
		}

		if( !empty( $action['success_css'] ) && $action['success_css'] == 'true' ) {
			$message = __('Options page has been saved.', OTW_PML_TRANSLATION);
			echo '<div class="updated"><p>'.$message.'</p></div>';
		}

			if( $writableError ) {
				$message = __('The folder \'wp-content/uploads/\' is not writable. Please make sure you add read/write permissions to this folder.', OTW_PML_TRANSLATION);
				echo '<div class="error"><p>'.$message.'</p></div>';
			}

			if( $writableCssError ) {
				$message = __('The file \''.SKIN_PML_PATH.'\' is not writable. Please make sure you add read/write permissions to this file.', OTW_PML_TRANSLATION);
				echo '<div class="error"><p>'.$message.'</p></div>';
			}
	?>

	<?php 
		if( !empty( $otw_pm_lists['otw-pm-list'] ) || $otw_pm_lists['otw-pm-list'] == false ) :
		
		if( is_array(  $otw_pm_lists['otw-pm-list'] ) ){
			$arraySearch = array_keys( $otw_pm_lists['otw-pm-list'] );
		}else if( !isset( $arraySearch ) ){
			$arraySearch = array();
		}
		
		if( preg_grep('/^otw-pm-list-.*/', $arraySearch) ) {
	?>

	<table class="widefat fixed" cellspacing="0">
		<thead>
			<tr>
				<?php foreach( $_wp_column_headers['toplevel_page_otw-pm'] as $key => $name ){?>
					<th><?php echo $name?></th>
				<?php }?>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<?php foreach( $_wp_column_headers['toplevel_page_otw-pm'] as $key => $name ){?>
					<th><?php echo $name?></th>
				<?php }?>
			</tr>
		</tfoot>
		<tbody>
			<?php 
				$index = 0;
				foreach( $otw_pm_lists['otw-pm-list'] as $otw_pm_item ): 
					
					if( is_array($otw_pm_item) ) {

						$user_info = get_userdata( $otw_pm_item['user_id'] );

						//Used to add color to even rows
						$alternate = '';
						if( $index % 2 == 0 ) {
							$alternate = 'class="alternate"';	
						}

						$edit_link = admin_url( 'admin.php?page=otw-pml-add&amp;action=edit&amp;otw-pm-list-id='.$otw_pm_item['id'] );
						$delete_link = admin_url( 'admin.php?page=otw-pml&amp;action=delete&amp;otw-pm-list-id='.$otw_pm_item['id'] );
						$duplicate_link = admin_url( 'admin.php?page=otw-pml-copy&amp;otw-pm-list-id='.$otw_pm_item['id'] );
			?>
			<tr <?php echo $alternate;?> >
				<td>
					<?php echo '<a href="'.$edit_link.'">' . $otw_pm_item['list_name'] . '</a>'; ?>
					<div class="row-actions">
					<?php
						echo '<a href="'.$edit_link.'">' . __('Edit', OTW_PML_TRANSLATION) . '</a>';
						echo ' | <a href="'.$delete_link.'" data-name="'. $otw_pm_item['list_name'] .'" class="js-delete-item">' . __('Delete', OTW_PML_TRANSLATION). '</a>';
						echo ' | <a href="'.$duplicate_link.'" data-name="'. $otw_pm_item['list_name'] .'" class="js-duplicate-item">' . __('Duplicate', OTW_PML_TRANSLATION). '</a>';
					?>
					</div>
				</td>
				<td><?php echo '[otw-pm-list id="'.$otw_pm_item['id'].'"]'; ?></td>
				<td><?php echo $user_info->display_name;?></td>
				<td><?php echo date( get_option( 'date_format' ), strtotime( $otw_pm_item['date_created'] ) );?></td>
				<td><?php echo date( get_option( 'date_format' ), strtotime( $otw_pm_item['date_modified'] ) );?></td>
			</tr>
			<?php 
				$index++;
				} //End if Array item
				endforeach; 
			?>
		</tbody>
	</table>

	<?php }else{ ?>
		<?php 
			$add_link = $edit_link = admin_url( 'admin.php?page=otw-pml-add' );
		?>
		<p>
			<strong><?php _e('No custom portfolio list found.', OTW_PML_TRANSLATION)?></strong>
			<?php echo '<a href="'.$add_link.'">' . __('Add a list', OTW_PML_TRANSLATION) . '</a>'; ?>
		</p>

	<?php } ?>
	<?php endif; ?>

</div>