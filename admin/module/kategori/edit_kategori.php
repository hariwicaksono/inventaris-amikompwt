<div class="row-fluid">				  
<a href="dashboard.php?module=kategori_barang" class="btn btn-info" id="add" data-placement="right" title="<?php echo $lang['admin']['click_add_category']?>" ><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_category']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#add').tooltip('show');
$('#add').tooltip('hide');
});
</script> 
<!-- block -->
<div id="block_bg" class="block"> 
<div class="navbar navbar-inner block-header">
  <div class="pull-left"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit_category']?></div>
</div>
<div class="block-content collapse in">
  <div class="span12">
<?php
$query = mysql_query("select * from device_name where dev_id = '$get_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
?>

<!-- --------------------form ---------------------->						
<form method="post">
<div class="control-group">
<div class="controls">
              <input class="input focused" value="<?php echo $row['dev_id']; ?>" name="dev_id" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['input_idcategory']?>" readonly>
            </div>
            <div class="controls">
              <input class="input focused" value="<?php echo $row['dev_name']; ?>" name="dev_name" id="focusedInput" type="text" placeholder = "Device Name" required>
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
$dev_name = $_POST['dev_name'];

mysql_query("update device_name set dev_name = '$dev_name'  where dev_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Device Type $dev_name')")or die(mysql_error());	
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
			setTimeout(function(){ window.location = 'dashboard.php?module=kategori_barang'  }, 2000);
			}); 
			</script>

<?php
}
?>