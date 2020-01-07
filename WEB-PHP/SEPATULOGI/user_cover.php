<?php 

    session_start();

    if (!isset($_SESSION['id_user'])) {
        header("Location: login.php");
    }
    include 'admin/koneksi.php';
    $data = mysqli_query($mysqli, "SELECT * from user WHERE id_user='$_SESSION[id_user]'");
    $datashow = mysqli_fetch_array($data);

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cover Sepatulogi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Sepatulogi.com</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="user_cover.php">Home</a>
            <a class="nav-link" href="user_logout.php">Logout</a>
          </nav>
        </div>
      </header>
      <main role="main" class="inner cover">
        <h3 class="cover-heading">Welcome to Sepatulogi.com, <?php echo $datashow['username']; ?> </h3><br>
        <div class="col-12 text-center">
          <a class="blog-header-logo text-dark" href="user_cover.php"><img src="admin/images/SEP.png" height="150px" width="auto"></a>
        </div>
        <h1 class="cover-heading">Sepatulogi.com</h1>
        <p class="lead">Sepatulogi is a news for a popular shoes, brand and tips or trick about shoes. We will provide reliable services that provide information about the shoes in a very actual, very current, and very experienced.</p>
        <p class="lead">
          <a href="user_home.php" class="btn btn-lg btn-secondary">Get Started</a>
        </p>
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </div>
      </footer>
    </div>    
  </body>
</html>
