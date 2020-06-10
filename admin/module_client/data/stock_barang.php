<?php
switch($_GET['act']){
default:?>

<h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
<?php	
$count_item=mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id");
$count = mysql_num_rows($count_item);
?>	 
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-reorder icon-large"></i> <?php echo $lang['admin']['list_device']?></div>
<div class="pull-right">
<?php echo $lang['admin']['total_device'] ?>: <span class="badge badge-info"><?php  echo $count; ?></span>
</div>
</div>

<h4 id="sc"><?php echo $lang['admin']['list_device']?>
<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
<?php
echo date("h:i:s a");
//  $date = new DateTime();
// echo $date->format('l, F jS, Y');
?></div>
</h4>  							  
<br/>														
<div class="container-fluid">
<div class="row-fluid"> 
<div class="empty">
<div class="pull-right">
<a href="print_stock_client.php" class="btn btn-info" id="print" data-placement="top" title="<?php echo $lang['admin']['click_print_list']?>"><i class="icon-print icon-large"></i> <?php echo $lang['admin']['print_list']?></a>  
<script type="text/javascript">
$(document).ready(function(){
$('#print').tooltip('show');
$('#print').tooltip('hide');
});
</script>
<a href="?module=stock_barang&act=add_barang" class="btn btn-info"  id="add" data-placement="top" title="<?php echo $lang['admin']['click_add_device']?>" ><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_device']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#add').tooltip('show');
$('#add').tooltip('hide');
});
</script> 		
</div>
</div>
</div>
</div>

<div class="block-content collapse in">
<div class="span12">
<form action="" method="post">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
<tr>			        
<th class="empty"></th>
<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<!--<th><?php echo $lang['admin']['input_spec']?></th>-->
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>					
<th class="empty"></th>						
</tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$device_query = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
while($row = mysql_fetch_array($device_query)){
$id = $row['id'];
$dev_id = $row['dev_id'];
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
<td><?php echo $row['id']; ?>.<?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_serial']; ?></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<!--<td><?php echo $row['dev_desc']; ?></td>-->
<td><?php echo $row['jumlah']; ?></td>
<td><?php
$device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
$dev=mysql_fetch_assoc($device_query1);
if($row['dev_status']=='New')
{
echo '<div class="label label-success">'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Used')
{
echo '<div class="label label-warning">'.$row['dev_status'].'</strong></div>';
}
else if($row['dev_status']=='Repaired')
{
echo '<div class="label label-warning">'.$row['dev_status'].'</strong></div>';
}
else
{
echo '<div class="label label-important">'.$row['dev_status'].'</strong></div>';
};
?></td>

<?php include('toolttip_edit_delete.php'); ?>												
<td class="empty" width="80"><a rel="tooltip"  title="<?php echo $lang['admin']['edit_device']?>" id="e<?php echo $id; ?>" href="?module=stock_barang&act=edit_barang&id=<?php echo $id; ?>" class="btn btn-small btn-warning"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit']?></a></td>
</tr>
			
<?php } ?>   

</tbody>
</table>
</form>		


</div>
</div>
</div>
<?php break;
case "add_barang";?>

<!-- block -->
<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
		<div class="pull-left"><?php echo $lang['admin']['add_device']?></div>
		<div class="pull-right"><a id="return" data-placement="left" title="Click to Return" href="?module=stock_barang"><i class="icon-arrow-left icon-large"></i> <?php echo $lang['admin']['back']?></a></div>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#return').tooltip('show');
				$('#return').tooltip('hide');
			});
			</script>                          
	</div>
