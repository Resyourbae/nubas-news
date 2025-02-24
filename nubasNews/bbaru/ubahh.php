<?php
session_start();
include "koneksi.php"; // Menghubungkan dengan database

// **Ambil data dari URL (Jika Mode Edit)**
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_tambahberita WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

// **Proses Simpan Data**
if (isset($_POST['btubah'])) {
    $id = $_POST['id_berita'];
    $Judul = mysqli_real_escape_string($conn, $_POST['Judul']);
    $Kategori = mysqli_real_escape_string($conn, $_POST['Kategori']);
    $Isi = mysqli_real_escape_string($conn, $_POST['Isi']);
    $Terbit = $_POST['Terbit'];

    // **Proses Upload File**
    if (!empty($_FILES['File']['name'])) {
        $uploadDir = "uploads/";
        $File = $uploadDir . basename($_FILES['File']['name']);
        move_uploaded_file($_FILES['File']['tmp_name'], $File);
    } else {
        $File = $data['File']; // Gunakan file lama jika tidak ada perubahan
    }

    // **Proses Update ke Database**
    $query = "UPDATE tb_tambahberita SET Judul='$Judul', Kategori='$Kategori', Isi='$Isi', File='$File', Terbit='$Terbit' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Berita berhasil diperbarui!'); window.location='listberita.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui berita!');</script>";
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Ubah Berita</title>
    <style>
        body {
            background-color: #2F4F4F;
            color: white;
        }
        .container-box {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-10">
    <div class="container-box w-50">
        <h2 class="text-center text-white mb-4">Ubah Berita</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_berita" value="<?= $data['id'] ?>">

            <div class="mb-3">
                <label for="Judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="Judul" value="<?= $data['Judul'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="Kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="Kategori" value="<?= $data['Kategori'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="Isi" class="form-label">Isi</label>
                <textarea class="form-control" name="Isi" rows="4" required><?= $data['Isi'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="File" class="form-label">Upload File</label>
                <input type="file" class="form-control" name="File">
                <?php if (!empty($data['File'])) : ?>
                    <div class="mt-2">
                        <img src="<?= $data['File'] ?>" width="100" class="border">
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="Terbit" class="form-label">Terbit</label>
                <select class="form-select" name="Terbit">
                    <option value="1" <?= $data['terbit'] == 1 ? 'selected' : '' ?>>Ya</option>
                    <option value="0" <?= $data['terbit'] == 0 ? 'selected' : '' ?>>Tidak</option>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" name="btubah" type="submit">Simpan</button>
                <a href="listberita.php" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
