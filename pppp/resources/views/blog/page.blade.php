@extends('layouts.index')
@section('title')
<title>{{$data->title}} | Retnews Magazine</title>
@stop
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