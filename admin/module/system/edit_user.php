<div class="row-fluid">
<a href="?module=system_user" class="btn btn-info" id="add" data-placement="right" title="<?php echo $lang['admin']['click_add_system_user']?>" ><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_system_user']?></a>
<script type="text/javascript">
$(document).ready(function(){
$('#add').tooltip('show');
$('#add').tooltip('hide');
});
</script>
<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-pencil"></i> <?php echo $lang['admin']['edit_system_user']?></div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
$query = mysql_query("select * from admin where admin_id = '$get_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
?>
<form method="post">
<div class="control-group">
        <div class="controls">
          <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
        </div>
      </div>

<div class="control-group">
        <div class="controls">
          <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
        </div>
      </div>

<div class="control-group">
        <div class="controls">
          <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
        </div>
      </div>



<div class="control-group">
        <div class="controls">
<button name="update" class="btn btn-success" id="update" data-placement="right" title="<?php echo $lang['admin']['click_update']?>"><i class="icon-save"></i> <?php echo $lang['admin']['update']?></button>
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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];


mysql_query("update admin set username = '$username'  , firstname = '$firstname' , lastname = '$lastname' where admin_id = '$get_id' ")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit system User $firstname')")or die(mysql_error());	
?>
<script>
//window.location = "?module=system_user"; 
//$.jGrowl("System User Successfully Update", { header: 'System User Update' });
</script>
<script>
			$('#update').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['upd_sysuser_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=system_user'  }, 2000);
			}); 
</script>
<?php
}
?>