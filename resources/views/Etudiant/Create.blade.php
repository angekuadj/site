@extends('layouts.admin.master')

@section('title')Form Wizard 1
 {{ $title }}
@endsection


@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Creer un Etudiant</h3>
		@endslot
		<li class="breadcrumb-item">Etudiant</li>
		<li class="breadcrumb-item">Creer</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Veillez Creer un Etudiant</h5>
						<span>Remplissez tous les champs</span>
					</div>
					<div class="card-body">
						<form  class="form-wizard" id="regForm" action="{{ route('Etudiant.store') }}" method="POST">
                            @csrf
							<div class="tab">
								
								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">User</label>
										<select class="form-control" name="user_id" >
											@foreach ($user as $item )
													
												<option value=" {{$item->id}} "> {{$item->name}} </option>
												@endforeach
										</select>
									</div>
									</div>

								<div class="form-group">
									<label for="contact">Date de naissance</label>
									<input class="form-control datetimepicker-input digits" id="contact" name="DN" type="date" placeholder="123456789" />
								</div>
							</div>
							<div class="tab">

								<div class="form-group">
								<div class="mb-2">
									<label class="col-form-label">Classe</label>
									<select class="form-control" name="classe_id" >
										@foreach ($cla as $item )
												
											<option value=" {{$item->id}} "> {{$item->nom}} </option>
											@endforeach
									</select>
								</div>
								</div>

								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">Filiere</label>
										<select class="form-control" name="filiere_id" >
											@foreach ($fi as $item )
												
											<option value=" {{$item->id}} "> {{$item->nom}} </option>
											@endforeach
										</select>
									</div>
									</div>

								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">Sexe</label>
										<select class="form-control" name="sexe" >
											<option value="Homme">Homme</option>
											<option value="Femme">Femme</option>
										</select>
									</div>
									</div>
							</div>
									<div class="tab">
								<div class="form-group">
									<label for="exampleInputPassword1">Contact</label>
									<input class="form-control" id="exampleInputcPassword1" type="number" name="contact"  />
								</div>
							
								<div class="form-group">
									<label for="exampleFormControlInput1">Contact parent</label>
									<input class="form-control digits" type="number" name="contactP" />
								</div>
								<div class="form-group">
									<label class="control-label">Matricule</label>
									<input class="form-control digits" name="matricule" type="text" />
								</div>
							</div>
							{{-- <div class="tab">
								<div class="form-group">
									<label class="control-label">Country</label>
									<input class="form-control mt-1" type="text" placeholder="Country" required="required" />
								</div>
								<div class="form-group">
									<label class="control-label">State</label>
									<input class="form-control mt-1" type="text" placeholder="State" required="required" />
								</div>
								<div class="form-group">
									<label class="control-label">City</label>
									<input class="form-control mt-1" type="text" placeholder="City" required="required" />
								</div>
							</div> --}}
							<div>
								<div class="text-end btn-mb">
									<button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
									<button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
								</div>
							</div>
							<!-- Circles which indicates the steps of the form:-->
							<div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span></div>
							<!-- Circles which indicates the steps of the form:-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{asset('assets/js/form-wizard/form-wizard.js')}}"></script>
	@endpush

@endsection