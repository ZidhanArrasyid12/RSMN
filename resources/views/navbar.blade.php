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
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="/Assets/img/Logo RSMN 2.png" type="image/x-icon">
    <link rel="stylesheet" href="/Assets/css/style.css" />
    <link rel="stylesheet" href="/pages/layanan/layanan.css" />
    <link rel="stylesheet" href="Assets/css/responsive.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Viga&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar nav-color navbar-expand-lg fixed-top py-3 shadow-sm">
      <div class="container-lg">
        <a class="navbar-brand" href="/">
          <img
            src="/Assets/img/Logo RSMN 2.png"
            alt=""
            width="120"
            class="me-2"
          /></a
        >

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link" aria-current="page" href="/"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item fw-bold" href="fasilitas">Fasilitas Layanan <img src="/Assets/img/icon/arrow-right.png" alt=""></a>
                <a class="dropdown-item fw-bold" href="infokamar">Informasi Kamar <img src="/Assets/img/icon/arrow-right.png" alt=""></a>
                <a class="dropdown-item fw-bold" href="rawatinap">Rawat Inap <img src="/Assets/img/icon/arrow-right.png" alt=""></a>
              </ul>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="caridokter">Cari Dokter</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="tentangkami">Tentang Kami</a>
            </li>
          </ul>


          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    @yield('content')

        <!-- Footer -->
        <footer>
            <div class="container-lg">
              <div
                class="row p-5 mt-5"
                data-aos="zoom-in"
                data-aos-duration="1000"
                data-aos-delay="200"
              >
                <div class="col-lg-3 col-md-6">
                  <img src="Assets/img/Logo RSMN 2.png" alt="" class="logo-footer"/>
                </div>
                <div class="col-lg-3 col-md-6 informasi ">
                  <h5 class="title-footer">Informasi</h5>
                  <li class="mb-2">
                    <a href="index">Home</a>
                  </li>
                  <li class="mb-2">
                    <a href="layanan">Layanan</a>
                  </li>
                  <li class="mb-2">
                    <a href="caridokter">Cari Dokter</a>
                  </li>
                  <li class="mb-2">
                    <a href="tentangkami">Tentang Kami</a>
                  </li>
                </div>

                <div class="col-lg-3 col-md-6 kontak">
                  <h5 class="title-footer">Kontak</h5>

                  <div class="mb-3">
                    <img src="Assets/img/icon/mynaui_telephone.png" alt="" />
                    <a href="#">(+62) 82122667899</a>
                  </div>

                  <div class="mb-3">
                    <img src="Assets/img/icon/quill_mail.png" alt="" />
                    <a href="#"
                    >RSMN@gmail.com</a>
                  </div>

                  <div class="mb-3 d-flex align-items-center">
                    <img src="Assets/img/icon/system-uicons_location.png" alt="" />
                    <a href="#"
                      >Panji,Kec. Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur</a
                    >
                  </div>
                </div>

                    <div class="col-lg-3 col-md-6 social-media">
                  <h5 class="title-footer">Social Media</h5>
                  <a href="#">
                    <img src="Assets/img/icon/facebook.png" alt="" />
                  </a>
                  <a href="#">
                    <img src="Assets/img/icon/twt.png" alt="" />
                  </a>
                  <a href="#">
                    <img src="Assets/img/icon/mdi_instagram.png" alt="" />
                  </a>
                  <a href="#">
                    <img src="Assets/img/icon/mingcute_threads-line.png" alt="" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-12 copyright">
              <p>
                Copyright &copy; 2023 PT Maju Tech Indo | All Right Reserved
              </p>
            </div>
          </footer>
          <!-- Akhir Footer -->

    <script src="Assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
