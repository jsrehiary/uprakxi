<?php
include 'config.php';

session_start();

$sql = "SELECT * FROM ukk_makanan";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Navbar -->
    <?php include 'partials/nav.php'; ?>

    <!-- Heading -->
    <div class="container">
        <div class="p-3 bg-info bg-opacity-10 border border-info  mb-3 mt-3">
            <h2>Data Makanan</h2>
        </div>
    </div>

    <div class="container">
        <table class="table rounded shadow">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Makanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kode Makanan</th>
                    <th class="text-center" scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) {

                    ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <td><?= $row['nama_makanan'] ?></td>
                        <td>Rp<?= $row['harga'] ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td><?= $row['kategori'] ?></td>
                        <td><?= $row['deskripsi'] ?></td>
                        <td><?= $row['kode_makanan'] ?></td>
                        <td class="text-center"><a class="btn btn-warning" href="update.php?id=<?= $row['id'] ?>">Edit</a></td>
                        <td class="text-center"><a class="btn btn-danger" href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="btn btn-outline-info mt-3" href="create.php">Tambah Makanan</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>