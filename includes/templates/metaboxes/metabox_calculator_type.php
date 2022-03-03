
<?php $calculator = new Hair_Calculator( get_the_ID() ); ?>
<table class="form-table">
	<tbody>
		<tr>
			<th><label for="calculator_type" ><?php _e('Calculator Type', 'hair-calculator'); ?></label></th>
			<td class="wrap-input">
				<?php $calculator_type = $calculator->get_calculator_type(); ?>
				<input type="hidden" name="metabox_noncename" id="metabox_noncename" value="<?php echo wp_create_nonce("metabox".$post->ID); ?>" />
				<select name="calculator_type" id="calculator_type">
					<option selected disabled hidden><?php _e('Please Select', 'hair-calculator'); ?></option>
					<option value="type-1" <?= ($calculator_type == 'type-1') ? 'selected' : ''; ?> ><?php _e('Hair Salon Tip', 'hair-calculator'); ?></option>
					<option value="type-2" <?= ($calculator_type == 'type-2') ? 'selected' : ''; ?> ><?php _e('Hair Growth Rate', 'hair-calculator'); ?></option>
					<option value="type-3" <?= ($calculator_type == 'type-3') ? 'selected' : ''; ?> ><?php _e('Hair Price', 'hair-calculator'); ?></option>			
				</select>
 			</td>
		</tr>
	</tbody>
</table>