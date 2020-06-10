
<div class="row-fluid">
              <!-- block -->
              <div id="block_bg" class="block">
                  <div class="navbar navbar-inner block-header">
                      <div class="pull-left"><i class="icon-plus-sign icon-large"></i> <?php echo $lang['admin']['add_tech_user']?></div>
                  </div>
                  <div class="block-content collapse in">
                      <div class="span12">
      
        <!--------------------form------------------->
      <form method="post">
          <div class="control-group">
                                <div class="controls">
                                  <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                </div>
                              </div>
          
          <div class="control-group">
                                <div class="controls">
                                  <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                </div>
                              </div>
          
          <div class="control-group">
                                <div class="controls">
                                  <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                </div>
                              </div>
          
          <div class="control-group">
                                <div class="controls">
                                  <input type="password" class="input focused" name="password" id="focusedInput" type="text" placeholder = "Password" required>
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
          </div>				 
<?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysql_query("select * from client where username = '$username' and firstname = '$firstname' and lastname = '$lastname' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
//alert('Data Already Exist');
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['tech_user_exist']?>",
		icon: 'warning'});
	});
});
</script>
<?php
}else{
mysql_query("insert into client (username,password,firstname,lastname,thumbnails) values('$username','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add Client User $firstname')")or die(mysql_error());
?>
<script>
//window.location = "?module=client_user";
//$.jGrowl("Client User Successfully added", { header: 'Client User add' });
$('#save').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['upd_tech_staff']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=client_user'  }, 2000);
			});  
</script>
<?php
}
}
?>