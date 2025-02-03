<?php
// Menyertakan file koneksi database (db.php)
include 'condb.php';

// Mengecek apakah form di-submit menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data yang di-input oleh user dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Mengamankan password dengan meng-hash menggunakan password_hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Membuat query SQL untuk memasukkan data pengguna ke dalam tabel users
    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";

    // Mengeksekusi query SQL
    if ($conn->query($sql) === TRUE) {
        // Jika query berhasil, tampilkan pesan sukses
        echo "<script> alert ('Berhasil Membuat Akun');
        document.location='signup.php'
        </script>";
        
        // Redirect pengguna ke halaman login/signin
        header("Location: login.php");
    } else {
        // Jika terjadi error saat menjalankan query, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Menutup koneksi database
    $con->close();
}
?>