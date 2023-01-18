@extends('layouts.admin.master')

@section('title')Checkout
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Checkout</h3>
		@endslot
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Checkout</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="card">
	        <div class="card-header pb-0">
	            <h5>Billing Details</h5>
	        </div>
			<form  action="{{ route('paiement.store') }}" method="POST">
	        <div class="card-body">
	            <div class="row">
	                <div class="col-xl-6 col-sm-12">
						
                            @csrf
	                        <div class="row">
	                            <div class="mb-3 col-sm-12">
	                                <label for="inputEmail4">Moyen de Paiement</label>
									<label>Moyen de Paiement</label>
										<select class="form-control" name="typepaiement_id"  >
											@foreach ($type as $item )
													
												<option value=" {{$item->id}} "> {{$item->nom}} </option>
												@endforeach
										</select>
									</div>
	                        </div>
	                        <div class="row">
	                            <div class="mb-3 col-sm-12">
	                                <label for="inputEmail5">Phone</label>
	                                <input class="form-control" id="inputEmail5" type="number" name="numero" />
	                            </div>
	                        </div>
							<div class="row">
	                            <div class="mb-3 col-sm-12">
									<input class="form-control"  type="text" value="{{$produit->id}}" name="produit_id" hidden  />
	                            </div>
	                        </div>
							
	                        
	                    
	                </div>
	                <div class="col-xl-6 col-sm-12">
	                    <div class="checkout-details">
	                        <div class="order-box">
	                            <div class="title-box">
	                                <div class="checkbox-title">
	                                    <h4 class="mb-0">Product</h4>
	                                    <span>Total</span>
	                                </div>
	                            </div>
	                            <ul class="qty">
	                                <li> {{$produit->nom}} <span> {{$produit->prix}} Frcfa</span></li>
	                            </ul>
	                            <ul class="sub-total">
	                                <li>Subtotal <span class="count">{{$produit->prix}} Frcfa</span></li>
	                                
	                            </ul>
	                            <ul class="sub-total total">
	                                <li>Total <span class="count">{{$produit->prix}} Frcfa</span></li>
	                            </ul>
	                            
	                            <button class="btn btn-primary" type="submit">Payer</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</form>
	    </div>
	</div>
	
	@push('scripts')
	@endpush

@endsection