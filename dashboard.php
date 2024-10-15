<?php
include "layout/header.php";
?>
<!-- NAFBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Pelatihan UMKM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="form_login.php">Register</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#galeri">Galery</a>
            </div>
        </div>
    </div>
</nav>
<!-- AKHIR NAFBAR -->

<!-- JUMBOTRON -->
<section class="jumbotron text-center">
    <h1 class="display-4 py-5">Selamat Datang</h1>
    <img src="gambar/register.png" alt="register" width="300">
    <p class="lead">Kami siap membantu Anda meraih kesuksesan dalam usaha Anda. Bersama-sama, kita akan menjelajahi strategi pemasaran, pengelolaan keuangan, dan inovasi dalam menjawab tuntutan pasar yang berubah. Kami percaya bahwa kesuksesan usaha Anda adalah juga kesuksesan kami. Mari kita memulai perjalanan menuju kesuksesan bersama!</p>
    <a class="btn btn-primary btn-lg" href="form_login.php" role="button">Login</a>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,64L80,85.3C160,107,320,149,480,160C640,171,800,149,960,149.3C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</section>
<!-- AKHIR JUMBOTRON -->

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row mb-3 text-center">
            <div class="col">
                <h2>About Us</h2>
            </div>
        </div>
        <div class="row text-center row justify-content-center fs-10">
            <div class="col-md-4">
                <p>Kami adalah penyedia pelatihan khusus yang fokus pada pengembangan Usaha Mikro, Kecil, dan Menengah (UMKM). Dengan misi kami untuk membantu UMKM mencapai kesuksesan yang berkelanjutan, kami menyediakan program pelatihan yang mencakup berbagai aspek penting dalam bisnis, seperti pemasaran, keuangan, operasional, dan pengembangan produk. </p>
            </div>

            <div class="col-md-4">
                <p>Tim pelatihan kami terdiri dari ahli dan praktisi yang memiliki pengalaman yang luas dalam dunia UMKM. Dengan pengetahuan dan pemahaman yang mendalam tentang tantangan yang dihadapi oleh UMKM, kami memberikan panduan praktis dan strategi yang efektif untuk membantu UMKM mengoptimalkan potensi bisnis mereka.</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2edff" fill-opacity="1" d="M0,64L80,85.3C160,107,320,149,480,160C640,171,800,149,960,149.3C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
</section>
<!-- AKHIR ABOUT -->

<!-- GALERI -->
<section id="galeri" style="background-color: #e2edff;">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Galery</h2>
            </div>
        </div>

        <div class="row">
            <!-- kolom 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/umkm11.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Promosi UMKM: Dapatkan kesempatan unik untuk meningkatkan pengetahuan dan keterampilan bisnis Anda. Pelajari strategi pemasaran yang efektif, keuangan yang cerdas, serta praktik operasional yang sukses. Segera bergabung dan tingkatkan potensi bisnis UMKM Anda!.</p>
                    </div>
                </div>
            </div>

            <!-- kolom 2  -->
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/umkm12.jpg" class="card-img-top" alt="..." width="10px">
                    <div class="card-body">
                        <p class="card-text">Pelatihan Bisnis UMKM adalah program yang bertujuan untuk meningkatkan potensi bisnis skala kecil dan menengah. Dalam pelatihan ini, peserta akan mendapatkan pengetahuan tentang pemasaran, keuangan, operasional, dan pengembangan produk. Semangat Meraih Asa</p>
                    </div>
                </div>
            </div>

            <!-- kolom 3  -->
            <div class="col-md-4">
                <div class="card">
                    <img src="gambar/umkm14.jpg" class="card-img-top" alt="..." width="10px">
                    <div class="card-body">
                        <p class="card-text">Selamat kepada para pemenang bantuan pelatihan UMKM yang telah berhasil memperoleh dukungan berharga untuk mengembangkan usaha mereka. Melalui pelatihan yang mereka ikuti, para pemenang telah meningkatkan pengetahuan dan keterampilan dalam berbagai aspek bisnis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,106.7C384,117,480,139,576,149.3C672,160,768,160,864,186.7C960,213,1056,267,1152,266.7C1248,267,1344,213,1392,186.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</section>

<?php
include "layout/footer.php";
?>