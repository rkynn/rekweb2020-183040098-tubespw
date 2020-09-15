<?php
require 'functions.php';

// ambil data di URL
$id_mobil = $_GET["id_mobil"];

// query data mahasiswa berdasarkan id
$mbl = query("SELECT * FROM mobil WHERE id_mobil = $id_mobil")[0];


// cek apakah tombol ubah sudah ditekan atau belum
if( isset($_POST["ubah"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'admin/index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
				document.location.href = 'admin/index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mobil</title>
</head>
<body>
	<h1>Ubah data mobil</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_mobil" value="<?= $mbl["id_mobil"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mbl["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama_mobil">Nama Mobil : </label>
				<input type="text" name="nama_mobil" id="nama_mobil"  value="<?= $mbl['nama_mobil']; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar" value="<?= $mbl["gambar"]; ?>">
			</li>
			<li>
				<label for="warna">Warna : </label>
				<input type="text" name="warna" id="warna" value="<?= $mbl["warna"]; ?>">
			</li>
			<li>
				<label for="tipe_mobil">Tipe Mobil : </label>
				<input type="text" name="tipe_mobil" id="tipe_mobil" value="<?= $mbl["tipe_mobil"]; ?>">
			</li>
			<li>
				<label for="jenis_transisi">Jenis Transisi : </label>
				<input type="text" name="jenis_transisi" id="jenis_transisi" value="<?= $mbl["jenis_transisi"]; ?>">
			</li>
			<li>
				<label for="tahun_rilis">Tahun Rilis : </label>
				<input type="text" name="tahun_rilis" id="tahun_rilis" value="<?= $mbl["tahun_rilis"]; ?>">
			</li>
			<li>
				<label for="harga">Harga : </label>
				<input type="text" name="harga" id="harga" value="<?= $mbl["harga"]; ?>">
			</li>
			<li>
				<button type="submit" name="ubah">Ubah Data</button>
				<button><a href="admin/index.php">Kembali</a></button>
			</li>
		</ul>

	</form>




</body>
</html>