<?php ob_start(); ?>
<?php
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
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>	   
	<!-- Bootstrap -->
	<link href="../images/favicon.ico" rel="icon" type="image">
	<link href="bootstrap/css/background.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
	<link href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/my_style.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/print.css" rel="stylesheet" media="print">			
	<link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
	<link href="assets/styles.css" rel="stylesheet" media="screen">				
	<link href="bootstrap/css/bootstrap.min1.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/sb_admin.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		
	<![endif]-->
	<!-- calendar css -->
	<script src="bootstrap/js/html5.js"></script>
	<link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
	
	<!-- data table -->
	<link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
	<!-- notification  -->
	<link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
	<link href="vendors/datepicker.css" rel="stylesheet" media="screen">
	<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
	<link href="vendors/chosen.min.css" rel="stylesheet" media="screen">
	<link href="vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" media="screen">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
	<script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	
</head>
<?php include('./lib/dbcon.php'); 
dbcon(); 
?>