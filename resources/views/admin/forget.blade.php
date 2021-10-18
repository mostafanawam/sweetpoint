<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center" style="margin-top:15%">
        <div class="col-md-4 col-md-offset-4">
            <h4>Forget Password | Reset</h4><hr>
            <form action="/admin/email" method="post">
            @csrf

            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <div class="form-group">
                <label>Please enter your username or email address. You will receive a link to create a new password via email.</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your address" value="{{ old('email') }}">
                @error('email')<span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>