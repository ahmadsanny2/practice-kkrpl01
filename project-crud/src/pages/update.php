<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../public/css/add-and-update.css">

    <?php require_once("./../../config/config.php");
    
    $id=$_GET["id"];
    

    $query=mysqli_query($connection,"SELECT id, nama_siswa, kelas, alamat FROM siswa WHERE id=$id");
    $siswa=mysqli_fetch_array($query, MYSQLI_ASSOC);
    ?>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="">Update Siswa</h1>
            <div class="container-button-add">
                <a href="index.php" class="button-add">Kembali</a>
            </div>
        </div>

        <form action="./../query/update-query.php" method="post">
            <input type="hidden" name="id" value="<?=$siswa['id']?>">
            <label for="">Nama Siswa</label>
            <input type="text" name="nama_siswa" placeholder="" value="<?= $siswa['nama_siswa'] ?>" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas" placeholder="" value="<?= $siswa['kelas'] ?>" required>
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="" value="<?= $siswa['alamat'] ?>" required>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>