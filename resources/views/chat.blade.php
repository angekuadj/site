@extends('layouts.admin.master')

@section('title')Chat App
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Chat App</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item">Chat</li>
		<li class="breadcrumb-item active">Chat App</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col call-chat-sidebar">
	            <div class="card">
	                <div class="card-body chat-body">
	                    <div class="chat-box">
	                        <!-- Chat left side Start-->
	                        <div class="chat-left-aside">
	                            <div class="media">
                                    @php($photo = auth()->user()->photo)
        <img class="img-70 rounded-circle" width="150px" src="@if($photo == null) https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg  @else {{ asset("storage/$photo") }} @endif" id="image_preview_container">
	                               
	                                <div class="media-body">
	                                    <div class="about">
	                                        <div class="name f-w-600">{{Auth()->user()->name}} </div>
	                                        <div class="status">Status...</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="people-list" id="people-list">
	                                <div class="search">
	                                    <form class="theme-form">
	                                        <div class="form-group"><input class="form-control" type="text" placeholder="search" /><i class="fa fa-search"></i></div>
	                                    </form>
	                                </div>
	                                <ul class="list custom-scrollbar">
                                        @foreach ($user as $item)
                                            
                                       
	                                    <li class="clearfix">
	                                        <div class="media">
                                                @php($photo = $item->photo)
                                                <img class="img-70 rounded-circle" width="150px" src="@if($photo == null) https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg  @else {{ asset("storage/$photo") }} @endif" id="image_preview_container">
                                                                           
	                                            <div class="status-circle away"></div>
	                                            <div class="media-body">
	                                                <div class="about">
	                                                    <div class="name">{{$item->name}}</div>
	                                                    {{-- <div class="status">Hello Name</div> --}}
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </li>
                                        @endforeach
	                                    
	                                </ul>
	                            </div>
	                        </div>
	                        <!-- Chat left side Ends-->
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col call-chat-body">
	            <div class="card">
	                <div class="card-body p-0">
	                    <div class="row chat-box">
	                        <!-- Chat right side start-->
	                        <div class="col chat-right-aside">
	                            <!-- chat start-->
	                            <div class="chat">
	                                <!-- chat-header start-->
	                                <div class="media chat-header clearfix">
	                                    <img class="rounded-circle" src="{{asset('assets/images/user/8.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <div class="about">
	                                            <div class="name">Kori Thomas <span class="font-primary f-12">Typing...</span></div>
	                                            <div class="status digits">Last Seen 3:55 PM</div>
	                                        </div>
	                                    </div>
	                                    <ul class="list-inline float-start float-sm-end chat-menu-icons">
	                                        
	                                        <li class="list-inline-item toogle-bar">
	                                            <a href="javascript:void(0)"><i class="icon-menu"></i></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                <!-- chat-header end-->
	                                <div class="chat-history chat-msg-box custom-scrollbar">
	                                    <ul>
	                                        <li>
	                                            <div class="message my-message">
	                                                <img class="rounded-circle float-start chat-user-img img-30" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                <div class="message-data text-end"><span class="message-data-time">10:12 am</span></div>
	                                                Are we meeting today? Project has been already finished and I have results to show you.
	                                            </div>
	                                        </li>
	                                        <li class="clearfix">
	                                            <div class="message other-message pull-right">
	                                                <img class="rounded-circle float-end chat-user-img img-30" src="{{asset('assets/images/user/12.png')}}" alt="" />
	                                                <div class="message-data"><span class="message-data-time">10:14 am</span></div>
	                                                Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so?
	                                            </div>
	                                        </li>
	                                        <li class="clearfix">
	                                            <div class="message other-message pull-right">
	                                                <img class="rounded-circle float-end chat-user-img img-30" src="{{asset('assets/images/user/12.png')}}" alt="" />
	                                                <div class="message-data"><span class="message-data-time">10:14 am</span></div>
	                                                Well I am not sure. The rest of the team
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="message my-message mb-0">
	                                                <img class="rounded-circle float-start chat-user-img img-30" src="{{asset('assets/images/user/3.png')}}" alt="" />
	                                                <div class="message-data text-end"><span class="message-data-time">10:20 am</span></div>
	                                                Actually everything was fine. I'm very excited to show this to our team.
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>
	                                <!-- end chat-history-->
	                                <div class="chat-message clearfix">
	                                    <div class="row">
	                                        <div class="col-xl-12 d-flex">
	                                            <div class="smiley-box bg-primary">
	                                                <div class="picker"><img src="{{asset('assets/images/smiley.png')}}" alt="" /></div>
	                                            </div>
	                                            <div class="input-group text-box">
	                                                <input class="form-control input-txt-bx" id="message-to-send" type="text" name="message-to-send" placeholder="Type a message......" />
	                                                <button class="btn btn-primary input-group-text" type="button">SEND</button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- end chat-message-->
	                                <!-- chat end-->
	                                <!-- Chat right side ends-->
	                            </div>
	                        </div>
	                        <div class="col chat-menu">
	                            <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
	                                
	                                <li class="nav-item">
	                                    <a class="nav-link" id="contact-info-tab" data-bs-toggle="tab" href="#info-contact" role="tab" aria-selected="false">PROFILE</a>
	                                    <div class="material-border"></div>
	                                </li>
	                            </ul>
	                            <div class="tab-content" id="info-tabContent">
	                                
	                               
	                                <div class="tab-pane fade" id="info-contact" role="tabpanel" aria-labelledby="contact-info-tab">
	                                    <div class="user-profile">
	                                        <div class="image">
	                                            <div class="avatar text-center"><img alt="" src="{{asset('assets/images/user/2.png')}}" /></div>
	                                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
	                                        </div>
	                                        <div class="user-content text-center">
	                                            <h5 class="text-uppercase">{{Auth()->user()->name}}</h5>
	                                            <div class="social-list">
	                                                <ul>
	                                                    <li>
	                                                        <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="javascript:void(0)"><i class="fa fa-rss"> </i></a>
	                                                    </li>
	                                                </ul>
	                                            </div>
	                                            <div class="follow text-center">
	                                                <div class="row">
	                                                    <div class="col border-right">
	                                                        <span>Following</span>
	                                                        <div class="follow-num">236k</div>
	                                                    </div>
	                                                    <div class="col">
	                                                        <span>Follower</span>
	                                                        <div class="follow-num">3691k</div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <div class="text-center digits">
	                                                <p>Mark.jecno23@gmail.com</p>
	                                                <p>+91 365 - 658 - 1236</p>
	                                                <p>Fax: 123-4560</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/fullscreen.js')}}"></script>
	@endpush

@endsection