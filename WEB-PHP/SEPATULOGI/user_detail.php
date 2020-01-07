<?php 

    session_start();

    if (!isset($_SESSION['id_user'])) {
        header("Location: login.php");
    }
    include 'admin/koneksi.php';
    $detail_us = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
    $datashow_us = mysqli_fetch_array($detail_us);

 ?>
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
      $("#img_02").imageLens({ lensSize: 150 });
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
      <hr>
    </div>
    </div>
    
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $datashow['judul_post']; ?></h2>
            <p class="blog-post-meta"><?php echo $datashow['tgl_post']; ?> by <a href="user_detailUser.php?user_post=<?php echo $datashow['user_post']; ?>"><?php echo $tampil2['username']; ?></a></p>
            <?php 
              if ($datashow['user_post'] == $datashow_us['id_user']) {
              
              ?>
              <p class="blog-post-meta"><a href="user_profile.php">Edit | </a><a href="user_delete_post.php?id_post=<?php echo $datashow['id_post']; ?>">Delete</a></p>
              <?php } ?>
            <hr>
            <img src="admin/<?php echo $datashow['nama_file'];?>" class="img img-responsive text-center" height="500px" width="auto" id="img_02">
            <p><?php echo $datashow['isi_post']; ?></p>
          </div><!-- /.blog-post -->
          <div class="modal fade" id="modal-container-990160<?php echo $show['id_post']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                  Edit Data Post
                </h5> 
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Judul Post</label>
                    <input type="text" class="form-control" name="judul_post" value="<?php echo $show['judul_post']; ?>"/>
                    <input type="hidden" class="form-control" name="id_post" value="<?php echo $show['id_post']; ?>" />
                  </div>
                  <div class="form-group">
                    <label>Isi Post</label>
                    <textarea class="form-control ckeditor" name="isipost"><?php echo $show['isi_post']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" name="updatepost" />
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
              <a href="user_detail.php?id_post=<?php echo $show['id_post']; ?>">
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