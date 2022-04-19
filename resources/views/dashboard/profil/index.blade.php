@extends('dashboard.layouts.main')

@section('container')

<div class="row mt-4">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <strong>My Profil</strong>
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
						<div class="text-end">
							<a href="" class="btn bg-info"><span data-feather="edit-2"></span>
								Edit
							</a>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection