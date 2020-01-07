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
                                            <li class="active"><a href="wisata.php">Wisata</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/malang.jpg)">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up">Wisata Malang Raya</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Wisata Alam Maupun Wisata
                        Hiburan di Malang Raya</p>
                </div>
            </div>
            <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <!-- END section -->


    <section class="section bg-light post">
        <div class="container">
        <div class="row">
          <div class="col-md-8">
          <?php 
				if (isset($_GET['cari'])) {
					$cari = $_GET['cari'];

				
				?>
              <h4 style="float: left;margin-right: 10px">Hasil Pencarian Untuk : </h4>
              <h4 style="float: left;margin-right: 10px"> <a href="wisata.php" style="color :deepskyblue">Pariwisata</a></h4>
              <h4><i class="fa fa-arrow-right"></i> <?php echo $cari?></h4>
              <?php } ?>
          </div>
          
        </div><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <?php 
          if (isset($_GET['cari'])) {
						$cari = $_GET['cari'];

						$postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost WHERE NAMA_WISATAPOST like '%$cari%'");
					} else {
            if (isset($_GET['ID_WISATA'])) {
              $wisata = $_GET['ID_WISATA'];
    
              $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost where ID_WISATA='$wisata'");
          }else{
            $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost");
          }
          }

				
        
      
      while ($show = mysqli_fetch_array($postWisata)) {
        ?>
                        <div class="col-md-6">
                            <div class="media media-custom d-block mb-4">
                                <a href="deskripsi.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA'];?>"
                                    class="mb-4 d-block"><img src="admin/images/<?php echo $show['FOTO_WISATAPOST']; ?>"
                                        style="padding: 15px;width : 350px;height : 235px" alt="Image placeholder"
                                        class="img-fluid"></a>
                                <div class="media-body">
                                    <span class="meta-post"><?php echo date('d F Y', strtotime($show['TANGGAL_WISATAPOST']));?></span>
                                    <h2 class="mt-0 mb-3"><a
                                            href="deskripsi.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA'];?>"><?php echo $show['NAMA_WISATAPOST'];?></a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <?php } ?>



                    </div>


                </div>
                <!-- END content -->
                <div class="col-md-4">
                    <div class="row">

                        <div class="col-md-11 ml-auto">


                            <form action="wisata.php" method="GET" class="sidebar-search">
                                <div class="form-group">
                                    <span class="fa fa-search icon-search"></span>
                                    <input name="cari" type="text" class="form-control search-input"
                                        placeholder="Search...">
                                </div>
                            </form>

                            <div class="side-box">
                                <h2 class="heading">Terpopuler</h2>
                                <ul class="post-list list-unstyled">
                                    <?php
                  $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost limit 5");
                  while ($show = mysqli_fetch_array($postWisata)) {

                  ?>
                                    <hr>
                                    <li>

                                        <a href="deskripsi.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA'];?>"
                                            class="d-flex">
                                            <span class="mr-3 image"><img style="width: 135px; height: auto"
                                                    src="admin/images/<?php echo $show['FOTO_WISATAPOST']; ?>"
                                                    alt="Image placeholder" class="img-fluid"></span>
                                            <div>
                                                <span class="meta"><?php echo date('F d, Y', strtotime($show['TANGGAL_WISATAPOST']));?></span>
                                                <h3><?php echo $show['NAMA_WISATAPOST'];?></h3>
                                            </div>
                                        </a>
                                    </li>

                                    <?php } ?>

                                </ul>
                            </div>

                            <div class="side-box">
                                <h2 class="heading">Kategori</h2>
                                <ul class="post-categories list-unstyled">
                                    <?php 
                     
                        $postWisata = mysqli_query($mysqli,"SELECT * FROM wisata");
                      
        
      
      while ($show = mysqli_fetch_array($postWisata)) {
        $hitung = mysqli_query($mysqli, "SELECT * FROM wisatapost WHERE ID_WISATA = '$show[ID_WISATA]' ");

        ?>
                                    <li><a href="wisata.php?ID_WISATA=<?php echo $show['ID_WISATA'];?>"><?php echo $show['JENIS_WISATA'];?>
                                            <span class="count">(<?php echo mysqli_num_rows($hitung); ?>)</span></a>
                                    </li>

                                    <?php } ?>

                                </ul>
                            </div>

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