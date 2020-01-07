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

        <title>Dashboard Sepatulogi</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/timeline.css" rel="stylesheet">
        <link href="css/startmin.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">SepatuLogi</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <?php 
                        include 'koneksi.php';
                            $perintah = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
                            $result = mysqli_fetch_array($perintah);

                        ?>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $result['username']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <img src="images/SEP.png" class="img img-responsive" width="auto" height="100">
                            </li>
                            <li>
                                <a href="index.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="datauser.php" class="active"><i class="fa fa-users fa-fw"></i> Data Users</a>
                            </li>
                            <li>
                                <a href="datakategori.php"><i class="fa fa-server fa-fw"></i> Data Category</a>
                            </li>
                            <li>
                                <a href="datapost.php"><i class="fa fa-book fa-fw"></i> Data Post</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

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
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Password
                                                </label>
                                                <input type="password" class="form-control" name="password" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label><br>
                                                <input type="radio" class="" name="jenis_kelamin" value="Laki-laki" /> Laki-laki  <input type="radio" class="" name="jenis_kelamin" value="Perempuan" /> Perempuan 
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis User</label>
                                                <select name="jenis_user" class="form-control">
                                    
                                
                                                    <?php 
                                                        $q1 = mysqli_query($mysqli, "SELECT * FROM jenis_user");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        $baris = mysqli_num_rows($q1);
                                                        if ($baris==0) {
                                                            echo "Data kosong!";
                                                        }else{


                                                        while ($muncul = mysqli_fetch_array($q1)) {
                                                            # code...
                                                         ?>
                                                            <option value="<?php echo $muncul['id_level']; ?>"><?php echo $muncul['nama_level']; ?></option>

                                                         <?php }
                                                         }
                                                          ?>
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
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
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
                                        $lvl = $show['level_user'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM jenis_user WHERE id_level='$lvl' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                     <tr>
                                        
                                        <td><?php echo $show['id_user']; ?></td>
                                        <td><?php echo $show['nama_lengkap']; ?></td>
                                        <td><?php echo $show['username']; ?></td>
                                        <td><?php echo $show['password']; ?></td>
                                        <td><?php echo $show['jenis_kelamin']; ?></td>
                                        <td><?php echo $show['email']; ?></td>
                                        <td><?php echo $show['alamat']; ?></td>
                                        <td><?php echo $show['tgl_lahir']; ?></td>
                                        <td><?php echo $tampil['nama_level']; ?></td>

                                        <td>
                                            <!-- <a href="updateuser.php?id_user=<?php echo $show['id_user']; ?>"><button>Edit</button></a> -->
                                            <a id="modal-990160" href="#modal-container-990160<?php echo $show['id_user']; ?>" role="button" data-toggle="modal"><button class="" onclick="myFunction()">Edit</button></a>

                                            <a href="deleteuser.php?id_user=<?php echo $show['id_user']; ?>"><button>Delete</button></a>

                                        </td>

                                     </tr>
                                             <div class="modal fade" id="modal-container-990160<?php echo $show['id_user'];?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $show['nama_lengkap']; ?>" />
                                                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $show['id_user']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username" value="<?php echo $show['username']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            Password
                                                        </label>
                                                        <input type="password" class="form-control" name="password" value="<?php echo $show['password']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label><br>
                                                        <?php 
                                                            if ($show['jenis_kelamin'] == 'Laki-laki') {
                                                                echo '<input type="radio" class="" name="jenis_kelamin" value="Laki-laki" checked/> Laki-laki <input type="radio" class="" name="jenis_kelamin" value="Perempuan" /> Perempuan ';
                                                            }else if ($show['jenis_kelamin'] == 'Perempuan'){
                                                                echo '<input type="radio" class="" name="jenis_kelamin" value="Laki-laki" /> Laki-laki <input type="radio" class="" name="jenis_kelamin" value="Perempuan" checked/> Perempuan';
                                                            }else{
                                                                echo '<td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>';
                                                            }
                                                        ?>
                                                          
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" value="<?php echo $show['email']; ?>"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="alamat" value=""><?php echo $show['alamat']; ?></textarea>
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
                $nama_lengkap = $_POST['nama_lengkap'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $date = $_POST['tgl_lahir'];
                $new_date = date('Y-m-d',strtotime($date));
                $jenis_user = $_POST['jenis_user'];
                $query = mysqli_query($mysqli, "INSERT INTO user VALUES(NULL,'$nama_lengkap','$username','$password', '$jenis_kelamin' , '$email', '$alamat', '$new_date', '$jenis_user')") or die ("Sql salah : ".mysqli_error($mysqli));
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
                $id_user = $_POST['id_user'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $query = mysqli_query($mysqli, "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', jenis_kelamin='$jenis_kelamin', email='$email', alamat='$alamat' WHERE id_user='$id_user'") or die ("Sql salah : ".mysqli_error($mysqli));
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
