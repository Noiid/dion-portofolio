<?php 

    include 'admin/koneksi.php';

    $detail_us = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_GET[user_post]'");
    $datashow_us = mysqli_fetch_array($detail_us);

    $detail_pt = mysqli_query($mysqli, "SELECT * from post WHERE user_post='$_GET[user_post]'");
    $datashow_pt = mysqli_fetch_array($detail_us);

 ?>
<html> 
<head> 
  <title>Sepatulogi</title> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <link rel="stylesheet" type="text/css" href="admin/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="admin/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="admin/ckeditor/style.js"></script>
  <style type="text/css">
    .vl{
      border-left: 2px solid #DFDFDF;
      height: 280px;
      position: absolute;
      left: 50%;
      margin-left: 0px;
      top:0;
      margin-top: 0px;
    }
  </style>
</head> 
<body> 

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php"><img src="admin/images/SEP.png" height="150px" width="auto"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary" href="login.php">Sign in</a>
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
        <a class="p-2 text-muted" href="index.php">Home</a>
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
        <a class="p-2 text-muted" href="detailMenu.php?id_kategori=<?php echo $show['id_kategori']; ?>"><?php echo $show['nama_kategori']; ?></a>
        <?php 
          }
        }
         ?>
         <a class="p-2 text-muted" href="about.php">About</a>
         <a class="p-2 text-muted" href="contact.php">Contact</a>
      </nav>
      <hr>
    </div>
    </div>
    
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-7 blog-main text-right">
          <dl>
            <dt>
              <i class="fa fa-user fa-fw"></i> Username
            </dt>
            <dd>
              <?php echo $datashow_us['username']; ?>
            </dd>
            <dt>
              <i class="fa fa-glide fa-fw"></i> Nama Lengkap
            </dt>
            <dd>
              <?php echo $datashow_us['nama_lengkap']; ?>
            </dd>
            <dt>
              <i class="fa fa-transgender fa-fw"></i> Jenis Kelamin
            </dt>
            <dd>
              <?php echo $datashow_us['jenis_kelamin']; ?> 
            </dd>
            <dt>
              <i class="fa fa-envelope-o fa-fw"></i> Email
            </dt>
            <dd>
              <?php echo $datashow_us['email']; ?>
            </dd>
            <dt>
              <i class="fa fa-map-marker fa-fw"></i> Alamat
            </dt>
            <dd>
              <?php echo $datashow_us['alamat']; ?>
            </dd>
          </dl> 
        </div><!-- /.blog-main -->
        <div class="col-md-1">
          <div class="vl"></div>
        </div>
        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <div class="text-center">
              <?php 
              if ($datashow_us['jenis_kelamin']== 'Laki-laki') {
                echo '<img src="admin/images/male-user.png" class="img img-responsive" height="200px" width="auto">';
              }else{
                echo '<img src="admin/images/female-user.png" class="img img-responsive" height="200px" width="auto">';
              }
            ?>
            </div><br>
            
            
            <p class="mb-0 text-center"><em><?php echo $datashow_us['username']; ?></em></p>
          </div>
         
          
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      <hr>
       <div class="row mb-2">
        <div class="col-md-12">
          <h2 class="text-center">Data Posting</h2><br>
          <div class="text-center pb-3">
          </div>  
        </div>  
      <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE user_post='$_GET[user_post]'");
        $row = mysqli_num_rows($hasil);
        if ($row==0) {
          echo "Data kosong!";
          echo "</div>";
        }else{


          while ($show = mysqli_fetch_array($hasil)) {
            $kat = $show['kategori_post'];
            $qq = mysqli_query($mysqli, "SELECT * FROM kategori WHERE id_kategori='$kat' ");
            $tampil = mysqli_fetch_array($qq);

            $user = $show['user_post'];
            $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
            $tampil2 = mysqli_fetch_array($qq2);
           ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $tampil['nama_kategori']; ?></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="detail.php?id_post=<?php echo $show['id_post']; ?>"><?php echo $show['judul_post']; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $show['tgl_post']; ?></div>
              <div class="mb-1 text-muted">by <a href="detailUser.php?user_post=<?php echo $tampil2['id_user']; ?>"><?php echo $tampil2['username']; ?></a> </div>
              <p class="card-text mb-auto"><?php echo substr($show['isi_post'],0,100); ?>...</p>
              <a href="detail.php?id_post=<?php echo $show['id_post']; ?>">Read more..</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block img" src="admin/<?php echo $show['nama_file']?>" alt="Card image cap" height="200px" width="auto">
          </div>
        </div>
           <?php 
         }
       }
       ?>
       
       <br>
      </div>
      <hr>

        <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main><!-- /.container -->
  </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 