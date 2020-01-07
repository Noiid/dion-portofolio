<?php 

	session_start();



	include "admin/koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['ID_KOMENTARWISATA'])) {
		if (empty($_GET['ID_KOMENTARWISATA'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
            $hasil = mysqli_query($mysqli, "SELECT ID_POSTWISATA FROM komentar_wisata WHERE ID_KOMENTARWISATA='$_GET[ID_KOMENTARWISATA]'");
                    $result = mysqli_fetch_array($hasil);
            $has = $result['ID_POSTWISATA'];
			$delete = mysqli_query($mysqli, "DELETE FROM komentar_wisata WHERE ID_KOMENTARWISATA='$_GET[ID_KOMENTARWISATA]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 
            
		if($delete){
			// echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			echo "<script>document.location = 'deskripsi.php?ID_POSTWISATA=$has';</script>";
		}

		}
		# code...
	}


 ?>