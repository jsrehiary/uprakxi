<?php 
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "uprakxi"
);

if ($conn->connect_error) {
    die("<script>alert('Error:" . $conn->connect_error . " ')</script>");
}
?>