<?php ob_start(); ?>
<?php
session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}
// Include Language file
if(isset($_SESSION['lang'])){
 include "../languages/lang_".$_SESSION['lang'].".php";
}else{
 include "../languages/lang_id.php";
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Sistem Inventory Universitas AMIKOM Purwokerto</title>		    
        <!-- Bootstrap -->
		
			<link href="../images/favicon.ico" rel="icon" type="image">
	<link href="bootstrap/css/print_background.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
	<!--<link href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
	<link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/print_inventory.css" rel="stylesheet" media="print">			
	<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
	<link href="assets/styles.css" rel="stylesheet" media="screen">				
	<!--<link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">-->
		  
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          
        <![endif]-->
		<script src="bootstrap/js/html5.js"></script>

		<style>
		
		i.icon-ok{ content: url(assets/icon-ok.png) !important;width:14px;}
	
		</style>
	<!-- notification  -->

	<script src="vendors/jquery-1.9.1.min.js"></script>
	<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>
<?php include('lib/dbcon.php'); 
dbcon(); 
?>