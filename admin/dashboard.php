<?php include('header.php'); ?>
<?php include('session.php');?>
<body onload="load_konten()">
    <?php include('navbar.php') ?>
        
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                <div class="row-fluid">
                    <?php 
                    include ('konten.php');?>
                </div>
                </div>  
           </div>

        </div>
         <?php //include('footer.php'); ?>
       
        <?php if ($module=='lokasi_barang'){
             include "module/script.php";
            } else {?>
	<?php include('script.php');
    } ;?>

                 
    </body>
	