<div class="block-content collapse in">	
<div class="alert alert-success"><i class="icon-info-sign"></i> Isi dengan lengkap data yang dibutuhkan</div>						
<form class="form-horizontal" method="post">
		<script>
		$(document).ready(function () {   
			$('body').on('change','#category', function() {
				$('#icategory').val(this.value);
				
			});
			$('body').on('change','#type', function() {
				$('#itype').val(this.value);
				
			});
		}); 
		</script>
		<div class="control-group">
			<label class="control-label" for="category"><?php echo $lang['admin']['input_category']?></label>
			<div class="controls controls-row">
				<select id="category" class="span6" name="dev_id">
					<option value="">Pilih Kategori</option>
					<?php $device_name=mysql_query("select * from device_name")or die(mysql_error()); 
					while ($row=mysql_fetch_array($device_name)){ 												
					?>
					<option value="<?php echo $row['dev_id']; ?>"><?php echo $row['dev_name']; ?></option>
					<?php } ?>
				</select>

				<select id="type" class="span6" name="type_id">
				<option value="">Pilih Jenis</option>
				<?php
					$query = mysql_query("select * from device_name_type INNER JOIN device_name ON device_name_type.dev_id = device_name.dev_id ORDER BY type_number")or die(mysql_error());
					while ($row = mysql_fetch_array($query)) { ?>

					<option id="type" class="<?php echo $row['dev_id']; ?>" value="<?php echo $row['type_number']; ?>">
						<?php echo $row['type_name']; ?>
					</option>

				<?php } ?>
			</select>

			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputCode"><?php echo $lang['admin']['input_code']?></label>
			<div class="controls controls-row">
			<input type="text" class="span3" id="icategory" readonly>
			<input type="text" class="span3" id="itype" readonly>
			<input type="text" class="span6" name="dev_serial" id="inputCode" placeholder="<?php echo $lang['admin']['placeholder_devcode']?>" required>
			</div>
		</div>

		
		<div class="control-group">
			<label class="control-label" for="inputPassword"><?php echo $lang['admin']['input_name']?></label>
			<div class="controls">
			<input type="text" class="span12" name="dev_brand" id="inputPassword" placeholder="<?php echo $lang['admin']['placeholder_devname']?>" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputMerk"><?php echo $lang['admin']['input_merk']?></label>
			<div class="controls">
			<input type="text" class="span12" name="dev_model" id="inputMerk" placeholder="<?php echo $lang['admin']['placeholder_merk']?>" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label"><?php echo $lang['admin']['input_amount']?> / <?php echo $lang['admin']['input_unit']?></label>
			<div class="controls controls-row">
			<input type="text" class="span6" name="jumlah" id="inputAmmount" placeholder="<?php echo $lang['admin']['placeholder_amount']?>" required>

			<select id="inputUnit" name="unit_id" class="span6">
					<option><?php echo $lang['admin']['select_unit']?></option>
					<?php $unit_name=mysql_query("select * from device_unit")or die(mysql_error()); 
					while ($row=mysql_fetch_array($unit_name)){ 												
					?>
					<option value="<?php echo $row['unit_id']; ?>"><?php echo $row['unit_name']; ?></option>
					<?php } ?>
				</select>

			</div>
		</div>

		<div class="control-group">
				
			<label class="control-label"><?php echo $lang['admin']['input_year']?> / <?php echo $lang['admin']['input_procure']?></label>
			<div class="controls controls-row">

				<input type="text" class="span6" name="year" id="inputYear" placeholder="<?php echo $lang['admin']['placeholder_year']?>" required>

				<select id="inputProc" name="procure_id" class="span6">
					<option><?php echo $lang['admin']['select_procure']?></option>
					<?php $proc_name=mysql_query("select * from device_procurement")or die(mysql_error()); 
					while ($row=mysql_fetch_array($proc_name)){ 												
					?>
					<option value="<?php echo $row['procure_id']; ?>"><?php echo $row['procure_name']; ?></option>
					<?php } ?>
				</select>
				
			</div>

		</div>

		<div id="hide">
		<div class="control-group">
			<label class="control-label" for="inputStatus"  placeholder="Device Status" >Status</label>
			<div class="controls">
			<select name="dev_status"  required>										
					<option>New</option>																									
				</select>								
			</div>
		</div>
		</div>
				
		<div class="control-group">
			<label class="control-label" for="inputSpec"><?php echo $lang['admin']['input_spec']?></label>
			<div class="controls">
			<textarea class="span9" name="dev_desc" id="ckeditor_full"></textarea>
					
			</div>
		</div>

		<input type="hidden" id="inst_id" name="inst_id" value="1">
			
		<div class="control-group">
		<div class="controls">
		<button name="save" id="save" data-placement="right" title="<?php echo $lang['admin']['click_save']?>" class="btn btn-primary"><i class="icon-save"></i> <?php echo $lang['admin']['save']?></button>				
		</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#save').tooltip('show');
		$('#save').tooltip('hide');
		});
		</script>
</form>
<?php
if (isset($_POST['save'])){
	$dev_id = $_POST['dev_id'];
	$type_id = $_POST['type_id'];
	$dev_serial = $_POST['dev_serial'];
	$dev_brand = $_POST['dev_brand'];
	$dev_model = $_POST['dev_model'];
	$jml=$_POST['jumlah'];
	$year=$_POST['year'];
	$dev_status = $_POST['dev_status'];
	$dev_desc = $_POST['dev_desc'];
	$unit_id = $_POST['unit_id'];
	$inst_id = $_POST['inst_id'];
	$procure_id = $_POST['procure_id'];
	$created_at = date("Y-m-d h:i:s");
	
	$query = mysql_query("select * from stdevice where dev_serial = '$dev_serial' ")or die(mysql_error());
	$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('Device Code Already Exist');
//window.location = "?module=data_stock_barang";

$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['code_exist']?>",
		icon: 'warning'});
	});
