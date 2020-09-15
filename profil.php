<?php 
	if (!isset($_GET['id_mobil'])) {
		header("Location : index.php");
		exit;
	}

	require 'functions.php';
	$id_mobil = $_GET["id_mobil"];

	$mbl = query("SELECT * FROM mobil WHERE id_mobil = $id_mobil")[0];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Spesifikasi Mobil</title>

 	<style>
 		h1 {
 			text-align: center;
 		}

 		.container {
			width: 80%;
			background-color: salmon;
			border: 1px solid black;
			margin: auto;
			border-radius: 15px;
		}

		table {
			color: black;
		}

		p a {
			color: white;
			text-decoration: none;
			border: 1px solid black;
			padding: 5px;
			border-radius: 10px;
			background-color: black;
			font-weight: bold;
		}

		p a:hover {
			color: black;
			background-color: white;
			font-weight: bold;
		}

		.gambar {
			width: 200px;
		}
 	</style>
 </head>
 <body>
 	<div class="container">
 	<h1>Spesifikasi mobil</h1>

 	<table border="1" cellspacing="0" cellpadding="5" align="center">
	 	<tr class="hdr">
			<th>ID Mobil</th>
			<th>Nama Mobil</th>
			<th>Gambar</th>
			<th>Warna</th>
			<th>Tipe Mobil</th>
			<th>Jenis Transisi</th>
			<th>Tahun Rilis</th>
			<th>Harga</th>
	 	</tr>
		<tr>
 			<td><?php echo $mbl["id_mobil"] ?></td>
 			<td><?php echo $mbl["nama_mobil"] ?></td>
 			<td><img class="gambar" src="assets/img/<?php echo $mbl["gambar"]; ?> "></td>
 			<td><?php echo $mbl["warna"] ?></td>
 			<td><?php echo $mbl["tipe_mobil"] ?></td>
 			<td><?php echo $mbl["jenis_transisi"] ?></td>
 			<td><?php echo $mbl["tahun_rilis"] ?></td>
 			<td><?php echo $mbl["harga"] ?></td>
 		</tr>
	 </table>

	 <p align="center"><a href="index.php">Kembali</a></p>
	 </div>
 </body>
 </html>