<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,
"SELECT * FROM users WHERE id='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $no_hp = $_POST['no_hp'];

    mysqli_query($conn,
    "UPDATE users SET
    username='$username',
    no_hp='$no_hp'
    WHERE id='$id'");

    header("location:user.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit User</h2>

<form method="POST">

<input type="text"
name="username"
value="<?= $d['username']; ?>"
required>

<input type="text"
name="no_hp"
value="<?= $d['no_hp']; ?>"
required>

<button type="submit" name="submit">
Update
</button>

</form>

</div>

</body>
</html>