@extends('navbar')
@section('content')
    <!-- Layanan Section -->
    <section>
      <div class="container-md" style="padding-top: 150px; padding-bottom: 100px;">
        <div class="layanan mt-5">
          <div class="row">
            <div
              class="col-lg-6 col-md-12 layanan-tagline p-5"
              data-aos="fade-up"
              data-aos-delay="300"
              data-aos-duration="1000"
            >
              <h3 class="lh-base">Fasilitas <br> Layanan</h3>
              <p>
                Selamat datang di Rumah Sakit Medika Nusantara (RSMN), kami bangga menyediakan berbagai fasilitas pelayanan unggulan untuk memenuhi kebutuhan kesehatan Anda. Kami memahami bahwa akses yang mudah dan cepat ke perawatan kesehatan berkualitas adalah prioritas utama. Inilah mengapa kami menawarkan sejumlah fasilitas pelayanan yang dapat membantu Anda mendapatkan perawatan yang Anda butuhkan.
              </p>
            </div>

        <div class="col-lg-6"
        data-aos="zoom-in"
        data-aos-delay="300"
        data-aos-duration="1000">
          <div class="card rounded-5 mt-5" style="height: 250px; width: 500px; background-color: #373737; margin-left: 10px;">
            <div class="row p-4">
              <div class="col-lg-3">
                <img src="/Assets/img/icon/Logo Lab.png" alt="">
              </div>
              <div class="col-lg-2 offset-lg-7" >
                <a class="arrowlink" href="laboratorium">
              <img src="/Assets/img/icon/arrow-right-ya.png" alt="">
            </a>
              </div>
                <p class="fw-bold text-white mt-5" >Laboratorium</p>
                <p class="text-white">kami mengoperasikan laboratorium modern yang dilengkapi dengan peralatan terkini dan tenaga medis berpengalaman.</p>
              </div>
            </div>
            <div class="row p-4">
              <div class="card rounded-5 mt-2 mb-3" style="height: 280px; width: 250px; background-color: #373737; margin-right: 10px;">
                <div class="col-lg-3 mt-2" style="padding-left: 180px;">
                  <a class="arrowlink" href="ugd">
                  <img src="/Assets/img/icon/arrow-right-ya.png" alt="">
                </a>
                  </div>
              <div class="row p-4">
                  <p class="fw-bold text-white mt-2" >UGD 24 Jam</p>
                  <p class="text-white" style="font-size: 14px;">kami mengoperasikan laboratorium modern yang dilengkapi dengan peralatan terkini dan tenaga medis berpengalaman.</p>
                </div>
              </div>
              <div class="card rounded-5 mt-2 mb-3" style="height: 280px; width: 250px; background-color: #373737;">
                <div class="col-lg-3 mt-2" style="padding-left: 180px;">
                  <a class="arrowlink" href="poliklinik">
                  <img src="/Assets/img/icon/arrow-right-ya.png" alt="">
                  </a>
                  </div>
                <div class="row p-4">
                    <p class="fw-bold text-white mt-2" >Poli Klinik</p>
                    <p class="text-white" style="font-size: 12px;">Dokter-dokter kami memiliki keahlian di berbagai bidang, seperti kardiologi, ortopedi, ginekologi, dan banyak lagi. Kami berkomitmen untuk memberikan perawatan yang personal dan holistik kepada setiap pasien.</p>
                  </div>
                </div></div>

        </div>
          </div>
        </div>
          </div>
    </section>
    <!-- Akhir Layanan Section -->
    @endsection
