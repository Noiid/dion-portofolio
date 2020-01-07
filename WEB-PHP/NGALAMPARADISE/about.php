<!doctype html>
<html lang="en">
  <head>
    <title>Pariwisata dan Kebudayaan di Kota Malang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

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
                        <li ><a href="index.php">Home</a></li>
                        <?php
                        if (isset($_SESSION['ID_USER'])) {
                        ?>

                        <li><a href="profile.php">Profile</a></li>

                        <?php } ?>
                        <li><a href="wisata.php">Wisata</a></li>
                        <li><a href="budaya.php">Budaya</a></li>
                        <li><a href="event/index.php">Event</a></li>
                        <li class="active"><a href="about.php">Tentang Kami</a></li>
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

    <section class="site-hero overlay page-inside" style="background-image: url(img/bg.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Tentang Pengembang Website.</p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->

    

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Ngalam Paradise</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">
            Ngalam Paradise adalah sebuah website yang
             menyuguhkan informasi mengenai tempat wisata, seni, dan kebudayaan 
            yang berada di Malang dengan fitur yand dapat mengetahui rute ke tempat objek wisata. 
            Diharapkan dengan adanya system informasi 
             ini masyarakat Malang maupun luar dapat terbantu untuk mengetahui informasi
              mengenai objek wisata yang berada di  Malang, budaya di Malang, 
              kesenian yang ada di Malang, maupun event-event yang akan di selenggarakan di Malang. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" style="width : 800px; margin-left: auto;margin-right: auto" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <img src="img/bg.jpg" style="width: 1000px ; height: 500px" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/topeng.jpg" style="width: 1000px ; height: 500px" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="img/malang.jpg" style="width: 1000px ; height: 500px" alt="Image placeholder" class="img-fluid">
              </div>
              
            </div>
            <!-- END slider -->
          </div>

          <div class="col-md-12 text-center"><a href="#" class="">View More Photos</a></div>
        
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section blog-post-entry bg-pattern">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Pengembang Website</h2>
          </div>
        </div>
        <div class="row">
         
          

          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="https://www.instagram.com/dionmaulanaw/?hl=id" class="mb-4 d-block"><img src="img/dion1.png" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="https://www.instagram.com/dionmaulanaw/?hl=id">Dion Maulana W.</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="https://www.instagram.com/rido_ca/?hl=id" class="mb-4 d-block"><img src="img/rido1.png" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="https://www.instagram.com/rido_ca/?hl=id">Ridho Choirul A.</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="https://www.instagram.com/ardi_cenger/?hl=id" class="mb-4 d-block"><img style="margin-bottom: 15px" src="img/ardi1.png" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3"><a href="https://www.instagram.com/ardi_cenger/?hl=id">Hilnanda Ardiansyah</a></h2>
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
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>