<?php 
include 'config.php';

if (isset($_POST['Simpan'])){

$semester 	= $_POST ['Semester'];
$ipk 		= $_POST ['ipk'];

$query = "UPDATE ipk SET IPK = '$ipk' WHERE Semester= '$semester'";
$result = mysqli_query($config, $query);
	if ($result) {
		echo "<script>alert('Edit Data Berhasil');</script>";
	}
	else {
		echo "<script>alert('Edit Data Gagal'); window.location.href='form_update.php' ;</script>";
	}
}
 ?>