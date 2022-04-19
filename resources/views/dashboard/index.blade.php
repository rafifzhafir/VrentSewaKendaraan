@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{auth()->user()->name}}</h1>
</div>
<div class="row mt-4">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <strong>Akun yang sedang login</strong>
            </div>
            <div class="card-body">
                <div class="row">
					<div class="col-md-3">
						<img src="/img/profil.jpg" alt="" class="img-thumbnail mb-4">
					</div>
					<div class="col-md-9">
	    				<table class="table table-borderless">
							<tr>
								<td>Name</td>
								<td>:</td>
								<td><b>{{auth()->user()->name}}</b></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td><b>{{auth()->user()->username}}</b></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><b>{{auth()->user()->email}}</b></td>
							</tr>
							<tr>
								<td>Date</td>
					    		<td>:</td>
								<td><b>{{auth()->user()->created_at}}</b></td>
							</tr>
				    	</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection