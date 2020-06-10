


<!-- block -->
<?php	
$count_log=mysql_query("select * from user_log");
$count = mysql_num_rows($count_log);
?>
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-group"></i> <?php echo $lang['admin']['list_user_log']?></div>
<div class="pull-right">
<?php echo $lang['admin']['ammount_user_log']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>

<?php include('modal_delete.php'); ?>
<thead>
<tr>  
<th></th>
<th><?php echo $lang['admin']['date_login']?></th>
<th><?php echo $lang['admin']['date_logout']?></th>
<th>Username</th>


</tr>
</thead>
<tbody>
	<?php
	$user_query = mysql_query("select * from user_log order by login_date AND logout_date DESC")or die(mysql_error());
	while($row = mysql_fetch_array($user_query)){
	$id = $row['user_log_id'];
	?>

<tr>

<td width="30">
<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
</td>
<td><i class="icon-calendar"></i>&nbsp;
<?php echo $row['login_date']; ?></td>
<td><i class="icon-calendar"></i>&nbsp;
<?php echo $row['logout_date']; ?></td>
<td><i class="icon-user"></i>&nbsp;
<?php echo $row['username']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</form>
</div>
</div>
</div>
<!-- /block -->
