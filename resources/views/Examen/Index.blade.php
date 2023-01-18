@extends('layouts.admin.master')

@section('title')Lists
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>voir Salle</h3>
		@endslot
		<li class="breadcrumb-item">Salle</li>
		<li class="breadcrumb-item active">Voir</li>
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
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Classe</th>
										<th scope="col">Etudiant</th>
										<th scope="col">Note 1 {{$ma1->nom}} </th>
										<th scope="col">Note 2 {{$ma1->nom}} </th>
										<th scope="col">Note 1 {{$ma2->nom}} </th>
										<th scope="col">Note 2 {{$ma2->nom}} </th>
										<th scope="col">Note 1 {{$ma3->nom}} </th>
										<th scope="col">Note 2 {{$ma3->nom}} </th>
										
										<th scope="col">Total</th>
										<th scope="col">Moyenne</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($note as $item )
										
									
									<tr>
										<th scope="row"> {{$item->id}} </th>
										<td>{{$item->classe->nom}}</td>
										<td>{{$item->etudiant->user->name}}</td>
										<td>{{$item->note1}}</td>
										<td>{{$item->note2}}</td>
										<td>{{$item->note3}}</td>
										<td>{{$item->note4}}</td>
										<td>{{$item->note5}}</td>
										<td>{{$item->note6}}</td>
										<td>{{$item->note1 +$item->note2 +$item->note3 +$item->note4 +$item->note5 +$item->note6   }}</td>
										<td>{{($item->note1 +$item->note2 +$item->note3 +$item->note4 +$item->note5 +$item->note6)/6   }}</td>
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