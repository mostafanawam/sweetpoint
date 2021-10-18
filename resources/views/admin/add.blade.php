
@extends('admin.dashboard')


@section('content')
<div class="container">
         <div class="row justify-content-center" style="margin-top:45px">
            <div class="col-md-4">
                  <h4>Insert product</h4><hr>
                  <form action="additem" method="post" enctype="multipart/form-data">
                     @csrf
                     
                  @if(Session::get('success'))
                     <div class="alert alert-success text-center">
                        {{ Session::get('success') }}
                     </div>
                  @endif

                  @if(Session::get('fail'))
                     <div class="alert alert-danger text-center">
                        {{ Session::get('fail') }}
                     </div>
                  @endif
            </div> 
         </div>

         <div class="row justify-content-center" >
            <div class="form-group col-lg-3">
                  <label class="font-weight-bold">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter product name" value="{{ old('name') }}">
                  @error('name')<span class="text-danger">{{ $message }} </span>@enderror
            </div>
            <div class="form-group col-lg-3">
               <label class="font-weight-bold">Image</label>
               <input type="file" class="form-control" name="image" value="">
               @error('image')<span class="text-danger">{{ $message }} </span>@enderror
            </div>
         </div>

         <div class="row justify-content-center" >
            <div class="form-group col-lg-6">
               <label class="font-weight-bold">Description</label>
               <textarea name="description" style=width:100%; rows="1" >
                  {{ old('description') }}
               </textarea>
               @error('description')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
           
         </div>

         <div class="row justify-content-center" >
         <div class="form-group col-lg-3">
            <label class="font-weight-bold">Rank(0 => best sellers)</label>
            <input type="text" class="form-control" name="rank" value="{{ old('rank') }}" placeholder="Enter product rank">
            @error('rank')<span class="text-danger">{{ $message }} </span>@enderror
         </div>

         <div class="form-group col-lg-3">
            <label class="font-weight-bold">Category</label>
               <select class="custom-select" name="category">
                  <option value="" disabled selected>Choose Category</option>
                  @foreach ($cat as $c)
                     <option value="{{ $c->cat_id }}">{{ $c->cat_name }}</option>
                  @endforeach
               </select>
            @error('category')<span class="text-danger">{{ $message }}</span> @enderror
         </div>  
       </div>


         <div class="row justify-content-center" >
            <div class="form-group col-lg-3">
                  <label class="font-weight-bold">Price</label>
                  <input type="test" class="form-control" name="price" placeholder="Enter product price" value="{{ old('price') }}">
                  @error('price')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group col-lg-3">
                  <label class="font-weight-bold">Quantity</label>
                  <input type="number" class="form-control" name="qty" placeholder="Enter product quantity" value="{{ old('qty') }}">
                  @error('qty')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
         </div>

         <div class="row justify-content-center" >
            <div class="form-group col-lg-3">
               <button type="submit" class="btn btn-block btn-primary">Insert</button>  
            </div> 
         </div>
               
            </form>
      </div>
   </div>
</div>
@stop

