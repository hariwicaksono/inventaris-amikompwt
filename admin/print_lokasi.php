<?php 
date_default_timezone_set('Asia/Jakarta');
ob_start()?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">

<?php include('print_header.php'); ?>
<?php include('session.php'); ?>
</head>

<body onload="load_konten()">

<?php include('navbar.php'); ?>

<div class="container">
<div class="container-fluid">

<div class="row-fluid">
  <div class="pull-left"></div>
  <div class="pull-right"> 
  <a href="#" onClick="window.print()" class="btn btn-primary btn-sm hidden-print" id="print" title="<?php echo $lang['admin']['click_print_list']?>"><i class="icon-print"></i> <?php echo $lang['admin']['print_list']?></a>    
  <a id="print" class="btn btn-default btn-sm hidden-print" title="<?php echo $lang['admin']['click_back']?>" href="javascript: history.go(-1)"><i class="icon-arrow-left"></i> <?php echo $lang['admin']['back']?></a>		  </div>
</div>

<div id="block_bg">
<div class="container-fluid">
<div class="block-content">

  <?php
      $device_query = mysql_query("select * from stdevice, device_name, location_details, stlocation where stdevice.dev_id=device_name.dev_id and stdevice.id=location_details.id and location_details.stdev_id=stlocation.stdev_id and location_details.stdev_id='$_GET[stdev_id]'  order by stdevice.id DESC ")or die(mysql_error());
      $row = mysql_fetch_array($device_query);
      $id = $row['id'];
      $dev_id = $row['dev_id'];
  ?>

  <img style="width:70px;float:left;" width="70" id="Picture 1" src="images/logo_uap.png">

  <p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><span style='font-size:28.0pt;font-family:"Times New Roman","serif"'>&nbsp;UNIVERSITAS</span>
  <br/>
  <span style='font-size:16.0pt;line-height:10px;font-family:"Times New Roman","serif"'>&nbsp;AMIKOM PURWOKERTO</span></b>
  </p>

  <br/><br/><br/>

  <p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif";text-transform:uppercase'>Daftar Inventaris Barang</span></b></p>

  <p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif";'>Tahun Akademik <?php $datenow = date('Y')-1; $datenext = $datenow+1;?><?php echo $datenow;?>/<?php echo $datenext;?></span></b></p>

  <p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>Ruang <?php echo $row['stdev_location_name']; ?> LT <?php echo $row['stdev_location_floor']; ?></span></b></p>

  <p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

  <br/>


  <table class="table">
  <thead>
  <tr>
    <th width="40" style='background:#EEEEEE;vertical-align: middle;text-align:center;font-family:"Times New Roman","serif"' rowspan="2">Kode Inventaris</th>
    <th width="250" style='background:#EEEEEE;vertical-align: middle;text-align:center;font-family:"Times New Roman","serif"' rowspan="2">Nama Barang</th>
    <th width="400" style='background:#EEEEEE;vertical-align: middle;text-align:center;font-family:"Times New Roman","serif"' rowspan="2">Spesifikasi</th>
    <th width="50" style='background:#EEEEEE;vertical-align: middle;text-align:center;font-family:"Times New Roman","serif"' rowspan="2">Jumlah</th>
  
    <th width="100" style='background:#EEEEEE;vertical-align: middle;text-align:center;font-family:"Times New Roman","serif"' rowspan="2">Satuan</th>
    <th width="100" style='background:#EEEEEE;text-align:center;font-family:"Times New Roman","serif"' colspan="2">KONDISI</th>
  </tr>
  <tr>
    <th width="100" style='background:#EEEEEE;text-align:center;font-family:"Times New Roman","serif"'>Baik</th>
    <th width="100" style='background:#EEEEEE;text-align:center;font-family:"Times New Roman","serif"'>Rusak</th>
          
      </tr>
  </thead>
    
    <tbody>
    <?php
      $device_query = mysql_query("select * from stdevice, device_name, device_name_type, device_unit, location_details, stlocation where stdevice.dev_id=device_name.dev_id and stdevice.id=location_details.id and location_details.stdev_id=stlocation.stdev_id and stdevice.type_id=device_name_type.type_id		
      and stdevice.unit_id=device_unit.unit_id and location_details.stdev_id='$_GET[stdev_id]' order by stdevice.dev_code ASC ")or die(mysql_error());
      $i = 0;
      while($row = mysql_fetch_array($device_query)){
      $id = $row['id'];
      $dev_id = $row['dev_id'];
      $i++;
  ?>

  <tr>
    <td width="40" style='text-align:center;font-family:"Times New Roman","serif"'><?php //echo $i?><?php echo $row['dev_code']; ?>.<?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['year']; ?>.<?php echo $row['stdev_location_name']; ?>.<?php echo $row['inst_id']?>.<?php echo $row['procure_id']; ?></td>
    <td width="250" style='text-align:center;font-family:"Times New Roman","serif"'>
    <?php echo $row['dev_name']; ?> (<?php echo $row['type_name']; ?>) 
    </td>

    <td width="400" style='text-align:center;font-family:"Times New Roman","serif"'>
    <?php echo $row['dev_brand']; ?> <?php echo $row['dev_model']; ?>
    </td>

    <td width="50" style='text-align:center;font-family:"Times New Roman","serif"'>
    <?php echo $row['jumlah']; ?>
    </td>
    
    <td width="100" style='text-align:center;font-family:"Times New Roman","serif"'>
    <?php echo $row['unit_name']?>
    </td>

    <td width="100" style='text-align:center;font-family:"Times New Roman","serif"'>
    <?php 
    $a = $row['dev_status']; 
    if($a== "New" || $a== "Used"){
      echo "<i class='icon-ok'></i>";
    }
    ?>
    </td>
    <td>
    <?php 
    $b = $row['dev_status']; 
    if($b== "Damage"){
      echo "<i class='icon-ok'></i>";
    }
    ?>
    </td>
  <?php } ?> 
  
  </tr>
  </tbody>

  </table>


<br/><br/><br/>

  <div id="tandatangan">
  <p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
  <span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>
  Purwokerto, 
  <?php 
  $date = new DateTime();
  echo $date->format('d F Y');
  ?>
  </span>
  </p>

  <br/> <br/>
  <p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
  <span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>
  Mengetahui<br/>
  Kepala Bagian Aset dan Kerumahtanggaan<br/>
  
  <img width="200" style="margin-top:10px;margin-bottom:10px" alt="Tanda Tangan Pak Bugi" src="images/ttd_pak_bugi.png">
  <br/>
  Bugi Nugroho, S.Kom<br/>
  NIK. 2012.09.1.015 
  </span>
  </p>
  </div>


</div>
</div>
</div>

</div>
</div>

<?php include('script.php'); ?>
</body>
</html>