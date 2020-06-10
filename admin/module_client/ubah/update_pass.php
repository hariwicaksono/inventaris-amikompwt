 <?php
 include('../../lib/dbcon.php'); 
 dbcon(); 
 include('session_client.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update client set password = '$new_password' where client_id = '$session_id2'")or die(mysql_error());
 ?>