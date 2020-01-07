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
                    <h1 class="page-header">Data Wisata Post</h1>
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
                                        Tambah Data Wisata Post
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Wisata Post</label>
                                            <input type="text" class="form-control" name="NAMA_WISATAPOST" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Wisata</label>
                                            <select name="ID_WISATA" class="form-control">


                                                <?php 

                                                        $query = mysqli_query($mysqli, "SELECT * FROM wisata");
                                                        $hasil = mysqli_query($mysqli, "SELECT * FROM wisata");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        $row = mysqli_num_rows($hasil);
                                                        if ($row==0) {
                                                            echo "Data kosong!";
                                                        }else{


                                                        while ($show = mysqli_fetch_array($query)) {
                                                            # code...
                                                         ?>
                                                <option value="<?php echo $show['ID_WISATA']; ?>">
                                                    <?php echo $show['JENIS_WISATA']; ?></option>

                                                <?php }
                                                         }
                                                          ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Lat Wisata Post</label>
                                            <input type="number" class="form-control" name="LOKASI_WISATAPOST" />
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Long Wisata Post</label>
                                            <input type="number" class="form-control" name="LOKASI_WISATAPOST2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi 1 Wisata Post</label>
                                            <textarea class="form-control ckeditor" name="INFO_WISATAPOST"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi 2 Wisata Post</label>
                                            <textarea class="form-control ckeditor" name="INFOWISATAPOST2"></textarea>
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
                                    <th>ID Wisata Post</th>
                                    <th>Jenis Wisata</th>
                                    <th>Nama Wisata Post</th>
                                    <th>Lokasi Lat Wisata Post</th>
                                    <th>Lokasi Long Wisata Post</th>
                                    <th>Info 1 Wisata Post</th>
                                    <th>Info 2 Wisata Post</th>
                                    <th>Foto Wisata Post 1</th>
                                    <th>Foto Wisata Post 2</th>
                                    <th>Foto Wisata Post 3</th>
                                    <th>Tanggal Post</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM wisatapost");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM wisatapost");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['ID_WISATA'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM wisata WHERE ID_WISATA='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_POSTWISATA']; ?></td>
                                    <td><?php echo $tampil['JENIS_WISATA']; ?></td>
                                    <td><?php echo $show['NAMA_WISATAPOST']; ?></td>
                                    <td><?php echo $show['LOKASI_WISATAPOST']; ?></td>
                                    <td><?php echo $show['LOKASI_WISATAPOST2']; ?></td>
                                    <td><?php echo substr($show['INFO_WISATAPOST'],0,200); ?>...</td>
                                    <td><?php echo substr($show['INFOWISATAPOST2'],0,200); ?>...</td>
                                    <td><img src="images/<?php echo $show['FOTO_WISATAPOST']; ?>" height="auto"
                                            width="100px">
                                    <td><img src="images/<?php echo $show['FOTO_WISATAPOST2']; ?>" height="auto"
                                            width="100px">
                                    <td><img src="images/<?php echo $show['FOTO_WISATAPOST3']; ?>" height="auto"
                                            width="100px">
                                    <td><?php echo $show['TANGGAL_WISATAPOST']; ?></td>
                                    </td>

                                    <td>
                                        <a id="modal-990160"
                                            href="#modal-container-990160<?php echo $show['ID_POSTWISATA']; ?>"
                                            role="button" data-toggle="modal"><button class=""
                                                onclick="myFunction()">Edit</button></a>

                                        <a
                                            href="deletepostwisata.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA']; ?>"><button>Delete</button></a>

                                    </td>

                                </tr>
                                <div class="modal fade" id="modal-container-990160<?php echo $show['ID_POSTWISATA']; ?>"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <label>Nama Wisata</label>
                                                        <input type="text" class="form-control" name="NAMA_WISATAPOST"
                                                            value="<?php echo $show['NAMA_WISATAPOST']; ?>" />
                                                        <input type="hidden" class="form-control" name="ID_POSTWISATA"
                                                            value="<?php echo $show['ID_POSTWISATA']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Wisata</label>
                                                        <select name="ID_WISATA" class="form-control" value="<?php echo $show['ID_WISATA']; ?>">


                                                            <?php 

                                                        $query4 = mysqli_query($mysqli, "SELECT * FROM wisata");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        


                                                        while ($datashow = mysqli_fetch_array($query4)) {
                                                            # code...
                                                            if($show['ID_WISATA'] == $datashow['ID_WISATA']){
                                                                ?>
                                                                <option selected="selected" value="<?php echo $datashow['ID_WISATA']; ?>">
                                                                <?php echo $datashow['JENIS_WISATA']; ?></option>
                                                                <?php
                                                                
                                                            }else{

                                                            
                                                         ?>
                                                
                                                            <option value="<?php echo $datashow['ID_WISATA']; ?>">
                                                                <?php echo $datashow['JENIS_WISATA']; ?></option>

                                                            <?php } 
                                                         }
                                                          ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Wisata Lat Post</label>
                                                        <input type="text" class="form-control" name="LOKASI_WISATAPOST"
                                                            value="<?php echo $show['LOKASI_WISATAPOST']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Wisata Long Post</label>
                                                        <input type="text" class="form-control"
                                                            name="LOKASI_WISATAPOST2"
                                                            value="<?php echo $show['LOKASI_WISATAPOST2']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 1 Wisata Post</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFO_WISATAPOST"><?php echo $show['INFO_WISATAPOST']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 2 Wisata Post</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFOWISATAPOST2"><?php echo $show['INFOWISATAPOST2']; ?></textarea>
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
                $NAMA_WISATAPOST = $_POST['NAMA_WISATAPOST'];
                $LOKASI_WISATAPOST = $_POST['LOKASI_WISATAPOST'];
                $LOKASI_WISATAPOST2 = $_POST['LOKASI_WISATAPOST2'];
                $ID_WISATA = $_POST['ID_WISATA'];
                $INFO_WISATAPOST = strip_tags($_POST['INFO_WISATAPOST']);
                $INFOWISATAPOST2 = strip_tags($_POST['INFOWISATAPOST2']);
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
                    $query = mysqli_query($mysqli, "INSERT INTO wisatapost VALUES(NULL,'$ID_WISATA' ,'$NAMA_WISATAPOST', '$LOKASI_WISATAPOST', '$LOKASI_WISATAPOST2', '$INFO_WISATAPOST', '$INFOWISATAPOST2','$gambar[0]','$gambar[1]','$gambar[2]','$tgl_post','$_SESSION[ID_USER]' )") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'datapostwisata.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }			
                }
                else{
                    echo "<script type='text/javascript'> alert('Gambar Tidak Ada') </script>";
                    echo '<script>window.history.back()</script>';
                }
                // if ($jumlah > 0) {
                //     $gambar = array();
                //     for ($i=0; $i < $jumlah; $i++) { 
                //         $file_name = $_FILES['gambar']['name'][$i];
                //         $tmp_name = $_FILES['gambar']['tmp_name'][$i];
                //         $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                //         $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";	
                //         $tipe_file=array("image/jpeg", "image/gif", "image/png", "image/jpg");
                //         // if (!in_array($_FILES['file']['type'][$i], $tipe_file)) {
                //         //     echo "<script type='text/javascript'> alert('Cek kembali ekstensi file anda (*.jpeg, *.jpg, *.gif, *.png)') </script>";
                //         //     echo "<script>document.location = 'datapostwisata.php';</script>";
                //         // }else{
                            
                            
                //         // }   
                //         // $move = move_uploaded_file($tmp_name,"images/upload/".$file_name);		
                //         move_uploaded_file($file_tmp, $path);
                //         $gambar[$i] = $file_name; 								
                //     }
                //     $query = mysqli_query($mysqli, "INSERT INTO wisatapost VALUES(NULL,'$ID_WISATA' ,'$NAMA_WISATAPOST', '$LOKASI_WISATAPOST', '$INFO_WISATAPOST', '$INFOWISATAPOST2','$gambar[0]','$gambar[1]','$gambar[2]' )") or die ("Sql salah : ".mysqli_error($mysqli));
                //     if($query){
                //         echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                //         echo "<script>document.location = 'datapostwisata.php';</script>";
                //     }else{
                //         echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                //         echo '<script>window.history.back()</script>';
                //      }
                //     // mysqli_query($conn,"INSERT INTO rangga_gambar VALUES('','$file[0]','$file[1]','$file[2]')");
                //     // echo "Berhasil Upload";			
                // }
                // else{
                //     echo "<script type='text/javascript'> alert('Maaf gambar tidak ada !!!') </script>";
                //     echo '<script>window.history.back()</script>';
                // }
                // if ($code === 0) {
                //     $nama_folder="images/upload";
                //     $nama_file = $_FILES['file']['name'];
                //     $nama_file2 = $_FILES['file2']['name'];
                //     $nama_file3 = $_FILES['file3']['name'];
                //     $file_ext   = pathinfo($nama_file, PATHINFO_EXTENSION);
                //     $path = "$nama_folder/$NAMA_WISATAPOST.$file_ext";
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
                // $query = mysqli_query($mysqli, "INSERT INTO wisatapost VALUES(NULL,'$ID_WISATA' ,'$NAMA_WISATAPOST', '$LOKASI_WISATAPOST', '$INFO_WISATAPOST', '$INFOWISATAPOST2',NULL )") or die ("Sql salah : ".mysqli_error($mysqli));
                //     if($query){
                //         echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                //         echo "<script>document.location = 'datapostwisata.php';</script>";
                //     }else{
                //         echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                //         echo '<script>window.history.back()</script>';
                //      }
                
                
                
                
            }

        ?>
    <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepost"])) {
                $ID_POSTWISATA = $_POST['ID_POSTWISATA'];
                $ID_WISATA = $_POST['ID_WISATA'];
                $NAMA_WISATAPOST = $_POST['NAMA_WISATAPOST'];
                $LOKASI_WISATAPOST = $_POST['LOKASI_WISATAPOST'];
                $LOKASI_WISATAPOST2 = $_POST['LOKASI_WISATAPOST2'];
                $INFO_WISATAPOST = strip_tags($_POST['INFO_WISATAPOST']);
                $INFOWISATAPOST2 = strip_tags($_POST['INFOWISATAPOST2']);
                $query = mysqli_query($mysqli, "UPDATE wisatapost SET ID_WISATA='$ID_WISATA', NAMA_WISATAPOST='$NAMA_WISATAPOST',LOKASI_WISATAPOST='$LOKASI_WISATAPOST',LOKASI_WISATAPOST2='$LOKASI_WISATAPOST2', INFO_WISATAPOST='$INFO_WISATAPOST',INFOWISATAPOST2='$INFOWISATAPOST2' WHERE ID_POSTWISATA='$ID_POSTWISATA'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'datapostwisata.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
    <!-- /#wrapper -->

</body>

</html>