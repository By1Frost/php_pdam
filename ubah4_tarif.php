<!DOCTYPE html>
<html>
<head>
	<title>update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\ubah4_style.css?v=<?php echo time(); ?>">
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
		<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
			<div class="row gx-lg-5 align-items-center mb-5">
                <a role ="button" class="btn btn-logout" href="logout4.php">LOGOUT</a>
                <h2 style="color:white">UPDATE DATA TARIF</h2>
			<div class="col mb-5 mb-lg-0 position-relative">
				<!-- Lingkaran besar -->
				<div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
				<!-- Lingkaran poligon -->
				<div class="radius-shape-2 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-3 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-4 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-5 shape-trans shadow-5-strong"></div>

				<div class="loginbox bg-glass">
					<form class="px-4 py-5 px-md-5" method="POST" action="tarif4.php">
						<button type="input" class="btn btn-tampil btn-block one">TAMPIL</button>
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
					$data = mysqli_query($koneksi,"select * from tarif where id_gol ='$id'");
					while($d = mysqli_fetch_array($data)){
						?>
						<form method="post" action="update4_tarif.php">
							<table class="table">
								<tr>			
									<td>Golongan</td>
									<td>
										<input type="hidden" name="id_gol" value="<?php echo $d['id_gol']; ?>">
										<input class="form-control color" type="text" name="id_gol" value="<?php echo $d['id_gol']; ?>" required>
									</td>
								</tr>
								<tr>
									<td>Kode Tarif</td>
									<td><input class="form-control color" type="text" name="kode_tarif" value="<?php echo $d['kode_tarif']; ?>" required></td>
								</tr>
								<tr>
									<td>0-10(rp/m3)</td>
									<td><input class="form-control color" type="text" name="tarif_0_10_m3" value="<?php echo $d['tarif_0_10_m3']; ?>" required></td>
								</tr>
								<tr>
									<td>11-20(rp/m3)</td>
									<td><input class="form-control color" type="text" name="tarif_11_20_m3" value="<?php echo $d['tarif_11_20_m3']; ?>" required></td>
								</tr>
                                <tr>
                                    <td>21-30(rp/m3)</td>
                                    <td><input class="form-control color" type="text" name="tarif_21_30_m3" value="<?php echo $d['tarif_21_30_m3']; ?>" required/></td>
                                </tr>	
                                <tr>
                                    <td>31-dst(rp/m3)</td>
                                    <td><input class="form-control color" type="text" name="tarif_31_dst_m3" value="<?php echo $d['tarif_31_dst_m3']; ?>" required/></td>
                                </tr>	
                                <tr>
                                    <td>Keterangan</td>
                                    <td><input class="form-control color" type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-ubah btn-block two" value="UBAH">
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
 
</body>
</html>