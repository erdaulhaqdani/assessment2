<?php 
include 'config.php';

if (isset($_POST['Simpan'])){

$semester 	= $_POST ['semester'];
$ipk 		= $_POST ['ipk'];

$query = "UPDATE Ipk SET IPK = '$ipk' WHERE Semester= '$semester'";
$result = mysqli_query($config, $query);
	if ($result) {
		echo "<script>alert('Edit Data Berhasil'); window.location.href='tabel_ipk.php';</script>";
	}
	else {
		echo "<script>alert('Edit Data Gagal'); window.location.href='form_update.php' ;</script>";
	}
}
 ?>