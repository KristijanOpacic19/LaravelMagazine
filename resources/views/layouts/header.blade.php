<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="manifest" href="site.webmanifest">
<!-- favicon.ico in the root directory -->
<link rel="apple-touch-icon" href="{{asset('images/icon.png')}}">

<meta name="theme-color" content="#030303">
<!-- google fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap"
    rel="stylesheet">
<link href="{{asset('css/styles.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">


<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>

<body>
    <!-- loading -->

<!-- End loading -->

    <!-- Header news -->
    <header class="bg-light">
        <!-- Navbar  Top-->
        <div class="topbar d-none d-sm-block">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="topbar-left">
                    <div class="topbar-text">
                        <?php
                        $current_date_time = date('Y-m-d H:i');
                        print("$current_date_time");
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="list-unstyled topbar-right">
                    <ul class="topbar-link">
                        <li><a href="{{url('/contact-us')}}" title="">Contact Us</a></li>
                                @if(!Auth::user())
                                <li><a href="{{url('/login')}}" title="">Login</a> / <a href="{{url('/register')}}" title="">Register</a></li>
                                @else
                                <li><img alt="profile-image" class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" style="width: 30px;"/></li>
                                <ul class="navbar-nav ml-auto ">
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">{{ Auth::user()->name }}</a>
                                        <ul class="dropdown-menu dropdown-menu-left" style="background:black;">
                                        <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                            <li><a class="dropdown-item" href="{{ route('logout') }}" title="" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a></li>
                                            <li><a class="dropdown-item" href="{{url('/user/profile')}}" title="">Profile</a></li>    
                                            @hasrole('Admin')
                                            <li><a class="dropdown-item" href="{{url('/admin')}}" > Dashboard </a></li>
                                            @endhasrole
                                        </form>
                                        </ul>
                                    </li>       
                                </ul>         
                                @endif       
                    </ul>
                    <ul class="topbar-sosmed">
                        @foreach($setting->social as $key=>$social)
                            <a href="{{$social}}" class="top-social"><i class="fa fa-{{$icons[$key]}}"></i></a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- End Navbar Top  -->
        <!-- Navbar  -->
        <!-- Navbar menu  -->
<div class="navigation-wrap navigation-shadow bg-white">
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <div class="offcanvas-header">
                <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                    <span class="navbar-toggler-icon"></span>
                </div>
            </div>
            <figure class="mb-0 mx-auto">
                <a href="{{url('/home')}}">
                    @if($setting->image)
                    <img src="{{asset('settings')}}/{{$setting->image}}" alt="" class="img-fluid logo">
                    @endif
                </a>
            </figure>

            <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link active " href="{{url('/home')}}" > Home </a>
                        @foreach($categories as $cat)
                        <li><a class="nav-link" href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
                        @endforeach
                    </li>
                </ul>    


                <!-- Search bar.// -->
                <ul class="navbar-nav ">
                    <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
                <!-- Search content bar.// -->
                <div class="top-search navigation-shadow">
                    <div class="container">
                        <div class="input-group ">
                            <form action="{{ route('search') }}" method="GET">

                                <div class="row no-gutters mt-3">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" name="search" value="" placeholder="Search " id="example-search-input4 search_content">  
                                    </div>
                                    <div class="col-auto">
                                    <i class="fa fa-search"><input type="submit"/></i>
                                    
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
</div>
<!-- End Navbar menu  -->

        <!-- End Navbar  -->
    </header>
    <!-- End Header news -->
    <!-- Tranding news  carousel-->


<script type="text/javascript" src="{{asset('js/index.bundle.js')}}"></script></body>
