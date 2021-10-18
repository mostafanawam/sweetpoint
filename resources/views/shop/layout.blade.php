<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel = "icon" href = "{{ asset('images/logo.jpg') }}" type = "image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link rel="stylesheet" href="{{ asset('css/shop-home.css') }}">
      <script src="{{ asset('js/shop-home.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('css/cake.css') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
      <meta name="csrf-token" content="{{csrf_token()}}">
      <meta name="_token" content="{{csrf_token()}}">
  </head>
  
  
  <body>
    <div class="notify" id="notify">
        <div class="popup">
          <span class="popuptext alert alert-success" id="myPopup">
            <i class="fas fa-check-circle"></i> 1 item has been added to your cart
          </span>
        </div>
    </div>
      <!-- Back to top button -->
<a id="button"></a>

      


    <div class="loader_body" id="loader" style="display:none;">
    <div id="table">
        <div class="camera">
          <div class="copy">Welcome to Sweet Point!!</div>
          <div class="dishes">
            <div class="dish"></div>
            <div class="dish"></div>
            <div class="dish"></div>
            <div class="dish"></div>
            <div class="dish"></div>
            <div class="dish"></div>
          
          </div>
          <div class="cakes">
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cake">
              <div class="cake_tower">
                <div class="cake_1">
                  <div class="wall_1"></div>
                  <div class="wall_2"></div>
                  <div class="wall_3"></div>
                  <div class="wall_4"></div>
                  <div class="cake_2">
                    <div class="wall_1"></div>
                    <div class="wall_2"></div>
                    <div class="wall_3"></div>
                    <div class="wall_4"></div>
                    <div class="cake_3">
                      <div class="wall_1"></div>
                      <div class="wall_2"></div>
                      <div class="wall_3"></div>
                      <div class="wall_4"></div>
                      <div class="fork"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
           
           
           
          </div>
        </div>
      </div>
          
    </div>


    <div id="myDiv" ><!-- style="display:none;"-->

    <div class="overlay"></div>
      <div class="utility-nav d-none d-md-block " >
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <p class="small"> For more info - <i class="fab fa-whatsapp"></i> +961 81936963
              </p>
            </div>
            <div class="col-12 col-md-6 text-right">
              <p class="">EN</p>
            </div>
          </div>
        </div>
      </div>

    <nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none">
      <div class="container">
          <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
          <i class="fas fa-bars text-dark icon-single"></i>
          </button>
          <a class="navbar-brand" href="/shop/home" >
            <h2>Sweet<span>Point</span></h2>
          </a>
          <ul class="navbar-nav ml-auto d-block d-md-none">
            <li class="nav-item">
                <a class="btn btn-link" href="/shop/cart"><i class="fas fa-shopping-cart icon-single"></i>
                  <span class="badge badge-danger item-nb cart_qty">
           
                    {{ $totalqty }}
                 
                  </span>
                  
                </a>
            </li>
          </ul>
          <div class="collapse navbar-collapse">
            <form class="form-inline my-2 my-lg-0 mx-auto" action="/shop/search" method="POST">@csrf
                <input class="form-control" type="text" name="search" placeholder="Search for products..." aria-label="Search">
                <button class="btn search-btn my-2 my-sm-0"  type="submit"><i class="fas fa-search"></i></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="btn btn-link" href="/shop/cart"><i class="fas fa-shopping-cart icon-single"></i>
                    <span class="badge badge-danger item-nb cart_qty">
                   
                        {{ $totalqty }}
                   
                    </span>
                  </a>
                </li>
                <li class="nav-item ml-md-3">
                  <a class="btn btn-login"  href="/shop/login"><i class="fas fa-user-circle mr-1"></i> Log In / Register</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
      <div class="container">
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-nav mx-auto">
              @yield('nav')
            </ul>
          </div>
      </div>
    </nav>
    <div class="search-bar d-block d-md-none">
      <div class="container">
          <div class="row">
            <div class="col-12">
              <form class="form-inline my-2 my-lg-0 mx-auto" action="/shop/search" method="POST">@csrf
                  <input class="form-control" type="text" name="search" placeholder="Search for products..." aria-label="Search">
                  <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
          </div>
      </div>
    </div>
    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-10 pl-0">
                  <a class="btn btn-login" href="/shop/login"><i class="fas fa-user-circle mr-1"></i>Log In / Register</a>
                </div>
                <div class="col-2 text-left">
                  <button type="button" id="sidebarCollapseX" class="btn btn-link">
                    <i class="fas fa-times icon-single text-dark"></i>
                  </button>
                </div>
            </div>
          </div>
      </div>
      <ul class="list-unstyled components links">
        @yield('nav')
      </ul>
    </nav>
    
@yield('main')

<!-- Start Contact info -->
<div class="contact-imfo-box">
  <div class="container">
    <div class="row">
      <div class="col-md-4 form-group">
        <i class="fa fa-phone"></i>
        <div class="overflow-hidden">
          <h4>Phone</h4>
          <p class="lead">
            +961 81936963
          </p>
        </div>
      </div>
      <div class="col-md-4 form-group">
        <i class="fa fa-instagram"></i>
        <div class="overflow-hidden">
          <h4>Instagram</h4>
          <p class="lead">
            sweetpoint.lb

          </p>
        </div>
      </div>
      <div class="col-md-4 form-group">
        <i class="fa fa-map-marker"></i>
        <div class="overflow-hidden">
          <h4>Location</h4>
          <p class="lead">
            Lebanon, Saida, Ain-Dilb
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact info -->



  <!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Sweet Art , the name itself, shows that we plan the cakes that precisely suit your decision whatever event it’s. 
            We are at your administration for a few years, however concoct a wide scope of cakes and pastries.
          </p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Tue-Wed :</span> 2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Thu :</span> 2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Fri </span>closed</p>
					<p><span class="text-color">Sat-Sun :</span> 2:00 Am - 8:00 PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact</h3>
					<p class="lead">Lebanon, Saida, Ain-Dilb</p>
					<p class="lead">+961 81936963</p>
					<p class="lead">adeljaradli@gmail.com</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Fllow Us</h3>
			
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/adel.jardali"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://wa.me/+96181936963"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<!--<li class="list-inline-item"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>-->
						<!--<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
						<li class="list-inline-item"><a href="https://www.instagram.com/sweetpoint.lb/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name text-center">All Rights Reserved. &copy; {{ now()->year }} Developed By :
					<a href="https://mostafanawam.github.io/" target="_blank" class="signiture">Mostafa Nawam</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->



</div><!-- end myDiv -->
</body>
</html>