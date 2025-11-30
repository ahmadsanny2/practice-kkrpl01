<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
    <link rel="stylesheet" href="./public/css/style.css">

    <?php require_once("./config/config.php");

    $query = mysqli_query($connection, "SELECT id, nama_siswa, kelas, alamat FROM siswa");
    $dataSiswa = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="">Data Siswa</h1>
            <div class="container-button-add">
                <a href="./src/pages/add.php" class="button-add">Tambah Siswa</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataSiswa as $index => $siswa): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $siswa['nama_siswa'] ?></td>
                    <td><?= $siswa['kelas'] ?></td>
                    <td><?= $siswa['alamat'] ?></td>
                    <td>
                        <a href="./src/pages/update.php?id=<?= $siswa['id'] ?>" class="button-update">Update</a>
                        <a href="./src/query/delete-query.php?id=<?= $siswa['id'] ?>" class="button-delete">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>