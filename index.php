<?php 

require 'functions.php';

$data = query("SELECT * FROM arsip");

// saat tombol cari di klik
if ( isset( $_POST['cari']) ) {
	$data = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- File CSS Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">

	<title>Arsip Buku Perpustakaan RT 007</title>

</head>

<body class="bg-light text-dark">
	<div class="header">
		<center>
			
			<h1>Arsip Data Buku</h1>
			<h2>Perpustakaan RT 007</h2>
		</center>
	</div>

	<div class="tengah container">
		
		<br><br>

		<form action="" method="post">
			<a href="tambah.php" class="btn btn-primary">TAMBAH DATA</a>
			<button style="float: right"  type="submit" name="cari" class="btn btn-info">CARI DATA</button>&nbsp;&nbsp;
			<input style="float: right; background-color: #DFF4ED;" type="text" name="keyword" size="30" placeholder="Masukan Pencarian" autocomplete="off" class="search">
		</form>

		<br><br>

		<table border="1" cellpadding="10" cellspacing="0" align="center" class="table table-striped table-bordered">
			<thead class="table-dark">
			<tr align="center">
				<th>NO</th>
				<th>Nama Buku</th>
				<th width="150px">Tanggal Peminjaman</th>
				<th width="150px">Waktu Peminjaman</th>
				<th width="170px">Tempat</th>
				<th>Cover Buku</th>
				<th width="160px">Aksi</th>
			</tr>
		</thead>

			<?php $i = 1; ?>
			<?php foreach( $data as $row ) :  ?>
				<tr>
					<td align="center"><?= $i; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["tanggal"]; ?></td>
					<td><?= $row["waktu"]; ?></td>
					<td><?= $row["tempat"]; ?></td>
					<td>
						<a href="img/<?= $row["gambar"]; ?>"><img width="150" src="img/<?= $row["gambar"] ?>" >
					</td>
					<td>
						<center>
							<a href="edit.php?id=<?= $row["no"]; ?>" class="btn btn-warning">Edit</a>
							<a href="hapus.php?id=<?= $row["no"]; ?>" onclick="return confirm('Ingin Menghapus Data Ini?')" class="btn btn-danger">Hapus</a><br>
							<!-- <a href="img/<?= $row["gambar"]; ?>" class="btn btn-warning">Lihat Foto</a> -->
						</center>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>	

		</table>
		<br><br>
	</div>

	<div class="text-light bg-dark">
		<hr>
		<center>
			<font style="bold">
				Copyright &copy; Ichsan Surya Dharma
			</font>
		</center>
		<hr>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

</body>
</html>