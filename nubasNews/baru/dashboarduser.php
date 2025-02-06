<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tag untuk karakter dan viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nubas News</title>
    <!-- Link ke CSS Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link ke script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<!-- style start -->
<style>
    /* Menyusun tampilan body, mengatur margin dan padding */
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #132030;
    }

    /* Menambahkan efek smooth scrolling pada halaman */
    html {
        scroll-behavior: smooth;
    }

    /* Style untuk navbar, memastikan elemen tertata dengan baik */
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: #243543;
        border-bottom: 2px solid #64237d;
        position: fixed;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }

    /* Style untuk teks judul, menggunakan warna putih dan ukuran font besar */
    h3 {
        color: #d2d6da;
        font-weight: bold;
        width: 50px;
        height: 50px;
    }

    /* Mengatur warna untuk span yang ada di dalam h3 */
    span {
        color: #ff0000;
    }

    /* Mengimpor font Russo One dari Google Fonts */
    @import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");

    /* Menambahkan animasi untuk teks bergerak di bagian bawah */
    svg {
        font-family: "Russo One", sans-serif;
        width: 100%;
        height: 100%;
    }

    svg text {
        animation: stroke 10s infinite alternate;
        stroke-width: 2;
        stroke: #CCD1CF;
        font-size: 50px;
    }

    /* Keyframes untuk animasi stroke pada teks */
    @keyframes stroke {
        0% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
            stroke-dashoffset: 25%;
            stroke-dasharray: 0 50%;
            stroke-width: 2;
        }
        70% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
        }
        80% {
            fill: rgba(204, 209, 207, 0);
            stroke: rgba(204, 209, 207, 1);
            stroke-width: 3;
        }
        100% {
            fill: rgba(204, 209, 207, 1);
            stroke: rgba(204, 209, 207, 0);
            stroke-dashoffset: -25%;
            stroke-dasharray: 50% 0;
            stroke-width: 0;
        }
    }

    /* Styling untuk carousel, memastikan gambar tidak terpotong dan diberi border-radius */
    .carousel-inner {
        border-radius: 10px;
        margin-top: 50px;
    }

    .carousel-item img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Styling untuk box di sidebar */
    .box {
        background-color: #132030;
        border-radius: 20px;
        width: 200px;
        height: 70px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }

    /* Styling untuk isi box, menambahkan teks berwarna putih dan rata tengah */
    .box p {
        color: #fff;
        text-align: center;
        font-weight: bold;
    }

    /* Menata layout halaman utama */
    .mainpage {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    /* Styling untuk konten utama */
    .content {
        width: 70%;
    }

    /* Styling untuk sidebar */
    .sidebar {
        width: 28%;
        background: #f9f9f9;
        padding: 10px;
    }

    /* Styling untuk setiap berita dalam sidebar */
    .boxnews {
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
        padding: 15px;
        border-bottom: 2px solid #ccc;
    }

    /* Styling gambar di dalam boxnews */
    .img img {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
    }

    /* Menata ukuran dan tampilan judul berita */
    .boxnews h1 {
        font-size: 22px;
    }

    /* Styling untuk isi berita dalam boxnews */
    .isi {
        font-size: 16px;
        color: #555;
    }

</style>
<!-- style end -->

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span>NEWS</span></h3>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <!-- Menambahkan menu navigasi untuk halaman utama dan kategori -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#929ea3; font-weight:bold;">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sepak Bola</a></li>
                            <li><a class="dropdown-item" href="#">Esport</a></li>
                            <li><a class="dropdown-item" href="#">Basket</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- indicator start -->
    <div class="container-fluid mt-5">
        <!-- Carousel untuk menampilkan gambar-gambar rotasi -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active object-fit-cover" data-bs-interval="1000">
                    <img src="burger.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="2000">
                    <img src="night.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item object-fit-cover" data-bs-interval="3000">
                    <img src="BG_BeachFestival_Night.jpg" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- indicator end -->

    <!-- text bergerak start -->
    <div class="container">
        <div class="wrapper">
            <svg>
                <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                    Berita Terbaru
                </text>
            </svg>
        </div>
    </div>
    <!-- text bergerak end -->

    <div class="mainpage">
    <div class="content">
        <!-- Menampilkan daftar berita dari database -->
        <?php
        include 'koneksi.php';

        if (!$connect) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Query untuk menampilkan berita yang terbit
        $sql = mysqli_query($connect, "SELECT ID, Judul, Isi, Kategori, File FROM tb_tambahberita WHERE terbit='1' ORDER BY ID DESC");
        if (!$sql) {
            die("Error dalam query: " . mysqli_error($connect));
        }

        if (mysqli_num_rows($sql) == 0) {
            echo "<p> Tidak ada berita yang tersedia.</p>";
        } else {
            echo '<div class="news-container">';
            while ($b = mysqli_fetch_array($sql)) {
                // Jika berita memiliki gambar, tampilkan gambar, jika tidak tampilkan gambar default
                $gambarPath = !empty($b['File']) ? "http://localhost/nubasnews/admin/uploads/" . $b['File'] : "default.jpg";

                echo '
                <div class="boxnews">
                    <div class="img">
                        <img src="' . $gambarPath . '" alt="' . htmlspecialchars($b['Judul']) . '">
                    </div>
                    <h1><a href="./?open=detail&id=' . $b['ID'] . '">' . htmlspecialchars($b['Judul']) . '</a></h1>
                    <p><strong>Kategori:</strong> ' . htmlspecialchars($b['Kategori']) . '</p>
                    <p class="isi">' . nl2br(htmlspecialchars(substr($b['Isi'], 0, 150))) . '...</p>
                    <a href="./?open=detail&id=' . $b['ID'] . '">Baca Selengkapnya</a>
                </div>';
            }
            echo '</div>';
        }
        ?>
    </div>

    <div class="sidebar">
        <h2>Kategori Berita</h2>
        <ul>
            <!-- Menampilkan daftar kategori berita -->
            <?php
            $kategoriSql = mysqli_query($connect, "SELECT DISTINCT Kategori FROM tb_tambahberita");
            while ($kategori = mysqli_fetch_array($kategoriSql)) {
                echo '<li><a href="./?kategori=' . urlencode($kategori['Kategori']) . '">' . htmlspecialchars($kategori['Kategori']) . '</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>
