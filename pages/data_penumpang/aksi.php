<?php
include 'koneksi.php';
 if (isset($_POST["edit-user"])){
	$id_penumpang = $_POST['id_penumpang'];
	$no_pemesanan = $_POST['no_pemesanan'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$no_penerbangan = $_POST['no_penerbangan'];
	$kode_rute = $_POST['kode_rute'];
	$no_kursi = $_POST['no_kursi'];
	$kode_pesawat = $_POST['kode_pesawat'];
	$harga_tiket = $_POST['harga_tiket'];

	// Edit user's name and email
	$sql = "UPDATE data_penumpang SET nama='$nama',no_pemesanan='$no_pemesanan' ,ttl='$ttl', no_penerbangan= '$no_penerbangan', kode_rute='$kode_rute', no_kursi='$no_kursi', kode_pesawat='$kode_pesawat', harga_tiket='$harga_tiket' WHERE id_penumpang=$id_penumpang";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["delete-user"])){	
	$id_penumpang = $_POST['id_penumpang'];
	$sql = "DELETE FROM data_penumpang WHERE id_penumpang=$id_penumpang";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["tambah-user"])){	
	$id_penumpang = $_POST['id_penumpang'];
	$no_pemesanan = $_POST['no_pemesanan'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$no_penerbangan = $_POST['no_penerbangan'];
	$kode_rute = $_POST['kode_rute'];
	$no_kursi = $_POST['no_kursi'];
	$kode_pesawat = $_POST['kode_pesawat'];
	$harga_tiket = $_POST['harga_tiket'];
	$sql = "INSERT into `data_penumpang` set nama='$nama',no_pemesanan='$no_pemesanan' ,ttl='$ttl', no_penerbangan= '$no_penerbangan', kode_rute='$kode_rute', no_kursi='$no_kursi', kode_pesawat='$kode_pesawat', harga_tiket='$harga_tiket'";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}
}
?>