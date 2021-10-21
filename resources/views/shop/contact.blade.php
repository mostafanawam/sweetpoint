@extends('shop.layout')

@section('nav')
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.contactus') }}</title>
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
   <a class="nav-link active" href="/shop/contact">{{ __('layout.contactus') }}</a>
</li>
@stop

@section('main')
<div class="container">
    <h2 class="title-sell">{{ __('layout.contactus') }}</h2>
</div>
<div class="container">

   <div class="row no-gutters mb-5">
      <div class="col-md-6">
         <div class="contact-wrap w-100 p-md-5 p-4">
          
            <div id="form-message-warning" class="mb-4"></div> 
            <form  id="contactForm" name="contactForm" class="contactForm">
               <div class="row {{ __('layout.right') }}">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="label" for="name">{{ __('layout.namelabel') }}</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('layout.name') }}">
                     </div>
                  </div>
                  <div class="col-md-6">  
                     <div class="form-group"> 
                        <label class="label" for="email">{{ __('layout.emaillabel') }}</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('layout.email') }}">
                        <span class="text-danger" id="emailalert"></span>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="label" for="subject">{{ __('layout.subject') }}</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('layout.subject') }}">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="label " for="#">{{ __('layout.message') }}</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="{{ __('layout.message') }}"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group text-center">
                        <input type="button" value="{{ __('layout.send') }}" class="btn btn-login" onclick="Contact()">
                        <div class="submitting"></div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
         <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Ain%20el%20Deleb%20Saida+(Sweet%20Point)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="520" height="400" frameborder="0"></iframe> <a href='https://www.add-map.net/'>how to embed a google map into a website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f3899a170440f19471cb8613f5a900e59849e083'></script>
      </div>
   </div>

</div>
<br>
@stop

