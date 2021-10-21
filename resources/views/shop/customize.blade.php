@extends('shop.layout')

@section('nav')
<title>{{ __('layout.brand1') }} {{ __('layout.brand2') }} | {{ __('layout.customize') }}</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">{{ __('layout.home') }} <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item">
   <a class="nav-link" href="/shop/products">{{ __('layout.products') }}</a>
</li>
<li class="nav-item">
   <a class="nav-link active" href="/shop/customize">{{ __('layout.customize') }}</a>
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
<link rel="stylesheet" href="{{ asset('css/customiza.css') }}">
<div class="container" id="main">
   <form action="" method="post" enctype="multipart/form-data">@csrf
  
   <h2 class="title-sell">{{ __('layout.build') }}</h2>
   

   

   <div class=" alert-danger text-lg-center" id="alert"></div>

   <fieldset class="form-group p-3 border_color">
      <legend class="w-auto px-2">{{ __('layout.cakeinfo') }}</legend>
   <div class="row {{ __('layout.right') }}">
      <div class="form-group col-lg-3">
         <h5>{{ __('layout.size') }}:</h5>
         <div>
            <input type="radio" name="size" value="size1" id="size1">
            <label for="size1">{{ __('layout.size1') }}</label>
         </div>
         <div>
            <input type="radio" name="size" value="size2" id="size2">
            <label for="size2">{{ __('layout.size2') }}</label>
         </div>
         <div>
            <input type="radio" name="size" value="size3" id="size3">
            <label for="size3">{{ __('layout.size3') }}</label>
         </div>
         <div>
            <input type="radio" name="size" value="size4" id="size4">
            <label for="size4">{{ __('layout.size4') }}</label>  
         </div>
         <div>
            <input type="radio" name="size" value="size5" id="size5">  
            <label for="size5">{{ __('layout.size5') }}</label>
         </div>
         <div>
            <input type="radio" name="size" value="size6" id="size6">
            <label for="size6">{{ __('layout.size6') }}</label>
         </div>
      </div>
      <div class="form-group col-lg-3">
         <h5>{{ __('layout.flavor') }}:</h5>
         <div>
            <input type="radio" name="flavor" value="Chocolate" id="flavor1">
            <label for="flavor1">{{ __('layout.flavor1') }}</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="White" id="flavor2">
            <label for="flavor2">{{ __('layout.flavor2') }}</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="Vanilla" id="flavor3">
            <label for="flavor3">{{ __('layout.flavor3') }}</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="Marble" id="flavor4">
            <label for="flavor4">{{ __('layout.flavor4') }}</label>
         </div>
      </div>
      <div class="form-group col-lg-3">
         <h5>{{ __('layout.filling') }}:</h5>
         <div>
            <input type="radio" name="filling" value="Chocolate Cream" id="filling1">
            <label for="filling1">{{ __('layout.filling1') }}</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Vanilla" id="filling2">
            <label for="filling2">{{ __('layout.filling2') }}</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Fruits" id="filling3">
            <label for="filling3">{{ __('layout.filling3') }}</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Nuts" id="filling4">
            <label for="filling4">{{ __('layout.filling4') }}</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Peanut Butter" id="filling5">
            <label for="filling5">{{ __('layout.filling5') }}</label> 
         </div>
      </div>
      <div class="form-group col-lg-3 ">
         <h5>{{ __('layout.icing') }}:</h5>
         <div>
            <input type="radio" name="icing" value="Chocolate Cream" id="icing2">
            <label for="icing2">{{ __('layout.icing1') }}</label> 
         </div>
         <div>
            <input type="radio" name="icing" value="Vanilla Cream" id="icing3">
            <label for="icing3">{{ __('layout.icing2') }}</label>
         </div>
         <div>
            <input type="radio" name="icing" value="Whipped Cream" id="icing4">
            <label for="icing4">{{ __('layout.icing3') }}</label>
         </div>
         <div>
            <input type="radio" name="icing" value="Sugar Paste" id="icing5">
            <label for="icing5">{{ __('layout.icing4') }}</label>
         </div>
      </div>
   </div>
</fieldset>
<br>
   <fieldset class="form-group  p-3 border_color">
      <legend class="w-auto px-2">{{ __('layout.additional') }}</legend>
   <div class="row {{ __('layout.right') }}">
      <div class="form-group col-lg-4">
         <h5>{{ __('layout.cakemessage') }}:</h5>
         <textarea name="" id="message" style="width:100%;"" class='form-control' placeholder="{{ __('layout.messageplace') }}"></textarea>
      </div>
      <div class="form-group col-lg-4">
         <h5>{{ __('layout.special') }}:</h5>
         <textarea name="" id="note" style="width:100%;" class="form-control"></textarea>
      </div>
      <div class="form-group col-lg-4">
         <h5>{{ __('layout.attach') }}:</h5>
         <input type="file" name="image" id="image" class="form-control">
      </div>
   </div>
</fieldset>


<br>
 
   <fieldset class="form-group  p-3 border_color">
      <legend class="w-auto px-2">{{ __('layout.custinfo') }}</legend>
      <div class="row {{ __('layout.right') }}">
         <div class="form-group col-lg-6">
            <h5>{{ __('layout.namelabel') }}:</h5>
            <input type="text" id="name" class="form-control" placeholder="{{ __('layout.name') }}">
         </div>
         <div class="form-group col-lg-6">
            <h5>{{ __('layout.phone') }}:</h5>
            <input type="tel" id="phone" class="form-control" placeholder="{{ __('layout.phonelabel') }}">
         </div>
         
      </div>
      
   </fieldset>
   <p class="{{ __('layout.right') }}"> <b>{{ __('layout.note') }}:</b><br>
   -{{ __('layout.notemessage') }}</p>
   <br>
      <div class="row justify-content-center">      
         <div class="form-group col-lg-3">
            <input type="button" class="btn btn-outline btn-block" value="{{ __('layout.buildcake') }}" onclick="Build()">
            
         </div>
      </div>
      <br>
      
   </form>
</div>

@stop

<!-- size flavor  filling top/bottom border decoration message-->