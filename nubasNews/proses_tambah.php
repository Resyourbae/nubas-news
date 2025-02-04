<?php
include 'koneksi.php'; // Pastikan file koneksi.php ada dan benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($conn, $_POST['Judul']);
    $kategori = mysqli_real_escape_string($conn, $_POST['Kategori']);
    $isi = mysqli_real_escape_string($conn, $_POST['Isi']);

    // Cek apakah ada file yang diunggah
    if (!empty($_FILES['Foto']['name'])) {
        $foto = $_FILES['Foto']['name'];
        $tmp_name = $_FILES['Foto']['tmp_name'];
        $file_size = $_FILES['Foto']['size'];
        $file_error = $_FILES['Foto']['error'];

        // Pastikan folder uploads ada
        $target_dir = __DIR__ . "/uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Buat folder jika belum ada
        }

        // Tentukan path file tujuan
        $target_file = $target_dir . basename($foto);
        $file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        // Validasi ukuran dan format file
        if ($file_size > 2000000) {
            echo "Error: Ukuran file terlalu besar (maks 2MB).";
            exit();
        } elseif (!in_array($file_ext, $allowed_ext)) {
            echo "Error: Format file tidak didukung. Gunakan JPG, PNG, atau GIF.";
            exit();
        } elseif ($file_error !== 0) {
            echo "Error saat mengunggah file.";
            exit();
        }

        // Pindahkan file ke folder uploads
        if (move_uploaded_file($tmp_name, $target_file)) {
            // Simpan ke database
            $query = "INSERT INTO tb_tambahberita (Judul, Kategori, Isi, File) 
                      VALUES ('$judul', '$kategori', '$isi', '$foto')";

            if (mysqli_query($conn, $query)) {
                echo "Berita berhasil ditambahkan!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "Mohon pilih gambar untuk diunggah.";
    }
} else {
    echo "Akses ditolak.";
}
?>
