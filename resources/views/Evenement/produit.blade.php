@extends('layouts.admin.master')

@section('title')Product
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/range-slider.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Product</h3>
		@endslot
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item active">Product</li>
	@endcomponent
	
	<div class="container-fluid product-wrapper">
	    <div class="product-grid">
	       
	        <div class="product-wrapper-grid">
	            <div class="row">
                    @foreach ($produit as $item)
                        
                   
	                <div class="col-xl-3 col-sm-6 xl-4">
	                    <div class="card">
	                        <div class="product-box">
	                            <div class="product-img">
	                                <img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="" />
	                                <div class="product-hover">
	                                    <ul>
	                                        <li>
	                                            <a href="{{ url('/produit/' . $item->id . '/edit') }}"><i class="icon-shopping-cart"></i></a>
	                                        </li>
	                                        <li>
	                                            <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="modal fade" id="exampleModalCenter16">
	                                <div class="modal-dialog modal-lg modal-dialog-centered">
	                                    <div class="modal-content">
	                                        <div class="modal-header">
	                                            <div class="product-box row">
	                                                <div class="product-img col-lg-6"><img class="img-fluid" src="{{asset('assets/images/ecommerce/01.jpg')}}" alt="" /></div>
	                                                <div class="product-details col-lg-6 text-start">
	                                                    <a href="product-page"> <h4> {{$item->nom}} </h4></a>
	                                                    <div class="product-price">
	                                                        {{$item->prix}}Fcfa
	                                                        {{-- <del>$35.00</del> --}}
	                                                    </div>
	                                                    <div class="product-view">
	                                                        <h6 class="f-w-600">Product Details</h6>
	                                                        <p class="mb-0">{{$item->description}}</p>
	                                                    </div>
	                                                    <div class="product-size">
	                                                        <ul>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">M</button>
	                                                            </li>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">L</button>
	                                                            </li>
	                                                            <li>
	                                                                <button class="btn btn-outline-light" type="button">Xl</button>
	                                                            </li>
	                                                        </ul>
	                                                    </div>
	                                                    <div class="product-qnty">
	                                                        <h6 class="f-w-600">Quantity</h6>
	                                                        <fieldset>
	                                                            <div class="input-group">
	                                                                <input class="touchspin text-center" type="text" value="1" />
	                                                            </div>
	                                                        </fieldset>
	                                                        <div class="addcart-btn"><a class="btn btn-primary me-3" href="acheter">Passer aux paiement </a></div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="product-details">
	                                <a href="product-page"> <h4>{{$item->nom}} </h4></a>
	                                <p> {{$item->description}}</p>
	                                <div class="product-price">
                                        {{$item->prix}}Fcfa
	                                    {{-- <del>$35.00</del> --}}
	                                </div>
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
	<script src="{{asset('assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/range-slider/rangeslider-script.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/product-tab.js')}}"></script>
	@endpush

@endsection