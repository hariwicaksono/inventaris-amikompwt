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
  <a id="print" class="btn btn-default btn-sm hidden-print" title="<?php echo $lang['admin']['click_back']?>" href="javascript: history.go(-1)"><i class="icon-arrow-left"></i> <?php echo $lang['admin']['back']?></a>		 </div>
</div>
 
<div id="block_bg">
<div class="container-fluid">
<div class="block-content">

<img style="width:70px;float:left;" width="70" id="Picture 1" src="images/logo_uap.png">

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><span style='font-size:28.0pt;font-family:"Times New Roman","serif"'>&nbsp;UNIVERSITAS</span>
<br/>
<span style='font-size:16.0pt;line-height:10px;font-family:"Times New Roman","serif"'>&nbsp;AMIKOM PURWOKERTO</span></b>
</p>

<br/><br/><br/>

<p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b><span style='font-size:16.0pt;font-family:"Times New Roman","serif"'>Sistem Inventory</span></b></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>All Stock<o:p></o:p></span></p>
<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $lang['admin']['date']?>: <?php
$date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>

<br/>
 
<table class="table table-bordered table-condensed">
<thead>
 <tr>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>INVENTORY CODE</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>TYPE</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>MODEL</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>BRAND</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>Jumlah</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>DISCRIPTION</th>
  <th width='188' style='background:#EEEEEE;font-family:"Times New Roman","serif";height:23.25pt'>STATUS</th>
 </tr>
 </thead>
   <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
   <tbody>
<?php
		$device_query = mysql_query("select * from stdevice, device_name where stdevice.dev_id=device_name.dev_id order by stdevice.id DESC ")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$dev_id = $row['dev_id'];
?>
 <tr>
  <td width='188' style='font-family:"Times New Roman","serif"'>
 <?php echo $row['dev_serial']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_name']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_model']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_brand']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['jumlah']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_desc']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_status']; ?>
  </td>
 <?php } ?> 
  <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
 </tr>

 </tbody>
</table>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p style='text-align:center;font-family:"Times New Roman","serif";margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal;font-size:14.0pt;'><b><?php echo $lang['admin']['recapitulation']?></b></p>
<br/>

<table class="table table-bordered table-condensed" style="width:450px;">
<thead>
  <tr>
    <th width='140' style='background:#EEEEEE;height:23.25pt;font-family:"Times New Roman","serif";'>
    STATUS
    </th>
    <th width='192' style='background:#EEEEEE;height:23.25pt;font-family:"Times New Roman","serif"'>
    TOTAL
    </th>
  </tr>
  </thead>
  
  <tbody>
  <tr>
 <?php
  $new = mysql_query("select * from stdevice 
          LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
          where dev_status = 'New'")or die(mysql_error());
  $count = mysql_num_rows($new);		                                               
  ?>
  <td width='140' style='font-family:"Times New Roman","serif"'>
  New
  </td>
  <td width='192' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>

 </tr>
 

  <tr>
  
 <?php
  $new = mysql_query("select * from stdevice 
          LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
          where dev_status = 'Used'")or die(mysql_error());
  $count = mysql_num_rows($new);		                                               
  ?>  
  <td width='140' style='font-family:"Times New Roman","serif"'>
  Used
  </td>
  <td width='192' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>

 </tr>
 
<tr>
 <?php
  $new = mysql_query("select * from stdevice 
          LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
          where dev_status = 'Repaired'")or die(mysql_error());
  $count = mysql_num_rows($new);		                                               
  ?> 
  
  <td width='140' style='font-family:"Times New Roman","serif"'>
  Repaired
  </td>
  <td width='192' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>

 </tr>
 
<tr>
 <?php
  $new = mysql_query("select * from stdevice 
          LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
          where dev_status = 'Damage'")or die(mysql_error());
  $count = mysql_num_rows($new);		                                               
  ?> 
  
  <td width='140' style='font-family:"Times New Roman","serif"'>
  Damaged
  </td>
  <td width='192' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>
</tr>
<tr>
  <td width='140' style='font-family:"Times New Roman","serif"'>
  Dump
  </td>
  <td width='192' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>
 </tr>
    
</tbody>
</table>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table>
 <tr>
  
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Diperiksa oleh:<o:p></o:p></span></p>
  </td>
 </tr>
 
 <?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>
 <tr>
  <td width='376' valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
  <p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname']." ".$row['lastname'];  ?><o:p></o:p></span></u></b></p>
  </td>
  
 </tr>
 
</table>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

</div>
</div>
</div>


<?php include('script.php'); ?>
</body>
</html>