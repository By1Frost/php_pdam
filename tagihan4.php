<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\tablemain_style.css?v=<?php echo time(); ?>">
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
          <h2 style="color:white">DAFTAR INFORMASI TAGIHAN</h2>
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
              <div class="data-shape-1 shadow-5-strong"></div>
              <div class="data-shape-2 shadow-5-strong"></div>
              <div class="data-shape-3 shadow-5-strong"></div>
              <div class="data-shape-4 shadow-5-strong"></div>
              <form class="px-4 py-5 px-md-5" method="POST" action="tambah4_tagihan.php">
              <button type="input" class="btn btn-tambah btn-block one">TAMBAH</button>
              <!-- Bentuk database ADD -->
              <div class="data-shape-add shadow-5-strong"></div>
              <hr>
              <vr>
              </form>
              <!-- Login box -->
              <div class="loginbox overf px-4 py-5 px-md-5">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>ID. Tagihan</th>
                        <th>No. Pelanggan</th>
                        <th>Payroll</th>
                        <th>Bulan</th>
                        <th>m3 Lalu</th>
                        <th>m3 Kini</th>
                        <th>m3 Pakai</th>
                        <th>Total Tagihan(rp)</th>
                        <th>Denda</th>
                        <th>Tanggal Pencatatan</th>
                        <th>Status</th>
                    </tr>
                    <?php 
                    include 'koneksi4.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from tagihan");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
            <!-- MASUKINNYA fname lname atau nama depan nama belakang? -->
                            <td><?php echo $d['id_tagihan']; ?></td>
                            <td><?php echo $d['no_pelanggan']; ?></td>
                            <td><?php echo $d['payroll']; ?></td>
                            <td style="width: 80px"><?php echo $d['bulan_tagihan']; ?></td>
                            <td><?php echo $d['m3_lalu']; ?></td>
                            <td><?php echo $d['m3_kini']; ?></td>
                            <td><?php echo $d['m3_pakai']; ?></td>
                            <td><?php echo $d['total_tagihan_rp']; ?></td>
                            <td><?php echo $d['denda']; ?></td>
                            <td><?php echo $d['tgl_pencatatan']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td style="width: 185px">
            <!-- ubah.php hapus.php nanti belakangan aja -->
                                <a role ="button" class="btn btn-ubah two" href="ubah4_tagihan.php?id=<?php echo $d['id_tagihan']; ?>">UBAH</a> </button>
                                <a role ="button" class="btn btn-hapus three" href="hapus4_tagihan.php?id=<?php echo $d['id_tagihan']; ?>">HAPUS</a>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>