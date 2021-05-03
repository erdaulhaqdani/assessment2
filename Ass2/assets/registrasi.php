<?php 
session_start();
if (empty($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


	<title>Registrasi</title>
</head>
<body>

	 <center><form method="post" action="" class="form" style="width: 800px; margin-top: 30px; margin-bottom: 50px" >

	 	<div class="mb-3">
		<label for="nama" class="form-label">Nama Lengkap</label>
		<input type="text" class="form-control" name="nama" placeholder="Enter Nama Lengkap" required="text">
		</div>

		<div class="mb-3">
		<label for="nim" class="form-label">NIM</label>
		<input type="text" class="form-control" name="nim" placeholder="Enter NIM" required="text">
	
		</div>

		<div class="mb-3">
		<label for="kelas" class="form-label">Kelas</label>
		<input type="text" class="form-control" name="kelas" placeholder="Enter Kelas" required="text">
	
		</div>

		<div class="mb-3">
		<label for="username" class="form-label">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Enter Username" required="text">
	
		</div>

		<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter Password" required="password">
	
		</div>	

		<div class="mb-3">
		<label for="password" class="form-label">Konfimasi Password</label>
		<input type="password" class="form-control" name="confirm" placeholder="Repeat Password" required="password">
	
		</div>	

		<div class="d-grid gap-2 col-6 mx-auto">
			 <button class="btn btn-primary" type="submit" name="kumpul">Submit</button>
		  <button class="btn btn-primary" type="submit" name="login"><a href="login.php" style="text-decoration: none; color: white">Login</a></button>
		 
		</div>

    </form></center>

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
    header("location: home.php");
} ?>