<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="">NgalamParadise</a>
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
                            $perintah = mysqli_query($mysqli, "SELECT * from user WHERE ID_USER='$_SESSION[ID_USER]'");
                            $result = mysqli_fetch_array($perintah);

                        ?>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $result['USERNAME']; ?> <b class="caret"></b>
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
                    <img src="../logo.png" class="img img-responsive" width="auto" height="100">
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="datauser.php"><i class="fa fa-users fa-fw"></i> Data User</a>
                </li>
                <li>
                    <a href="datawisata.php"><i class="fa fa-plane fa-fw"></i> Data Kategori Wisata</a>
                </li>
                <li>
                    <a href="datapostwisata.php"><i class="fa fa-camera-retro fa-fw"></i> Data Post Wisata</a>
                </li>
                <li>
                    <a href="datakebudayaan.php"><i class="fa fa-asterisk fa-fw"></i> Data Kategori Kebudayaan</a>
                </li>
                <li>
                    <a href="datapostkebudayaan.php"><i class="fa fa-rebel fa-fw"></i> Data Post Kebudayaan</a>
                </li>
                <li>
                    <a href="dataevent.php"><i class="fa fa-calendar-check-o fa-fw"></i> Data Event</a>
                </li>
                <li>
                    <a href="datatransaksi.php"><i class="fa fa-credit-card fa-fw"></i> Data Transaksi</a>
                </li>
                <li>
                    <a href="datakontakus.php"><i class="fa fa-clipboard fa-fw"></i> Data Kritik dan Saran</a>
                </li>
                

            </ul>
        </div>
    </div>
</nav>