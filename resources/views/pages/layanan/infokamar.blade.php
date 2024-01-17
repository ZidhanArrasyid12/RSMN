@extends('navbar')
@section('content')
    <!-- Awal section -->
    <section id="ok" class="position-relative rounded-5 mt-5">
    <div class="container-lg">
        <div class="row">
        <div
            class="col-md-12 hero-tagline my-auto"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="50"
            data-aos-once="true"
        >
          <h5 class="text-white text-center mt-5" style="padding-top: 40px;">RS.Medika Nusantara</h5>
          <h3 class="lh-base text-white text-center fw-bold fs-4 mt-2">Informasi Kamar</h3>
          </div>
      </div>
    </div>
    </section>
<!-- Akhir section -->

<section>
    <div class="container-md" style="font-size: 20px;">
      <div class="infokamar mt-5 ">
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kelas</th>
              <th scope="col">Tersedia</th>
              <th scope="col">Terisi</th>
              <th scope="col">Kosong</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>VVIP</td>
              <td>15</td>
              <td>7</td>
              <td>8</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>VIP</td>
              <td>15</td>
              <td>4</td>
              <td>11</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Kelas-1</td>
              <td>40</td>
              <td>30</td>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Kelas-2</td>
              <td>80</td>
              <td>40</td>
              <td>40</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Kelas-3</td>
              <td>100</td>
              <td>60</td>
              <td>40</td>
            </tr>

          </tbody>
        </table>
        </div>
      </div>
  </section>

    <!-- Layanan Section -->
    <section>
      <div class="container-md">
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
                  <span style="color: #0067B7" class="fw-bold">Informasi</span><br>
                  <span style="color: #0067B7" class="fw-bold">dan Pendaftaran
                </h4>
                <p>
                    Anda Dapat Menghubungi CS Kami
                </p>
                <button class="button-selengkapnya px-5 py-2">Kontak Pendaftaran</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->

    @endsection