</script>
<?php
}else{
	mysql_query("insert into stdevice (dev_id,type_id,dev_brand,dev_model,dev_status,dev_desc,jumlah,year,unit_id,inst_id,procure_id,created_at) values('$dev_id','$type_id','$dev_serial','$dev_brand','$dev_model','$dev_status','$dev_desc','$jml','$year','$unit_id','$inst_id','$procure_id','$created_at')")or die(mysql_error());
	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add device Detail id $dev_id')")or die(mysql_error());											
?>
<script>
//window.location = "?module=data_stock_barang";
//$.jGrowl("Device Successfully added", { header: 'Device add' });
$('#save').ready(function() {	
    Swal.fire({
        title: "<?php echo $lang['swal']['success']?>",
        text: "<?php echo $lang['swal']['dev_add_success']?>",
        icon: "success",
        showConfirmButton: false
    });
    setTimeout(function(){ window.location = 'dashboard.php?module=data_stock_barang'  }, 2000);
    }); 
</script>
<?php
}
}
?>

<script src="vendors/jchained.min.js"></script>
<script>
    $(document).ready(function() {
        $("#type").chained("#category");
                
 	});
 </script>	
																		
	</div>
</div>
<!-- /block -->
<?php break;
case "edit_barang";?>

<?php $get_id = $_GET['id']; ?>

		<a href="?module=stock_barang&act=add_barang" class="btn btn-info"  id="add" data-placement="right" title="<?php echo $lang['admin']['click_add_device']?>" ><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_device']?></a>
		<script type="text/javascript">
		$(document).ready(function(){
		$('#add').tooltip('show');
		$('#add').tooltip('hide');
		});
		</script> 
