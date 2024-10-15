<?php
include "layout/header.php";
?>

<!-- Navbar -->
<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Pelatihan UMKM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- ini adalah flaxbox, jadi tulisannya ke kanan -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <form class="d-flex" action="aksi_login.php?op=in" method="POST">
        <input class="form-control me-2" type="text" placeholder="Username" name="username">
        <input class="form-control me-2" type="password" placeholder="password" name="password">
        <button class="btn btn-light" type="submit">Login</button>
      </form>
    </div>
  </div>
</nav>
<!-- akhir navbar -->

<main class="bg-grey py-5">
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h1>Mari Bergabung</h1>
          <p>Program pelatihan khusus untuk UMKM. Dapatkan pengetahuan dan keterampilan terbaik dalam mengembangkan bisnis Anda. Temukan strategi pemasaran, manajemen keuangan, pengembangan produk, inovasi, dan teknologi. Bergabunglah sekarang dan jadilah bagian dari komunitas UMKM yang sukses.</p>
          <img src="gambar/UMKM2 (2).png" alt="" width="450px">
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <h3 class="text-center mt-5">REGISTER</h3>

              <div class="alert alert-success" id="myAlert" style="display: none;">
                <h5>Register Berhasil</h5>
                <p>Silahkan melakukan login untuk mengakses fitur pelatihan</p>
              </div>

              <form action="aksi_register.php" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Username">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
                  <label for="level" class="form-label">Level</label>
                  <select class="form-select" name="level">
                    <option value="Admin">Admin</option>
                    <option value="Mentor">Mentor</option>
                    <option value="Member">Member</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  var myAlert = document.getElementById('myAlert');
  var urlParams = new URLSearchParams(window.location.search);
  var success = urlParams.get('success');

  if (success === '1') {
    myAlert.style.display = 'block';
  }
</script>

<?php
include "layout/footer.php";
?>