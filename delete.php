<?php 
include 'config.php';

session_start();

if (!isset($_GET['id'])) {
    echo "<script>alert('ID not specified'); window.location.href = 'app.php';</script>";
} else {
    $id = $_GET['id'];
    $sql = "DELETE FROM ukk_makanan WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        echo '<script>alert("Makanan dihapus"); window.location.href = "app.php";</script>';
        // header("Location: app.php");
        exit();
    }

    echo "<script>alert('Failure')</script>";
}



?>