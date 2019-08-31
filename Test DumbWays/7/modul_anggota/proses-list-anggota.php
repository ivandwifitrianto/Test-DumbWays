<?php
if (session_status()!=PHP_SESSION_ACTIVE) {
	session_start();
}


include '../connection.php';

$query = "SELECT * FROM users";

$hasil = mysqli_query($db, $query);

// ... menampung semua data kategori
$data_anggota = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_anggota[] = $row;
}


// ... lanjut di tampilan
