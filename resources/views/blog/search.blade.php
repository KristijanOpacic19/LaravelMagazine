@extends('layouts.index')
@section('title')
@foreach ($posts as $post)
<title>{{$post->title}} | Retnews Magazine</title>
@endforeach
@stop
@section('center')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <!-- Search result -->
<div class="wrap__search-result">
    @if(count($posts) <= 0)
    <div class="wrap__search-result-keyword">
        <h5>No posts Found! </h5>
    </div>
    @endif 
    @foreach ($posts as $post)
<div class="card__post card__post-list card__post__transition mt-30">
    <div class="row ">
        <div class="col-md-5">
            <div class="card__post__transition">
                <a href="{{url('article')}}/{{$post->slug}}/{{$post->pid}}">
                    <img src="{{asset('posts')}}/{{$post->image}}" class="img-fluid w-100" alt="">
                </a>
            </div>
        </div>
        <div class="col-md-7 my-auto pl-0">
            <div class="card__post__body ">
                <div class="card__post__content  ">
                    <div class="card__post__author-info mb-2">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-primary">
                                {{$post->user_id}}
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize">
                                    {{$post->created_at}}
                                </span>
                            </li>

                        </ul>
                    </div>
                    <div class="card__post__title">
                        <h5>
                            <a href="{{url('article')}}/{{$post->slug}}/{{$post->pid}}">
                            {{$post->title}}
                            </a>
                        </h5>
                        <p class="d-none d-lg-block d-xl-block mb-0">
                            {{$post->shortdescription}}
                        </p>

                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>
@endforeach 


<br>
     <!-- pagination -->

                </div>

            </div>
        </div>
    </section>
    <!-- end search -->
@endsection    