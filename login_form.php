
<form id="login_form1" class="form-signin" method="post">
<h3 class="form-signin-heading">
<i class="icon-lock"></i> <?php echo $lang['please_login'];?>
</h3>
<input type="text"      class="input-block-level"  id="username" name="username" placeholder="<?php echo $lang['username']?>" required>
<input type="password"  class="input-block-level"   id="password" name="password" placeholder="<?php echo $lang['password']?>" required>

<button data-placement="right" title="<?php echo $lang['click_to_sign'];?>" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> <?php echo $lang['signin'];?></button>
<script type="text/javascript">
$(document).ready(function(){
$('#signin').tooltip('show');
$('#signin').tooltip('hide');
});
</script>		
</form>
<script>
jQuery(document).ready(function(){
jQuery("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = jQuery(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true_admin')
			{
			$.jGrowl("<?php echo $lang['jgrowl']['loading']?>", { sticky: true });
			$.jGrowl("<?php echo $lang['jgrowl']['loading_selamat']?>", { header: '<?php echo $lang['jgrowl']['access_granted']?>' });
			var delay = 1000;
				setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
			}else if (html == 'true'){
				$.jGrowl("<?php echo $lang['jgrowl']['loading_selamat']?>", { header: '<?php echo $lang['jgrowl']['access_granted']?>' });
			var delay = 1000;
				setTimeout(function(){ window.location = 'admin/dashboard_client.php'  }, delay);  
			}else
			{
			$.jGrowl("<?php echo $lang['jgrowl']['check_user']?>", { header: '<?php echo  $lang['jgrowl']['login_fail']?>' });
			}
			}
		});
		return false;
	});
});
</script>
