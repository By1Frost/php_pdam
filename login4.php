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
    <link rel="stylesheet" href="assetstyle\login4_style.css?v=<?php echo time(); ?>">
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
              <span style="color: hsl(218, 81%, 75%)">Silahkan login terlebih dahulu!</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
              Aplikasi PDAM ini masih dalam tahap pengembangan jadi, mohon kritik dan sarannya yah:D
            </p>
            <h4 class="my-5"><a class="one" href="regist4.php">Belum memiliki akun?</a></h4>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <!-- Lingkaran besar -->
            <div class="radius-shape-1 rounded-circle shadow-5-strong shape-trans"></div>
            <!-- Lingkaran poligon -->
            <div class="radius-shape-2 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-3 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-4 shape-trans shadow-5-strong"></div>
            <div class="radius-shape-5 shape-trans shadow-5-strong"></div>

            <div class="loginbox bg-glass">
              <!-- Login box -->
              <div class="loginbox px-4 py-5 px-md-5">
                <form method="POST" action="ceklogin4.php">
                  <!-- Username input -->
                  <div class="mb-4">
                    <label class="color">Username</label>
                    <input type="text" id="username" name="username" class="form-control color" placeholder="Masukan username anda" required />
                  </div>

                  <!-- Password input -->
                  <div class="mb-4">
                    <label class="color">Password</label>
                    <input type="password" id="password" name="password" class="form-control color" placeholder="Masukan password" required />
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>
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
