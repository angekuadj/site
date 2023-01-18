@extends('layouts.admin.master')

@section('title')Lists
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>voir Etudiant</h3>
		@endslot
		<li class="breadcrumb-item">Etudiant</li>
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
									<th scope="col">Nom</th>
									<th scope="col">Date De Naissance</th>
									<th scope="col">Classe</th>
									<th scope="col">Filiere</th>
									<th scope="col">Matricule</th>
									<th scope="col">Sexe</th>
									<th scope="col">Contact</th>
									<th scope="col">Contact Parent</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($etu as $item )
                                    
                                
								<tr>
									<th scope="row"> {{$item->id}} </th>
									<td>{{$item->user->name}}</td>
									<td>{{$item->DN}}</td>
									<td>{{$item->classe->nom}}</td>
									<td>{{$item->filiere->nom}}</td>
									<td>{{$item->matricule}}</td>
									<td>{{$item->sexe}}</td>
									<td>{{$item->contact}}</td>
									<td>{{$item->contactP}}</td>
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