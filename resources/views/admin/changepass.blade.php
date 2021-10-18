@extends('admin.dashboard')


@section('content')

<div class="container">
    <div class="row justify-content-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
        <h4>Change Password</h4><hr>

<form  action="/admin/change" method="post">
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
            <label class="font-weight-bold">Current Password</label>
            <input type="password" value="{{old('CurrentPassword')}}" name="CurrentPassword" placeholder="Current Password" class="form-control">
            @error('CurrentPassword')<span class="text-danger">{{$message}}</span>@enderror
        </div>


        <div class="form-group">
            <label class="font-weight-bold">New Password</label>
            <input type="password" name="NewPassword" value="{{old('NewPassword')}}" placeholder="New Password" class="form-control">
            @error('NewPassword')<span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">Confirm Password</label>
            <input type="password" name="confirm_password" value="{{old('confirm_password')}}" placeholder="Re-enter Password" class="form-control">
            @error('confirm_password')<span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="form-group">
            <input type="submit"  value="Change Password" class="btn btn-primary btn-block">
            <p class="text-center"><a href="forget"> Forgetten password?</a></p>
        </div>
    
    

</form>
</div>
@stop
