<?php 
session_start();
if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel IPK</title>
</head>
<body>
		<a href="form_ipk.php">Tambah Data</a>
		<table border="1">
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
							<td align="center"><?=$no++?></td>
							<td align="center"><?= $row['Semester'] ?></td>
							<td align="center"><?= $row['IPK'] ?></td>

							<?php
							echo"
							<td><a href ='form_update.php?Semester=$row[Semester]' >Edit IPK </a> &emsp; <a href ='delete.php?Semester=$row[Semester]' >Hapus </a></td>
						</tr>
					</tbody>";		
					}
			 ?>	
		</table>
		<div class="paging" >
			Halaman:
			<?php for ($i=1; $i<=$pages ; $i++){ ?>
			<a href="tabel_ipk.php?halaman=<?php echo $i; ?>" > <?= $i ?> </a>
			<?php } ?>
		</div>


</body>
</html>

<?php	
} else{
	header("location: login.php");
	} 
?>