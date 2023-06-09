<?php 

// Database Setup, menggunakan metode OOP
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "uprakxi"
);

// Jika terdapat error
if ($conn->connect_error) {
    die("<script>alert('Error:" . $conn->connect_error . " ')</script>");
}
?>