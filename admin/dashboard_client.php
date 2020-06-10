<?php include('header.php'); ?>
<?php include('session_client.php'); ?>
    <body id="home" onload="load_konten()">
		<?php include('navbar_client.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('client_sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php include "konten.php"; ?>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
        <?php if ($module =='lokasi_barang_client'){
             include "module/script.php";
            } else {?>
    <?php include('script.php');}?>
    </body>
		
</html>