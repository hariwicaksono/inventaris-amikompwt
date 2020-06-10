<?php	
include "lib/dbcon.php";
dbcon();
	           $total=mysql_fetch_array(mysql_query("select*from stdevice"));
	$sisa=number_format($total['jumlah']);
	 $total2=mysql_fetch_array(mysql_query("select*from location_details"));
	$sisa2=number_format($total2['jumlah']);

	$jum=$total['jumlah'].$total2['jumlah'];
	echo $jum;
	?>