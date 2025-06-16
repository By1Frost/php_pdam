<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\ubah4_style.css?v=<?php echo time(); ?>">
<?php
include 'koneksi4.php'; // Pastikan file koneksi sudah benar

// Query untuk mengambil data pelanggan
$wlyh = mysqli_query($koneksi, "SELECT id_wilayah, nama_wilayah FROM wilayah");
?>
<?php
include 'koneksi4.php'; // Pastikan file koneksi sudah benar

// Query untuk mengambil data pelanggan
$gol = mysqli_query($koneksi, "SELECT id_gol, kode_tarif FROM tarif");
?>
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
          <h2 style="color:white">UPDATE DATA PELANGGAN</h2>
        <div class="col mb-5 mb-lg-0 position-relative">
            <!-- Lingkaran besar (shape-trans gaada) -->
            <div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
            <!-- Lingkaran poligon -->
            <div class="radius-shape-2 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-3 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-4 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-5 shape-trans shadow-5-strong"></div>
            
            <div class="loginbox bg-glass">
                <form class="px-4 py-5 px-md-5" method="POST" action="pelanggan4.php">
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
                <?php
                include 'koneksi4.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from pelanggan where no_pelanggan ='$id'");
                while($d = mysqli_fetch_array($data)){
                    ?>
        
                    <div class="px-4 py-5 px-md-5">
                            <form method="post" action="update4_pelanggan.php">
                            <table class="table">
                                <!-- MASUKINNYA fname lname atau nama depan nama belakang? -->
                                <tr>
                                    <td>Nama</td>
                                    <input type="hidden" name="no_pelanggan" value="<?php echo $d['no_pelanggan']; ?>">
                                    <td><input class="form-control color" type="text" name="nama" placeholder="Masukan nama" value="<?php echo $d['nama']; ?>" required/></td>
                                </tr>
                                <tr>
                                    <td>Golongan</td>
                                    <td>
                                        <select class="form-control color" name="id_gol" required>
                                            <option value="<?php echo $d['id_gol']; ?>">-- <?php echo $d['id_gol']; ?> --</option>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($gol)) {
                                                echo "<option value='{$row['id_gol']}'>{$row['id_gol']} - {$row['kode_tarif']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Rekening</td>
                                    <td><input class="form-control color" type="text" name="no_rek" value="<?php echo $d['no_rek']; ?>" placeholder="Masukan no. rek" required/></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><input class="form-control color" type="text" name="alamat" value="<?php echo $d['alamat']; ?>" placeholder="Masukan alamat" required/></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td><input class="form-control color" type="text" name="tlp" value="<?php echo $d['tlp']; ?>" placeholder="Masukan nomor telepon" required/></td>
                                </tr>
                                <tr>
                                    <td>Wilayah</td>
                                    <td>
                                        <select class="form-control color" name="id_wilayah" required>
                                            <option value="<?php echo $d['id_wilayah']; ?>">-- <?php echo $d['id_wilayah']; ?> --</option>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($wlyh)) {
                                                echo "<option value='{$row['id_wilayah']}'>{$row['id_wilayah']} - {$row['nama_wilayah']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Registrasi</td>
                                    <td><input class="form-control color" type="date" name="tgl_reg" value="<?php echo $d['tgl_reg']; ?>" placeholder="-- Masukan tanggal --" required/></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                            <option value="<?php echo $d['jenis_kelamin']; ?>" >-- <?php echo $d['jenis_kelamin']; ?> --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="<?php echo $d['status']; ?>" >-- <?php echo $d['status']; ?> --</option>
                                            <option value="Laki-laki">AKTIF</option>
                                            <option value="Perempuan">NONAKTIF</option>
                                        </select>
                                    </td>
                                </tr>
                                <td colspan="3">
                                    <button type="input" class="btn btn-ubah btn-block two">UBAH</button>
                                    <div class="data-shape-5 shadow-5-strong"></div>
                                    <div class="data-shape-6 shadow-5-strong"></div>
                                    <div class="data-shape-7 shadow-5-strong"></div>
                                    <div class="data-shape-8 shadow-5-strong"></div>
                                    <div class="data-shapeedit shadow-5-strong"></div>
                                </td>
                                </tr>
                            </table>
                            </form>
                            <?php 
					}
					?>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
