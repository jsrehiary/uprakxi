<?php 
include 'config.php';

session_start();

if (!isset($_GET['id'])) {
    echo "<script>alert('ID not specified')</script>";
    header("Location: app.php");
} else {
    $id = $_GET['id'];
    $sql = "DELETE FROM ukk_makanan WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        // echo "<script>alert('Data deleted successfuly')</script>";
        header("Location: app.php");
        exit();
    }

    echo "<script>alert('Failure')</script>";
}



?>