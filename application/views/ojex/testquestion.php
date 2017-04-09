<?php 
	$me= $this->session->userdata('username');
	$ky= $this->session->userdata('ukey'); 
	$answers = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' and post_childfrom='$post->post_key' ORDER BY id DESC")->result();
	$isfl = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND (post_followtype='0' OR post_followtype='1') AND post_childfrom='$post->post_key' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
 ?>
<div content-box="<?php echo $post->post_key; ?>">
	<div detail-cont="<?php echo $post->post_key; ?>">
		<script type="text/javascript">
			questParse({
				id:"<?php echo $post->id; ?>",
				title:"<?php echo $post->post_title; ?>",
				af:"<?php echo $post->post_key; ?>",
				date:"<?php echo date('M d, Y H:i:s', strtotime($post->post_date)); ?>",
				ifl:"<?php if(!empty($isfl)) echo 'f'; else echo 'u'; ?>",
				url: "openWindow('https://www.facebook.com/share.php?u=<?php echo base_url('question').'/'.$post->id.'/'.$post->post_url; ?>&title=<?php echo $post->post_title; ?>',480, 640)",
				tturl: "openWindow('https://twitter.com/home?status=<?php echo base_url('question').'/'.$post->id.'/'.$post->post_url.'+'.$post->post_title; ?>',480, 640)"
			});
<?php foreach($answers as $answer){
$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();
$ar 	= $this->db->query("SELECT * FROM stara_posts WHERE wdyw='3' AND poster_username='$me' AND poster_key='$ky' AND post_childfrom='$answer->post_key' LIMIT 1;")->row();
$tc 	= $data['comments'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='5' AND post_childfrom='$answer->post_key';")->num_rows();
?>

	answersParse({
		name:"<?php echo $poster->first_name.' '.$poster->last_name; ?>",
		bio:"<?php echo $poster->bio; ?>",
	 	username:"<?php echo $poster->username; ?>",
	 	ukey:"<?php echo $poster->ukey; ?>",
		img:"<?php echo $img; ?><?php echo $poster->image; ?>",
		content:"<?php echo $answer->post_content; ?>",
		tv:"<?php echo $answer->post_views; ?> Terbaca",
		tc:"<?php if($tc > 0) echo $tc-1; else echo $tc+1; ?>+",
		af:"<?php echo $post->post_key; ?>",
		uv:"dMosi('<?php echo $answer->post_key; ?>','1');",
		dv:"dMosi('<?php echo $answer->post_key; ?>','0');",
		lc:"lc('<?php echo $answer->post_key; ?>');",
		st:"<?php if(empty($ar)) echo 'n'; elseif($ar->post_updv == '0') echo 'd'; elseif($ar->post_updv == '1') echo 'u'; ?>",
		spk:"<?php echo $answer->post_key; ?>",
		date:"Tertulis pada <?php echo date('d M Y', strtotime($answer->post_date)); ?>"
	});
<?php } ?>
</script>
</div>
</div>