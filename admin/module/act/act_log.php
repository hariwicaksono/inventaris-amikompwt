
<!-- block -->
<div class="empty">
<div class="alert alert-success alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="icon-info-sign"></i>  <strong><?php echo $lang['admin']['note']?>!:</strong> <?php echo $lang['admin']['note_check']?>
</div>
</div> 

<?php	
$count_log=mysql_query("select * from activity_log");
$count = mysql_num_rows($count_log);
?>
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-user"></i> <?php echo $lang['admin']['activity_sys_log']?></div>
<div class="pull-right">
<?php echo $lang['admin']['ammount_activity_sys_log']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>

<?php include('modal_delete.php'); ?>
	<thead>
			<tr>					
			<th></th>
			<th><?php echo $lang['admin']['date']?></th>
			<th><?php echo $lang['admin']['system_user']?></th>
			<th><?php echo $lang['admin']['action']?></th>

			</tr>
			
	</thead>
	<tbody>
		
<?php
	$query = mysql_query("select * from  activity_log 
	LEFT JOIN admin ON activity_log.username = admin.username
	order by date DESC")or die(mysql_error());
	while($row = mysql_fetch_array($query)){
	$id = $row['activity_log_id'];
	$username = $row['username'];
?>

<tr>
	<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
	</td>

		<td><i class="icon-calendar"></i>&nbsp;
		<?php  echo $row['date']; ?></td>
		<td><img id="avatar1" src="<?php echo $row['adminthumbnails']; ?>">&nbsp;
		<?php echo $row['username']; ?></td>
		<td><i class="icon-tasks"></i>&nbsp;
		<?php echo $row['action']; ?></td>

	</tr>

		<?php } ?>


	</tbody>
</table>
</form>
</div>
</div>
</div>
<!-- /block -->