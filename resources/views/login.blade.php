<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website RSMN</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link
      rel="shortcut icon"
      href="/Assets/img/Logo RSMN 2.png"
      type="image/x-icon" />
    <link rel="stylesheet" href="/Assets/css/style.css" />
    <link rel="stylesheet" href="Assets/css/responsive.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Viga&display=swap"
      rel="stylesheet" />
  </head>
  <body style="background-color: #fff">
    <div class="containerr">
      <div class="login">
          <div class="row">
              <img
                src="Assets/img/Rectangle 7.png"
                style="height: 809px; width: 600px" />
            <div class="col-lg-7 p-5">
              <div class="text-center text-white">
                <h3>Selamat Datang</h3>
                <p>
                  Silahkan Masukan Username <br />
                  dan Password Anda
                </p>
              </div>

                <form class="text-white">
                  <div class="mb-3" style="padding-left: 152px;">
                    <label for="exampleInputtext" class="form-label"
                      >Username</label
                    >
                    <input
                      type="text"
                      class="form-control rounded-5 w-75"
                      id="exampleInputtext"
                      aria-describedby="textHelp"
                      placeholder="Masukkan Username..." required/>
                  </div>
                  <div class="mb-3" style="padding-left: 152px;">
                    <label for="exampleInputPassword1" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control rounded-5 w-75"
                      id="exampleInputPassword1"
                      placeholder="Masukkan Sandi..." required/>
                  </div>
                  <a href="#" style="color: #fff;">
                    <p style="padding-left: 500px;">Lupa Password?</p>
                  </a>
                  <center>
                    <button type="submit" class="btn btn-primary rounded-5 mb-5" style="width: 500px;" >
                      Log in
                    </button>
                  <p class="pt-5 pb-3 text-white">Atau masuk dengan</p>
                  <p class="text-white p-4">
                  <img src="Assets/img/icon/google.png" > Google &emsp; <img src="Assets/img/icon/facebookblue.png">Facebook
                </p>
                  <p class="text-white p-4">Belum memiliki akun? <a href="register" style="color: #F7D811">Klik di sini</a>
                </p>
                </center>
                </form>

            </div>
          </div>
      </div>
    </div>
    <script src="Assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </body>
</html>
