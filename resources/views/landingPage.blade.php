<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Graha- Slicing</title>
</head>

<body>
    <header>
        <div class="hero">
            <img src="assets/object.png"></span>
        </div>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="#" class="logo"> <img src="assets/graha.png"></span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="#" class="menu-link active">Homepage</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Tentang</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Daftar Hotel</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Bantuan</a></li>
                    </ul>
                    <a href="#" class="btn-member"><i> <img class="btn-img" src="assets/indo.png"
                                alt=""></i>Indonesia(ID)<i class='bx bx-chevron-down'></i></a>

                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>

        <section class="home" id="home">

            <div class="container home-wrapper">
                <div class="content-left" data-aos="fade-right">
                    <div class="box-wrapper">
                        <div class="box">
                            <p>Hotel Operator</p>
                        </div>
                    </div>
                    <h1 class="heading">Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
                    <p class="subheading">GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih
                        percaya diri dalam menjalankan bisnis.</p>

                    <div class="form-panel">
                        <p>Konsultasikan Bisnis Saya</p>

                    </div>
                    <div class="form-panel-2">

        </section>
    </header>

    <!-- Service Start -->

    <section class="service">
        <div class="container service-wrapper">
            <div class="row1">
                <p class="label-service">Our Workflow</p>
                <h1 class="heading-service">Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>
            </div>
            <div class="row2" data-aos="fade-up">
                <div class="box-service-1">
                    <i><img src="assets/flag.png"></i>
                    <h3>Tantangan</h3>
                    <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>

                </div>
                <div class="box-service-2">
                    <i><img src="assets/scroll.png"></i>
                    <h3>Rumusan</h3>
                    <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami
                    </p>
                </div>
                <div class="box-service-3">
                    <i><img src="assets/target.png"></i>
                    <h3>Goals</h3>
                    <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah -
                        panjang.</p>
                </div>
                <div class="box-service-4">
                    <i><img src="assets/stars.png"></i>
                    <h3>Ideas</h3>
                    <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Produk start -->
    @include("services")
    <!-- Produk end -->

    <!-- Statistk start -->
    @include("latest")

    <!-- statistik end -->

    <!-- TESTI START -->
    @include("testi")
    <!-- TESTI END -->
    @include("dropmes")
    <!-- Banner2 -->
    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container footer-wrapper">
            <div class="col-1-footer">
                <a href="#" class="logo"> <img src="assets/graha.png"></span></a>
                <h1 class="logo-footer"></h1>
                <p class="subheading-footer">The best service to customers is
                    our top priority in building a business</p>

            </div>
            <div class="col-2-footer">
                <h3>Halaman Utama</h3>
                <ul>
                    <li><a href="#">Homepage</a></li>
                </ul>
            </div>
            <div class="col-3-footer">
                <h3>Perusahaan</h3>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Daftar Hotel</a></li>
                </ul>
            </div>
            <div class="col-4-footer">
                <h3>Temukan Kami</h3>
                <ul>
                    <li><a href="#">Bantuan</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="sosmed-icon">
                <h3>Social Media</h3>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>
        <div class="container footer-wrapper">
            <div class="col-1-footer">
                <li><a href="#">Pemberitahuan Privasi</a></li>
                <li><a href="#">Syarat dan Ketentuan</a></li>
            </div>
            
        </div>
      
        <a href="#" class="logo-footer-lg"> <img src="assets/language.png"></span></a>
        <div class="wrapper-footer">
            <span class="text-footer">Bahasa Indonesia</span><i class='bx bx-chevron-down'></i>
        </div>
        <span class="span-footer">© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.
            </span>


    </footer>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>