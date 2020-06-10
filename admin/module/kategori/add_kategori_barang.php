
<div class="row-fluid">
<!-- block -->
<div id="block_bg" class="block">
  <div class="navbar navbar-inner block-header">
      <div class="pull-left"><i class="icon-plus-sign icon-large"> <?php echo $lang['admin']['add_category'] ?></i></div>
  </div>
  <div class="block-content collapse in">
      <div class="span12">

<!--------------------form------------------->
<form method="post">
    <div class="control-group">
    <div class="controls">
                  <input class="input focused" name="dev_id" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['input_idcategory']?>" required>
                </div>

                <div class="controls">
                  <input class="input focused" name="dev_name" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['input_category']?>" required>
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
$dev_id = $_POST['dev_id'];
$dev_name = $_POST['dev_name'];

$query = mysql_query("select * from device_name where dev_name = '$dev_name'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('Jenis Barang sudah ada');
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['cate_exist']?>",
		icon: 'warning'});
	});
});
</script>
<?php
}else{

mysql_query("insert into device_name (dev_id,dev_name) values('$dev_id','$dev_name')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add device Type $dev_id $dev_name')")or die(mysql_error());
?>
<script> 
$('#save').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['cate_add_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=kategori_barang'  }, 2000);
			}); 
//window.location = "?module=jenis_barang";
//$.jGrowl("Jenis Barang Berhasil Ditambahkan", { header: 'Tambah Jenis Barang' });
</script>
<?php
}
}
?>