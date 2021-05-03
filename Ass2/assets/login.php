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


	<title>Login</title>
</head>
<body>
	<center><form method="post" action="" class="form" style="width: 800px; margin-top: 30px;" >

	<div class="mb-3">
		<label for="username" class="form-label">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Enter Username" required="text">
	
	</div>

	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter Password" required="password">
	
	</div>
	
	<div class="d-grid gap-2 col-6 mx-auto">
	  <button class="btn btn-primary" type="submit" name="login">Login</button>
	  <a style="text-decoration: none; color: white;" href="registrasi.php"><button class="btn btn-primary" type="button" name="regis" style="width: 400px" >Registrasi</button></a>
	</div>
    </form></center>

    

<?php 
    include "config.php" ;
        if (isset($_POST['login'])) {
            $username   =$_POST['username'];
            $password   =$_POST['password'];
            
            $sql    = "SELECT * FROM registrasi WHERE Username = '$username' AND Password = '$password' ";
            $result = mysqli_query($config, $sql);
            $row    = $result->fetch_assoc();
        if (!empty($row)) {
            $_SESSION['user']=$user;
            echo "<script>alert('Login Berhasil');window.location.href='home.php';  </script>";
        } else{
            echo "<script>alert('Username atau Password Salah');</script>";
        }
    }
?>

</body>
</html>

<?php

} else{
    header("location: home.php");
} ?>