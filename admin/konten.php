<?php
error_reporting(0);

$query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
			         $row = mysql_fetch_array($query);	
 $query2= mysql_query("select * from client where client_id = '$session_id2'")or die(mysql_error());
						   $row2= mysql_fetch_array($query2);
						 		
			         
$module = $_GET['module'];

	if ($_SESSION['id']=$row['admin_id']){
	if ($module == 'data_stock_barang'){
		include "module/data/stock_barang.php";
	}
	
	else if ($module == 'kategori_barang'){
		include "module/kategori/kategori_barang.php";
	}
	else if ($module == 'jenis_barang'){
		include "module/kategori/jenis_barang.php";
	}
	else if ($module == 'new_barang'){
		include "module/assign/new_barang.php";
	}
	else if ($module == 'barang_rusak'){
		include "module/rusak/barang_rusak.php";
	}
	else if ($module == 'barang_tidakdipakai'){
		include "module/tidakdipakai/barang_tidakdipakai.php";
	}
	else if ($module == 'lokasi_barang'){
		include "module/lokasi_barang/lokasi_barang.php";

	}
	else if ($module == 'lokasi'){
		include "module/lokasi/lokasi.php";
	}
	else if ($module == 'client_user'){
		include "module/client/client_user.php";
	}
	else if ($module == 'system_user'){
		include "module/system/system_user.php";
	}
		
	else if ($module == 'act_log'){
		include "module/act/act_log.php";
	}
	else if ($module == 'user_log'){
		include "module/user/user_log.php";
	}
	
	else if ($module == 'notifikasi'){
		include "module/notif/notif.php";
	}
	else if ($module == 'adv'){
		include "module/adv/adv.php";
	}
	else if ($module == 'adv2'){
		include "module/adv/adv2.php";
	}
	else if ($module == 'ubah_pass'){
		include "module/ubah/ubah_pass.php";
	}
	else if ($module == 'ubah_gambar'){
		include "module/ubah/gambar.php";
	}
	else{
		include "module/home.php";
	}
	

}else if ($_SESSION['client']=$row2['client_id']) {
	if ($module == 'stock_barang'){
		include "module_client/data/stock_barang.php";
	}
	else if ($module == 'lokasi_barang_client'){
		include "module_client/lokasi_barang/lokasi_barang.php";

	}
	else if ($module == 'list_barang_baru'){
		include "module_client/barang/barang_baru.php";

	}
	else if ($module == 'list_barang_rusak'){
		include "module_client/barang/barang_rusak.php";

	}
	else if ($module == 'list_barang_tidakdipakai'){
		include "module_client/barang/barang_tidakdipakai.php";

	}
	else if ($module == 'adv_client'){
		include "module_client/adv/adv.php";
	}
	else if ($module == 'adv2_client'){
		include "module_client/adv/adv2.php";
	}
	else if ($module == 'ubah_pass_client'){
		include "module/ubah/ubah_pass.php";
	}
	else if ($module == 'ubah_gambar_client'){
		include "module/ubah/gambar.php";
	}
	else{
	include "module/home_client.php";
}


}
?>