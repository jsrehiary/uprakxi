<?php
include 'config.php';

session_start();

// Mengambil ID dari url
if (isset($_GET['id'])) {
    $cid = $_GET['id'];

    // Validasi URL yang diambil dengan query SQL
    $sql = "SELECT * FROM ukk_makanan WHERE id='$cid'";
    $result = $conn->query($sql);

    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
} else {
    header("Location: app.php");
    die("<script>alert('ID not specified')</script>");
}

// Jika form disubmit...
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // ...Mendefinisikan variabel dari inputan user
    $nama_makanan = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $kode_makanan = $_POST['kode_makanan'];
    $sql = "UPDATE ukk_makanan SET nama_makanan = '$nama_makanan', harga = '$harga', stok = '$stok', kategori='$kategori', deskripsi='$deskripsi', kode_makanan = '$kode_makanan'  WHERE id = '$cid'";

    $result = $conn->query($sql);

    if ($result) {
        header("Location: app.php");
        exit();
    } else {
        $error = "Error: Query Failure";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Navbar -->
    <?php include 'partials/nav.php' ?>

    <!-- Heading -->
    <div class="container">
        <h1>Mode Edit - Daftar Makanan</h1>
    </div>

    <!-- Update/Editing Form -->
    <div class="container">
        <form action="" method="POST">
            <?php if (isset($error)) { ?>
                <p class="text-danger p-1 border-bottom border-danger"><?= $error ?></p>
            <?php } ?>
            <?php foreach ($rows as $row) { ?>
                <div class="mb-3">
                    <label for="inputNamaMakanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="inputNamaMakanan" name="nama_makanan"
                        value="<?= $row['nama_makanan'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputHarga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="inputHarga" name="harga" value="<?= $row['harga'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputStok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="inputStok" name="stok" value="<?= $row['stok'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputKategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="inputKategori" name="kategori" value="<?= $row['kategori'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi" value="<?= $row['deskripsi'] ?>">
                </div>
                <div class="mb-3">
                    <label for="inputKodeMakanan" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="inputKodeMakanan" name="kode_makanan" value="<?= $row['kode_makanan'] ?>">
                </div>
            <?php } ?>
            <input type="submit" class="btn btn-outline-danger" value="Update">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>