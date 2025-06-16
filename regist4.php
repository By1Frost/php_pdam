<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Profile | Hasby As</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@8.0.0/css/mdb.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="assetstyle\reg4_style.css?v=<?php echo time(); ?>">
    <!-- Section: Design Block -->
  </head>
  <body>
    <section class="background-radial-gradient overflow-hidden">
      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
              Selamat Datang di <br />
              BY1-PDAM! <br />
              <span style="color: hsl(218, 81%, 75%)">Silahkan mendaftar untuk membuat akun!</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Aplikasi PDAM ini masih dalam tahap pengembangan jadi, mohon kritik dan sarannya yah:DD
            </p>
            <h4 class="my-5"><a class="one" href="login4.php">Sudah memiliki akun?</a></h4>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <!-- Lingkaran besar -->
            <div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
            <!-- Lingkaran poligon -->
            <div class="radius-shape-2 shape-transf shadow-5-strong"></div>
            <div class="radius-shape-3 shape-transf shadow-5-strong"></div>
            <div class="radius-shape-4 shape-transf shadow-5-strong"></div>
            <div class="radius-shape-5 shape-transf shadow-5-strong"></div>
            
            <div class="loginbox bg-glass">
              <!-- Login box -->
              <div class="loginbox px-4 py-5 px-md-5">
                <form method="post" action="registuser4.php">

                  <!-- Nama input -->
                  <div class="row">
                    <div class="mb-4">
                      <label class="color">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control color" placeholder="Masukan nama" required />
                    </div>
                  </div>

                  <!-- Jenis Kelamin input -->
                  <div class="mb-4">
                    <label class="color">Jenis Kelamin</label>
                    <select class="form-control color" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>

                  <!-- Username input -->
                  <div class="mb-4">
                    <label class="color">Username</label>
                    <input type="text" id="username" name="username" class="form-control color" placeholder="Masukan username anda" required />
                  </div>
                  
                  <!-- Email input -->
                  <div class="mb-4">
                    <label class="color">Email address</label>
                    <input type="email" id="email" name="email" class="form-control color" placeholder="Masukan email anda" required />
                  </div>

                  <!-- Password input -->
                  <div class="mb-4">
                    <label class="color">Password</label>
                    <input type="password" id="password" name="password" class="form-control color" placeholder="Buat password" required />
                  </div>

                  <!-- Telepon input -->
                  <div class="mb-4">
                    <label class="color">Telepon</label>
                    <input type="text" id="tlp" name="tlp" class="form-control color" placeholder="Masukan nomor ponsel" required />
                  </div>
                <!-- Submit button -->
                <button type="input" class="btn btn-primary btn-block mb-4">Sign up</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <h6>
      152023072 - Muhammad Hasby As-shiddiqy | All rights is not reserved, i guess so..? ,_, <br/>
      Contact Person: 085174370106
    </h6>
  </body>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</html>
