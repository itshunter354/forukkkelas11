<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

    mysqli_query($conn,
    "INSERT INTO buku VALUES(
    NULL,
    '$judul',
    '$penulis',
    '$tahun',
    '$stok'
    )");

    header("location:buku.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Tambah Buku</h2>

<form method="POST">

<input type="text"
name="judul"
placeholder="Judul"
required>

<input type="text"
name="penulis"
placeholder="Penulis"
required>

<input type="number"
name="tahun"
placeholder="Tahun"
required>

<input type="number"
name="stok"
placeholder="Stok"
required>

<button type="submit" name="submit">
Tambah
</button>

</form>

</div>

</body>
</html>