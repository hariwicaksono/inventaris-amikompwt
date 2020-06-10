<?php
switch($_GET['act']){
default:?>

<!--<div class="row">
<div class="pull-left">
 
</div>
<div class="pull-right">
<a href="print_new.php" class="btn btn-default" id="print" data-placement="left" title="<?php //echo $lang['admin']['click_print_list']?>"><i class="icon-print icon-large"></i> <?php //echo $lang['admin']['print_list'] ?></a> 
	<script type="text/javascript">
	$(document).ready(function(){
	$('#print').tooltip('show');
	$('#print').tooltip('hide');
	});
	</script> 	
</div>
</div>-->

	<?php	
	//$count_item=mysql_query("select * from stdevice 
	//LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	//where dev_status = 'New' OR dev_status = 'new'  ORDER BY stdevice.id DESC ");
	//$count = mysql_num_rows($count_item);

		$count_item=mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
		(select * from location_details where stdevice.id = location_details.id)
		and dev_status='new' ORDER BY stdevice.id DESC");
		$count = mysql_num_rows($count_item);

		?>		

		                					 
<div id="block_bg" class="block">
		<div class="navbar navbar-inner block-header">
			<div class="pull-left"><strong><i class="icon-check"></i>&nbsp;<?php echo  $lang['admin']['new_dev_list']?></strong></div>
			<div class="pull-right">
			<?php echo $lang['admin']['ammount_dev_list']?> <span class="badge badge-info"><?php  echo $count; ?></span>
			</div>
		</div>
				
	<h4 id="sc"><?php echo  $lang['admin']['new_dev_list']?>
		<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
			<?php
				echo date("h:i:s a");
				//  $date = new DateTime();
				// echo $date->format('l, F jS, Y');
				?></div>
		</h4>		  
									

<div class="block-content collapse in">
<form class="form-inline">
<label class="control-label">Filter</label>
<select onchange="location = this.value;">
<option value="">Pilih Kategori</option>

<option value="?module=new_barang">
<?php echo $lang['admin']['all']?>
</option>

<?php
		$barang=mysql_query("select * from device_name");
		
		while ($row = mysql_fetch_assoc($barang)) {
			$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='New'");
			$count=mysql_num_rows($data);  
							?>	
<option value="?module=new_barang&act=list&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count;?>
</option>


<?php
}
?>
</select>
</form>
<form id="send" class="form-inline" method="post">	

	<label class="control-label" for="inputEmail"><?php echo $lang['admin']['location_name']?></label>
	
	<select name="stdev_id" class="chzn-select" required>
		<option></option>
			<?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			while ($row=mysql_fetch_array($result)){ ?>
		<option value="<?php echo $row['stdev_id']; ?>"><?php echo $row['stdev_location_name']; ?></option>
		<?php } ?>
	</select>
		<label><?php echo $lang['admin']['ammount_dev_moving']?></label> 
		&nbsp;<input type="text" name="pindah" id="pindah" placeholder="Jumlah Barang" required/>


	<button  class="btn btn-primary" id="snd" data-placement="right" title="<?php echo $lang['admin']['click_loc_assign']?>"><i class="icon-share"></i> <?php echo  $lang['admin']['location_assign']?></button>

<script type="text/javascript">
$(document).ready(function(){
$('#snd').tooltip('show');
$('#snd').tooltip('hide');
});
</script>

<br/><br/>		

<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
	<tr>
	<th class="empty"></th>
	<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_year']?></th>
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>		              					              		  
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

<?php
$device_query = mysql_query("select * from stdevice
JOIN device_name ON stdevice.dev_id=device_name.dev_id
LEFT JOIN device_name_type ON stdevice.type_id=device_name_type.type_id
where dev_status='New' ORDER BY stdevice.id DESC") or die(mysql_error());
while ($row = mysql_fetch_array($device_query)) {
$id = $row['id'];
$dev_name = $row['dev_name'];
$coba=mysql_query("select SUM(jumlah) as tamp from location_details where id=$id");
$tamp=mysql_fetch_assoc($coba);
if ($row['jumlah']==0) {
echo "";
} else {
?>
						
<tr>
<td width="30" class="empty">
<input id="" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
</td>
<td><a href="?module=data_stock_barang&act=lihat_barang&id=<?php echo $id; ?>"><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></a></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['jumlah'];?></td>
<td><div class="label label-success"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>
</tr>
								
<?php }} ?>   

</tbody>
</table>
</form>	
<script>
jQuery(document).ready(function(){
jQuery("#send").submit(function(e){
	e.preventDefault();											
	var formData = jQuery(this).serialize();
	$.ajax({
	type: "POST",
	url: "module/assign/send.php",
	data: formData,
	success: function(html){
	if(html=='true'){
	 
	Swal.fire({
        title: "<?php echo $lang['swal']['success']?>",
        text: "<?php echo $lang['swal']['dev_assign_success']?>",
        icon: "success",
        showConfirmButton: false
    });
    setTimeout(function(){ window.location = 'dashboard.php?module=new_barang'  }, 2000);
	}else if(html=='false'){
	
	Swal.fire({
        title: "<?php echo $lang['swal']['attention']?>",
        text: "<?php echo $lang['swal']['too_much']?>",
        icon: "warning",
        showConfirmButton: false
    });
	} else {
	
	Swal.fire({
        title: "<?php echo $lang['swal']['attention']?>",
        text: "<?php echo $lang['swal']['not_selected']?>",
        icon: "error",
        showConfirmButton: false
    });
}		
}
									
});
return false;

});
});

</script>		  		
			
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
		and dev_status='new' ORDER BY stdevice.id DESC");
		$count = mysql_num_rows($count_item);
		?>		                 					 
		<div id="block_bg" class="block">
			<div class="navbar navbar-inner block-header">
					<div class="pull-left"><strong><i class="icon-check"></i>&nbsp;<?php echo $lang['admin']['new_dev_list']?></strong></div>
					<div class="pull-right">
					<?php echo $lang['admin']['ammount_dev_list']?>: <span class="badge badge-info"><?php  echo $count; ?></span>
					</div>
				</div>
				
	<h4 id="sc"><?php echo $lang['admin']['new_dev_list']?>
		<div align="right" id="sc"><?php echo $lang['admin']['date'] ?>:
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

<option value="?module=new_barang">
<?php echo $lang['admin']['all']?>
</option>

<?php
		$barang=mysql_query("select * from device_name");
		
		while ($row = mysql_fetch_assoc($barang)) {
			$data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='New'");
			$count=mysql_num_rows($data);  
							?>	
<option value="?module=new_barang&act=list&dev_id=<?php echo $row['dev_id']?>">
<?php echo $row['dev_name'];?> &mdash; <?php echo $count;?>
</option>


<?php
}
?>
</select>
</form>

<form id="send" class="form-inline" method="post">	

<label class="control-label" for="inputEmail"><?php echo $lang['admin']['location_name']?></label>
	
		<select name="stdev_id" class="chzn-select" required>
		<option></option>
			<?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			while ($row=mysql_fetch_array($result)){ ?>
		<option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
		<?php } ?>
		</select>
			<label><?php echo $lang['admin']['ammount_dev_moving']?></label> 
		&nbsp;<input type="text" name="pindah" id="pindah" placeholder="Jumlah Barang" required/>


<button  class="btn btn-primary" id="snd" data-placement="right" title="<?php echo $lang['admin']['click_loc_assign']?>" type="submit"><i class="icon-share"></i> <?php echo  $lang['admin']['location_assign']?></button>
<script type="text/javascript">
$(document).ready(function(){
$('#snd').tooltip('show');
$('#snd').tooltip('hide');
});
</script>


<br/><br/>		
                    
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
	<tr>
	<th class="empty"></th>
	<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_year']?></th>
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>	                 					              		  
</tr>

</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

<?php
$device_query = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
LEFT JOIN device_name_type ON stdevice.type_id=device_name_type.type_id
where dev_status='new' and stdevice.dev_id='$dev_id' ORDER BY stdevice.id DESC") or die(mysql_error());
while ($row = mysql_fetch_array($device_query)) {
$id = $row['id'];
$dev_name = $row['dev_name'];
 
?>
							
<tr>
<td width="30" class="empty">
<input id="" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
</td>
<td><a href="?module=data_stock_barang&act=lihat_barang&id=<?php echo $id; ?>"><?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></a></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><?php echo $row['year']; ?></td>	
<td><?php echo $row['jumlah'];?></td>

<td><div class="label label-success"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>	
</tr>
								
<?php } ?>
</tbody>
</table>
</form>	
<script>
jQuery(document).ready(function(){
jQuery("#send").submit(function(e){
	e.preventDefault();											
	var formData = jQuery(this).serialize();
	$.ajax({
	type: "POST",
	url: "module/assign/send.php",
	data: formData,
	success: function(html){
	if(html=='true'){
	 
	Swal.fire({
        title: "<?php echo $lang['swal']['success']?>",
        text: "<?php echo $lang['swal']['dev_assign_success']?>",
        icon: "success",
        showConfirmButton: false
    });
    setTimeout(function(){ window.location = 'dashboard.php?module=new_barang'  }, 2000);
	}else if(html=='false'){
	
	Swal.fire({
        title: "<?php echo $lang['swal']['attention']?>",
        text: "<?php echo $lang['swal']['too_much']?>",
        icon: "warning",
        showConfirmButton: false
    });
	} else {
	
	Swal.fire({
        title: "<?php echo $lang['swal']['attention']?>",
        text: "<?php echo $lang['swal']['not_selected']?>",
        icon: "error",
        showConfirmButton: false
    });
}		
}
									
});
return false;

});
});

</script>		  		
</div>
</div>

</div>

<?php };?>