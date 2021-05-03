<?php 
session_start();
if (empty($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<a href="login.php">Login</a>
	 <form method="post" action="" class="form">
        <label for="nama" >Nama Lengkap</label>
        <input class="form-content" type="text" name="nama" required="text">
        <br>
        <label for="nim" >NIM</label>
        <input class="form-content" type="text" name="nim" required="text">
        <br>
        <label for="kelas" >Kelas</label>
        <input class="form-content" type="text" name="kelas" required="text">
        <br>
        <label for="username" >Username</label>
        <input class="form-content" type="text" name="username" required="text">
        <br>
        <label for="password" >Password</label>
        <input class="form-content" type="password" name="password" required="password"> 
        <br>
        <label for="confirm password" >Konfirmasi Password</label>
        <input class="form-content" type="password" name="confirm" required="password">
		<br>
        <input type="submit" name="kumpul" value="SUBMIT">
    </form>

<?php  
    include "config.php" ;
    if (isset($_POST['kumpul'])) {

            $nama 		=$_POST['nama'];
            $nim 		=$_POST['nim'];
            $kelas   	=$_POST['kelas'];
            $username   =$_POST['username'];
            $password  	=$_POST['password'];
            $confirm   	=$_POST['confirm'];

            $cek_nim = mysqli_query($config, "SELECT * FROM registrasi WHERE Nim = '$nim' ");
            $cek = strcmp($password, $confirm);

            if (mysqli_num_rows($cek_nim) < 1) {
            	if (!$cek) {
                    $mysqli = "INSERT INTO registrasi (id, Nama, Nim, Kelas, Username, Password) 
                            VALUES ('','$nama', '$nim','$kelas', '$username', '$password')";
                                
                    $result  = mysqli_query($config, $mysqli);
                    	if ($result) {
                          	echo "<script>alert('Registrasi Berhasil'); window.location.href='login.php'; </script>";
                        } else {
                            echo "<script>alert('Registrasi Gagal');</script>";
                   	    }
                }
                else {
                    echo "<script>alert('Konfirmasi password gagal');</script>";
                }       
            }
            else{
                echo "<script> alert('NIM yang anda masukkan telah terdaftar sebelumnya'); </script>";
            }
    }
?>

</body>
</html>

<?php

} else{
    header("location: about.php");
} ?>