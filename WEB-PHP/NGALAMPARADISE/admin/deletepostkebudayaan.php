<?php 

	session_start();

	if (!isset($_SESSION["ID_USER"])) {
		header("Location: ../login.php");
		# code...
	}

	include "koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['ID_POSTKEBUDAYAAN'])) {
		if (empty($_GET['ID_POSTKEBUDAYAAN'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
			$delete = mysqli_query($mysqli, "DELETE FROM kebudayaanpost WHERE ID_POSTKEBUDAYAAN='$_GET[ID_POSTKEBUDAYAAN]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 

		if($delete){
			echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			echo "<script>document.location = 'datapostkebudayaan.php';</script>";
		}

		}
		# code...
	}


 ?>