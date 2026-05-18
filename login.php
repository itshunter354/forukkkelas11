<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(!isset($_SESSION['salah'])){
    $_SESSION['salah'] = 0;
}

$data = mysqli_query($conn,
"SELECT * FROM users WHERE username='$username'");

$user = mysqli_fetch_assoc($data);

if($user){

    if(password_verify($password, $user['password'])){

        $_SESSION['login'] = true;

        echo "
        <script>
        alert('Login berhasil');
        window.location='dashboard.php';
        </script>
        ";

    } else {

        $_SESSION['salah']++;

        echo "
        <script>
        alert('Password salah');
        window.location='index.php';
        </script>
        ";
    }

} else {

    $_SESSION['salah']++;

    echo "
    <script>
    alert('User tidak ditemukan');
    window.location='index.php';
    </script>
    ";
}

if($_SESSION['salah'] >= 3){
    die('Program ditutup');
}
?>