<?php 
session_start();
if (isset($_SESSION['user'])) {
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
	<?php 
		include 'config.php';
		$semester 	= $_GET['Semester'];
		$query 	 	= mysqli_query($config, "SELECT  * FROM ipk WHERE Semester = '$semester' ");
		$row 		= mysqli_fetch_array($query);

	?>
<body>
	<form method="post" action="update.php">

		<label for="semester" >Semester</label>
        <input type="text" name="semester" disabled value="<?php echo $row['Semester']?>" >
        <br>
        <label for="ipk" >IPK</label>
        <input type="text" name="ipk" required="text" value="<?php echo $row['IPK']?>">
        <br>
        <input type="submit" name="Simpan" value="SAVE">
        <button type="reset" name="Reset" >RESET</button>
	</form>

</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>