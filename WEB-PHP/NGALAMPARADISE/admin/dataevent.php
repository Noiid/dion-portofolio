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
                    <h1 class="page-header">Data Event</h1>
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
                                        Tambah Data Event
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Event</label>
                                            <input type="text" class="form-control" name="NAMA_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Event</label>
                                            <input type="text" class="form-control" name="LOKASI_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Tiket Event</label>
                                            <input type="number" class="form-control" name="HARGA_TIKET" />
                                        </div>
                                        <div class="form-group">
                                            <label>Rekening Penyelenggara Event</label>
                                            <input type="text" class="form-control" name="REKENING_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Event</label>
                                            <textarea class="form-control ckeditor" name="DESKRIPSI_EVENT"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Event</label>
                                            <input type="date" class="form-control" name="TANGGAL_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
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
                                    <th>ID Event</th>
                                    <th>Nama Event Post</th>
                                    <th>Lokasi Wisata Post</th>
                                    <th>Deskripsi Event Post</th>
                                    <th>Foto Event</th>
                                    <th>Harga Tiket</th>
                                    <th>Tanggal Event Post</th>
                                    <th>Rekening Bank Penyelenggara </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM event");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM event");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_EVENT']; ?></td>
                                    <td><?php echo $show['NAMA_EVENT']; ?></td>
                                    <td><?php echo $show['LOKASI_EVENT']; ?></td>
                                    <td><?php echo substr($show['DESKRIPSI_EVENT'],0,200); ?></td>
                                    <td><img src="../event/<?php echo $show['FOTO_EVENT']; ?>" height="auto"
                                            width="100px">
                                    <td><?php echo $show['HARGA_TIKET']; ?></td>
                                    <td><?php echo $show['TANGGAL_EVENT']; ?></td>
                                    <td><?php echo $show['REKENING_EVENT']; ?></td>
                                    </td>

                                    <td>
                                        <a id="modal-990160"
                                            href="#modal-container-990160<?php echo $show['ID_EVENT']; ?>" role="button"
                                            data-toggle="modal"><button class=""
                                                onclick="myFunction()">Edit</button></a>

                                        <a
                                            href="deleteevent.php?ID_EVENT=<?php echo $show['ID_EVENT']; ?>"><button>Delete</button></a>

                                    </td>

                                </tr>
                                <div class="modal fade" id="modal-container-990160<?php echo $show['ID_EVENT']; ?>"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Edit Data Event
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Nama Event</label>
                                                        <input type="text" class="form-control" name="NAMA_EVENT"
                                                            value="<?php echo $show['NAMA_EVENT']; ?>" />
                                                        <input type="hidden" class="form-control" name="ID_EVENT"
                                                            value="<?php echo $show['ID_EVENT']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Event</label>
                                                        <input type="date" class="form-control" name="TANGGAL_EVENT"
                                                            value="<?php echo $show['TANGGAL_EVENT']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Event</label>
                                                        <input type="text" class="form-control" name="LOKASI_EVENT"
                                                            value="<?php echo $show['LOKASI_EVENT']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Event</label>
                                                        <input type="number" class="form-control" name="HARGA_TIKET"
                                                            value="<?php echo $show['HARGA_TIKET']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Rekening Penyelenggara Event</label>
                                                        <input type="text" class="form-control" name="REKENING_EVENT"
                                                            value="<?php echo $show['REKENING_EVENT']; ?>" />
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
                $NAMA_EVENT = $_POST['NAMA_EVENT'];
                $LOKASI_EVENT = $_POST['LOKASI_EVENT'];
                $TANGGAL_EVENT =$_POST['TANGGAL_EVENT'];
                $REKENING_EVENT =$_POST['REKENING_EVENT'];
                $HARGA_TIKET = $_POST['HARGA_TIKET'];
                $DESKRIPSI_EVENT = strip_tags($_POST['DESKRIPSI_EVENT']);

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
                        move_uploaded_file($tmp_name, "../event/".$file_name);
                        $gambar[$i] = $file_name; 								
                    }
                }
                // $code = $_FILES['file']['error'];
                // if ($code === 0) {
                //     $nama_folder="images/upload";
                //     $nama_file = $_FILES['file']['name'];
                //     $file_ext   = pathinfo($nama_file, PATHINFO_EXTENSION);
                //     $path = "$nama_folder/$NAMA_EVENT.$file_ext";
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
                $query = mysqli_query($mysqli, "INSERT INTO event VALUES(NULL,'$NAMA_EVENT', '$TANGGAL_EVENT', '$LOKASI_EVENT', '$HARGA_TIKET','$gambar[0]','$DESKRIPSI_EVENT' ,'$REKENING_EVENT', '$_SESSION[ID_USER]')") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'dataevent.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }
                
                
                
                
            }

        ?>
    <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepost"])) {
                $ID_EVENT = $_POST['ID_EVENT'];
                $NAMA_EVENT = $_POST['NAMA_EVENT'];
                $REKENING_EVENT =$_POST['REKENING_EVENT'];
                $LOKASI_EVENT= $_POST['LOKASI_EVENT'];
                $TANGGAL_EVENT = $_POST['TANGGAL_EVENT'];
                $HARGA_TIKET = $_POST['HARGA_TIKET'];
                $query = mysqli_query($mysqli, "UPDATE event SET NAMA_EVENT='$NAMA_EVENT',LOKASI_EVENT='$LOKASI_EVENT', TANGGAL_EVENT='$TANGGAL_EVENT',HARGA_TIKET='$HARGA_TIKET', REKENING_EVENT='$REKENING_EVENT' WHERE ID_EVENT='$ID_EVENT'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'dataevent.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
    <!-- /#wrapper -->

</body>

</html>