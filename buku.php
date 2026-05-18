<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
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

<h2>Data Buku</h2>

<a href="buku_tambah.php">Tambah Buku</a>

<table>
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn,
"SELECT * FROM buku");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $d['judul']; ?></td>
    <td><?= $d['penulis']; ?></td>
    <td><?= $d['tahun_terbit']; ?></td>
    <td><?= $d['stok']; ?></td>
    <td>
        <a href="buku_edit.php?id=<?= $d['id']; ?>">Edit</a>
        |
        <a href="buku_hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>