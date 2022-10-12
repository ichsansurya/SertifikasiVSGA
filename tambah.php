<?php  

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


	// cek keberhasilan insert data
	if( tambah($_POST) > 0 ) {
		echo "
		<script>
		alert ('Data Berhasil Ditambahkan!');
		document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert ('Data Gagal Ditambahkan!');
		document.location.href = 'index.php';
		</script>
		";
	}

}
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Tambah Data Kegiatan</title>
</head>
<body>

	    <div class="w-50 mx-auto border p-3 mt-5 mb-5  shadow-lg p-3 mb-5 bg-body rounded" >
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

    <button type="submit" name="submit" class="btn btn-warning"><a href="index.php"><i class="fas fa-chevron-left"></i>KEMBALI</a></button><br>
	<center><h2>INPUT DATA PEMINJAMAN BUKU</h2></center><br>

	<form class="p-3 mb-2 bg-light text-dark" action="" method="post" enctype="multipart/form-data">

		<div class="row mt-3">
				<label for="nama" class="col-sm-3 col-form-label">Nama Buku </label>
			<div class="col-sm-9">
				<input type="text" name="nama" id="nama" placeholder="Masukkan Nama Buku" class="form-control" required>
			</div>
		</div>


		<div class="row mt-3">
				<label for="tanggal" class="col-sm-3 col-form-label">Tanggal Peminjaman </label><br>
			<div class="col-sm-9">
				<input type="text" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Peminjaman" class="form-control" required>
			</div>
		</div>


		<div class="row mt-3">
				<label for="waktu" class="col-sm-3 col-form-label">Jam Peminjaman  </label><br>
			<div class="col-sm-9">
				<input type="text" name="waktu" id="waktu" placeholder="Masukkan Waktu Peminjaman" class="form-control" required>
			</div>
		</div>


		<div class="row mt-3">
				<label for="tempat" class="col-sm-3 col-form-label">Tempat Peminjaman  </label><br>
			<div class="col-sm-9">
				<input type="text" name="tempat" id="tempat" readonly class="form-control-plaintext" required value="Perpustakaan RT 007">
			</div>
		</div>


		<div class="row mt-3">
				<label for="gambar" class="col-sm-3 col-form-label">Upload Cover  </label><br>
			<div class="col-sm-9">
				<input type="file" name="gambar" id="gambar" class="form-control" multiple="true">
				note : Ukuran Gambar Max 5MB

				<br><br>
				<center><button type="submit" name="submit" class="btn btn-success">TAMBAH DATA</button></center>

			</div>
		</div>


	</form>

    <!-- File JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

</body>
</html>