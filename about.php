<?php 
session_start();
if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
	 Nama 	: Erda Ul'haq Dani Hipya
	 <br>
	 NIM	: 6701191011
	 <br>
	 Kelas	: D3SI-43-01
	 <br>
	 <a href="logout.php">Logout</a>
	 <a href="tabel_ipk.php">CRUD</a>
	 <center><img src="foto erda.jpg" width="280px" height="410px" border="1"></center>

</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>