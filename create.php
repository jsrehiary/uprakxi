<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode_makanan = $_POST['kode_makanan'];
    $sql = "INSERT INTO ukk_makanan (nama_makanan, harga, stok, kategori, deskripsi, kode_makanan) VALUES  ('$nama_makanan','$harga','$stok','$kategori','$deskripsi','$kode_makanan')";

    $result = $conn->query($sql);

    if ($result) {
        header("Location: app.php");
        exit();
    } else {
        $error = "Error: " . $conn->error;
    }
}
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
    <?php include 'partials/nav.php' ?>

    <div class="container">
        <h1>Add Data - Daftar Makanan</h1>
    </div>

    <!-- Editing Form -->
    <div class="container">
        <form action="" method="POST">
            <?php if (isset($error)) { ?>
                <p class="text-danger p-1 border-bottom border-danger"><?= $error ?></p>
            <?php } ?>
                <div class="mb-3">
                    <label for="inputNamaMakanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="inputNamaMakanan" name="nama_makanan">
                </div>
                <div class="mb-3">
                    <label for="inputHarga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="inputHarga" name="harga">
                </div>
                <div class="mb-3">
                    <label for="inputStok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="inputStok" name="stok">
                </div>
                <div class="mb-3">
                    <label for="inputKategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="inputKategori" name="kategori">
                </div>
                <div class="mb-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="inputKodeMakanan" class="form-label">Kode Makanan</label>
                    <input type="text" class="form-control" id="inputKodeMakanan" name="kode_makanan">
                </div>
            <input type="submit" class="btn btn-outline-danger" value="Create">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>