@extends('layouts.admin.master')

@section('title')Lists
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>voir Les notes</h3>
		@endslot
		<li class="breadcrumb-item">Notes</li>
    @endcomponent
@role('Admin')
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        {{-- {{$classe->nom}} --}}
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Etudiant</th>
                            @foreach ($ma as $item )
                            <th width="125"> {{$item->nom}} </th>
                            @endforeach
							<th width="125"> Total </th>
							<th width="125"> Moyenne </th>
                            
                        </thead>
                        <tbody>
                           
                            {{-- @foreach($calendarData as $time => $days) --}}
                            
                                
                            @foreach ($etudiant as $item )

                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
                            </div>
                                <tr>
                                    
                                    <td>
                                        	{{$item->user->name}}
                                    </td>
                                    <th>
											{{$item->note1}}
									
											{{$item->note2}} 
                                    </th>
                                    <th>
											{{$item->note3}}
										
											{{$item->note4}}
                                    </th>
                                    <th>
											{{$item->note5}}
											{{$item->note6}}
                                    </th>
									<th>
										k
									</th>
									<th>
										mo
									</th>
                                    
                                </tr>

                                @endforeach

                                
                               
                               
                                
                                

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
                    </div>




                    {{-- essai --}}

                    


                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
@endrole








@role('User')
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        {{-- {{$classe->nom}} --}}
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Etudiant</th>
                            @foreach ($ma as $item )
                            <th width="125"> {{$item->nom}} </th>
                            @endforeach
							<th width="125"> Total </th>
							<th width="125"> Moyenne </th>
                            
                        </thead>
                        <tbody>
                           
                            {{-- @foreach($calendarData as $time => $days) --}}
                            
                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
                            </div>
                            @foreach ($et as $item )

                            
                                <tr>
                                    
                                    <td>
                                        	{{Auth::user()->name}}
                                    </td>
                                    <th>
											{{$item->note1}}
									
											{{$item->note2}} 
                                    </th>
                                    <th>
											{{$item->note3}}
										
											{{$item->note4}}
                                    </th>
                                    <th>
                                        <td col-sm-6 >{{$item->note5}}</td>
                                        <td>{{$item->note6}}</td>
                                    </th>
                                   
									<th>
										k
									</th>
									<th>
										mo
									</th>
                                    
                                </tr>

                                @endforeach

                                
                               
                               
                                
                                

                        </tbody>
                    </table>





                    {{-- essai --}}

                    


                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
@endrole
	
	
	@push('scripts')
	<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
	<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
	@endpush
	
	@endsection