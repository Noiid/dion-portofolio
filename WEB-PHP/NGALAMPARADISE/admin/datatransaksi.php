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
                    <h1 class="page-header">Data Proses Transaksi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ID Proses</th>
                                    <th>ID User</th>
                                    <th>ID Event</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Total Pembayaran</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Status</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM proses");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM proses");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_PROSES']; ?></td>
                                    <td><?php echo $show['ID_USERP']; ?></td>
                                    <td><?php echo $show['ID_EVENTP']; ?></td>
                                    <td><?php echo $show['JUMLAH_TIKET']; ?></td>
                                    <td><?php echo $show['TOTAL_BAYARP']; ?></td>
                                    <td><?php echo $show['TANGGAL_BELIP']; ?></td>
                                    <td><?php echo $show['STATUSP']; ?></td>
                                    <td><?php echo $show['KODE_PEMBAYARANP']; ?></td>

                                    <?php
                                            if($show['GAMBARP']==NULL){

                                            
                                        ?>
                                        <td><p>Bukti Belum Dikirim</p></td>
                                            <?php } else{?>
                                    <td><img src="images/<?php echo $show['GAMBARP']; ?>" height="auto"
                                            width="100px"></td>
                                            <?php } ?>
                                    </td>

                                    <td>
                                        <?php if($show['STATUSP']=='Sedang Di proses'){ ?>
                                        <a id="modal-990160"
                                            href="#modal-container-990160<?php echo $show['ID_EVENTP']; ?>"
                                            role="button" data-toggle="modal"><button class=""
                                                onclick="myFunction()">Konfirmasi Pembayaran</button></a>
                                        <?php } else if($show['STATUSP']=='Upload Bukti Pembayaran'){?>
                                            <p>Menunggu Pembayaran</p>
                                        <?php } else{?>
                                            <p>Terbayar</p>
                                        <?php } ?>
                                    </td>

                                </tr>
                                <div class="modal fade" id="modal-container-990160<?php echo $show['ID_EVENTP']; ?>"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Konfirmasi Bukti Pembayaran Event
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    
                                                    <div class="form-group">
                                                        <label>Bukti Pembayaran</label>
                                                        <img src="images/<?php echo $show['GAMBARP']; ?>" height="auto"
                                                        width="570px">
                                                    </div>
                                                    <input type="hidden" name="ID_USER" value="<?php echo $show['ID_USERP']; ?>">
                                                    <input type="hidden" name="ID_PROSES" value="<?php echo $show['ID_PROSES']; ?>">
                                                    <input type="hidden" name="ID_EVENT" value="<?php echo $show['ID_EVENTP']; ?>">
                                                    <input type="hidden" name="JUMLAH_TIKET" value="<?php echo $show['JUMLAH_TIKET']; ?>">
                                                    <input type="hidden" name="TOTAL_BAYAR" value="<?php echo $show['TOTAL_BAYARP']; ?>">
                                                    <input type="hidden" name="TANGGAL_BELI" value="<?php echo $show['TANGGAL_BELIP']; ?>">
                                                    <input type="hidden" name="STATUS" value="<?php echo $show['STATUSP']; ?>">
                                                    <input type="hidden" name="KODE_PEMBAYARAN" value="<?php echo $show['KODE_PEMBAYARANP']; ?>">
                                                    <input type="hidden" name="GAMBAR" value="<?php echo $show['GAMBARP']; ?>">
                                                    
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="addpost" value="Verifikasi Pembayaran"/>
                                                            
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-danger"
                                                            name="addpost2" value="Verifikasi Gagal"/>
                                                            
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
            
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h1 class="page-header">Data Transaksi Selesai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ini membeli -->
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ID User</th>
                                    <th>ID Event</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Total Pembayaran</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Status</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM membeli");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM membeli");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        
                                     ?>
                                <tr>

                                    <td><?php echo $show['ID_USER']; ?></td>
                                    <td><?php echo $show['ID_EVENT']; ?></td>
                                    <td><?php echo $show['JUMLAH_BELI']; ?></td>
                                    <td><?php echo $show['TOTAL_BAYAR']; ?></td>
                                    <td><?php echo $show['TANGGAL_BELI']; ?></td>
                                    <td><?php echo $show['STATUS']; ?></td>
                                    <td><?php echo $show['KODE_PEMBAYARAN']; ?></td>
                                    <td><img src="images/<?php echo $show['GAMBARH']; ?>" height="auto"
                                            width="100px"></td>
                                    </td>

                                    <td>
                                        Ini delete
                                    </td>

                                </tr>
                                <div class="modal fade" id="modal-container-990160<?php echo $show['ID_EVENTP']; ?>"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Konfirmasi Bukti Pembayaran Event
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    
                                                    <div class="form-group">
                                                        <label>Bukti Pembayaran</label>
                                                        <img src="images/<?php echo $show['GAMBARP']; ?>" height="auto"
                                                        width="570px">
                                                    </div>
                                                    <input type="hidden" name="ID_USER" value="<?php echo $show['ID_USERP']; ?>">
                                                    <input type="hidden" name="ID_PROSES" value="<?php echo $show['ID_PROSES']; ?>">
                                                    <input type="hidden" name="ID_EVENT" value="<?php echo $show['ID_EVENTP']; ?>">
                                                    <input type="hidden" name="JUMLAH_TIKET" value="<?php echo $show['JUMLAH_TIKET']; ?>">
                                                    <input type="hidden" name="TOTAL_BAYAR" value="<?php echo $show['TOTAL_BAYARP']; ?>">
                                                    <input type="hidden" name="TANGGAL_BELI" value="<?php echo $show['TANGGAL_BELIP']; ?>">
                                                    <input type="hidden" name="STATUS" value="<?php echo $show['STATUSP']; ?>">
                                                    <input type="hidden" name="KODE_PEMBAYARAN" value="<?php echo $show['KODE_PEMBAYARANP']; ?>">
                                                    <input type="hidden" name="GAMBAR" value="<?php echo $show['GAMBARP']; ?>">
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="addpost" value="Verifikasi Pembayaran"/>
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
                $ID_USER = $_POST['ID_USER'];
                $ID_PROSES = $_POST['ID_PROSES'];
                $ID_EVENT = $_POST['ID_EVENT'];
                $JUMLAH_TIKET = $_POST['JUMLAH_TIKET'];
                $TOTAL_BAYAR = $_POST['TOTAL_BAYAR'];
                $TANGGAL_BELI = $_POST['TANGGAL_BELI'];
                $STATUS = $_POST['STATUS'];
                $KODE_PEMBAYARAN = $_POST['KODE_PEMBAYARAN'];
                $GAMBAR = $_POST['GAMBAR'];
                
                $query4 = mysqli_query($mysqli, "UPDATE proses SET STATUSP='Terbayar' WHERE ID_PROSES='$ID_PROSES'") or die ("Sql salah : ".mysqli_error($mysqli));                
                $query = mysqli_query($mysqli, "INSERT INTO membeli VALUES('$ID_USER','$ID_EVENT', '$JUMLAH_TIKET', '$TOTAL_BAYAR', '$TANGGAL_BELI', '$KODE_PEMBAYARAN', 'Terbayar', '$GAMBAR')") or die ("Sql salah : ".mysqli_error($mysqli));
                $delete = mysqli_query($mysqli, "DELETE FROM proses where ID_PROSES='$ID_PROSES'") or die ("Mysql Error : ".mysqli_error($mysqli)); 
    
                if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'datatransaksi.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }
                
                
                
                
            }if (isset($_POST["addpost2"])) {
                $ID_USER = $_POST['ID_USER'];
                $ID_PROSES = $_POST['ID_PROSES'];
                $ID_EVENT = $_POST['ID_EVENT'];
                $JUMLAH_TIKET = $_POST['JUMLAH_TIKET'];
                $TOTAL_BAYAR = $_POST['TOTAL_BAYAR'];
                $TANGGAL_BELI = $_POST['TANGGAL_BELI'];
                $STATUS = $_POST['STATUS'];
                $KODE_PEMBAYARAN = $_POST['KODE_PEMBAYARAN'];
                $GAMBAR = $_POST['GAMBAR'];
                
                $query4 = mysqli_query($mysqli, "UPDATE proses SET GAMBARP=NULL, STATUSP='Upload Bukti Pembayaran' WHERE ID_PROSES='$ID_PROSES'") or die ("Sql salah : ".mysqli_error($mysqli));                
    
                if($query4){
                        echo "<script type='text/javascript'> alert('Berhasil konfirmasi data') </script>";
                        echo "<script>document.location = 'datatransaksi.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal konfirmasi data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }
                
                
                
                
            }

        ?>
    
    <!-- /#wrapper -->

</body>

</html>