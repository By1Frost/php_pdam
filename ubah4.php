<!DOCTYPE html>
<html>
<head>
	<title>update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\ubah4_style.css?v=<?php echo time(); ?>">
</head>
<body>
	<section class="background-radial-gradient overflow-hidden">
		<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
			<div class="row gx-lg-5 align-items-center mb-5">
			<h2 style="color:white">UPDATE DATA PENGGUNA</h2>
			<div class="col mb-5 mb-lg-0 position-relative">
				<!-- Lingkaran besar -->
				<div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
				<!-- Lingkaran poligon -->
				<div class="radius-shape-2 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-3 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-4 shape-trans shadow-5-strong"></div>
				<div class="radius-shape-5 shape-trans shadow-5-strong"></div>

				<div class="loginbox bg-glass">
					<form class="px-4 py-5 px-md-5" method="POST" action="tampil4.php">
						<button type="input" class="btn btn-tampil btn-block one">TAMPIL</button>
						<div class="data-shape-1 shadow-5-strong"></div>
						<div class="data-shape-2 shadow-5-strong"></div>
						<div class="data-shape-3 shadow-5-strong"></div>
						<div class="data-shape-4 shadow-5-strong"></div>
						<hr>
						<vr>
					</form>
					<h3 style="color:white">Data user</h3>
					<div class="px-4 py-5 px-md-5">
					<?php
					include 'koneksi4.php';
					$id = $_GET['id'];
					$data = mysqli_query($koneksi,"select * from user where iduser='$id'");
					while($d = mysqli_fetch_array($data)){
						?>
						<form method="post" action="update4.php">
							<table class="table">
								<tr>			
									<td>Nama Depan</td>
									<td>
										<input type="hidden" name="iduser" value="<?php echo $d['iduser']; ?>">
										<input class="form-control color" type="text" name="fname" value="<?php echo $d['fname']; ?>" required>
									</td>
								</tr>
								<tr>			
									<td>Nama Belakang</td>
									<td>
										<input type="hidden" name="iduser" value="<?php echo $d['iduser']; ?>">
										<input class="form-control color" type="text" name="lname" value="<?php echo $d['lname']; ?>" required>
									</td>
								</tr>
								<tr>
									<td>Username</td>
									<td><input class="form-control color" type="text" name="username" value="<?php echo $d['username']; ?>" required></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input class="form-control color" type="email" name="email" value="<?php echo $d['email']; ?>" required></td>
								</tr>
								<tr>
									<td>Password</td>
									<td><input class="form-control color" type="text" name="password" value="<?php echo $d['password']; ?>" required></td>
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