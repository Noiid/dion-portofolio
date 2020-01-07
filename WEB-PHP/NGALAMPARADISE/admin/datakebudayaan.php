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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/timeline.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
        <?php
                include("nav.php");
            ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Kebudayaan</h1>
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
                                            Tambah Data Kebudayaan
                                        </h5> 
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" method="get" action="">
                                             <div class="form-group">
                                                <label>ID Kebudayaan</label>
                                                <input type="text" class="form-control" name="ID_KEBUDAYAAN" />
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Kebudayaan</label>
                                                <input type="text" class="form-control" name="JENIS_KEBUDAYAAN" />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" name="addkebudayaan" />
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
                                    <th>ID Kebudayaan</th>
                                    <th>Nama Kebudayaan</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
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
                                     <tr>
                                        
                                        <td><?php echo $show['ID_KEBUDAYAAN']; ?></td>
                                        <td><?php echo $show['JENIS_KEBUDAYAAN']; ?></td>

                                        <td>
                                            <a id="modal-990160" href="#modal-container-990160<?php echo $show['ID_KEBUDAYAAN']; ?>" role="button" data-toggle="modal"><button class="" onclick="myFunction()">Edit</button></a>

                                            <a href="deletekebudayaan.php?ID_KEBUDAYAAN=<?php echo $show['ID_KEBUDAYAAN']; ?>"><button>Delete</button></a>

                                        </td>

                                     </tr>
                                     <div class="modal fade" id="modal-container-990160<?php echo $show['ID_KEBUDAYAAN'];?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Edit Data Kebudayaan
                                                </h5> 
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="">
                                                    <div class="form-group">
                                                        <label>Id Kebudayaan</label>
                                                        <input type="text" class="form-control" name="ID_KEBUDAYAAN" value="<?php echo $show['ID_KEBUDAYAAN']; ?>" />
                                                        <label>Nama Kebudayaan</label>
                                                        <input type="text" class="form-control" name="JENIS_KEBUDAYAAN" value="<?php echo $show['JENIS_KEBUDAYAAN']; ?>" />
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary" name="updatekebudayaan" />
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
            if (isset($_GET["addkebudayaan"])) {
                $JENIS_KEBUDAYAAN = $_GET['JENIS_KEBUDAYAAN'];
                $ID_KEBUDAYAAN = $_GET['ID_KEBUDAYAAN'];
                $query = mysqli_query($mysqli, "INSERT INTO kebudayaan VALUES('$ID_KEBUDAYAAN', '$JENIS_KEBUDAYAAN')") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                    echo "<script>document.location = 'datakebudayaan.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatekebudayaan"])) {
                $JENIS_KEBUDAYAAN = $_POST['JENIS_KEBUDAYAAN'];
                $ID_KEBUDAYAAN = $_POST['ID_KEBUDAYAAN'];
                $query = mysqli_query($mysqli, "UPDATE kebudayaan SET JENIS_KEBUDAYAAN='$JENIS_KEBUDAYAAN', ID_KEBUDAYAAN='$ID_KEBUDAYAAN' WHERE ID_KEBUDAYAAN='$ID_KEBUDAYAAN'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'datakebudayaan.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/raphael.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
