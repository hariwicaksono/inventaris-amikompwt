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
  <a id="print" class="btn btn-default btn-sm hidden-print" title="<?php echo $lang['admin']['click_back']?>" href="javascript: history.go(-1)"><i class="icon-arrow-left"></i> <?php echo $lang['admin']['back']?></a>	          
  </div>
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

<p style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b><span style='font-size:16.0pt;font-family:"Times New Roman","serif"'><?php echo $lang['admin']['new_device_data']?></span></b></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $lang['admin']['new_stock']?><o:p></o:p></span></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $lang['admin']['date']?>: <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>


<table class="table table-bordered table-condensed">
<thead>
 <tr>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  CODE
  </th>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  TYPE
  </th>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  MODEL
  </th>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  BRAND
  </th>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  DESCRIPTION
  </th>
  <th width='188' style='background:#EEEEEE;height:24.25pt;font-family:"Times New Roman","serif"'>
  STATUS
  </th>
 </tr>
 </thead>
   <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
<?php
    $device_query = mysql_query("select * from stdevice
    JOIN device_name ON stdevice.dev_id=device_name.dev_id
    JOIN device_name_type ON stdevice.type_id=device_name_type.type_id
    where dev_status='New' ORDER BY stdevice.id DESC")or die(mysql_error());
    while($row = mysql_fetch_array($device_query)){
    $id = $row['id'];
    $dev_id = $row['dev_id'];
?>
 <tr>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_id']; ?>.<?php echo $row['type_number']; ?>.<?php echo $row['dev_code']; ?>.<?php echo $row['year']; ?>.<?php echo $row['inst_id']; ?>.<?php echo $row['procure_id']; ?>
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
  <?php echo $row['dev_desc']; ?>
  </td>
  <td width='188' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_status']; ?>
  </td>
 <?php } ?> 
  <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
 </tr>

</table>

 
<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>


<p style='text-align:center;font-family:"Times New Roman","serif";margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal;font-size:14.0pt;'><b><?php echo $lang['admin']['recapitulation']?></b></p>

<br/>

<table class="table table-bordered table-condensed" style="width:450px;">
<thead>
 <tr>
  
  <th width='174' style='background:#EEEEEE;height:23.25pt;font-family:"Times New Roman","serif"'>
  TYPE
  </th>
  <th width='186' style='background:#EEEEEE;height:23.25pt;font-family:"Times New Roman","serif"'>
  TOTAL
  </th>
  
 </tr>

 </head>

 <?php  
      $barang=mysql_query("select * from device_name");
      while ($row = mysql_fetch_assoc($barang)) {
      $data=mysql_query("select * from stdevice  LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id where stdevice.dev_id=$row[dev_id] and dev_status='New'");
      $count=mysql_num_rows($data); 
      $jum=mysql_num_rows(mysql_query("select*from stdevice where dev_status='New'")); 
  ?>  

<tbody>
 <tr>
  
  <td width='174' style='font-family:"Times New Roman","serif"'>
  <?php echo $row['dev_name'];?>
  </td>
 
  <td width='186' style='font-family:"Times New Roman","serif"'>
  <?php echo $count;?>
  </td>
  
 </tr>

  <?php }; ?>

 <tr>
  <td width='174' style='font-family:"Times New Roman","serif"'>
  <b>Total Barang Baru</b>
  </td>
 
  <td width='186' style='font-family:"Times New Roman","serif"'>
  <b><?php echo $jum;?></b>
  </td>
 </tr>
 </tbody>

</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table>
 <tr>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Prepared by:<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Received by:<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Check by:<o:p></o:p></span></p>
  </td>
 </tr>
 
 <?php $query= mysql_query("select * from admin where admin_id = '$session_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
?>
 <tr>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname']." ".$row['lastname'];  ?><o:p></o:p></span></u></b></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>RANILO
  S. AMOR<o:p></o:p></span></u></b></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
  style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>MRS.
  ANNETTE Z. VILLALUZ<o:p></o:p></span></u></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Technology
  Facilitator<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Property
  Custodian<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>VP for
  Operation<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>


</div>
</div>
</div>

</div>
</div>

<?php include('script.php'); ?>
</body>
</html>