<?php 
session_start();
if (empty($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<a href="registrasi.php">Registrasi</a>
	 <form method="post" action="" class="form">
        <label for="username" >Username</label>
        <input class="form-content" type="text" name="username" required="text">
        <br>
        <label for="password" >Password</label>
        <input class="form-content" type="password" name="password" required="password"> 
        <br>
        <input type="submit" name="login" value="LOGIN">
    </form>

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
            echo "<script>alert('Login Berhasil');window.location.href='about.php';  </script>";
        } else{
            echo "<script>alert('Username atau Password Salah');</script>";
        }
    }
?>

</body>
</html>

<?php

} else{
    header("location: about.php");
} ?>