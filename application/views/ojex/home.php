	<div class="home-content" style="overflow-y:hidden;"><br>
				<div class="ui container" style="width:1200px;">
						<div style="">
							<?php $this->load->view('part/top_menu'); ?>
						</div><br>
						
							<div class="ui first grid" style="margin-top:14px;">
								<div class="four wide column" id="sidebar">
									<div onclick="mainact(1)" class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
								</div>
								<div class="twelve wide column" id="home-cont">
									<div class="for button" now-fb="0">
										<a fb="0" class="active item" bdrbtn>Pertanyaan Terbaru</a>
										<a fb="1" class="item" bdrbtn>Bantu Jawab</a>
										<a fb="2" class="item" bdrbtn>Mengikuti</a>
									</div>
								</div>
							</div>

							<div class="ui second grid" style="background-color:white;display:none;">
								<div class="three wide column">
									<div onclick="mainact(0)" class="ui left icon fluid button" style="background-color:#290340;color:white;">
										<i class="remove icon"></i>
										Kembali
									</div>
								</div>
								<div class="eleven wide column">
									
									<input class="new-question" name="content" placeholder="Tulis Pertanyaan Barumu di sini">
							  <input name="isanony" type="checkbox" class="isanony">
								</div>
								<div class="two wide column">
									<button class="ui fluid new-question button" bdrbtn>Kirim</button>
								</div>
							</div>

							<div class="ui third grid" style="background-color:white;display:none;">
								<div class="four wide column" id="sidebar">
									<div class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
								</div>
								<div class="twelve wide column" id="home-cont">
									<i class="huge angle left back from detail link icon" style="color:#626E96;margin-top:-11px;margin-left:-10px;"></i>
									<b style="color:#4C4C4C;margin-top:10px;display:inline-block;vertical-align:top;">Pertanyaan yang Diajukan - Serba-Serbi</b>
									<div style="float:right;">
										<b class="detail-date"></b>
										<button class="ui detail-comment button">Komentar</button>
										<button class="ui detail-answer button" bdrbtn>Jawab</button>
										<button class="ui detail-follow button" bdrbtn>Ikuti</button>
									</div>
								</div>
							</div>

							<div class="ui grid">
								<div class="four wide column" style="padding:0px;background-color:#626E96;border-right:1px solid #E1E4ED;">
									<div class="played-sidebar" active-menu="0" style="margin-top:-1px;">

											<div menu-id="0" menu-title="Serba - Serbi" class="active item">
												<a class="ui yellow empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Serba - Serbi
											</div>
											<div menu-id="1" menu-title="Asal - Muasal" class="item">
												<a class="ui teal empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Asal-muasal
											</div>
											<div menu-id="2" menu-title="Perjalanan" class="item">
												<a class="ui pink empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Perjalanan
											</div>
											<div menu-id="3" menu-title="Testimonial" class="item">
												<a class="ui red empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Testiomonial
											</div>

									</div>	
								</div>
								<div class="twelve wide column" style="background-color:#FFFFFF;max-height:800px;" id="mainscroll">
  <div class="ui inverted maincontent dimmer">
    <div class="ui text loader"></div>
  </div>
  <div class="main-millenials"></div>
									<div class="main-content">

									</div>

								</div>
							</div>
				</div>


	</div>

	<div>
		
	</div>

	<div class="data-box" style="display:none;">
		
	</div>
	<div class="timeline-box" style="display:none;">

<div class="item">
	<div class="post">
		<div class="card">
			<a class="left-info">Pertanyaan yang di ajukan - </a> 
			<a class="left-info"> Serba-serbi</a>

			<a class="right-info" id="tldate" cg blurbs-date=""></a>
			<div style="border-top:2px solid #E6E6E6;margin-top:15px;">
				<h3 style="margin:10px 0px 0px 0px;color:#746581;" id="tltitle"></h3>
				
				<div class="poster">
					<img id="tlimg" class="shit" src="">
					<a title="" id="tlname"></a> 
					<i id="tlbio"></i>
				</div>
				<p class="excerpt-cont" id="tlcont"></p>


					<i tlact style="color:#8A8A8A;" bdj>Pertanyaan ini belum dijawab</i><br><br>
					<div tlact class="ui add-answer button">
					Bantu Jawab
					</div>


			</div>
		</div>
	</div>
	<div class="arrow">
												
	</div>
	<div class="act">
		<div class="popup" popup-data="">
			<i class="facebook link big blue icon"></i><i class="twitter teal link big icon"></i>
			<i class="google plus link big  red icon"></i>
		</div>
		<a class="cshare" popup-id="">
			Berbagi 
			<img src="<?php echo $lib; ?>share.png">
		</a>
		<a class="ccomment" id="tldetail">
			Komentar&nbsp;
			<div>
				
			</div>
		</a>
		<a class="ui blue tiny icon add-mosi button" mosi-id="">
			<x>Tambah Mosi</x>
			<img src="<?php echo $lib; ?>upvote.png" class="upvote">
		</a>
	</div>
