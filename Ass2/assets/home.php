<?php 
session_start();
if (isset($_SESSION['user'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Assessment 2 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tabel_ipk.php">Tabel IPK</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<center><h1 style="margin-top: 100px">
  HOME
  <small class="text-muted">Assessment 2 PABW</small>
</h2></center>

</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>