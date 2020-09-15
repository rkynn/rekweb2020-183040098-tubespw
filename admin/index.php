<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: admin.php");
	exit;
}


	require '../functions.php';

$mobil = query("SELECT * FROM mobil");

if( isset($_POST["cari"]) ) {
	$mobil = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="../assets/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/styleIndexAdmin.css">

	<title>Tugas Besar | Halaman Admin</title>

	<style>
		.form-inline{
			margin-left: 50px;
		}

	</style>

</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <form class="form-inline my-2 my-lg-0 searchbox" action="" method="post">
		      <input class="form-control mr-sm-2" type="search" placeholder="Pencarian . ." aria-label="Search" name="keyword" id="keyword">
		      <button name="cari" class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tombol-cari">Cari</button>
	    </form>
	    </ul>
	    
	    <a href="../tambah.php"  class="btn btn-info" role="button">Tambah Data</button></a>
		<a href="../logout.php" class="logout btn btn-danger" role="button">Logout</a>
	  </div>
	</nav>

	<div id="kontainer" class="container">
		<h1>Katalog Mobil</h1>
		
		<br>

		<table border="1" cellpadding="10" cellspacing="0">

			<tr>
				<th>No</th>
				<th>Aksi</th>
				<th>ID Mobil</th>
				<th>Nama Mobil</th>
				<th>Gambar</th>
				<th>Warna</th>
				<th>Tipe Mobil</th>
				<th>Jenis Transisi</th>
				<th>Tahun Rilis</th>
				<th>Harga</th>
			</tr>

			<?php if (empty($mobil)) :?>
			 	<tr>
			 		<td colspan="8">
			 			<h1 align="center" class="data">Data Tidak Ditemukan!</h1>
			 		</td>
			 	</tr>
			 <?php else : ?>

				<?php $i = 1; ?>
				<?php foreach( $mobil as $mbl ) : ?>
						<tr>
							<td class="no">
								<?php echo $i; ?>
							</td>
							<td>
								<div class="input-group">
								<a href="../ubah.php?id_mobil=<?= $mbl["id_mobil"]; ?>" class="btn btn-warning" role="button"><span class="oi oi-pencil"></span> Ubah</a>
							
								<a href="../hapus.php?id_mobil=<?=$mbl['id_mobil'];?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger" role="button"><span class="oi oi-trash"></span> Hapus</a>
							</td>
							<td>
								<?php echo $mbl['id_mobil']; ?>
							</td>
							<td>
								<?php echo $mbl['nama_mobil']; ?>
							</td>
							<td>
								<img src="../assets/img/<?= $mbl['gambar'] ?>" width="200px">
							</td>
							<td>
								<?php echo $mbl['warna']; ?>
							</td>
							<td>
								<?php echo $mbl['tipe_mobil']; ?>
							</td>
							<td>
								<?php echo $mbl['jenis_transisi']; ?>
							</td>
							<td>
								<?php echo $mbl['tahun_rilis']; ?>
							</td>
							<td>
								<?php echo $mbl['harga']; ?>
							</td>
						</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			<?php endif ?>
			
		</table>
	</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="../js/ajax.js"></script>

</body>
</html>