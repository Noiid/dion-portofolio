<html> 
<head> 
  <title>Sepatulogi</title> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/carousel.css">
  <script src="js/bootstrap.min.js"></script>
</head> 
<body> 

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php"><img src="admin/images/SEP.png" height="150px" width="auto"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-secondary" href="login.php">Sign in</a>
        </div>
      </div>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header text-center">Sepatulogi.com</h1>
        <hr>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="index.php">Home</a>
        <?php 
        include 'admin/koneksi.php';
        $hasil = mysqli_query($mysqli, "SELECT * FROM kategori");
        $row = mysqli_num_rows($hasil);
        if ($row==0) {
          echo "Data kosong!";
        }else{


          while ($show = mysqli_fetch_array($hasil)) {
            $link_id = $show['id_kategori'];
           ?>
        <a class="p-2 text-muted" href="detailMenu.php?id_kategori=<?php echo $show['id_kategori']; ?>"><?php echo $show['nama_kategori']; ?></a>
        <?php 
          }
        }
         ?>
         <a class="p-2 text-muted" href="about.php">About</a>
         <a class="p-2 text-muted" href="contact.php">Contact</a>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <img src="admin/images/SEP2.png" height="300px" width="auto"><br><br><br><br>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-6 text-center">
        <h2>
          Our Mission
        </h2>
        <p>
          Sepatulogi is a news for a popular shoes, brand and tips or trick about shoes.
      </p>
      </div>
      <div class="col-6 text-center">
        <h2>
          Our Essence
        </h2>
        <p>
          At our core, Sepatulog operates in the latest, most popular, and certainly reliable info
        </p>
      </div>

    </div>
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-6 text-center">
        <h2>
          Our Promise
        </h2>
        <p>
          We will provide reliable services that provide information about the shoes in a very actual, very current, and very experienced
        </p>
      </div>
      <div class="col-6 text-center">
        <h2>
          Our Vibe
        </h2>
        <p>
          At Sepatulogi, we make magic. We dream it, and then do it-together-every day reinventing what's possible.
        </p>
      </div>
      
    </div>
        
        

        
        <hr class="featurette-divider">
        <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </div>
    
        


 </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body> 
</html> 