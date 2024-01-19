@extends('navbar')
@section('content')


    <!-- Layanan Section -->
    <section>
      <div class="container-md" style="margin-top: 130px">
        <div class="info mt-5 ">
          <div class="row">
            <div class="col-lg-6 col-md-6 position-relative">
                <img
                  src="/Assets/img/Dokter remove bg unjuk kanan 1.png" style="width: 600px;"
                  class="position-absolute bottom-0 start-50 translate-middle-x img-layanan"
                  alt=""
                  data-aos="zoom-in"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                />
              </div>
            <div
              class="col-lg-6 col-md-12 layanan-tagline p-5"
              data-aos="fade-up"
              data-aos-delay="300"
              data-aos-duration="1000"
            >
              <div class="mb-3 mt-3 text-center" style="padding-bottom: 100px;">
                <h4>
                  <span style="color: #0067B7" class="fw-bold">Nomor Rujukan</span><br>
                  <span style="color: #0067B7" class="fw-bold">{{ Auth::user()->name }}
                </h4>
                <p>
                    12345678
                </p>
                <a href="student/create">
                <button class="button-selengkapnya px-5 py-2">Daftar online Sekarang</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->

    @endsection
