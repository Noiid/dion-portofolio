<?php 

    session_start();

    if (!isset($_SESSION['id_user'])) {
        header("Location: ../login.php");
    }
    include 'koneksi.php';

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard Admin BangGuitar</title>
       
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/timeline.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- <script src="editor.js"></script>
        <script>
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });
        </script> -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- <link href="editor.css" type="text/css" rel="stylesheet"/> -->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="ckeditor/style.js"></script>
    </head>
    <body>
        <div id="wrapper">
        <?php
                include("nav.php");
            ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Post Terupload</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <br><br>
                          <div class="table-responsive">
                            <table class="table table-striped table-sm">
                              <thead>
                                <tr>
                                    <th>ID Post</th>
                                    <th>Judul Post</th>
                                    <th>Tgl Post</th>
                                    <th>Kategori Post</th>
                                    <th>Isi Post </th>
                                    <th>Nama File</th>
                                    <th>User Post</th>
                                    <th>Harga Lelang</th>
                                    <th>Harga Kelipatan</th>
                                    <th>Jatuh Tempo(hari)</th>
                                    <th>Status</th>
                                    <th>Kualitas</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Terverifikasi'");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Terverifikasi'");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['kategori_post'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM kategori WHERE id_kategori='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);

                                        $user = $show['user_post'];
                                        $qq2 = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user='$user' ");
                                        $tampil2 = mysqli_fetch_array($qq2);
                                     ?>
                                     <tr>
                                        
                                        <td><?php echo $show['id_post']; ?></td>
                                        <td><?php echo $show['judul_post']; ?></td>
                                        <td><?php echo $show['tgl_post']; ?></td>
                                        <td><?php echo $tampil['nama_kategori']; ?></td>
                                        <td><?php echo substr($show['isi_post'],0,200); ?>...</td>
                                        <td><img src="<?php echo $show['nama_file']; ?>" height="100px" width="auto"></td>
                                        <td><?php echo $tampil2['username']; ?></td>
                                        <td><?php echo $show['harga_lelang']; ?></td>
                                        <td><?php echo $show['harga_kelipatan']; ?></td>
                                        <td><?php echo $show['jatuh_tempo']; ?></td>
                                        <td><?php echo $show['status']; ?></td>
                                        <td><?php echo $show['kualitas']; ?></td>
                                        
                                            
                                                <td>
                                            <a href="deletepost.php?id_post=<?php echo $show['id_post']; ?>"><button>Delete</button></a>

                                        </td>
                                                
                                        

                                     </tr>
                                     
                                     <?php }
                                     }
                                      ?>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>
                
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

    </body>
</html>
