<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS eksternal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:  #132030;
            margin: 0;
            padding: 0;
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
        .about-us-section {
            padding: 50px 20px;
            text-align: center;
        }
        .about-us-section h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }
        .about-us-section p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .team-section {
            background-color:  #132030;
            padding: 50px 20px;
            text-align: center;
        }
        .team-section h2 {
            font-size: 32px;
            margin-bottom: 40px;
            color: #fff;
        }
        .team-member {
            margin-bottom: 30px;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .team-member h4 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #fff;
        }
        .team-member p {
            color: #777;
        }
        footer {
            background-color: #243543;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <h3>NUBAS <span>NEWS</span></h3>
            <div class="collapse navbar-collapse" id="navbarNav" style="display: flex; justify-content:center;">
                <ul class="navbar-nav">
                    <!-- Menambahkan menu navigasi untuk halaman utama dan kategori -->
                     <a href="dashboarduser.php">
                    <li class="nav-item">
                        <div class="nav-link active" aria-current="page" href="#" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Home</div>
                    </li>
                    </a>
                    <a href="tentangkami.php">
                    <li class="nav-item">
                        <div class="nav-link" href="#" style="color:#929ea3; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif;">Tentang Kami</div>
                    </li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Tentang Kami Section -->
    <div class="about-us-section">
        <h1>Tentang NubasNews</h1>
        <p>NubasNews adalah perusahaan berita yang berdiri pada tahun 2023 dengan tujuan untuk menyampaikan informasi yang akurat, terpercaya, dan terkini kepada masyarakat. Kami berkomitmen untuk memberikan pemberitaan yang objektif dan independen dalam menghadirkan berbagai perspektif mengenai peristiwa-peristiwa penting di Indonesia maupun dunia.</p>
        <p>Didirikan oleh sekelompok jurnalis dan profesional media, NubasNews bertujuan untuk mengubah cara orang memperoleh berita dengan menggunakan platform digital yang mudah diakses dan responsif. Kami percaya bahwa dengan memberdayakan masyarakat dengan informasi yang benar dan jelas, kita dapat menciptakan perubahan positif yang lebih besar.</p>
        <p>Visi kami adalah menjadi sumber berita utama yang dapat diandalkan oleh semua kalangan, dengan fokus pada kualitas, kecepatan, dan keberagaman informasi. Kami berusaha menjadi media yang tidak hanya menginformasikan tetapi juga mendidik pembaca dengan laporan yang mendalam dan analisis yang cermat.</p>
    </div>

    <!-- Tim Kami Section -->
    <div class="team-section">
        <h2>Tim NubasNews</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="" alt="Team Member 1">
                    <h4>Nama Anggota 1</h4>
                </div>
                <div class="col-md-4 team-member">
                    <img src="team2.jpg" alt="Team Member 2">
                    <h4>Nama Anggota 2</h4>
                </div>
                <div class="col-md-4 team-member">
                    <img src="team3.jpg" alt="Team Member 3">
                    <h4>Nama Anggota 3</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 NubasNews. Semua hak cipta dilindungi.</p>
    </footer>

</body>
</html>
