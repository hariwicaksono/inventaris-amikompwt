<?php
switch($_GET['act']){
default:
header('refresh: 20; dashboard.php?module=notifikasi');
?>


<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="pull-left"><i class="icon-globe"></i> <?php echo $lang['admin']['notification']?></div>                               
</div>
<div class="block-content collapse in">
<div class="span12">


<form action="?module=notifikasi&act=read" method="post">
<?php if($not_read == '0'){
}else{ ?>
<button id="delete"  class="btn btn-primary" name="read"><i class="icon-check"></i> <?php echo $lang['admin']['read']?></button>

<div class="pull-right">
<?php echo $lang['admin']['check_all']?> <input type="checkbox"  name="selectAll" id="checkAll" />
<script>
$("#checkAll").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>					
</div>

<?php } ?>

<?php $query = mysql_query("select * from notification order by notification.date_of_notification DESC")or die(mysql_error());
$count = mysql_num_rows($query);
if ($count  > 0){
while($row = mysql_fetch_array($query)){
$get_id = $row['fullname'];		                  
$id = $row['notification_id'];

$query_yes_read = mysql_query("select * from notification_read where notification_id = '$id' and admin_id = '$session_id'")or die(mysql_error());
$read_row = mysql_fetch_array($query_yes_read);				
$yes = $read_row['admin_read'];
?>


<div class="post"  id="del<?php echo $id; ?>">
<?php if ($yes == 'yes'){
}else{
?>
<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
<?php } ?>	
<strong><?php echo $row['fullname'];  ?></strong>						
<?php echo $row['notification']; ?>&nbsp;&nbsp;<?php echo $lang['admin']['view_in']?>
<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
<?php echo $row['link']; ?>
</a>
&mdash;										
<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
<div class="pull-right">
<a class="btn btn-link"  href="#<?php echo $id; ?>" data-toggle="modal" ><i class="icon-trash"></i> <?php echo $lang['admin']['remove']?></a>
</div>								
<?php include("form.php"); ?>						

</div>

<?php
} }else{
?>
<div class="alert alert-info"><strong><i class="icon-info-sign"></i> <?php echo $lang['admin']['no_notification']?></strong></div>
<?php
}
?>

</form>

<script type="text/javascript">
$(document).ready( function() {
$('.remove').click( function() {
var id = $(this).attr("id");
$.ajax({
type: "POST",
url: "module/notif/remove_notif.php",
data: ({id: id}),
cache: false,
success: function(html){
$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
$('#'+id).modal('hide');
//$.jGrowl("Your Notification is Successfully Deleted", { header: 'Data Delete' });	
Swal.fire({
        title: "<?php echo $lang['swal']['success']?>",
        text: "<?php echo $lang['admin']['remove_notification_success']?>",
        icon: "success",
        showConfirmButton: false
    });
}
}); 		
return false;
});				
});
</script>						
</div>
</div>
</div>

<!-- /block -->
<?php break;
case "read";?>
<?php

if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

mysql_query("insert into notification_read (admin_id,admin_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysql_error());



}
?>
<script>
window.location = '?module=notifikasi';
</script>
<?php
}
?>
<?php break;
case "read";?>
<?php
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

mysql_query("insert into notification_read (admin_id,admin_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysql_error());



}
?>
<script>
window.location = '?module=notifikasi';
</script>
<?php
}
?>
<?php }?>