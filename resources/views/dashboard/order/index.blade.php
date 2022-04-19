@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Orders</h1>
</div>

<div class="table-responsive col-lg-9">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Type</th>
              <th scope="col">Pay</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pesanan_details as $pesanan_detail)
            <tr>
              <td>1</td>
              <td>{{$pesanan_detail->kendaraan->merk}}</td>
              <td>data</td>
              <td>placeholder</td>
              <td>
                  <a href="" class="badge btn-info"><span data-feather="eye"></span></a>
                  <a href="" class="badge btn-danger"><span data-feather="trash-2"></span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection