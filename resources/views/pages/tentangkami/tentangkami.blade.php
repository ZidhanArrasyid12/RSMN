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
          <h3 class="lh-base text-white text-center fw-bold fs-4 mt-2">Tentang Kami</h3>
          </div>
      </div>
    </div>
    </section>
<!-- Akhir section -->

        <!-- tentang kami Section -->
        <section id="manfaat-ecoprint">
            <div class="container-lg">
              <div class="mt-5">
                <div
                  class="row"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="50"
                >
                <h3 class="lh-base fs-4 mt-3"></h3>
                <div class="row">
                  <div class="col-lg-6"
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                  >
                      <h4>
                        <span style="color: #000000" class="fw-bold">Sejarah Singkat RSMN</span><br>
                        <span style="color: #000000" class="fw-bold">Rumah Sakit Medika Nusantara
                      </h4>
                        <p>Rumah Sakit Medika Nusantara (RSMN) adalah sebuah fasilitas kesehatan yang  terletak di Ibukota Provinsi Kalimantan Timur, yang merupakan Kota Samarinda. RSMN adalah rumah sakit swasta yang telah lama melayani masyarakat Kalimantan Timur dan sekitarnya.</p>
                        <p>RSMN terus berkomitmen untuk meningkatkan kualitas perawatan kesehatan, meningkatkan fasilitas, serta memberikan pelayanan medis terbaik kepada masyarakat Kalimantan Timur. Sebagai salah satu rumah sakit terkemuka di daerah tersebut, RSMN memainkan peran penting dalam mendukung kesehatan dan kesejahteraan masyarakat setempat.</p>
                        <p>Selama bertahun-tahun, Rumah Sakit Medika Nusantara telah membangun reputasi sebagai penyedia perawatan kesehatan berkualitas di Kalimantan Timur dan terus berkembang untuk memenuhi kebutuhan pasien dengan standar etika dan profesionalisme tertinggi.</p>
                  </div>

                  <div class="col-lg-6 col-md-6 mt-2">
                    <img
                    src="/Assets/img/Rectangle 65.png" style="width: 650px;"
                    class=" img-layanan"
                    alt=""
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1000"
                  />
                  </div>
                </div>
                </div>
                  </div>
                  </div>
          <!-- Akhir Tentang kami Section -->


    <!-- Layanan Section -->
    <section>
      <div class="container-md">
        <div class="layanan mt-5 ">
          <div class="row">
            <div
              class="col-lg-6 col-md-12 layanan-tagline p-5"
              data-aos="fade-up"
              data-aos-delay="300"
              data-aos-duration="1000"
            >
              <h3 class="lh-base">Visi dan Misi</h3>
              <div class="mb-3 mt-3">
                <span class="title-layanan fw-bold"><h4>Visi :</h4></span>
                <p class="isi">"Menjadi pusat perawatan kesehatan terkemuka di Kalimantan Timur yang mendefinisikan standar mutu pelayanan medis dan menjadi mitra terpercaya dalam menjaga kesehatan dan kesejahteraan masyarakat."</p>
              </div>
              <div class="mb-2">
                <span class="title-layanan fw-bold"><h4>Misi :</h4></span>
                <p class="isi">1. Memberikan Pelayanan Berkualitas: Memberikan perawatan medis dan perawatan berkualitas tinggi, yang didasarkan pada bukti dan teknologi medis terbaru, untuk meningkatkan kesehatan dan kualitas hidup pasien<br>
                  2. Kepedulian Terhadap Pasien: Memberikan pelayanan dengan empati, perhatian, dan kepedulian yang tinggi kepada setiap pasien dan keluarganya, serta menciptakan lingkungan yang nyaman dan mendukung.<br>
                  3. Inovasi dan Penelitian: Menggalakkan inovasi dalam perawatan kesehatan, mendorong penelitian medis, dan berinvestasi dalam teknologi mutakhir untuk meningkatkan efisiensi dan hasil perawatan.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 position-relative">
              <img
                src="/Assets/img/Dokter remove bg unjuk kiri 1.png"
                class="position-absolute bottom-0 start-50 translate-middle-x img-layanan"
                alt=""
                data-aos="zoom-in"
                data-aos-delay="300"
                data-aos-duration="1000"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->

    @endsection
