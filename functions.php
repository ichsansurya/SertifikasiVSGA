<?php

// koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "bismillah");


function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}


function tambah($data) {
	global $koneksi;

	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data['nama']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$waktu = htmlspecialchars($data['waktu']);
	$tempat = htmlspecialchars($data['tempat']);

	// upload gambar
	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO arsip VALUES ('', '$nama', '$tanggal', '$waktu', '$tempat', '$gambar')";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah ada gambar yang di upload
	if ( $error === 4 ) {
		echo "<script>
				alert('Gambar Kosong! Silahkan Pilih Gambar Dahulu');
				</script>";
		return false;
	}

	// cek yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('WARNING! File Yang Di Upload Bukan Gambar');
				</script>";
		return false;
	}

	// cek jika ukuran gambar teralu besar
	if ($ukuranFile > 5000000 ) {
		echo "<script>
				alert('GAGAL! Ukuran Gambar Melebihi 5MB');
				</script>";
		return false;
	}

	// lolos penngecekan gambar, maka siap upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar; 

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	return $namaFileBaru;

}


function hapus($no) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM arsip WHERE no = $no");

	return mysqli_affected_rows($koneksi);
}


function ubah($data) {
	global $koneksi;

	// ambil data dari tiap elemen dalam form
	$no = $data['no'];
	$nama = htmlspecialchars($data['nama']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$waktu = htmlspecialchars($data['waktu']);
	$tempat = htmlspecialchars($data['tempat']);
	$gambarLama = htmlspecialchars($data['gambarlama']);

	// cek user pilih gambar baru atau tidak
	if ( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}
	
	// query insert data
	$query = "UPDATE arsip SET 
				nama = '$nama',
				tanggal = '$tanggal',
				waktu = '$waktu',
				tempat = '$tempat',
				gambar = '$gambar'
				WHERE no = $no
				";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


function cari($keyword) {
	$query = "SELECT * FROM arsip 
				WHERE
				nama LIKE '%$keyword%' OR
				tanggal LIKE '%$keyword%' OR
				waktu LIKE '%$keyword%'
				";
				
	return query($query);
}

?>