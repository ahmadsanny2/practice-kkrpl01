<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('config.php');

    $query = mysqli_query($connection, 'SELECT * FROM barang');
    $dataBarang = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Barang</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <header class="bg-blue-500 text-white">
        <div class="container mx-auto p-5">
            <navbar class="flex justify-between items-center">
                <h2 class="font-bold">CRUD Barang</h2>
                <a href="" class="bg-white text-black p-2 rounded" id="btnLogout">Logout</a>
            </navbar>
        </div>
    </header>

    <main class="container mx-auto">

        <section class="data-barang flex justify-center p-5">
            <table class="shadow-md px-5 rounded">
                <thead class="">
                    <tr class="bg-blue-500 text-white p-2">
                        <th class="border border-black p-2">No</th>
                        <th class="border border-black p-2">Nama Barang</th>
                        <th class="border border-black p-2">Kategori</th>
                        <th class="border border-black p-2">Harga</th>
                        <th class="border border-black p-2">Stok</th>
                        <th class="border border-black p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($dataBarang as $index => $data): ?>
                    <tr class="p-2">
                        <td class="border border-black p-2"><?= $index + 1 ?></td>
                        <td class="border border-black p-2"><?= $data['nama_barang'] ?></td>
                        <td class="border border-black p-2"><?= $data['kategori'] ?></td>
                        <td class="border border-black p-2">
                            <?= $data['harga'] ?>
                        </td>
                        <td class="border border-black p-2">
                            <?= $data['stok'] ?>
                        </td>
                        <td class="text-white border border-black p-2">
                            <a href="update.php?id=<?= $data['id_barang'] ?>"
                                class="bg-green-500 hover:bg-green-600 transition-all ease-in-out duration-300 p-2 rounded">Update</a>
                            <a href="delete.php?id=<?= $data['id_barang'] ?>"
                                class="bg-red-500 hover:bg-red-600 transition-all ease-in-out duration-300 p-2 rounded"
                                id="deleteData">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>