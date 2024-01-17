@extends('navbar')
@section('content')

    <!-- Layanan Section -->
    <section>
      <div class="container-md" style="padding-top: 100px;">
        <div class="layanan mt-5" style="padding-bottom: 50px;">
          <div class="row">
            <div class="col-lg-4 p-5">
                <h3 class="fw-bold">Profile Dokter</h3>
                <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
                    <img class="card-img-top" src="/Assets/img/dokter/Amin.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">dr.Amin Tohari </h5>
                      <p class="card-text">Bedah</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-8" style="padding-top: 90px;">
                <table class="table-bordered mb-3 " style="width: 770px; height: 80px; text-align: center;">
                    <thead>
                      <tr style="background-color: #658FFD; color: #ffffff; height: 40px;">
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                        <th>Minggu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr style="background-color: #ffffff;">
                        <td>14.00-16.00</td>
                        <td>13.00-15.00</td>
                        <td>13.00-15.00</td>
                        <td>14.00-16.00</td>
                        <td>14.00-16.00</td>
                        <td>13.00-15.00</td>
                        <td>Libur</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="card rounded-5 mb-3" style="height: 139px; width: 770px; background-color: #ffffff;">
                    <h5 class="card-title p-2 fw-bold text-white" style="background-color: #658FFD; border-radius: 24px 24px 8px 8px;">Pendidikan </h5>
                    <div class="row p-2" style="margin-left: 2px;">
                        <li>2022, Sp.B.(K).(Spesialis Ilmu Bedah/Konsultan), Universitas Indonesia</li>
                        <li>2020, Dr. med.(Doctor Medicinae), Westfalische Wilhems Universitat Munster</li>
                        <li>2015, Sp.B.(Spesialis Ilmu Bedah), Universitas Indonesia</li>
                      </div>
                    </div>
                    <div class="card rounded-5 " style="height: 139px; width: 770px; background-color: #ffffff;">
                        <h5 class="card-title p-2 fw-bold text-white" style="background-color: #658FFD; border-radius: 24px 24px 8px 8px;">Penghargaan</h5>
                        <div class="row p-2" style="margin-left: 2px;">
                            <li>2009, Sertifikat Penghargaan Cumlaude Program Profesi , Universitas Indonesia</li>
                            <li>2021, Penulis Utama, Effects of intestinal strangulation release on liver </li>
                            <li>2012, Sertifikat Penghargaan Cumlaude Fakultas Kedokteran , Universitas Indonesia</li>
                          </div>
                        </div>
                        <a href="dramin">
                        <button type="submit" class="btn btn-primary mt-3 fw-bold" style="width: 770px; background-color: #658FFD; border-radius: 242px 24px;" >
                            Buat Janji
                          </button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->

    @endsection
