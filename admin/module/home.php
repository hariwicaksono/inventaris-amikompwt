<div class="col-lg-12">
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> <?php echo $lang['admin']['welcome']?>, <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
</div>
</div>

<!-- block -->
<div id="block_bg" class="block">
    <div class="navbar navbar-inner block-header">
        <div class="pull-left"><i class="icon-dashboard">&nbsp;</i><?php echo $lang['admin']['dash_data_number']?></div>
        <div class="pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
    </div>
    <div class="block-content collapse in">
            <div class="span12">
            
<div class="block-content collapse in">
<div id="page-wrapper">
<?php 
$stocks = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id")or die(mysql_error());
$stocks = mysql_num_rows($stocks);
?>
<div class="row-fluid">				
<div class="span6">
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-desktop fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $stocks; ?></div>
                <div>Semua Barang</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=data_stock_barang">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>
<?php 
$new = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where dev_status='New'")or die(mysql_error());
$new = mysql_num_rows($new);
?>			
<div class="span6">
<div class="panel panel-green">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-share-square fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $new;?></div>
                <div>Barang Baru</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=new_barang">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>
</div>
</div> 				 							
<div id="page-wrapper">
<div class="row-fluid">
<?php 
$damage = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where dev_status='Damage'")or die(mysql_error());
$damage = mysql_num_rows($damage);
?>	
<div class="span6">
<div class="panel panel-red">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-times-circle fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $damage;?></div>
                <div>Barang Rusak</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=barang_rusak">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>
<?php 
$Repaired = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where dev_status='Repaired'")or die(mysql_error());
$Repaired = mysql_num_rows($Repaired);
?>				
<div class="span6">
<div class="panel panel-yellow">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-wrench fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $Repaired;?></div>
                <div>Barang Perbaikan</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=data_stock_barang">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>   				
</div>	       
</div>  	
<div id="page-wrapper">
<div class="row-fluid">
<?php 
$dump = mysql_query("select * from stdevice
LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
where dev_status='Dump'")or die(mysql_error());
$dump = mysql_num_rows($dump);
?>			   
<div class="span6">
<div class="panel panel-red">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-support fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $dump;?></div>
                <div>Barang Tidak Dipakai</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=barang_tidakdipakai">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>
<?php 
$location = mysql_query("select * from stlocation")or die(mysql_error());
$location = mysql_num_rows($location);
?>			
<div class="span6">
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"><br/>
                <i class="fa fa-sitemap fa-5x"></i><br/>
            </div>
            <div class="span8 text-right"><br/>
                <div class="huge"><?php echo $location;?></div>
                <div>Lokasi</div><br/>
            </div>
        </div>
        </div>	
    </div>
    <a href="?module=lokasi_barang">							  
        <div class="modal-footer">
            <span class="pull-left">Tampilan Detail</span>
            <span class="pull-right"><i class="icon-chevron-right"></i></span>
            <div class="clearfix"></div>
        </div>							  
    </a>
</div>
</div>
