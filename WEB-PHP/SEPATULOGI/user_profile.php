<?php 

    session_start();

    if (!isset($_SESSION['id_user'])) {
        header("Location: login.php");
    }
    include 'admin/koneksi.php';
    $detail_us = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
    $datashow_us = mysqli_fetch_array($detail_us);

    $detail_pt = mysqli_query($mysqli, "SELECT * from post WHERE user_post='$_SESSION[id_user]'");
    $datashow_pt = mysqli_fetch_array($detail_us);

 ?>
<!-- <?php 
      include "admin/koneksi.php"; 

      $data = mysqli_query($mysqli, " SELECT * FROM post WHERE id_post='$_GET[id_post]'");
      $datashow = mysqli_fetch_array($data); 
      $kat = $datashow['kategori_post'];

      $user = $datashow['user_post'];
      $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
      $tampil2 = mysqli_fetch_array($qq2);
  ?> -->
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
            <dd>
              <a id="modal-990160" href="#modal-container-990170<?php echo $datashow_us['id_user']; ?>" role="button" data-toggle="modal">Edit</a>
              <div class="modal fade text-left" id="modal-container-990170<?php echo $datashow_us['id_user'];?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                          <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $datashow_us['nama_lengkap']; ?>" />
                          <input type="hidden" class="form-control" name="id_user" value="<?php echo $datashow_us['id_user']; ?>" />
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" name="username" value="<?php echo $datashow_us['username']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label>
                            Password
                          </label>
                          <input type="password" class="form-control" name="password" value="<?php echo $datashow_us['password']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label><br>
                          <?php 
                          if ($datashow_us['jenis_kelamin'] == 'Laki-laki') {
                            echo '<input type="radio" class="" name="jenis_kelamin" value="Laki-laki" checked/> Laki-laki <input type="radio" class="" name="jenis_kelamin" value="Perempuan" /> Perempuan ';
                          }else if ($datashow_us['jenis_kelamin'] == 'Perempuan'){
                            echo '<input type="radio" class="" name="jenis_kelamin" value="Laki-laki" /> Laki-laki <input type="radio" class="" name="jenis_kelamin" value="Perempuan" checked/> Perempuan';
                          }else{
                            echo '<td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>';
                          }
                          ?>

                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $datashow_us['email']; ?>"/>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" name="alamat" value=""><?php echo $datashow_us['alamat']; ?></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" name="updateuser" />
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
            <a id="modal-990150" href="#modal-container-990150" role="button" data-toggle="modal" class="text-center"><button class=" btn btn-primary">Posting Artikel</button></a><br>
          </div>  
        </div>  
      <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE user_post='$_SESSION[id_user]'");
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
                <a class="text-dark" href="user_detail.php?id_post=<?php echo $show['id_post']; ?>"><?php echo $show['judul_post']; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $show['tgl_post']; ?></div>
              <div class="mb-1 text-muted"><a id="modal-990160" href="#modal-container-990160<?php echo $show['id_post']; ?>" role="button" data-toggle="modal">Edit | </a> <a href="user_delete_post.php?id_post=<?php echo $show['id_post']; ?>">Delete</a></div>
              <div class="mb-1 text-muted">by <a href="user_detailUser.php?user_post=<?php echo $tampil2['id_user']; ?>"><?php echo $tampil2['username']; ?></a> </div>
              <p class="card-text mb-auto"><?php echo substr($show['isi_post'],0,100); ?>...</p>
              <a href="user_detail.php?id_post=<?php echo $show['id_post']; ?>">Read more..</a>
              
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block img" src="admin/<?php echo $show['nama_file']?>" alt="Card image cap" height="200px" width="auto">
          </div>
        </div>
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
    <div class="modal fade" id="modal-container-990150" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">
              Tambah Data Post
            </h5> 
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label>Judul Post</label>
                <input type="text" class="form-control" name="judul_post" />
              </div>
              <div class="form-group">
                <label>Kategori Post</label>
                <select name="kategori" class="form-control">


                  <?php 

                  $query = mysqli_query($mysqli, "SELECT * FROM kategori");
                  $hasil = mysqli_query($mysqli, "SELECT * FROM kategori");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                  $row = mysqli_num_rows($hasil);
                  if ($row==0) {
                    echo "Data kosong!";
                  }else{


                    while ($show = mysqli_fetch_array($query)) {
                                                            # code...
                     ?>
                     <option value="<?php echo $show['id_kategori']; ?>"><?php echo $show['nama_kategori']; ?></option>

                     <?php }
                   }
                   ?>
                 </select>
               </div>
               <div class="form-group">
                <label>Isi Post</label>
                <textarea class="form-control ckeditor" name="isipost"></textarea>
              </div>
              <div class="form-group">
                <label>Upload File</label>
                <input type="file" class="form-control" name="file" />
              </div>
              <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" name="addpost" />
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
  </div>
  <?php 
  include "admin/koneksi.php";
  if (isset($_POST["addpost"])) {
    $judul_post = $_POST['judul_post'];
    $tgl_post = date('Y-m-d H:i:s');
    $kategori = $_POST['kategori'];
    $isipost = strip_tags($_POST['isipost']);
    $code = $_FILES['file']['error'];
    if ($code === 0) {
      $nama_folder="images/upload";
      $nama_file = $_FILES['file']['name'];
      $file_ext   = pathinfo($nama_file, PATHINFO_EXTENSION);
      $path = "$nama_folder/$judul_post.$file_ext";
      $path_move = "admin/$nama_folder/$judul_post.$file_ext";
      $file_tmp   = $_FILES['file']['tmp_name'];
      $tipe_file=array("image/jpeg", "image/gif", "image/png");
      if (!in_array($_FILES['file']['type'], $tipe_file)) {
        echo "<script type='text/javascript'> alert('Cek kembali ekstensi file anda (*.jpeg, *.jpg, *.gif, *.png)') </script>";
        echo "<script>document.location = 'addpost.php';</script>";
      }else{
        $move = move_uploaded_file($file_tmp, $path_move);
        $query = mysqli_query($mysqli, "INSERT INTO post VALUES(NULL, '$judul_post', '$tgl_post', '$kategori', '$isipost', '$path', '".$_SESSION['id_user']."' )") or die ("Sql salah : ".mysqli_error($mysqli));
        if($query){
          echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
          echo "<script>document.location = 'user_profile.php';</script>";
        }else{
          echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
          echo '<script>window.history.back()</script>';
        }
      }   
    }else if ($code===4) {
      echo "Upload gagal karena tidak ada yang di upload";
    }




  }

  ?>
  <?php 
  include "admin/koneksi.php";

  if (isset($_POST["updateuser"])) {
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $query = mysqli_query($mysqli, "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat' WHERE id_user='$id_user'") or die ("Sql salah : ".mysqli_error($mysqli));
    if($query){
      echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
      echo "<script>document.location = 'user_profile.php';</script>";
    }else{
      echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
      echo '<script>window.history.back()</script>';
    }
  }

  ?>
  <?php 
    include "admin/koneksi.php";

    if (isset($_POST["updatepost"])) {
      $id_post = $_POST['id_post'];
      $judul_post = $_POST['judul_post'];
      $isi_post = strip_tags($_POST['isipost']);
      $query = mysqli_query($mysqli, "UPDATE post SET judul_post='$judul_post', isi_post='$isi_post' WHERE id_post='$id_post'") or die ("Sql salah : ".mysqli_error($mysqli));
      if($query){
        echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
        echo "<script>window.history.back()</script>";
      }else{
        echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
        echo '<script>window.history.back()</script>';
      }
    }

    ?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 