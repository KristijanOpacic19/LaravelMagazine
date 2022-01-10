@extends('layouts.index')
@section('title')
@foreach($posts as $post)
<title>{{$post->title}} | Retnews Magazine</title>
@endforeach
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bs_BA/sdk.js#xfbml=1&version=v12.0&appId=580913406273654&autoLogAppEvents=1" nonce="CQkTNfMU"></script>
<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breaddcrumb -->
                    <!-- Breadcrumb -->
<ul class="breadcrumbs bg-light mb-4">
    <li class="breadcrumbs__item">
        <a href="{{url('/home')}}" class="breadcrumbs__url">
            <i class="fa fa-home"></i> Home</a>
    </li>
    @foreach($posts as $post)
    <li class="breadcrumbs__item breadcrumbs__item--current">
        {{$post->category_id}}
    </li>
    @endforeach

</ul>
                    <!-- end breadcrumb -->
                </div>
                <div class="col-md-8">
                    <!-- content article detail -->
                    <!-- Article Detail -->
<div class="wrap__article-detail">
    <div class="wrap__article-detail-title">
        <h1>
            {{$data->title}}
        </h1>
    </div>
    <hr>
    <div class="wrap__article-detail-info">
        <ul class="list-inline">
            <li class="list-inline-item">

                <span>
                    by
                </span>
                @foreach($posts as $post)
                <a href="#">
                {{$post->user_id}}
                </a>
                @endforeach
            </li>
            <li class="list-inline-item">
                <span class="text-dark text-capitalize ml-1">
                    {{$data->created_at}}
                </span>
            </li>

            <li class="list-inline-item" value="">
                <span class="text-dark text-capitalize">
                    in
                </span>
                @foreach($posts as $post)
                <a href="#">
                {{$post->category_id}}
                </a>
                @endforeach
                
            </li>
  
        </ul>
    </div>

    <div class="wrap__article-detail-image mt-4">
        <figure>
            <img src="{{asset('posts')}}/{{$data->image}}" alt="" class="img-fluid">
        </figure>
    </div>
    <div class="wrap__article-detail-content">
        <div class="total-views">
            <div class="total-views-read">
                @foreach($posts as $post)
                {{$post->views}}
                @endforeach
                <span>
                    views
                </span>
            </div>


            <ul class="list-inline">
            @foreach($setting->social as $key=>$social)
                <a href="{{$social}}" class="top-social"><i class="fa fa-{{$icons[$key]}}"></i></a>
            @endforeach

            </ul>
        </div>
        {!! $data->description !!}

</div>
</div>
                    <!-- end content article detail -->

                    <!-- tags -->
                    <!-- News Tags -->
                            <div class="blog-tags">
                                <ul class="list-inline">
                                @foreach($tags as $key => $tag)
                                    @if($tag)
                                    <li class="list-inline-item">
                                        <a href="#">            
                                            {{$tag}}
                                        </a>
                                    </li>
                                    @else
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                    <!-- end tags-->


                    <!-- comment -->
                    <!-- Comment  -->
 @if(Session::has('success'))
<p class="text-success">{{session('success')}}</p>
@endif
<div id="comments" class="comments-area">
    <h3 class="comments-title">{{count($detail->comments)}} Comments: @if(!Auth::user()) Please <a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">Register</a> to comment this post! @endauth</h3>
    
    <ol class="comment-list">
        <li class="comment">
        @if($detail->comments)
            @foreach($detail->comments as $comment)
            <aside class="comment-body">
                <div class="comment-meta">
                    <div class="comment-author vcard">
                  
                        <img src="https://eu.ui-avatars.com/api/?name={{$comment->user->name}}" class="avatar rounded-circle" alt="image">
                        <b class="fn">{{$comment->user->name}}</b>
                        <span class="says">says:</span>
                    </div>

                    <div class="comment-metadata">
                        <a href="#">
                            <span>{{$comment->created_at}}</span>
                        </a>
                    </div>
                </div>
                <div class="comment-content">
                    <p>{{$comment->comment}}</p>
                </div>
               
            </aside>
            @endforeach
