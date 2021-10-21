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
  
  
  <body dir="{{ __('layout.dir') }}">
    <div class="notify" id="notify">
        <div class="popup">
          <span class="popuptext alert alert-success" id="myPopup">
            <i class="fas fa-check-circle"></i> {{ __('layout.added') }}
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
      <div class="utility-nav d-block d-md-block " >
        <div class="container">
          <div class="row">
            <div class="col-8 col-md-6">
              <p class="{{ __('layout.right') }}"> {{ __('layout.moreinfo') }} - <i class="fab fa-whatsapp"></i> {{ __('layout.number') }}
              </p>
            </div>
            <div class="col-4 col-md-6 {{ __('layout.left') }}">
              <a class="lang" href="/lang/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1280px-Flag_of_the_United_States.svg.png"></a> | 
              <a class="lang" href="/lang/ar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/2560px-Flag_of_Lebanon.svg.png" alt=""></a>
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
            <h2>{{ __('layout.brand1') }}<span> {{ __('layout.brand2') }}</span></h2>
          </a>
          <ul class="navbar-nav ml-auto d-block d-md-none">
            <li class="nav-item" >
                <a class="btn btn-link" href="/shop/cart"><i class="fas fa-shopping-cart icon-single"></i>
                  <span class="badge badge-danger item-nb cart_qty">
                    {{ $totalqty }}
                  </span>
                </a>
            </li>
          </ul>
          <div class="collapse navbar-collapse">
            <form class="form-inline my-2 my-lg-0 mx-auto" action="/shop/search" method="POST">@csrf
                <input class="form-control text-search" type="text" name="search" placeholder="{{ __('layout.search') }}" aria-label="Search">
                <button class="btn search-btn my-2 my-sm-0"  type="submit"><i class="fas fa-search"></i></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="btn btn-link" href="/shop/cart"><i class="fas fa-shopping-cart icon-single"></i><span class="badge badge-danger item-nb cart_qty">{{ $totalqty }}</span></a>
                </li>
                <li class="nav-item ml-md-3">
                  <a class="btn btn-login"  href="/shop/login"><i class="fas fa-user-circle mr-1"></i>{{ __('layout.login/reg') }}</a>
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
                  <input class="form-control" type="text" name="search" placeholder="{{ __('layout.search') }}" aria-label="Search">
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
<div class="contact-imfo-box ">
  <div class="container">
    <div class="row">
      <div class="col-md-4 form-group {{ __('layout.right') }}">
        <i class="fa fa-phone {{ __('layout.float') }}"></i>
        <div class="overflow-hidden" style="padding-right:{{ __('layout.padding') }}">
          <h4 >{{ __('layout.phone') }}</h4>
          <p class="lead ">
            {{ __('layout.number') }}
          </p>
        </div>
      </div>
      <div class="col-md-4 form-group {{ __('layout.right') }}" >
        <i class="fa fa-instagram {{ __('layout.float') }}"></i>
        <div class="overflow-hidden" style="padding-right:{{ __('layout.padding') }}">
          <h4>{{ __('layout.insta') }}</h4>
          <p class="lead">
            sweetpoint.lb

          </p>
        </div>
      </div>
      <div class="col-md-4 form-group {{ __('layout.right') }}">
        <i class="fa fa-map-marker {{ __('layout.float') }}"></i>
        <div class="overflow-hidden" style="padding-right:{{ __('layout.padding') }}">
          <h4>{{ __('layout.location') }}</h4>
          <p class="lead">
            {{ __('layout.address') }}
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
					<h3 class="{{ __('layout.right') }}">{{ __('layout.shortstory') }}</h3>
					<p class="{{ __('layout.right') }}">{{ __('layout.aboutus') }}
          </p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="{{ __('layout.right') }}">{{ __('layout.opening') }}</h3>
					<p><span class="text-color">Monday: </span>2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Tue-Wed :</span> 2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Thu :</span> 2:00 Am - 8:00 PM</p>
					<p><span class="text-color">Fri </span>closed</p>
					<p><span class="text-color">Sat-Sun :</span> 2:00 Am - 8:00 PM</p>
				</div>
				<div class="col-lg-3 col-md-6 {{ __('layout.right') }}">
					<h3 >{{ __('layout.contactus') }}</h3>
					<p class="lead">{{ __('layout.address') }}</p>
					<p class="lead">{{ __('layout.number') }}</p>
					<p class="lead">adeljaradli@gmail.com</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="{{ __('layout.right') }}">{{ __('layout.follow') }}</h3>
			
					<ul class="list-inline f-social {{ __('layout.right') }}">
						<li class="list-inline-item"><a href="https://www.facebook.com/adel.jardali"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://wa.me/+96181936963"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/sweetpoint.lb/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
          
					<div class="col-lg-12">
						<p class="company-name text-center">{{ __('layout.rights') }} &copy; {{ now()->year }} {{ __('layout.dev') }} :
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