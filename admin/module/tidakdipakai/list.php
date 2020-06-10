<!-----------------------------------Content------------------------------------>
	 
		<?php
	    $device_query = mysql_query("select * from stdevice as a, device_name as b, device_name_type as c
		where a.dev_id=b.dev_id and a.dev_status='Dump' and b.dev_id='$dev_id' and c.type_id=a.type_id ORDER BY a.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
		</td>
		<td><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="label label-success"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>																
		</tr>
											
	<?php } ?>