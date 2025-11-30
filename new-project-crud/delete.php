<?php require_once('config.php');
$id = $_GET["id"];

$query = "DELETE * FROM barang WHERE id_barang=$id";
$result = mysqli_query($connection, $query);
?>