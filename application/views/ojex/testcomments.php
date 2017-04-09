<div answer-id="<?php echo $i; ?>">
<?php if(empty($w)){ ?>
	<script type="text/javascript">
	actodoParse({
		pk:"<?php echo $i; ?>"
	});
<?php foreach($comments as $comment){ 
$poster = $this->db->query("SELECT * FROM users WHERE username='$comment->poster_username' LIMIT 1;")->row();
?>
		acParse({
			li:"<?php echo $comment->id; ?>",
			ck:"<?php echo $comment->post_key; ?>",
			name:"<?php echo $poster->first_name.' '.$poster->last_name; ?>",
			img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 		username:"<?php echo $poster->username; ?>",
	 		ukey:"<?php echo $poster->ukey; ?>",
			content:"<?php echo $comment->post_content; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
		});
<?php } ?>
	</script>
<?php } else { ?>
<script type="text/javascript">
<?php foreach($comments as $comment){ 
$poster = $this->db->query("SELECT * FROM users WHERE username='$comment->poster_username' LIMIT 1;")->row();
?>
		acParse({
			li:"<?php echo $comment->id; ?>",
			ck:"<?php echo $comment->post_key; ?>",
			name:"<?php echo $poster->first_name.' '.$poster->last_name; ?>",
			img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 		username:"<?php echo $poster->username; ?>",
	 		ukey:"<?php echo $poster->ukey; ?>",
			content:"<?php echo $comment->post_content; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
		});
<?php } ?>
</script>
<?php } ?>
</div>
