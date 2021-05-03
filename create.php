<?php 
include 'config.php';

if (isset($_POST['Submit'])) {

$semester 	= $_POST ['semester'];
$ipk 		= $_POST ['ipk'];

$query = "INSERT INTO ipk (Semester, IPK) VALUES  ('$semester', '$ipk')";
$result = mysqli_query($config, $query);
	if ($result) {
		echo "<script>alert('Input data berhasil'); window.location.href='tabel_ipk.php' </script>";
	}
	else {
		echo "<script>alert('Input data gagal');  window.location.href='form_ipk.php' </script>";
	}

}
 ?>