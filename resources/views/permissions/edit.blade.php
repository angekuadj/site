@extends('layouts.admin.master')

@section('title')Lists
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>voir Professeur</h3>
		@endslot
		<li class="breadcrumb-item"  >Professeur</li>
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
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($permission as $item )
                                    
                                
								<tr>
									<th scope="row"> {{$item->id}} </th>
									<td>{{$item->nom}}</td>
									<td><a class="btn btn-pill btn-primary btn-air-primary" href="{{ url('/Prof/' . $item->id . '/edit') }}" ><i data-feather="edit-2"></i>Modifier</a></td>
								
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