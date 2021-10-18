@extends('shop.layout')
@section('nav')
<title>Sweet Point | Sign in</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/products">Products</a>
</li>
<li class="nav-item">
   <a class="nav-link" href="/shop/customize">Customize Order</a>
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
</li>
<li class="nav-item">
   <a class="nav-link" href="/shop/contact">Contact Us</a>
</li>
@stop

@section('main')

<div class="container">
    <h2 class="title-sell">Sign In</h2>
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
            <h4>Your are already logged in!!</h4>
           <p>Click <a  href="/shop/logout">here</a> to logout</p> 
        </div>   
        @else

        <form action="/shop/login/signin" method="post">@csrf
            <div class="form-group">
                <label style="color: #33383b">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                @error('email')<span class="text-danger">{{ $message }} </span>@enderror
            </div>
            <div class="form-group">
                <label style="color: #33383b">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                @error('password')<span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-block btn-cart">Sign In</button>
            <p class="text-center" style="color: #33383b">Not Registered?
                <a href="register" class="text-center" style="color: #cb5959">Sign Up</a>
            </p>
        </form>
        @endif
    </div>
    </div>
    <br>
</div>
@stop