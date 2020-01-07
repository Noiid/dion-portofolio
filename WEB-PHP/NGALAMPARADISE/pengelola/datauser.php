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
            $query_user = "SELECT * FROM user WHERE ID_USER = $_SESSION[ID_USER]";
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
                                <?php echo $datashow_us['USERNAME']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-glide fa-fw"></i> Nama Lengkap
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['NAMA_USER']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-transgender fa-fw"></i> Jenis Kelamin
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['JENIS_KELAMIN']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-envelope-o fa-fw"></i> Email
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['EMAIL']; ?>
                            </dd>
                            <dt style="font-size: 20px;">
                                <i class="fa fa-map-marker fa-fw"></i> Alamat
                            </dt>
                            <dd style="font-size: 20px;">
                                <?php echo $datashow_us['ALAMAT_USER']; ?>
                            </dd>
                            <dd>
                                <a id="modal-990160"
                                    href="#modal-container-990170<?php echo $datashow_us['ID_USER']; ?>" role="button"
                                    data-toggle="modal">Edit</a>
                                <div class="modal fade text-left"
                                    id="modal-container-990170<?php echo $datashow_us['ID_USER'];?>" role="dialog"
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
                                                        <input type="text" class="form-control" name="NAMA_USER"
                                                            value="<?php echo $datashow_us['NAMA_USER']; ?>" />
                                                        <input type="hidden" class="form-control" name="ID_USER"
                                                            value="<?php echo $datashow_us['ID_USER']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="USERNAME"
                                                            value="<?php echo $datashow_us['USERNAME']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            Password
                                                        </label>
                                                        <input type="password" class="form-control" name="PASSWORD"
                                                            value="<?php echo $datashow_us['PASSWORD']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    
                                                        <input name="JENIS_KELAMIN" type="radio" value="Laki-laki" <?php if($datashow_us['JENIS_KELAMIN']=='Laki-laki'){echo 'checked';}?> />
                                                            Laki-Laki  
                                                        <input type="radio" name="JENIS_KELAMIN" value="Perempuan" <?php if($datashow_us['JENIS_KELAMIN']=='Perempuan'){echo 'checked';}?> />
                                                            Perempuan

                                                   

                                                </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="EMAIL"
                                                            value="<?php echo $datashow_us['EMAIL']; ?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="ALAMAT_USER"
                                                            value=""><?php echo $datashow_us['ALAMAT_USER']; ?></textarea>
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
              if ($datashow_us['JENIS_KELAMIN']== 'Laki-laki') {
                echo '<img src="images/male-user.png" class="img img-responsive" height="200px" width="auto">';
              }else{
                echo '<img src="images/female-user.png" class="img img-responsive" height="200px" width="auto">';
              }
            ?>
                            </div><br>


                            <p class="mb-0 text-center" style="font-size: 20px;"><em><?php echo $datashow_us['USERNAME']; ?></em></p>
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
                $ID_USER = $_POST['ID_USER'];
                $NAMA_USER = $_POST['NAMA_USER'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
                $EMAIL = $_POST['EMAIL'];
                $ALAMAT_USER = $_POST['ALAMAT_USER'];
                $query = mysqli_query($mysqli, "UPDATE user SET NAMA_USER='$NAMA_USER', USERNAME='$USERNAME', ALAMAT_USER='$ALAMAT_USER', JENIS_KELAMIN='$JENIS_KELAMIN', EMAIL='$EMAIL' WHERE ID_USER='$ID_USER'") or die ("Sql salah : ".mysqli_error($mysqli));
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