@extends('layouts.index')
@section('title')
<title>Login | Retnews Magazine</title>
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
    <section class="wrap__section">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Login -->
<div class="card mx-auto" style="max-width: 380px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Sign in</h4>
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <a href="{{ url('auth/facebook') }}" class="btn btn-facebook btn-block mb-2 text-white"> <i class="fa fa-facebook"></i> &nbsp; Sign
                in
                with
                Facebook</a>
            <a href="{{ url('auth/google') }}" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp; Sign in with
                Google</a>
            <div class="form-group">
                <span for="email"> E-mail</span>
                <input  id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div> <!-- form-group// -->
            <div class="form-group">
                <span for="password"> Password</span>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div> <!-- form-group// -->

            <div class="form-group">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
                 </a>
                 @endif <br>
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                        class="custom-control-input" checked="true" name="remember_me">
                    <span class="custom-control-label"> Remember </span>
                </label>
            </div> <!-- form-group form-check .// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login </button>
            </div> <!-- form-group// -->
        </form>
    </div> <!-- card-body.// -->
</div> <!-- card .// -->

<p class="text-center mt-4">Don't have account? <a href="/register">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
    <!-- end login -->
