<?php 

require 'functions.php';
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
			alert('Data Berhasil Ditambahkan!');
			document.location.href = 'admin/index.php';
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Ditambahkan!');
			document.location.href = 'admin/index.php';
		</script>";
	}
	
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Model Mobil</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 		<label for="id_mobil">Id Mobil</label>:
 		<input type="text" name="id_mobil" id="id_mobil">
 		<br>
 		<label for="nama_mobil">Nama Mobil</label>:
 		<input type="text" name="nama_mobil" id="nama_mobil">
 		<br>
 		<label for="gambar">Gambar</label>:
 		<input type="file" name="gambar" id="gambar">
 		<br>
 		<label for="warna">Warna</label>:
 		<input type="text" name="warna" id="warna">
 		<br>
 		<label for="tipe_mobil">Tipe Mobil</label>:
 		<input type="text" name="tipe_mobil" id="tipe_mobil">
 		<br>
 		<label for="jenis_tranisisi">Jenis Transisi</label>:
 		<input type="text" name="jenis_tranisisi" id="jenis_tranisisi">
 		<br>
 		<label for="tahun_rilis">Tahun Rilis</label>:
 		<input type="text" name="tahun_rilis" id="tahun_rilis">
 		<br>
 		<label for="harga">Harga</label>:
 		<input type="text" name="harga" id="harga">
 		<br>
 		<button type="submit" name="submit" id="submit">Tambah Data</button>
 		<button><a href="admin/index.php">Kembali</a></button>
 	</form>
 </body>
 </html>