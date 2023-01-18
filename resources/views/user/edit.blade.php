@extends('layouts.admin.master')

@section('title')Edit Profile
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Edit Profile</h3>
		@endslot
		<li class="breadcrumb-item">Users</li>
		<li class="breadcrumb-item active">Edit Profile</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-xl-4">
	                <div class="card">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">My Profile</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <form>
	                            <div class="row mb-2">
	                                <div class="profile-title">
	                                    <div class="media">
                                                    @php($photo = auth()->user()->photo)
                                                    <img class="img-70 rounded-circle" width="150px" src="@if($photo == null) https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg  @else {{ asset("storage/$photo") }} @endif" id="image_preview_container">
                                                 
	                                        <div class="media-body">
	                                            <h3 class="mb-1 f-20 txt-primary">MARK JECNO</h3>
	                                            <p class="f-12">DESIGNER</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="mb-3">
	                                <h6 class="form-label">Bio</h6>
	                                <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Email-Address</label>
	                                <input class="form-control" placeholder="your-email@domain.com" />
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Password</label>
	                                <input class="form-control" type="password" value="password" />
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Website</label>
	                                <input class="form-control" placeholder="http://Uplor .com" />
	                            </div>
	                            <div class="form-footer">
	                                <button class="btn btn-primary btn-block">Save</button>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-8">
                    <form class="card" action="route{{'profileUpdate'}}" method="POST" enctype="multipart/form-data" >
	                
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Edit Profile</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
                                
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Nom</label>
	                                    <input class="form-control" type="text" name="name" placeholder="Company" value="{{ auth()->user()->name }}" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Prenom</label>
	                                    <input class="form-control" type="text" name="prenom" placeholder="Username" value="{{ auth()->user()->prenom }}" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Email address</label>
	                                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}"/>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Matricule</label>
	                                    <input class="form-control" type="password" name="matricule" placeholder="Company" value="{{ auth()->user()->matricule }}" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Date de Naissance</label>
	                                    <input class="form-control" type="date" placeholder="Last Name"  name="DN" value="{{ auth()->user()->DN }}" />
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <div class="mb-3">
	                                    <label class="form-label">Classe</label>
	                                    <select class="form-control btn-square" name="classe_id"  value="{{ auth()->user()->classe_id }}>

	                                        <option value="O">--Select--</option>
	                                    </select>
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Sexe</label>
	                                    <input class="form-control" type="password" name="matricule" placeholder="Company" value="{{ auth()->user()->sexe }}" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Contact</label>
	                                    <input class="form-control" type="number" placeholder="Last Name"  name="contact" value="{{ auth()->user()->contact }}" />
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Contact Parent</label>
	                                    <input class="form-control" type="number" placeholder="Last Name"  name="contactP" value="{{ auth()->user()->contactP }}" />
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Password</label>
	                                    <input class="form-control" type="password"  name="password" value="{{ auth()->user()->password }}" />
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-6">
                                <input type="file" name="photo" id="profile_image"  class="form-control" value="{{ auth()->user()->photo }}">
                                </div>
	                            
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
	                        <button class="btn btn-primary" type="submit">Update Profile</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection