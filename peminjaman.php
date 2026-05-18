<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $buku = $_POST['buku'];
    $tanggal = $_POST['tanggal'];

    mysqli_query($conn,
    "INSERT INTO peminjaman VALUES(
    NULL,
    '$nama',
    '$buku',
    '$tanggal'
    )");

    mysqli_query($conn,
    "UPDATE buku SET stok = stok - 1
    WHERE id='$buku'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="navbar">

<a href="dashboard.php">Dashboard</a>

<a href="buku.php">Data Buku</a>

<a href="user.php">Data User</a>

<a href="peminjaman.php">Peminjaman</a>

<a href="report.php">Report PDF</a>

<a href="logout.php">Logout</a>

</div>

<div class="container">

<h2>Peminjaman Buku</h2>

<form method="POST">

<input type="text"
name="nama"
placeholder="Nama Peminjam"
required>

<select name="buku">

<?php

$data = mysqli_query($conn,
"SELECT * FROM buku");

while($d = mysqli_fetch_array($data)){

?>

<option value="<?= $d['id']; ?>">
<?= $d['judul']; ?>
</option>

<?php } ?>

</select>

<input type="date"
name="tanggal"
required>

<button type="submit"
name="submit">
Pinjam
</button>

</form>

<h2>Data Peminjaman</h2>

<table>

<tr>
    <th>Nama Peminjam</th>
    <th>ID Buku</th>
    <th>Tanggal</th>
</tr>

<?php

$data = mysqli_query($conn,
"SELECT * FROM peminjaman");

while($d = mysqli_fetch_array($data)){

?>

<tr>
    <td><?= $d['nama_peminjam']; ?></td>
    <td><?= $d['buku_id']; ?></td>
    <td><?= $d['tanggal_pinjam']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>