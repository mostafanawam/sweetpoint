@extends('admin.dashboard')




@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:45px">
    <div class="col-md-4 col-md-offset-4">
            <h4>Edit Categories</h4><hr>

    
    <form  action="/admin/updatecat" method="post">
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


    <div class="form-group">
        <label class="font-weight-bold">Name</label>
        <input type="text" value="{{$cat->cat_name}}" name="name" class="form-control">
        @error('name')<span class="text-danger">{{$message}}</span>@enderror
    </div>

    <div class="form-group">
        <input type="submit"  value="Update" class="btn btn-primary btn-block">
        
    </div>

</form>
</div>
@stop
