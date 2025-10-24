<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../public/css/add-and-update.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="">Add Siswa</h1>
            <div class="container-button-add">
                <a href="./../../index.php" class="button-add">Kembali</a>
            </div>
        </div>

        <form action="./../query/add-query.php" method="post">
            <label for="">Nama Siswa</label>
            <input type="text" name="nama_siswa" placeholder="" required>
            <label for="">Kelas</label>
            <input type="text" name="kelas" placeholder="" required>
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="" required>
            <button>Submit</button>
        </form>
    </div>
</body>

</html>