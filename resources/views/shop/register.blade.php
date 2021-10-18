@extends('shop.layout')
@section('nav')
<title>Sweet Point | Sign up</title>
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
    <form action="register/signup" method="POST">@csrf
    <h2 class="title-sell">Sign Up</h2>
    
    <div class="row justify-content-center" >
        <div class="form-group col-md-6">
        
        @if(Session::get('fail'))
            <div class="alert alert-danger text-center">
            {{ Session::get('fail') }}
            </div>
        @endif
        </div>
    </div>
            

    <div class="row justify-content-center" >
        <div class="form-group col-md-3">
                <label style="color: #33383b">Firstname</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" value="{{ old('firstname') }}">
                @error('firstname')<span class="text-danger">{{ $message }} </span>@enderror
        </div>

        <div class="form-group col-md-3">
            <label style="color: #33383b">Lastname</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter lastname" value="{{ old('lastname') }}">
            @error('lastname')<span class="text-danger">{{ $message }} </span>@enderror
        </div>
       
    </div>
    <div class="row justify-content-center" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
            @error('email')<span class="text-danger">{{ $message }} </span>@enderror
        </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
            @error('password')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="row justify-content-center" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
            @error('phone')<span class="text-danger">{{ $message }} </span>@enderror
    </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter city" value="{{ old('city') }}">
            @error('city')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
    </div>

    <div class="row justify-content-center" >
        <div class="form-group col-md-3">
            <label style="color: #33383b">Street</label>
            <input type="text" class="form-control" name="street" placeholder="Enter street" value="{{ old('street') }}">
            @error('street')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-md-3">
            <label style="color: #33383b">Building</label>
            <input type="text" class="form-control" name="building" placeholder="Enter building name and floor number"
             value="{{ old('building') }}">
            @error('building')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-lg-3">
                <button type="submit" class="btn btn-block btn-cart">Sign Up</button>
                <p class="text-center" style="color: #33383b">Already Registered?
                    <a href="login" class="text-center" style="color: #cb5959">Sign In</a>
                </p>
            </div>
    </div>
        
        </form>
    </div>
    </div>
    <br>
</div>
@stop