<?php 

    session_start();

    if (!isset($_SESSION['ID_USER'])) {
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

    <title>Pariwisata dan Kebudayaan di Kota Malang</title>

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
                    <h1 class="page-header">Data Budaya</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a id="modal-990150" href="#modal-container-990150" role="button" data-toggle="modal"><button
                            class=" btn btn-primary">Tambah Data</button></a>
                    <div class="modal fade" id="modal-container-990150" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">
                                        Tambah Data Budaya
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Budaya</label>
                                            <input type="text" class="form-control" name="NAMA_BUDAYA" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kebudayaan</label>
                                            <select name="ID_KEBUDAYAAN" class="form-control">


                                                <?php 

                                                        $query = mysqli_query($mysqli, "SELECT * FROM kebudayaan");
                                                        $hasil = mysqli_query($mysqli, "SELECT * FROM kebudayaan");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        $row = mysqli_num_rows($hasil);
                                                        if ($row==0) {
                                                            echo "Data kosong!";
                                                        }else{


                                                        while ($show = mysqli_fetch_array($query)) {
                                                            # code...
                                                         ?>
                                                <option value="<?php echo $show['ID_KEBUDAYAAN']; ?>">
                                                    <?php echo $show['JENIS_KEBUDAYAAN']; ?></option>

                                                <?php }
                                                         }
                                                          ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Lat Budaya</label>
                                            <input type="text" class="form-control" name="LOKASI_BUDAYA" />
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Long Budaya</label>
                                            <input type="text" class="form-control" name="LOKASI_BUDAYA2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi 1 Budaya</label>
                                            <textarea class="form-control ckeditor" name="INFO_BUDAYA"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi 2 Budaya</label>
                                            <textarea class="form-control ckeditor" name="INFOBUDAYA2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto (Max. 3)</label>
                                            <input type="file" class="form-control" name="gambar[]" multiple />
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
                                    <th>ID Budaya</th>
                                    <th>Jenis Kebudayaan</th>
                                    <th>Nama Budaya</th>
                                    <th>Lokasi Lat Budaya</th>
                                    <th>Lokasi Long Budaya</th>
                                    <th>Info 1 Budaya</th>
                                    <th>Info 2 Budaya</th>
                                    <th>Foto Budaya</th>
                                    <th>Foto Budaya 2</th>
                                    <th>Foto Budaya 3</th>
                                    <th>Tanggal Post Budaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM kebudayaanpost");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM kebudayaanpost");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['ID_KEBUDAYAAN'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM kebudayaan WHERE ID_KEBUDAYAAN='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_POSTKEBUDAYAAN']; ?></td>
                                    <td><?php echo $tampil['JENIS_KEBUDAYAAN']; ?></td>
                                    <td><?php echo $show['NAMA_BUDAYA']; ?></td>
                                    <td><?php echo $show['LOKASI_BUDAYA']; ?></td>
                                    <td><?php echo $show['LOKASI_BUDAYA2']; ?></td>
                                    <td><?php echo substr($show['INFO_BUDAYA'],0,200); ?>...</td>
                                    <td><?php echo substr($show['INFOBUDAYA2'],0,200); ?>...</td>
                                    <td><img src="images/<?php echo $show['FOTO_BUDAYA']; ?>" height="100px" width="auto">
                                    <td><img src="images/<?php echo $show['FOTO_BUDAYA2']; ?>" height="100px" width="auto">
                                    <td><img src="images/<?php echo $show['FOTO_BUDAYA3']; ?>" height="100px" width="auto">
                                    <td><?php echo $show['TANGGAL_BUDAYAPOST']; ?></td>

                                    </td>

                                    <td>
                                        <a id="modal-990160"
                                            href="#modal-container-990160<?php echo $show['ID_POSTKEBUDAYAAN']; ?>"
                                            role="button" data-toggle="modal"><button class=""
                                                onclick="myFunction()">Edit</button></a>

                                        <a
                                            href="deletepostkebudayaan.php?ID_POSTKEBUDAYAAN=<?php echo $show['ID_POSTKEBUDAYAAN']; ?>"><button>Delete</button></a>

                                    </td>

                                </tr>
                                <div class="modal fade"
                                    id="modal-container-990160<?php echo $show['ID_POSTKEBUDAYAAN']; ?>" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <label>Nama Budaya</label>
                                                        <input type="text" class="form-control" name="NAMA_BUDAYA"
                                                            value="<?php echo $show['NAMA_BUDAYA']; ?>" />
                                                        <input type="hidden" class="form-control"
                                                            name="ID_POSTKEBUDAYAAN"
                                                            value="<?php echo $show['ID_POSTKEBUDAYAAN']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Budaya</label>
                                                        <select name="ID_KEBUDAYAAN" class="form-control" value="<?php echo $show['ID_WISATA']; ?>">


                                                            <?php 

                                                        $query4 = mysqli_query($mysqli, "SELECT * FROM kebudayaan   ");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        


                                                        while ($datashow = mysqli_fetch_array($query4)) {
                                                            # code...
                                                            if($show['ID_KEBUDAYAAN'] == $datashow['ID_KEBUDAYAAN']){
                                                                ?>
                                                                <option selected="selected" value="<?php echo $datashow['ID_KEBUDAYAAN']; ?>">
                                                                <?php echo $datashow['JENIS_KEBUDAYAAN']; ?></option>
                                                                <?php
                                                                
                                                            }else{

                                                            
                                                         ?>
                                                
                                                            <option value="<?php echo $datashow['ID_KEBUDAYAAN']; ?>">
                                                                <?php echo $datashow['JENIS_KEBUDAYAAN']; ?></option>

                                                            <?php } 
                                                         }
                                                          ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Lat Budaya</label>
                                                        <input type="text" class="form-control" name="LOKASI_BUDAYA"
                                                            value="<?php echo $show['LOKASI_BUDAYA']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Long Budaya</label>
                                                        <input type="text" class="form-control" name="LOKASI_BUDAYA2"
                                                            value="<?php echo $show['LOKASI_BUDAYA2']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 1 Budaya</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFO_BUDAYA"><?php echo $show['INFO_BUDAYA']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 2 Budaya</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFOBUDAYA2"><?php echo $show['INFOBUDAYA2']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="updatepost" />
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
                $nama_folder="images/upload";
                $tgl_post = date('Y-m-d');
                $NAMA_BUDAYA = $_POST['NAMA_BUDAYA'];
                $LOKASI_BUDAYA = $_POST['LOKASI_BUDAYA'];
                $LOKASI_BUDAYA2 = $_POST['LOKASI_BUDAYA2'];
                $ID_KEBUDAYAAN = $_POST['ID_KEBUDAYAAN'];
                $INFO_BUDAYA = strip_tags($_POST['INFO_BUDAYA']);
                $INFOBUDAYA2 = strip_tags($_POST['INFOBUDAYA2']);
                $code = $_FILES['gambar']['error'];
                $jumlah = count($_FILES['gambar']['name']);
                $jumlah = count($_FILES['gambar']['name']);
                if ($jumlah > 0) {
                    $gambar = array();
                    for ($i=0; $i < $jumlah; $i++) { 
                        $file_name = $_FILES['gambar']['name'][$i];
                        $tmp_name = $_FILES['gambar']['tmp_name'][$i];	
                        $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                        // $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";			
                        move_uploaded_file($tmp_name, "images/".$file_name);
                        $gambar[$i] = $file_name; 								
                    }
                    $query = mysqli_query($mysqli, "INSERT INTO kebudayaanpost VALUES(NULL,'$ID_KEBUDAYAAN' ,'$NAMA_BUDAYA', '$LOKASI_BUDAYA', '$LOKASI_BUDAYA2', '$INFO_BUDAYA', '$INFOBUDAYA2','$gambar[0]','$gambar[1]','$gambar[2]','$tgl_post','$_SESSION[ID_USER]')") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'datapostkebudayaan.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }			
                }
                else{
                    echo "<script type='text/javascript'> alert('Gambar Tidak Ada') </script>";
                    echo '<script>window.history.back()</script>';
                }
                // $code = $_FILES['file']['error'];
                // if ($code === 0) {
                //     $nama_folder="images/upload";
                //     $nama_file = $_FILES['file']['name'];
                //     $file_ext   = pathinfo($nama_file, PATHINFO_EXTENSION);
                //     $path = "$nama_folder/$NAMA_BUDAYA.$file_ext";
                //     $file_tmp   = $_FILES['file']['tmp_name'];
                //     $tipe_file=array("image/jpeg", "image/gif", "image/png");
                //     if (!in_array($_FILES['file']['type'], $tipe_file)) {
                //         echo "<script type='text/javascript'> alert('Cek kembali ekstensi file anda (*.jpeg, *.jpg, *.gif, *.png)') </script>";
                //         echo "<script>document.location = 'addpost.php';</script>";
                //     }else{
                //         $move = move_uploaded_file($file_tmp, $path);
                        
                //     }   
                // }else if ($code===4) {
                //     echo "Upload gagal karena tidak ada yang di upload";
                // }
                // $query = mysqli_query($mysqli, "INSERT INTO budaya VALUES(NULL,'$ID_KEBUDAYAAN' ,'$NAMA_BUDAYA', '$LOKASI_BUDAYA', '$INFO_BUDAYA', '$INFOBUDAYA2')") or die ("Sql salah : ".mysqli_error($mysqli));
                //     if($query){
                //         echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                //         echo "<script>document.location = 'datapostkebudayaan.php';</script>";
                //     }else{
                //         echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                //         echo '<script>window.history.back()</script>';
                //      }
                
                
                
                
            }

        ?>
    <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepost"])) {
                $ID_POSTKEBUDAYAAN = $_POST['ID_POSTKEBUDAYAAN'];
                $NAMA_BUDAYA = $_POST['NAMA_BUDAYA'];
                $ID_KEBUDAYAAN = $_POST['ID_KEBUDAYAAN'];
                $LOKASI_BUDAYA = $_POST['LOKASI_BUDAYA'];
                $LOKASI_BUDAYA2 = $_POST['LOKASI_BUDAYA2'];
                $INFO_BUDAYA = strip_tags($_POST['INFO_BUDAYA']);
                $INFOBUDAYA2 = strip_tags($_POST['INFOBUDAYA2']);
                $query = mysqli_query($mysqli, "UPDATE kebudayaanpost SET ID_KEBUDAYAAN='$ID_KEBUDAYAAN',NAMA_BUDAYA='$NAMA_BUDAYA',LOKASI_BUDAYA='$LOKASI_BUDAYA',LOKASI_BUDAYA2='$LOKASI_BUDAYA2', INFO_BUDAYA='$INFO_BUDAYA',INFOBUDAYA2='$INFOBUDAYA2' WHERE ID_POSTKEBUDAYAAN='$ID_POSTKEBUDAYAAN'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'datapostkebudayaan.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
    <!-- /#wrapper -->

</body>

</html>