<!-- block -->
<div id="block_bg" class="block">
	<div class="navbar navbar-inner block-header">
		<div class="pull-left"><?php echo $lang['admin']['edit_device']?></div>
		<div class="pull-right"><a id="return" data-placement="left" title="<?php echo $lang['admin']['click_back']?>" href="?module=stock_barang"><i class="icon-arrow-left icon-large"></i> <?php echo $lang['admin']['back']?></a></div>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#return').tooltip('show');
				$('#return').tooltip('hide');
			});
			</script>     
	</div>
	<div class="block-content collapse in">									
	
	<?php
	$id=$_GET['id'];
	$query = mysql_query("select * from stdevice 
	LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
	LEFT JOIN device_unit ON stdevice.unit_id=device_unit.unit_id
	LEFT JOIN device_name_type ON device_name_type.dev_id = device_name.dev_id
	LEFT JOIN device_procurement ON stdevice.procure_id=device_procurement.procure_id
	where id = '$id'")or die(mysql_error());
	$row = mysql_fetch_array($query);
	?>
	
		<form class="form-horizontal" method="post">
		<script>
		$(document).ready(function () {   
			$('body').on('change','#category', function() {
				$('#show_selected').val(this.value);
			});
		}); 
		</script>
		<div class="control-group">
			<label class="control-label" for="category"> <?php echo $lang['admin']['input_category']?></label>
			<div class="controls controls-row">
				<select id="category" name="dev_id" class="span6">
				<option value="">Pilih Kategori</option>
					<?php
					$device_query = mysql_query("select * from device_name")or die(mysql_error());
					while($query_device_row = mysql_fetch_array($device_query)){
					$dev_name = $row['dev_name'];
					$selected = ' selected="selected" ';
					?>
					<option value="<?php echo $query_device_row['dev_id']; ?>" <?php if($dev_name==$query_device_row['dev_name']) echo $selected; ?> ><?php echo $query_device_row['dev_name'];  ?></option>
					<?php } ?>

				</select>

				<select id="type" class="span6" name="type_id">
				<option value="">Pilih Jenis</option>
				<?php
					$type_query = mysql_query("select * from device_name_type")or die(mysql_error());
					while ($query_type_row = mysql_fetch_array($type_query)) { 
						$type_name = $row['type_name'];
						$selected = ' selected="selected" ';	
					
					?>

					<option id="type" class="<?php echo $query_type_row['dev_id']; ?>" value="<?php echo $row['type_number']; ?>" <?php if($type_name==$query_type_row['type_name']) echo $selected; ?> >
						<?php echo $query_type_row['type_name']; ?>
					</option>

				<?php } ?>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputCode"><?php echo $lang['admin']['input_code']?></label>
			<div class="controls controls-row">
			<input type="text" class="span3" id="" value="<?php echo $row['dev_id']; ?>" readonly>
			<input type="text" class="span3" id="" value="<?php echo $row['type_id']; ?>" readonly>
			<input type="text" class="span6" value="<?php echo $row['dev_serial']; ?>" name="dev_serial" id="inputCode" placeholder="<?php echo $lang['admin']['placeholder_devcode']?>" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputName"><?php echo $lang['admin']['input_name'] ?></label>
			<div class="controls">
			<input type="text" class="span12" value="<?php echo $row['dev_brand']; ?>" name="dev_brand" id="inputName" placeholder="<?php echo $lang['admin']['placeholder_devname']?>" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputMerk"><?php echo $lang['admin']['input_merk']?></label>
			<div class="controls">
			<input type="text" class="span12" value="<?php echo $row['dev_model']; ?>" name="dev_model" id="inputPassword" placeholder="<?php echo $lang['admin']['placeholder_merk']?>" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label"><?php echo $lang['admin']['input_amount']?> / <?php echo $lang['admin']['input_unit']?></label>
			<div class="controls controls-row">
			<input type="text" class="span6" value="<?php echo $row['jumlah']; ?>" name="jumlah" id="inputPassword" placeholder="<?php echo $lang['admin']['placeholder_amount']?>" required>

			<select id="inputUnit" class="span6" name="unit_id">
				<option><?php echo $lang['admin']['select_unit']?></option>
					<?php
					$unit_query = mysql_query("select * from device_unit")or die(mysql_error());
					while($query_unit_row = mysql_fetch_array($unit_query)){
					$unit_name = $row['unit_name'];
					$selected = ' selected="selected" ';
					?>
					<option value="<?php echo $query_unit_row['unit_id']; ?>" <?php if($unit_name==$query_unit_row['unit_name']) echo $selected; ?> ><?php echo $query_unit_row['unit_name'];  ?></option>
					<?php } ?>

				</select>

			</div>
		</div>	

		<div class="control-group">
			<label class="control-label"><?php echo $lang['admin']['input_year']?> / <?php echo $lang['admin']['input_procure']?></label>
			<div class="controls controls-row">
				

				<input type="text" class="span6" value="<?php echo $row['year']; ?>" name="year" id="inputYear" placeholder="<?php echo $lang['admin']['placeholder_year']?>" required>

				<select id="inputProcure" class="span6" name="procure_id">
				<option><?php echo $lang['admin']['select_procure']?></option>
					<?php
					$unit_query = mysql_query("select * from device_procurement")or die(mysql_error());
					while($query_unit_row = mysql_fetch_array($unit_query)){
					$unit_name = $row['procure_name'];
					$selected = ' selected="selected" ';
					?>
					<option value="<?php echo $query_unit_row['procure_id']; ?>" <?php if($unit_name==$query_unit_row['procure_name']) echo $selected; ?> ><?php echo $query_unit_row['procure_name'];  ?></option>
					<?php } ?>

				</select>

			</div>
		</div>		
		
		<div id="hide">
		<div class="control-group">
			<label class="control-label" for="inputStatus"  placeholder="Device Status" >Status</label>
			<div class="controls">
			<select value="" name="dev_status" required>
					<option><?php echo $row['dev_status']; ?></option>													
				</select>								
			</div>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputSpec"><?php echo $lang['admin']['input_spec']?></label>
			<div class="controls">
					<textarea class="span12" name="dev_desc" id="ckeditor_full">
					<?php echo $row['dev_desc']; ?>
					</textarea>
			</div>
		</div>
		
		<div class="control-group">
		<div class="controls">
		
		<button name="update" id="update" data-placement="right" title="<?php echo $lang['admin']['click_update']?>" class="btn btn-primary"><i class="icon-save"></i> <?php echo $lang['admin']['update'];?></button>

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
		$dev_desc = $_POST['dev_desc'];
		$dev_serial = $_POST['dev_serial'];
		$dev_brand = $_POST['dev_brand'];
		$dev_model = $_POST['dev_model'];
		$dev_status = $_POST['dev_status'];
		$jml = $_POST['jumlah'];
		
		
	
		mysql_query("update stdevice set dev_id = '$dev_id' ,
										dev_desc = '$dev_desc',
										dev_serial  = '$dev_serial',
										dev_brand = '$dev_brand',
										dev_model = '$dev_model',
										dev_status = '$dev_status',
										jumlah = '$jml'
										where id = '$get_id' ")or die(mysql_error());
																												
		mysql_query("insert into notification (fullname,notification,date_of_notification,link) value('$client_fullname','Edit device $dev_name, Serial Number: $dev_serial',NOW(),'device_stocks.php')")or die(mysql_error());	
		?>
		<script>										
		window.location = "?module=stock_barang";
		$.jGrowl("Device Successfully Update", { header: 'Device update' });
		</script>
		<?php
		}
		
		
		?>
	

	</div>
</div>

<?php }?>
