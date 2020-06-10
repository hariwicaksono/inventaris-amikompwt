 
  <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">Staf Panel</span>
                    <div class="nav-collapse collapse pull-right">
                    <form class="navbar-search" method='get' action='' id='form_lang' >
                    <select name='lang' onchange='changeLang();' >
                    <option value='id' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'id'){ echo "selected"; } ?> >Bahasa</option>
                    <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                    
                    </select>
                </form>
                        <ul class="nav pull-right">
						<?php $query= mysql_query("select * from client where client_id = '$session_id2'")or die(mysql_error());
							  $row = mysql_fetch_array($query);
						?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img id="avatar1" class="img-responsive" src="<?php echo $row['thumbnails']; ?>">&nbsp;<?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                       <a tabindex="-1" href="?module=ubah_pass_client"><i class="icon-cog"></i>&nbsp;Ubah Password</a>
									   <a tabindex="-1" href="#myModal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Ubah Gambar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout_client.php"><i class="icon-signout"></i>&nbsp;Logout</a>
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
		<?php include('client_change_pic.php'); ?>		