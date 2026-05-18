<?php
session_start();

if(!isset($_SESSION['login'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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

<h1>Dashboard Perpustakaan</h1>

<a href="buku.php">Data Buku</a>
<br><br>
<a href="user.php">Data User</a>
<br><br>
<a href="peminjaman.php">Peminjaman</a>
<br><br>
<a href="report.php">Report PDF</a>
<br><br>
<a href="logout.php">Logout</a>

</div>

</body>
</html>