@extends('shop.layout')
@section('nav')
<title>Sweet Point | Search</title>
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
    <h2 class="title-sell">Search Products</h2>

    @if (isset($search))
    <div class='row special-list'>
      @foreach ($search as $prod)
         <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 special-grid {{ $prod->cat_id }}">
            <div class="card p-2">
                  <div class="text-center"> 
                     <img src="{{ asset('products/'.$prod->image.'') }}" class="img-fluid rounded"/> 
                  </div>
                  <div class="content">
                     <div class="d-flex justify-content-between align-items-center"> 
                        <span class="category">{{ $prod->name }}</span> 
                        <span class="price">{{ $prod->price }} L.L</span>
                     </div>
                     <p>{{ $prod->description }}</p>
               <div class="buttons d-flex justify-content-center">
<button type="button" class="btn btn-outline add-to-cart"
id="btn{{ $prod->prod_id }}" onclick="AddToCart('{{ $prod->prod_id }}')" value="">Add to Cart</button>
               </div>
                  </div>
            </div>
         </div>
      @endforeach
   </div>
   @else
   <div class="text-center">
      <img src="{{ asset('images/22.png') }}"  class="img-fluid" style="width: 15rem;" alt="">
      <h3>No results found :(</h3>
      <p>Try another search keyword <br>
      Or <a href="/shop/products" class="link">visit</a> our products page.</p>
      <br>
      
  </div>
   @endif

   
</div>

@stop