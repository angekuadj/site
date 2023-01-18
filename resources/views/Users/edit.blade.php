@extends('layouts.admin.master')

@section('title')
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Validation Forms</h3>
		@endslot
		<li class="breadcrumb-item">Classe</li>
		<li class="breadcrumb-item">Creer</li>
	@endcomponent

    <div class="container-fluid">
      
		<div class="row">
			<div class="col-sm-12">

                <div class="card">
					{{-- <div class="card-header pb-0">
						<h5>Tooltips</h5>
						<span>
							If your form layout allows it, you can swap the <code class="text-danger">.{valid|invalid}-feedback</code> classes for <code class="text-danger">.{valid|invalid}-tooltip</code> classes to display validation feedback
							in a styled tooltip. Be sure to have a parent with <code class="text-danger">position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may
							require an alternative setup.
						</span>
					</div> --}}
					<div class="card-body">
                        <form  action="{{ url('/user/' .$users->id) }}" method="POST">
                            {!! csrf_field() !!}
                            @method("PATCH")
							<div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Nom</label>
								<input class="form-control" id="validationTooltip01" name="nom" value="{{$users->name}}" type="text"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            <div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Email</label>
								<input class="form-control" id="validationTooltip01" name="email" value="{{$users->email}}" type="text"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            <div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Password</label>
								<input class="form-control" id="validationTooltip01" name="password" value="{{$users->password}}" type="password"  required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
                            <div class="col-md-12 position-relative">
								<label class="form-label" for="validationTooltip01">Role</label>
										<select class="js-example-placeholder-multiple col-sm-12" name="role_id"  >
											@foreach ($role as $item )
													
												<option value=" {{$item->id}} "> {{$item->name}} </option>
												@endforeach
										</select>
									
							</div>
							
							<div class="col-12">
								<button class="btn btn-primary" type="submit">Modifier</button>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
    

    














	@push('scripts')
	<script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
	<script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
	<script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
	@endpush

@endsection