@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Booking</h1>
</div>

<main>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Booking</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('img')}}/{{$kendaraan->gambar}}" class="rounded mx-auto" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-3">
                            <h5>{{$kendaraan->merk}}</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{number_format($kendaraan->harga)}} /day</td>
                                    </tr>
                                    <tr>
                                        <td>Available</td>
                                        <td>:</td>
                                        <td>{{$kendaraan->stok}}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td>{{$kendaraan->keterangan}}</td>
                                    </tr>
                                    <form action="{{url('dashboard/catalog/pesan')}}/{{$kendaraan->id}}" method="post">
                                    @csrf
                                    <tr>
                                        <td>jumalah kendaraan</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_kendaraan" class="form-control " required >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>jumalah hari</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_hari" class="form-control " required>/day
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="alamat" class="form-control " required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="/dashboard/catalog" class="btn btn-secondary">Back</a></td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Book</button>
                                        </td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</main>
@endsection