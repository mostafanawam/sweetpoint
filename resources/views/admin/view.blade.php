@extends('admin.dashboard')




@section('content')
<style>
    img{
        width: 100%;
        height: 50px;
    }
</style>
<div class="container">
    <div class="row justify-content-center" style="margin-top:45px">
    <div class="col-md-4 col-md-offset-4">
            <h4>Edit Products</h4><hr>

<form  action="/admin/updateprod" method="post">
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
            @foreach ($product as $p)
                <input type="text" value="{{$p->name}}" name="name" class="form-control">
            @error('name')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group col-lg-3">
            <label class="font-weight-bold">Image</label>
            <img src="{{asset('products/'.$p->image.'') }}" alt="">
            @error('image')<span class="text-danger">{{ $message }} </span>@enderror
        </div>
    </div>

<input type="hidden" name="id" value="{{ $p->prod_id }}">

        <div class="row justify-content-center" >
            <div class="form-group col-lg-6">
                    <label class="font-weight-bold">Description</label>
                    <textarea name="description" style="width: 100%" rows="1" >
                        {{$p->description}}
                    </textarea>
                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                
        </div>
        <div class="row justify-content-center" >
        <div class="form-group col-lg-3">
            <label class="font-weight-bold">Price</label>
            <input type="test" class="form-control" name="price" placeholder="Enter product price" value="{{$p->price}}">
            @error('price')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group col-lg-3">
            <label class="font-weight-bold">Rank</label>
            <input type="text" class="form-control" name="rank" placeholder="Enter product rank" value="{{$p->rank}}">
            @error('rank')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>

        
        <div class="row justify-content-center" >
            <div class="form-group col-lg-3">
                <label class="font-weight-bold">Quantity</label>
                    <input type="number" class="form-control" name="qty" placeholder="Enter product quantity" value="{{$p->quantity}}">
                @error('qty')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group col-lg-3">
                <label class="font-weight-bold">Category</label>
                <select class="custom-select" name="category">
                    <option value="" disabled selected>Choose Category</option>
                    @foreach ($catlist as $list)
                    @if ($list->cat_id==$p->cat_id)
                    <option value="{{ $p->cat_id }}" selected>{{ $p->cat_name }} </option>
                    @else
                    <option value="{{ $list->cat_id }}" >{{ $list->cat_name }} </option>
                    @endif
                    
                    @endforeach
                </select>
                @error('category')<span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
@endforeach
        <div class="row justify-content-center" >
            <div class="form-group col-lg-3">
                <input type="submit"  value="Update" class="btn btn-primary btn-block">
            </div> 
        </div>
</form>
</div>
@stop
