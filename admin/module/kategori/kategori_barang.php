<?php
switch($_GET['act']){
default:?>

<div class="container-fluid">
<div class="row-fluid">

<div class="span4" id="adduser">
<?php include('add_kategori_barang.php'); ?>		   			
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
$count_dev_name=mysql_query("select * from device_name");
$count = mysql_num_rows($count_dev_name);
?>	 
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['list_category']?></div>
<div class="pull-right">
<?php echo $lang['admin']['total_category']?> <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>
			
<?php include "modal_delete.php";?>

		<thead>
			<tr>
				<th></th>
				<th><?php echo  $lang['admin']['input_idcategory']?></th>
				<th><?php echo $lang['admin']['input_category']?></th>										
				<th></th>
			</tr>
		</thead>
		<tbody>
					<?php
					$device_name_query = mysql_query("select * from device_name")or die(mysql_error());
					while($row = mysql_fetch_array($device_name_query)){
					$id = $row['dev_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>												
				<td><?php echo $row['dev_id']; ?></td>
				<td><?php echo $row['dev_name']; ?></td>
				
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="75">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit_category']?>" id="e<?php echo $id; ?>" href="?module=kategori_barang&act=edit_kategori&id=<?php echo $id;?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
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
case "edit_kategori";

?>


<div class="container-fluid">
<div class="row-fluid">
<?php $get_id = $_GET['id'];?> 
<div class="span4" id="adduser">
<?php include('module/kategori/edit_kategori.php'); ?>		   			
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
<div class="pull-left"><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['list_category']?></div>
<div class="pull-right">
<?php echo $lang['admin']['total_category']?> <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>
<?php include "modal_delete.php"; ?> 
	
		<thead>
			<tr>
				<th></th>
				<th><?php echo  $lang['admin']['input_idcategory']?></th>
				<th><?php echo $lang['admin']['input_category']?></th>																							
				<th></th>
			</tr>
		</thead>
		<tbody>
					<?php
					$device_name_query = mysql_query("select * from device_name")or die(mysql_error());
					while($row = mysql_fetch_array($device_name_query)){
					$id = $row['dev_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>
				<td><?php echo $row['dev_id']; ?></td>
				<td><?php echo $row['dev_name']; ?></td>
			
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="75">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit_category']?>" id="e<?php echo $id; ?>" href="?module=kategori_barang&act=edit_kategori&id=<?php echo $id;?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
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
