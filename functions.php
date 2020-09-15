<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_183040098");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
// fungsi tambah data

function tambah($data)
{
	global $conn;

	$id_mobil = htmlspecialchars($data['id_mobil']);
	$nama_mobil = htmlspecialchars($data['nama_mobil']);
	// $gambar = htmlspecialchars($data['gambar']);
	//upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}
	$warna = htmlspecialchars($data['warna']);
	$tipe_mobil = htmlspecialchars($data['tipe_mobil']);
	$jenis_transisi = htmlspecialchars($data['jenis_transisi']);
	$tahun_rilis = htmlspecialchars($data['tahun_rilis']);
	$harga = htmlspecialchars($data['harga']);

	

	$query_tambah = "INSERT INTO mobil VALUES ('$id_mobil', '$gambar', '$nama_mobil',  '$warna', '$tipe_mobil', '$jenis_transisi', '$tahun_rilis', '$harga')";

	mysqli_query($conn, $query_tambah);
	
	return mysqli_affected_rows($conn);
}

function upload() {

	// global $conn;

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);

	return $namaFileBaru;
}

function hapus($id_mobil) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mobil WHERE id_mobil = $id_mobil");

	return mysqli_affected_rows($conn);
}



function ubah($data) {
	global $conn;
	
	$id_mobil = htmlspecialchars($data["id_mobil"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	$nama_mobil = htmlspecialchars($data['nama_mobil']);
	// $gambar = htmlspecialchars($data["gambar"]);
	$warna = htmlspecialchars($data['warna']);
	$tipe_mobil = htmlspecialchars($data['tipe_mobil']);
	$jenis_transisi = htmlspecialchars($data['jenis_transisi']);
	$tahun_rilis = htmlspecialchars($data['tahun_rilis']);
	$harga = htmlspecialchars($data['harga']);

	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE mobil SET
				-- id_mobil = '$id_mobil',
				nama_mobil = '$nama_mobil',
				gambar = '$gambar',
				warna = '$warna',
				tipe_mobil = '$tipe_mobil',
				jenis_transisi = '$jenis_transisi',
				tahun_rilis = '$tahun_rilis',
				harga = '$harga'
			  WHERE id_mobil = $id_mobil
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	

	// $results = mysql_query($query) or die(mysql_error()); 
}



function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('$username', '$password')");

	return mysqli_affected_rows($conn);

}

function cari($keyword) {
	$query = "SELECT * FROM mobil
				WHERE
			  id_mobil LIKE '%$keyword%' OR
			  nama_mobil LIKE '%$keyword%' OR
			  warna LIKE '%$keyword%' OR
			  tipe_mobil LIKE '%$keyword%' OR
			  jenis_transisi LIKE '%$keyword%' OR
			  tahun_rilis LIKE '%$keyword%' OR
			  harga LIKE '%$keyword%'
			";
	return query($query);
}


 ?>