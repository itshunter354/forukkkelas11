<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
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

<h2>Data User</h2>

<a href="user_tambah.php">Tambah User</a>

<table>
<tr>
    <th>Username</th>
    <th>No HP</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn,
"SELECT * FROM users");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $d['username']; ?></td>
    <td><?= $d['no_hp']; ?></td>
    <td>
        <a href="user_edit.php?id=<?= $d['id']; ?>">Edit</a>
        |
        <a href="user_hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>