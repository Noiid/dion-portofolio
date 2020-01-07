<?php 

	session_start();

	if (!isset($_SESSION["id_user"])) {
		header("Location: ../login.php");
		# code...
	}

	include "koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['id_kategori'])) {
		if (empty($_GET['id_kategori'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
			$delete = mysqli_query($mysqli, "DELETE FROM kategori WHERE id_kategori='$_GET[id_kategori]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 

		if($delete){
			echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			echo "<script>document.location = 'datakategori.php';</script>";
		}

		}
		# code...
	}


 ?>