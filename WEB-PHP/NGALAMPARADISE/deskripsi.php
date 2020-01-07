<?php 
    include 'admin/koneksi.php';
 ?>
<!doctype html>
<html lang="en">

<head>
    <title>Pariwisata dan Kebudayaan di Kota Malang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js animasi slide -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 600px;
        border: 2px solid #F2F2F2;
    }
    </style>

    <!-- coba map -->
    <style>
    #map-canvas {
        width: auto;
        height: 700px;
    }
    </style>
    <!-- ini maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzzo4Z68JEycUhl2_W3YwZh3skGUSJ3ac&sensor=true"></script>
    <script>
    var marker;

    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {

            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;
        var bounds = new google.maps.LatLngBounds();


        function bindInfoWindow(marker, map, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
            });
        }

        function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
        }

        <?php
            $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost WHERE ID_POSTWISATA='$_GET[ID_POSTWISATA]'");
      
            while ($show = mysqli_fetch_array($postWisata)) {
              $lat = $show['LOKASI_WISATAPOST'];
              $long = $show['LOKASI_WISATAPOST2'];
              $nama_wisata = $show['NAMA_WISATAPOST'];
            //   $ahref = "<a href='https://www.google.com/maps/place/{$nama_wisata}'>{$nama_wisata}</a>";
            //   echo ("addMarker($lat, $long, '<b>{$ahref}</b>');\n");                        
              echo ("addMarker($lat, $long, '<b>{$nama_wisata}</b>');\n");                        
            }
          ?>
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- sampe sini -->
</head>

