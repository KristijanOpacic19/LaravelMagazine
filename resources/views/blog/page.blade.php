@extends('layouts.index')
@section('title')
<title>{{$data->title}} | Retnews Magazine</title>
@stop
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
@section('center')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="{{url('/home')}}" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        About Us
                    </li>
                </ul>
                    <div class="wrap__about-us">
                        <h2>{{$data->title}}</h2>

                        <p>
                        {!! $data->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
 @stop   