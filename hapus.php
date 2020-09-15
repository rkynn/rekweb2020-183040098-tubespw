<?php 

	require 'functions.php';
	$id_mobil = $_GET['id_mobil'];

	if (hapus($id_mobil) > 0) {
		echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin/index.php';
			</script>";
	} else {
		echo "<script>
			alert('data gagal dihapus!');
			document.location.href = 'admin/index.php';
			</script>";
	}

 ?>