
<div class="block-content collapse in">
<div class="span12">
<form action="?module=jenis_barang" method="post">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<a data-placement="right" title="<?php echo $lang['admin']['del_category']?>"  data-toggle="modal" href="#device_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash"> <?php echo $lang['admin']['delete']?></i></a>
<script type="text/javascript">
	$(document).ready(function(){
	$('#delete').tooltip('show');
	$('#delete').tooltip('hide');
	});
</script>
<?php 



if (isset($_POST['delete_dev_name'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
$data=mysql_query("SELECT * from stdevice where dev_id='$id[$i]' ");
if (mysql_num_rows($data)>0){
?>
<script>
$().ready(function() {	
	Swal.fire({
		title: '<?php echo $lang['swal']['attention']?>',
		text: "<?php echo $lang['swal']['other_ref']?>",
		icon: 'warning'});
	});
	setTimeout(function(){ window.location = 'dashboard.php?module=jenis_barang'  }, 2000);
});	
//$.jGrowl("Data Tersebut sedang Menjadi Referensi Data Tabel Lain", { header: 'Error' });
//windows.location='?module=jenis_barang';
</script>
<?php
}else {
$result = mysql_query("DELETE FROM device_name where dev_id='$id[$i]'");
}
}
?>
<script>
$('#delete_dev_name').ready(function() {	
			Swal.fire({
				title: "<?php echo $lang['swal']['success']?>",
				text: "<?php echo $lang['swal']['cate_del_success']?>",
				icon: 'success',
				showConfirmButton: false
			});
			setTimeout(function(){ window.location = 'dashboard.php?module=client_user'  }, 2000);
			});  
</script>
<?php
//header("location:?module=jenis_barang");
}

?>


<!---------------------------------- device name modal ------------------------------------------>
<div id="device_delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel"><?php echo $lang['admin']['modal_del_category_title']?></h3>
</div>
<div class="modal-body">
<div class="alert alert-danger">
<?php echo $lang['admin']['modal_del_category_body']?>
</div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <?php echo $lang['admin']['close']?></button>
<button name="delete_dev_name" class="btn btn-danger"><i class="icon-check"></i> <?php echo $lang['admin']['yes']?></button>
</div>
</div>