@endif

    @if(!Auth::user())
    </div>
    @else
    @auth
    <div class="comment-respond">
        <h3 class="comment-reply-title">Type a comment.</h3>
        <form class="comment-form" method="post" action="{{url('save-comment/'.Str::slug($post->title).'/'.$post->pid)}}">
        @csrf
            <p class="comment-notes">
                <span id="email-notes">Your email address will not be published.</span>
                Required fields are marked
                <span class="required">*</span>
            </p>
            <p class="comment-form-comment">
                <label for="comment">Comment</label>
                <textarea name="comment" cols="45" rows="5" maxlength="65525"
                    required="required"></textarea>
            </p>
            <p class="form-submit">
                <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
            </p>
        </form>
    </div>
    @endauth
</div>
@endif
<!-- Comment -->
                    <!-- end comment -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_navigation-prev">
                            @foreach($related as $key=>$re)
                            @if($key == 1)
                                <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                    <span>previous post</span>
                                    {{$re->title}}
                                </a>
                            @endif
                            @endforeach    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_navigation-next text-left text-md-right">
                            @foreach($related as $key=>$re)
                            @if($key == 0)
                                <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                    <span>next post</span>
                                    {{$re->title}}
                                </a>
                                @endif
                            @endforeach     
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="related-article">
                        <h4>
                            you may also like
                        </h4>

                        <div class="article__entry-carousel-three">
                            @foreach($related as $key=>$re)
                            @if($key == 0)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                            <img src="{{asset('posts')}}/{{$re->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$re->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    {{$re->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                                {{$re->title}}
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach 

                            @foreach($related as $key=>$re)
                            @if($key == 1)
                            <div class="item">
                                <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                                <img src="{{asset('posts')}}/{{$re->image}}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                    {{$re->user_id}}
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                    {{$re->created_at}}
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                                {{$re->title}}
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                            </div>
                            @endif
                            @endforeach 

                            @foreach($related as $key=>$re)
                            @if($key == 2)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                            <img src="{{asset('posts')}}/{{$re->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$re->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                {{$re->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                            {{$re->title}}
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach 

                            @foreach($related as $key=>$re)
                            @if($key == 3)
                            <div class="item">
                                <!-- Post Article -->
                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                                <img src="{{asset('posts')}}/{{$re->image}}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary">
                                                    {{$re->user_id}}
                                                    </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                    {{$re->created_at}}
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5>
                                                <a href="{{asset('posts')}}/{{$re->image}}/{{$re->pid}}">
                                                {{$re->title}}
                                                </a>
                                            </h5>

                                        </div>
                                    </div>
                            </div>
                            @endif
                            @endforeach 

                            @foreach($related as $key=>$re)
                            @if($key == 4)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                            <img src="{{asset('posts')}}/{{$re->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$re->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                {{$re->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$re->slug}}/{{$re->pid}}">
                                            {{$re->title}}
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
                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article ">
                            <!-- <h4 class="border_section">Sidebar</h4> -->
                            <div class="mb-4">
                                <div class="widget__form-search-bar  ">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0" value="" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper__list__article-small">
                            @foreach($latest as $key=>$la)
                            @if($key == 0)
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$la->user_id}}
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
                                                        <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
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
                                            <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$la->user_id}}
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
                                                        <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
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
                                            <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
                                                <img src="{{asset('posts')}}/{{$la->image}}" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                            {{$la->user_id}}
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
                                                        <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
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
                                <!-- Post Article -->   
                                @foreach($latest as $key=>$la)
                                @if($key == 3)
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
                                            <img src="{{asset('posts')}}/{{$la->image}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            travel
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                {{$la->user_id}}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                {{$la->created_at}}
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}">
                                            {{$la->title}}
                                            </a>
                                        </h5>
                                        <p>
                                        {!!     substr($la->description,0, 200) !!}
                                        </p>
                                        <a href="{{url('article')}}/{{$la->slug}}/{{$la->pid}}" class="btn btn-outline-primary mb-4 text-capitalize"> read more</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach 
                        </aside>

                        <!-- social media -->
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
                        <!-- End social media -->

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">tags</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">
                            
                                    @foreach($tags as $key => $tag)
                                    @if($tag)
                                    <li class="list-inline-item">
                                        <a href="#">            
                                            {{$tag}}
                                        </a>
                                    </li>
                                    @else
                                    @endif
                                    @endforeach
                           
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

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
