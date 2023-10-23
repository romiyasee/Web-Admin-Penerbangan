<?php
include 'koneksi.php';
 if (isset($_POST["edit-user"])){
	$id_penerbangan = $_POST['id_penerbangan'];
	$no_penerbangan = $_POST['no_penerbangan'];
	$rute = $_POST['rute'];
	$kategori = $_POST['kategori'];
	$waktu_keberangkatan = $_POST['waktu_keberangkatan'];
	$waktu_kedatangan = $_POST['waktu_kedatangan'];
	$kode_pesawat = $_POST['kode_pesawat'];

	// Edit user's name and email
	$sql = "UPDATE jadwal_penerbangan SET no_penerbangan='$no_penerbangan', rute='$rute', kategori='$kategori', waktu_keberangkatan='$waktu_keberangkatan', waktu_kedatangan='$waktu_kedatangan', kode_pesawat='$kode_pesawat'  WHERE id_penerbangan=$id_penerbangan";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["delete-user"])){	
	$id_penerbangan = $_POST['id_penerbangan'];
	$sql = "DELETE FROM jadwal_penerbangan WHERE id_penerbangan=$id_penerbangan";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["tambah-user"])){	
	$no_penerbangan = $_POST['no_penerbangan'];
	$rute = $_POST['rute'];
	$kategori = $_POST['kategori'];
	$waktu_keberangkatan = $_POST['waktu_keberangkatan'];
	$waktu_kedatangan = $_POST['waktu_kedatangan'];
	$kode_pesawat = $_POST['kode_pesawat'];

	$sql = "INSERT into `jadwal_penerbangan` set no_penerbangan='$no_penerbangan', rute='$rute', kategori='$kategori', waktu_keberangkatan='$waktu_keberangkatan', waktu_kedatangan='$waktu_kedatangan', kode_pesawat='$kode_pesawat' ";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}
}
?>