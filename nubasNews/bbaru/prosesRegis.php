<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pin = $_POST['email'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Berhasil membuat akun!'); window.location='login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $connect->error . "');</script>";
    }
    $connect->close();
}
?>
