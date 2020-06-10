
<div class="row-fluid">
<!-- block -->
<div id="block_bg" class="block">
  <div class="navbar navbar-inner block-header">
      <div class="pull-left"><i class="icon-plus-sign icon-large"> <?php echo $lang['admin']['add_device_type'] ?></i></div>
  </div>
  <div class="block-content collapse in">
      <div class="span12">

<!--------------------form------------------->
<form method="post">
    <div class="control-group">
        <div class="controls">
        <select id="category" name="dev_id">
					<option value="">Pilih Kategori</option>
					<?php $device_name=mysql_query("select * from device_name")or die(mysql_error()); 
					while ($row=mysql_fetch_array($device_name)){ 												
					?>
					<option value="<?php echo $row['dev_id']; ?>"><?php echo $row['dev_id'];?> - <?php echo $row['dev_name']; ?></option>
					<?php } ?>
				</select>
        </div>

              <div class="controls">
                  <input class="input focused" name="type_number" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['device_type_id']?>" required>
                </div>

                <div class="controls">
                  <input class="input focused" name="type_name" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['device_type_name']?>" required>
                </div>
    </div>

  <div class="control-group">
                <div class="controls">
<button name="save" class="btn btn-primary" id="save" data-placement="right" title="<?php echo $lang['admin']['click_save'] ?>"><i class="icon-save"></i> <?php echo $lang['admin']['save']?></button>
<script type="text/javascript">
                    $(document).ready(function(){
                    $('#save').tooltip('show');
                    $('#save').tooltip('hide');
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
if (isset($_POST['save'])){
  $type_id = $_POST['type_id'];
$type_name = $_POST['type_name'];
$dev_id = $_POST['dev_id'];

$query = mysql_query("select * from device_name_type where type_name = '$type_name'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('Jenis Barang sudah ada');
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['device_type_exist']?>",
		icon: 'warning'});
	});
});
</script>
<?php
}else{

mysql_query("insert into device_name_type (type_id,type_name,dev_id) values('$type_id','$type_name','$dev_id')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add device Type $type_id $type_name $dev_id')")or die(mysql_error());
?>
<script> 
$('#save').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['add_device_type_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=jenis_barang'  }, 2000);
			}); 
//window.location = "?module=jenis_barang";
//$.jGrowl("Jenis Barang Berhasil Ditambahkan", { header: 'Tambah Jenis Barang' });
</script>
<?php
}
}
?>