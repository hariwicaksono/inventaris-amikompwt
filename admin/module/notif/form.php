<div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel"><?php echo $lang['admin']['remove_notification']?></h3>
	</div>
		<div class="modal-body">
		<div class="alert alert-danger">
			<?php echo $lang['admin']['sure_remove_notification']?>
		</div>
		</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <?php echo $lang['admin']['close']?></button>
		<button   id="<?php echo $id; ?>" class="btn btn-danger remove" data-dismiss="modal" aria-hidden="true"><i class="icon-check"></i> <?php echo $lang['admin']['yes']?></button>
	</div>
</div>