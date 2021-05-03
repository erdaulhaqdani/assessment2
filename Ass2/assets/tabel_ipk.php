<?php 
session_start();
if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>Tabel IPK</title>
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

		<a class="btn btn-primary" href="form_ipk.php" role="button" style="margin-top: 20px">Tambah Data</a>
		<table class="table table-striped" >
			<thead >
				<tr>
					<th > No </th>
					<th > Semester </td>
					<th > IPK </th>
					<th > Aksi</th> 
				</tr>
			</thead>
			<?php 
			include 'config.php';
				$halaman = 10;
				$page   = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				$mulai  = ($page>1) ? ($page * $halaman) - $halaman : 0;

				$result = mysqli_query($config, "SELECT * FROM ipk");
				$total  = mysqli_num_rows($result);
				$pages  = ceil($total/$halaman);   
				$query  = mysqli_query($config, "SELECT * FROM ipk LIMIT $mulai, $halaman");
				
				$no     = $mulai+1;
				foreach ($query as $row ) {

					?>
					<tbody>
						<tr>
							<th ><?=$no++?></th>
							<td ><?= $row['Semester'] ?></td>
							<td ><?= $row['IPK'] ?></td>
							<td> <a class="btn btn-primary" href="form_update.php?Semester=<?php echo $row['Semester']; ?>">Edit IPK</a>&emsp;
							<a class="btn btn-primary" href="delete.php?Semester=<?php echo $row['Semester']; ?>">Hapus</a></td>
							
						</tr>
					</tbody>
					<?php	
					}
			 ?>	
		</table>
		<div class="paging"  >
			<b>Halaman:
			<?php for ($i=1; $i<=$pages ; $i++){ ?>
			<a href="tabel_ipk.php?halaman=<?php echo $i; ?>" > <?= $i ?> </a>
			<?php } ?></b>
		</div>

</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>