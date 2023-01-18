@extends('layouts.admin.master')

@section('title')Ecole
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Learning List</h3>
		@endslot
		<li class="breadcrumb-item">Learning</li>
		<li class="breadcrumb-item active">Learning List</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row learning-block">
	        <div class="col-xl-9 xl-60">
	            <div class="row">
                    @foreach ($cour as $item )
                        
                    
	                <div class="col-xl-4 xl-50 col-sm-12 box-col-12">
	                    <div class="card">
	                        <div class="product-box learning-box">
	                            <div class="product-img">
	                                <img class="img-fluid top-radius-blog" src="{{asset('assets/images/faq/3.jpg')}}" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-link"></i></a>
	                                        </li>
	                                        <li>
	                                            <a href="learning-detailed.html"><i class="icon-import"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="details-main">
	                                <a href="learning-detailed.html">
	                                    <div class="bottom-details">
	                                        <h6> {{$item->nom}} </h6>
	                                    </div>
	                                </a>
	                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                @endforeach
	                
	            </div>
	        </div>
	        
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection