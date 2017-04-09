<?php 
	$answers = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' and post_childfrom='$post->post_key' ORDER BY id DESC")->result();
 ?>
<div content-box="<?php echo $post->post_key; ?>">
	<div detail-cont="<?php echo $post->post_key; ?>">

										<h2 style="margin:0px;padding:0px;font-size:22px;letter-spacing:1.8px;color:#29033E;font-family:'Tahoma';">
											<?php echo $post->post_title; ?>
										</h2><br>
										<div class="answers">
<?php foreach($answers as $answer){
$poster = $this->db->query("SELECT * FROM users WHERE username='$answer->poster_username' LIMIT 1;")->row();
?>
											<div class="answer">
												<div class="poster">
													<img src="<?php echo $img; ?><?php echo $this->session->userdata('image'); ?>" alt="" style="width:30px;height:30px;">
													<?php echo $poster->first_name.' '.$poster->last_name; ?>, <?php echo $poster->bio; ?>
												</div>
												<div class="content">
													<?php echo $answer->post_content; ?>
												</div>
												<div class="actionbar">

												<a class="cshare">
													Berbagi 
													<img src="<?php echo $lib; ?>share.png">
												</a>

												<div style="float:right;margin-top:-6px;">

												<a href="" class="ctotalview">
													7.7k Terbaca
												</a>
													<b class="vertical-divider">|</b>
												<a href="" class="cmosilist">
													Lihat Daftar Mosi
												</a>
													<b class="vertical-divider">|</b>
												<a class="ccomment">
													Komentar&nbsp;
													<div>
														2+
													</div>
												</a>

												<a class="ui blue tiny icon remove-mosi button">
													Kurangi Mosi 
													<img src="<?php echo $lib; ?>downvote.png" style="margin-left:6px;vertical-align:top;display:inline-block;">
												</a>
												<a class="ui blue tiny icon add-mosi button">
													Tambah Mosi 
													<img src="<?php echo $lib; ?>upvote.png" style="margin-left:6px;vertical-align:top;display:inline-block;">
												</a>

												</div>

												</div>
											</div>
<?php } ?>
										</div>
</div>
</div>