<div tl-id="<?php echo $c_id; ?><?php echo $w_id; ?>">

<?php 
	foreach($timelines as $tm){ 
	$answer = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key' ORDER BY post_upvote DESC LIMIT 1;")->row();
	if(!empty($answer))
		$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();

	$isansw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_childfrom='$tm->post_key';")->num_rows();
?>
<div class="item">
	<div class="post">
		<div class="card">
			<a class="left-info" cg>Pertanyaan yang di ajukan - </a> 
			<a class="left-info" cg> Serba-serbi</a>

			<a class="right-info" cg blurbs-date="<?php echo date('M d, Y H:i:s', strtotime($tm->post_date)); ?>"></a>
			<div style="border-top:1px solid white;margin-top:15px;">
				<h3 style="margin:10px 0px 0px 0px;color:#746581;"><?php echo $tm->post_title; ?></h3>
				<?php if(empty($isansw)){ ?>
					<i style="color:#8A8A8A;" bdj>Pertanyaan ini belum dijawab</i><br><br>
					<div class="ui add-answer button">
					Bantu Jawab
					</div>
				<?php }else{ ?>
				<div class="poster">
					<img src="<?php echo $lib; ?>ruby.jpg" style="width:25px;height:25px;">
					<a href="" title=""><?php echo $poster->first_name.' '.$poster->last_name; ?></a>, <?php echo $poster->bio; ?>
				</div>
				<p class="excerpt-cont"><?php echo $answer->post_content; ?></p>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="arrow">
												
	</div>
	<div class="act">
		<a class="cshare">
			Berbagi 
			<img src="<?php echo $lib; ?>share.png">
		</a>
		<a class="ccomment" onclick="detailbtn('<?php echo $tm->post_key; ?>','<?php echo $tm->post_title; ?>')">
			Komentar
			<div>
				2+
			</div>
		</a>
		<a class="ui blue tiny icon add-mosi button">
			Tambah Mosi 
			<img src="<?php echo $lib; ?>upvote.png" class="upvote">
		</a>
	</div>
</div>
<?php } ?>
</div>