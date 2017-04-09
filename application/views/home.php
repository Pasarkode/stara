<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php if($this->uri->segment(1) == 'question' && $this->uri->segment(2)){ ?>
			<?php echo $title; ?>
		<?php } else { ?>
		Stara - Your Spiritual Journey Is Here | Stara.id
		<?php } ?>
	</title>
    <meta type="description" content="Your spiritual journey is here" />
    <meta property="og:title" content="Stara - Your Spiritual Journey Is Here | Stara.id" />
    <meta property="og:description" content="Your spiritual journey is here" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo base_url();?>" />
    <meta property="og:image" content="<?php echo base_url('uploads/images');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $lib; ?>style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $lib; ?>cs.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/wysiwyg-editor-master/css/fa/css/font-awesome.css">

</head>
<body class="logged" style="overflow-y:hidden;">
	<div class="home-content" style="overflow-y:hidden;"><br>
				<div class="ui container" style="width:1200px;">
						<div style="">
							<?php $this->load->view('part/top_menu'); ?>
						</div><br>
						
							<div gr class="ui first grid" style="margin-top:14px;">
								<div class="four wide column" id="sidebar">
									<?php if($this->session->userdata('username')) { ?>
									<div onclick="mainact(1)" class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
									<?php } else { ?>
									<a href="<?php echo base_url(); ?>" class="ui left icon fluid button">
										<i class="user icon"></i>
										Login / Sign Up
									</a>
									<?php } ?>
								</div>
								<div class="twelve wide column" id="home-cont">
									<div class="for button" now-fb="0">
										<a fb="0" class="active item" bdrbtn>Pertanyaan Terbaru</a>
										<a fb="1" class="item" bdrbtn>Bantu Jawab</a>
										<?php if($this->session->userdata('username')) { ?>
										<a fb="2" class="item" bdrbtn>Mengikuti</a>
										<?php } ?>
										<a fb="6" class="item" bdrbtn style="display:none;"></a>
									</div>
								</div>
							</div>
						
							<div class="ui i-reg grid" style="margin-top:14px;display:none;">
								<div class="four wide reg-sidebar column">
									<?php if($this->session->userdata('username')) { ?>
									<div reg onclick="mainact(1)" class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
									<?php } else { ?>
									<a reg href="<?php echo base_url(); ?>" class="ui left icon fluid button">
										<i class="user icon"></i>
										Login / Sign Up
									</a>
									<?php } ?>
								</div>
								<div class="twelve wide column" id="reg-bar">

								</div>
							</div>

							<div gr class="ui profile-bar grid" style="margin-top:14px;border-bottom:0px solid transparent !important;display:none;">
								<div class="four wide column" id="sidebar">

								</div>
								<div class="twelve wide column" id="home-cont">
									<div class="for button" now-fb="0">
										<a fb="3" class="active item" bdrbtn>Jawaban (0)</a>
										<a fb="4" class="item" bdrbtn>Pertanyaan (10)</a>
										<a fb="5" class="item" bdrbtn>Seruan</a>
									</div>
								</div>
							</div>

							<div class="ui second grid" style="background-color:white;display:none;" gr> 
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

							<div class="ui third grid" style="background-color:white;display:none;" gr>
								<div class="four wide column" id="sidebar">
									<?php if($this->session->userdata('username')) { ?>
									<div onclick="mainact(1)" class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
									<?php } else { ?>
									<a href="<?php echo base_url(); ?>" class="ui left icon fluid button">
										<i class="user icon"></i>
										Login / Sign Up
									</a>
									<?php } ?>
								</div>
								<div class="twelve wide column" id="home-cont">
									<i class="huge angle left back from detail link icon" style="color:#626E96;margin-top:-11px;margin-left:-10px;"></i>
									<b style="color:#4C4C4C;margin-top:10px;display:inline-block;vertical-align:top;">Pertanyaan yang Diajukan - Serba-Serbi</b>
									<div style="float:right;">
										<b class="detail-date"></b>
										<!-- <button class="ui detail-comment button">Komentar</button> -->
										<button class="ui detail-follow button" bdrbtn>Follow</button>
										<div class="fb-share"><img src="<?php echo $lib; ?>fb_share.png" alt=""></div>
										<div class="twitter-share"><img src="<?php echo $lib; ?>twitter_share.png" alt=""></div>
									</div>
								</div>
							</div>

							<div class="ui grid">
								<div class="four wide left-sidebar column">
						
						<div class="profilesidebar" style="display:none;">
							<div class="profile">
								<img src="" class="userimage">
								<b class="name"></b>
								<div class="followinfo">
									<fi>Following 5 |</fi><fr> Follower 35</fr>
								<br>
								<i class="mail outline link icon"></i>
								<i class="alarm outline link follow icon"></i>
								<i class="facebook f link icon"></i>
								<i class="twitter link icon"></i>
								</div>
							</div>
						</div>
									<div class="profile-menu" active-menu="0" style="margin-top:-1px;display:none;">

											<div menu-id="0" menu-title="Serba - Serbi" class="active item">
												Aktivitas
											</div>
											<div menu-id="1" menu-title="Asal - Muasal" class="item">
												Tentang
											</div>
											<div menu-id="2" menu-title="Perjalanan" class="item">
												Layanan
											</div>
											<div menu-id="3" menu-title="Testimonial" class="item">
												Sosial Media
											</div>

									</div>	
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
								<div class="twelve wide column" id="mainscroll">
  <div class="ui inverted maincontent dimmer">
    <div class="ui text loader"></div>
  </div>
  <div class="main-millenials"></div>
  <div class="lacapt la">
  	<div class="signal"></div>
  	Sesi Tanya Jawab langsung akan hadir
  </div>
  <div class="la">
  	<div class="item">
  		<img src="http://localhost/stara/uploads/images/jason.jpg" alt="" class="avatar">
  		<div class="content">
  			<div class="name">Jack Spears</div>
  			<div class="description">GTFO Member</div>
  			<div class="on">Menjawab langsung di hari selasa pukul 15:00</div>
  		</div>
  	</div>
  	<div class="item">
  		<img src="http://localhost/stara/uploads/images/jason.jpg" alt="" class="avatar">
  		<div class="content">
  			<div class="name">Jack Spears</div>
  			<div class="description">GTFO Member</div>
  			<div class="on">Menjawab langsung di hari selasa pukul 15:00</div>
  		</div>
  	</div>
  </div>

  <div class="reg-page i-reg" style="display:none;">
  	<div class="ui grid">
  		<div class="eight wide column">
  			<b class="bpa-capt">Belum punya akun ?</b>
  			<h1 class="ay-capt">Ayo Daftar !</h1>

  			<input placeholder="email" type="text" class="reg-email">
  			<div class="ui signup-btn button">Daftar</div>

  			<div class="m-capt">
					<button class="ui fluid google plus welcome-gp-log-btn button">
						  <img src="<?php echo $lib; ?>google_plus.png" style="float:left;margin-left:5px;margin-right:-25px;">
						  Hubungkan Dengan Google+
						</button><br>
						<button class="ui fluid facebook welcome-fb-log-btn button">
						  <img src="<?php echo $lib; ?>facebook.png" style="float:left;margin-left:15px;widht:50px;">
						   &nbsp;Hubungkan Dengan Facebook
						</button><br>
  			</div>
  		</div>
  		<div class="reg-divider"></div>
  		<div class="eight wide column">
  			<b class="bpa-capt">Massukkan ID Dan password yang kamu miliki</b>
  			<h1 class="ay-capt">Aku punya !</h1>
  			<?php echo form_open('log', ''); ?>
  			<input placeholder="Email" type="text" name="identity" class="reg-email">
				<div class="ireg checkbox" onclick="checkbox('reg')" data="0" data-id="reg">
					<img src="<?php echo $lib; ?>check.png" alt="Checkmark" style="display:none;">
				</div> <div class="ccapt">Ingat Saya</div>
  			<input placeholder="Password" name="password" type="text" class="reg-email">
  			<div class="rp">Lupa password?</div>
  			<button class="ui login-btn button">Masuk</button>
  			<?php echo form_close(); ?>
  		</div>
  	</div>
  	<div class="goto-capt">Lanjutkan Untuk Mengakses <b><?php echo $this->session->userdata('last-q'); ?></b></div>
  </div>
									<div class="main-content">

									</div>
