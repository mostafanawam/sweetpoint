
@extends('admin.dashboard')


@section('content')
<div class="container">
   <div class="row justify-content-center" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
            <h4>Register | New admin</h4><hr>
            <form action="new_admin" method="post">
               @csrf

            @if(Session::get('success'))
               <div class="alert alert-success">
                  {{ Session::get('success') }}
               </div>
            @endif

            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
            
            <div class="form-group">
                  <label class="font-weight-bold">Firstname</label>
                  <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" value="{{ old('firstname') }}">
                  <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
               <label class="font-weight-bold">Lastname</label>
               <input type="text" class="form-control" name="lastname" placeholder="Enter lastname" value="{{ old('lastname') }}">
               <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
         </div>

            <div class="form-group">
                  <label class="font-weight-bold">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                  <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter password">
                  <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

               <button type="submit" class="btn btn-block btn-primary">register</button>
            </form>
      </div>
   </div>
</div>
@stop

