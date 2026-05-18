<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,
"SELECT * FROM buku WHERE id='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['submit'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

    mysqli_query($conn,
    "UPDATE buku SET
    judul='$judul',
    penulis='$penulis',
    tahun_terbit='$tahun',
    stok='$stok'
    WHERE id='$id'");

    header("location:buku.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit Buku</h2>

<form method="POST">

<input type="text"
name="judul"
value="<?= $d['judul']; ?>"
required>

<input type="text"
name="penulis"
value="<?= $d['penulis']; ?>"
required>

<input type="number"
name="tahun"
value="<?= $d['tahun_terbit']; ?>"
required>

<input type="number"
name="stok"
value="<?= $d['stok']; ?>"
required>

<button type="submit" name="submit">
Update
</button>

</form>

</div>

</body>
</html>