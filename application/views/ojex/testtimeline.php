<div tl-id="<?php echo $c_id; ?><?php echo $w_id; ?><?php if(!empty($u)) echo $u; ?>" >
<script type="text/javascript">
<?php if(empty($w)){ ?>
<?php 
	foreach($timelines as $tm){ 
	$answer = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key' ORDER BY post_views DESC LIMIT 1;")->row();
	if(!empty($answer))
		$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();

	$me= $this->session->userdata('username');
	$ky= $this->session->userdata('ukey');
	$isansw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key';")->num_rows();
	$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='2' AND post_childfrom='$tm->post_key' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
	$tc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$tm->post_key';")->num_rows();
?>
		
bisonParse({
	id:"<?php echo $tm->id; ?>",
	title:"<?php echo $tm->post_title; ?>",
	 date:"<?php echo date('M d, Y H:i:s', strtotime($tm->post_date)); ?>", <?php if(!empty($isansw)){ ?>
	 img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 name:"&nbsp;<?php echo $poster->first_name.' '.$poster->last_name; ?>, ",
	 bio:"<?php echo $poster->bio; ?>",
	 content:"<?php echo $answer->post_content; ?>",
	 username:"<?php echo $poster->username; ?>",
	 ukey:"<?php echo $poster->ukey; ?>",
	 <?php } else { ?>
	 img:"",
	 name:"",
	 bio:"",
	 content:"",
	 <?php } ?>
	 act:"detailbtn('<?php echo $tm->post_key; ?>','<?php echo $tm->post_title; ?>','<?php echo $tm->post_url; ?>','<?php echo $tm->id; ?>')",
	 pk:"MosiMosi('<?php echo $tm->post_key; ?>');",
	 spk:"<?php echo $tm->post_key; ?>",
	 tc:"<?php if($tc == 0) echo '0'; else echo $tc-1; ?>+",
	 <?php if(empty($cek)){ ?>
	 ms:"0"
	 <?php } else { ?>
	 ms:"1"
	 <?php } ?>
});
<?php } ?>
<?php } elseif($w == 'us') { 
	foreach($timelines as $timeline){ 
	$one = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$timeline->post_childfrom' LIMIT 1;")->row();
	$answer = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$one->post_key' ORDER BY post_upvote DESC LIMIT 1;")->row();
	if(!empty($answer))
		$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();

	$me= $this->session->userdata('username');
	$ky= $this->session->userdata('ukey');
	$isansw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$one->post_key';")->num_rows();
	$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='2' AND post_childfrom='$one->post_key' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
	$tc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$one->post_key';")->num_rows();
?>
bisonParse({
	id:"<?php echo $one->id; ?>",
	title:"<?php echo $one->post_title; ?>",
	 date:"<?php echo date('M d, Y H:i:s', strtotime($one->post_date)); ?>", <?php if(!empty($isansw)){ ?>
	 img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 name:"&nbsp;<?php echo $poster->first_name.' '.$poster->last_name; ?>, ",
	 bio:"<?php echo $poster->bio; ?>",
	 content:"<?php echo $answer->post_content; ?>",
	 username:"<?php echo $poster->username; ?>",
	 ukey:"<?php echo $poster->ukey; ?>", 
	 <?php } else { ?>
	 img:"",
	 name:"",
	 bio:"",
	 content:"",
	 <?php } ?>
	 act:"detailbtn('<?php echo $one->post_key; ?>','<?php echo $one->post_title; ?>','<?php echo $one->post_url; ?>','<?php echo $one->id; ?>')",
	 pk:"MosiMosi('<?php echo $one->post_key; ?>');",
	 spk:"<?php echo $one->post_key; ?>",
	 tc:"<?php if($tc == 0) echo '0'; else echo $tc-1; ?>+",
	 <?php if(empty($cek)){ ?>
	 ms:"0"
	 <?php } else { ?>
	 ms:"1"
	 <?php } ?>
});
<?php }} elseif($w == 'ua'){ 
	foreach($timelines as $timeline){ 
	$one = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$timeline->post_childfrom' LIMIT 1;")->row();
	$answer = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$one->post_key' ORDER BY post_upvote DESC LIMIT 1;")->row();
	if(!empty($answer))
		$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();

	$me= $this->session->userdata('username');
	$ky= $this->session->userdata('ukey');
	$isansw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$one->post_key';")->num_rows();
	$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='2' AND post_childfrom='$one->post_key' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
	$tc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$one->post_key';")->num_rows();
?>
bisonParse({
	id:"<?php echo $one->id; ?>",
	title:"<?php echo $one->post_title; ?>",
	 date:"<?php echo date('M d, Y H:i:s', strtotime($one->post_date)); ?>", <?php if(!empty($isansw)){ ?>
	 img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 name:"&nbsp;<?php echo $poster->first_name.' '.$poster->last_name; ?>, ",
	 bio:"<?php echo $poster->bio; ?>",
	 content:"<?php echo $answer->post_content; ?>",
	 username:"<?php echo $poster->username; ?>",
	 ukey:"<?php echo $poster->ukey; ?>",	 
	 <?php } else { ?>
	 img:"",
	 name:"",
	 bio:"",
	 content:"",
	 <?php } ?>
	 act:"detailbtn('<?php echo $one->post_key; ?>','<?php echo $one->post_title; ?>','<?php echo $one->post_url; ?>','<?php echo $one->id; ?>')",
	 pk:"MosiMosi('<?php echo $one->post_key; ?>');",
	 spk:"<?php echo $one->post_key; ?>",
	 tc:"<?php if($tc == 0) echo '0'; else echo $tc-1; ?>+",
	 <?php if(empty($cek)){ ?>
	 ms:"0"
	 <?php } else { ?>
	 ms:"1"
	 <?php } ?>
});
<?php } } elseif($w == 'uq'){ 	
	foreach($timelines as $tm){ 
	$answer = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key' ORDER BY post_views DESC LIMIT 1;")->row();
	if(!empty($answer))
		$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();

	$me= $this->session->userdata('username');
	$ky= $this->session->userdata('ukey');
	$isansw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key';")->num_rows();
	$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='2' AND post_childfrom='$tm->post_key' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
	$tc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$tm->post_key';")->num_rows();
?>
		
bisonParse({
	id:"<?php echo $tm->id; ?>",
	title:"<?php echo $tm->post_title; ?>",
	 date:"<?php echo date('M d, Y H:i:s', strtotime($tm->post_date)); ?>", <?php if(!empty($isansw)){ ?>
	 img:"<?php echo $img; ?><?php echo $poster->image; ?>",
	 name:"&nbsp;<?php echo $poster->first_name.' '.$poster->last_name; ?>, ",
	 bio:"<?php echo $poster->bio; ?>",
	 content:"<?php echo $answer->post_content; ?>",
	 username:"<?php echo $poster->username; ?>",
	 ukey:"<?php echo $poster->ukey; ?>",
	 <?php } else { ?>
	 img:"",
	 name:"",
	 bio:"",
	 content:"",
	 <?php } ?>
	 act:"detailbtn('<?php echo $tm->post_key; ?>','<?php echo $tm->post_title; ?>','<?php echo $tm->post_url; ?>','<?php echo $tm->id; ?>')",
	 pk:"MosiMosi('<?php echo $tm->post_key; ?>');",
	 spk:"<?php echo $tm->post_key; ?>",
	 tc:"<?php if($tc == 0) echo '0'; else echo $tc-1; ?>+",
	 <?php if(empty($cek)){ ?>
	 ms:"0"
	 <?php } else { ?>
	 ms:"1"
	 <?php } ?>
});
<?php } ?>
<?php } ?>
</script>
</div>