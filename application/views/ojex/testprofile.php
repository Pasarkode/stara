<div profile-u="<?php echo $profile->username; ?>">
	<script type="text/javascript">
		userProfileparse({
			name:"<?php echo $profile->first_name.' '.$profile->last_name; ?>",
			img:"<?php echo base_url('uploads/images'); ?>/<?php echo $profile->image; ?>",
			fi:"Following <?php echo $tfg; ?> |",
			fw:" Followers <?php echo $tfr ?>",
			u:"<?php echo $profile->username; ?>",
			i:"<?php echo $profile->ukey; ?>",
			task:"<?php echo $task; ?>",
			tanswer:"<?php echo $tanswer; ?>"
		});
	</script>
</div>