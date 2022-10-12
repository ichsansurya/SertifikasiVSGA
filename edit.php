<?php  

require 'functions.php';

// ambil data url
$no = $_GET["id"];

// query data kegiatan berdasarkan id
$kegiatan = query("SELECT * FROM arsip WHERE no = $no")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {



	// cek keberhasilan update data
	if( ubah($_POST) > 0 ) {
		echo "
		<script>
		alert ('Data Berhasil Update!');
		document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert ('Gagal Update Data!');
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

	<title>Edit Data Buku</title>
</head>
<body>
	    <div class="w-50 mx-auto border p-3 mt-5 mb-5  shadow-lg p-3 mb-5 bg-body rounded">
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

	<button type="submit" name="submit" class="btn btn-warning"><a href="index.php"><i class="fas fa-chevron-left"></i>BATAL</a></button>
	<center><h1>EDIT DATA</h1></center><br>

	<form class="p-3 mb-2 bg-light text-dark" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="no" value="<?= $kegiatan["no"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $kegiatan["gambar"]; ?>">


<div class="row mt-3">
				<label for="nama" class="col-sm-3 col-form-label">Nama Buku  </label>
				<div class="col-sm-9">
				<input type="text" name="nama" id="nama" placeholder="Masukkan Nama Buku" class="form-control" required value="<?= $kegiatan["nama"]; ?>">
			</div>
		</div>


<div class="row mt-3">
				<label for="tanggal" class="col-sm-3 col-form-label">Tanggal Peminjaman  </label>
				<div class="col-sm-9">
				<input type="text" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Peminjaman" class="form-control" required value="<?= $kegiatan["tanggal"]; ?>">
			</div>
		</div>


<div class="row mt-3">
				<label for="waktu" class="col-sm-3 col-form-label">Jam Peminjaman  </label>
				<div class="col-sm-9">
				<input type="text" name="waktu" id="waktu" placeholder="Masukkan Jam Peminjaman" class="form-control" required value="<?= $kegiatan["waktu"]; ?>">
			</div>
		</div>


<div class="row mt-3">
				<label for="tempat" class="col-sm-3 col-form-label">Tempat Peminjaman  </label>
				<div class="col-sm-9">
				<input type="text" name="tempat" id="tempat" placeholder="Masukkan Kode Barang" readonly class="form-control-plaintext" required value="<?= $kegiatan["tempat"]; ?>">
			</div>
		</div>


<div class="row mt-3">
				<label for="gambar" class="col-sm-3 col-form-label">Upload Bukti Cover Buku  </label><br>
				<div class="col-sm-9">
				<img width="150" src="img/<?= $kegiatan['gambar']; ?>"><br><br>
				<input type="file" name="gambar" id="gambar" placeholder="Masukkan Kode Barang" class="form-control">
				note : Ukuran Gambar Max 5MB

				<br><br>
				<center><button type="submit" name="submit" class="btn btn-success">UPDATE DATA</button></center>
			</div>
		</div>

	</form>

</div>

	<div class="text-light bg-dark">
		<hr>
		<center>
			<font style="bold">
				Copyright &copy; Trio Magang
			</font>
		</center>
		<hr>
	</div>

</body>
</html>