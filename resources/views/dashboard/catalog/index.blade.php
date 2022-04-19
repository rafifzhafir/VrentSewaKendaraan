@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Catalog</h1>
</div>

<main>
  <div class="container">
    <div class="row justify-content-center">
    <!-- <div class="col-md-12 mb 4"></div> -->
      @foreach($kendaraans as $kendaraan)
          <div class="col-md-4">
                <div class="card shadow-sm" style="width: 18rem;">
                  <img src="{{url('img')}}/{{$kendaraan->gambar}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{$kendaraan->merk}}</h5>
                    <p class="card-text">
                      <strong>Price : </strong>Rp. {{number_format($kendaraan->harga)}} /day <br>
                      <strong>Available : </strong>{{$kendaraan->stok}} <br>
                      <hr>
                      <strong>Description :</strong> {{$kendaraan->keterangan}}
                    </p>
                    <a href="{{url('dashboard/catalog/pesan')}}/{{$kendaraan->id}}" class="btn btn-primary">Book</a>
                  </div>
                </div>
          </div>
      @endforeach
    </div>
  </div>
</main>
@endsection