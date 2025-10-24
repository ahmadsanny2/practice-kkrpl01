<?php require_once("./../../config/config.php");

$id = $_POST["id"];
$nama_siswa = $_POST["nama_siswa"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];

$query =mysqli_query($connection, "UPDATE siswa SET nama_siswa='$nama_siswa', kelas='$kelas', alamat='$alamat' WHERE id='$id'") ;

if ($query) {
    header("location:./../../../index.php");
}