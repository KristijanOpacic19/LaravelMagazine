@extends('layouts.index')
@section('title')
<title>Home | Retnews Magazine</title>
@stop
@section('center')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bs_BA/sdk.js#xfbml=1&version=v12.0&appId=580913406273654&autoLogAppEvents=1" nonce="CQkTNfMU"></script>
<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>

    <!-- Tranding news  carousel-->

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapp__list__article-responsive wrapp__list__article-responsive-carousel">
                        @foreach($featured as $key=>$f)
                        @if($key == 0)
                        <div class="item">
                            <!-- Post Article -->
                        <div class="card__post card__post-list">
                            <div class="image-sm">
                                <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                    <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="card__post__body ">
                                <div class="card__post__content">
                                    <div class="card__post__author-info mb-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{$f->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{$f->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card__post__title">
                                        <h6>
                                            <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                                {{$f->title}}
                                            </a>
                                        </h6>
                                        <!--- <p class="d-none d-lg-block d-xl-block">
                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                            sollicitudin ut est. In fringilla dui dui.
                                        ---></p> 

                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                    @endif
                    @endforeach 
                    
                    @foreach($featured as $key=>$f)
                    @if($key > 2 && $key < 4)      
                    <div class="item">
                        
                        <!-- Post Article -->
                            <div class="card__post card__post-list">
                                <div class="image-sm">
                                    <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                        <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            <div class="card__post__body ">
                                <div class="card__post__content">
                                    <div class="card__post__author-info mb-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{$f->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{$f->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card__post__title">
                                        <h6>
                                            <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                                {{$f->title}}
                                            </a>
                                        </h6>
                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                            sollicitudin ut est. In fringilla dui dui.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                
                    @foreach($featured as $key=>$f)
                    @if($key > 0)       
                    <div class="item">
                        <!-- Post Article -->
                        <div class="card__post card__post-list">
                            <div class="image-sm">
                                 <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                        <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                                </a>
                            </div>
                    <div class="card__post__body ">
                        <div class="card__post__content">

                            <div class="card__post__author-info mb-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            {{$f->user_id}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="text-dark text-capitalize">
                                            {{$f->created_at}}
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <div class="card__post__title">
                                <h6>
                                    <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                        {{$f->title}}
                                    </a>
                                </h6>
                                <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            @foreach($featured as $key=>$f)
            @if($key > 3 && $key < 5)     
                        <div class="item">
                            <!-- Post Article -->
                        <div class="card__post card__post-list">
                            <div class="image-sm">
                                <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                    <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        <div class="card__post__body ">
                            <div class="card__post__content">

                                <div class="card__post__author-info mb-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$f->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="text-dark text-capitalize">
                                                {{$f->created_at}}
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card__post__title">
                                    <h6>
                                        <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                            {{$f->title}}
                                        </a>
                                    </h6>
                                    <!-- <p class="d-none d-lg-block d-xl-block">
                                        Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                        sollicitudin ut est. In fringilla dui dui.
                                    </p> -->

                                </div>

                            </div>


                        </div>
                    </div>
                 </div>
                 @endif
                 @endforeach

                 @foreach($featured as $key=>$f)
                 @if($key > 1 && $key < 2)     
                    <div class="item">
                            <!-- Post Article -->
                    <div class="card__post card__post-list">
                        <div class="image-sm">
                            <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    <div class="card__post__body ">
                        <div class="card__post__content">
                            <div class="card__post__author-info mb-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            {{$f->user_id}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="text-dark text-capitalize">
                                            {{$f->created_at}}
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <div class="card__post__title">
                                <h6>
                                    <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                        {{$f->title}}
                                    </a>
                                </h6>
                                <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                            </div>
                        </div>
                    </div>
                </div>
             </div>
             @endif
             @endforeach
             
             @foreach($featured as $key=>$f)
             @if($key > 5 && $key < 6)      
                        <div class="item">
                            <!-- Post Article -->
                        <div class="card__post card__post-list">
                            <div class="image-sm">
                                <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                    <img src="{{asset('posts')}}/{{$f->image}}" class="img-fluid" alt="">
                                </a>
                            </div>
                    <div class="card__post__body ">
                        <div class="card__post__content">

                            <div class="card__post__author-info mb-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <span class="text-primary">
                                            {{$f->user_id}}
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="text-dark text-capitalize">
                                            {{$f->created_at}}
                                        </span>
                                    </li>

                                </ul>
                            </div>
                            <div class="card__post__title">
                                <h6>
                                    <a href="{{url('article')}}/{{$f->slug}}/{{$f->pid}}">
                                        {{$f->title}}
                                    </a>
                                </h6>
                                <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                            </div>
                        </div>

                    </div>
                </div>
                        </div>

                    </div>
                @endif
                @endforeach    
                </div>
            </div>
        </div>
    </section>
    <!-- End Tranding news carousel -->

    <!-- Popular news -->
    <section>
        <!-- Popular news  header-->
        <div class="popular__news-header">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 ">
                        <div class="card__post-carousel">
                         @foreach($popular as $key=> $p)
                         @if($key > 0)      
                            <div class="item">
                                <!-- Post Article -->
                                <div class="card__post">
                                    <div class="card__post__body">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">
                                                {{$p->category_id}}
                                            </div>
                                            <div class="card__post__title">
                                                <h2>
                                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                        {{$p->title}}
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                        {{$p->user_id}}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                            {{$p->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                            @foreach($popular as $key=> $p)
                            @if($key == 1)     
                            <div class="item">
                                <!-- Post Article -->
                                <div class="card__post">
                                    <div class="card__post__body">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">
                                            {{$p->category_id}}
                                            </div>
                                            <div class="card__post__title">
                                                <h2>
                                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                         {{$p->title}}      </a>
                                                </h2>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                        {{$p->user_id}}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                            {{$p->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                    @foreach($popular as $key=> $p)
                    @if($key == 2) 
                    <div class="col-md-4">
                        <div class="popular__news-right">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                        <img src="{{asset('posts')}}/{{$p->image}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                        <div class="card__post__category">
                                        {{$p->category_id}}
                                        </div>
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                {{$p->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                    {{$p->user_id}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                    {{$p->created_at}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($popular as $key=> $p)
                            @if($key == 3) 
                           <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                        <img src="{{asset('posts')}}/{{$p->image}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">
                                    
                                        <div class="card__post__category">
                                            {{$p->category_id}}
                                        </div>
                                    
                                        <div class="card__post__title">
                                            <h5>
                                                <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                {{$p->title}}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                                    {{$p->user_id}}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                    {{$p->created_at}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular news header-->
        <!-- Popular news carousel -->
        <div class="popular__news-header-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top__news__slider">
                            @foreach($popular as $key=> $p)
                            @if($key == 4) 
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$p->user_id}}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                {{$p->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            {{$p->title}}
                                                                                    </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($popular as $key=> $p)
                            @if($key == 5) 
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$p->user_id}}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                {{$p->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            {{$p->title}}
                                                                                    </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($popular as $key=> $p)
                            @if($key == 6) 
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$p->user_id}}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                {{$p->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            {{$p->title}}
                                                                                    </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($popular as $key=> $p)
                            @if($key == 7) 
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$p->user_id}}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                {{$p->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            {{$p->title}}  
                                                                                  </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($popular as $key=> $p)
                            @if($key == 8) 
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{$p->user_id}}
                                                </span>
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                {{$p->created_at}}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}/{{$p->pid}}">
                                            {{$p->title}}
                                        </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular news carousel -->
    </section>
    <!-- End Popular news -->

    <!-- Popular news category -->
    <section class="pt-0">
        <div class="popular__section-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="wrapper__list__article">
                            <h4 class="border_section">recent post</h4>
                        </div>
                        <div class="row ">
                            @foreach($latest as $key=> $l)
                            @if($key == 3) 
                            <div class="col-sm-12 col-md-6 mb-4">
                                <!-- Post Article -->
                                <div class="card__post ">
                                    <div class="card__post__body card__post__transition">
                                        <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                            <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">
                                                {{$l->category_id}}
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    {{$l->title}}            </h5>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                        {{$l->user_id}}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                            {{$l->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            @foreach($latest as $key=> $l)
                            @if($key == 4) 
                            <div class="col-sm-12 col-md-6 mb-4">
                                <!-- Post Article -->
                                <div class="card__post ">
                                    <div class="card__post__body card__post__transition">
                                        <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                            <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">
                                            {{$l->category_id}}
                                            </div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    {{$l->title}}.</a>
                                                </h5>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                        {{$l->user_id}}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                        {{$l->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="row ">
                        @foreach($latest as $key=> $l)
                        @if($key == 5) 
                            <div class="col-sm-12 col-md-6">
                                <div class="wrapp__list__article-responsive">
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                            <div class="card__post card__post-list">
                                                <div class="image-sm">
                                                    <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                        <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                    </a>
                                                </div>

                                            <div class="card__post__body ">
                                                <div class="card__post__content">

                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{$l->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                            {{$l->title}}</a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($latest as $key=> $l)
                                    @if($key == 6) 
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                            <div class="card__post__body ">
                                                <div class="card__post__content">

                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{$l->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                            {{$l->title}}</a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                            @foreach($latest as $key=> $l)
                            @if($key == 7) 
                            <div class="col-sm-12 col-md-6 ">
                                <div class="wrapp__list__article-responsive">
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="card__post__body ">
                                                <div class="card__post__content">

                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                 {{$l->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                            {{$l->title}}</a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                    @foreach($latest as $key=> $l)
                                    @if($key == 8) 
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="card__post__body ">
                                                <div class="card__post__content">

                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{$l->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                            {{$l->title}}</a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">trending post</h4>
                            <div class="wrapper__list-number">
                            @foreach($trending as $key=> $t)
                            @if($key == 0) 
                                <!-- List Article -->
                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span>
                                            1
                                        </span>
                                    </div>
                                    <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}" class="category">
                                        {{$t->category_id}}
                                    </a>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">

                                            <h5>
                                                <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}">
                                                    {{$t->title}}

                                                </a>
                                            </h5>
                                        </li>
                                    </ul>

                                </div>
                                @endif
                                @endforeach

                                @foreach($trending as $key=> $t)
                                @if($key == 1) 
                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span>
                                            2
                                        </span>
                                    </div>
                                    <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}" class="category">
                                        {{$t->category_id}}
                                    </a>
                                    <ul class="list-inline">
                                        <!-- <li class="list-inline-item">
                                            <a href="#" class="author-info">
                                                by david hall
                                            </a>

                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                <i class="fa fa-calendar"></i>
                                                march 01, 2020
                                            </span>

                                        </li> -->
                                        <li class="list-inline-item">
                                            <h5>
                                                <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}">
                                                    {{$t->title}}
                                                </a>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach

                                @foreach($trending as $key=> $t)
                                @if($key == 2) 
                                 <!-- List Article -->
                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span>
                                            1
                                        </span>
                                    </div>
                                    <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}" class="category">
                                    {{$t->category_id}}
                                    </a>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">

                                            <h5>
                                                <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}">
                                                    {{$t->title}}
                                                </a>
                                            </h5>
                                        </li>
                                    </ul>

                                </div>
                                @endif
                                @endforeach

                                @foreach($trending as $key=> $t)
                                @if($key == 3) 
                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span>
                                            2
                                        </span>
                                    </div>
                                    <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}" class="category">
                                    {{$t->category_id}}
                                    </a>
                                    <ul class="list-inline">
                                        <!-- <li class="list-inline-item">
                                            <a href="#" class="author-info">
                                                by david hall
                                            </a>

                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                <i class="fa fa-calendar"></i>
                                                march 01, 2020
                                            </span>

                                        </li> -->
                                        <li class="list-inline-item">
                                            <h5>
                                                <a href="{{url('article')}}/{{$t->slug}}/{{$t->pid}}">
                                                    {{$t->title}}
                                                </a>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post news carousel -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">technology</h4>
                    </aside>
                </div>
                <div class="col-md-12">
                    <div class="article__entry-carousel">
                        @foreach($technology as $key=> $tech)
                        @if($key == 0)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        <img src="{{asset('posts')}}/{{$tech->image}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$tech->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                {{$tech->created_at}}
                                            </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                            {{$tech->title}}
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @foreach($technology as $key=> $tech)
                        @if($key == 1)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        <img src="{{asset('posts')}}/{{$tech->image}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$tech->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                            {{$tech->created_at}}
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        {{$tech->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @foreach($technology as $key=> $tech)
                        @if($key == 2)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        <img src="{{asset('posts')}}/{{$tech->image}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$tech->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                            {{$tech->created_at}}
                                            </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        {{$tech->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @foreach($technology as $key=> $tech)
                        @if($key == 3)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        <img src="{{asset('posts')}}/{{$tech->image}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$tech->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                            {{$tech->created_at}}
                                            </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        {{$tech->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @foreach($technology as $key=> $tech)
                        @if($key == 4)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        <img src="{{asset('posts')}}/{{$tech->image}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary">
                                            {{$tech->user_id}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                            {{$tech->created_at}}
                                            </span>
                                        </li>

                                    </ul>
                                    <h5>
                                        <a href="{{url('article')}}/{{$tech->slug}}/{{$tech->pid}}">
                                        {{$tech->title}}
                                        </a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular news category -->

        <!-- Popular news category -->
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <aside class="wrapper__list__article mb-0">
                            <h4 class="border_section">lifestyle</h4>
                            <div class="row">
                              <div class="col-md-6">
                                 @foreach($style as $key=> $st)
                                    @if($key == 0)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                            {{$st->created_at}}
                                                        </span>
                                                    </li>

                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                        {{$st->title}}  </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($style as $key=> $st)
                                    @if($key == 1)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                        {{$st->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                        {{$st->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($style as $key=> $st)
                                    @if($key == 2)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                        {{$st->created_at}}
                                                        </span>
                                                    </li>

                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    {{$st->title}}
                                                    </a>
                                                </h5>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    @foreach($style as $key=> $st)
                                    @if($key == 3)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                        {{$st->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    {{$st->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($style as $key=> $st)
                                    @if($key == 4)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span>
                                                        {{$st->created_at}}
                                                        </span>
                                                    </li>

                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    {{$st->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    
                                    @foreach($style as $key=> $st)
                                    @if($key == 5)
                                    <div class="mb-4">
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    <img src="{{asset('posts')}}/{{$st->image}}" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                        {{$st->user_id}}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-item">
                                                        {{$st->created_at}}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{url('article')}}/{{$st->slug}}/{{$st->pid}}">
                                                    {{$st->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach 
                                </div>
                            </div>
                        </aside>
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">sport</h4>
                            <div class="wrapp__list__article-responsive">
                                <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    @foreach($sport as $key=> $sp)
                                    @if($key == 0)
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                <img src="{{asset('posts')}}/{{$sp->image}}" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    {{$sp->category_id}}
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$sp->user_id}}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{$sp->created_at}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                            {{$sp->title}}
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                            {!!     substr($sp->description,0, 200) !!}
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                        @endif
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                                <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    @foreach($sport as $key=> $sp)
                                    @if($key == 1)
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                <img src="{{asset('posts')}}/{{$sp->image}}" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                {{$sp->category_id}}
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$sp->user_id}}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                            {{$sp->created_at}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                        {{$sp->title}}
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                    {!!     substr($sp->description,0, 200) !!}
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach 
                                </div>
                            </div>
                                <!-- Post Article List -->
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    @foreach($sport as $key=> $sp)
                                    @if($key == 2)
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                <img src="{{asset('posts')}}/{{$sp->image}}" class="img-fluid w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                {{$sp->category_id}}
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$sp->user_id}}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                            {{$sp->created_at}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                        {{$sp->title}}
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                    {!!     substr($sp->description,0, 200) !!}
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach 
                                </div>
                            </div>
                                <!-- Post Article List -->
                                <div class="card__post card__post-list card__post__transition mt-30">
                                    <div class="row ">
                                        @foreach($sport as $key=> $sp)
                                        @if($key == 3)
                                        <div class="col-md-5">
                                            <div class="card__post__transition">
                                                <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                    <img src="{{asset('posts')}}/{{$sp->image}}" class="img-fluid w-100" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 my-auto pl-0">
                                            <div class="card__post__body ">
                                                <div class="card__post__content  ">
                                                    <div class="card__post__category ">
                                                    {{$sp->category_id}}
                                                    </div>
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$sp->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                {{$sp->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h5>
                                                            <a href="{{url('article')}}/{{$sp->slug}}/{{$sp->pid}}">
                                                            {{$sp->title}}
                                                            </a>
                                                        </h5>
                                                        <p class="d-none d-lg-block d-xl-block mb-0">
                                                        {!!     substr($sp->description,0, 200) !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach 
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-4">
                        <div class="sticky-top">
                            <aside class="wrapper__list__article">
                                <h4 class="border_section">
                                    Latest post</h4>
                                <div class="wrapper__list__article-small">
                                    <!-- Post Article -->
                                    @foreach($latest as $key=> $l)
                                    @if($key == 0)   
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                <img src="{{asset('posts')}}/{{$l->image}}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <div class="article__category">
                                            {{$l->category_id}}
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                    {{$l->user_id}}
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-dark text-capitalize">
                                                        {{$l->created_at}} 
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                {{$l->title}} </a>
                                            </h5>
                                           <!--  <p>
                                                {{$l->description}} 
                                            </p> --->
                                            <a href="{{url('article')}}/{{$l->slug}}" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($latest as $key=> $l)
                                    @if($key == 1)  
                                <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="card__post__body ">
                                                <div class="card__post__content">

                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{$l->created_at}} 
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                                {{$l->title}}     </a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                                    @foreach($latest as $key=> $l)
                                    @if($key == 2) 
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                    <img src="{{asset('posts')}}/{{$l->image}}" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="card__post__body ">
                                                <div class="card__post__content">
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                {{$l->user_id}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                {{$l->created_at}}
                                                                </span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{url('article')}}/{{$l->slug}}/{{$l->pid}}">
                                                                {{$l->title}}
                                                            </a>
                                                        </h6>
                                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                            sollicitudin ut est. In fringilla dui dui.
                                                        </p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach    
                            </aside>
                            <aside class="wrapper__list__article">
                                <h4 class="border_section">stay conected</h4>
                                <!-- widget Social media -->
                                <div class="wrap__social__media">
                                    <a href="#" target="_blank">
                                            <div class="fb-share-button" data-href="{{url($setting->domain)}}" data-layout="button" data-size="large"></div>
                                    </a>
                                    <a href="#" target="_blank">
                                        <div class="social__media__widget twitter" style="background: #ffff" >
                                        <script type="IN/Share" data-size="large" data-url="{{url($setting->domain)}}"></script>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank">
                                       
                                        <script src="https://apis.google.com/js/platform.js"></script>
                                <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-theme="dark" data-count="default"></div>
                                      
                                    </a>
                                </div>
                            </aside>

                            @if($sidebarBottom)
                            <aside class="wrapper__list__article">
                                <h4 class="border_section">Advertise</h4>
                                <a href="{{$sidebarBottom->url}}">
                                    <figure>
                                    <p><img id="output" src="{{asset('advertisements')}}/{{$sidebarBottom->image}}"/></p>		
                                    </figure>
                                </a>
                            </aside>
                            @endif
                            <aside class="wrapper__list__article">                          
                                <form action="{{ url('newsletter') }}" method="post">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{session('status')}}
                                    </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif     
                                {{ csrf_field() }}
                                    <h4 class="border_section">newsletter</h4>
                                    <!-- Form Subscribe -->
                                    <div class="widget__form-subscribe bg__card-shadow">
                                        <h6>
                                            The most important world news and events of the day.
                                        </h6>
                                        <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                                        <div class="input-group ">
                                            <input type="email" name="user_email"  class="form-control" placeholder="Your email address">   
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<script type="text/javascript" src="{{asset('./js/index.bundle.js?537a1bbd0e5129401d28')}}"></script></body>

@endsection

