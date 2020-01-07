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

      $data = mysqli_query($mysqli, " SELECT * FROM tawar WHERE id_user='$_SESSION[id_user]'");
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
          <a class="blog-header-logo text-dark" href="user_home.php"><img src="admin/images/bangguitar.png" height="150px" width="auto"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        <?php
              include("autentikasi.php");
            ?>
        </div>
      </div>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header text-center">BangGuitar.com</h1>
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
         <a class="p-2 text-muted" href="user_profile.php"><?php echo $datashow_us['username']; ?>, Profile</a>
         <?php
              include("autentikasi2.php");
            ?>
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
          <h2 class="text-center">Data Proses Lelang</h2><br>
          <div class="text-center pb-3">
          <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Urutan</th>
                                        <th>Judul Post</th>
                                        <th>Waktu Tawar</th>
                                        <th>Harga Tawar</th>
                                        <th>Penawar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $query = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post] ORDER BY waktu_tawar DESC");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post]");
                                    // $query = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE user_post=$_SESSION[id_user] AND DATE_ADD(p.tgl_post, INTERVAL p.jatuh_tempo DAY) > CURRENT_DATE");
                                    // $hasil = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE user_post=$_SESSION[id_user] AND DATE_ADD(p.tgl_post, INTERVAL p.jatuh_tempo DAY) > CURRENT_DATE");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    $nomor=1;
                                    if ($row==0) {
                                        echo "Penawaran masih kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {

                                        $user = $show['id_user'];
                                        $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
                                        $tampil2 = mysqli_fetch_array($qq2);
                                        if($show['id_user']==$_SESSION['id_user']){

                                        
                                     ?>
                                    <tr>

                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $show['judul_post']; ?></td>
                                        <td><?php echo $show['waktu_tawar']; ?></td>
                                        <td><?php echo $show['harga_tawar']; ?></td>
                                        <td><?php echo $tampil2['username']; ?></td>

                                    </tr>
                                    <?php }
                                      $nomor++;}
                                     }
                                      ?>
                                </tbody>
                            </table>
                        </div>
          </div>  
        </div>  
       
       <br>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <h2 class="text-center">Data Menang Lelang</h2><br>
          <div class="text-center pb-3">
          <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Urutan</th>
                                        <th>Judul Post</th>
                                        <th>Waktu Tawar</th>
                                        <th>Harga Tawar</th>
                                        <th>Penawar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    // $query = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post] ORDER BY waktu_tawar DESC");
                                    // $hasil = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post]");
                                    // $query = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE user_post=$_SESSION[id_user] AND DATE_ADD(p.tgl_post, INTERVAL p.jatuh_tempo DAY) > CURRENT_DATE");
                                    // $hasil = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE user_post=$_SESSION[id_user] AND DATE_ADD(p.tgl_post, INTERVAL p.jatuh_tempo DAY) > CURRENT_DATE");
                                    $query = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post] GROUP BY t.id_post ORDER BY t.id_post, waktu_tawar DESC LIMIT 1");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post] GROUP BY t.id_post ORDER BY t.id_post, waktu_tawar DESC LIMIT 1");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    $nomor=1;
                                    if ($row==0) {
                                        echo "Data masih kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {

                                        $user = $show['id_user'];
                                        $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
                                        $tampil2 = mysqli_fetch_array($qq2);
                                        if($show['id_user']==$_SESSION['id_user']){

                                        
                                     ?>
                                    <tr>

                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $show['judul_post']; ?></td>
                                        <td><?php echo $show['waktu_tawar']; ?></td>
                                        <td><?php echo $show['harga_tawar']; ?></td>
                                        <td><?php echo $tampil2['username']; ?></td>

                                    </tr>
                                    <?php }
                                      $nomor++;}
                                     }
                                      ?>
                                </tbody>
                            </table>
                        </div>
          </div>  
        </div>  
       
       <br>
      </div>
      <hr>

        <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main><!-- /.container -->
    
  </div>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 