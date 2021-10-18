@extends('shop.layout')

@section('nav')
<title>Sweet Point | Customize</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/products">Products</a>
</li>
<li class="nav-item">
   <a class="nav-link active" href="/shop/customize">Customize Order</a>
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
<link rel="stylesheet" href="{{ asset('css/customiza.css') }}">
<div class="container" id="main">
   <form action="" method="post" enctype="multipart/form-data">@csrf
  
   <h2 class="title-sell">Build Your Own</h2>
   

   

   <div class=" alert-danger text-lg-center" id="alert"></div>

   <fieldset class="form-group p-3 border_color">
      <legend class="w-auto px-2">Cake Information</legend>
   <div class="row">
      <div class="form-group col-lg-3">
         <h5>Choose cake size:</h5>
         <div>
            <input type="radio" name="size" value="size1" id="size1">
            <label for="size1">6" Round(8-10)</label>
         </div>
         <div>
            <input type="radio" name="size" value="size2" id="size2">
            <label for="size2">8" Round(10-12)</label>
         </div>
         <div>
            <input type="radio" name="size" value="size3" id="size3">
            <label for="size3">10" Round(up to 20)</label>
         </div>
         <div>
            <input type="radio" name="size" value="size4" id="size4">
            <label for="size4">1/4 sheet cake(up to 30)</label>  
         </div>
         <div>
            <input type="radio" name="size" value="size5" id="size5">  
            <label for="size5">1/2 sheet cake(up to 60)</label>
         </div>
         <div>
            <input type="radio" name="size" value="size6" id="size6">
            <label for="size6">Full sheet cake(up to 120)</label>
         </div>
      </div>
      <div class="form-group col-lg-3">
         <h5>Choose cake flavor:</h5>
         <div>
            <input type="radio" name="flavor" value="Chocolate" id="flavor1">
            <label for="flavor1">Chocolate</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="White" id="flavor2">
            <label for="flavor2">White</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="Vanilla" id="flavor3">
            <label for="flavor3">Vanilla</label>
         </div>
         <div>
            <input type="radio" name="flavor" value="Marble" id="flavor4">
            <label for="flavor4">Marble</label>
         </div>
      </div>
      <div class="form-group col-lg-3">
         <h5>Choose cake filling:</h5>
         <div>
            <input type="radio" name="filling" value="Chocolate Cream" id="filling1">
            <label for="filling1">Chocolate Cream</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Vanilla" id="filling2">
            <label for="filling2">Vanilla</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Fruits" id="filling3">
            <label for="filling3">Fruits</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Nuts" id="filling4">
            <label for="filling4">Nuts</label>
         </div>
         <div>
            <input type="radio" name="filling" value="Peanut Butter" id="filling5">
            <label for="filling5">Peanut Butter</label> 
         </div>
      </div>
      <div class="form-group col-lg-3 ">
         <h5>Choose cake icing:</h5>
         <div>
            <input type="radio" name="icing" value="Fruits" id="icing1">
            <label for="icing1">Fruits</label> 
         </div>
         <div>
            <input type="radio" name="icing" value="Chocolate Cream" id="icing2">
            <label for="icing2">Chocolate Cream</label> 
         </div>
         <div>
            <input type="radio" name="icing" value="Vanilla Cream" id="icing3">
            <label for="icing3">Vanilla Cream</label>
         </div>
         <div>
            <input type="radio" name="icing" value="Whipped Cream" id="icing4">
            <label for="icing4">Whipped Cream</label>
         </div>
         <div>
            <input type="radio" name="icing" value="Sugar Paste" id="icing5">
            <label for="icing5">Sugar Paste</label>
         </div>
      </div>
   </div>
</fieldset>
<br>
   <fieldset class="form-group  p-3 border_color">
      <legend class="w-auto px-2">Additional Information</legend>
   <div class="row">
      <div class="form-group col-lg-4">
         <h5>Cake message:</h5>
         <textarea name="" id="message" style="width:100%;"" class='form-control'></textarea>
      </div>
      <div class="form-group col-lg-4">
         <h5>Special instructions:</h5>
         <textarea name="" id="note" style="width:100%;" class="form-control"></textarea>
      </div>
      <div class="form-group col-lg-4">
         <h5>Attach design image:</h5>
         <input type="file" name="image" id="image" class="form-control">
      </div>
   </div>
</fieldset>


<br>
 
   <fieldset class="form-group  p-3 border_color">
      <legend class="w-auto px-2">Cusomer Information</legend>
      <div class="row">
         <div class="form-group col-lg-6">
            <h5>Fullname:</h5>
            <input type="text" id="name" class="form-control" placeholder="Enter your name">
         </div>
         <div class="form-group col-lg-6">
            <h5>Phone:</h5>
            <input type="tel" id="phone" class="form-control" placeholder="Enter 8-digits phone number">
         </div>
         
      </div>
      
   </fieldset>
   <p>NOTE: <br>
   -Confirmation message including the price will be sent to your number entered above as soon as possible.</p>
   <br>
      <div class="row justify-content-center">      
         <div class="form-group col-lg-3">
            <input type="button" class="btn btn-outline btn-block" value="Build" onclick="Build()">
            
         </div>
      </div>
      <br>
      
   </form>
</div>

@stop

<!-- size flavor  filling top/bottom border decoration message-->