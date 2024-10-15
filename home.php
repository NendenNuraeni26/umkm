<?php
include "layout/header.php";
include "admin/connection.php";
session_start();

$query = "SELECT * from menu Where level='" . $_SESSION['level'] . "'";
$result = mysqli_query($koneksi, $query);
?>

<!-- NAFBAR -->
<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Pelatihan UMKM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <?php

                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <a class="nav-link" href="<?= $data['href']; ?>"><?= $data['nama']; ?></a>
                <?php
                }
                ?>
                <a class="nav-link" href="admin/logout.php">Logout</a>

            </div>
        </div>
    </div>
</nav>

<!-- AKHIR NAFBAR -->


<main class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Kolom 1 -->
                <?php
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                if (!isset($_SESSION['username'])) {
                    die("Anda belum login");
                }
                $user = $_SESSION['username'];
                $sql = "SELECT * from register where username='$user'";
                $query = $koneksi->query($sql);
                $data = $query->fetch_array();
                ?>
                <h1 class=" mt-3">Selamat Datang <?php echo $user; ?></h1>
                <p class="mt-5"> Selamat bergabung bersama pelatihan UMKM, program yang dirancang khusus untuk membantu pengembangan usaha mikro, kecil, dan menengah Anda. Dalam pelatihan ini, Anda akan diberikan pengetahuan dan keterampilan yang dapat membantu Anda memperluas dan meningkatkan usaha Anda. </p>
                <p>Kami berkomitmen untuk memberikan pelatihan yang komprehensif dan praktis, yang mencakup berbagai aspek penting seperti manajemen keuangan, pemasaran, pengembangan produk, serta strategi bisnis yang efektif. Dengan mengikuti pelatihan ini, Anda akan memiliki kesempatan untuk memperluas jaringan Anda, belajar dari para ahli industri, dan mendapatkan wawasan berharga untuk mengembangkan usaha UMKM Anda ke tingkat yang lebih tinggi.</p>
            </div>

            <div class="col">
                <!-- kolom 2 -->
                <h2 class="text-center mt-5">Data Informasi Pengguna</h2>
                <table class="table mt-5">
                    <tr>
                        <td>Username</td>
                        <td><?php echo $data['username']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $data['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?php echo $data['password']; ?></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td><?php echo $data['level']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>



<?php
include "layout/footer.php"
?>