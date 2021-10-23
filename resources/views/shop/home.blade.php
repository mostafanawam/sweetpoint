@extends('shop.layout')

@section('nav')

<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.home') }}</title>
<li class="nav-item ">
   <a class="nav-link active" href="/shop/home">{{ __('layout.home') }} <span class="sr-only">(current)</span></a>
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

<br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('carousel/donuts.jpg') }}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('carousel/22.jpg') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('carousel/cake.jpg') }}" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  
<div class="container">
  <h2 class="title-sell">{{ __('layout.shortstory') }}</h2>
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="{{ asset('images/logo.jpg') }}" alt="" class="img-fluid rounded form-group">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">{{ __('layout.welcome') }} {{ __('layout.brand1') }} <span>{{ __('layout.brand2') }}</span></h1>
						<p>{{ __('layout.aboutus') }}
            </p>
            <div class="text-center">
              <a class="btn btn-outline" href="/shop/products">{{ __('layout.ourptoducts') }}</a>
            </div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

</div>

<div class="container">
   <h2 class="title-sell">{{ __('layout.bestsellers') }}</h2>

   <div class="container mt-5 mb-5">
      <div class="row g-2">
         @foreach ($best_sellers as $best)
          <div class="form-group col-md-3 d-flex justify-content-center">
              <div class="card p-2">
                  <div class="text-center"> <img src="{{ asset('products/'.$best->image.'') }}" class="img-fluid rounded" /> </div>
                  <div class="content">
                      <div class="d-flex justify-content-between align-items-center"> <span class="category">{{ $best->name }}</span> <span class="price">{{ $best->price }} L.L</span> </div>
                      <p>{{ $best->description }}</p>
                      <div class="buttons d-flex justify-content-center">
                        <button class="btn btn-outline" id="btn{{ $best->prod_id }}" onclick="AddToCart('{{ $best->prod_id }}')">{{ __('layout.addtocart') }}</button> </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<script src="{{ asset('js/ourwork.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/ourwork.css') }}">

  <h2 class="title-sell">{{ __('layout.work') }}</h2>
  <div class="container">
   <div class="row row1 rowtable">

      @foreach ($files as $image)
      <?php
      $row=explode("/",$image);
      //echo $row[2];
      ?>
      <a href="{{asset('storage/gallery/'.$row[2].'') }}" data-toggle="lightbox" data-gallery="gallery" class="column effect11">
         <img src="{{asset('storage/gallery/'.$row[2].'') }}" class="rounded img1">
       </a>
      @endforeach
   </div>
 </div>




  <!--<h2 class="title-sell">Build Your Cake</h2>
  <div class="container mt-5 mb-5">
  
   <div class="text-center">
      <a href="" class="more-product">See more...</a>
   </div>
</div>-->

  
</div><!-- end container-->

  
@stop