<div class="loadmoreinfo" style="visibility:hidden;">
	<i class="spinner big loading icon"></i><br>
	<b>Loading more</b>
</div><br><br>
								</div>
<div class="tmhider"></div>
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
	<h2 id="q-title"></h2>
	<button class="ui detail-answer button" onclick="showdetailanswerbox('fa','ayam')" daw="ayam" eye="0" bdrbtn>Tulis Jawab</button>
	<button style="display:none;" class="ui detail-add-answer button" onclick="newAnswer();" daw="ayam" eye="0" bdrbtn>Kirim Jawaban</button>
	<button style="display:none;" onclick="showdetailanswerbox('fa','ayam')" class="ui cancel-add-answer button" bdrbtn>Batal</button>
	<button class="ui detail-downvote button" bdrbtn>Kurangi Popularitas</button>
	<div class="detail-more">Lebih <b>+</b></div>
	<div class="na-share" style="display:none;">
		Bagikan ke
		<div class="facebook">
			<div class="checkbox" onclick="checkbox('nasf')" data="0" data-id="nasf">
				<img src="<?php echo $lib; ?>check.png" alt="Checkmark" style="display:none;">
			</div>
			<img src="<?php echo $lib; ?>fb_share.png" alt="">
		</div>
		<div class="twitter">
			<div class="checkbox" onclick="checkbox('nast')" data="0" data-id="nast">
				<img src="<?php echo $lib; ?>check.png" alt="Checkmark" style="display:none;">
			</div>
			<img src="<?php echo $lib; ?>twitter_share.png" alt="">
		</div>
	</div>
	<div class="answer-box" style="display:none;">
		<div class="head">
			<div class="is me">
				<img src="<?php echo base_url('uploads/images'); ?>/<?php echo $this->session->userdata('image'); ?>" alt="">
				<?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?>
			</div>
			<div class="isnt me" style="display:none;">
				<img src="http://localhost/stara/uploads/images/sukonto.png" alt="">
				Tidak Diketahui
			</div>
			<div class="asanon">
				<div class="checkbox" onclick="checkbox('aw')" data="0" data-id="aw">
					<img src="<?php echo $lib; ?>check.png" alt="Checkmark" style="display:none;">
				</div>
				Sembunyikan identitas saya
			</div>
		</div> 
		<div class="add-religions" onclick="addreli();" eye="0">Tambahkan Kepercayaan</div>
		<div class="add-religions-input"><input placeholder="Tuliskan Kepercayaan" type="text" class="mykecepercayaan"><i onclick="addrelig();" class="add-reli checkmark icon"></i></div>
		<div class="divider">|</div>
		<div id="answer-area"></div>
	</div>

	<br>
	<div class="answers"></div>
