
@extends('admin.dashboard')


@section('content')
<div class="container">
    <form action="addcategory" method="post">
        @csrf
    <div class="row justify-content-center" style="margin-top:45px">
        <div class="col-md-6 col-md-offset-4">
            <h4>Category List</h4><hr>

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

                <table class="table table-bordered  table-striped text-center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($category as $cat)
                        <tr>
                            <th>{{ $cat->cat_id }}</th>
                            <th>{{ $cat->cat_name }}</th>
                            <th> 
                                <a href="deletecat/{{ $cat->cat_id }}" class="btn btn-danger">Delete</a>
                                <a href="viewcat/{{ $cat->cat_id }}" class="btn btn-primary">View</a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
    </div>

    <div class="row justify-content-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Insert Category</h4><hr>

            <div class="form-group">
                <label class="font-weight-bold">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter category name" value="{{ old('name') }}">
                @error('name')<span class="text-danger">{{ $message }} </span>@enderror
            </div>
            
            <button type="submit" class="btn btn-block btn-primary">Insert</button>

            
        </div>
    </div>
</form>
</div>
@stop

