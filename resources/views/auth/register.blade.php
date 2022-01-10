@extends('layouts.index')
@section('title')
<title>Register | Retnews Magazine</title>
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
<!-- register -->
<section class="wrap__section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- register -->
                <!-- Form Register -->

<div class="card mx-auto" style="max-width:520px;">
<article class="card-body">
    <header class="mb-4">
        <h4 class="card-title">Sign up</h4>
    </header>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-row">
            <div class="col form-group">
                <label>{{ __('Username') }}</label>
                <input id="name" for="name" name="name" type="text" class="form-control" placeholder="" value="{{ old('name') }}" required autocomplete="name">
                @if ($errors->has('name'))
                  <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-group">
            <label>Email</label>
            <input id="email" for="email" type="email" name="email" class="form-control" placeholder=""  value="{{ old('email') }}" required autocomplete="email">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            @if ($errors->has('email'))
               <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
               </span>
            @endif
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Create password</label>
                <input id="password" for="password" name="password" class="form-control" type="password">
                @if ($errors->has('password'))
                 <span class="invalid-feedback">
                 <strong>{{ $errors->first('password') }}</strong>
                 </span>
               @endif
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
                <label>Repeat password</label>
                <input id="password-confirm" name="password_confirmation" for="password-confirm" class="form-control" type="password">
            </div> <!-- form-group end.// -->
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
        </div> <!-- form-group// -->
        <div class="form-group">
            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"
                    checked="">
                <span class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </span>
            </label>
        </div> <!-- form-group end.// -->
    </form>
</article><!-- card-body.// -->
</div>
                <!-- end register -->
            </div>
        </div>
    </div>
</section>
@endsection