<body>

    <header class="site-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 site-logo" data-aos="fade"><a href="index.php"><em>Ngalam Paradise</em></a>

                </div>

                <?php 
                    include 'admin/koneksi.php';
                    session_start();

                    if (!isset($_SESSION['ID_USER'])) {
                        
                    

                ?>
                <div class="col-1 site-logo" data-aos="fade"><a href="login/Login.php"><em>
                            <div class="fa fa-sign-in">|Login</div>
                        </em></a>
                </div>
                <?php
                    }else{

                    
                    
                ?>
                <div class="col-1 site-logo" data-aos="fade"><a href="logout.php"><em>
                            <div class="fa fa-sign-in">|Logout</div>
                        </em></a>
                </div>
                <?php
                    }
                ?>
                <div class="col-1">


                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- END menu-toggle -->

                    <div class="site-navbar js-site-navbar">
                        <nav role="navigation">
                            <div class="container">
                                <div class="row full-height align-items-center">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled menu">
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <?php
                        if (isset($_SESSION['ID_USER'])) {
                        ?>

                        <li><a href="profile.php">Profile</a></li>

                        <?php } ?>
                                            <li><a href="wisata.php">Wisata</a></li>
                                            <li><a href="budaya.php">Budaya</a></li>
                                            <li><a href="event/index.php">Event</a></li>
                                            <li><a href="about.php">Tentang Kami</a></li>
                                            <li><a href="contact.php">Kritik dan Saran</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 extra-info">
                                        <div class="row">
                                            <div class="col-md-6 mb-5">
                                                <h3>Kontak Info</h3>
                                                <p>Jl. Kalpatarak Gang 152, No 123 <br> Malang 65432</p>
                                                <p>ngalamparadise@gmail.com</p>
                                                <p>(+62) 123 45678</p>

                                            </div>
                                            <div class="col-md-6">
                                                <h3>Cari Kami di</h3>
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="#">Facebook</a></li>
                                                    <li><a href="#">Instagram</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END head -->
    <?php 
				
        $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost WHERE ID_POSTWISATA='$_GET[ID_POSTWISATA]'");
      
      while ($show = mysqli_fetch_array($postWisata)) {
        ?>
    <section class="site-hero overlay page-inside"
        style="background-image: url('admin/images/<?php echo $show['FOTO_WISATAPOST']; ?>')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up"><?php echo $show['NAMA_WISATAPOST'];?></h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Nikmati Liburanmu.</p>
                </div>
            </div>
            <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <!-- END section -->

    <section class="bg-light">
        <div class="half d-md-flex d-block">
            <div class="image" data-aos="fade"
                style="background-image: url('admin/images/<?php echo $show['FOTO_WISATAPOST2']; ?>');"></div>
            <div class="text" data-aos="fade-right" data-aos-delay="200">
                <b data-aos="fade-right" style="float: right;margin-top: -50px">Tanggal Publikasi : <?php echo date('d F Y', strtotime($show['TANGGAL_WISATAPOST']));?></b>
                <h3 data-aos="fade-right"><?php echo $show['NAMA_WISATAPOST'];?></h3>
                <P class="lead" data-aos="fade-right" data-aos-delay="100"><?php echo $show['INFO_WISATAPOST'];?></P>


            </div>
        </div>
        <!-- ini script animasi slide -->
        <script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#bungkus").slideToggle("slow");
  });
});
</script>

        <div class="half d-md-flex d-block">
            <div class="image order-2" data-aos="fade"
                style="background-image: url('admin/images/<?php echo $show['FOTO_WISATAPOST3']; ?>');"></div>
            <div class="text" data-aos="fade-left" data-aos-delay="200">

                <P class="lead" data-aos="fade-left" data-aos-delay="100"><?php echo $show['INFOWISATAPOST2'];?></P>
                <button id="flip" class="btn btn-danger">
                    Tampilkan Lokasi
                </button>
            </div>
        </div>

    </section>
    <!-- ini tutupnya -->
    <!-- END section -->    
    
    <!-- ini map -->
    <div class="container-fluid" id="bungkus" style="display: none">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center; margin-top: 50px" ><a style="" href="https://www.google.com/maps/place/<?php echo $show['NAMA_WISATAPOST'];?> Malang">Menuju ke <?php echo $show['NAMA_WISATAPOST'];?></a></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="map-canvas" >
        <!-- <button>asdasd</button> -->
                </div>
            </div>
        </div>
        
    </div>
    <?php } ?>
    
    
    <!-- END section -->

    <section class="section testimonial-section" id="komen">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h3 class="heading" data-aos="fade-up">Comments </h3>
                </div>
            </div>
            <?php 
            error_reporting(0);
              $query = mysqli_query($mysqli, "SELECT * FROM komentar_wisata WHERE ID_POSTWISATA='$_GET[ID_POSTWISATA]'");

                //perintah menampilkan semua stok di tabel jual dengan perulangan
              $row = mysqli_num_rows($query);
              if ($row==0) {
                echo "<h5>Komentar kosong!</h5>";
              }else{
                $angka = 1;
                while ($show = mysqli_fetch_array($query)) {
                    
                    $hasil = mysqli_query($mysqli, "SELECT * FROM user WHERE ID_USER='$show[ID_USER]'");
                    $result = mysqli_fetch_array($hasil);
                    if($angka%2==0){
                        

                    ?>
            <hr data-aos="fade-up">
            <div>
                <!-- komen kanan -->
                <div class="row" data-aos="fade-up">
                <?php 
                        if ($_SESSION['ID_USER']==$result['ID_USER']) {
                        ?>
                        <div class="col-md-1">
                        <i class="fa fa-bars" data-toggle="collapse" href="#card-element-148993<?php echo $angka?>"></i>
                        <div id="card-element-148993<?php echo $angka?>" class="collapse" >
						<div class="card-body" >
                        <a id="modal-847969" href="#modal-container-847969<?php echo $angka?>"  data-toggle="modal">Edit</a>
                            <hr>
			
                            <a href="deletekomentar.php?ID_KOMENTARWISATA=<?php echo $show['ID_KOMENTARWISATA']; ?>">Hapus</a>
						</div>
					</div>
                        </div>
                        <?php
                            
                    }  ?>
                    <div class="col-md-10" data-aos="fade-up" style="text-align:right;">
                        <h5 style="color: grey;margin-left: 20px;font-family: calibri">
                            <?php echo $show['WAKTU_KOMENTARWISATA']?></h5><br>
                        <h4 style="font-family: Gill Sans MT;margin-left: 20px"><?php echo $result['USERNAME']?></h4>
                    </div>
                    <div class="col-md-1">
                        <img src="img/user.png" style="width: 80px; border-right: 10px" alt="">

                    </div>


                </div>
                <div class="row" data-aos="fade-up">

                    <div class="col-md-6" data-aos="fade-up" style="text-align:right;">
                        
                    </div>
                    <div class="col-md-6" data-aos="fade-up" style="text-align:right;">
                        <div style="margin-top: 20px;margin-right: 50px;font-size: 20px">
                            <?php echo $show['ISI_KOMENTARWISATA'] ?></div>
                    </div>


                </div>
                <?php
                    }else{
                        ?>
                        <!-- kiri komentar -->
                <hr data-aos="fade-up">
                <div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-1" data-aos="fade-up">
                            <img src="img/user.png" style="width: 80px; border-right: 10px" alt="">
                        </div>
                        <div class="col-md-10">
                            <h5 style="color: grey;margin-left: 20px;font-family: calibri">
                                <?php echo $show['WAKTU_KOMENTARWISATA']?></h5><br>
                            <h4 style="font-family: Gill Sans MT;margin-left: 20px"><?php echo $result['USERNAME']?>
                            </h4>
                            
                        </div>

                        <!-- ini mau dibuat menurut session -->
                        <?php 
                        if ($_SESSION['ID_USER']==$result['ID_USER']) {
                        ?>
                        <div class="col-md-1">
                        <i class="fa fa-bars" data-toggle="collapse" href="#card-element-148993<?php echo $angka?>"></i>
                        <div id="card-element-148993<?php echo $angka?>" class="collapse" >
						<div class="card-body" >
                        <a id="modal-847969" href="#modal-container-847969<?php echo $angka?>"  data-toggle="modal">Edit</a>
                            <hr>
                            <a href="deletekomentar.php?ID_KOMENTARWISATA=<?php echo $show['ID_KOMENTARWISATA']; ?>">Hapus</a>
						</div>
					</div>
                        </div>
                        <?php
                            
                    } ?>

                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-6" data-aos="fade-up">
                            <p style="margin-top: 20px;margin-left: 50px;font-size: 20px">
                                <?php echo $show['ISI_KOMENTARWISATA'] ?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                    <!-- ini modal -->
              <div class="modal fade" id="modal-container-847969<?php echo $angka?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
                    <form role="form" method="post" action="">
						<div class="modal-header">
							<h5 class="modal-title" id="myModalLabel">
                                <?php echo $result['USERNAME']?>
							</h5> 
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
                            
                                    <textarea style="width: 450px" name="editkomentar" placeholder=""
                                    class="pb-cmnt-textarea" required><?php echo $show['ISI_KOMENTARWISATA'] ?>
                                </textarea>
                                <input type="hidden" name="ID_KOMENTARWISATA" value="<?php echo $show['ID_KOMENTARWISATA'] ?>">
                            
						</div>
						<div class="modal-footer">
							 
							<button type="submit" name="updatekomentar"class="btn btn-primary">
								Save changes
							</button> 
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Close
							</button>
                        </div>
                        </form>
					</div>
					
				</div>
				
            </div>
            <!-- ini modal habis -->
            <?php 
        include "admin/koneksi.php";
        
            if (isset($_POST["updatekomentar"])) {
                $editkomentar = $_POST['editkomentar'];
                $ID_KOMENTARWISATA = $_POST['ID_KOMENTARWISATA'];
                $query = mysqli_query($mysqli, "UPDATE komentar_wisata SET ISI_KOMENTARWISATA='$editkomentar' WHERE ID_KOMENTARWISATA='$ID_KOMENTARWISATA'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    // echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'deskripsi.php?ID_POSTWISATA=$_GET[ID_POSTWISATA]';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>

                    <?php
                $angka++;}
              }
            ?>





                </div>
            </div>
              



            <div class="row">

                <div class="container pb-cmnt-container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-info">
                                <div class="panel-body">

                                    <form method="POST" class="form-inline">
                                        <textarea name="isikomentar" placeholder="Write your comment here!"
                                            class="pb-cmnt-textarea" required></textarea><br>
                                        <input class="btn btn-primary pull-right mt-2" type="submit" name="addkomentar" >
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END col -->
            </div>
        </div>
    </section>
    <?php 

        
            if (isset($_POST["addkomentar"])) {
                if (!isset($_SESSION['ID_USER'])){
                    echo "<script type='text/javascript'> alert('Maaf Anda harus login dahulu!!!') </script>";
                    echo "<script>document.location = 'Login/login.php';</script>";
                }else{
                    $ID_USER = $_SESSION['ID_USER'];
                    $ID_POSTWISATA = $_GET['ID_POSTWISATA'];
                    $ISI_KOMENTAR = strip_tags($_POST['isikomentar']);
                    date_default_timezone_set('Asia/Jakarta');
                    $tgl_post = date('Y-m-d H:i:s');
                    $query = mysqli_query($mysqli, "INSERT INTO komentar_wisata VALUES(NULL,'$ID_USER', '$ID_POSTWISATA', '$ISI_KOMENTAR', '$tgl_post')") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script>document.location = 'deskripsi.php?ID_POSTWISATA=$_GET[ID_POSTWISATA]';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                    }
                }
                
            }
        
            

        ?>


    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">


                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                    <p><span class="d-block">Address:</span> <span> Jl. Kalpatarak Gang 152 No 123, Malang 65432</span>
                    </p>
                    <p><span class="d-block">Phone:</span> <span> (+62) 123 45678</span></p>
                    <p><span class="d-block">Email:</span> <span> ngalamparadise@gmail.com</span></p>
                </div>
                <div class="col-md-3 mb-5">

                </div>
                <div class="col-md-3 mb-5">
                    <p>Sign up for our newsletter</p>
                    <form action="#" class="footer-newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email...">
                            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row bordertop pt-5">


                <p class="col-md-6 text-right social">
                    <a href="#"><span class="fa fa-tripadvisor"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                </p>
            </div>
        </div>
    </footer>
    


    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>



    
</body>

</html>