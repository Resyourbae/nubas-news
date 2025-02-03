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
    if ($con->query($sql) === TRUE) {
        // Jika query berhasil, tampilkan pesan sukses
        echo "<script> alert ('Berhasil Membuat Akun');
        document.location=' login.php'
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <header>Register</header>
            <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
        </div>
        <form method="POST">
        <div class="input-box">
            <input type="text" name="username" id="username" class="input-field" placeholder="Username" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" class="input-field" placeholder="email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div>
        <select class="form form-select mb-3" name="role" required>
                <option selected></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <div class="input-submit">
            <button class="input-btn" type="submit">Login</button>
        </div>
        <div class="sign-up-link">
            <p>&copy; copyright by kemal,resya,agitha 2025 </p>
        </div>
    </div>
    </form>
</body>
</html>