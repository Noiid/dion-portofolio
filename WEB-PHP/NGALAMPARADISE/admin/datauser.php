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
                        <h1 class="page-header">Data Users</h1>
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
                                            Tambah Data User
                                        </h5> 
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" method="post" action="">
                                            <div class="form-group">
                                                <label>NIK / NO. KTP</label>
                                                <input type="text" class="form-control" name="NIK" />
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" name="NAMA_USER" />
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="USERNAME" />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Password
                                                </label>
                                                <input type="password" class="form-control" name="PASSWORD" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label><br>
                                                <input type="radio" class="" name="JENIS_KELAMIN" value="Laki-laki" /> Laki-laki  <input type="radio" class="" name="JENIS_KELAMIN" value="Perempuan" /> Perempuan 
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="EMAIL" />
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="ALAMAT_USER"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Pengguna</label>
                                                <select name="JENIS_USER" class="form-control">
                                                    <option value="2">User</option>
                                                    <option value="3">Pengelola</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-primary" name="adduser" />
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
                                    <th>ID User</th>
                                    <th>NIK / NO. KTP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Level User</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM user");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM user");

                                    
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        # code...
                                     ?>
                                     <tr>
                                        
                                        <td><?php echo $show['ID_USER']; ?></td>
                                        <td><?php echo $show['NIK']; ?></td>
                                        <td><?php echo $show['NAMA_USER']; ?></td>
                                        <td><?php echo $show['USERNAME']; ?></td>
                                        <td><?php echo $show['PASSWORD']; ?></td>
                                        <td><?php echo $show['JENIS_KELAMIN']; ?></td>
                                        <td><?php echo $show['EMAIL']; ?></td>
                                        <td><?php echo $show['ALAMAT_USER']; ?></td>
                                        <td><?php echo $show['USER_LVL']; ?></td>

                                        <td>
                                            <!-- <a href="updateuser.php?id_user=<?php echo $show['ID_USER']; ?>"><button>Edit</button></a> -->
                                            <a id="modal-990160" href="#modal-container-990160<?php echo $show['ID_USER']; ?>" role="button" data-toggle="modal"><button class="" onclick="myFunction()">Edit</button></a>

                                            <a href="deleteuser.php?ID_USER=<?php echo $show['ID_USER']; ?>"><button>Delete</button></a>

                                        </td>

                                     </tr>
                                             <div class="modal fade" id="modal-container-990160<?php echo $show['ID_USER'];?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Edit Data User
                                                </h5> 
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="">
                                                    <div class="form-group">
                                                        <label>NIK / NO. KTP</label>
                                                        <input type="text" class="form-control" name="NIK" value="<?php echo $show['NIK']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="NAMA_USER" value="<?php echo $show['NAMA_USER']; ?>" />
                                                        <input type="hidden" class="form-control" name="ID_USER" value="<?php echo $show['ID_USER']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="USERNAME" value="<?php echo $show['USERNAME']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            Password
                                                        </label>
                                                        <input type="password" class="form-control" name="PASSWORD" value="<?php echo $show['PASSWORD']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label><br>
                                                        <?php 
                                                            if ($show['JENIS_KELAMIN'] === 'Laki-laki') {
                                                                echo '<input type="radio" class="" name="JENIS_KELAMIN" value="Laki-laki" checked/> Laki-laki <input type="radio" class="" name="JENIS_KELAMIN" value="Perempuan" /> Perempuan ';
                                                            }else if ($show['JENIS_KELAMIN'] === 'Perempuan'){
                                                                echo '<input type="radio" class="" name="JENIS_KELAMIN" value="Laki-laki" /> Laki-laki <input type="radio" class="" name="JENIS_KELAMIN" value="Perempuan" checked/> Perempuan';
                                                            }else{
                                                                echo '<td><input type="radio" name="JENIS_KELAMIN" value="Laki-laki">Laki-laki <input type="radio" name="JENIS_KELAMIN" value="Perempuan">Perempuan</td>';
                                                            }
                                                        ?>
                                                          
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="EMAIL" value="<?php echo $show['EMAIL']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="ALAMAT_USER" value=""><?php echo $show['ALAMAT_USER']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary" name="updateuser" />
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
            if (isset($_POST["adduser"])) {
                $NAMA_USER = $_POST['NAMA_USER'];
                $NIK = $_POST['NIK'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
                $EMAIL = $_POST['EMAIL'];
                $ALAMAT_USER = $_POST['ALAMAT_USER'];
                // $new_date = date('Y-m-d',strtotime($date));
                $JENIS_USER = $_POST['JENIS_USER'];
                $query = mysqli_query($mysqli, "INSERT INTO user VALUES(NULL,'$NIK','$NAMA_USER','$USERNAME','$PASSWORD', '$ALAMAT_USER', '$JENIS_KELAMIN' , '$EMAIL', '$JENIS_USER')") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                    echo "<script>document.location = 'datauser.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updateuser"])) {
                $ID_USER = $_POST['ID_USER'];
                $NIK = $_POST['NIK'];
                $NAMA_USER = $_POST['NAMA_USER'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
                $EMAIL = $_POST['EMAIL'];
                $ALAMAT_USER = $_POST['ALAMAT_USER'];
                $query = mysqli_query($mysqli, "UPDATE user SET NIK='$NIK',NAMA_USER='$NAMA_USER', USERNAME='$USERNAME', ALAMAT_USER='$ALAMAT_USER', JENIS_KELAMIN='$JENIS_KELAMIN', EMAIL='$EMAIL' WHERE ID_USER='$ID_USER'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'datauser.php';</script>";
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
