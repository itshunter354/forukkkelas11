<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $no_hp = $_POST['no_hp'];

    if(!is_numeric($no_hp)){
        die("No HP harus angka");
    }

    mysqli_query($conn,
    "INSERT INTO users VALUES(
    NULL,
    '$username',
    '$password',
    '$no_hp'
    )");

    header("location:user.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Tambah User</h2>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<input type="text"
name="no_hp"
placeholder="No HP"
required>

<button type="submit" name="submit">
Tambah
</button>

</form>

</div>

</body>
</html>