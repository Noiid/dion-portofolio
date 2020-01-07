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
            <?php 
            include 'koneksi.php';
            $query_user = "SELECT * FROM user WHERE id_user = $_SESSION[id_user]";
            $datashow = mysqli_query($mysqli, $query_user);
            $datashow_us = mysqli_fetch_array($datashow);
            $row_user = mysqli_num_rows($datashow);
            ?>
            <!-- /.row -->
            <main role="main" class="container">
                <div class="row">
                    <div class="col-md-7 blog-main text-right" >
                        <dl>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-user fa-fw"></i> Username
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['username']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-glide fa-fw"></i> Nama Lengkap
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['nama_lengkap']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-transgender fa-fw"></i> Jenis Kelamin
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['jenis_kelamin']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-envelope-o fa-fw"></i> Email
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['email']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-map-marker fa-fw"></i> Alamat
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['alamat']; ?>
                            </dd>
                            <dd>
                                <a id="modal-990160"
                                    href="#modal-container-990170<?php echo $datashow_us['id_user']; ?>" role="button"
                                    data-toggle="modal">Edit</a>
                                <div class="modal fade text-left"
                                    id="modal-container-990170<?php echo $datashow_us['id_user'];?>" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                        <input type="text" class="form-control" name="nama_lengkap"
                                                            value="<?php echo $datashow_us['nama_lengkap']; ?>" />
                                                        <input type="hidden" class="form-control" name="id_user"
                                                            value="<?php echo $datashow_us['id_user']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="username"
                                                            value="<?php echo $datashow_us['username']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            Password
                                                        </label>
                                                        <input type="password" class="form-control" name="password"
                                                            value="<?php echo $datashow_us['password']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    
                                                        <input name="jenis_kelamin" type="radio" value="Laki-laki" <?php if($datashow_us['jenis_kelamin']=='Laki-laki'){echo 'checked';}?> />
                                                            Laki-Laki  
                                                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($datashow_us['jenis_kelamin']=='Perempuan'){echo 'checked';}?> />
                                                            Perempuan

                                                   

                                                </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email"
                                                            value="<?php echo $datashow_us['email']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="alamat"
                                                            value=""><?php echo $datashow_us['alamat']; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="updateuser" />
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
                            </dd>
                        </dl>
                    </div><!-- /.blog-main -->
                    <div class="col-md-1">
                        <div class="vl"></div>
                    </div>
                    <aside class="col-md-4 blog-sidebar">
                        <div class="p-3 mb-3 bg-light rounded">
                            <div class="text-center">
                                <?php 
              if ($datashow_us['jenis_kelamin']== 'Laki-laki') {
                echo '<img src="images/male-user.png" class="img img-responsive" height="200px" width="auto">';
              }else{
                echo '<img src="images/female-user.png" class="img img-responsive" height="200px" width="auto">';
              }
            ?>
                            </div><br>


                            <p class="mb-0 text-center" style="font-size: 20px;"><em><?php echo $datashow_us['username']; ?></em></p>
                        </div>


                    </aside><!-- /.blog-sidebar -->

                </div><!-- /.row -->
                <hr>
            </main><!-- /.container -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php 
        include "koneksi.php";
        
            if (isset($_POST["updateuser"])) {
                $ID_USER = $_POST['id_user'];
                $NAMA_USER = $_POST['nama_lengkap'];
                $USERNAME = $_POST['username'];
                $PASSWORD = $_POST['password'];
                $JENIS_KELAMIN = $_POST['jenis_kelamin'];
                $EMAIL = $_POST['email'];
                $ALAMAT_USER = $_POST['alamat'];
                $query = mysqli_query($mysqli, "UPDATE user SET nama_lengkap='$NAMA_USER', username='$USERNAME', alamat='$ALAMAT_USER', jenis_kelamin='$JENIS_KELAMIN', email='$EMAIL' WHERE id_user='$ID_USER'") or die ("Sql salah : ".mysqli_error($mysqli));
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