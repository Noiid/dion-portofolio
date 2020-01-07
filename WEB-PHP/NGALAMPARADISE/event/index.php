				<?php 

				include 'koneksi.php';
				session_start();
			
				?>


				<!DOCTYPE html>
				<!--

				-->
				<html lang="">
				<head>
					<title>Event</title>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
					<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
					<link href="layout/styles/bootstrap.min.css" rel="stylesheet">
					<link href="layout/styles/coba.css" rel="stylesheet">

			

	<style type="text/css">

		

		/*style untuk popup */	
		.popup {
			visibility: hidden;
			opacity: 0;
			margin-top: -200px;
		}
		.popup:target {
			visibility:visible;
			opacity: 1;
			background-color: rgba(0,0,0,0.8);
			position: fixed;
			top:0;
			left:0;
			right:0;
			bottom:0;
			margin:0;
			z-index: 99999999999;
			-webkit-transition:all 1s;
			-moz-transition:all 1s;
			transition:all 1s;
		}

		@media (min-width: 768px){
			.popup-container {
				width:600px;
			}
		}
		@media (max-width: 767px){
			.popup-container {
				width:100%;
			}
		}
		.popup-container {
			position: relative;
			margin:7% auto;
			padding:30px 50px;
			background-color: #fafafa;
			color:#333;
			border-radius: 3px;
		}

		a.popup-close {
			position: absolute;
			top:3px;
			right:3px;
			background-color: #333;
			padding:7px 10px;
			font-size: 20px;
			text-decoration: none;
			line-height: 1;
			color:#fff;
		}
		</style>

		<?php  
			 function random($panjang_karakter)   
			  {   
			  $karakter = '12345ABCDE';   
			  $string = '';   
			  for($i = 0; $i < $panjang_karakter; $i++) {   
			   $pos = rand(0, strlen($karakter)-1);   
			   $string .= $karakter{$pos};   
			  }   
			  return $string;   
			  }   

					?>

				</head>



				<body id="top" style="background-color: black">


					<!-- ################################################################################################ -->
					<!-- ################################################################################################ -->
					<!-- ################################################################################################ -->
					<!-- Top Background Image Wrapper -->
			
					<div class="fullscreen-video-wrap" style="margin-top: 50px; margin-left: 80px">
			          <video autoplay muted loop id="myVideo" >
			      		<source src="event.mp4" type="video/mp4">
			    	  </video>
			        </div>


						
				<div class="wrapper row1" style="color: white" >
					<header id="header" class="hoc" >
						<div id="logo" class="fl_left"> 
							<!-- ################################################################################################ -->
							<h1><a href="../index.php">Ngalam Paradise</a></h1>
							<!-- ################################################################################################ -->
						</div>
						<nav id="mainav" class="fl_right" > 
							<!-- ################################################################################################ -->
							<ul class="clear">
								<li  type="date"><a href="index.html" >Tanggal</a>
									<ul><li>
										<input type="date" name="tanggal" style="color: black">
									</li></ul>
								</li>
								<li><a class="drop" href="#" >Galeri</a>
									<ul style="background-color: black">
										<li><a href="pages/gallery.html">Foto Event</a></li>
										<li><a href="pages/full-width.html">Games</a></li>
										<li><a href="pages/sidebar-left.html">Doorprize</a></li>
										<li><a href="pages/sidebar-right.html">Kuis</a></li>
									</ul>
								</li>
								<li style="margin-right: 30px;"><a class="drop" href="#">Menu</a>
									<ul style="background-color: black">
										<li><a href="#">Tiket-ku</a></li>
				              <!-- <li><a class="drop" href="#">Level 2 + Drop</a>
				                <ul>
				                  <li><a href="#">Level 3</a></li>
				                  <li><a href="#">Level 3</a></li>
				                  <li><a href="#">Level 3</a></li>
				                </ul>
				            </li> -->
				            <li><a href="#">Logout</a></li>
				        </ul>
				    </li>
				          <!-- <li><a href="#">Link Text</a></li>
				          <li><a href="#">Link Text</a></li>
				          <li><a href="#">Link Text</a></li> -->
				      </ul>
				      <!-- ################################################################################################ -->
				  </nav>
				</header>
				</div>
				<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->

		<h5 style="margin-left: 78%; margin-top: 300px; position: absolute; color: white; text-align: center; border: 3px solid #FBAB45; padding: 5px"><a class="btn item" href="#item"  style="width: 200px">Get Limited Bag For Free!</a></h5>

				<div style="margin-top: 10%;">
					<h2 style="margin-left: 78%; position: absolute; color: white; text-align: center; border: 3px solid #FBAB45; padding: 5px">JakCloth 2019<br>Goes<br>To<br>Malang</h2>
					<h5 style="margin-left: 74.5%; margin-top: 200px; position: absolute; color: white; text-align: center; border: 3px solid #FBAB45; padding: 5px">"Join Now And Enjoy This Event"</h5>
					<h6 style="margin-left: 6%; margin-top: 380px; position: absolute; color: white; text-align: center; ">Support By :</h6>
					<div>
						<img src="images/event/qua.png" style="margin-left: 13%; margin-top: 400px; position: absolute; width: 100px">
						<img src="images/event/awesam.png" style="margin-left: 21%; margin-top: 409px; position: absolute; width: 90px; height: 80px">
						<img src="images/event/ria.jpg" style="margin-left: 29%; margin-top: 409px; position: absolute; width: 80px; height: 80px">
						<img src="images/event/mie.jpeg" style="margin-left: 37%; margin-top: 409px; position: absolute; width: 80px; height: 80px">
						<img src="images/event/bw.jpg" style="margin-left: 43%; margin-top: 400px; position: absolute; width: 100px; height: 100px">
						<img src="images/event/eight.jpg" style="margin-left: 50.5%; margin-top: 407px; position: absolute; width: 80px; height: 80px">
						<img src="images/event/sch.jpeg" style="margin-left: 57.5%; margin-top: 407px; position: absolute; width: 90px; height: 90px">
						<img src="images/event/heroine.jpg" style="margin-left: 65%; margin-top: 397px; position: absolute; width:108px; height: 108px">
						<h1 style="margin-left: 81%; margin-top: 330px; position: absolute; border: 4px solid red; color: red; padding: 10px">HTM<br>FREE</h1>

					</div>
				</div>
				
				<!-- ################################################################################################ -->
				<div id="pageintro" class="hoc clear" style="background-color: black; height: 600px"> 
					<!-- ################################################################################################ -->
				
					<!-- ################################################################################################ -->
				</div>
				<!-- ################################################################################################ -->

				</div>
				<div id="item"></div>
				<!-- End Top Background Image Wrapper -->
				<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->
				<div class="wrapper row3" style="background-color: #e5d8da; color: black">

					<main class="hoc container clear"> 
						<!-- main body -->
						<!-- ################################################################################################ -->
						
						<section>
							<ul class="nospace group btmspace-80" >  

								<?php 

								$query = mysqli_query($mysqli, "SELECT * FROM event");
								$hasil = mysqli_query($mysqli, "SELECT * FROM event");
								$query2="";
								$user="";

								$row = mysqli_num_rows($hasil);
								$angka = 1;

								if ($row==0) {
									echo "Data kosong!";
								}else{
									while ($show = mysqli_fetch_array($query)) {
										if ($angka - 1 % 3 == 0) {
				                      # code...

											?>
											<li class="one_third first">

												<figure style="border: 2px black solid">
												<?php
                    if (isset($_SESSION['ID_USER'])) {
											$query2 = mysqli_query($mysqli, "SELECT * FROM user where ID_USER = $_SESSION[ID_USER]");
											$user = mysqli_fetch_array($query2);
								?>
												<a id="modal-179881" href="#modal-container-179881<?php echo $show['ID_EVENT']; ?>" role="button" data-toggle="modal" class="imgover"  ><img src="<?php echo $show['FOTO_EVENT']; ?>" alt="" style="width: 400px; height: 200px"></a>
												<?php
										}
										else{

											?>
												<a  href="../login/login.php" role="button"  class="imgover"  ><img src="<?php echo $show['FOTO_EVENT']; ?>" alt="" style="width: 400px; height: 200px"></a>

											<?php

											

										}
											?>	
												<a href="https://www.google.com/maps/place/<?php echo $show['LOKASI_EVENT']; ?> malang"><button class="btn" style="width: 332px"><div style="float: left; font-size: 13px"> <?php  $ttt = $show['TANGGAL_EVENT']; echo date("d F Y", strtotime($ttt)) ?></div><div style="float: right; font-size: 13px"><?php echo $show['LOKASI_EVENT']; ?></div></button></a>
													<figcaption><br>
														<h6 class="heading" style="text-align: center;"><?php echo $show['NAMA_EVENT']; ?></h6>
														<p style="text-align: center;"><?php echo $show['DESKRIPSI_EVENT']; ?></p>
													</figcaption>

												</figure>

											<?php
										}else{

											?>
											<li class="one_third" >
												<figure style="border: 2px black solid">
												<?php
                    if (isset($_SESSION['ID_USER'])) {
											$query2 = mysqli_query($mysqli, "SELECT * FROM user where ID_USER = $_SESSION[ID_USER]");
											$user = mysqli_fetch_array($query2);
								?>
												<a id="modal-179881" href="#modal-container-179881<?php echo $show['ID_EVENT']; ?>" role="button" data-toggle="modal" class="imgover"  ><img src="<?php echo $show['FOTO_EVENT']; ?>" alt="" style="width: 400px; height: 200px"></a>
												<?php
										}
										else{

											?>
												<a  href="../login/login.php" role="button"  class="imgover"  ><img src="<?php echo $show['FOTO_EVENT']; ?>" alt="" style="width: 400px; height: 200px"></a>

											<?php

											

										}
											?>	
													<a href="https://www.google.com/maps/place/<?php echo $show['LOKASI_EVENT']; ?> malang"><button class="btn" style="width: 332px"><div style="float: left; font-size: 13px"> <?php  $ttt = $show['TANGGAL_EVENT']; echo date("d F Y", strtotime($ttt)) ?></div><div style="float: right; font-size: 13px"><?php echo $show['LOKASI_EVENT']; ?></div></button></a>
													<figcaption><br>
														<h6 class="heading" style="text-align: center"><?php echo $show['NAMA_EVENT']; ?></h6>
														<p style="text-align: center;"><?php echo $show['DESKRIPSI_EVENT']; ?></p>
													</figcaption>
												</figure>
											

											<?php
										}

										?>

															


								<!-- modal tiket -->
								
								<div class="modal fade" id="modal-container-179881<?php echo $show['ID_EVENT']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								
								<div class="modal-dialog" role="document">
								
										<div class="modal-content fontku">
											


											<div class="modal-header">
												<h5 class="modal-title" id="myModalLabel">
													Pemesanan Tiket
												</h5> 
												<button type="button" class="close" data-dismiss="modal">
													<span aria-hidden="true">×</span>
												</button>
											</div>



											<div class="modal-body">


												<form role="form" action="booking.php" method="post" >
												
													<div class="form-group">
														<label for="exampleInputEmail1">
															Email address
														</label>
														<input type="email" placeholder="<?php echo $user['EMAIL']; ?>" class="form-control" id="exampleInputEmail1" disabled />
													</div>

													<div class="form-group">
														<label for="exampleInputPassword1">
															Nama Event
														</label>
														<input type="password" placeholder="<?php echo $show['NAMA_EVENT']; ?>" class="form-control" id="exampleInputPassword1" disabled/>
													</div>

													<div class="form-group">
														<label for="exampleInputPassword1">
															Jumlah Tiket
														</label>
														<input type="number" name="totalbeli" min=1 max=3 class="form-control" id="exampleInputPassword1"/>
													</div>

													<div class="form-group">
														<label for="exampleInputName">
															Nama
														</label>
														<input type="text" placeholder="<?php echo $user['NAMA_USER']; ?>" class="form-control" id="exampleInputName" disabled/>
													</div>

													<div class="form-group">
														<label for="exampleInputNIK">
															Nomor Identitas
														</label>
														<input type="text" placeholder="<?php echo $user['NIK']; ?>" class="form-control" id="exampleInputNIK" disabled/>
													</div>
													

														

														<input type="hidden" name="harga" value="<?php echo $show['HARGA_TIKET']; ?>">
														<input type="hidden" name="idevent" value="<?php echo $show['ID_EVENT'] ?>">
														<input type="hidden" name="kode_bayar" value="<?php echo $show['NAMA_EVENT']."-".random(5);?>">

														<input type="hidden" name="angkaTampil" value="<?php echo $angka; ?>">
														<input type="hidden" name="iduser" value="<?php echo $_SESSION['ID_USER']; ?>">
														
														
															
														</div>

														<div class="modal-footer">
													

															

															<div class="popup popup-wrapper" id="topup<?php echo $angka; ?>" >
																	<h3 style="color: white; text-align: center; background-color: black; padding: 10px">Pilih Metode Pembayaran</h3>

																<div id="card-256019<?php echo $angka; ?>" style="margin-top: 10px">
																<div class="card">
																	<div class="card-header" style="text-align: center;">
																		 <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-256019<?php echo $angka; ?>" href="#card-element-342598<?php echo $angka; ?>" style="color: black; font-size: 20px">Pembayaran Melalui Indomart atau Alfamart</a>
																	</div>
																	<div id="card-element-342598<?php echo $angka; ?>" class="collapse" >
																		<div class="card-body" style="text-align: center;">
																			Silakan Tunjukkan Kode Pembayaran Berikut ini kepada Kasir
																			<h3 style="color: black"><?php echo $show['NAMA_EVENT'] ?> - <?php echo random(5);?></h3>
																			<br>
																			Atau Kode QR Berikut ini
																			<br>
																			<img src="images/event/qr.png">
																		</div>
																	</div>
																</div>
																<div class="card">
																	<div class="card-header" style="text-align: center;">
																		 <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-256019<?php echo $angka; ?>" href="#card-element-750462<?php echo $angka; ?>"style="color: black;  font-size: 20px">Pembayaran Melalui Rekening Mandiri</a>
																	</div>
																	<div id="card-element-750462<?php echo $angka; ?>" class="collapse">
																		<div class="card-body" style="text-align: center;">
																			Silakan Transfer ke nomor Rekening dibawah ini sesuai nominal harga tiket
																			<h3><?php echo $show['REKENING_EVENT'] ?></h3>
																			<br>
																			<h5>Harga Tiket Rp <?php echo $show['HARGA_TIKET'] ?></h5>
																			<br>
																			Jika anda menggunakan Mobile banking Scan Kode QR Berikut ini
																			<br>
																			<img src="images/event/qr.png">
																		</div>
																	</div>
																</div>
																
															</div>
																<!-- <img src="images/event/2.jpg" alt="" style="width: 600px; height: 200px"> -->
																	<a class="popup-close" href="index.php">X</a>
															</div>

														
														
															<!-- <button type="submit" value="pesan" class="btn btn-primary">
															<a href="#topup<?php echo $angka; ?>" style="color:white" >Pesan Sekarang</a>
															</button> -->
															<input type="submit" name="pesan" value="Pesan Sekarang" class="btn btn-primary">
															</form>
															<button type="button" class="btn btn-secondary" data-dismiss="modal">
																Batal
															</button>

														</div>
													</div>
													
												</div>
												
											</div>
											
											
									
									</li>

								<?php $angka++; }
				                   

										
								} ?>

									
									</ul>
								</section>
											
								




								
								<!-- ################################################################################################ -->
								<!-- / main body -->
								<div class="clear"></div>
							</main>
						</div>
						<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
						<!-- JAVASCRIPTS -->
						<script src="layout/scripts/jquery.min.js"></script>
						<script src="layout/scripts/jquery.backtotop.js"></script>
						<script src="layout/scripts/jquery.mobilemenu.js"></script>

						<script src="layout/js/jquery.min.js"></script>
						<script src="layout/js/bootstrap.min.js"></script>
						<script src="layout/js/scripts.js"></script>

						<script type="text/javascript">
						$('.item').click(function(){
						$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
		 				return false; 
		 				});
						</script>
						

					</body>
					</html>