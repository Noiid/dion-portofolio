<?php 

	session_start();

	if (!isset($_SESSION["id_user"])) {
		header("Location: login.php");
		# code...
	}

	include "admin/koneksi.php"; //memanggil file koneksi

	//perintah menghapus data sesuai id dipilih

	if (isset($_GET['id_post'])) {
		if (empty($_GET['id_post'])) {
			echo "<b>Data yang dihapus tidak ada";
			# code...
		}else{
			$delete = mysqli_query($mysqli, "DELETE FROM post WHERE id_post='$_GET[id_post]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 

		if($delete){
			echo "<script type='text/javascript'> alert('Berhasil menghapus data') </script>";
			"<script>document.location = 'user_home.php';</script>";
		}

		}
		# code...
	}


 ?>