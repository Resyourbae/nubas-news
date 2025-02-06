<?php
// Panggil koneksi database
include "koneksi.php";

// Persiapan hapus data
if (isset($_POST['bhapus'])) {
    // Pastikan Anda menggunakan $_POST['id'] yang dikirim oleh form
    $id = $_POST['id'];

    // Persiapan query untuk menghapus data berdasarkan id
    $hapus = mysqli_query($conn, "DELETE FROM tb_tambahberita WHERE id = '$id'");

    // Jika query berhasil
    if ($hapus) {
        echo "<script> alert ('Hapus Data Berhasil');
        document.location='listberita.php';
        </script>";
    } else {
        echo "<script> alert ('Hapus Data Gagal');
        document.location='listberita.php';
        </script>";
    }
}
?>
