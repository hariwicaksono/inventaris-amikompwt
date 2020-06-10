
<div class="block-content collapse in">
<div class="span12">
<form action="?module=lokasi" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-placement="right" title="<?php echo $lang['admin']['click_delete']?>"  data-toggle="modal" href="#delete_location" id="delete"  class="btn btn-danger" name=""><i class="icon-trash"></i> <?php echo $lang['admin']['delete']?></a>
	<script type="text/javascript">
		$(document).ready(function(){
		$('#delete').tooltip('show');
		$('#delete').tooltip('hide');
		});
	</script>
<?php

if (isset($_POST['delete_location'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
$data=mysql_query("select*from location_details where stdev_id='$id[$i]'");
if (mysql_num_rows($data)>0){
?>
<script>
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['other_ref']?>",
		icon: 'warning'});
	});
	setTimeout(function(){ window.location = 'dashboard.php?module=lokasi'  }, 2000);
});	
//$.jGrowl("Data Tersebut sedang Menjadi Referensi Data Tabel Lain", { header: 'Error' });
//windows.location='?module=lokasi';
</script>
<?php
}else{
$result = mysql_query("DELETE FROM stlocation where stdev_id='$id[$i]'");
}
}
?>
<script>
$('#delete_location').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['del_location']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=lokasi'  }, 2000);
			});  
</script>
<?php
//header("location: ?module=lokasi");
}
?>


<div id="delete_location" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel"><?php echo $lang['admin']['del_location']?></h3>
</div>
<div class="modal-body">
<div class="alert alert-danger">
<?php echo $lang['admin']['sure_del_location']?>
</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <?php echo $lang['admin']['close']?></button>
<button name="delete_location" class="btn btn-danger"><i class="icon-check"></i> <?php echo $lang['admin']['yes']?></button>
</div>
</div>
