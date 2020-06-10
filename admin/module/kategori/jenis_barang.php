<?php
switch($_GET['act']){
default:?>

<div class="container-fluid">
<div class="row-fluid">

<div class="span4" id="adduser">
<?php include('add_jenis_barang.php'); ?>		   			
</div>
<div class="span8" id="">
<div class="row-fluid">
<!-- block -->

<div class="empty">
<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="icon-info-sign"></i> <strong><?php echo $lang['admin']['note']?>!:</strong> <?php echo $lang['admin']['note_check']?>
</div>
</div>
<?php	
$count_dev_name=mysql_query("select * from device_name_type");
$count = mysql_num_rows($count_dev_name);
?>	 
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['list_device_type']?></div>
<div class="pull-right">
<?php echo $lang['admin']['number_device_type']?> <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>
			
<?php include "modal_delete_jenis.php";?>

		<thead>
			<tr>
				
				<th></th>

				<th>ID</th>
				<th><?php echo $lang['admin']['name']?></th>
				
				<th><?php echo $lang['admin']['input_category']?></th>										
				<th></th>
			</tr>
		</thead>
		<tbody>
					<?php
					$device_name_query = mysql_query("select * from device_name_type
					LEFT JOIN device_name ON device_name_type.dev_id=device_name.dev_id
					
					")or die(mysql_error());
					while($row = mysql_fetch_array($device_name_query)){
					$id = $row['type_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>
				<td><?php echo $row['type_number']; ?></td>
				<td><?php echo $row['type_name']; ?></td>
				
				<td><?php echo $row['dev_id'];?> - <?php echo $row['dev_name']; ?></td>
				
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="75">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit_category_type']?>" id="e<?php echo $id; ?>" href="?module=jenis_barang&act=edit_jenis&id=<?php echo $id;?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
				</td>

	
				</tr>
				<?php } ?>
		</tbody>
	</table>
	</form>
</div>
</div>
</div>
<!-- /block -->
</div>


</div>
</div>
<?php break;
case "edit_jenis";

?>


<div class="container-fluid">
<div class="row-fluid">
<?php $get_id = $_GET['id'];?> 
<div class="span4" id="adduser">
<?php include('module/kategori/edit_jenis.php'); ?>		   			
</div>
<?php

$count_dev_name=mysql_query("select * from device_name");
$count = mysql_num_rows($count_dev_name);
?>	
<div class="span8" id="">
<div class="row-fluid">
<!-- block -->
<div class="empty">
<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="icon-info-sign"></i>  <strong><?php echo $lang['admin']['note']?>!:</strong> <?php echo $lang['admin']['note_check']?>
</div>
</div>

<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['list_device_type']?></div>
<div class="pull-right">
<?php echo $lang['admin']['number_device_type']?> <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>
<?php include "modal_delete_jenis.php"; ?> 
	
		<thead>
			<tr>
				<th></th>
				<th>ID</th>
				<th><?php echo $lang['admin']['name']?></th>
				
				<th><?php echo $lang['admin']['input_category']?></th>											<th></th>											
		
			</tr>
		</thead>
		<tbody>
					<?php
					$device_name_query = mysql_query("select * from device_name_type
					LEFT JOIN device_name ON device_name_type.dev_id=device_name.dev_id
					")or die(mysql_error());
					while($row = mysql_fetch_array($device_name_query)){
					$id = $row['type_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>
				
				<td><?php echo $row['type_number']; ?></td>
				<td><?php echo $row['type_name']; ?></td>

				<td><?php echo $row['dev_id'];?> - <?php echo $row['dev_name']; ?></td>
				
			
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="75">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit_category_type']?>" id="e<?php echo $id; ?>" href="?module=jenis_barang&act=edit_jenis&id=<?php echo $id;?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
				</td>

	
				</tr>
				<?php } ?>
		</tbody>
	</table>
	</form>
</div>
</div>
</div>
<!-- /block -->
</div>


</div>
</div>


<?php }?>
