<div class="row-fluid">					  
<a href="dashboard.php?module=lokasi" class="btn btn-info"id="add" data-placement="right" title="<?php echo $lang['admin']['click_add_location']?>" ><i class="icon-plus-sign"></i> <?php echo $lang['admin']['add_location']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#add').tooltip('show');
$('#add').tooltip('hide');
});
</script>
<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-reorder icon-building"></i> <?php echo $lang['admin']['edit_location']?></div>
</div>
<?php
$query = mysql_query("select * from stlocation where stdev_id = '$get_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
?>
<div class="block-content collapse in">
<div class="span12">
<form method="post">

        <div class="control-group">
            <div class="controls">
            <input name="stdev_location_code" value="<?php echo $row['stdev_location_code']; ?>" class="input focused" id="focusedInput" type="text" placeholder="<?php echo $lang['admin']['location_code']?>" required>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
            <input name="stdev_location_name" value="<?php echo $row['stdev_location_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder="<?php echo $lang['admin']['location_name']?>" required>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
           <!-- <input name="stdev_location_floor" value="<?php //echo $row['stdev_location_floor']; ?>" class="input focused" id="focusedInput" type="text" placeholder="<?php //echo $lang['admin']['location_floor']?>" required>-->

            <select id="focusedInput" class="input focused" name="stdev_location_floor" required>
					<option value="">Pilih Lantai</option>
                    <?php
					$selected = ' selected="selected" ';
					?>
					<option value="I" <?php if($row['stdev_location_floor']=="I") echo $selected; ?> >I</option>
          <option value="II" <?php if($row['stdev_location_floor']=="II") echo $selected; ?> >II</option>
          <option value="III" <?php if($row['stdev_location_floor']=="III") echo $selected; ?> >III</option>
          <option value="IV" <?php if($row['stdev_location_floor']=="IV") echo $selected; ?> >IV</option>
				</select>
            </div>
        </div> 

    <div class="control-group">
            <div class="controls">
                <button name="update" class="btn btn-success" id="update" data-placement="right" title="<?php echo $lang['admin']['click_save']?>"><i class="icon-save"></i> <?php echo $lang['admin']['save']?></button>
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
</div><?php
if (isset($_POST['update'])){
$stdev_location_code = $_POST['stdev_location_code'];
$stdev_location_name = $_POST['stdev_location_name'];
$stdev_location_floor = $_POST['stdev_location_floor'];
mysql_query("update stlocation set stdev_location_code = '$stdev_location_code',stdev_location_name = '$stdev_location_name',stdev_location_floor = '$stdev_location_floor' where stdev_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit location $stdev_location_name')")or die(mysql_error());
?>

<script>

    $('#update').ready(function() {	
    Swal.fire({
        title: "<?php echo $lang['swal']['success']?>",
        text: "<?php echo $lang['swal']['upd_location_success']?>",
        icon: 'success',
        showConfirmButton: false
    });
    setTimeout(function(){ window.location = 'dashboard.php?module=lokasi'  }, 2000);
    }); 
	
//$.jGrowl("location Successfully Updated", { header: 'Location update' });
//window.location = "?module=lokasi";
</script>
<?php

}
?>