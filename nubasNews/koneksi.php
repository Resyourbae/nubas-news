<?php
// Definisikan konstanta untuk koneksi database
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "db_nubasnews"); // Sesuaikan dengan nama database Anda

// Definisikan beberapa konstanta untuk URL dan path
define("URL_SITUS", "http://localhost/portalberita/");
define('PATH_LOGO', 'image');
define('PATH_GAMBAR', 'photo');

// Definisikan nama file logo dan icon
define('FILE_LOGO', 'logo.png');
define('FILE_ICON', 'icon.png');

// Membuat koneksi ke database
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

// Cek koneksi ke database
if (!$conn) {
    die("Gagal Koneksi ke Database: " . mysqli_connect_error());
}

// Atur charset ke UTF-8 agar mendukung karakter khusus
mysqli_set_charset($conn, "utf8");
?>
