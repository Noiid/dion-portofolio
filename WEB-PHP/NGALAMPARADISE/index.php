<?php 
    include 'admin/koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pariwisata dan Kebudayaan di Kota Malang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video.css">
    <script src="main.js"></script>
    <!-- <script type="text/javascript" src="bottom.js"></script> -->


    
    
</head>
<body>
<!-- <div style="top: 0; width: 100%; height: 100%; z-index: -1; display: inline">
 <video src="video/ngalam.mp4" width="100%" height="100%" autoplay>
 </video>
</div> -->
<div class="box">
      <video src="video/ngalam.mp4" autoplay loop="true"></video>
    </div>
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
          
            
            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
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
  <!-- ini background -->
    <section class="site-hero overlay" >
      
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Selamat Datang di  <br> <em>Ngalam Paradise</em> </h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">"Semangatkan Liburanmu dengan Ngalam Paradise"</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="#bottom" class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block bottom">Explore The Beauty of Ngalam</a> </p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    <!-- <section class="section visit-section"id="bottom">
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
          </div>
        </div>
        
      </div>
    </section> -->
    <!-- END section -->

    <section class="section slider-section">
      <div class="container" id="bottom1">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Informasi Tentang Tempat Liburan di Malang</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">
            Malang raya adalah salah satu destinasi wisata paling populer di Indonesia. 
            Wisata Malang sendiri tak akan habis jika kita eksplorasi satu persatu. 
            Baik itu wisata Malang dari sisi alam, wisata edukasi, wisata modern, 
            wisata Malang akan memikat Anda untuk kembali sekali Anda menjejakkan kaki di kota dingin ini. 
            </p>
          </div>
        </div>
        <div class="row" >
          <div class="col-md-12" style="">
            <div class="home-slider major-caousel owl-carousel mb-5" style="width : 900px; margin-left: auto;margin-right: auto" data-aos="fade-up" data-aos-delay="200">
            
            <?php 
				
        $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost limit 5");
      
      while ($show = mysqli_fetch_array($postWisata)) {
        ?>
            <div class="slider-item">
                <img style="height: 600px" src="admin/images/<?php echo $show['FOTO_WISATAPOST']; ?>" alt="Image placeholder" class="img-fluid">
              </div>
              <?php } ?>

              
            </div>
            <!-- END slider -->
          </div>

          
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container" id="bottom">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Tempat Liburan Terfavorite di Malang</h2>
            <p class="lead" data-aos="fade-up">Berikut adalah tempat-tempat wisata terfavorite di Malang.</p>
          </div>
        </div>
        <div class="row">
        <?php 
				
        $postWisata = mysqli_query($mysqli,"SELECT * FROM wisatapost LIMIT 3");
      
      while ($show = mysqli_fetch_array($postWisata)) {
        ?>
          <div  class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4" style="padding: 15px">
              <a href="deskripsi.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA'];?>" class="mb-4 d-block"><img style="height: 230px;width: auto" src="admin/images/<?php echo $show['FOTO_WISATAPOST']; ?>" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post"><?php echo date('d F Y', strtotime($show['TANGGAL_WISATAPOST']));?></span>
                <h2 class="mt-0 mb-3"><a href="deskripsi.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA'];?>"><?php echo $show['NAMA_WISATAPOST'];?></a></h2>
              </div>
            </div>

          </div>
          <?php } ?>
          
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          
          
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> Jl. Kalpatarak Gang 152 No 123, Malang 65432</span></p>
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
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="bottom.js"></script>

    <!-- <script type="text/javascript">
				$('.bottom').click(function(){
				$("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
 				return false; 
 				});
        </script> -->
        

   
</body>
</html>