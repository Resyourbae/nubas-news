<?php
// Memulai session untuk menyimpan data login pengguna
session_start();

// Koneksi ke database
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "db_atm"; 

// Membuat koneksi ke database menggunakan mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil, jika gagal menampilkan pesan error
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah metode request adalah POST (artinya form telah disubmit)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil inputan username dan password dari form dan melakukan sanitasi
    $inputName = htmlspecialchars($_POST['username'] ?? '');
    $inputPin = $_POST['password'] ?? '';

    // Memeriksa apakah input username dan password tidak kosong
    if (!empty($inputName) && !empty($inputPin)) {
        // Menyiapkan query untuk mencari data user berdasarkan username
        $stmt = $conn->prepare("SELECT username, pin FROM tb_bank WHERE username = ?");
        $stmt->bind_param("s", $inputName); // Menyisipkan username ke dalam query
        $stmt->execute(); // Eksekusi query
        $stmt->store_result(); // Menyimpan hasil query
        $stmt->bind_result($dbUsername, $dbPin); // Mengikat hasil ke variabel
        $stmt->fetch(); // Mengambil hasil pertama

        // Memeriksa apakah username ditemukan dan apakah password sesuai dengan yang ada di database
        if ($stmt->num_rows > 0 && password_verify($inputPin, $dbPin)) {
            // Jika berhasil login, menyimpan username di session dan mengarahkan ke halaman menu.php
            $_SESSION['username'] = $dbUsername;
            header('Location: menu.php');
            exit; // Menghentikan eksekusi setelah redirect
        } else {
            echo "Username atau PIN salah."; // Jika username atau PIN salah
        }

        $stmt->close(); // Menutup statement
    } else {
        echo "Username dan PIN tidak boleh kosong."; // Jika username atau PIN kosong
    }
}

// Menutup koneksi ke database
$conn->close();
?>

<!-- HTML untuk tampilan halaman login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Link ke stylesheet eksternal -->
    <link rel="stylesheet" href="style.css">
    <!-- Link ke CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* CSS untuk tampilan halaman login */
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins */
        }
        body {
            display: flex;
            justify-content: center; /* Menyusun elemen di tengah secara horizontal */
            align-items: center; /* Menyusun elemen di tengah secara vertikal */
            min-height: 100vh;
            background-image: url('night.jpg'); /* Menambahkan gambar latar belakang */
            background-position: center;
            background-size: cover;
        }
        .login-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 480px;
            padding: 30px;
        }
        .login-header {
            text-align: center;
            margin: 40px 0;
        }
        .login-header header {
            color: #fff;
            font-size: 40px;
            font-weight: 600;
        }
        .login-box .input-field {
            width: 100%;
            height: 60px;
            font-size: 17px;
            padding: 0 25px;
            margin-bottom: 25px;
            border-radius: 35px;
            border: none;
            box-shadow: 0px 5px 10px rgba(91, 29, 236, 0.05);
            outline: none;
            transition: 0.3s;
        }
        ::placeholder {
            font-weight: 500;
            color: #3a3838;
        }
        .input-field:focus {
            transform: scale(1.2); /* Menambah efek zoom saat input difokuskan */
        }
        .forgot {
            display: flex;
            justify-content: space-around;
            margin-bottom: 35px;
        }
        section {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #fff;
        }
        #check {
            margin-right: 10px;
        }
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            color: #4000ff;
        }
        section a {
            color: #fff;
        }
        .input-submit {
            position: relative;
        }
        .input-btn {
            width: 100%;
            height: 60px;
            background: #5063f2;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
        }
        .input-submit label {
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .input-btn:hover {
            background: #190ee3;
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .sign-up-link {
            text-align: center;
            font-size: 15px;
            margin-top: 20px;
        }
        .sign-up-link a {
            color: #fff;
            font-weight: 600;
        }
        .sign-up-link p {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Form Login -->
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
            <!-- Menampilkan error jika ada -->
            <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
        </div>
        <!-- Form untuk menginput username dan password -->
        <form method="POST">
            <div class="input-box">
                <input type="text" name="username" id="username" class="input-field" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>

            <!-- Menambahkan pilihan role -->
            <select class="form form-select mb-3" name="role" required>
                <option selected></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <!-- Tombol login -->
            <div class="input-submit">
                <button class="input-btn" type="submit">Login</button>
                <!-- Link ke halaman daftar jika belum punya akun -->
                <p class="text-center">Belum Punya Akun? <a href="daftar.php">Daftar</a></p>
            </div>
            <!-- Copyright info -->
            <div class="sign-up-link">
                <p>&copy; copyright by kemal,resya,agitha 2025 </p>
            </div>
        </div>
    </form>
</body>
</html>
