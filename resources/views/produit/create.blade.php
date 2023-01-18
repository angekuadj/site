@extends('layouts.admin.master')

@section('title')Default Forms
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Default Forms</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Layout</li>
		<li class="breadcrumb-item active">Default Forms</li>
	@endcomponent
<div class="col-sm-12 col-xl-6">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Ajouter un Evenement</h5>
                </div>
                <div class="card-body">
                        <form  class="form-control" id="regForm" action="{{ route('produit.store') }}" method="POST">
                            @csrf
                        <h6>Produit Information</h6>
                        <div class="mb-3">
                            <label class="col-form-label">Nom Produit</label>
                            <input class="form-control" name="nom" type="text" placeholder="your Name" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Prix</label>
                            <input class="form-control" type="number" name="prix" placeholder="Enter email" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Enter contact number" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Date Debut</label>
                            <input class="form-control" type="date" name="Dd" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Date fin</label>
                            <input class="form-control" type="date" name="Df" placeholder="Website" />
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    
                </div>
               
            </div>
        </div>
        
    </div>
</div>


@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush


    @endsection
