<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Sweet Point | Login</title>
      <link rel = "icon" href = "{{ asset('images/logo.jpg') }}" type = "image/x-icon">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <div class="row justify-content-center" style="margin-top:15%">
      <div class="col-md-4 col-md-offset-4">
         <h4>Login | Admin</h4><hr>
         <form action="auth" method="post">
            @csrf

            @if(Session::get('fail'))
               <div class="alert alert-danger text-center">
                  {{ Session::get('fail') }}
               </div>
            @endif

            <div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
               <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
               <label>Password</label>
               <input type="password" class="form-control" name="password" placeholder="Enter password">
               <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            
            <p class="text-center"><a href="forget" class="text-center">Forgotten Password?</a></p>
         </form>
      </div>
   </div>
</div>
</body>
</html>