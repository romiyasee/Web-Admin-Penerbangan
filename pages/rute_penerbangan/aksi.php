<?php
include 'koneksi.php';
 if (isset($_POST["edit-user"])){
	$id_rute = $_POST['id_rute'];
	$kode_rute = $_POST['kode_rute'];
	$bandara_asal = $_POST['bandara_asal'];
	$bandara_tujuan = $_POST['bandara_tujuan'];
	$lama_penerbangan = $_POST['lama_penerbangan'];
	$harga_tiket = $_POST['harga_tiket'];

	// Edit user's name and email
	$sql = "UPDATE rute_penerbangan SET kode_rute='$kode_rute', bandara_asal='$bandara_asal', bandara_tujuan='$bandara_tujuan', lama_penerbangan='$lama_penerbangan', harga_tiket='$harga_tiket' WHERE id_rute=$id_rute";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["delete-user"])){	
	$id_rute = $_POST['id_rute'];
	$sql = "DELETE FROM rute_penerbangan WHERE id_rute=$id_rute";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["tambah-user"])){	
	$kode_rute = $_POST['kode_rute'];
	$bandara_asal = $_POST['bandara_asal'];
	$bandara_tujuan = $_POST['bandara_tujuan'];
	$lama_penerbangan = $_POST['lama_penerbangan'];
	$harga_tiket = $_POST['harga_tiket'];
	$sql = "INSERT into `rute_penerbangan` set kode_rute='$kode_rute', bandara_asal='$bandara_asal', bandara_tujuan='$bandara_tujuan', lama_penerbangan='$lama_penerbangan', harga_tiket='$harga_tiket'";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}
}
?>