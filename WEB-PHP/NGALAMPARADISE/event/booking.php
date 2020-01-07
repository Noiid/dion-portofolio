<?php
include '../admin/koneksi.php';

 

// menyimpan data kedalam variabel
if (isset($_POST["pesan"])){
    $id_event        	 = $_POST['idevent'];
    $id_user          	 = $_POST['iduser'];
    $angka               = $_POST['angkaTampil'];
    $jmltiket         	 = $_POST['totalbeli'];
    if($_POST['totalbeli']>=2){
        $totalharga			 = ($_POST['harga']*$jmltiket)-$_POST['harga']*0.125;
    }else{
        $totalharga			 = $_POST['harga']*$jmltiket;
    }

    $tgl=date('Y-m-d');
    $kode_bayar 		 =$_POST['kode_bayar'];
    $status = 'Upload Bukti Pembayaran';
    $cek = 0;

    $query4 = mysqli_query($mysqli, "SELECT * FROM proses");

    while ($datashow = mysqli_fetch_array($query4)) {
    if($id_event==$datashow['ID_EVENTP']){
        $jmltiket = $datashow['JUMLAH_TIKET']+$jmltiket;
        $totalharga = $_POST['harga'] * $jmltiket;
        $cek = 1;

    } 
}
    if($cek==1){
        $query9 = mysqli_query($mysqli, "UPDATE proses SET JUMLAH_TIKET='$jmltiket',TOTAL_BAYARP='$totalharga' WHERE ID_EVENTP='$id_event'") or die ("Sql salah : ".mysqli_error($mysqli));
    }else{
        $query = mysqli_query($mysqli, "INSERT INTO proses values(NULL,'$id_user','$id_event','$jmltiket','$totalharga','$tgl','$status', '$kode_bayar', NULL, NOW())") or die ("Sql salah : ".mysqli_error($mysqli));

    }   

    // query SQL untuk insert data
    // $query="INSERT INTO proses values ID_PROSES=NULL, ID_USERP='$id_user',ID_EVENTP='$idevent',JUMLAH_TIKET='$jmltiket',TOTAL_BAYARP='$totalharga',TANGGAL_BELIP='$tgl', STATUSP='Upload Bukti Pembayaran', KODE_PEMBAYARANP='$kode_bayar'";
    // $proses=mysqli_query($koneksi, $query);
 
    // mengalihkan ke halaman index.php
    if($cek==0 || $cek==1){
        echo "<script type='text/javascript'> alert('Berhasil meng-upload data') </script>";
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan Tiket</title>
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/bootstrap.min.css" rel="stylesheet">
    <link href="layout/styles/coba.css" rel="stylesheet">

    
</head>

<body>
    <?php    
    $query2 = mysqli_query($mysqli, "SELECT * FROM event where ID_EVENT = '$id_event'");
	$show = mysqli_fetch_array($query2); ?>
    <div class="popup popup-wrapper" id="topup<?php echo $id_event; ?>" >
        <h3 style="color: white; text-align: center; background-color: black; padding: 10px">Pilih Metode Pembayaran
        </h3>

        <div id="card-256019<?php echo $id_event; ?>" style="margin-top: 10px">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <a class="card-link collapsed" data-toggle="collapse"
                        data-parent="#card-256019<?php echo $id_event; ?>"
                        href="#card-element-342598<?php echo $id_event; ?>"
                        style="color: black; font-size: 20px">Pembayaran
                        Melalui Indomart atau Alfamart</a>
                </div>
                <div id="card-element-342598<?php echo $id_event; ?>" class="collapse">
                    <div  class="card-body" style="text-align: center;margin-top: 20px">
                        Silakan Tunjukkan Kode Pembayaran Berikut ini kepada Kasir
                        <h3 style="color: black"><?php echo $kode_bayar;?></h3>
                        <br>
                        <h5>Harga Tiket Rp <?php echo $show['HARGA_TIKET'] ?></h5>
                        <br>
                        Atau Kode QR Berikut ini
                        <br>
                        <img src="images/event/qr.png">
                    </div>
                    
                    <div style="text-align: center; margin-bottom: 20px">
                    Waktu Anda untuk Transfer 30 Menit
                    <br>
                    <br>
                    <a href="../profile.php"  class="btn btn-primary">Lanjutkan Pemesanan</a>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <a class="card-link collapsed" data-toggle="collapse"
                        data-parent="#card-256019<?php echo $id_event; ?>"
                        href="#card-element-750462<?php echo $id_event; ?>"
                        style="color: black;  font-size: 20px">Pembayaran
                        Melalui Rekening Mandiri</a>
                </div>
                <div id="card-element-750462<?php echo $id_event; ?>" class="collapse">
                    <div class="card-body" style="text-align: center;margin-top: 20px">
                        Silakan Transfer ke nomor Rekening dibawah ini sesuai nominal harga tiket
                        <h3><?php echo $show['REKENING_EVENT'] ?></h3>
                        <br>
                        <h5>Harga Tiket Rp <?php echo $show['HARGA_TIKET'] ?></h5>
                        <br>
                        Jika anda menggunakan Mobile banking Scan Kode QR Berikut ini
                        <br>
                        <img src="images/event/qr.png">
                    </div>
                    <div style="text-align: center; margin-bottom: 20px">
                    Waktu Anda untuk Transfer 30 Menit
                    <br>
                    <br>
                    <a href="../profile.php"  class="btn btn-primary">Lanjutkan Pemesanan</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
        // echo "<script>document.location = '../profile.php';</script>";
    }else{
        echo "<script type='text/javascript'> alert('Maaf gagal meng-upload data !!!') </script>";
        echo '<script>window.history.back()</script>';
    }
    }

?>

    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>

    <script src="layout/js/jquery.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
    <script src="layout/js/scripts.js"></script>

    
</body>

</html>