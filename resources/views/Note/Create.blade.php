@extends('layouts.admin.master')

@section('title')Step Form Wizard
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Enregistrer Des notes</h3>
		@endslot
		<li class="breadcrumb-item">Note</li>
		<li class="breadcrumb-item">Creer</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header">
				<h5>Veuillez entrez les notes</h5><span>Valider tous les champs</span>
			  </div>
			  <div class="card-body">
				<div class="stepwizard">
				  <div class="stepwizard-row setup-panel">
					<div class="stepwizard-step"><a class="btn btn-primary" href="#step-1"> {{$ma1->id}} </a>
						<p> {{$ma1->nom}} </p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">{{$ma2->id}}</a>
						<p>{{$ma2->nom}}</p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">{{$ma3->id}}</a>
						<p>{{$ma3->nom}}</p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
						<p>Examen</p>
					  </div>
					
				  </div>
				</div>

					<form  class="form-control" id="regForm" action="{{ route('Note.store') }}" method="POST">
						@csrf
				  <div class="setup-content" id="step-1" >
					<div class="col-xs-12">
					  <div class="col-md-12">

					<div class="form-group">
						<label class="col-form-label">Classe</label>
						<select class="js-example-basic-single col-sm-12 form-control" id="classe" name="classe_id" >
							@foreach ($cl as $item )
							<option value=" {{$item->id}} "> {{$item->nom}} </option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<label class="col-form-label">Etudiant</label>
						<select class="js-example-basic-single col-sm-12 form-control" id="etudiant" name="user_id" >
							@foreach ($etu as $item )
							<option value=" {{$item->id}} "> {{$item->name}} </option>
							@endforeach
						</select>
					</div>
						<div class="form-group">
						  <label class="control-label">Note 1</label>
						  <input class="form-control" type="number" placeholder="Johan" name="note1" >
						</div>
						<div class="form-group">
						  <label class="control-label">Note 2</label>
						  <input class="form-control" type="number" placeholder="Deo" name="note2" >
						</div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  
				  <div class="setup-content" id="step-2">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note3" >
						  </div><div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note4" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-3">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note5" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note6" >
						  </div>
						  <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-4">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Examen</label>
							<input class="form-control" type="number" placeholder="Deo" name="examen" >
						  </div>
						  <button class="btn btn-secondary pull-right" type="submit">Finish!</button>
					  </div>
					</div>
				  </div>
				  {{-- <div class="setup-content" id="step-4">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note7" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note8" >
						  </div>
						<button class="btn btn-secondary pull-right" type="submit">Finish!</button>
					  </div>
					</div>
				  </div>


				  <div class="setup-content" id="step-5">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note9" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note10" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>

				  <div class="setup-content" id="step-6">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note11" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note12" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>

				  <div class="setup-content" id="step-7">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note13" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note14" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>

				  <div class="setup-content" id="step-8">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Note 1</label>
							<input class="form-control" type="number" placeholder="Deo" name="note15" >
						  </div>
						  <div class="form-group">
							<label class="control-label">Note 2</label>
							<input class="form-control" type="number" placeholder="Deo" name="note116" >
						  </div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div> --}}


				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>













	  {{-- <div class="container-fluid">
		<div class="row">
		  <div class="col-sm-12">
			<div class="card">
			  <div class="card-header">
				<h5>Form Wizard And Validation</h5><span>Validation Step Form Wizard</span>
			  </div>
			  <div class="card-body">
				<div class="stepwizard">
				  <div class="stepwizard-row setup-panel">
					<div class="stepwizard-step"><a class="btn btn-primary" href="#step-1"> {{$ma1->id}} </a>
						<p> {{$ma1->nom}} </p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">{{$ma2->id}}</a>
						<p>{{$ma2->nom}}</p>
					  </div>
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">{{$ma3->id}}</a>
						<p>{{$ma3->nom}}</p>
					  </div>
					   @if ($ma->id == 4)
					  <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">{{$ma4->id}}</a>
						<p>{{$ma4->nom}}</p>
					  </div>
					  @endif 
				  </div>
				</div>
				<form action="#" method="POST">
				  <div class="setup-content" id="step-1">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
						  <label class="control-label">First Name</label>
						  <input class="form-control" type="text" placeholder="Johan" required="required">
						</div>
						<div class="form-group">
						  <label class="control-label">Last Name</label>
						  <input class="form-control" type="text" placeholder="Deo" required="required">
						</div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-2">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
						  <label class="control-label">Email</label>
						  <input class="form-control" type="text" placeholder="name@example.com" required="required">
						</div>
						<div class="form-group">
						  <label class="control-label">Password</label>
						  <input class="form-control" type="password" placeholder="Password" required="required">
						</div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-3">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
						  <label class="control-label">Birth date</label>
						  <input class="form-control" type="date" required="required">
						</div>
						<div class="form-group">
						  <label class="control-label">Have Passport</label>
						  <input class="form-control" type="text" placeholder="yes/No" required="required">
						</div>
						<button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
					  </div>
					</div>
				  </div>
				  <div class="setup-content" id="step-4">
					<div class="col-xs-12">
					  <div class="col-md-12">
						<div class="form-group">
						  <label class="control-label">State</label>
						  <input class="form-control mt-1" type="text" placeholder="State" required="required">
						</div>
						<div class="form-group">
						  <label class="control-label">City</label>
						  <input class="form-control mt-1" type="text" placeholder="City" required="required">
						</div>
						<button class="btn btn-secondary pull-right" type="submit">Finish!</button>
					  </div>
					</div>
				  </div>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div> --}}
	








	  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
            $('#classe').on('change', function() {
               var classeID = $(this).val();
               if(classeID) {
                   $.ajax({
                       url: '/getEtudiant/'+classeID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#etudiant').empty();
                            $('#etudiant').append('<option hidden>Choose Etudiant</option>'); 
                            $.each(data, function(key, course){
                                $('select[name="etudiant"]').append('<option value="'+ key +'">' + etudiant.users.name+ '</option>');
                            });
                        }else{
                            $('#etudiant').empty();
                        }
                     }
                   });
               }else{
                 $('#etudiant').empty();
               }
            });
            });
        </script> --}}



	
	@push('scripts')
	<script src="{{asset('assets/js/form-wizard/form-wizard-two.js')}}"></script>

    <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
	@endpush


@endsection