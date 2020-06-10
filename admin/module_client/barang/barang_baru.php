
				<?php	 
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'New' OR dev_status = 'new'  ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="pull-left"><i class="icon-check"></i> <?php echo  $lang['admin']['new_dev_list']?></div>
							 <div class="pull-right">
							 <?php echo $lang['admin']['ammount_dev_list']?> <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				 <h4 id="sc"><?php echo  $lang['admin']['new_dev_list']?>
					<div align="right" id="sc"><?php echo $lang['admin']['date']?>:
						<?php
                           echo date("h:i:s a");
                          //  $date = new DateTime();
                           // echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4> 		   	
 <br/>															
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_new_client.php" class="btn btn-info" id="print" data-placement="left" title="<?php echo $lang['admin']['click_print_list']?>"><i class="icon-print icon-large"></i>  <?php echo $lang['admin']['print_list'] ?></a> 
		 <script type="text/javascript">
		$(document).ready(function(){
		$('#print').tooltip('show');
		$('#print').tooltip('hide');
		});
		</script> 
       </div>
   </div>
</div>
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">                 
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
				<th><?php echo $lang['admin']['input_code']?></th>
<th><?php echo $lang['admin']['input_category']?></th>
<th><?php echo $lang['admin']['input_name']?></th>
<th><?php echo $lang['admin']['input_merk']?></th>
<th><?php echo $lang['admin']['input_spec']?></th>
<th><?php echo $lang['admin']['input_amount']?></th>
<th>Status</th>		                					              		
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	   $device_query = mysql_query("select * from stdevice
	   JOIN device_name ON stdevice.dev_id=device_name.dev_id
	   where dev_status='New' ORDER BY stdevice.id DESC") or die(mysql_error());
	   while ($row = mysql_fetch_array($device_query)) {
	   $id = $row['id'];
	   $dev_name = $row['dev_name'];
	   $coba=mysql_query("select SUM(jumlah) as tamp from location_details where id=$id");
	   $tamp=mysql_fetch_assoc($coba);
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-check"></i>
		</td>
		<td><?php echo $row['dev_serial']; ?></td>
<td><?php echo $row['dev_name']; ?></td>
<td><?php echo $row['dev_brand']; ?></td>
<td><?php echo $row['dev_model']; ?></td>
<td><?php echo $row['dev_desc']; ?></td>
<td><?php echo $row['jumlah'];?></td>
			<td><div class="label label-success"><i class="icon-check"></i> <strong><?php echo $row['dev_status']; ?></strong></div></td>				
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>	 

</div>
</div>
