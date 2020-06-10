<?php
 	 include('../../lib/dbcon.php'); 
     dbcon();
	include('../../session.php');
	$id=$_POST['selector'];//brend
 	$stdev_id  = $_POST['stdev_id'];
 		$pindah=$_POST['pindah'];

 	
	

	
	$query = mysql_query("select * from location_details order by ld_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$ld_id  = $row['ld_id'];
	

    $N = count($id);

    
    for($i=0; $i < $N; $i++)
    {
    

    $data2=mysql_fetch_array(mysql_query("select*from stdevice where id='$id[$i]'"));

    if ($pindah <= $data2['jumlah']){

    $coba=mysql_query("select * from location_details where id='$id[$i]' and stdev_id='$stdev_id'");
    $data=mysql_fetch_array($coba);

    $id2=$data['ld_id'];
    $id3=$data2['id'];
    $oras = strtotime("now");
	$ora = date("Y-m-d",$oras);
    	$hasil=$pindah + $data['jumlah'];
   
 	


	

	if(mysql_num_rows($coba)>0){
		 mysql_query("update location_details set jumlah = '$hasil' where ld_id='$id2' ");
	}else{

    mysql_query("insert location_details (id,stdev_id,date_deployment,jumlah) values('$id[$i]','$stdev_id','$ora','$pindah')")or die(mysql_error());
	
	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Assign Device id $id[$i] to location id $stdev_id')")or die(mysql_error());

    }
	$tampil=mysql_fetch_array(mysql_query("select*from stdevice where id='$id3'"));
	$qq=$tampil['jumlah'];
	$sisa=$qq-$pindah;

	if ($sisa > 0){
		
	mysql_query("update stdevice set jumlah = '$sisa' where id ='$id3' ")or die(mysql_error());	
	} else if ($qq == 1){
		
		mysql_query("update stdevice set jumlah = '0' where id ='$id3' ")or die(mysql_error());	
	} else if ($qq == $pindah){
		
		mysql_query("update stdevice set jumlah = '0' where id ='$id3' ")or die(mysql_error());	
	}else {
		#mysql_query("delete from stdevice where id ='$id3' ");	
	}
	echo 'true';

}
else {
	echo 'false';
}
} 
if ($id == '' ){
	echo '';}



?>