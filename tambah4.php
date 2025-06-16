<!DOCTYPE html>
<head>
	<title>Tambah Data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assetstyle\tambah4_style.css?v=<?php echo time(); ?>">
</head>
<body>
    <section class="background-radial-gradient overflow-hidden">
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
        <h2 style="color:white">TAMBAH DATA PENGGUNA</h2>
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
                  
                  <div class="px-4 py-5 px-md-5">
                    <form method="post" action="tambahuser4_pelanggan.php">
                      <table class="table">
                        <!-- MASUKINNYA fname lname atau nama depan nama belakang? -->
                        <tr>
                          <td>Nama depan</td>
                          <td><input class="form-control color" type="text" name="fname" required/></td>
                        </tr>
                        <tr>
                          <td>Nama belakang</td>
                          <td><input class="form-control color" type="text" name="lname" required/></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><input class="form-control color" type="text" name="username" required/></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><input class="form-control color" type="email" name="email" required/></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><input class="form-control color" type="password" name="password" required/></td>
                        </tr>
                        <tr>
                          <td colspan="3">
                            <button type="input" class="btn btn-simpan btn-block two">SIMPAN</button>
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
