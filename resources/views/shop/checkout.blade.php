@extends('shop.layout')

@section('nav')

<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.checkout') }}</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">{{ __('layout.home') }} <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/products">{{ __('layout.products') }}</a>
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

      @if (session()->has('customer'))
      <script>
         $(document).ready(function(){
            $('#new_address').hide();
         });
         function newaddress(){
            $('input[name="address"]:checked').each(function() {
                  if(this.value=="newaddress"){
                     $('#new_address').show();
                  }else if(this.value=="default"){
                     $('#new_address').hide();
                  }
            });
         }
      </script>
      @else
      <script>

         $(document).ready(function(){
            $('#new_address').show();
         });
         function newaddress(){
            $('input[name="address"]:checked').each(function() {
                  if(this.value=="newaddress"){
                     $('#new_address').show();
                  }else if(this.value=="default"){
                     $('#new_address').hide();
                  }
            });
         }
      </script>
      @endif

      <div class="container">
         <h2 class="title-sell">{{ __('layout.checkout') }}</h2>
      </div>


      <div class='success-not text-center' id="success"></div>
    
<div class="container " id="allpage">
   

   
   @if (!session()->has('customer'))
   <div class="alert alert-secondary {{ __('layout.right') }}" style="padding: 20px">
      {{ __('layout.returncus') }} <a href="/shop/login">{{ __('layout.here') }}</a> {{ __('layout.tologin') }}
   </div>
   @endif


      <div class="picking">
         <h2 class="header-ch {{ __('layout.right') }}">{{ __('layout.pick') }}</h2>
         <div class="row row2 text-center">
            <div class="col-6">
                  <input type="radio" id="Delivery" name="pick" value="delivery" checked onclick="get()">
                  <label for="Delivery" class="pointer">{{ __('layout.deliv') }}</label>
            </div>
            <div class="col-6">
                  <input type="radio" id="Takeaway" name="pick" value="takeaway" onclick="get()">
                  <label for="Takeaway" class="pointer">{{ __('layout.take') }}</label>
            </div>
         </div>
      </div>
      
   

      <h2 class="header-ch {{ __('layout.right') }}">{{ __('layout.billing') }}</h2>

      <div id="takeaway" class="{{ __('layout.right') }}"><!-- start takeaway part -->
         @if (!session()->has('customer'))<!-- if not logged in -->
         <input type="hidden" class="123" value="2">
         <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label" >{{ __('layout.fn') }} *</label>
            <div class="col-sm-5">
               <input type="text"  class="form-group form-control" id="fn_temp_t"  placeholder="{{ __('layout.fnplace') }}">
            </div>
            <div class="col-sm-5">  
               <input type="text"  class="form-group form-control" id="ln_temp_t"  placeholder="{{ __('layout.lnplace') }}">
            </div>
         </div>
         <div class="form-group row">
            <label for="mobile_temp_t" class="col-sm-2 col-form-label">{{ __('layout.phone') }} *</label>
            <div class="col-sm-10">
               <input type="tel" class="form-control" id="mobile_temp_t" placeholder="{{ __('layout.phonelabel') }}">
               <span class="text-danger" id='alertmobile_t'></span>
            </div>
         </div>
         <div class="form-group row">
            <label for="note_temp_t" class="col-sm-2 col-form-label">{{ __('layout.special') }}</label>
            <div class="col-sm-10">
               <textarea  id="note_temp_t" style="width: 100%" rows="5" class="form-control"></textarea>
            </div>
         </div>
         @else <!-- if logged in -->
               
               <div class="row mrgn {{ __('layout.center') }}"> 
                  <input type="hidden" class="123" value="1">
                  <div class="col" id="name">
                     {{ __('layout.namelabel') }}:  {{ $address->firstname }} {{ $address->lastname }}
                  </div>
               </div>
               <div class="row mrgn {{ __('layout.center') }}" >
                  <div class="col">
                     {{ __('layout.phone') }}:   {{ $address->phone }}
                  </div>
               </div>
            
            
         @endif
      </div><!-- end takeaway part -->
      

      <div id="delivery" class="{{ __('layout.center') }}">    <!-- Delivery part-->  

         @if (session()->has('customer'))
         
         
         <p class='mrgn-radio'>
            <input type="radio" id="default" name="address" value="default" checked onclick="newaddress()">
            <label for="default" class="h5 pointer">{{ __('layout.defaddress') }}</label>
         </p>
          
            <div class="row mrgn"> 
               
               <div class="col">
                  {{ __('layout.location') }}:  {{ $address->city }},{{ $address->street }},{{ $address->building }} 
               </div>
            </div>
            <div class="row mrgn" >
               <div class="col">
                  {{ __('layout.phone') }}:   {{ $address->phone }}
               </div>
            </div>
                  
            <br>
            <div class="row">
               <div class="col">
                  <p class='mrgn-radio'>
                     <input type="radio" id="newaddress" name="address" value="newaddress" onclick="newaddress()">
                     <label for="newaddress" class="h5 pointer">{{ __('layout.diffaddress') }}</label>
                  </p>
               </div>
            </div>

            <form method="POST" id="new_address" class="{{ __('layout.right') }}">
               <h4 style="padding-bottom: 15px">{{ __('layout.newaddress') }}</h4>
               <div class="form-group  row">
                  
                  <label for="city" class="col-sm-2 col-form-label">{{ __('layout.city') }} *</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="city_cus_d" placeholder="{{ __('layout.cityplace') }} ">
                     @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  </div>
                  <div class="form-group row">
                     <label for="street" class="col-sm-2 col-form-label">{{ __('layout.street') }} *</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control"  placeholder="{{ __('layout.streetplace') }} " id="street_cus_d">
                     @error('street')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="building" class="col-sm-2 col-form-label">{{ __('layout.bldng') }} *</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="building_cus_d"
                        placeholder="{{ __('layout.placebldng') }} " id="building">
                     @error('building')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="note" class="col-sm-2 col-form-label">{{ __('layout.ordernote') }}</label>
                     <div class="col-sm-10">
                     <textarea  id="note_cus_d" style="width: 100%" rows="5" class="form-control" 
                     placeholder="{{ __('layout.deliverynote') }}"></textarea>
                     </div>
                  </div>
            </form>

         @else <!--   if not logged in customer -->
      <form method="POST" action="" id="new_address_temp" class="{{ __('layout.right') }}" > @csrf
         
            <h4 style="padding-bottom: 15px">{{ __('layout.addressinfo') }}</h4>
         <div class="row">
         <label for="fn" class="col-sm-2 col-form-label">{{ __('layout.fn') }}  *</label>
         <div class="col-sm-5">
            <input type="text"  class="form-group form-control"  placeholder="{{ __('layout.fnplace') }}" id="firstname" name="firstname1">
         </div>
         <div class="col-sm-5">
            <input type="text"  class="form-group form-control"  placeholder="{{ __('layout.lnplace') }}" id="lastname"> 
         </div>  
         
         </div>
         <div class="form-group  row">
         <label for="city" class="col-sm-2 col-form-label">{{ __('layout.city') }}  *</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="city" placeholder="{{ __('layout.cityplace') }}">
            
         </div>
         </div>
         <div class="form-group row">
            <label for="street" class="col-sm-2 col-form-label">{{ __('layout.street') }} *</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="{{ __('layout.streetplace') }}" id="street">
            </div>
         </div>
         <div class="form-group row">
            <label for="building" class="col-sm-2 col-form-label">{{ __('layout.bldng') }} *</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="building"
               placeholder="{{ __('layout.placebldng') }}">
            </div>
         </div>
         <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label">{{ __('layout.phone') }} *</label>
            <div class="col-sm-10">
            <input type="tel" class="form-control"  id="mobile" placeholder="{{ __('layout.phonelabel') }}">
            <span class="text-danger" id='alertmobile'></span>
            </div>
         </div>
         <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">{{ __('layout.ordernote') }}</label>
            <div class="col-sm-10">
            <textarea name="note" id="note" style="width: 100%" rows="5" class="form-control" 
            placeholder="{{ __('layout.deliverynote') }}"></textarea>
            </div>
         </div>
      </form>
      @endif<!-- end if logged in-->

   </div><!-- end Delivery part-->  



   <div class="your_order "><!--  order part -->
      <h2 class="header-ch {{ __('layout.right') }}">{{ __('layout.yourorder') }}</h2>
          @for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) 
              @if (isset($cart['image'][$i])) <!--check if in this index there is a value-->
                  <div class="row row2 text-center form-group" >
                      <div class="col-3">
                          <img src="{{ asset('products/'.$cart['image'][$i].'')}}" class="img-fluid rounded-circle prd-img" >
                      </div>
                      <div class="col-3">
                          {{ $cart['name'][$i]}} 
                      </div>
                      <div class="col-2">
                          x{{ $cart['qty'][$i]}}
                      </div>
                      <div class="col-4 {{ __('layout.left') }}">
                          {{ $cart['totalprice'][$i]}} {{ __('layout.lbp') }}
                      </div>  
                  </div>
                  @endif
              @endfor
              <hr >
              <div class=" form-group row row2 {{ __('layout.left') }}" >
                  <div class="col-2">
                      <h5>{{ __('layout.subtotal') }}</h5>
                  </div>
                  <div  class=" col-10">
                      <span id="subtotal">{{ $total }}</span> {{ __('layout.lbp') }}
                  </div>
              </div>
  
              <div class="form-group row row2 {{ __('layout.left') }}" >
                  <div class="col-2">
                      <h5>{{ __('layout.shipfees') }}</h5>
                  </div>
                  <div  class="col-10">
                      <span id="charge">20000</span> {{ __('layout.lbp') }}
                  </div>
              </div>
              <div class="form-group row row2" >
                  <div class="col-2">
                      <h5>{{ __('layout.grandtotal') }}</h5>
                  </div>
                  <div  class="col-10 {{ __('layout.left') }}">
                      <span id="total">{{ $total+20000 }}</span> {{ __('layout.lbp') }}
                  </div>
              </div>
  
      </div><!-- End order part -->
  
   <form  method="post">@csrf
      <div class="form-group row justify-content-center">
          <div class="col-lg-10">
          <input type="button" class="btn btn-block btn-cart" value="{{ __('layout.place') }}" style="padding:10px" id="btnPlace" onclick="PlaceOrder()">
          </div>
      </div>
  </form>



</div><!-- end all page -->
<br>
@stop

 <!--<div class="form__group field">
         <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
         <label for="name" class="form__label">Name</label>
       </div>-->