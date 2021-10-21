@extends('shop.layout')
@section('nav')
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.signup') }}</title>
<li class="nav-item ">
   <a class="nav-link" href="/shop/home">{{ __('layout.home') }} <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
   <a class="nav-link" href="/shop/products">{{ __('layout.products') }}</a>
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
    <form action="register/signup" method="POST">@csrf
    <h2 class="title-sell">{{ __('layout.signup') }}</h2>
    
    <div class="row justify-content-center" >
        <div class="form-group col-md-6">
        
        @if(Session::get('fail'))
            <div class="alert alert-danger text-center">
            {{ Session::get('fail') }}
            </div>
        @endif
        </div>
    </div>
            

    <div class="row justify-content-center {{ __('layout.right') }}" >
        <div class="form-group col-md-3">
                <label style="color: #33383b">{{ __('layout.fn') }}:</label>
                <input type="text" class="form-control" name="firstname" placeholder="{{ __('layout.fnplace') }}" value="{{ old('firstname') }}">
                @error('firstname')<span class="text-danger">{{ $message }} </span>@enderror
        </div>

        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.ln') }}:</label>
            <input type="text" class="form-control" name="lastname" placeholder="{{ __('layout.lnplace') }}" value="{{ old('lastname') }}">
            @error('lastname')<span class="text-danger">{{ $message }} </span>@enderror
        </div>
       
    </div>
    <div class="row justify-content-center {{ __('layout.right') }}" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.emaillabel') }}:</label>
            <input type="text" class="form-control" name="email" placeholder="{{ __('layout.email') }}" value="{{ old('email') }}">
            @error('email')<span class="text-danger">{{ $message }} </span>@enderror
        </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.passwordlabel') }}:</label>
            <input type="password" class="form-control" name="password" placeholder="{{ __('layout.password') }}">
            @error('password')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="row justify-content-center {{ __('layout.right') }}" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.phone') }}:</label>
            <input type="tel" class="form-control" name="phone" placeholder="{{ __('layout.phonelabel') }}" value="{{ old('phone') }}">
            @error('phone')<span class="text-danger">{{ $message }} </span>@enderror
    </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.city') }}:</label>
            <input type="text" class="form-control" name="city" placeholder="{{ __('layout.cityplace') }}" value="{{ old('city') }}">
            @error('city')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
    </div>

    <div class="row justify-content-center {{ __('layout.right') }}" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.street') }}:</label>
            <input type="text" class="form-control" name="street" placeholder="{{ __('layout.streetplace') }}" value="{{ old('street') }}">
            @error('street')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">{{ __('layout.bldng') }}:</label>
            <input type="text" class="form-control" name="building" placeholder="{{ __('layout.placebldng') }}"
             value="{{ old('building') }}">
            @error('building')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-lg-3">
                <button type="submit" class="btn btn-block btn-cart">{{ __('layout.signup') }}</button>
                <p class="text-center" style="color: #33383b">{{ __('layout.registered') }}
                    <a href="login" class="text-center" style="color: #cb5959">{{ __('layout.Login') }}</a>
                </p>
            </div>
    </div>
        
        </form>
    </div>
    </div>
    <br>
</div>
@stop