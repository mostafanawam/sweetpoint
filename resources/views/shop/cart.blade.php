@extends('shop.layout')

@section('nav')
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.carttitle') }}</title>
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
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
    <h2 class="title-sell">{{ __('layout.carttitle') }}</h2>

@if (isset(($cart['name'])))
    @if(count($cart['name'])>0)<!--  of count>0 means there are items else empty cart-->
   
    <div class="row">
      <div class="col-lg-6">
        <form action="/shop/cart/empty" method="POST" class="{{ __('layout.right') }}"> @csrf
          <button class="form-group btn btn-cart ">{{ __('layout.emptythecart') }}</button>
        </form>
      </div>
    </div>
    
<div class="shopping-cart">

  <div class="column-labels">
   
    <label class="product-image">{{ __('layout.img') }}</label>
    <label class="product-details">{{ __('layout.prod') }}</label>
    <label class="product-price">{{ __('layout.price') }}</label>
    <label class="product-quantity">{{ __('layout.qty') }}</label>
    <label class="product-removal">{{ __('layout.remove') }}</label>
    <label class="product-line-price">{{ __('layout.total') }}</label>
  </div>


    
  @for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) 
    @if (isset($cart['image'][$i])) <!--check if in this index there is a value-->
        <div class="product">
          <div class="product-image">
            <img src="{{ asset('products/'.$cart['image'][$i].'')}}" class="rounded-circle">
          </div>
          <div class="product-details">
            <div class="product-title">{{ $cart['name'][$i]}} </div>
            <p class="product-description">{{ $cart['description'][$i]}} </p>
          </div>
          <div class="product-price">{{ $cart['price'][$i]}} {{ __('layout.lbp') }}</div>
          <div class="product-quantity">
            <input type="text" value="{{ $cart['qty'][$i]}}" class="text-center" readonly>
          </div>
          <div class="product-removal">
            <a href="/shop/cart/remove/{{ $i }}"><i class="fas fa-trash text-danger"></i></a>
          </div>
          <div class="product-line-price">{{ $cart['totalprice'][$i]}} {{ __('layout.lbp') }}</div>
          
        </div>
    @endif
  @endfor
  @endif
  <div class="totals">
    <div class="totals-item">
      <label>Total</label>
      <div class="totals-value" id="cart-subtotal">{{ $total }} {{ __('layout.lbp') }}</div>
    </div>
    <!--<div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60 L.L</div>
    </div>
    <div class="totals-item">
      <label>Delivery</label>
      <div class="totals-value" id="cart-shipping">15000 L.L</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">{{$total }} {{ __('layout.lbp') }}</div>
    </div>-->
  </div>

</div>

  <div class="row justify-content-center">
    <div class="col-lg-3">
      <a class="btn btn-outline float-right btn-block form-group" href="products">{{ __('layout.continue') }}</a>
    </div>
    <div class="col-lg-3">
        <a class="btn btn-cart btn-block form-group" href="checkout">{{ __('layout.checkout') }}</a>
    </div>
  </div>
@else 
  <div class="empty-cart text-center">
      <img src="{{ asset('images/empty-cart.png') }}"  class="img-fluid" alt="">
      <h3>{{ __('layout.emptycart') }}</h3>
      <p>{{ __('layout.addsome') }}</p>
      <a class="btn btn-outline  " href="/shop/products">{{ __('layout.continue') }}</a>
  </div>
  <br>
@endif

<br>
    
</div>
@stop