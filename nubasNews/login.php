<?php
// Menyertakan file koneksi database (db.php)
include 'condb.php';

// Mengecek request yang dikirim ke server menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data input dari form (username dan password)
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Validasi form
    if (empty($username) || empty($password) || empty($role)) {
        $error = 'Username, password, dan role tidak boleh kosong';
    } else {
        // Query SQL untuk memeriksa apakah username yang diinput ada di dalam database
        $sql = "SELECT * FROM users WHERE username = ? AND role = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $username, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        // Mengecek apakah ada data pengguna yang ditemukan
        if ($result->num_rows > 0) {
            // Jika ada, ambil data pengguna tersebut dari hasil query
            $user = $result->fetch_assoc();

            // Verifikasi password: mencocokkan password yang diinput dengan password yang di-hash di database
            if (password_verify($password, $user['password'])) {
                // Jika password cocok, arahkan pengguna ke halaman "welcome.php"
                if ($role === 'admin') {
                    header("Location: admin/admin.php");
                    exit(); // Pastikan eksekusi berhenti setelah redirect
                } elseif ($role === 'user') {
                    header("Location: dashboard.php");
                    exit(); // Pastikan eksekusi berhenti setelah redirect
                }
            } else {
                // Jika password tidak cocok, tampilkan pesan error "Password Salah"
                $error = 'Password salah';
            }
        } else {
            // Jika username tidak ditemukan dalam database, tampilkan pesan "Username Tidak Ditemukan"
            $error = 'Username tidak ditemukan';
        }
    }
}

// Menutup koneksi ke database setelah query selesai
$con->close();
?>


<!-- HTML dan CSS untuk halaman login -->

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
            <header>Login</header>
            <!-- Menampilkan pesan error jika ada -->
            <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
        </div>
        <!-- form start -->
        <form method="POST">
        <div class="input-box">
            <input type="text" name="username" id="username" class="input-field" placeholder="Username" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" class="input-field" placeholder="Password" autocomplete="off" required>
        </div>
        
        <select class="form form-select mb-3" name="role" required>
            <option value="" selected>Pilih Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <div class="input-submit">
            <button class="input-btn" type="submit">Login</button>
            <button class="input-btn mt-3" type="button"><a style="text-decoration: none; color: #fff;" href="register.php">Register</a></button>
        </div>

        <div class="sign-up-link">
            <p>&copy; copyright by kemal,resya,agitha 2025 </p>
        </div>
    </div>
    </form>
    <!-- form end -->
</body>
</html>

