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
                        <h1 class="page-header">Data Post Belum Terverifikasi</h1>
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

                                    $query = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Sedang diproses' OR status='-'");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE status='Sedang diproses' OR status='-'");

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
                                            <a id="modal-990160" href="#modal-container-990160<?php echo $show['id_post']; ?>" role="button" data-toggle="modal"><button class="" onclick="myFunction()">Konfirmasi</button></a>


                                        </td>
                                                
                                        

                                     </tr>
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
                                                <input type="hidden" class="form-control" name="id_post" value="<?php echo $show['id_post']; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Aksi</label>
                                                <select name="konfirmasi" id="" class="form-control">
                                                    <option value="Dikonfirmasi">Dikonfirmasi</option>
                                                    <option value="Dibatalkan">Dibatalkan</option>
                                                </select>
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
        
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepost"])) {
                $id_post = $_POST['id_post'];
                $konfirmasi = $_POST['konfirmasi'];
                $query='';
                if($konfirmasi=='Dikonfirmasi'){
                    $query = mysqli_query($mysqli, "UPDATE post SET status='Terverifikasi' WHERE id_post='$id_post'") or die ("Sql salah : ".mysqli_error($mysqli));
                }else{
                    $query = mysqli_query($mysqli, "UPDATE post SET status='Belum Dikonfirmasi', kualitas='-' WHERE id_post='$id_post'") or die ("Sql salah : ".mysqli_error($mysqli));
                }
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'datapost.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <!-- /#wrapper -->

    </body>
</html>
