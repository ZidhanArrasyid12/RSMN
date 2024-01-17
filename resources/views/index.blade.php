
   @extends('navbar')
   @section('content')

   <!-- Hero Section -->
    <section id="hero" class="position-relative">
      <div class="container-lg h-100">
        <div class="row h-100">
          <div
            class="col-md-6 hero-tagline my-auto"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="50"
            data-aos-once="true"
          >
          <h5 class="text-white fs-4 mt-5">RS.Medika Nusantara</h5>
            <h4>
              Menghadirkan
              <span style="color: #F7D811" class="fw-bold">Harapan</span><br>
              Memulihkan
              <span style="color: #F7D811" class="fw-bold">Kehidupan</span>
            </h4>
            <p>
              Kami lebih dari sekadar rumah sakit. Kami adalah harapan Anda
untuk memulihkan kehidupan yang lebih baik.
            </p>
            <a href="caridokter">
            <button class="button-Daftar px-5 py-2">Daftar Online</button>
            </a>
          </div>

          <div class="col-lg-6" style="height: 5px; margin-top: 70px;">
            <div>
              <img
              src="Assets/img/Dokter remove bg 1.png"
              alt=""
              class="img-hero"
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-delay="300"
              data-aos-once="true"
              />
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-3 lh-lg mt-5">
              <img src="Assets/img/arrow-circle-down.png" alt="" />
              <span style="color: #fff;">Perawatan Darurat 24 Jam</span><br>
            <img src="Assets/img/arrow-circle-down.png" alt="" />
            <span style="color: #fff;">Laboratorium Lengkap</span><br>
            <img src="Assets/img/arrow-circle-down.png" alt="" />
            <span style="color: #fff;">Rawat inap</span>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card rounded-5">
            <div class="row p-4">
              <div class="col-lg-3">
                <img src="Assets/img/33  document health.png" alt="">
                <p class="fw-bold lh-base mt-2" >Pendaftaran Online</p>
                <a href="#" style="text-decoration: none;">Lihat Detail</a>
                <img src="Assets/img/arrow-circle-right.png" alt="" />
              </div>
              <div class="col-lg-3">
                <img src="Assets/img/35  hospital.png" alt="">
                <p class="fw-bold lh-base mt-2" >Fasilitas
                  Pelayanan</p>
                <a href="fasilitas" style="text-decoration: none;">Lihat Detail</a>
                <img src="Assets/img/arrow-circle-right.png" alt="" />
              </div>
              <div class="col-lg-3">
                <img src="Assets/img/46  bed.png" alt="">
                <p class="fw-bold lh-base mt-2" >Info <br>
                  Ruangan</p>
                <a href="infokamar" style="text-decoration: none;">Lihat Detail</a>
                <img src="Assets/img/arrow-circle-right.png" alt="" />
              </div>
              <div class="col-lg-3">
                <img src="Assets/img/23  stethoscope.png" alt="">
                <p class="fw-bold lh-base mt-2" >Cari <br>
                  Dokter</p>
                <a href="caridokter" style="text-decoration: none;">Lihat Detail</a>
                <img src="Assets/img/arrow-circle-right.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Akhir Hero Section -->

    <!-- Layanan Section -->
    <section>
      <div class="container-md">
        <div class="layanan mt-5 ">
          <div class="row">
            <div class="col-lg-6 col-md-6 position-relative">
              <img
                src="Assets/img/Dokter remove bg unjuk kanan 1.png"
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
              <h3 class="lh-base">Layanan <br> RS.Medika Nusantara</h3>
              <div class="mb-3 mt-3">
                <img src="Assets/img/Frame.png" alt="" />
                <span class="title-layanan fw-bold">Fasilitas Pelayanan</span>
                <p class="isi px-5">kami menawarkan beragam fasilitas pelayanan, Dari ruangan laboratorium, Unit Gawat Darurat dan Poliklinik yang siap memberikan pelayanan kesehatan berkualitas, kami berkomitmen untuk menjaga kesehatan Anda dengan pelayanan terbaik.</p>
                <div class="px-5">
                  <a href="fasilitas" style="text-decoration: none;">Lihat Detail</a>
                  <img src="Assets/img/arrow-circle-right.png" alt="" />
                </div>
              </div>
              <div class="mb-2">
                <img src="Assets/img/Frame (1).png" alt="" />
                <span class="title-layanan fw-bold">Ruang Kamar</span>
                <p class="isi px-5">Di gunakan untuk memantau jumlah ketersediaan kamar yang ada pada unit rawat inap</p>
                <div class="px-5">
                  <a href="infokamar" style="text-decoration: none;">Lihat Detail</a>
                  <img src="Assets/img/arrow-circle-right.png" alt="" />
                </div>
              </div>
              <div class="mb-2">
                <img src="Assets/img/Frame (2).png" alt="" />
                <span class="title-layanan fw-bold">Rawat Inap</span>
                <p class="isi px-5">Tersedia Ruangan dan fasilitas yang kami sediakan dengan berbagai macam kelas yang tersedia</p>
                <div class="px-5">
                  <a href="rawatinap" style="text-decoration: none;">Lihat Detail</a>
                  <img src="Assets/img/arrow-circle-right.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->

    <!-- tentang kami Section -->
    <section id="tentang-kami">
      <div class="container-lg">
        <div class="mt-5">
          <div
            class="row"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="50"
          >
          <h3 class="lh-base text-center fw-bold fs-4 mt-5">Tentang Kami</h3>
          <div  class="container">

            <button class="toggle-btn" onclick="toggleContent('deskripsi')">
              Deskripsi
            </button>
            <button class="toggle-btn" onclick="toggleContent('lokasi')">
              Lokasi
            </button>
          </div>
            <div id="deskripsi" class="content active">
              <div class="row">
                <div class="col-lg-6"
                data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000"
                >
                  <h5 class="text-white fs-4 mt-5">RS.Medika Nusantara</h5>
                    <h4>
                      <span style="color: #000000" class="fw-bold">Sejarah Singkat RSMN</span><br>
                      <span style="color: #000000" class="fw-bold">Rumah Sakit Medika Nusantara
                    </h4>
                    <p>
                      Rumah Sakit Medika Nusantara (RSMN) adalah sebuah fasilitas kesehatan yang  terletak di Ibukota Provinsi Kalimantan Timur, yang merupakan Kota Samarinda. RSMN adalah rumah sakit swasta yang telah lama melayani masyarakat Kalimantan Timur dan sekitarnya.Kami lebih dari sekadar rumah sakit. Kami adalah harapan Anda
        untuk memulihkan kehidupan yang lebih baik.
                    </p>
                    <a href="tentangkami">
                    <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
                  </a>
                </div>

                <div class="col-lg-6 col-md-6">
                  <img
                  src="Assets/img/Rectangle 65.png" style="width: 650px;"
                  class=" img-layanan"
                  alt=""
                  data-aos="zoom-in"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                />
                </div>
              </div>
            </div>

            <div id="lokasi" class="content">
              <div class="row">
                <div class="col-lg-6"
                data-aos="fade-up"
                data-aos-delay="300"
                data-aos-duration="1000"
                >
                <img
                src="Assets/img/Rectangle 71.png" style="width: 650px;"
                class=" img-layanan"
                alt=""
                data-aos="zoom-in"
                data-aos-delay="300"
                data-aos-duration="1000"
              />
              </div>
                <div class="col-lg-6 col-md-6 ">
                  <div class="layanan">
                    <div class="isi p-4">
                      <div class="mb-3">
                        <img src="Assets/img/icon/telp.png" alt="" /> Hotline
                        <p>(+62) 82122667899</p>
                      </div>

                      <div class="mb-3">
                        <img src="Assets/img/icon/mail.png" alt="" /> Email
                        <p>RSMN@gmail.com</p>
                      </div>

                      <div class="mb-3">
                        <img src="Assets/img/icon/map.png" alt="" /> Alamat
                        <p>Panji,Kec. Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur</p>
                      </div>
                      <button class="button-selengkapnya px-5 py-2 mb-3 p">Buka di Google Maps</button>
                    </div>
                </div>
            </div>
          </div>
          </div>

          </div>
            </div>
      </div>
    <!-- Akhir Tentang kami Section -->

@endsection

