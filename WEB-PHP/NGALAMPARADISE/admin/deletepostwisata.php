<?php 

	session_start();

	if (!isset($_SESSION["ID_USER"])) {
		header("Location: ../login.php");
		# code...
	}

	include "koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['ID_POSTWISATA'])) {
		if (empty($_GET['ID_POSTWISATA'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
			$delete = mysqli_query($mysqli, "DELETE FROM wisatapost WHERE ID_POSTWISATA='$_GET[ID_POSTWISATA]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 

		if($delete){
			echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			echo "<script>document.location = 'datapostwisata.php';</script>";
		}

		}
		# code...
	}


 ?>