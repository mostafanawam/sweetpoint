@extends('shop.layout')

@section('nav')
<title>Sweet Point | checkout</title>
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">


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
         <h2 class="title-sell">Checkout</h2>
      </div>


      <div class='success-not text-center' id="success"></div>
    
<div class="container" id="allpage">
   

   
   @if (!session()->has('customer'))
   <div class="alert alert-secondary " style="padding: 20px">
      Returning customer? Click <a href="/shop/login">here</a> to login
   </div>
   @endif


      <div class="picking">
         <h2 class="header-ch">Order Picking</h2>
         <div class="row row2 text-center">
            <div class="col-6">
               <p>
                  <input type="radio" id="Delivery" name="pick" value="delivery" checked onclick="get()">
                  <label for="Delivery">Delivery</label>
               </p>
            </div>
            <div class="col-6">
               <p>
                  <input type="radio" id="Takeaway" name="pick" value="takeaway" onclick="get()">
                  <label for="Takeaway">Takeaway</label>
               </p>
            </div>
         </div>
      </div>
      
   

      <h2 class="header-ch">Billing details</h2>

      <div id="takeaway" ><!-- start takeaway part -->
         @if (!session()->has('customer'))<!-- if not logged in -->
         <input type="hidden" class="123" value="2">
         <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label" >Name *</label>
            <div class="col-sm-5">
               <input type="text"  class="form-group form-control" id="fn_temp_t"  placeholder="First name">
            </div>
            <div class="col-sm-5">  
               <input type="text"  class="form-group form-control" id="ln_temp_t"  placeholder="Last name">
            </div>
         </div>
         <div class="form-group row">
            <label for="mobile_temp_t" class="col-sm-2 col-form-label">Mobile number *</label>
            <div class="col-sm-10">
               <input type="tel" class="form-control" id="mobile_temp_t" placeholder="8-digits phone number">
               <span class="text-danger" id='alertmobile_t'></span>
            </div>
         </div>
         <div class="form-group row">
            <label for="note_temp_t" class="col-sm-2 col-form-label">Order ftas</label>
            <div class="col-sm-10">
               <textarea  id="note_temp_t" style="width: 100%" rows="5" class="form-control"></textarea>
            </div>
         </div>
         @else <!-- if logged in -->
               
               <div class="row mrgn"> 
                  <input type="hidden" class="123" value="1">
                  <div class="col" id="name">
                     Full name:  {{ $address->firstname }} {{ $address->lastname }}
                  </div>
               </div>
               <div class="row mrgn" >
                  <div class="col">
                     Phone:   {{ $address->phone }}
                  </div>
               </div>
            
            
         @endif
      </div><!-- end takeaway part -->
      

      <div id="delivery">    <!-- Delivery part-->  

         @if (session()->has('customer'))
         
         
         <p class='mrgn-radio'>
            <input type="radio" id="default" name="address" value="default" checked onclick="newaddress()">
            <label for="default" class="h5">Default shipping address</label>
         </p>
          
            <div class="row mrgn"> 
               
               <div class="col">
                  Address:  {{ $address->city }},{{ $address->street }},{{ $address->building }} 
               </div>
            </div>
            <div class="row mrgn" >
               <div class="col">
                  Phone:   {{ $address->phone }}
               </div>
            </div>
                  
            <br>
            <div class="row">
               <div class="col">
                  <p class='mrgn-radio'>
                     <input type="radio" id="newaddress" name="address" value="newaddress" onclick="newaddress()">
                     <label for="newaddress" class="h5">Ship to a different address?</label>
                  </p>
               </div>
            </div>

            <form method="POST" id="new_address">
               <h4 style="padding-bottom: 15px">New address information</h4>
               <div class="form-group  row">
                  
                  <label for="city" class="col-sm-2 col-form-label">City *</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="city_cus_d" placeholder="City name">
                     @error('city')<span class="text-danger">{{ $message }}</span>@enderror
                  </div>
                  </div>
                  <div class="form-group row">
                     <label for="street" class="col-sm-2 col-form-label">Street Address *</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control"  placeholder="Street name" id="street_cus_d">
                     @error('street')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="building" class="col-sm-2 col-form-label">Building *</label>
                     <div class="col-sm-10">
                     <input type="text" class="form-control" id="building_cus_d"
                        placeholder="Building name and floor number" id="building">
                     @error('building')<span class="text-danger">{{ $message }}</span>@enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="note" class="col-sm-2 col-form-label">Order notes</label>
                     <div class="col-sm-10">
                     <textarea  id="note_cus_d" style="width: 100%" rows="5" class="form-control" 
                     placeholder="Notes about your order, e.g: special notes for delivery"></textarea>
                     </div>
                  </div>
            </form>

         @else <!--   if not logged in customer -->
      <form method="POST" action="" id="new_address_temp" > @csrf
         
            <h4 style="padding-bottom: 15px">Delivery address information</h4>
         <div class="row">
         <label for="fn" class="col-sm-2 col-form-label">Name *</label>
         <div class="col-sm-5">
            <input type="text"  class="form-group form-control"  placeholder="First name" id="firstname" name="firstname1">
         </div>
         <div class="col-sm-5">
            <input type="text"  class="form-group form-control"  placeholder="Last name" id="lastname"> 
         </div>
         
         </div>
         <div class="form-group  row">
         <label for="city" class="col-sm-2 col-form-label">City *</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="city" placeholder="City name">
            
         </div>
         </div>
         <div class="form-group row">
            <label for="street" class="col-sm-2 col-form-label">Street Address *</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  placeholder="Street name" id="street">
            </div>
         </div>
         <div class="form-group row">
            <label for="building" class="col-sm-2 col-form-label">Building *</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="building"
               placeholder="Building name and floor number">
            </div>
         </div>
         <div class="form-group row">
            <label for="mobile" class="col-sm-2 col-form-label">Mobile number *</label>
            <div class="col-sm-10">
            <input type="tel" class="form-control"  id="mobile" placeholder="8-digits phone number">
            <span class="text-danger" id='alertmobile'></span>
            </div>
         </div>
         <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">Order notes</label>
            <div class="col-sm-10">
            <textarea name="note" id="note" style="width: 100%" rows="5" class="form-control" 
            placeholder="Notes about your order, e.g: special notes for delivery"></textarea>
            </div>
         </div>
      </form>
      @endif<!-- end if logged in-->

   </div><!-- end Delivery part-->  



   <div class="your_order"><!--  order part -->
      <h2 class="header-ch">Your Order</h2>
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
                      <div class="col-4 text-right">
                          {{ $cart['totalprice'][$i]}} L.L
                      </div>  
                  </div>
                  @endif
              @endfor
              <hr >
              <div class=" form-group row row2 text-right" >
                  <div class="col-2">
                      <h5>Sub Total</h5>
                  </div>
                  <div  class=" col-10">
                      <span id="subtotal">{{ $total }}</span> L.L
                  </div>
              </div>
  
              <div class="form-group row row2 text-right" >
                  <div class="col-2">
                      <h5>Shipping</h5>
                  </div>
                  <div  class="col-10">
                      <span id="charge">20000</span> L.L
                  </div>
              </div>
              <div class="form-group row row2 text-right" >
                  <div class="col-2">
                      <h5>Grand Total</h5>
                  </div>
                  <div  class="col-10">
                      <span id="total">{{ $total+20000 }}</span> L.L
                  </div>
              </div>
  
      </div><!-- End order part -->
  
   <form  method="post">@csrf
      <div class="form-group row justify-content-center">
          <div class="col-lg-10">
          <input type="button" class="btn btn-block btn-cart" value="Place Order" style="padding:10px" id="btnPlace" onclick="PlaceOrder()">
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