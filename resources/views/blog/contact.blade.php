@extends('layouts.index')
@section('title')
<title>Contact US | Retnews Magazine</title>
@stop
@section('center')
<div class="loading-container">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <ul class="list-unstyled">
            <li>
                <img src="{{asset('images/placeholder/loading.png')}}" alt="Alternate Text" height="100" />

            </li>
            <li>

                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>

                </div>

            </li>
            <li>
                <p>Loading</p>
            </li>
        </ul>
    </div>
</div>
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{url('/home')}}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            Contact
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
		@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
		@endif
		</div>
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                <h5>Contact US</h5>
                <form method="POST" action="{{url('sendmessage')}}">
                <div class="row">
                    <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                    {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your phone <span class="required"></span></label>
                                <input type="tel" class="form-control" name="phone" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Subject <span class="required"></span></label>
                                <input type="text" class="form-control" name="subject" required="">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="8" name="message"></textarea>
                            </div>
                            <div class="form-group float-right mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <h5>Info location</h5>
                    <div class="wrap__contact-form-office">
                        <ul class="list-unstyled">
                            @foreach($settings as $data)
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>

                                {{$data->location}}


                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:">{{$data->phone}}</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:">{{$data->email}}</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>
                                    <a href="#" target="_blank"> {{$data->domain}}</a>
                                </span>
                            </li>
                            @endforeach
                        </ul>

                        <div class="social__media">
                            <h5>Find us</h5>
                            <ul class="list-inline">
                            @foreach($setting->social as $key=>$social)
                            <a href="{{$social}}" class="social-icon"><i class="fa fa-{{$icons[$key]}}"></i></a>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop        