<?php 
      include "admin/koneksi.php"; 

      $data = mysqli_query($mysqli, " SELECT * FROM post WHERE id_post='$_GET[id_post]'");
      $datashow = mysqli_fetch_array($data); 
      $kat = $datashow['kategori_post'];

      $user = $datashow['user_post'];
      $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
      $tampil2 = mysqli_fetch_array($qq2);
  ?>
<html> 
<head> 
  <title>Sepatulogi</title> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/jquery.imageLens.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript">
    $(function () {
      $("#img_01").imageLens();
      $("#img_02").imageLens({ lensSize: 200 });
    }); 
  </script>
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
        <div class="col-md-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $datashow['judul_post']; ?></h2>
            <p class="blog-post-meta"><?php echo $datashow['tgl_post']; ?> by <a href="detailUser.php?user_post=<?php echo $tampil2['id_user']; ?>"><?php echo $tampil2['username']; ?></a></p>
            <hr>
            <img src="admin/<?php echo $datashow['nama_file'];?>" class="img img-responsive text-center" height="500px" width="auto" id="img_02">
            <p><?php echo $datashow['isi_post']; ?></p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic"><strong>About</strong></h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
         
          
          <div class="card">

            <h5 class="card-header">
              Most Popular Post
            </h5>
            <?php 
            include 'admin/koneksi.php';
            $hasil = mysqli_query($mysqli, "SELECT * FROM post order by rand() limit 6");
            $row = mysqli_num_rows($hasil);
            if ($row==0) {
              echo "Data kosong!";
            }else{
              while ($show = mysqli_fetch_array($hasil)) {
                $id_post = $show['id_post'];

                ?>
            <div class="card-footer">
              <a href="detail.php?id_post=<?php echo $show['id_post']; ?>">
              <p class="text-muted">
                <?php echo $show['judul_post']; ?>
              </p></a>
            </div>
            <?php 
          }
        }
        ?>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      <hr class="featurette-divider">
        <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main><!-- /.container -->

<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 