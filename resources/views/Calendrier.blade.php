@extends('layouts.admin.master')

@section('title')General {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
@endpush
    @section('content')
        @component('components.breadcrumb')
            @slot('breadcrumb_title')
                <h3>Emploi Du Temps</h3>
            @endslot
            <li class="breadcrumb-item">Cours</li>
            <li class="breadcrumb-item">Emploi Du Temps</li>
        @endcomponent

<div class="content">
        
   
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        </div>

                        {{$classe->nom}}
                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            @foreach ($day as $item )
                            <th width="125"> {{$item->nom}} </th>
                            @endforeach
                            
                        </thead>
                        <tbody>
                           
                            {{-- @foreach($calendarData as $time => $days) --}}
                            
                                
                            @foreach ($cours as $item )

                            <div class="d-flex justify-content-end mb-4">
                                <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
                            </div>
                                <tr>
                                    
                                    <td>
                                        	{{$item->Dd}}-{{$item->Df}}
                                    </td>
                                    <td>
                                        @if ($item->day_id == 1)
                                            {{$item->nom}}
                                           @else 

                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->day_id == 2)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
                                    <td>

                                        @if ($item->day_id == 3)
                                        {{$item->nom}}
                                       @else 

                                    @endif
                                    </td>
                                    <td>

                                        @if ($item->day_id == 4)
                                        {{$item->nom}}
                                       @else 

                                    @endif
                                    </td>
                                    <td>
                                        @if ($item->day_id == 5)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
                                    <td>
                                        @if ($item->day_id == 6)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
                                </tr>

                                @endforeach

                                
                               
                               
                                
                                

                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mb-4">
                        <a class="btn btn-primary" href="{{ URL::to('#') }}">Export to PDF</a>
                    </div>

                  {{$classe2->nom}}



                    {{-- essai --}}

                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            @foreach ($day as $item )
                            <th width="125"> {{$item->nom}} </th>
                            @endforeach
                            
                        </thead>
                        <tbody>
                           
                            {{-- @foreach($calendarData as $time => $days) --}}
                            
                                
                            @foreach ($cours2 as $item )

                                <tr>
                                    
                                    <td>
                                        	{{$item->Dd}}-{{$item->Df}}
                                    </td>
                                    <td>
                                        @if ($item->day_id == 1)
                                            {{$item->nom}}
                                           @else 

                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->day_id == 2)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
                                    <td>

                                        @if ($item->day_id == 3)
                                        {{$item->nom}}
                                       @else 

                                    @endif
                                    </td>
                                    <td>

                                        @if ($item->day_id == 4)
                                        {{$item->nom}}
                                       @else 

                                    @endif
                                    </td>
                                    <td>
                                        @if ($item->day_id == 5)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
                                    <td>
                                        @if ($item->day_id == 6)
                                        {{$item->nom}}
                                       @else 

                                    @endif

                                    </td>
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
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/general-widget.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endpush
@endsection
