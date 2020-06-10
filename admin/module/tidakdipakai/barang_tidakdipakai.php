<?php
switch($_GET['act']){
default:?>
 

<!--<div class="row-fluid">
<div class="pull-left"></div>
<div class="pull-right">
<a href="print_tidakdipakai.php" class="btn btn-default" id="print" data-placement="left" title="<?php //echo $lang['admin']['click_print_list'] ?>"><i class="icon-print icon-large"></i> <?php //echo $lang['admin']['print_list']?></a> 	 
<script type="text/javascript">
$(document).ready(function(){
$('#print').tooltip('show');
$('#print').tooltip('hide');
});
</script> 
</div>
</div>-->


<?php	
	$count_item=mysql_query("select * from stdevice
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	where NOT EXISTS 
(select * from location_details where stdevice.id = location_details.id)
	and dev_status='Dump' ORDER BY stdevice.id DESC");
	$count = mysql_num_rows($count_item);
	?>	


<div id="block_bg" class="block">
		<div class="navbar navbar-inner block-header">
				<div class="pull-left"><strong><i class="icon-check"></i>&nbsp;<?php echo $lang['admin']['unused_items']?></strong></div>
				<div class="pull-right">
				<?php echo $lang['admin']['ammount_unused_items']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
				</div>
			</div>
			
<h4 id="sc"><?php echo $lang['admin']['unused_items']?>
	<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
		<?php
			echo date("h:i:s a");
			//  $date = new DateTime();
			// echo $date->format('l, F jS, Y');
			?></div>
	</h4>		  


<div class="block-content collapse in">
<div class="span12">    

<form class="form-inline">
<label class="control-label">Filter</label>
<select onchange="location = this.value;">
<option value="">Pilih Kategori</option>

<option value="?module=barang_tidakdipakai">
<?php echo $lang['admin']['all']?>
</option>

<?php
	$barang=mysql_query("select * from device_name");
	
	while ($row = mysql_fetch_assoc($barang)) {
		$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='Dump'");
		$count=mysql_num_rows($data);  
						?>	
<option value="?module=barang_tidakdipakai&act=list&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count;?>
</option>


<?php
}
?>
</select>
</form>

<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>

<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th>Status</th>	                   					              		  
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

<?php
$device_query = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
LEFT JOIN device_name_type ON stdevice.type_id=device_name_type.type_id
where NOT EXISTS 
(select * from location_details where stdevice.id = location_details.id)
and dev_status='Dump' ORDER BY stdevice.id DESC") or die(mysql_error());
while ($row = mysql_fetch_array($device_query)) {
$id = $row['id'];
$dev_name = $row['dev_name'];
?>
						
<tr>

<td><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>		
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
	and dev_status='Dump' ORDER BY stdevice.id DESC");
	$count = mysql_num_rows($count_item);
	?>		                 					 
	<div id="block_bg" class="block">
		<div class="navbar navbar-inner block-header">
				<div class="pull-left"><strong><i class="icon-check"></i>&nbsp;<?php echo $lang['admin']['unused_items']?></strong></div>
				<div class="pull-right">
				<?php echo $lang['admin']['ammount_unused_items']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
				</div>
			</div>
			
<h4 id="sc"><?php echo $lang['admin']['unused_items']?>
	<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
		<?php
			echo date("h:i:s a");
			//  $date = new DateTime();
			// echo $date->format('l, F jS, Y');
			?></div>
	</h4>		  

<div class="block-content collapse in">
<div class="span12">

<form class="form-inline">
<label class="control-label">Filter</label>
<select onchange="location = this.value;">
<option value="">Pilih Kategori</option>

<option value="?module=barang_tidakdipakai">
<?php echo $lang['admin']['all']?>
</option>

<?php
	$barang=mysql_query("select * from device_name");
	
	while ($row = mysql_fetch_assoc($barang)) {
		$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='Dump'");
		$count=mysql_num_rows($data);  
						?>	
<option value="?module=barang_tidakdipakai&act=list&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count;?>
</option>


<?php
}
?>
</select>
</form>

<form id="send" method="post">	
                     
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>

<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th>Status</th>	                 					              		  
</tr>

</thead>
<tbody>
<?php include "list.php";?>
</table>
</form>	

</div>
</div>

</div>

<?php };?>