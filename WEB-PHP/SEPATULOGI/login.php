
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/css/signin.css" rel="stylesheet">
     <script src="admin/js/jquery.min.js"></script>
      <script src="admin/js/bootstrap.min.js"></script>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="">
      <img class="mb-4" src="admin/images/SEP2.png" alt="" width="auto" height="200"><br>
      <h3 class="h3 mb-3 font-weight-normal">SIGN IN</h3>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Sign in"><br>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p><a href="index.php">Go to Sepatulogi.com</a><br><br>
      
      <a id="modal-990150" href="#modal-container-990150" role="button" data-toggle="modal"><p class="mt-2 mb-3 text-right">Create Account</p></a>
      
    </form>
     <?php 

        if (isset($_POST["login"])) {
            // $username = htmlentities(strip_tags(trim($_POST["username"])));
            // $password = htmlentities(strip_tags(trim($_POST["password"])));

            include ("admin/koneksi.php");
            // $username = mysqli_real_escape_string($mysqli, $username);
            // $password = mysqli_real_escape_string($mysqli, $password);
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $hasil = mysqli_query($mysqli, $query);
            $row = mysqli_num_rows($hasil);
            $data = mysqli_fetch_array($hasil);
            if($row==1){
                
              if ($data['level_user']==1) {
                session_start();
                $_SESSION['id_user'] = $data['id_user'];
                echo "<script>alert('Anda berhasil login');</script>";
                echo "<script>document.location = 'admin/index.php';</script>";
              }else{
                session_start();
                $_SESSION['id_user'] = $data['id_user'];
                echo "<script>alert('Anda berhasil login');</script>";
                echo "<script>document.location = 'user_cover.php';</script>";
              }             
            }else{
                echo "<script>alert('Anda gagal login');</script>";
                echo "<script>document.location = 'login.php';</script>";
            }
            mysqli_free_result($hasil);
            mysqli_close($mysqli);


        }

 ?>
    <div class="modal fade" id="modal-container-990150" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">
              Register
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
    <?php 
    include "admin/koneksi.php";
    if (isset($_POST["adduser"])) {
      $nama_lengkap = $_POST['nama_lengkap'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $date = $_POST['tgl_lahir'];
      $new_date = date('Y-m-d',strtotime($date));
      $query = mysqli_query($mysqli, "INSERT INTO user VALUES(NULL,'$nama_lengkap','$username','$password', '$jenis_kelamin' , '$email', '$alamat', '$new_date', 2)") or die ("Sql salah : ".mysqli_error($mysqli));
      if($query){
        echo "<script type='text/javascript'> alert('Berhasil register, silahkan bisa lakukan login.') </script>";
        echo "<script>document.location = 'user_cover.php';</script>";
      }else{
        echo "<script type='text/javascript'> alert('Maaf gagal register !!!') </script>";
        echo '<script>window.history.back()</script>';
      }
    }

    ?>
   
  </body>
</html>