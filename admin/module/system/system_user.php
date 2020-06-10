<?php
switch($_GET['act']){
default:?>
<div class="container-fluid">
<div class="row-fluid">

<div class="span4" id="adduser">
<?php include('add_user.php'); ?>		   			
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
$count_user=mysql_query("select * from admin");
$count = mysql_num_rows($count_user);
?>	 
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"></i><i class="icon-user"></i> <?php echo $lang['admin']['list_system_user']?></div>
<div class="pull-right">
<?php echo $lang['admin']['ammount_system_user']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>

	<?php include('modal_delete.php'); ?>
		<thead>
			<tr>
				<th></th>
				<th><?php echo $lang['admin']['name']?></th>
				<th><?php echo $lang['username']?></th>
		
				<th></th>
			</tr>
		</thead>
		<tbody>
					<?php
					$user_query = mysql_query("select * from admin")or die(mysql_error());
					while($row = mysql_fetch_array($user_query)){
					$id = $row['admin_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>
				<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>

				<td><?php echo $row['username']; ?></td>
			
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="120">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit']?>" id="e<?php echo $id; ?>" href="?module=system_user&act=edit_user&id=<?php echo $id ?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
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
case "edit_user";
$get_id=$_GET['id'];
?>

<div class="container-fluid">
<div class="row-fluid">

<div class="span4" id="adduser">
<?php include('edit_user.php'); ?>		   			
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
$count_user=mysql_query("select * from admin");
$count = mysql_num_rows($count_user);
?>	 
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"></i><i class="icon-user"></i> <?php echo $lang['admin']['list_system_user']?></div>
<div class="pull-right">
<?php echo $lang['admin']['ammount_system_user']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>

	<?php include('modal_delete.php'); ?>
		<thead>
			<tr>
				<th></th>
				<th><?php echo $lang['admin']['name']?></th>
				<th><?php echo $lang['username']?></th>
		
				<th></th>
			</tr>
		</thead>
		<tbody>
					<?php
					$user_query = mysql_query("select * from admin")or die(mysql_error());
					while($row = mysql_fetch_array($user_query)){
					$id = $row['admin_id'];
					?>
	
				<tr>
				<td width="30">
				<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>
				<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>

				<td><?php echo $row['username']; ?></td>
			
				<?php include('toolttip_edit_delete.php'); ?>															
				<td width="120">
				<a rel="tooltip"  title="<?php echo $lang['admin']['edit']?>" id="e<?php echo $id; ?>" href="?module=system_user&act=edit_user&id=<?php echo $id ?>"  data-toggle="modal" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a>
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
<?php 

}?>