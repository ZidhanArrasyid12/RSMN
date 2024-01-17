@extends('navbar')
@section('content')
    <!-- Layanan Section -->
    <section>
      <div class="container-md" style="padding-top: 100px;">
        <div class="layanan mt-5" style="padding-bottom: 50px;">
          <div class="row">
            <div class="col-lg-4 p-5" >
                <h3 class="fw-bold ">Pilih Jadwal Dokter</h3>
                <div class="form-group" style="padding-top: 16px">
                    <input type="date"
                    class="form-control @error('tanggal') is-invalid @enderror"
                    id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
            </div>
            <div class="col-lg-4" style="padding-top: 90px;">
                <a href="student/create">
                        <button type="submit" class="btn btn-primary mt-3 fw-bold" style=" width:400px; background-color: #658FFD; border-radius: 24px 24px;" >
                            Selanjutnya
                          </button> </a>

            </div>
            <div class="col-lg-4 p-5" style="padding-top: 90px;">

                <div class="card" style="border-radius:  20px 20px; padding: 10px 5px;" >
                    <img class="card-img-top" src="/Assets/img/dokter/Fauzan.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">dr.Fauzan Cholis Ar Rasyid </h5>
                      <p class="card-text">Bedah</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2" style="padding-left: 300px">
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Layanan Section -->


    @endsection
