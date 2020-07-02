<div class="row-fluid">
<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
    <div class="pull-left"> <i class="icon-plus-sign"></i> <?php echo $lang['admin']['add_location']?></div>
</div>
<div class="block-content collapse in">
    <div class="span12">
<form method="post">

          <div class="control-group">
              <div class="controls">
                <input name="stdev_location_code" class="input focused" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['location_code']?>" required>
              </div>
            </div>
            
           <div class="control-group">
              <div class="controls">
                <input name="stdev_location_name" class="input focused" id="focusedInput" type="text" placeholder = "<?php echo $lang['admin']['location_name']?>" required>
              </div>
            </div>
 
            <div class="control-group">
              <div class="controls">
               <!-- <input name="stdev_location_floor" class="input focused" id="focusedInput" type="text" placeholder = "<?php //echo $lang['admin']['location_floor']?>" required>-->

                <select id="focusedInput" class="input focused" name="stdev_location_floor" required>
					<option value="">Pilih Lantai</option>
				
					<option value="I">I</option>
          <option value="II">II</option>
          <option value="III">III</option>
          <option value="IV">IV</option>
				</select>
              </div>
            </div>

<div id="hide">
<div class="control-group">
              <div class="controls">
                <input name="thumbnails" class="input focused" >
              </div>
            </div>
</div>

<div class="control-group">
<div class="controls">
<button name="save" class="btn btn-primary" id="save" data-placement="right" title="<?php echo $lang['admin']['click_save']?>"><i class="icon-save"></i> <?php echo $lang['admin']['save']?></button>
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
</div><?php
if (isset($_POST['save'])){
  $stdev_location_code = $_POST['stdev_location_code'];
$stdev_location_name = $_POST['stdev_location_name'];
$stdev_location_floor = $_POST['stdev_location_floor'];
$thumbnails = $_POST['thumbnails'];

$query = mysql_query("select * from stlocation where stdev_location_code = '$stdev_location_code', stdev_location_name  =  '$stdev_location_name' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('Location Name Already Exist');
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['location_exist']?>",
		icon: 'warning'});
	});
});
</script>
<?php
}else{
mysql_query("insert into stlocation (stdev_location_name,stdev_location_floor,thumbnails) values('$stdev_location_name','$stdev_location_floor','images/thumbnails.jpg')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add location $stdev_location_name')")or die(mysql_error());
?>
<script>
$('#save').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['add_location_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=lokasi'  }, 2000);
			}); 
//$.jGrowl("Location Successfully added", { header: 'Location add' });
//window.location = "?module=lokasi";
</script>
<?php
}
}
?>