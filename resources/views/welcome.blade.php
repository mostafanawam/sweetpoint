

$product=DB::table("products")
// ->join("categories", "products.cat_id", "categories.cat_id")
 ->where('prod_id','32')
 ->get();

 //session()->pull('products', 'dsadasdas');

 foreach($product as $prod){
     session()->push('cart.name',$prod->name);
     session()->push('cart.description',$prod->description);
     session()->push('cart.qty',1);
     session()->push('cart.price',$prod->price);
     session()->push('cart.image',$prod->image);
 }
 //session()->pull('cart', 'default'); delete  cart session 



 //return $data;
        
        
 //session(['key' => 'value']);   // Store a piece of data in the session...
 //$data = session()->all();
 //$request->session()->push('user.teams', 'developers');

   <!--<h6 class="text-uppercase mb-1">Categories</h6>
       <ul class="list-unstyled components mb-3">
          @foreach ($category as $cat)
          <li>
             <a href="/{{// $cat->cat_name }}">{{ $cat->cat_name }}</a>
          </li>
          @endforeach
          
       </ul>-->