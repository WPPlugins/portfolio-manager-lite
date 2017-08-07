<?php
	$detail_values = array();
	
	foreach( $portfolio_meta_details as $detail_id => $detail_data ){
		
		$key_name = 'otw_pm_portfolio_detail_'.$detail_id;
		
		$detail_values[ $key_name ] = '';
		
		$meta_value = get_post_meta(  $post->ID, $key_name, true );
		
		if( strlen( trim( $meta_value ) ) ){
			$detail_values[ $key_name ] = $meta_value;
		}
		
		if( isset( $_POST[ $key_name ] ) ){
			$detail_values[ $key_name ] = $_POST[ $key_name ];
		}
	}
?>
<input type="hidden" name="otw_pm_meta_details" value="1" />
<i><?php _e( 'HTML is enabled for all details fields.', OTW_PML_TRANSLATION )?></i>
<table class="form-table">
	<tbody>
		<?php foreach( $portfolio_meta_details as $detail_id => $detail_data ){ $key_name = 'otw_pm_portfolio_detail_'.$detail_id; ?>
			<tr valign="top">
				<th>
					<label for="<?php echo $key_name?>"><?php echo $detail_data['title'];?></label>
				</th>
				<td>
					<input type="text" id="<?php echo $key_name?>" name="<?php echo $key_name?>" value="<?php echo otw_htmlentities( $detail_values[ $key_name ] ) ?>" size="63"/>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>