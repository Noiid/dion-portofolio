<?php 

    session_start();

    if (!isset($_SESSION['id_user'])) {
        header("Location: login.php");
    }
    include 'admin/koneksi.php';
    $detail_us = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
    $datashow_us = mysqli_fetch_array($detail_us);

 ?>
<html> 
<head> 
  <title>Sepatulogi</title> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <link rel="stylesheet" type="text/css" href="admin/css/font-awesome.min.css">

  <script src="js/bootstrap.min.js"></script>
</head> 
<body> 

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="user_home.php"><img src="admin/images/SEP.png" height="150px" width="auto"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        </div>
      </div>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header text-center">Sepatulogi.com</h1>
        <hr>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="user_home.php">Home</a>
        <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM kategori");
        $row = mysqli_num_rows($hasil);
        if ($row==0) {
          echo "Data kosong!";
        }else{


          while ($show = mysqli_fetch_array($hasil)) {
            $link_id = $show['id_kategori'];
           ?>
        <a class="p-2 text-muted" href="user_detailMenu.php?id_kategori=<?php echo $show['id_kategori']; ?>"><?php echo $show['nama_kategori']; ?></a>
        <?php 
          }
        }
         ?>
         <a class="p-2 text-muted" href="user_about.php">About</a>
         <a class="p-2 text-muted" href="user_contact.php">Contact</a>
         <a class="p-2 text-muted" href="user_profile.php"><?php echo $datashow_us['username']; ?>, Profile</a>
         <a class="p-2 text-muted" href="user_logout.php">Logout</a>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <img src="admin/images/SEP2.png" height="300px" width="auto"><br><br><br><br>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <h3 class="text-center">
        Contact Us
      </h3>
      <blockquote class="blockquote">
        <p class="mb-0">
          <strong>Sepatulogi</strong>
        </p>
        <footer class="blockquote-footer">
          Kami akan memberikan layanan yang dapat diandalkan yang memberikan informasi tentang sepatu yang sangat aktual, sangat terkini, dan sangat berpengalaman.
        </footer>
      </blockquote>
      <dl>
        <dt>
          <i class="fa fa-phone fa-fw"></i> Telepon
        </dt>
        <dd>
          (0341) 33409112
        </dd>
        <dt>
          <i class="fa fa-envelope-o fa-fw"></i> Email
        </dt>
        <dd>
          Sepatulogi29@gmail.com
        </dd>
        <dt>
          <i class="fa fa-facebook fa-fw"></i> Facebook
        </dt>
        <dd>
          Sepatulogi 
        </dd>
        <dt>
          <i class="fa fa-twitter fa-fw"></i> Twitter
        </dt>
        <dd>
          @Sepatulogi_29
        </dd>
      </dl> 
      <address>
         <i class="fa fa-map-marker fa-fw"></i><strong>Sepatulogi, Inc.</strong><br /> 175 Jl. Prof. Moch. Yamin, Blok 3<br /> Malang, Klojen 65118<br /> </address>
      </div>
      

    </div>
        
        

        
        <hr class="featurette-divider">
        <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </div>
    
        


 </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 