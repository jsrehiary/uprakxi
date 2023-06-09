<?php
include 'config.php';

session_start();

// Jika Form disubmit...
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // ...Mendefinisikan variabel data user yang diinput
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Validasi Password dan Confirm Password
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        // Validasi username yang sama
        if ($result->num_rows == 0) {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', md5('$password'))";
            $result = $conn->query($sql);

            // Jika query insert data berhasil
            if ($result) {
                header("Location: login.php");
                exit();
            } else {
                $err = "Error: Query Failure";
            }
        } else {
            $err = "User already exists.";
        }
    } else {
        $err = "Password not same.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Register Form -->
        <div class="custContainer">
            <div class="container register">
            <h1>Register</h1>
            <form method="POST">
                <?php if (isset($err)) { ?>
                    <p class="text-danger"> <?= $err ?> </p>
                <?php } ?>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="inputUsername" name="username">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="mb-3">
                    <label for="inputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword1" name="cpassword">
                </div>
                <div class="mb-3">
                    <a href="login.php">Already have account?</a>
                </div>
                <input type="submit" class="btn btn-success w-100" value="Register">
            </form>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>