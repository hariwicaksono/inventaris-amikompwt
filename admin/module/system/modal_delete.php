
<div class="block-content collapse in">
<div class="span12">
<form action="?module=system_user" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-placement="right" title="<?php echo $lang['admin']['click_delete']?>"  data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash"></i> <?php echo $lang['admin']['delete']?></a>
	<script type="text/javascript">
		$(document).ready(function(){
		$('#delete').tooltip('show');
		$('#delete').tooltip('hide');
		});
	</script>
	<?php 

if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
$result = mysql_query("DELETE FROM admin where admin_id='$id[$i]'");
}
header("location: ?module=system_user");
}
?>

<!------------------------------------- user delete modal --------------------------------------->
<div id="user_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel"><?php echo $lang['admin']['del_system_user']?></h3>
</div>
<div class="modal-body">
<div class="alert alert-danger">
<?php echo $lang['admin']['sure_del_system_user']?>
</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <?php echo $lang['admin']['close']?></button>
<button name="delete_user" class="btn btn-danger"><i class="icon-check"></i> <?php echo $lang['admin']['yes']?></button>
</div>
</div>