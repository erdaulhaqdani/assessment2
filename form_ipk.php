<?php 
session_start();
if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form IPK</title>
</head>
<body>

	<form method="post" action="create.php" >
		<label for="semester" >Semester</label>
        <input class="form-content" type="text" name="semester" required="text">
        <br>
        <label for="ipk" >IPK</label>
        <input class="form-content" type="text" name="ipk" required="text">
        <br>
        <input type="submit" name="Submit" value="SUBMIT">
	</form>

</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>