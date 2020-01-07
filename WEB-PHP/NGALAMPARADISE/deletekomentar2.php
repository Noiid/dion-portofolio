<?php 

	session_start();



	include "admin/koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['ID_KOMENTARBUDAYA'])) {
		if (empty($_GET['ID_KOMENTARBUDAYA'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
            $hasil = mysqli_query($mysqli, "SELECT ID_POSTBUDAYA FROM komentar_budaya WHERE ID_KOMENTARBUDAYA='$_GET[ID_KOMENTARBUDAYA]'");
                    $result = mysqli_fetch_array($hasil);
            $has = $result['ID_POSTBUDAYA'];
			$delete = mysqli_query($mysqli, "DELETE FROM komentar_budaya WHERE ID_KOMENTARBUDAYA='$_GET[ID_KOMENTARBUDAYA]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 
            
		if($delete){
			// echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			echo "<script>document.location = 'deskripsi2.php?ID_POSTKEBUDAYAAN=$has';</script>";
		}

		}
		# code...
	}


 ?>