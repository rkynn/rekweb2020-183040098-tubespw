<?php 

	require '../functions.php';

	$keyword = $_GET["keyword"];

	$query = "SELECT * FROM mobil WHERE
		id_mobil LIKE '%$keyword%' OR
		nama_mobil LIKE '%$keyword%' OR
		gambar LIKE '%$keyword%' OR
		warna LIKE '%$keyword%' OR
		tipe_mobil LIKE '%keyword%' OR
		jenis_transisi LIKE '%$keyword%' OR
		tahun_rilis LIKE '%$keyword%' OR
		harga LIKE '%$keyword%' ";

	$mobil = query($query);

?>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No</th>
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