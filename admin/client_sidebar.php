<div class="span3" id="sidebar">
<!--<img id="avatar" class="img-polaroid" src="<?php echo $row['thumbnails']; ?>">-->
<?php include('count_damage.php'); ?>
<?php include('count_dump.php'); ?>
<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
<li class="active"> <a href="dashboard_client.php"><i class="icon-chevron-right"></i><i class="icon-home"></i> <?php echo  $lang['admin']['dashboard']?></a> </li>
<li>
<a href="?module=stock_barang"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Barang / Stok</a>
</li>
<li class="">
<a href="?module=lokasi_barang_client"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i> Tampilan Lokasi Barang</a>
</li>					
<li>
<a href="?module=list_barang_baru"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Baru</a>
</li>	
<li>
<a href="?module=list_barang_rusak"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Barang Rusak
<?php if($not_read1 == '0'){
}else{ ?>
<span class="badge badge-important"><?php echo $not_read1; ?></span>
<?php } ?>
</a>
</li>

<li>
<a href="?module=list_barang_tidakdipakai"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Barang Tidak Terpakai
<?php if($not_read_dump == '0'){
}else{ ?>
<span class="badge badge-important"><?php echo $not_read_dump; ?></span>
<?php } ?>
</a>
</li>

<li class="dropdown">
    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Pencarian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="caret"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Barang Dalam Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Semua Barang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
    </ul>
</li>
</ul>

<?php include('search_form_client.php'); ?>
<?php include('search_form_client2.php'); ?>										
</div>