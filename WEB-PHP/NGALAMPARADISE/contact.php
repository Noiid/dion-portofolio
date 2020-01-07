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

                        <li><a href="profile.php">Profile</a></li>

                        <?php } ?>
                                            <li><a href="wisata.php">Wisata</a></li>
                                            <li><a href="budaya.php">Budaya</a></li>
                                            <li><a href="event/index.php">Event</a></li>
                                            <li><a href="about.php">Tentang Kami</a></li>
                                            <li class="active"><a href="contact.php">Kritik dan Saran</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/bg.jpg)">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up">Kontak Kami</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Beri Kami Kritik dan Saran.</p>
                </div>
            </div>
            <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <!-- END section -->


    <section class="section bg-primary contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <form role="form" action="" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Nomor HP</label>
                                <input type="text" name="nomorHp" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Ketik Pesan</label>
                                <textarea name="message" name="message" class="form-control " cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" name="kontak"alue="Kirimkan Pesan" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>

                <?php 
    include "admin/koneksi.php";
    if (isset($_POST["kontak"])) {
      $nama = $_POST['nama'];
      $nomorHp = $_POST['nomorHp'];
      date_default_timezone_set('Asia/Jakarta');
      $tgl_post = date('Y-m-d H:i:s');
      $email = $_POST['email'];
      $message = $_POST['message'];
      $query = mysqli_query($mysqli, "INSERT INTO kontak_us VALUES(NULL,'$nama','$nomorHp','$email', '$message','$tgl_post')") or die ("Sql salah : ".mysqli_error($mysqli));
      if($query){
        echo "<script type='text/javascript'> alert('Berhasil mengirim pesan.') </script>";
        echo "<script>document.location = 'contact.php';</script>";
      }else{
        echo "<script type='text/javascript'> alert('Maaf gagal mengirim pesan !!!') </script>";
        echo '<script>window.history.back()</script>';
      }
    }

    ?>


                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Address:</span> <span> Jl. Kalpatarak Gang 152 No 123, Malang
                                    65432</span></p>
                            <p><span class="d-block">Phone:</span> <span> (+62) 123 45678</span></p>
                            <p><span class="d-block">Email:</span> <span> ngalamparadise@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>

</html>