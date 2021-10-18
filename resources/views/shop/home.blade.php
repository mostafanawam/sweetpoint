@extends('shop.layout')

@section('nav')

<title>Sweet Point | Home</title>
<li class="nav-item ">
   <a class="nav-link active" href="/shop/home">Home <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
   <a class="nav-link" href="/shop/products">Products</a>
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
      <img src="{{ asset('carousel/1462194.webp') }}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('carousel/carosel2.jpg') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('carousel/car.jpg') }}" alt="New York" width="1100" height="500">
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
  <h2 class="title-sell">Short Story</h2>
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="{{ asset('images/logo.jpg') }}" alt="" class="img-fluid rounded form-group">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To Sweet<span>Point</span></h1>
						<p>Sweet Point , the name itself, shows that we plan the cakes that precisely suit your decision whatever event it’s. 
              We are at your administration for a few years, however concoct a wide scope of cakes and pastries.
              Adel puts stock in development and endeavors to present something new and 
              something other than what’s expected to meet all client prerequisites. 
            </p>
						<a class="btn btn-outline" href="/shop/products">Our Products</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

</div>

<div class="container">
   <h2 class="title-sell">Best Sellers</h2>

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
                        <button class="btn btn-outline" id="btn{{ $best->prod_id }}" onclick="AddToCart('{{ $best->prod_id }}')">Add to cart</button> </div>
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

  <h2 class="title-sell">Our Work in Review</h2>
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