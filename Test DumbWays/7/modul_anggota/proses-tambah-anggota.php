<?php
session_start();
include '../connection.php';

$nama = $_POST['nama'];
$tempat_lahir = $_POST['lahir'];
$no_telepon = $_POST['telp'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pdk'];
$agama = $_POST['agama'];
$hoby = $_POST['hoby'];


$query = "INSERT INTO users (full_name, place_of_birth_id, phone_number, addres, last_educaton, religion, hobbies) 
    VALUES ('$nama', '$tempat_lahir', '$no_telepon', '$alamat','$pendidikan', '$agama', '$hoby' )";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list-anggota.php');
} else {
    header('Location: biodata.php');
}
