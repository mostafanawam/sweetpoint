@extends('admin.dashboard')


@section('content')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

<div class="container">
    <form method='post' enctype="multipart/form-data" action="upload">
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
        
        <div class="rowtable">
            @foreach ($files as $image)
            <?php
            $row=explode("/",$image);
            //echo $row[2];
            ?>
            <div class="column">
                <img class="img"  src="{{asset('storage/gallery/'.$row[2].'') }}" onclick='display(this.src)'>
            </div>
            @endforeach
        </div>
<br>
        <div class="row">

            <div class="form-group col-lg-4">
                    <input class="custom-file" type=file name='image'>
                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
            </div>
            <div class=" form-group col-lg-2">
                <input type='submit'  value='Upload'  class="btn btn-primary">
            </div>

            </form>

            <div class=" form-group col-lg-2">
                <form action="/admin/gallery/delete" method="POST">
                        @csrf
                    <input type='submit'  value='Delete'  class=" btn btn-danger" id='btnDelete' disabled>
                    <input type='hidden' name ='temp_photo' id ='txtPhotoName'>
                </form>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <img src="" id="photo" width='300' >
        </div>

    <script>

            function display(src){//src: source of the clicked image
                //display the image with width = 300px
                document.getElementById("photo").src = src;
                //store the name of image in order send it to the Server
                //when the delete button is clicked
                document.getElementById("txtPhotoName").value = src;
                //activate the delete button
                document.getElementById("btnDelete").disabled = false;
            }

    </script>
</div>


@stop