<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>premmmas | Daily Blog</title>
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Daily Bolg</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                <li class="nav-item">
                <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#jadwal">Schedule</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" id="darkmode">
                <i class="bi bi-moon-fill"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- bagian hero -->
    <section id="hero" class="text-center p-5 bg-primary text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center justify-content-between">
                <img src="assets/img2_front.jpg" class="img-fluid rounded" width="300">
                    <div>
                        <h1 class="fw-bold display-4 text-light">Iron. Adrenaline. Art.</h1>
                        <h4 class="lead display-6 text-light">Vehicles are more than just a means of transportation because they have become part of identity, lifestyle, and self-expression.</h4>
                        <h6 class="text-light">
                            <span id="tanggal"></span>
                            <span id="jam"></span>
                        </h6>
                    </div>
            </div>
        </div>
    </section>
    <!-- bagian profile -->
    <section id="profile" class="text-center p-5 text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row align-items-center justify-content-between">
            <div class="d-md-flex align-items-center justify-content-between">
                <img src="assets/profile.jpg" class="rounded-circle img-fluid" width="300">
            </div>
            <div>
                <h2 class="fw-bold display-4">Profile Mahasiswa</h2>
                <br>
                <h4 class="fw-bold text-sm-start">Primastian Hilmi Adji Pramudya</h4>
                <div>
                    <table cellpadding="10" class="lead display-9 text-start">
                        <tbody>
                             <tr>
                                <td>NIM</td>
                                <td>: A11.2024.16006</td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>: Teknik Informatika</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: 111202416006@mhs.dinus.ac.id</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>: +62 821 3705 4671</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: Jl. Wisata Airpanas Nglimut No. 09 Jetis, Jetis, Margosari, Kec. Limbangan, Kabupaten Kendal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- bagian artikel -->
    <!-- article begin -->
    <section id="article" class="text-center bg-primary p-5">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-light">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
            <div class="col">
            <div class="card h-100">
                <img src="IMG/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                    <?= $row["isi"]?>
                </p>
                </div>
                <div class="card-footer">
                <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                </small>
                </div>
            </div>
            </div>
            <?php
        }
        ?> 
        </div>
    </div>
    </section>
    <!-- article end -->
    <!-- bagian jadwal -->
    <section id="jadwal" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
            <br>
                <div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="card mx-4 border-primary overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-primary text-white">
                                SENIN
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Rekayasa Perangkat Lunak</h6>
                                    <ul class="list-unstyled">
                                        <li>07:00-09/30</li>
                                        <li>H.3.11</li>
                                    </ul>
                                <h6>Pendidikan Kewarganegaraan</h6>
                                    <ul class="list-unstyled">
                                        <li>14:10-15.50</li>
                                        <li>Kulino</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="card mx-4 border-warning overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-warning text-dark">
                                SELASA
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Basis Data</h6>
                                    <ul class="list-unstyled">
                                        <li>07:00-08:40</li>
                                        <li>D.2.K</li>
                                    </ul>
                                <h6>Sistem Operasi</h6>
                                    <ul class="list-unstyled">
                                        <li>09:30-12:00</li>
                                        <li>H.5.10</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="card mx-4 border-primary overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-primary text-white">
                                RABU
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Basis Data</h6>
                                    <ul class="list-unstyled">
                                        <li>08:40-10:20</li>
                                        <li>H.5.6</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="card mx-4 border-warning overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-warning text-dark">
                                KAMIS
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Pemrograman Berbasis WEB</h6>
                                    <ul class="list-unstyled">
                                        <li>08:40-10:20</li>
                                        <li>D.2.J</li>
                                    </ul>
                                <h6>Logika Informatika</h6>
                                    <ul class="list-unstyled">
                                        <li>12:00-15:00</li>
                                        <li>H.3.8</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="card mx-4 border-primary overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-primary text-white">
                                JUM'AT
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Kriptografi</h6>
                                    <ul class="list-unstyled">
                                        <li>09:30-12:00</li>
                                        <li>H.5.13</li>
                                    </ul>
                                <h6>Probabilitas dan Statistik</h6>
                                    <ul class="list-unstyled">
                                        <li>12:30-15:00</li>
                                        <li>H.3.2</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                        <div class="card mx-4 border-warning overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-warning text-dark">
                                SABTU
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Kosong</h6>
                                    <ul class="list-unstyled">
                                        <li>--:--</li>
                                        <li>-</li>
                                    </ul>
                            </div>
                        </div>
                        <div class="card mx-4 border-primary overflow-hidden" style="width: 15rem;">
                            <div class="card-header fw-bold bg-primary text-white">
                                MINGGU
                            </div>
                            <div class="card-body ">
                                <figure>
                                <h6>Kosong</h6>
                                    <ul class="list-unstyled">
                                        <li>--:--</li>
                                        <li>-</li>
                                    </ul>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- bagian galeri -->
    <section id="gallery" class="text-center p-5 bg-primary">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 text-light">Galeri</h1>
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                    $hasil = $conn->query($sql);
                    $active = true;
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <div class="carousel-item <?= ($active) ? 'active' : '' ?>">
                            <img src="IMG/<?= $row["gambar"] ?>" class="d-block w-100 rounded" alt="<?= $row["judul"] ?>">
                        </div>
                    <?php
                        $active = false;
                    }
                    ?>
                </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/premmmas"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href=""><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
            <a href="https://www.tiktok.com/@nottynnn"><i class="bi bi-tiktok h2 p-2 text-dark"></i></a>
        </div>
        <div>
            <br>
            Primastian Hilmi Adji Pramudya &copy; 2025
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    //time
    function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        document.getElementById("tanggal").innerHTML =
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();

        document.getElementById("jam").innerHTML =
        waktu.getHours().toString().padStart(2, '0') + ":" +
        waktu.getMinutes().toString().padStart(2, '0') + ":" +
        waktu.getSeconds().toString().padStart(2, '0');
    }

    setInterval(tampilWaktu, 1000);

    tampilWaktu();

    //dark light mode
    const toggle = document.getElementById('darkmode');
    let dark = false;

    toggle.addEventListener('click', function() {
        const body = document.body;
        const navbar = document.querySelector('.navbar');
        const footerIcons = document.querySelectorAll('footer i');

        if (!dark) {
        //dark mode
            body.classList.add('bg-dark', 'text-light');
            navbar.classList.remove('bg-body-tertiary');
            navbar.classList.add('bg-dark', 'navbar-dark');
            dark = true;
            toggle.innerHTML = '<i class="bi bi-sun-fill"></i>';
            footerIcons.forEach(icon => {
            icon.classList.remove('text-dark');
            icon.classList.add('text-light');
        });
        } else {
        //light mode
            body.classList.remove('bg-dark', 'text-light');
            navbar.classList.remove('bg-dark', 'navbar-dark');
            navbar.classList.add('bg-body-tertiary');
            dark = false;
            toggle.innerHTML = '<i class="bi bi-moon-fill"></i>';
            footerIcons.forEach(icon => {
            icon.classList.remove('text-light');
            icon.classList.add('text-dark');
        });
            }
        });
    </script>
  </body>
</html>