</div>

<div class="answers-box" style="display:none;">
		<div class="answer" aw-for="">
			<div class="poster">
				<img src="" alt="" id="aw-img">
				<x id="aw-name"></x>
				<d id="aw-date">Tertulis pada 27 Oktober 2017</d>
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
		<input type="text">
	</div>

<div class="ui comment modal">
  <div class="header fm">
    Tulis Komentar
  </div>
  <div class="image content fm m-c">
  	<div class="comments" style="min-height:350px;">
		
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

<div id="gnotif"></div>
<div class="parsenewdata"></div>
<div class="cmtodo"></div>
<div class="scroll-paw"><div></div></div>
<div style="width:50px;height:50px;background-color:black;position:fixed;bottom:0%;right:5%;">
	<input type="text" class="snap">
</div>
<div style="width:50px;height:50px;background-color:black;position:fixed;bottom:0%;right:15%;">
	<input type="text" id="ayam">
</div>
<div style="position:fixed;z-index:10;left:30%;top:40%;width:50%;">

</div>
	<audio id="notif" src="<?php echo base_url('lib/sounds/notif.mp3'); ?>" type="audio/mp3"></audio>
	<script type="text/javascript">var base_url = '<?php echo base_url(); ?>';</script>
	<script src="<?php echo $lib; ?>bundle.js"></script>
	<script src="<?php echo $lib; ?>cs.js"></script>
	<script type="text/javascript">
		<?php if($this->uri->segment(1) == 'question' && $this->uri->segment(2) || $this->uri->segment(1) == 'profile' && $this->uri->segment(2)){ ?>
		
		<?php   if(!$this->session->userdata('username'))
					echo 'inhomereg();';
				else
					echo $dod;
		?>
		<?php } else { ?>
		<?php if(!$this->session->userdata('username'))
					echo 'inhomereg();';
			  else
			  	echo 'loadtl();';
		?>
		<?php } ?>

$(window).on({
    load: function(){
    	var ch = window.innerHeight;
    	var nh = ch - 
		$(".m-c").mCustomScrollbar({
			theme:"minimal"
		});
				$("#mainscroll").mCustomScrollbar({
					theme:"minimal-dark",
					keyboard:{
						enable:true,
						scrollType:"stepless",
						scrollAmount:"auto"
					},
					callbacks:{
						onTotalScroll:function(){ 
							$('.loadmoreinfo').css("visibility", "visible"); 
							loadmore(); 
						},
						whileScrolling:function(){

							var m = $('.played-sidebar > .active.item').attr('menu-id')
							, 	f = $('.for.button > a.active.item').attr('fb');

							if(!$('.data-box > [scroll-id="'+m+f+'"]').attr('scroll-percent'))
							{
								$("#mainscroll").mCustomScrollbar("scrollTo",'0%');
								$('.scroll-paw div').attr('scroll-id', m+f);
								$('.scroll-paw div').attr('scroll-percent', this.mcs.topPct);
								$('.data-box').append($('.scroll-paw').html());
							}
							else
								$('.data-box > [scroll-id="'+m+f+'"]').attr('scroll-percent', this.mcs.topPct);

							$(".snap").val(this.mcs.topPct+"%");
						},
						onTotalScrollOffset:100,
						alwaysTriggerOffsets:false
					}
				});
    }
});

function showTa () {
	$('#answer-area').froalaEditor({toolbarButtons: ['bold', 'italic', 'formatOL', 'formatUL', 'insertFile', 'insertImage', 'quote', 'html']});
}
	</script>
</body>
</html>