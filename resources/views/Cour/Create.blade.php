@extends('layouts.admin.master')

@section('title')Form Wizard 1
 {{ $title }}
@endsection


@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Enregistrer un cours</h3>
		@endslot
		<li class="breadcrumb-item">Cours</li>
		<li class="breadcrumb-item">Creer</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Veillez Creer un Cours</h5>
						<span>Remplissez tous les champs</span>
					</div>
					<div class="card-body">
						<form  class="form-wizard" id="regForm" action="{{ route('Cour.store') }}" method="POST">
                            @csrf
							<div class="tab">
								<div class="form-group">
									<label for="name">Nom</label>
									<input class="form-control" id="name" name="nom" type="text" placeholder="Johan" required="required" />
								</div>
								<div class="form-group">
									<div class="mb-2">
										<label class="col-form-label">Professeur</label>
										@foreach ($prof as $item )
										<select class="form-control" name="prof_id" >
												<option value=" {{$item->id}} "> {{$item->nom}} </option>
												
										</select>
										@endforeach
									</div>
									</div>
							</div>
							<div class="tab">

								<div class="form-group">
								<div class="mb-2">
									<label class="col-form-label">Classe</label>
									<select class="form-control" name="classe_id"  >
										@foreach ($cla as $item )
												
											<option value=" {{$item->id}} "> {{$item->nom}} </option>
											@endforeach
									</select>
								</div>


								<div class="mb-2">
									<label class="col-form-label">Salle</label>
									<select class="form-control" name="salle_id"  >
										@foreach ($sa as $item )
												
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
										<label class="col-form-label">Semaine</label>
										<select class="form-control" name="day_id" >
											@foreach ($se as $item )
											<option value=" {{$item->id}} "> {{$item->nom}} </option>
											@endforeach
										</select>
									</div>

								</div>
							</div>
									<div class="tab">

								<div class="form-group">
									<label for="contact">Heure Debut</label>
									<input class="form-control datetimepicker-input digits" id="contact" name="Dd" type="time" placeholder="123456789" />
								</div>

								<div class="form-group">
									<label for="contact">Heure Fin</label>
									<input class="form-control datetimepicker-input digits" id="contact" name="Df" type="time" placeholder="123456789" />
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