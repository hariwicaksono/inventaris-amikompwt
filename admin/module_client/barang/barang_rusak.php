<?php
switch($_GET['act']){
default:?>

<div class="row-fluid">
<div class="pull-left"></div>
<div class="pull-right">
<a href="print_rusak.php" class="btn btn-default" id="print" data-placement="left" title="<?php echo $lang['admin']['click_print_list'] ?>"><i class="icon-print icon-large"></i> <?php echo $lang['admin']['print_list']?></a> 	 
<script type="text/javascript">
$(document).ready(function(){
$('#print').tooltip('show');
$('#print').tooltip('hide');
});
</script> 
</div>

</div>


<?php	
$count_item=mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where stdevice.id = location_details.id)
and dev_status='Damage' ORDER BY stdevice.id DESC");
$count = mysql_num_rows($count_item);
?>	

<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
			<div class="pull-left"><i class="icon-check"></i>&nbsp;<?php echo $lang['admin']['list_damage_dev']?></div>
			<div class="pull-right">
			<?php echo  $lang['admin']['ammount_damage_dev']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
			</div>
		</div>
		
<h4 id="sc"><?php echo $lang['admin']['list_damage_dev']?>
<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
	<?php
		echo date("h:i:s a");
		//  $date = new DateTime();
		// echo $date->format('l, F jS, Y');
		?></div>
</h4>		  
			

<div class="block-content collapse in">
<div class="span12">         

<ul class="nav nav-pills">
<li class="active">
<a href="?module=list_barang_rusak"><?php echo $lang['admin']['all']?></a>
</li>

<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['admin']['filter_cate']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
<?php
$barang=mysql_query("select * from device_name");

while ($row = mysql_fetch_assoc($barang)) {
	$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='Damage'");
	$count=mysql_num_rows($data);  
					?>	
<li>
<a href="?module=list_barang_rusak&act=list&dev_id=<?php echo $row['dev_id']?>"><?php echo $row['dev_name'];?> 
<span class='label label-default'><?php echo $count;?></a>
</li>
					
<?php }?>
</ul>
</li>
</ul>

<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>
<th class="empty"></th>
<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_spec']?></th>
<th>Status</th>	                 					              		  
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

<?php
$device_query = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where stdevice.id = location_details.id)
and dev_status='Damage' ORDER BY stdevice.id DESC") or die(mysql_error());
while ($row = mysql_fetch_array($device_query)) {
$id = $row['id'];
$dev_name = $row['dev_name'];
?>
					
<tr>
<td width="30" class="empty">
<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
</td>
<td><?php echo $row['dev_serial']; ?></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><?php echo $row['dev_desc']; ?></td>
<td><div class="label label-important"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>		
</tr>
						
<?php } ?>   

</tbody>
</table>
</form>	

	
</div>
</div>

</div>

<?php break;
case "list";
$dev_id=$_GET['dev_id'];
?>

<?php	
$count_item=mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where stdevice.id = location_details.id)
and dev_status='Damage' ORDER BY stdevice.id DESC");
$count = mysql_num_rows($count_item);
?>		                 					 
<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
			<div class="pull-left"><i class="icon-check"></i>&nbsp;<?php echo $lang['admin']['list_damage_dev']?></div>
			<div class="pull-right">
			<?php echo  $lang['admin']['ammount_damage_dev']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
			</div>
		</div>
		
<h4 id="sc"><?php echo $lang['admin']['list_damage_dev']?>
<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
	<?php
		echo date("h:i:s a");
		//  $date = new DateTime();
		// echo $date->format('l, F jS, Y');
		?></div>
</h4>		  


<div class="block-content collapse in">
<div class="span12">

<ul class="nav nav-pills">
<li class="active">
<a href="?module=list_barang_rusak"><?php echo $lang['admin']['all']?></a>
</li>
<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['admin']['filter_cate']?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
<?php
$barang=mysql_query("select * from device_name");

while ($row = mysql_fetch_assoc($barang)) {
	$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='Damage'");
	$count=mysql_num_rows($data);  
					?>	
<li>
<a href="?module=list_barang_rusak&act=list&dev_id=<?php echo $row['dev_id']?>"><?php echo $row['dev_name'];?> 
<span class='label label-default'><?php echo $count;?></a>
</li>
					

<?php }?>
</ul>
</li>
</ul>

<form id="send" method="post">	
<div class="empty">
<div class="control-group">

<div class="controls">

</div>
</div>

<div class="control-group"> 
<div class="controls">


</div>
</div>
</div>                      
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>
<th class="empty"></th>
<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_spec']?></th>
<th>Status</th>	                   					              		  
</tr>

</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
<?php
	    $device_query = mysql_query("select * from stdevice as a, device_name as b
		where a.dev_id=b.dev_id and a.dev_status='Damage' and b.dev_id='$dev_id' ORDER BY a.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><div class="label label-important"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>																
		</tr>
											
	<?php } ?>
</table>
</form>	

</div>
</div>

</div>

<?php };?>