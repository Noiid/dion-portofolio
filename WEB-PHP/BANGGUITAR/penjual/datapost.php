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

        <title>Dashboard Penjual BangGuitar</title>
       
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
                        <h1 class="page-header">Data Post</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <a id="modal-990150" href="#modal-container-990150" role="button" data-toggle="modal"><button class=" btn btn-primary">Tambah Data</button></a>
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
                                                <label>Harga Lelang</label>
                                                <input type="number" class="form-control" name="harga_lelang" />
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Kelipatan</label>
                                                <input type="number" class="form-control" name="harga_kelipatan" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jatuh Tempo (hari)</label>
                                                <input type="number" class="form-control" name="jatuh_tempo" />
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

                                    $query = mysqli_query($mysqli, "SELECT * FROM post WHERE user_post=$_SESSION[id_user]");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM post WHERE user_post=$_SESSION[id_user]");

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
                                        <?php
                                            if($show['status']=='Belum Dikonfirmasi'){

                                                
                                                ?>
                                                <td>
                                            <a id="modal-990160" href="#modal-container-990160<?php echo $show['id_post']; ?>" role="button" data-toggle="modal"><button class="" onclick="myFunction()">Edit</button></a>

                                            <a href="deletepost.php?id_post=<?php echo $show['id_post']; ?>"><button>Delete</button></a>

                                        </td>
                                                <?php
                                            }else{
                                                ?>
                                                <td>Sedang diproses</td>
                                                <?php
                                            }
                                        ?>
                                        

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
                                                <label>Judul Post</label>
                                                <input type="text" class="form-control" name="judul_post" value="<?php echo $show['judul_post']; ?>"/>
                                                <input type="hidden" class="form-control" name="id_post" value="<?php echo $show['id_post']; ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label>Isi Post</label>
                                                <textarea class="form-control ckeditor" name="isipost"><?php echo $show['isi_post']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Lelang</label>
                                                <input type="number" class="form-control" name="harga_lelang" value="<?php echo $show['harga_lelang']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Kelipatan</label>
                                                <input type="number" class="form-control" name="harga_kelipatan" value="<?php echo $show['harga_kelipatan']; ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Jatuh Tempo (hari)</label>
                                                <input type="number" class="form-control" name="jatuh_tempo" value="<?php echo $show['jatuh_tempo']; ?>"/>
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
            if (isset($_POST["addpost"])) {
                $judul_post = $_POST['judul_post'];
                $tgl_post = date('Y-m-d H:i:s');
                $kategori = $_POST['kategori'];
                $isipost = strip_tags($_POST['isipost']);
                $harga_lelang = $_POST['harga_lelang'];
                $harga_kelipatan = $_POST['harga_kelipatan'];
                $jatuh_tempo = $_POST['jatuh_tempo'];
                $code = $_FILES['file']['error'];
                if ($code === 0) {
                    $nama_folder="../admin/images/upload";
                    $nama_file = $_FILES['file']['name'];
                    $file_ext   = pathinfo($nama_file, PATHINFO_EXTENSION);
                    $path = "$nama_folder/$judul_post.$file_ext";
                    $file_tmp   = $_FILES['file']['tmp_name'];
                    $tipe_file=array("image/jpeg", "image/gif", "image/png");
                    if (!in_array($_FILES['file']['type'], $tipe_file)) {
                        echo "<script type='text/javascript'> alert('Cek kembali ekstensi file anda (*.jpeg, *.jpg, *.gif, *.png)') </script>";
                        echo "<script>document.location = 'addpost.php';</script>";
                    }else{
                        $move = move_uploaded_file($file_tmp, $path);
                        $query = mysqli_query($mysqli, "INSERT INTO post VALUES(NULL, '$judul_post', '$tgl_post', '$kategori', '$isipost', '$path', '".$_SESSION['id_user']."', '$harga_lelang', '$harga_kelipatan', '$jatuh_tempo', 'Belum Dikonfirmasi','-' )") or die ("Sql salah : ".mysqli_error($mysqli));
                        if($query){
                            echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                            echo "<script>document.location = 'datapost.php';</script>";
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
        include "koneksi.php";
        
            if (isset($_POST["updatepost"])) {
                $id_post = $_POST['id_post'];
                $judul_post = $_POST['judul_post'];
                $isi_post = strip_tags($_POST['isipost']);
                $harga_lelang = $_POST['harga_lelang'];
                $harga_kelipatan = $_POST['harga_kelipatan'];
                $jatuh_tempo = $_POST['jatuh_tempo'];
                $query = mysqli_query($mysqli, "UPDATE post SET judul_post='$judul_post', isi_post='$isi_post', harga_lelang='$harga_lelang', harga_kelipatan='$harga_kelipatan', jatuh_tempo='$jatuh_tempo' WHERE id_post='$id_post'") or die ("Sql salah : ".mysqli_error($mysqli));
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
