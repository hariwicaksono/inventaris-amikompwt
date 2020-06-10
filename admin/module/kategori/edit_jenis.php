<div class="row-fluid">				  
<a href="dashboard.php?module=jenis_barang" class="btn btn-info" id="add" data-placement="right" title="<?php echo $lang['admin']['add_device_type']?>" ><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_device_type']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#add').tooltip('show');
$('#add').tooltip('hide');
});
</script> 
<!-- block -->
<div id="block_bg" class="block"> 
<div class="navbar navbar-inner block-header">
  <div class="pull-left"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit_device_type']?></div>
</div>
<div class="block-content collapse in">
  <div class="span12"> 
<?php
$query = mysql_query("select * from device_name_type 
LEFT JOIN device_name ON device_name_type.dev_id=device_name.dev_id
where type_id = '$get_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<!-- --------------------form ---------------------->						
<form method="post">
  <div class="control-group">
            
        <div class="controls">
            <select id="category" name="dev_id">
				<option value="">Pilih Kategori</option>
					<?php
					$device_query = mysql_query("select * from device_name")or die(mysql_error());
					while($query_device_row = mysql_fetch_array($device_query)){
					$dev_name = $row['dev_name'];
					$selected = ' selected="selected" ';
					?>
					<option value="<?php echo $query_device_row['dev_id']; ?>" <?php if($dev_name==$query_device_row['dev_name']) echo $selected; ?> ><?php echo $query_device_row['dev_id'];?> - <?php echo $query_device_row['dev_name'];  ?></option>
					<?php } ?>
				</select>
        </div>

            <div class="controls">
              <input class="input focused" value="<?php echo $row['type_number']; ?>" name="type_number" id="focusedInput" type="text" placeholder = "Category Type ID" required>
            </div>
            <div class="controls">
              <input class="input focused" value="<?php echo $row['type_name']; ?>" name="type_name" id="focusedInput" type="text" placeholder = "Category Type Name" required>
            </div>

           

  </div>

  <div class="control-group">
    <div class="controls">
      <button name="update" class="btn btn-primary" id="update" data-placement="right" title="<?php echo $lang['admin']['click_update']?>"><i class="icon-save"></i> <?php echo $lang['admin']['update']?></button>
                  <script type="text/javascript">
                $(document).ready(function(){
                $('#update').tooltip('show');
                $('#update').tooltip('hide');
                });
                </script>
    </div>
  </div>
</form>

</div>
</div>
</div>
<!-- /block -->
</div>
<?php		
if (isset($_POST['update'])){
  $type_number = $_POST['type_number'];
$type_name = $_POST['type_name'];
$dev_id = $_POST['dev_id'];

mysql_query("update device_name_type set type_number = '$type_number', type_name = '$type_name', dev_id = '$dev_id'  where type_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Device Type $dev_id $type_number $type_name')")or die(mysql_error());	
?>
<script>
//window.location = "?module=jenis_barang";
//$.jGrowl("Device Name Successfully Updated", { header: 'Device Name Updated' });  
</script>
<script>
			$('#update').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['cate_update_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=jenis_barang'  }, 2000);
			}); 
			</script>

<?php
}
?>