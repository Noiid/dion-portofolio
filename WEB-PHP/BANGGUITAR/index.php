<?php 

                      session_start();
                      
                  ?>
<html>

<head>
    <title>BangGuitar</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">

                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="index.php"><img src="admin/images/bangguitar.png"
                            height="300px" width="auto"></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <?php 
                      include("autentikasi.php");
                      

                  ?>
                </div>
            </div>
        </header>
        <div class="row">
            <!-- <div class="col-lg-12">
        <h1 class="page-header text-center">BangGuitar.com</h1>
        <hr>
      </div> -->
            <!-- /.col-lg-12 -->
        </div>
        <hr>
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
        </div>
        <hr>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Terverifikasi' order by rand() limit 1");
        $row = mysqli_num_rows($hasil);
        if ($row==0) {
          echo "Data kosong!";
        }else{


          while ($show = mysqli_fetch_array($hasil)) {

           ?>
                <h1 class="display-4 font-italic"><?php echo $show['judul_post']; ?></h1>
                <p class="lead my-3"><?php echo substr($show['isi_post'],0,200); ?>...</p>
                <p class="lead mb-0"><a href="detail.php?id_post=<?php echo $show['id_post']; ?>"
                        class="text-white font-weight-bold">Read more...</a></p>
                <?php 
         }
       }
       ?>

            </div>
        </div>
        <div class="row mb-2">
            <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Terverifikasi' order by rand() limit 4");
        $row = mysqli_num_rows($hasil);
        if ($row==0) {
          echo "Data kosong!";
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
                        <strong
                            class="d-inline-block mb-2 text-primary"><?php echo $tampil['nama_kategori']; ?></strong>
                        <h3 class="mb-0">
                            <a class="text-dark"
                                href="detail.php?id_post=<?php echo $show['id_post']; ?>"><?php echo $show['judul_post']; ?></a>
                        </h3>
                        <div class="mb-1 text-muted"><?php echo $show['tgl_post']; ?></div>
                        <div class="mb-1 text-muted">by <a
                                href="detailUser.php?user_post=<?php echo $tampil2['id_user']; ?>"><?php echo $tampil2['username']; ?></a>
                        </div>
                        <p class="card-text mb-auto"><?php echo substr($show['isi_post'],0,100); ?>...</p>
                        <a href="detail.php?id_post=<?php echo $show['id_post']; ?>">Read more..</a>
                        <a href="detail.php?id_post=<?php echo $show['id_post']; ?>"><button
                                class="btn btn-warning">Tawar</button></a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block img"
                        src="admin/<?php echo $show['nama_file']?>" alt="Card image cap" height="200px" width="auto">
                </div>
            </div>
            <?php 
         }
       }
       ?>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">BangGuitar.com. <span class="text-muted">Update your shoes.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="admin/images/bangguitar.png"
                    alt="Generic placeholder image" width="auto" height="550px">
            </div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">BangGuitar. <span class="text-muted">See news of shoes.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="admin/images/bangguitar.png"
                    alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2019-2020 BangGuitar, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>




    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>