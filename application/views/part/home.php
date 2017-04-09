			<div class="ui fluid container"><br>
				<div class="ui container" style="width:1200px;">
						<div class="menu">
							<div class="ui grid">
								<div class="three wide column">
									<img src="<?php echo $lib; ?>stara_logo.png" alt="" style="display:inline-block;">
								</div>
								<div class="nine wide column">
									<div class="ui fluid icon input welcomesd">
										<input placeholder="Cari pertanyaan iman mu disini" type="text" style="color:white;background-color:#6A1849;border-radius:20px;">
										<i style="color:white;font-size:22px;" class="search icon"></i>
									</div>
								</div>
								<div class="four wide column">
									<div style="float:right;">
										<b style="color:white;line-height:3.7;vertical-align:top;font-size:17px;margin-right:10px;">Hi <?php echo $this->session->userdata('first_name'); ?> !</b>
										<img src="<?php echo $img; ?><?php echo $this->session->userdata('image'); ?>" style="width:65px;height:65px;display:inline-block;" alt="">
										<div class="notifblock">
											25
										</div>
									</div>
								</div>
							</div>
						</div><br><br>

						
							<div class="ui grid">
								<div class="four wide column" id="sidebar">
									<div style="background-color:#290340;color:white;" class="ui left icon fluid button">
										<i class="plus icon"></i>
										Pertanyaan Baru
									</div>
								</div>
								<div class="twelve wide column" id="home-cont">
									<div class="for button">
										<button style="background-color:#626E96;color:white;" class="ui button" bdrbtn>Pertanyaan Terbaru</button>
										<a type="" style="margin-left:25px;color:#4D4D4D;font-weight:bold;cursor:pointer;" bdrbtn>Bantu Jawab</a>
										<a type="" style="margin-left:25px;color:#4D4D4D;font-weight:bold;cursor:pointer;" bdrbtn>Mengikuti</a>
									</div>
								</div>
							</div>
							<div class="ui grid">
								<div class="four wide column" style="padding:0px;background-color:#626E96;">
									<div class="played-sidebar" style="margin-top:-1px;">
											<div class="item">
												<a class="ui yellow empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Serba - Serbi
											</div>
											<div class="active item">
												<a class="ui teal empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Asal-muasal
											</div>
											<div class="item">
												<a class="ui pink empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Perjalanan
											</div>
											<div class="item">
												<a class="ui red empty circular label" style="margin:0px 20px 0px 5px;"></a>
												Testiomonial
											</div>
									</div>	
								</div>
								<div class="twelve wide column" style="background-color:#FFFFFF;">
									<div class="main-content">

										<div class="item">
											<div class="post">
												<div style="min-height:225px;max-height:225px;overflow-y:hidden;">
													<a style="color:#6A7297;font-weight:bold;font-size:12px;" title="" cg>Pertanyaan yang di ajukan - </a> 
													<a style="color:#6A7297;font-weight:bold;font-size:12px;" title="" cg> Serba-serbi</a>

													<a style="color:#6A7297;font-weight:bold;font-size:12px;float:right;" title="" cg>3 Menit Yang Lalu</a>
													<div style="border-top:1px solid white;margin-top:15px;">
														<h3 style="margin:10px 0px 0px 0px;color:#746581;">Bagaimana Cara Ayam Bisa Terbang Ke Angkasa ?</h3>
														<div class="poster">
															<img src="<?php echo $lib; ?>ruby.jpg" style="width:25px;height:25px;">
															<a href="" title="">Rubi Jihantoro</a>, Professional Eater
														</div>
														<p class="excerpt-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip cat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
												<a class="ccomment">
													Komentar
													<div>
														2+
													</div>
												</a>
												<a class="ui blue tiny icon add-mosi button">
													Tambah Mosi 
													<img src="<?php echo $lib; ?>upvote.png" style="margin-left:6px;vertical-align:top;display:inline-block;">
												</a>
											</div>
										</div>

										<div class="item">
											<div class="post">
												<div style="min-height:225px;max-height:225px;overflow-y:hidden;">
													<a style="color:#6A7297;font-weight:bold;font-size:12px;" title="" cg>Pertanyaan yang di ajukan </a> 
													<a class="ui mini empty circular label" style="font-size:5px;background-color:#6A7297 !important;"></a>
													<a style="color:#6A7297;font-weight:bold;font-size:12px;" title="" cg> Serba-serbi</a>

													<a style="color:#6A7297;font-weight:bold;font-size:12px;float:right;" title="" cg>Kemarin, 1 Des</a>
													<div style="border-top:1px solid white;margin-top:15px;">
														<h3 style="margin:10px 0px 0px 0px;color:#746581;">Apakah Sapi Bisa Memiliki Suara Seperti Ayam ?</h3>
														<i style="color:#8A8A8A;" bdj>Pertanyaan ini belum dijawab</i><br><br>
														<div class="ui add-answer button">
															Bantu Jawab
														</div>
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
												<a class="ccomment">
													Komentar
													<div>
														2+
													</div>
												</a>
												<a class="ui blue tiny icon add-mosi button">
													Tambah Mosi 
													<img src="<?php echo $lib; ?>upvote.png" style="margin-left:6px;vertical-align:top;display:inline-block;">
												</a>
											</div>
										</div>


									</div>
								</div>
							</div>
				</div>


			</div>