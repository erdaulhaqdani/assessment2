<?php 
include 'config.php';
$semester 	= $_GET['Semester'];
$query 		= "DELETE FROM ipk WHERE Semester = '$semester' ";
$result 	= mysqli_query($config, $query);
if ($result) {
		echo "<script>alert('Hapus Data Gerhasil'); window.location.href='tabel_ipk.php' </script>";
	}
	else {
		echo "<script>alert('Hapus Data Gagal');  window.location.href='tabel_ipk.php' </script>";
	}

?>