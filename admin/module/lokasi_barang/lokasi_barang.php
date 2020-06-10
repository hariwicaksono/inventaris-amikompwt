<?php
switch($_GET['act']){
default:?>					 					 

<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
	<div class="pull-left"><i class="icon-reorder icon-building"></i> <strong><?php echo $lang['admin']['list_location_disp']?></strong></div>
	
<div id="" class="pull-right">
<?php 
$my_location = mysql_query("select * from stlocation ")or die(mysql_error());
$count_my_location = mysql_num_rows($my_location);?>
<?php echo $lang['admin']['ammount_location_list']?>: <span class="badge badge-info"><?php echo $count_my_location; ?></span>
</div>

</div>								
<div class="block-content collapse in">
<div class="span12">
	<ul	 id="da-thumbs" class="da-thumbs">
		<?php 
		$query = mysql_query("select * from stlocation")or die(mysql_error());									
		$count = mysql_num_rows($query);
		
		if ($count > 0){
		while($row = mysql_fetch_array($query)){
		$stdev_id = $row['stdev_id'];
		?>
		
		<li id="del<?php echo $id; ?>">
				<a href="?module=lokasi_barang&act=list&stdev_id=<?php echo $stdev_id?>">
					<img src ="<?php echo $row['thumbnails'] ?>" width="130" height="148" class="img-polaroid" alt="">
					<div>
					<span><p><?php echo $row['stdev_location_name']; ?></p></span>
					</div>
				</a>
				
				<?php include('count_device.php') ?>
				<p class="class"><?php echo $row['stdev_location_name']; ?>
				<?php if($not_count == '0'){
					}else{ ?>
				<span class="badge badge-success"><?php echo $not_count; ?></span>
					<?php } ?>
				</p>
		</li>
		<?php } }else{ ?>										
			<div class="alert alert-info"><i class="icon-info-sign"></i> <?php echo $lang['admin']['no_location_add']?></div>
		<?php  } ?>
	</ul>
</div>
</div>
</div>
<!-- /block -->

<?php break;
case "list"; ?>

<?php $get_id = $_GET['stdev_id'];
?>
<!-----------------------------------get device location details------------------------------------>	

<a href="?module=lokasi_barang" class="btn btn-info"  id="return" data-placement="right" title="<?php echo $lang['admin']['click_back']?>" ><i class="icon-arrow-left"></i> <?php echo $lang['admin']['back']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#return').tooltip('show');
$('#return').tooltip('hide');
});
</script>

<a class="btn btn-default pull-right" id="print" data-placement="left" title="<?php echo $lang['admin']['click_print_list']?>" href="print_lokasi.php<?php echo '?stdev_id='.$get_id; ?>" class="btn btn-info"><i class="icon-print"></i> <?php echo $lang['admin']['print_list']?></a>	
<script type="text/javascript">
$(document).ready(function(){
$('#print').tooltip('show');
$('#print').tooltip('hide');
});
</script>    
<!------------------------sc logo for print------------------------->	

