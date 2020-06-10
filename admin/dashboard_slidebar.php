<div class="span3" id="sidebar">
<!--<img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">-->
	<?php include('count.php'); ?>
	<?php include('count_damage.php'); ?>
	<?php include('count_dump.php'); ?>
	<?php include('count_remain_new_device.php'); ?>

<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class="active"> 
		<a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;<?php echo $lang['admin']['dashboard']?></a> 
		</li>
		
		<!------/.* manage device sidebar*------->						
		<li>						
		<a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>Manage Barang
		<div class="muted pull-right"><i class="caret"></i></div></a>					
		<ul id="bs" class="collapse">						
		<li class="">
		<a href="?module=data_stock_barang"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Data Stok Barang</a>
		</li>
		<li class="">
		<a href="?module=kategori_barang"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['dash_sidebar_cate']?></a>
		</li> 
		<li class="">
		<a href="?module=jenis_barang"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> <?php echo $lang['admin']['device_type_data']?></a>
		</li> 
		<li>
		<a href="?module=new_barang"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Kelola&nbsp;<span class="label label-success">Barang</span>&nbsp;Baru
		<?php if($not_read_new == '0'){
		}else{ ?>
		<span class="badge badge-info"><?php echo $not_read_new; ?></span>
		<?php } ?>
		</a>
		</li>						
		<li>
		<a href="?module=barang_rusak"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Rusak
		<?php if($not_read1 == '0'){
		}else{ ?>
		<span class="badge badge-important"><?php echo $not_read1; ?></span>
		<?php } ?>
		</a>
		</li>
		<li>
		<a href="?module=barang_tidakdipakai"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Barang tidak layak pakai
		<?php if($not_read_dump == '0'){
		}else{ ?>
		<span class="badge badge-important"><?php echo $not_read_dump; ?></span>
		<?php } ?>
		</a>
		</li>						   							
		</ul>
	</li>
	
		<!------/.* manage location sidebar*------->	
	<li>						
		<a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Lokasi
		<div class="muted pull-right"><i class="caret"></i></div></a>						
		<ul id="bs1" class="collapse">						
		<li class="">
		<a href="?module=lokasi_barang"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Lokasi Barang</a>
		</li>
		<li class="">
		<a href="?module=lokasi"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Tambah Lokasi</a>
		</li>
		</ul>
	</li>
	
	<!------/.* manage TRIS user sidebar*------->	
	<li>						
		<a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Manage  User
		<div class="muted pull-right"><i class="caret"></i></div></a>						
		<ul id="bs2" class="collapse">						
		<li class="">
		<a href="?module=client_user"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Petugas Teknik</a>
		</li>
		<li class="">
		<a href="?module=system_user"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Pengguna Sistem</a>
		</li>
		</ul>
	</li>
	
	<!------/.* System Log sidebar*------->	
	<li>						
		<a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Log Sistem
		<div class="muted pull-right"><i class="caret"></i></div></a>						
		<ul id="bs3" class="collapse">						
		<li class="">
		<a href="?module=act_log"><i class="icon-chevron-right"></i><i class="icon-file"></i> Log Aktivitas</a>
		</li>
		<li class="">
		<a href="?module=user_log"><i class="icon-chevron-right"></i><i class="icon-file"></i>Log Pengguna </a>
		</li>
		</ul>
	</li>
	
	<!------/.* notification sidebar*------->
	<li class="">
		<a href="?module=notifikasi"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Pemberitahuan
		<?php if($not_read == '0'){
		}else{ ?>
		<span class="badge badge-important"><?php echo $not_read; ?></span>
		<?php } ?>
		</a>
	</li>
	
		<li class="">
		<a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Pencarian 
		<div class="muted pull-right"><i class="caret"></i></div></a>
		</a>
		<ul id="bs4" class="collapse">
		<li>
		<a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Barang Dalam Lokasi</a>
		</li>
		
		<li>
		<a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Semua Barang</a>
		</li>
		</ul>
	</li>
</ul>	
			
<?php include('search_form.php'); ?>
<?php include('search_form1.php'); ?>										
</div>