<?php include('header.php'); ?>
<body id="login" onload="load_konten()">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <a class="brand" href="./">Inventory</a>
         <!-- Language -->
		
      <div class="pull-right">
	  
		 <form class="navbar-search" method='get' action='' id='form_lang' >
        <select name='lang' onchange='changeLang();' >
        <option value='id' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'id'){ echo "selected"; } ?> >Bahasa</option>
        <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
        
        </select>
      </form>
      </div>
 
    </div>
  </div>
</div>
<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
 

    <div class="container">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include('title_index.php'); ?></div></div>
			<div class="span6"><div class="pull-right"><?php include('login_form.php'); ?></div></div>

		</div>
		<div class="row-fluid">
           <div class="offset2">		
			  
		   </div>
	    </div>
        <div class="row-fluid">
        <br><br> <br><br> <br><br> 
			<?php include('footer.php'); ?>
            </div>
    </div>
<?php include('script.php'); ?>
</body>
</html>