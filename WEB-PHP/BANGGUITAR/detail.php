<?php 

                      session_start();
                      
                  
      include "admin/koneksi.php"; 

      $year = 2019;
      $month = 7;
      $day = 1;
      $hour = 1;
      $min = 1;
      $sec = 1;
    
      $target = mktime($hour, $min, $sec, $month, $day, $year);
      $current = time();
      $difference = $target - $current;
    
      $rDay = floor($difference/60/60/24);
      $rHour = floor(($difference-($rDay*60*60*24))/60/60);
      $rMin = floor(($difference-($rDay*60*60*24)-$rHour*60*60)/60);
      $rSec = floor(($difference-($rDay*60*60*24)-($rHour*60*60))-($rMin*60));

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
    $(function() {
        $("#img_01").imageLens();
        $("#img_02").imageLens({
            lensSize: 200
        });
    });
    </script>
     <script type="text/javascript">
  var days = <?php echo $rDay; ?>  
  var hours = <?php echo $rHour; ?>  
  var minutes = <?php echo $rMin; ?>  
  var seconds = <?php echo $rSec; ?>  

  function countdown(){
    seconds--;
    if (seconds < 0){
      minutes--;
      seconds = 59
    }
    if (minutes < 0){
      hours--;
      minutes = 59
    }
    if (hours < 0){
      days--;
      hours = 23
    }
    
    function pad(n) {
      if ( n < 10 && n >= 0 ) {
        return "0" + n;
      } else {
        return n;
      }
    }
    
    document.getElementById("countdown").innerHTML = pad(days)+" Hari :"+pad(hours)+" Jam :"+pad(minutes)+" Menit :"+pad(seconds)+" Detik";
    setTimeout ( "countdown()", 1000 );
    
  }
</script>
</head>

<body onload="countdown();">

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">

                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="index.php"><img src="admin/images/bangguitar.png"
                            height="150px" width="auto"></a>
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
                <a class="p-2 text-muted"
                    href="detailMenu.php?id_kategori=<?php echo $show['id_kategori']; ?>"><?php echo $show['nama_kategori']; ?></a>
                <?php 
          }
        }
         ?>
                <a class="p-2 text-muted" href="about.php">About</a>
                <a class="p-2 text-muted" href="contact.php">Contact</a>
                <?php
              include("autentikasi2.php");
            ?>
            </nav>
            <hr>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-7 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $datashow['judul_post']; ?></h2>
                    <p class="blog-post-meta"><?php echo $datashow['tgl_post']; ?> by <a
                            href="detailUser.php?user_post=<?php echo $tampil2['id_user']; ?>"><?php echo $tampil2['username']; ?></a>
                    </p>
                    <hr>
                    <img src="admin/<?php echo $datashow['nama_file'];?>" class="img img-responsive text-center"
                        height="450px" width="auto" id="img_02"><br><br>
<h1 id="countdown">tes</h1>
                    <strong>Harga lelang mulai : </strong> Rp.<?php echo $datashow['harga_lelang'] ?><br>
                    <strong>Harga kelipatan : </strong> Rp.<?php echo $datashow['harga_kelipatan'] ?><br>
                    <strong>Deskripsi : </strong>
                    <p><?php echo $datashow['isi_post']; ?></p>
                    <form action="" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
                        <input type="hidden" name="id_post" value="<?php echo $datashow['id_post']; ?>">
                        <input type="hidden" name="judul_post" value="<?php echo $datashow['judul_post']; ?>">
                        <?php
                          $quer = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post] ORDER BY waktu_tawar DESC");
                          $hasi = mysqli_query($mysqli, "SELECT * FROM tawar t INNER JOIN post p WHERE t.id_post=$datashow[id_post]");
                          $ro = mysqli_num_rows($hasi);
                          $harg = $datashow['harga_lelang'] + ($datashow['harga_kelipatan']*($ro+1));
                        ?>
                        <input type="hidden" name="harga_tawar" value="<?php echo $harg; ?>">
                        <input type="submit" class="btn btn-primary" name="tawar" value="Tawar - <?php echo $harg; ?>">
                    </form>

                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->

            <aside class="col-md-5 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic"><strong>About</strong></h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                        purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
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
                            </p>
                        </a>
                    </div>
                    <?php 
          }
        }
        ?>
                </div><br>
                <div class="card p-2">
                    <div class="col-lg-12">
                        <h5>Proses Lelang</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
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
                                     ?>
                                    <tr>

                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $show['judul_post']; ?></td>
                                        <td><?php echo $show['waktu_tawar']; ?></td>
                                        <td><?php echo $show['harga_tawar']; ?></td>
                                        <td><?php echo $tampil2['username']; ?></td>

                                    </tr>
                                    <?php $nomor++;}
                                     }
                                      ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->
        <hr class="featurette-divider">
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main><!-- /.container -->

    <?php
      include "admin/koneksi.php";

      
        if (isset($_POST["tawar"])) {
          if(!isset($_SESSION['id_user'])){
            echo "<script type='text/javascript'> alert('Anda harus Login terlebih dahulu') </script>";
            echo "<script>document.location = 'login.php';</script>";
          }else{
            $id_user = $_POST['id_user'];
            $id_post = $_POST['id_post'];
            $judul_post = $_POST['judul_post'];
            $harga_taw = $_POST['harga_tawar'];
            $waktu_taw = date("Y-m-d h:i:s");
            $querytawar = mysqli_query($mysqli, "INSERT INTO tawar VALUES('$id_post', '$judul_post', '$waktu_taw','$harga_taw','$id_user')") or die ("Sql salah : ".mysqli_error($mysqli));
            if($querytawar){
              echo "<script type='text/javascript'> alert('Berhasil menawar') </script>";
              echo "<script>document.location = 'user_profile.php'</script>";
            }else{
              echo "<script type='text/javascript'> alert('Maaf menawar !!!') </script>";
              echo '<script>window.history.back()</script>';
            }
          }
          
        }
      

      
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>