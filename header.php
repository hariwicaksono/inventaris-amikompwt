<?php include('admin/lib/dbcon.php');
dbcon(); 
?>
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
 include "languages/lang_".$_SESSION['lang'].".php";
}else{
 include "languages/lang_id.php";
}
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<title>Inventaris Universitas AMIKOM Purwokerto</title>	
<meta name="description" content="Technology Resource Inventory System">
<meta name="author" content="Jonald Remus Sevellejo">
<meta charset="UTF-8">
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<!-- Bootstrap -->
	<link href="images/favicon.ico" rel="icon" type="image">
	<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
	<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"/>
	<link href="admin/bootstrap/css/font-awesome.css" rel="stylesheet" media="screen"/>
	
	<link href="admin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen"/>
	<link href="admin/bootstrap/css/my_style.css" rel="stylesheet" media="screen"/>
	<link href="admin/assets/styles.css" rel="stylesheet" media="screen"/>
	<link href="admin/bootstrap/css/index.css" rel="stylesheet" media="screen"/>
	<!-- calendar css -->
	<link href="admin/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
	<!-- index css -->
	
	<!-- data table css -->
	<link href="admin/assets/DT_bootstrap.css" rel="stylesheet" media="screen"/>
	<!-- notification  -->
	<link href="admin/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<!-- wysiwug  -->
	<link rel="stylesheet" type="text/css" href="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>
	<link href="admin/assets/styles.css" rel="stylesheet" media="screen">
	<link href="admin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen"> 
	<link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
	<link href="admin/vendors/uniform.default.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="admin/assets/style.css" />
	<link href="admin/vendors/datepicker.css" rel="stylesheet" media="screen">
	<link href="admin/vendors/chosen.min.css" rel="stylesheet" media="screen">

	<script src="admin/vendors/jquery-1.9.1.min.js"></script>
	<script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
