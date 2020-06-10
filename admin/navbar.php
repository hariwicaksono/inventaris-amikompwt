
  <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
               <div class="container-fluid">
				 <!-- Brand and toggle get grouped for better mobile display -->
				 <div class="navbar-header">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					 <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#" id="print">Admin Panel</span>
				 </div>
				  <!--.nav-collapse -->
                    <div class="nav-collapse collapse pull-right" id="print">

                    <form class="navbar-search" method='get' action='' id='form_lang' >
                    <select name='lang' onchange='changeLang();' >
                    <option value='id' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'id'){ echo "selected"; } ?> >Bahasa</option>
                    <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                    
                    </select>
                </form>
                        <ul class="nav" id="print">
						<?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
							  $row = mysql_fetch_array($query);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>">&nbsp;<?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                       <a tabindex="-1" href="?module=ubah_pass"><i class="icon-cog"></i>&nbsp;Ubah Password</a>
									   <a tabindex="-1" href="#myModal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Ubah Gambar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div> 
        <script>
        function changeLang(){
        document.getElementById('form_lang').submit();
        
        }
        </script>

        <div id="print">
		<?php include('admin_change_picture.php'); ?>
        </div>	