</div>

	</div>

<div class="detail-timeline" style="display:none;">
	<h2 style="margin:0px;padding:0px;font-size:22px;letter-spacing:1.8px;color:#29033E;font-family:'Tahoma';" id="q-title">
		
	</h2><br>
	<div class="answers">

	</div>
</div>

<div class="answers-box" style="display:none;">
		<div class="answer" aw-for="">
			<div class="poster">
				<img src="" alt="" id="aw-img">
				<x id="aw-name"></x>
			</div>
			<div class="content" id="aw-content">
				
			</div>
			<div class="actionbar">

			<a class="cshare">
				Berbagi 
				<img src="<?php echo $lib; ?>share.png">
			</a>

			<div style="float:right;margin-top:-6px;">

			<a class="ctotalview" id="aw-reads">
				
			</a>
				<b class="vertical-divider">|</b>
			<a class="cmosilist">
				Lihat Daftar Mosi
			</a>
				<b class="vertical-divider">|</b>
				<a class="ccomment">
					Komentar&nbsp;
					<div id="aw-comment">
						
					</div>
				</a>

		<a class="ui blue tiny icon remove-mosi button">
			<dv>Kurangi Mosi</dv>
			<img src="<?php echo $lib; ?>downvote.png" style="margin-left:6px;vertical-align:top;display:inline-block;">
		</a>

		<a class="ui blue tiny icon add-mosi button">
			<uv>Tambah Mosi</uv>
			<img src="<?php echo $lib; ?>upvote.png" class="upvote">
		</a>

			</div>

			</div>
		</div>
</div>
	<div class="tltodo"></div>
	<div class="t-mosi" style="display:none;">
		<input type="text" mosi-id="" mosi-status="">
	</div>

<div class="ui comment modal">
  <div class="header fm">
    Tulis Komentar
  </div>
  <div class="image content fm m-c">
  	<div class="comments">
		
  	</div>
  	<div class="millenials"></div>
  </div>
  <div class="actions fm">
  	<input type="text" class="comment" placeholder="Tekan enter untuk mengirim komentar">
    <div class="ui cancel button">Tutup</div>
  </div>
</div>

<div class="ui new-a modal">
  <div class="header fm">
    Tulis Jawaban
  </div>
  <div class="image content fm">
  	<textarea class="new-a"></textarea>
  </div>
  <div class="actions fm">
    <div class="ui cancel button">Tutup</div>
    <div class="ui approve send-new-a button">Kirim</div>
  </div>
</div>

<div style="display:none;" class="t-comment">

  		<div class="comment">
  			<div class="avatar">
  				<img src="" alt="">
  			</div>
  			<div style="display:inline-block;width:90%;margin-left:12px;">
  				<a class="name" title=""></a>
  				<div class="content"></div>
  			</div>
  		</div>

</div>



<div class="cmtodo"></div>

<script type="text/javascript">var base_url = '<?php echo base_url(); ?>';</script>
<script src="<?php echo $lib; ?>ojfl.js"></script>
<script src="<?php echo $lib; ?>cs.js"></script>
<script type="text/javascript">
					(function($){
							$(window).on("load",function(){
								$(".m-c").mCustomScrollbar({
									theme:"minimal"
								});

							});
					})(jQuery);
					(function($){
							$(window).on("load",function(){
								$("#mainscroll").mCustomScrollbar({
									theme:"minimal-dark",
									keyboard:{
										enable:true,
										scrollType:"stepless",
										scrollAmount:"auto"
									}
								});
							});
					})(jQuery);
</script>