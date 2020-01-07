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

    .vl {
        border-left: 2px solid #DFDFDF;
        height: 480px;
        position: absolute;
        left: 50%;
        margin-left: 30px;
        top: 0;
        margin-top: 700px;
    }
    </style>
    
    <!-- coba map -->
    <style>
    #map-canvas {
        width: auto;
        height: 700px;
    }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
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
              echo ("addMarker($lat, $long, '<b>PANTAI TIGA WARNA</b>');\n");                        
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
                                            <li><a href="index.php">Home</a></li>
                                            <?php
                        if (isset($_SESSION['ID_USER'])) {
                        ?>

                        <li  class="active"><a href="profile.php">Profile</a></li>

                        <?php } ?>
                                            <li><a href="wisata.php">Wisata</a></li>
                                            <li><a href="budaya.php">Budaya</a></li>
                                            <li><a href="event/index.php">Event</a></li>
                                            <li><a href="about.php">Tentang Kami</a></li>
                                            <li><a href="contact.php">Kontak</a></li>
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
				
        $postWisata = mysqli_query($mysqli,"SELECT * FROM user WHERE ID_USER='$_SESSION[ID_USER]'");
      
      while ($show = mysqli_fetch_array($postWisata)) {
        ?>
    <section class="site-hero overlay page-inside" style="background-image: url('img/bg.jpg')">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up"><?php echo $show['NAMA_USER'];?></h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Profile Anda.</p>
                </div>
            </div>
            <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <!-- END section -->
    <div class="row m-5">
        <section class="bg-light" style="width:100%;">
            <h2 data-aos="fade-right" class="text-center p-3">Profil <?php echo $show['USERNAME'];?></h2>
            <div class="half d-md-flex d-block">
                <div class="image rounded" data-aos="fade-left"
                    style="padding:10px; margin-left:200px; margin-top:90px;">
                    <?php 
              if ($show['JENIS_KELAMIN']== 'Laki-laki') {
                echo '<img src="img/male-user.png" class="img img-responsive" height="400px" width="auto">';
              }else{
                echo '<img src="img/female-user.png" class="img img-responsive" height="400px" width="auto">';
              }
            ?>
                </div>
                <div class="vl"></div>
                <div class="text" data-aos="fade-right" data-aos-delay="200">
                    <dl data-aos="fade-right" data-aos-delay="100">
                        <dt style="font-size: 20px;">
                            <i class="fa fa-address-card fa-fw"></i> NIK / No. KTP
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['NIK']; ?>
                        </dd>
                        <dt style="font-size: 20px;">
                            <i class="fa fa-user fa-fw"></i> Username
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['USERNAME']; ?>
                        </dd>
                        <dt style="font-size: 20px;">
                            <i class="fa fa-glide fa-fw"></i> Nama Lengkap
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['NAMA_USER']; ?>
                        </dd>
                        <dt style="font-size: 20px;">
                            <i class="fa fa-transgender fa-fw"></i> Jenis Kelamin
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['JENIS_KELAMIN']; ?>
                        </dd>
                        <dt style="font-size: 20px;">
                            <i class="fa fa-envelope-o fa-fw"></i> Email
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['EMAIL']; ?>
                        </dd>
                        <dt style="font-size: 20px;">
                            <i class="fa fa-map-marker fa-fw"></i> Alamat
                        </dt>
                        <dd style="font-size: 20px;">
                            <?php echo $show['ALAMAT_USER']; ?>
                        </dd>
                        <dd>
                            <a id="modal-990160" href="#modal-container-990170<?php echo $show['ID_USER']; ?>"
                                role="button" data-toggle="modal">Edit</a>
                            
                        </dd>
                    </dl>


                </div>
            </div>

            <div class="modal fade text-left" id="modal-container-990170<?php echo $show['ID_USER'];?>"
                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">
                                                Edit Data User
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" action="">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="NAMA_USER"
                                                        value="<?php echo $show['NAMA_USER']; ?>" />
                                                    <input type="hidden" class="form-control" name="ID_USER"
                                                        value="<?php echo $show['ID_USER']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>NIK / NO. KTP</label>
                                                    <input type="text" class="form-control" name="NIK"
                                                        value="<?php echo $show['NIK']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="USERNAME"
                                                        value="<?php echo $show['USERNAME']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        Password
                                                    </label>
                                                    <input type="password"  class="form-control" id="form-control1" name="PASSWORD"
                                                        value="<?php echo $show['PASSWORD']; ?>" />
                                                        <input type="checkbox" class="form-checkbox"  id="show-hide" name="show-hide" value="" />
                                                        <label for="show-hide">Show password</label>
                                                        
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    
                                                        <input name="JENIS_KELAMIN" type="radio" value="Laki-laki" <?php if($show['JENIS_KELAMIN']=='Laki-laki'){echo 'checked';}?> />
                                                            Laki-Laki  
                                                        <input type="radio" name="JENIS_KELAMIN" value="Perempuan" <?php if($show['JENIS_KELAMIN']=='Perempuan'){echo 'checked';}?> />
                                                            Perempuan

                                                   

                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="EMAIL"
                                                        value="<?php echo $show['EMAIL']; ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="ALAMAT_USER"
                                                        value=""><?php echo $show['ALAMAT_USER']; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="form-control btn btn-primary"
                                                        name="updateuser" />
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <?php 
        include "admin/koneksi.php";
        
            if (isset($_POST["updateuser"])) {
                $ID_USER = $_POST['ID_USER'];
                $NIK = $_POST['NIK'];
                $NAMA_USER = $_POST['NAMA_USER'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
                $EMAIL = $_POST['EMAIL'];
                $ALAMAT_USER = $_POST['ALAMAT_USER'];
                $query = mysqli_query($mysqli, "UPDATE user SET NIK='$NIK',NAMA_USER='$NAMA_USER', USERNAME='$USERNAME', ALAMAT_USER='$ALAMAT_USER', JENIS_KELAMIN='$JENIS_KELAMIN', EMAIL='$EMAIL' WHERE ID_USER='$ID_USER'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    // echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'profile.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>

            <hr>
            <h3 class="text-center">Data Pesan Tiket</h3>
            <div class=" d-md-flex d-block">
                <div class="image order-2" style="margin:0px auto;">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ID Proses</th>
                                    <th>ID User</th>
                                    <th>ID Event</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Total Bayar</th>
                                    <th>Tanggal Beli</th>
                                    <th>Status</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM proses WHERE ID_USERP = $_SESSION[ID_USER]");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM proses WHERE ID_USERP = $_SESSION[ID_USER]");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        # code...
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_PROSES']; ?></td>
                                    <td><?php echo $show['ID_USERP']; ?></td>
                                    <td><?php echo $show['ID_EVENTP']; ?></td>
                                    <td><?php echo $show['JUMLAH_TIKET']; ?></td>
                                    <td><?php echo $show['TOTAL_BAYARP']; ?></td>
                                    <td><?php echo $show['TANGGAL_BELIP']; ?></td>
                                    <td><?php echo $show['STATUSP']; ?></td>
                                    <td><?php echo $show['KODE_PEMBAYARANP']; ?></td>

                                    <td>
                                        <?php
                                            if($show['GAMBARP']!=NULL){

                                            
                                        ?>
                                        <p><b>Terkirim</b></p>
                                        <?php 
                                            }else{

                                            
                                        ?>
                                        <a id="modal-990160"
                                            href="#modal-container-990160<?php echo $show['ID_PROSES']; ?>"
                                            role="button" data-toggle="modal"><button class=""
                                                onclick="myFunction()">Upload bukti pembayaran</button></a>
                                        <?php
                                            }
                                        ?>
                                    </td>

                                </tr>
                                <div class="modal fade" id="modal-container-990160<?php echo $show['ID_PROSES'];?>"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Upload Bukti Pembayaran
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                    <input type="hidden" class="form-control" name="ID_PROSES"
                                                            value="<?php echo $show['ID_PROSES']; ?>" />
                                                        <label>Upload File</label>
                                                        <input type="file" class="form-control" name="file[]" multiple required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="updateproses" />
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <?php }
                                     }
                                      ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <h3 class="text-center">Data Riwayat Pesan Tiket</h3>
            <div class=" d-md-flex d-block">
                <div class="image order-2" style="margin:0px auto;">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ID User</th>
                                    <th>ID Event</th>
                                    <th>Jumlah Beli</th>
                                    <th>Total Bayar</th>
                                    <th>Tanggal Beli</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM membeli WHERE ID_USER = $_SESSION[ID_USER]");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM membeli WHERE ID_USER = $_SESSION[ID_USER]");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        # code...
                                     ?>
                                <tr>

                                    
                                    <td><?php echo $show['ID_USER']; ?></td>
                                    <td><?php echo $show['ID_EVENT']; ?></td>
                                    <td><?php echo $show['JUMLAH_BELI']; ?></td>
                                    <td><?php echo $show['TOTAL_BAYAR']; ?></td>
                                    <td><?php echo $show['TANGGAL_BELI']; ?></td>
                                    <td><?php echo $show['KODE_PEMBAYARAN']; ?></td>
                                    <td><?php echo $show['STATUS']; ?></td>
                                </tr>
                                
                                <?php }
                                     }
                                      ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>

    </section>
    <?php } ?>
    </div>

    <!-- END section -->


    <!-- END section -->


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
    <?php 
        include "admin/koneksi.php";
        if (isset($_POST["updateproses"])) {
            $nama_folder="admin/images/upload";
            $ID_PROSES = $_POST['ID_PROSES'];
            $code = $_FILES['file']['error'];
            $jumlah = count($_FILES['file']['name']);
            $jumlah = count($_FILES['file']['name']);
            if ($jumlah > 0) {
                $file = array();
                for ($i=0; $i < $jumlah; $i++) { 
                    $file_name = $_FILES['file']['name'][$i];
                    $tmp_name = $_FILES['file']['tmp_name'][$i];	
                    $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                    // $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";			
                    move_uploaded_file($tmp_name, "admin/images/".$file_name);
                    $file[$i] = $file_name; 								
                }
                $query = mysqli_query($mysqli, "UPDATE proses SET GAMBARP='$file[0]', STATUSP='Sedang Di proses' WHERE ID_PROSES='$ID_PROSES'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                    echo "<script>document.location = 'profile.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                 }			
            }
            else{
                echo "<script type='text/javascript'> alert('Gambar Tidak Ada') </script>";
                echo '<script>window.history.back()</script>';
            }
        }

        ?>

 
 

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>

    
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#form-control1').attr('type','text');
			}else{
				$('#form-control1').attr('type','password');
			}
		});
	});
</script>



</body>

</html>