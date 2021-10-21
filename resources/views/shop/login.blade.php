@extends('shop.layout')
@section('nav')
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.Login') }}</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">{{ __('layout.home') }} <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/products">{{ __('layout.products') }}</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="/shop/customize">{{ __('layout.customize') }}</a>
</li>
<!--<li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Support
   </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Delivery Information</a>
      <a class="dropdown-item" href="#">Privacy Policy</a>
      <a class="dropdown-item" href="#">Terms & Conditions</a>
   </div>-->
<li class="nav-item">
   <a class="nav-link" href="/shop/contact">{{ __('layout.contactus') }}</a>
</li>
@stop

@section('main')

<div class="container">
    <h2 class="title-sell">{{ __('layout.Login') }}</h2>
    <div class="row justify-content-center" >
        <div class="col-md-4 col-md-offset-4">

            @if(Session::get('success'))
            <div class="alert alert-success text-center">
            {{ Session::get('success') }}
            </div>
            @endif

        @if(Session::get('fail'))
            <div class="alert alert-danger text-center">
            {{ Session::get('fail') }}
            </div>
        @endif

        @if (session()->has('customer'))
        <div class="loggin-in text-center">
            <img src="{{ asset('images/tick.png') }}"  class="img-fluid" alt="">
            <h4>{{ __('layout.loggedin') }}</h4>
           <p>{{ __('layout.click') }} <a  href="/shop/logout">{{ __('layout.here') }}</a> {{ __('layout.logout') }}</p> 
        </div>   
        @else

        <form action="/shop/login/signin" method="post" class="{{ __('layout.right') }}">@csrf
            <div class="form-group">
                <label style="color: #33383b">{{ __('layout.emaillabel') }}:</label>
                <input type="text" class="form-control" name="email" placeholder="{{ __('layout.email') }}" value="{{ old('email') }}">
                @error('email')<span class="text-danger">{{ $message }} </span>@enderror
            </div>
            <div class="form-group">
                <label style="color: #33383b">{{ __('layout.passwordlabel') }}:</label>
                <input type="password" class="form-control" name="password" placeholder="{{ __('layout.password') }}">
                @error('password')<span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-block btn-cart">{{ __('layout.Login') }}</button>
            <p class="text-center" style="color: #33383b">{{ __('layout.notregis') }}
                <a href="register" class="text-center" style="color: #cb5959">{{ __('layout.signup') }}</a>
            </p>
        </form>
        @endif
    </div>
    </div>
    <br>
</div>
@stop