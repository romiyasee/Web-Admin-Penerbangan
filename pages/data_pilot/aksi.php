<?php
include 'koneksi.php';
 if (isset($_POST["edit-user"])){
	$id_pilot = $_POST['id_pilot'];
	$kode_lisensi = $_POST['kode_lisensi'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$ttl = $_POST['ttl'];
	$jam_terbang = $_POST['jam_terbang'];
	$status_pilot = $_POST['status_pilot'];


	// Edit user's name and email
	$sql = "UPDATE data_pilot SET kode_lisensi='$kode_lisensi', nama='$nama', jenis_kelamin= '$jenis_kelamin', ttl='$ttl', jam_terbang='$jam_terbang', status_pilot='$status_pilot' WHERE id_pilot=$id_pilot";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["delete-user"])){	
	$id_pilot = $_POST['id_pilot'];
	$sql = "DELETE FROM data_pilot WHERE id_pilot=$id_pilot";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["tambah-user"])){	
	$id_pilot = $_POST['id_pilot'];
	$kode_lisensi = $_POST['kode_lisensi'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$ttl = $_POST['ttl'];
	$jam_terbang = $_POST['jam_terbang'];
	$status_pilot = $_POST['status_pilot'];
	$sql = "INSERT into `data_pilot` set kode_lisensi='$kode_lisensi', nama='$nama', jenis_kelamin= '$jenis_kelamin', ttl='$ttl', jam_terbang='$jam_terbang', status_pilot='$status_pilot'";

	if (mysqli_query($conn, $sql)) {
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}
}
?>