<?php $location_query = mysql_query("select * from stlocation	                     
where stdev_id = '$get_id'")or die(mysql_error());
$location_row = mysql_fetch_array($location_query);
?>

<!-------------------------------block ------------------------------>
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">							
<div class="pull-left"><i class="icon-building"></i> <strong><?php echo $lang['admin']['location']?>: <?php echo $location_row['stdev_location_name']; ?> - <?php echo $lang['admin']['location_floor']?>: <?php echo $location_row['stdev_location_floor']; ?></strong></div>

<div id="" class="pull-right">
<?php 
$my_device = mysql_query("select * from location_details    
LEFT JOIN stdevice ON location_details.id = stdevice.id
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where dev_status='Dump')
	and stdev_id = '$get_id' ")or die(mysql_error());
$count_my_device = mysql_num_rows($my_device);?>
<?php echo $lang['admin']['total_device']?>: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
</div>								
</div>

<!-----------------------------------for Print display visible------------------------------------>								
<h4 id="sc"><?php echo $lang['admin']['location']?>:<?php echo $location_row['stdev_location_name']; ?> <?php echo $lang['admin']['all_dev_list']?>
<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
<?php
echo date("h:i:s a");
//  $date = new DateTime();
// echo $date->format('l, F jS, Y');
?></div>
</h4>


<?php
$my_device = mysql_query("select * from location_details	                                                    
LEFT JOIN stdevice ON location_details.id = stdevice.id 
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where dev_status='Dump')
and stdev_id = '$get_id'		
order by date_deployment DESC")or die(mysql_error());
while($row = mysql_fetch_array($my_device));
$id = $row['id'];		                                               
?>
	    

<div class="block-content collapse in">
<div class="span12">

<select onchange="location = this.value;">
<option value="">Pilih Kategori</option>
<?php	
$my_device = mysql_query("select * from location_details	                                                    
LEFT JOIN stdevice ON location_details.id = stdevice.id 
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where dev_status='Dump')
and stdev_id = '$get_id' ")or die(mysql_error());
$count1 = mysql_num_rows($my_device);
?>
<option value="?module=lokasi_barang&act=list&stdev_id=<?php echo $get_id?>">
<?php echo $lang['admin']['all']?> &mdash; <?php echo $count1;?>
</option>

<?php
$barang=mysql_query("select * from device_name");

while ($row = mysql_fetch_assoc($barang)) {
$data=mysql_query("select * from location_details    
LEFT JOIN stdevice ON location_details.id = stdevice.id
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and stdev_id = '$get_id' and dev_status!='Dump'");
$count2=mysql_num_rows($data);
?>
<option value="?module=lokasi_barang&act=list2&stdev_id=<?php echo $get_id?>&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count2;?>
</option>


<?php
}
?>

</select>


<form action="" method="post">
<!-----------------------------------table form------------------------------------>	
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>			        
<th class="empty"></th>
<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>	
<th class="empty">Kelola Barang</th>
</tr>
</thead>
<tbody>
<!-----------------------------------table Content------------------------------------>									
<?php
$my_device = mysql_query("select * from stdevice, location_details, device_name, device_name_type, device_unit where stdevice.id = location_details.id
and location_details.stdev_id='$get_id' and stdevice.dev_id=device_name.dev_id 
and stdevice.type_id=device_name_type.type_id		
and stdevice.unit_id=device_unit.unit_id	
order by location_details.date_deployment DESC")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$id = $row['id'];		                                               
?>
<tr>
<td><?php
$device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
$dev=mysql_fetch_assoc($device_query2);
if($row['dev_status']=='New')
{
echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Used')
{
echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Repaired')
{
echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else
{
echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
};
?>
</td>
<td><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><?php echo $row['jumlah']?></td>
<td><?php
$my_device1 = mysql_query("select * from stdevice ")or die(mysql_error());
$dev=mysql_fetch_assoc($my_device1);
if($row['dev_status']=='New')
{
echo '<div class="label label-success"><i class="icon-check"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Used')
{
echo '<div class="label label-warning"><i class="icon-ok"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Repaired')
{
echo '<div class="label label-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else
{
echo '<div class="label label-important"><i class="icon-remove-sign"></i> <strong>'.$row['dev_status'].'</strong></div>';
};
?></td>

<?php include('toolttip_edit_delete.php'); ?>
<td width="185" class="empty"><a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="?module=lokasi_barang&act=devl_update_status&stdev_id=<?php echo $get_id?>&id=<?php echo $id?>" class="btn btn-small btn-success"><i class="icon-upload-alt"></i> Status</a> 
<a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" 
href="?module=lokasi_barang&act=transfer&stdev_id=<?php echo $get_id?>&id=<?php echo $id?>" class="btn btn-small btn-warning"><i class="icon-move"></i> Transfer </a>
</td>		
</tr>
			
<?php } ?>   
</tbody>
</table>
</form>	

</div>
</div>

<?php break;



case "list2";

$get_id = $_GET['stdev_id'];
$dev_id = $_GET['dev_id'];?>
<!-----------------------------------get device location details------------------------------------>	

<a href="javascript: history.go(-1)" class="btn btn-info"  id="return" data-placement="right" title="<?php echo $lang['admin']['back']?>" ><i class="icon-arrow-left icon-large"></i> <?php echo $lang['admin']['back']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#return').tooltip('show');
$('#return').tooltip('hide');
});
</script>
<!-----------------------------------sc logo for print------------------------------------>	

<?php $location_query = mysql_query("select * from stlocation	                     
where stdev_id = '$get_id'")or die(mysql_error());
$location_row = mysql_fetch_array($location_query);
$nama_barang=mysql_query("select * from device_name	                     
where dev_id = '$dev_id'")or die(mysql_error());
$row=mysql_fetch_array($nama_barang);

?>

<!-------------------------------block ------------------------------>
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">							
<div class="pull-left"><strong><i class="icon-building"></i>  <?php echo $location_row['stdev_location_name']; echo" >> $row[dev_name]"; ?></strong></div>

<div id="" class="pull-right">

</div>

</div>

<!-----------------------------------for Print display visible------------------------------------>	
<h4 id="sc"><?php echo $lang['admin']['location']?>:<?php echo $location_row['stdev_location_name']; ?> <?php echo $lang['admin']['all_dev_list']?>
<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
<?php
echo date("h:i:s a");
//  $date = new DateTime();
// echo $date->format('l, F jS, Y');
?></div>
</h4>

<div class="block-content collapse in">
<div class="span12">

<select onchange="location = this.value;">
<option value="">Pilih Kategori</option>
<?php	
$my_device = mysql_query("select * from location_details	                                                    
LEFT JOIN stdevice ON location_details.id = stdevice.id 
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where NOT EXISTS 
(select * from location_details where dev_status='Dump')
and stdev_id = '$get_id' ")or die(mysql_error());
$count1 = mysql_num_rows($my_device);
?>
<option value="?module=lokasi_barang&act=list&stdev_id=<?php echo $get_id?>">
<?php echo $lang['admin']['all']?> &mdash; <?php echo $count1;?>
</option>

<?php
$barang=mysql_query("select * from device_name");

while ($row = mysql_fetch_assoc($barang)) {
$data=mysql_query("select * from location_details    
LEFT JOIN stdevice ON location_details.id = stdevice.id
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and stdev_id = '$get_id' and dev_status!='Dump'");
$count2=mysql_num_rows($data);
?>
<option value="?module=lokasi_barang&act=list2&stdev_id=<?php echo $get_id?>&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count2;?>
</option>


<?php
}
?>

</select>

<form action="" method="post">
<!-----------------------------------table form------------------------------------>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>			        
<th class="empty"></th>
<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>	
<th class="empty">Kelola Barang</th>
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>									
<?php
$my_device = mysql_query("select * from location_details    
LEFT JOIN stdevice ON location_details.id = stdevice.id
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
LEFT JOIN device_name_type ON stdevice.type_id=device_name_type.type_id
where device_name.dev_id=".$dev_id." and location_details.stdev_id='$get_id' ")or die(mysql_error());
while($row = mysql_fetch_array($my_device)){
$location_details_row=mysql_fetch_array(mysql_query("select*from location_details where ld_id='$row[ld_id]'"));
$id = $row['id'];
						
?>
<tr>
<td><?php
$device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
$dev=mysql_fetch_assoc($device_query2);
if($row['dev_status']=='New')
{
echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Used')
{
echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Repaired')
{
echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
}
else
{
echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
};
?>
<td><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<!--<td><?php //echo $location_row['stdev_location_name']; ?></td>-->
<td><?php echo $location_details_row['jumlah'];?></td>
<td><?php
$my_device1 = mysql_query("select * from stdevice ")or die(mysql_error());
$dev=mysql_fetch_assoc($my_device1);
if($row['dev_status']=='New')
{
echo '<div class="label label-success"><i class="icon-check"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Used')
{
echo '<div class="label label-warning"><i class="icon-ok"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Repaired')
{
echo '<div class="label label-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
}
else
{
echo '<div class="label label-important"><i class="icon-remove-sign"></i> <strong>'.$row['dev_status'].'</strong></div>';
};
?></td>
				
<?php include('toolttip_edit_delete.php'); ?>
<td width="185" class="empty">
<a rel="tooltip"  title="Update Status" id="t<?php echo $id; ?>" href="?module=lokasi_barang&act=devl_update_status&stdev_id=<?php echo $get_id?>&id=<?php echo $id?>" class="btn btn-small btn-success"><i class="icon-upload-alt"></i> Status</a>
<a rel="tooltip"  title="Transfer Device" id="e<?php echo $id; ?>" 
href="?module=lokasi_barang&act=transfer&stdev_id=<?php echo $get_id?>&id=<?php echo $id?>" class="btn btn-small btn-warning"><i class="icon-move"></i> Transfer</a>
</td>
</tr>
			
<?php } ?>   
</tbody>
</table>
</form>	
<!---------------------------------------------------- /block --------------------------------------------->
</div>
</div>

<?php break;
case "devl_update_status";
$stdev_id = $_GET['stdev_id']; 
$get_id = $_GET['id']; ?>

<?php $location_query = mysql_query("select * from stlocation	                     
where stdev_id = '$stdev_id'")or die(mysql_error());
$location_row = mysql_fetch_array($location_query);
?>	
<!-- block -->
<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
		<div class="pull-left"><i class="icon-building"></i> <strong><?php echo $lang['admin']['location']?>:&nbsp;<?php echo $location_row['stdev_location_name']; ?> >> <?php echo $lang['admin']['upd_dev_status']?></strong></div>
		<div class="pull-right">
		<a id="return" data-placement="left" title="<?php echo $lang['admin']['click_back']?>" href="?module=lokasi_barang&act=list&stdev_id=<?php echo $stdev_id ?>"><i class="icon-arrow-left"></i> <?php echo $lang['admin']['back']?></a>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#return').tooltip('show');
		$('#return').tooltip('hide');
		});
		</script>  
	</div>
											
	<div class="block-content collapse in">    
		
	<?php
	$query = mysql_query("select * from stdevice 
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	where id = '$get_id'")or die(mysql_error());
	$row = mysql_fetch_array($query);									
	?>
	
		<form class="form-horizontal" method="post">
		
		<div class="control-group">
			<label class="control-label" for="inputEmail"><?php echo $lang['admin']['input_name']?></label>
			<div class="controls">			
			<input type="hidden" name="dev_id" value="<?php echo $row['dev_id']?>">
			<input type="text" value="<?php echo $row['dev_name'];?>" readonly>	
			</div>
		</div>
				
		<div class="control-group">
			<label class="control-label" for="inputPassword"  placeholder="<?php echo $lang['admin']['upd_dev_status']?>" ><?php echo $lang['admin']['upd_dev_status']?></label>
			<div class="controls">
			<select value="" name="dev_status" required>
					<option><?php echo $row['dev_status']; ?></option>																										
					<option>Used</option>
					<option>Damage</option>
				</select>								
			</div>
		</div>
		

		<div class="control-group">
		<div class="controls">
		
		<button id="update" data-placement="right" title="<?php echo $lang['admin']['click_update']?>" name="update" type="submit" class="btn btn-primary"><i class="icon-save icon-large"></i> <?php echo $lang['admin']['update']?></button>
		</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#update').tooltip('show');
		$('#update').tooltip('hide');
		});
		</script> 
		</form>
		
		<?php
		if (isset($_POST['update'])){
		$dev_id = $_POST['dev_id'];
		$dev_status = $_POST['dev_status'];																
	
		mysql_query("update stdevice set 
					dev_id = '$dev_id',																		
					dev_status = '$dev_status'
					where id = '$get_id' ")or die(mysql_error());
					
		mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Update Status $dev_name to $dev_status ')")or die(mysql_error());			
		?>
		<script>
		
		window.location = "?module=lokasi_barang&act=list&stdev_id=<?php echo $stdev_id?>"; 
	
		//$.jGrowl("Device Status Successfully Update", { header: 'Device Status Update' });
		</script>
		<?php
		}
		
		?>
	

	</div>
</div>
<!-- /block -->

<script>
jQuery(document).ready(function(){
jQuery("#opt11").hide();
jQuery("#opt12").hide();
jQuery("#opt13").hide();		

jQuery("#qtype").change(function(){	
var x = jQuery(this).val();			
if(x == '1') {
jQuery("#opt11").show();
jQuery("#opt12").hide();
jQuery("#opt13").hide();
} else if(x == '2') {
jQuery("#opt11").hide();
jQuery("#opt12").show();
jQuery("#opt13").hide();
}
});

});
</script>
<?php break;
case "transfer";?>

<?php $stdev_id = $_GET['stdev_id']; ?>
<?php $get_id = $_GET['id']; ?>


<div class="empty">
<div class="alert alert-success">
<strong>they will redirect move to the location you select</strong>
</div>
</div>

<?php $location_query = mysql_query("select * from stlocation	                     
where stdev_id = '$stdev_id'")or die(mysql_error());
$location_row = mysql_fetch_array($location_query);
?>	

<!-- block -->
<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
		<div class="muted pull-left">From:&nbsp;<?php echo $location_row['stdev_location_name']; ?> Transfer Device</div>
		<div class="muted pull-right">
		<a id="return" data-placement="left" title="Click to Return" href="?module=lokasi_barang&act=list&stdev_id=<?php echo $stdev_id ?>"><i class="icon-arrow-left"></i> Back</a>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#return').tooltip('show');
		$('#return').tooltip('hide');
		});
		</script>  
	</div>
											
	<div class="block-content collapse in">    
		
	<?php
	$query = mysql_query("select * from stdevice 
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	where id = '$get_id'")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$tampil=mysql_fetch_array(mysql_query("select * from location_details where
		id='$get_id' and stdev_id='$stdev_id'"));
	$move=mysql_fetch_array(mysql_query("select*from stlocation where 
		stdev_id='$tampil[stdev_id]'"));
	$ld_id=$tampil['ld_id'];
	?>
	
		<form class="form-horizontal" method="post">
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Device Name</label>
			<div class="controls">
			<input type="hidden" name="dev_id" value="<?php echo $row['dev_id']?>">
			<input type="text" value="<?php echo $row['dev_name'];?>" readonly>
			<input type="text" name="jum" value="<?php echo $tampil['jumlah']; ?>">	
			
			</div>
		</div>
				
		

		<div class="control-group">
		<div class="controls">
		
		<button id="move" data-placement="right" title="Click to Move Device" name="transfer" type="submit" class="btn btn-warning"><i class="icon-move"></i> Move</button>
		</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#move').tooltip('show');
		$('#move').tooltip('hide');
		});
		</script>  
		</form>
		
		<?php
		$data1=mysql_query("select* from location_details where ld_id='$tampil[ld_id]'");
		if ($_POST['pindah']>$tampil['jumlah']){
			?>
			<script>
			$.jGrowl("Jumlah Barang Terlalu Banyak", { header: 'Error' });
				windows.location='?module=lokasi_barang&act=transfer&stdev_id=<?php echo $stdev_id?>&id=<?php echo $get_id?>';
			</script>
			<?php
		}else{

		if (isset($_POST['transfer'])){	
		$oras = strtotime("now");
		$ora = date("Y-m-d",$oras);
		$stdev_id = $_POST['stdev_id'];
		$pindah=$_POST['pindah'];
		$qq=mysql_fetch_array(mysql_query("select * from stdevice where id='$get_id' "));
		$jum2=$qq['jumlah'];
		$data=$_POST['jumlah'];
		$hasil=$jum+$data;

		
		$del=mysql_query("delete from location_details where id='$get_id' and stdev_id='$stdev_id' ");
		$update=mysql_query("update stdevice set jumlah='$hasil' where id='$get_id'");	


		


		
		?>
		<script>
		window.location = "?module=lokasi_barang&act=list&stdev_id=<?php echo $stdev_id?>"; 
		$.jGrowl("Device Transfer Successfully", { header: 'Device Transfer' });
		</script>
		<?php
		}
		}
		?>
	

	</div>
</div>
<!-- /block -->

<script>
jQuery(document).ready(function(){
jQuery("#opt11").hide();
jQuery("#opt12").hide();
jQuery("#opt13").hide();		

jQuery("#qtype").change(function(){	
var x = jQuery(this).val();			
if(x == '1') {
jQuery("#opt11").show();
jQuery("#opt12").hide();
jQuery("#opt13").hide();
} else if(x == '2') {
jQuery("#opt11").hide();
jQuery("#opt12").show();
jQuery("#opt13").hide();
}
});

});
</script>			




<?php }?>