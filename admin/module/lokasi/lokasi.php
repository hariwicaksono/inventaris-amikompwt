<?php
switch($_GET['act']){
default:?>

<div class="container-fluid">
<div class="row-fluid">

<div class="span4" id="adduser">
<?php include('add_lokasi.php'); ?>		   			
</div>
<div class="span8" id="">
<div class="row-fluid">
<!-- block -->

<div class="empty">
<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="icon-info-sign"></i> <strong><?php echo $lang['admin']['note']?>!:</strong> <?php echo $lang['admin']['note_check'] ?>
</div>
</div>

<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-reorder icon-building"></i> <?php echo $lang['admin']['location_list']?></div>                       

<div id="" class="pull-right">
<?php 
$my_location = mysql_query("select * from stlocation ")or die(mysql_error());
$count_my_location = mysql_num_rows($my_location);?>
<?php echo $lang['admin']['ammount_location_list']?>: <span class="badge badge-info"><?php echo $count_my_location; ?></span>
</div>

</div>
		
<?php include "modal_delete.php";?>


	<thead>
		<tr>
				<th></th>
				<th></th>
				<th><?php echo $lang['admin']['location_name']?></th>
				<th><?php echo $lang['admin']['location_floor']?></th>
				<th></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$location_query = mysql_query("select * from stlocation")or die(mysql_error());
	while($location_row = mysql_fetch_array($location_query)){
	$id = $location_row['stdev_id'];
	?>
			
	<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td><?php echo $location_row['stdev_location_code']; ?></td>
		<td><?php echo $location_row['stdev_location_name']; ?></td>
		<td><?php echo $location_row['stdev_location_floor']; ?></td>
		<?php include('toolttip_edit_delete.php'); ?>																											
		<td width="125">
		<a rel="tooltip"  title="<?php echo $lang['admin']['click_edit_location']?>" id="e<?php echo $id; ?>" href="?module=lokasi&act=edit_lokasi&id=<?php echo $id;?>" 
		class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit_location']?></a>
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


</div>;
</div>


<?php break;
case "edit_lokasi";

?>


<div class="container-fluid">
<div class="row-fluid">
<?php $get_id = $_GET['id'];?>
<div class="span4" id="adduser">
<?php include('module/lokasi/edit_lokasi.php'); ?>		   			
</div>

<div class="span8" id="">
<div class="row-fluid">
<!-- block -->
<div class="empty">
<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="icon-info-sign"></i> <strong><?php echo $lang['admin']['note']?>!:</strong> <?php echo $lang['admin']['note_check'] ?>
</div>
</div>

<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-reorder icon-building"></i> <?php echo $lang['admin']['location_list']?></div>                           
<div id="" class="pull-right">
<?php 
$my_location = mysql_query("select * from stlocation ")or die(mysql_error());
$count_my_location = mysql_num_rows($my_location);?>
<?php echo $lang['admin']['ammount_location_list']?>: <span class="badge badge-info"><?php echo $count_my_location; ?></span>
</div>
</div>
<?php include "modal_delete.php"; ?>

	<thead>
		<tr>
				<th></th>
				<th><?php echo $lang['admin']['location_name']?></th>
				<th><?php echo $lang['admin']['location_floor']?></th>
				<th></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$location_query = mysql_query("select * from stlocation")or die(mysql_error());
	while($location_row = mysql_fetch_array($location_query)){
	$id = $location_row['stdev_id'];
	?>
			
	<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td><?php echo $location_row['stdev_location_name']; ?></td>
		<td><?php echo $location_row['stdev_location_floor']; ?></td>
		<?php include('toolttip_edit_delete.php'); ?>																											
		<td width="125">
		<a rel="tooltip"  title="<?php echo $lang['admin']['click_edit_location']?>" id="e<?php echo $id; ?>" href="dashboard.php?module=lokasi&act=edit_lokasi&id=<?php echo $id;?>" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit_location']?></a>
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
