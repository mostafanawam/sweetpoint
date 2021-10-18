@extends('shop.layout')

@section('nav')
<title>Sweet Point | Contact us</title>
<li class="nav-item ">
   <a class="nav-link " href="/shop/home">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/products">Products</a>
</li>
<li class="nav-item">
   <a class="nav-link " href="/shop/customize">Customize Order</a>
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
   <a class="nav-link active" href="/shop/contact">Contact Us</a>
</li>
@stop

@section('main')
<div class="container">
    <h2 class="title-sell">Contact Us</h2>
</div>
<div class="container">

   <div class="row no-gutters mb-5">
      <div class="col-md-6">
         <div class="contact-wrap w-100 p-md-5 p-4">
          
            <div id="form-message-warning" class="mb-4"></div> 
            <form  id="contactForm" name="contactForm" class="contactForm">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                     </div>
                  </div>
                  <div class="col-md-6">  
                     <div class="form-group"> 
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        <span class="text-danger" id="emailalert"></span>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group text-center">
                        <input type="button" value="Send Message" class="btn btn-login" onclick="Contact()">
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

