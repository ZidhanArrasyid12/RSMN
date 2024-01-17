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
          <h3 class="lh-base text-white text-center fw-bold fs-4 mt-2">Dokter</h3>
          </div>
      </div>
    </div>
    </section>
<!-- Akhir section -->

<section>
    <div class="container-md">
      <div class="dokter mt-5">
        <div class="row">
          <div
            class="col-lg-6 col-md-12 layanan-tagline p-5"
            data-aos="fade-up"
            data-aos-delay="300"
            data-aos-duration="1000"
          >
            <h4 class="text-white" style="padding-left: 50px; padding-top: 80px; padding-bottom: 20px;">Selamat Datang <br> Di Pencarian Dokter RSMN...</h4>

            <div class="row">
              <div class="form-group col-lg-6" style="padding-left: 60px;">
                <select class="form-control" name="spesialis" id="spesialis">
                <option value="Semua Spesialis"
                {{ old('spesialis')=='Semua Spesialis' ? 'selected': '' }} >
                Semua Spesialis
                </option>
                <option value="Gigi"
                {{ old('spesialis')=='Gigi' ? 'selected': '' }} >
                Gigi
                </option>
                <option value="Jantung"
                {{ old('spesialis')=='Jantung' ? 'selected': '' }} >
                Jantung
                </option>
                <option value="THT"
                {{ old('spesialis')=='THT' ? 'selected': '' }} >
                THT
                </option>
                <option value="Anak"
                {{ old('spesialis')=='Anak' ? 'selected': '' }} >
                Anak
                </option>
                <option value="Bedah"
                {{ old('spesialis')=='Bedah' ? 'selected': '' }} >
                Bedah
                </option>
                <option value="Kulit"
                {{ old('spesialis')=='Kulit' ? 'selected': '' }} >
                Kulit
                </option>
                <option value="Penyakit Dalam"
                {{ old('spesialis')=='Penyakit Dalam' ? 'selected': '' }} >
                Penyakit Dalam
                </option>
                <option value="Mata"
                {{ old('spesialis')=='Mata' ? 'selected': '' }} >
                Mata
                </option>
                <option value="Saraf"
                {{ old('spesialis')=='Saraf' ? 'selected': '' }} >
                Saraf
                </option>
                </select>
                @error('spesialis')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

            <div class="form-group col-lg-6" style="padding-left: 60px;" >
                <select class="form-control"  name="dokter" id="dokter">
                <option value="Pilih Dokter"
                {{ old('dokter')=='Pilih Dokter' ? 'selected': '' }} >
                Pilih Dokter
                </option>
                <option value="Dr Thorik"
                {{ old('dokter')=='Dr Thorik' ? 'selected': '' }} >
                Dr Thorik
                </option>
                <option value=" Dr Zidhan"
                {{ old('dokter')==' Dr Zidhan' ? 'selected': '' }} >
                Dr Zidhan
                </option>
                <option value="Dr Husni"
                {{ old('dokter')=='Dr Husni' ? 'selected': '' }} >
                Dr Husni
                </option>
                <option value="Dr Fauzan"
                {{ old('dokter')=='Dr Fauzan' ? 'selected': '' }} >
                Dr Fauzan
                </option>
                <option value="Dr Amin"
                {{ old('dokter')=='Dr Amin' ? 'selected': '' }} >
                Dr Amin
                </option>
                <option value="Dr Toni"
                {{ old('dokter')=='Dr Toni' ? 'selected': '' }} >
                Dr Toni
                </option>
                </select>
                @error('dokter')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
          </div>
          <div class="pt-3" style="padding-left: 50px; padding-bottom: 100px;">
            <button class="button-kontak py-2 fw-bold" style="width: 540px;">Cari</button></div>
          </div>
          <div class="col-lg-6 col-md-6 position-relative">
            <img
              src="/Assets/img/Dokter remove bg unjuk kiri 1.png " style="width: 530px;"
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
  <div class="container-md">
<div class="caridokter" style="display: flex; justify-content: center; ">
    <div class="row row-cols-lg-3 mt-2">
        <div class="col mt-5">
            <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
                <img class="card-img-top" src="/Assets/img/dokter/Spesialis 1 1.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">dr. Toni  Aditya Irawam </h5>
                  <p class="card-text">Penyakit Dalam</p>
                  <a href="toni">
                    <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
                  </a>
                </div>
              </div>
        </div>
        <div class="col mt-5">
            <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
                <img class="card-img-top" src="/Assets/img/dokter/thorik.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">dr.Thorik Agung Prakoso</h5>
                  <p class="card-text">Penyakit Dalam</p>
                  <a href="thorik">
                    <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
                  </a>
                </div>
              </div>
        </div>
        <div class="col mt-5">
            <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
                <img class="card-img-top" src="/Assets/img/dokter/husni.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">dr.Muhammad Husni </h5>
                  <p class="card-text">Penyakit Dalam</p>
                  <a href="husni">
                    <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
                  </a>
                </div>
              </div>
        </div>
        <div class="col mt-5">
          <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
              <img class="card-img-top" src="/Assets/img/dokter/Fauzan.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">dr.Fauzan Cholis Ar Rasyid </h5>
                <p class="card-text">Bedah</p>
                <a href="fauzan">
                  <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
                </a>
              </div>
            </div>
      </div>
      <div class="col mt-5">
        <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
            <img class="card-img-top" src="/Assets/img/dokter/Zidhan.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">dr.Zidhan Arrasyid</h5>
              <p class="card-text">Bedah</p>
              <a href="zidhan">
                <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
              </a>
            </div>
          </div>
    </div>
    <div class="col mt-5">
      <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
          <img class="card-img-top" src="/Assets/img/dokter/Amin.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">dr.Amin Tohari </h5>
            <p class="card-text">Bedah</p>
            <a href="amin">
              <button class="button-selengkapnya px-5 py-2">Selengkapnya</button>
            </a>
          </div>
        </div>
  </div>
    </div>
</div>
  </div>

  @endsection
