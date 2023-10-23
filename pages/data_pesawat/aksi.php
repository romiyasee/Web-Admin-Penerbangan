<?php
include 'koneksi.php';
 if (isset($_POST["edit-user"])){
	$id_pesawat = $_POST['id_pesawat'];
	$kode_pesawat = $_POST['kode_pesawat'];
	$model = $_POST['model'];
	$kapasitas = $_POST['kapasitas'];
	$tahun_buat = $_POST['tahun_buat'];
	$status_pesawat = $_POST['status_pesawat'];

	// Edit user's name and email
	$sql = "UPDATE data_pesawat SET kode_pesawat='$kode_pesawat', model='$model', kapasitas= '$kapasitas', tahun_buat='$tahun_buat', status_pesawat='$status_pesawat' WHERE id_pesawat=$id_pesawat";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["delete-user"])){	
	$id_pesawat = $_POST['id_pesawat'];
	$sql = "DELETE FROM data_pesawat WHERE id_pesawat=$id_pesawat";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["tambah-user"])){	
	$kode_pesawat = $_POST['kode_pesawat'];
	$model = $_POST['model'];
	$kapasitas = $_POST['kapasitas'];
	$tahun_buat = $_POST['tahun_buat'];
	$status_pesawat = $_POST['status_pesawat'];
	$sql = "INSERT into `data_pesawat` set kode_pesawat='$kode_pesawat', model='$model', kapasitas= '$kapasitas', tahun_buat='$tahun_buat', status_pesawat='$status_pesawat'";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}
}
?>