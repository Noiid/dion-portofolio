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

    <title>Dashboard Pengelola NgalamParadise</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    <link href="css/startmin.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php 
            include 'koneksi.php';
            $query_user = "SELECT * FROM user";
            $hasil_user = mysqli_query($mysqli, $query_user);
            $row_user = mysqli_num_rows($hasil_user);

            $query_candi = "SELECT * FROM kebudayaanpost";
            $hasil_candi = mysqli_query($mysqli, $query_candi);
            $row_candi = mysqli_num_rows($hasil_candi);

            $query_event = "SELECT * FROM event";
            $hasil_event = mysqli_query($mysqli, $query_event);
            $row_event = mysqli_num_rows($hasil_event);

            $query_kebudayaan = "SELECT * FROM kebudayaan";
            $hasil_kebudayaan = mysqli_query($mysqli, $query_kebudayaan);
            $row_kebudayaan = mysqli_num_rows($hasil_kebudayaan);

            $query_membeli = "SELECT * FROM membeli";
            $hasil_membeli = mysqli_query($mysqli, $query_membeli);
            $row_membeli = mysqli_num_rows($hasil_membeli);

            

            $query_pengelola = "SELECT * FROM pengelola";
            $hasil_pengelola = mysqli_query($mysqli, $query_pengelola);
            $row_pengelola = mysqli_num_rows($hasil_pengelola);

            $query_wisata = "SELECT * FROM wisata";
            $hasil_wisata = mysqli_query($mysqli, $query_wisata);
            $row_wisata = mysqli_num_rows($hasil_wisata);

            $query_wisataalam = "SELECT * FROM wisatapost";
            $hasil_wisataalam = mysqli_query($mysqli, $query_wisataalam);
            $row_wisataalam = mysqli_num_rows($hasil_wisataalam);

            
         ?>
    <div id="wrapper">
        <?php
                include("nav.php");
            ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard Pengelola NgalamParadise</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable" id="tabs-37598">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#tab1" data-toggle="tab">Wisata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2" data-toggle="tab">Budaya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab3" data-toggle="tab">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab4" data-toggle="tab">Data Transaksi Event</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <br>
                                <a id="modal-990150" href="#modal-container-990150" role="button"
                                    data-toggle="modal"><button class=" btn btn-primary">Tambah Data</button></a>
                                <div class="modal fade" id="modal-container-990150" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Tambah Data Wisata Post
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Nama Wisata Post</label>
                                                        <input type="text" class="form-control"
                                                            name="NAMA_WISATAPOST" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Wisata</label>
                                                        <select name="ID_WISATA" class="form-control">


                                                            <?php 

                                                        $query = mysqli_query($mysqli, "SELECT * FROM wisata");
                                                        $hasil = mysqli_query($mysqli, "SELECT * FROM wisata");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        $row = mysqli_num_rows($hasil);
                                                        if ($row==0) {
                                                            echo "Data kosong!";
                                                        }else{


                                                        while ($show = mysqli_fetch_array($query)) {
                                                            # code...
                                                         ?>
                                                            <option value="<?php echo $show['ID_WISATA']; ?>">
                                                                <?php echo $show['JENIS_WISATA']; ?></option>

                                                            <?php }
                                                         }
                                                          ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Lat Wisata Post</label>
                                                        <input type="number" class="form-control"
                                                            name="LOKASI_WISATAPOST" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Long Wisata Post</label>
                                                        <input type="number" class="form-control"
                                                            name="LOKASI_WISATAPOST2" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 1 Wisata Post</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFO_WISATAPOST"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 2 Wisata Post</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFOWISATAPOST2"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Foto (Max. 3)</label>
                                                        <input type="file" class="form-control" name="gambar[]"
                                                            multiple />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="addpost" />
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID Wisata Post</th>
                                                <th>Jenis Wisata</th>
                                                <th>Nama Wisata Post</th>
                                                <th>Lokasi Lat Wisata Post</th>
                                                <th>Lokasi Long Wisata Post</th>
                                                <th>Info 1 Wisata Post</th>
                                                <th>Info 2 Wisata Post</th>
                                                <th>Foto Wisata Post 1</th>
                                                <th>Foto Wisata Post 2</th>
                                                <th>Foto Wisata Post 3</th>
                                                <th>Tanggal Post</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM wisatapost WHERE ID_USER = '$_SESSION[ID_USER]' ");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM wisatapost WHERE ID_USER = '$_SESSION[ID_USER]' ");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['ID_WISATA'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM wisata WHERE ID_WISATA='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                            <tr>

                                                <td><?php echo $show['ID_POSTWISATA']; ?></td>
                                                <td><?php echo $tampil['JENIS_WISATA']; ?></td>
                                                <td><?php echo $show['NAMA_WISATAPOST']; ?></td>
                                                <td><?php echo $show['LOKASI_WISATAPOST']; ?></td>
                                                <td><?php echo $show['LOKASI_WISATAPOST2']; ?></td>
                                                <td><?php echo substr($show['INFO_WISATAPOST'],0,200); ?>...</td>
                                                <td><?php echo substr($show['INFOWISATAPOST2'],0,200); ?>...</td>
                                                <td><img src="images/<?php echo $show['FOTO_WISATAPOST']; ?>"
                                                        height="auto" width="100px">
                                                <td><img src="images/<?php echo $show['FOTO_WISATAPOST2']; ?>"
                                                        height="auto" width="100px">
                                                <td><img src="images/<?php echo $show['FOTO_WISATAPOST3']; ?>"
                                                        height="auto" width="100px">
                                                <td><?php echo $show['TANGGAL_WISATAPOST']; ?></td>
                                                </td>

                                                <td>
                                                    <a id="modal-990160"
                                                        href="#modal-container-990160<?php echo $show['ID_POSTWISATA']; ?>"
                                                        role="button" data-toggle="modal"><button class=""
                                                            onclick="myFunction()">Edit</button></a>

                                                    <a
                                                        href="deletepostwisata.php?ID_POSTWISATA=<?php echo $show['ID_POSTWISATA']; ?>"><button>Delete</button></a>

                                                </td>

                                            </tr>
                                            <div class="modal fade"
                                                id="modal-container-990160<?php echo $show['ID_POSTWISATA']; ?>"
                                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">
                                                                Edit Data Post
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" method="post" action=""
                                                                enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label>Nama Wisata</label>
                                                                    <input type="text" class="form-control"
                                                                        name="NAMA_WISATAPOST"
                                                                        value="<?php echo $show['NAMA_WISATAPOST']; ?>" />
                                                                    <input type="hidden" class="form-control"
                                                                        name="ID_POSTWISATA"
                                                                        value="<?php echo $show['ID_POSTWISATA']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenis Wisata</label>
                                                                    <select name="ID_WISATA" class="form-control"
                                                                        value="<?php echo $show['ID_WISATA']; ?>">


                                                                        <?php 

                                                        $query4 = mysqli_query($mysqli, "SELECT * FROM wisata");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        


                                                        while ($datashow = mysqli_fetch_array($query4)) {
                                                            # code...
                                                            if($show['ID_WISATA'] == $datashow['ID_WISATA']){
                                                                ?>
                                                                        <option selected="selected"
                                                                            value="<?php echo $datashow['ID_WISATA']; ?>">
                                                                            <?php echo $datashow['JENIS_WISATA']; ?>
                                                                        </option>
                                                                        <?php
                                                                
                                                            }else{

                                                            
                                                         ?>

                                                                        <option
                                                                            value="<?php echo $datashow['ID_WISATA']; ?>">
                                                                            <?php echo $datashow['JENIS_WISATA']; ?>
                                                                        </option>

                                                                        <?php } 
                                                         }
                                                          ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Wisata Lat Post</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_WISATAPOST"
                                                                        value="<?php echo $show['LOKASI_WISATAPOST']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Wisata Long Post</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_WISATAPOST2"
                                                                        value="<?php echo $show['LOKASI_WISATAPOST2']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Deskripsi 1 Wisata Post</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="INFO_WISATAPOST"><?php echo $show['INFO_WISATAPOST']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Deskripsi 2 Wisata Post</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="INFOWISATAPOST2"><?php echo $show['INFOWISATAPOST2']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit"
                                                                        class="form-control btn btn-primary"
                                                                        name="updatepostwisata" />
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
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
                            <div class="tab-pane" id="tab2">
                                <br>
                                <a id="modal-990150" href="#modal-container-990156" role="button"
                                    data-toggle="modal"><button class=" btn btn-primary">Tambah Data</button></a>
                                <div class="modal fade" id="modal-container-990156" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">
                                                    Tambah Data Budaya
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Nama Budaya</label>
                                                        <input type="text" class="form-control" name="NAMA_BUDAYA" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kebudayaan</label>
                                                        <select name="ID_KEBUDAYAAN" class="form-control">


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
                                                            <option value="<?php echo $show['ID_KEBUDAYAAN']; ?>">
                                                                <?php echo $show['JENIS_KEBUDAYAAN']; ?></option>

                                                            <?php }
                                                         }
                                                          ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Lat Budaya</label>
                                                        <input type="text" class="form-control" name="LOKASI_BUDAYA" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lokasi Long Budaya</label>
                                                        <input type="text" class="form-control" name="LOKASI_BUDAYA2" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 1 Budaya</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFO_BUDAYA"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi 2 Budaya</label>
                                                        <textarea class="form-control ckeditor"
                                                            name="INFOBUDAYA2"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Foto (Max. 3)</label>
                                                        <input type="file" class="form-control" name="gambar2[]"
                                                            multiple />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="form-control btn btn-primary"
                                                            name="addpostbudaya" />
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID Budaya</th>
                                                <th>Jenis Kebudayaan</th>
                                                <th>Nama Budaya</th>
                                                <th>Lokasi Lat Budaya</th>
                                                <th>Lokasi Long Budaya</th>
                                                <th>Info 1 Budaya</th>
                                                <th>Info 2 Budaya</th>
                                                <th>Foto Budaya</th>
                                                <th>Foto Budaya 2</th>
                                                <th>Foto Budaya 3</th>
                                                <th>Tanggal Post Budaya</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM kebudayaanpost WHERE ID_USER = '$_SESSION[ID_USER]'");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM kebudayaanpost WHERE ID_USER = '$_SESSION[ID_USER]'");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['ID_KEBUDAYAAN'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM kebudayaan WHERE ID_KEBUDAYAAN='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                            <tr>

                                                <td><?php echo $show['ID_POSTKEBUDAYAAN']; ?></td>
                                                <td><?php echo $tampil['JENIS_KEBUDAYAAN']; ?></td>
                                                <td><?php echo $show['NAMA_BUDAYA']; ?></td>
                                                <td><?php echo $show['LOKASI_BUDAYA']; ?></td>
                                                <td><?php echo $show['LOKASI_BUDAYA2']; ?></td>
                                                <td><?php echo substr($show['INFO_BUDAYA'],0,200); ?>...</td>
                                                <td><?php echo substr($show['INFOBUDAYA2'],0,200); ?>...</td>
                                                <td><img src="../admin/images/<?php echo $show['FOTO_BUDAYA']; ?>"
                                                        height="100px" width="auto">
                                                <td><img src="../admin/images/<?php echo $show['FOTO_BUDAYA2']; ?>"
                                                        height="100px" width="auto">
                                                <td><img src="../admin/images/<?php echo $show['FOTO_BUDAYA3']; ?>"
                                                        height="100px" width="auto">
                                                <td><?php echo $show['TANGGAL_BUDAYAPOST']; ?></td>

                                                </td>

                                                <td>
                                                    <a id="modal-990160"
                                                        href="#modal-container-990160<?php echo $show['ID_POSTKEBUDAYAAN']; ?>"
                                                        role="button" data-toggle="modal"><button class=""
                                                            onclick="myFunction()">Edit</button></a>

                                                    <a
                                                        href="deletepostwisata.php?ID_POSTKEBUDAYAAN=<?php echo $show['ID_POSTKEBUDAYAAN']; ?>"><button>Delete</button></a>

                                                </td>

                                            </tr>
                                            <div class="modal fade"
                                                id="modal-container-990160<?php echo $show['ID_POSTKEBUDAYAAN']; ?>"
                                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">
                                                                Edit Data Post
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" method="post" action=""
                                                                enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label>Nama Budaya</label>
                                                                    <input type="text" class="form-control"
                                                                        name="NAMA_BUDAYA"
                                                                        value="<?php echo $show['NAMA_BUDAYA']; ?>" />
                                                                    <input type="hidden" class="form-control"
                                                                        name="ID_POSTKEBUDAYAAN"
                                                                        value="<?php echo $show['ID_POSTKEBUDAYAAN']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenis Budaya</label>
                                                                    <select name="ID_KEBUDAYAAN" class="form-control"
                                                                        value="<?php echo $show['ID_WISATA']; ?>">


                                                                        <?php 

                                                        $query4 = mysqli_query($mysqli, "SELECT * FROM kebudayaan   ");

                                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                                        


                                                        while ($datashow = mysqli_fetch_array($query4)) {
                                                            # code...
                                                            if($show['ID_KEBUDAYAAN'] == $datashow['ID_KEBUDAYAAN']){
                                                                ?>
                                                                        <option selected="selected"
                                                                            value="<?php echo $datashow['ID_KEBUDAYAAN']; ?>">
                                                                            <?php echo $datashow['JENIS_KEBUDAYAAN']; ?>
                                                                        </option>
                                                                        <?php
                                                                
                                                            }else{

                                                            
                                                         ?>

                                                                        <option
                                                                            value="<?php echo $datashow['ID_KEBUDAYAAN']; ?>">
                                                                            <?php echo $datashow['JENIS_KEBUDAYAAN']; ?>
                                                                        </option>

                                                                        <?php } 
                                                         }
                                                          ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Lat Budaya</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_BUDAYA"
                                                                        value="<?php echo $show['LOKASI_BUDAYA']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Long Budaya</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_BUDAYA2"
                                                                        value="<?php echo $show['LOKASI_BUDAYA2']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Deskripsi 1 Budaya</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="INFO_BUDAYA"><?php echo $show['INFO_BUDAYA']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Deskripsi 2 Budaya</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="INFOBUDAYA2"><?php echo $show['INFOBUDAYA2']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="submit"
                                                                        class="form-control btn btn-primary"
                                                                        name="updatepostbudaya" />
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
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
                            <div class="tab-pane" id="tab3">
                            <br>
                            <a id="modal-990150" href="#modal-container-990110" role="button" data-toggle="modal"><button
                            class=" btn btn-primary">Tambah Data</button></a>
                    <div class="modal fade" id="modal-container-990110" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">
                                        Tambah Data Event
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Event</label>
                                            <input type="text" class="form-control" name="NAMA_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi Event</label>
                                            <input type="text" class="form-control" name="LOKASI_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Tiket Event</label>
                                            <input type="number" class="form-control" name="HARGA_TIKET" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Deskripsi Event</label>
                                            <textarea class="form-control ckeditor" name="DESKRIPSI_EVENT"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Event</label>
                                            <input type="date" class="form-control" name="TANGGAL_EVENT" />
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" class="form-control" name="gambar[]" multiple />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="form-control btn btn-primary" name="addevent" />
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID Event</th>
                                                <th>Nama Event Post</th>
                                                <th>Lokasi Wisata Post</th>
                                                <th>Deskripsi Event Post</th>
                                                <th>Foto Event</th>
                                                <th>Tanggal Event Post</th>
                                                <th>Rekening Bank Penyelenggara </th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                    $query = mysqli_query($mysqli, "SELECT * FROM event WHERE ID_USER = '$_SESSION[ID_USER]' ");
                                    $hasil = mysqli_query($mysqli, "SELECT * FROM event WHERE ID_USER = '$_SESSION[ID_USER]' ");

                                    //perintah menampilkan semua stok di tabel jual dengan perulangan
                                    $row = mysqli_num_rows($hasil);
                                    if ($row==0) {
                                        echo "Data kosong!";
                                    }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        $kat = $show['ID_EVENT'];
                                        $qq = mysqli_query($mysqli, "SELECT * FROM event WHERE ID_EVENT='$kat' ");
                                        $tampil = mysqli_fetch_array($qq);
                                     ?>
                                            <tr>

                                                <td><?php echo $show['ID_EVENT']; ?></td>
                                                <td><?php echo $show['NAMA_EVENT']; ?></td>
                                                <td><?php echo $show['LOKASI_EVENT']; ?></td>
                                                <td><?php echo substr($show['DESKRIPSI_EVENT'],0,200); ?></td>
                                                <td><img src="../event/<?php echo $show['FOTO_EVENT']; ?>" height="auto"
                                                        width="100px">
                                                <td><?php echo $show['TANGGAL_EVENT']; ?></td>
                                                <td><?php echo $show['REKENING_EVENT']; ?></td>
                                                </td>

                                                <td>
                                                    <a id="modal-990160"
                                                        href="#modal-container-990160<?php echo $show['ID_EVENT']; ?>"
                                                        role="button" data-toggle="modal"><button class=""
                                                            onclick="myFunction()">Edit</button></a>

                                                    <a
                                                        href="deletepostwisata.php?ID_EVENT=<?php echo $show['ID_EVENT']; ?>"><button>Delete</button></a>

                                                </td>

                                            </tr>
                                            <div class="modal fade"
                                                id="modal-container-990160<?php echo $show['ID_EVENT']; ?>"
                                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">
                                                                Edit Data Post
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" method="post" action=""
                                                                enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label>Nama Event</label>
                                                                    <input type="text" class="form-control"
                                                                        name="NAMA_EVENT"
                                                                        value="<?php echo $show['NAMA_EVENT']; ?>" />
                                                                    <input type="hidden" class="form-control"
                                                                        name="ID_EVENT"
                                                                        value="<?php echo $show['ID_EVENT']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Event Post</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_EVENT"
                                                                        value="<?php echo $show['LOKASI_EVENT']; ?>" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Deskripsi Event Post</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="DESKRIPSI_EVENT"><?php echo $show['DESKRIPSI_EVENT']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Event Post</label>
                                                                    <input type="date" class="form-control"
                                                                        name="TANGGAL_EVENT"
                                                                        value="<?php echo $show['TANGGAL_EVENT']; ?>" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="submit"
                                                                        class="form-control btn btn-primary"
                                                                        name="updatepost1" />
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
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

                            <div class="tab-pane" id="tab4">
                            
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>ID User</th>
                                                <th>ID Event</th>
                                                <th>Jumlah Beli</th>
                                                <th>Total Bayar</th>
                                                <th>Tanggal Beli</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Status</th>
                                                <th>Bukti Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                        $query11 = mysqli_query($mysqli, "SELECT * FROM event WHERE ID_USER = '$_SESSION[ID_USER]' ");
                                        // $show2 = mysqli_fetch_array($query11);
                                        while ($show2 = mysqli_fetch_array($query11)) {
                                        // $query = mysqli_query($mysqli, "SELECT DISTINCT m.ID_USER, m.ID_EVENT, m.JUMLAH_BELI, m.TOTAL_BAYAR, m.TANGGAL_BELI, m.KODE_PEMBAYARAN, m.STATUS, m.GAMBARH FROM membeli m INNER JOIN event e WHERE e.ID_USER = $_SESSION[ID_USER] && e.ID_EVENT == m.ID_EVENT");
                                        $query = mysqli_query($mysqli, "SELECT * from membeli where ID_EVENT='$show2[ID_EVENT]'");
                                        
                                        $hasil = mysqli_query($mysqli, "SELECT * from membeli where ID_EVENT='$show2[ID_EVENT]'");

                                        //perintah menampilkan semua stok di tabel jual dengan perulangan
                                        $row = mysqli_num_rows($hasil);
                                        if ($row==0) {
                                            echo "Data kosong!";
                                        }else{


                                    while ($show = mysqli_fetch_array($query)) {
                                        // $kat = $show['ID_EVENT'];
                                        // $qq = mysqli_query($mysqli, "SELECT * FROM event WHERE ID_EVENT='$kat' ");
                                        // $tampil = mysqli_fetch_array($qq);
                                     ?>
                                            <tr>

                                                <td><?php echo $show['ID_USER']; ?></td>
                                                <td><?php echo $show['ID_EVENT']; ?></td>
                                                <td><?php echo $show['JUMLAH_BELI']; ?></td>
                                                <td><?php echo $show['TOTAL_BAYAR']; ?></td>
                                                <td><?php echo $show['TANGGAL_BELI']; ?></td>
                                                <td><?php echo $show['KODE_PEMBAYARAN']; ?></td>
                                                <td><?php echo $show['STATUS']; ?></td>
                                                <td><?php echo $show['GAMBARH']; ?></td>



                                            </tr>
                                            <div class="modal fade"
                                                id="modal-container-990160<?php echo $show['ID_EVENT']; ?>"
                                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">
                                                                Edit Data Post
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form role="form" method="post" action=""
                                                                enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label>Nama Event</label>
                                                                    <input type="text" class="form-control"
                                                                        name="NAMA_EVENT"
                                                                        value="<?php echo $show['NAMA_EVENT']; ?>" />
                                                                    <input type="hidden" class="form-control"
                                                                        name="ID_EVENT"
                                                                        value="<?php echo $show['ID_EVENT']; ?>" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Lokasi Event Post</label>
                                                                    <input type="text" class="form-control"
                                                                        name="LOKASI_EVENT"
                                                                        value="<?php echo $show['LOKASI_EVENT']; ?>" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Deskripsi Event Post</label>
                                                                    <textarea class="form-control ckeditor"
                                                                        name="DESKRIPSI_EVENT"><?php echo $show['DESKRIPSI_EVENT']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Event Post</label>
                                                                    <input type="date" class="form-control"
                                                                        name="TANGGAL_EVENT"
                                                                        value="<?php echo $show['TANGGAL_EVENT']; ?>" />
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="submit"
                                                                        class="form-control btn btn-primary"
                                                                        name="updatepost1" />
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <?php }
                                     }
                                    }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php 
        include "koneksi.php";
            if (isset($_POST["addevent"])) {
                $NAMA_EVENT = $_POST['NAMA_EVENT'];
                $LOKASI_EVENT = $_POST['LOKASI_EVENT'];
                $TANGGAL_EVENT =$_POST['TANGGAL_EVENT'];
                $HARGA_TIKET = $_POST['HARGA_TIKET'];
                $DESKRIPSI_EVENT = strip_tags($_POST['DESKRIPSI_EVENT']);

                $code = $_FILES['gambar']['error'];
                $jumlah = count($_FILES['gambar']['name']);
                $jumlah = count($_FILES['gambar']['name']);
                if ($jumlah > 0) {
                    $gambar = array();
                    for ($i=0; $i < $jumlah; $i++) { 
                        $file_name = $_FILES['gambar']['name'][$i];
                        $tmp_name = $_FILES['gambar']['tmp_name'][$i];	
                        $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                        // $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";			
                        move_uploaded_file($tmp_name, "../event/".$file_name);
                        $gambar[$i] = $file_name; 								
                    }
                }
                
                $query = mysqli_query($mysqli, "INSERT INTO event VALUES(NULL,'$NAMA_EVENT', '$TANGGAL_EVENT', '$LOKASI_EVENT', '$HARGA_TIKET','$gambar[0]','$DESKRIPSI_EVENT' ,NULL, '$_SESSION[ID_USER]')") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'index.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }
                
                
                
                
            }

        ?>
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepost1"])) {
                $ID_EVENT = $_POST['ID_EVENT'];
                $NAMA_EVENT = $_POST['NAMA_EVENT'];
                $LOKASI_EVENT = $_POST['LOKASI_EVENT'];
                $TANGGAL_EVENT = $_POST['TANGGAL_EVENT'];
                $DESKRIPSI_EVENT = strip_tags($_POST['DESKRIPSI_EVENT']);
                $query = mysqli_query($mysqli, "UPDATE event SET NAMA_EVENT='$NAMA_EVENT',LOKASI_EVENT='$LOKASI_EVENT',DESKRIPSI_EVENT='$DESKRIPSI_EVENT',TANGGAL_EVENT='$TANGGAL_EVENT' WHERE ID_EVENT='$ID_EVENT'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'index.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <?php 
        include "koneksi.php";
            if (isset($_POST["addpost"])) {
                $nama_folder="images/upload";
                $tgl_post = date('Y-m-d');
                $NAMA_WISATAPOST = $_POST['NAMA_WISATAPOST'];
                $LOKASI_WISATAPOST = $_POST['LOKASI_WISATAPOST'];
                $LOKASI_WISATAPOST2 = $_POST['LOKASI_WISATAPOST2'];
                $ID_WISATA = $_POST['ID_WISATA'];
                $INFO_WISATAPOST = strip_tags($_POST['INFO_WISATAPOST']);
                $INFOWISATAPOST2 = strip_tags($_POST['INFOWISATAPOST2']);
                $code = $_FILES['gambar']['error'];
                $jumlah = count($_FILES['gambar']['name']);
                $jumlah = count($_FILES['gambar']['name']);
                if ($jumlah > 0) {
                    $gambar = array();
                    for ($i=0; $i < $jumlah; $i++) { 
                        $file_name = $_FILES['gambar']['name'][$i];
                        $tmp_name = $_FILES['gambar']['tmp_name'][$i];	
                        $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                        // $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";			
                        move_uploaded_file($tmp_name, "../admin/images/".$file_name);
                        $gambar[$i] = $file_name; 								
                    }
                    $query = mysqli_query($mysqli, "INSERT INTO wisatapost VALUES(NULL,'$ID_WISATA' ,'$NAMA_WISATAPOST', '$LOKASI_WISATAPOST', '$LOKASI_WISATAPOST2', '$INFO_WISATAPOST', '$INFOWISATAPOST2','$gambar[0]','$gambar[1]','$gambar[2]','$tgl_post','$_SESSION[ID_USER]' )") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'index.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }			
                }
                else{
                    echo "<script type='text/javascript'> alert('Gambar Tidak Ada') </script>";
                    echo '<script>window.history.back()</script>';
                }                           
                
            }

        ?>
        <?php 
        include "koneksi.php";
            if (isset($_POST["addpostbudaya"])) {
                $nama_folder="images/upload";
                $tgl_post = date('Y-m-d');
                $NAMA_BUDAYA = $_POST['NAMA_BUDAYA'];
                $LOKASI_BUDAYA = $_POST['LOKASI_BUDAYA'];
                $LOKASI_BUDAYA2 = $_POST['LOKASI_BUDAYA2'];
                $ID_KEBUDAYAAN = $_POST['ID_KEBUDAYAAN'];
                $INFO_BUDAYA = strip_tags($_POST['INFO_BUDAYA']);
                $INFOBUDAYA2 = strip_tags($_POST['INFOBUDAYA2']);
                $code = $_FILES['gambar2']['error'];
                $jumlah = count($_FILES['gambar2']['name']);
                $jumlah = count($_FILES['gambar2']['name']);
                if ($jumlah > 0) {
                    $gambar = array();
                    for ($i=0; $i < $jumlah; $i++) { 
                        $file_name = $_FILES['gambar2']['name'][$i];
                        $tmp_name = $_FILES['gambar2']['tmp_name'][$i];	
                        $file_ext   = pathinfo($file_name, PATHINFO_EXTENSION);	
                        // $path = "$nama_folder/$NAMA_WISATAPOST[$i].$file_ext";			
                        move_uploaded_file($tmp_name, "../admin/images/".$file_name);
                        $gambar[$i] = $file_name; 								
                    }
                    $query = mysqli_query($mysqli, "INSERT INTO kebudayaanpost VALUES(NULL,'$ID_KEBUDAYAAN' ,'$NAMA_BUDAYA', '$LOKASI_BUDAYA', '$LOKASI_BUDAYA2', '$INFO_BUDAYA', '$INFOBUDAYA2','$gambar[0]','$gambar[1]','$gambar[2]','$tgl_post','$_SESSION[ID_USER]')") or die ("Sql salah : ".mysqli_error($mysqli));
                    if($query){
                        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
                        echo "<script>document.location = 'index.php';</script>";
                    }else{
                        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
                        echo '<script>window.history.back()</script>';
                     }			
                }
                else{
                    echo "<script type='text/javascript'> alert('Gambar Tidak Ada') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }
            ?>
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepostwisata"])) {
                $ID_POSTWISATA = $_POST['ID_POSTWISATA'];
                $ID_WISATA = $_POST['ID_WISATA'];
                $NAMA_WISATAPOST = $_POST['NAMA_WISATAPOST'];
                $LOKASI_WISATAPOST = $_POST['LOKASI_WISATAPOST'];
                $LOKASI_WISATAPOST2 = $_POST['LOKASI_WISATAPOST2'];
                $INFO_WISATAPOST = strip_tags($_POST['INFO_WISATAPOST']);
                $INFOWISATAPOST2 = strip_tags($_POST['INFOWISATAPOST2']);
                $query = mysqli_query($mysqli, "UPDATE wisatapost SET ID_WISATA='$ID_WISATA', NAMA_WISATAPOST='$NAMA_WISATAPOST',LOKASI_WISATAPOST='$LOKASI_WISATAPOST',LOKASI_WISATAPOST2='$LOKASI_WISATAPOST2', INFO_WISATAPOST='$INFO_WISATAPOST',INFOWISATAPOST2='$INFOWISATAPOST2' WHERE ID_POSTWISATA='$ID_POSTWISATA'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'index.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <?php 
        include "koneksi.php";
        
            if (isset($_POST["updatepostbudaya"])) {
                $ID_POSTKEBUDAYAAN = $_POST['ID_POSTKEBUDAYAAN'];
                $NAMA_BUDAYA = $_POST['NAMA_BUDAYA'];
                $ID_KEBUDAYAAN = $_POST['ID_KEBUDAYAAN'];
                $LOKASI_BUDAYA = $_POST['LOKASI_BUDAYA'];
                $LOKASI_BUDAYA2 = $_POST['LOKASI_BUDAYA2'];
                $INFO_BUDAYA = strip_tags($_POST['INFO_BUDAYA']);
                $INFOBUDAYA2 = strip_tags($_POST['INFOBUDAYA2']);
                $query = mysqli_query($mysqli, "UPDATE kebudayaanpost SET ID_KEBUDAYAAN='$ID_KEBUDAYAAN',NAMA_BUDAYA='$NAMA_BUDAYA',LOKASI_BUDAYA='$LOKASI_BUDAYA',LOKASI_BUDAYA2='$LOKASI_BUDAYA2', INFO_BUDAYA='$INFO_BUDAYA',INFOBUDAYA2='$INFOBUDAYA2' WHERE ID_POSTKEBUDAYAAN='$ID_POSTKEBUDAYAAN'") or die ("Sql salah : ".mysqli_error($mysqli));
                if($query){
                    echo "<script type='text/javascript'> alert('Berhasil meng-update data') </script>";
                    echo "<script>document.location = 'index.php';</script>";
                }else{
                    echo "<script type='text/javascript'> alert('Maaf gagal meng-update data !!!') </script>";
                    echo '<script>window.history.back()</script>';
                }
            }

        ?>
        <!-- /#page-wrapper -->

    </div>
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