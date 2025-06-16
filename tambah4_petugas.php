<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\tambah4_style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow navbar fixed-top" style="background: linear-gradient(45deg, #2c8fff 5%, #10c3e7 20%, #1080bc 65%, #004c8a 100%)">
      <div class="container">
        <a class="navbar-brand" href="tampil4.php">BY1-PDAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a role="button" class="btn btn-pelanggan btn-block" href="pelanggan4.php">PELANGGAN</a>
            <a role="button" class="btn btn-petugas btn-block" href="petugas4.php">PETUGAS</a>
            <a role="button" class="btn btn-wilayah btn-block" href="wilayah4.php">WILAYAH</a>
            <a role="button" class="btn btn-tarif btn-block" href="tarif4.php">TARIF</a>
            <a role="button" class="btn btn-tagihan btn-block" href="tagihan4.php">TAGIHAN</a>
            <a role="button" class="btn btn-pembayaran btn-block" href="pembayaran4.php">PEMBAYARAN</a>
          </div>
        </div>
      </div>
    </nav>
    <section class="background-radial-gradient overflow-hidden">
      <div class="table-main px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
          <a role ="button" class="btn btn-logout" href="logout4.php">LOGOUT</a>
          <h2 style="color:white">TAMBAH DATA PETUGAS</h2>
        <div class="col mb-5 mb-lg-0 position-relative">
            <!-- Lingkaran besar (shape-trans gaada) -->
            <div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
            <!-- Lingkaran poligon -->
            <div class="radius-shape-2 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-3 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-4 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-5 shape-trans shadow-5-strong"></div>
            
            <div class="loginbox bg-glass">
              <!-- Bentuk database ORI yang berubah menjadi EDIT atau DEL -->
              <form class="px-4 py-5 px-md-5" method="POST" action="petugas4.php">
                  <button type="input" class="btn btn-tampil btn-block one">TAMPIL</button>
                  <!-- Bentuk database TAMPIL -->
                  <div class="data-shape-1 shadow-5-strong"></div>
                  <div class="data-shape-2 shadow-5-strong"></div>
                  <div class="data-shape-3 shadow-5-strong"></div>
                  <div class="data-shape-4 shadow-5-strong"></div>
              <hr>
              <vr>
              </form>
              
              <div class="px-4 py-5 px-md-5">
                  <form method="post" action="tambahuser4_petugas.php">
                      <table class="table">
                          <!-- MASUKINNYA fname lname atau nama depan nama belakang? -->
                            <tr>
                                <td>Nama</td>
                                <td><input class="form-control color" type="text" name="nama" placeholder="Masukan nama" required/></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input class="form-control color" type="text" name="username" placeholder="Masukan username" required/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control color" type="email" name="email" placeholder="Masukan email" required/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input class="form-control color" type="password" name="password" placeholder="Buat password" required/></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>
                                    <select class="form-control" name="jabatan" id="jabatan" required>
                                        <option value="">-- Pilih Jabatan --</option>
                                        <option value="BARU">BARU</option>
                                        <option value="Customer Service">Customer Service</option>
                                        <option value="Ahli Teknisi Air">Ahli Teknisi Air</option>
                                        <option value="Manajer Sistem Informasi">Manajer Sistem Informasi</option>
                                        <option value="Manajer Produksi">Manajer Produksi</option>
                                        <option value="Manajer Distribusi">Manajer Distribusi</option>
                                        <option value="Manajer Perencanaan">Manajer Perencanaan</option>
                                        <option value="Manajer Pemakaian Air">Manajer Pemakaian Air</option>
                                        <option value="Manajer Keuangan">Manajer Keuangan</option>
                                        <option value="Manajer Pengawas">Manajer Pengawas</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><input class="form-control color" type="text" name="tlp" placeholder="Masukan nomor telepon" required/></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="input" class="btn btn-simpan btn-block two">TAMBAH</button>
                                    <div class="data-shape-5 shadow-5-strong"></div>
                                    <div class="data-shape-6 shadow-5-strong"></div>
                                    <div class="data-shape-7 shadow-5-strong"></div>
                                    <div class="data-shape-8 shadow-5-strong"></div>
                                    <div class="data-shapeadd shadow-5-strong"></div>
                                </td>
                            </tr>
                      </table>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
