<?php require_once("./../../config/config.php");

    $nama_siswa = $_POST["nama_siswa"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];

    $query=mysqli_query($connection,"INSERT INTO siswa (nama_siswa, kelas, alamat) VALUES ('$nama_siswa','$kelas', '$alamat')");

    if($query){
        header("location:./../../../index.php");
    }
    
    ?>