<?php require_once("./../../config/config.php");

$id=$_GET["id"];

$query=mysqli_query($connection,"DELETE FROM siswa WHERE id=$id");

if($query){
    header("location:./../../../index.php");
}
?>