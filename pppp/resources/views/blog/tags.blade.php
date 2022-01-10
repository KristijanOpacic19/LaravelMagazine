@extends('layouts.index')
@section('title')
<title>{{$cat->title}} | Retnews Magazine</title>
@stop
@section('center')

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            {{$cat->title}}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <aside class="wrapper__list__article ">
                        <h4 class="border_section">{{$cat->title}}</h4>

                        <div class="row">
                            @if(count($posts) > 0)
                            @foreach($posts as $key=>$p)
                            <div class="col-md-6">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$p->slug}}">
                                            <img src="{{asset('posts')}}/{{$p->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            {{$cat->title}}
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{$p->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$p->slug}}">
                                                {{$p->title}}
                                            </a>
                                        </h5>
                                        <p>
                                        {{$p->shortdescription}}
                                        </p>
                                        <a href="{{url('article')}}/{{$p->slug}}" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                @else
                                <tr>
                                    <td colspan="4">No Posts Found.</td>
                                </tr>
                            @endif
                        </div>

                    </aside>

                </div>
                <div class="col-md-4">
                    <div class="sidebar-sticky">
                        <aside class="wrapper__list__article ">
                            <h4 class="border_section">Latest news</h4>
                            <div class="wrapper__list__article-small">
                                @foreach($latest as $key=>$la)
                                @if($key == 0)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{url('article')}}/{{$la->slug}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{$la->created_at}}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{url('article')}}/{{$la->slug}}">
                                                            {{$la->title}}
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
                                
                                @foreach($latest as $key=>$la)
                                @if($key == 1)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{url('article')}}/{{$la->slug}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                            {{$la->created_at}}                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{url('article')}}/{{$la->slug}}">
                                                        {{$la->title}}
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

                                @foreach($latest as $key=>$la)
                                @if($key == 2)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{url('article')}}/{{$la->slug}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{$la->created_at}}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{url('article')}}/{{$la->slug}}">
                                                        {{$la->title}}
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

                                @foreach($latest as $key=>$la)
                                @if($key == 3)
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$la->slug}}">
                                            <img src="{{asset('posts')}}/{{$la->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                               
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                {{$la->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$la->slug}}">
                                                {{$la->title}}                                            </a>
                                        </h5>
                                        <p>
                                            {{$la->shortdescription}}
                                        </p>
                                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach    
                        </aside>
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">tags</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #programming
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #life style
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #technology
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </aside>
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
                            <aside class="wrapper__list__article">
                                <h4 class="border_section">Advertise</h4>
                                <a href="#">
                                    <figure>
                                        <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                    </figure>
                                </a>
                            </aside>
                        </div>
                    </div>
                <div class="clearfix"></div>
            </div>
            <!-- Pagination -->
                <div class="pagination-area">
                    <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                        style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn; display:inline-block; position:relative;">
                       {!! $posts->links() !!}
                    </div>
                </div>
                        </div>
    </section>
    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <footer>
    <div class="wrapper__footer bg__footer-dark pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget__footer">
                        <div class="dropdown-footer ">
                            <h4 class="footer-title">
                                world
                                <span class="fa fa-angle-down"></span>
                            </h4>

                        </div>

                        <ul class="list-unstyled option-content is-hidden">
                            <li>
                                <a href="#">global economy</a>

                            </li>
                            <li>
                                <a href="#">religion</a>
                            </li>
                            <li>
                                <a href="#">bitcoin</a>
                            </li>
                            <li>
                                <a href="#">conflict</a>
                            </li>
                            <li>
                                <a href="#">sports</a>
                            </li>
                            <li>
                                <a href="#">scandals</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget__footer">
                        <div class="dropdown-footer">
                            <h4 class="footer-title">
                                entertainment
                                <span class="fa fa-angle-down"></span>
                            </h4>

                        </div>

                        <ul class="list-unstyled option-content is-hidden">
                            <li>
                                <a href="#">celebity news</a>
                            </li>
                            <li>
                                <a href="#">movies</a>
                            </li>
                            <li>
                                <a href="#">tv news</a>
                            </li>
                            <li>
                                <a href="#">music news</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">entertainment video</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget__footer">
                        <div class="dropdown-footer">
                            <h4 class="footer-title">
                                health
                                <span class="fa fa-angle-down"></span>
                            </h4>

                        </div>
                        <ul class="list-unstyled option-content is-hidden">
                            <li>
                                <a href="#">medical research</a>
                            </li>
                            <li>
                                <a href="#">healthy living</a>
                            </li>
                            <li>
                                <a href="#">mental health</a>
                            </li>
                            <li>
                                <a href="#">virus corona</a>
                            </li>
                            <li>
                                <a href="#">children's health</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget__footer">
                        <div class="dropdown-footer">
                            <h4 class="footer-title">
                                business
                                <span class="fa fa-angle-down"></span>
                            </h4>

                        </div>

                        <ul class="list-unstyled option-content is-hidden">
                            <li>
                                <a href="#">merkets</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">features</a>
                            </li>
                            <li>
                                <a href="#">property</a>
                            </li>
                            <li>
                                <a href="#">business leaders</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <figure class="image-logo">
                            <img src="images/placeholder/logo.jpg" alt="" class="logo-footer">
                        </figure>
                    </div>
                    <div class="col-md-8 my-auto ">

                        <div class="social__media">

                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white telegram">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection