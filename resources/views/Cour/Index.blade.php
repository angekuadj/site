@extends('layouts.admin.master')

@section('title')Lists
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>voir Cours</h3>
		@endslot
		<li class="breadcrumb-item">Cours</li>
    @endcomponent

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						{{-- <div class="card-header">
							<h5></h5>
							<span>Use a class<code>table</code> to any table.</span>
						</div> --}}
						@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
		<div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
        </div>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Nom</th>
										<th scope="col">Classe</th>
										<th scope="col">Salle</th>
										<th scope="col">Filiere</th>
										<th scope="col">Date Debut</th>
										<th scope="col">Date Fin</th>
										<th scope="col">Jour</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($cour as $item )
										
									
									<tr>
										<th scope="row"> {{$item->id}} </th>
										<td>{{$item->nom}}</td>
										<td>{{$item->classe->nom}}</td>
										<td>{{$item->salle->nom}}</td>
										<td>{{$item->filiere->nom}}</td>
										<td>{{$item->Dd}}</td>
										<td>{{$item->Df}}</td>
										<td>{{$item->day->nom}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
	
	

		
	
	
	
	
	
	
	
	
	
	@push('scripts')
	<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
	<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
	@endpush
	
	@endsection