@extends('shop.layout')


@section('nav')
<title>Sweet Point | Products</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link active" href="/shop/products">Products</a>
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
<li class="nav-item">
   <a class="nav-link" href="/shop/contact">Contact Us</a>
</li>
@stop

@section('main')



   <div class="container">

      
   <div class="row">
     
   <div class="col-lg-12">
   <div class="heading-title text-center">
      <h2 class="title-sell">Special Menu</h2>
   </div></div></div>

   <div class="row">
      <div class="col-lg-12">
         <div class="special-menu text-center">
            <div class="button-group filter-button-group">
               <button class="active btn-cat" data-filter="*">All</button>
               @foreach ($category as $cat)
               <button data-filter=".{{ $cat->cat_id }}" class="btn-cat">{{ $cat->cat_name }}</button>
            @endforeach
</div></div></div></div>
<br>
<form action="" method="POST">
   @csrf

            <div class='row special-list'>
               @foreach ($products as $prod)
                  
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
        
             
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<script src="{{ asset('js/menu-filter.js') }}">
</script>
   </div>
<!-- End Menu -->

</form>
@stop