@extends('admin.dashboard')


@section('content')
<style>
    img{
        width: 100%;
        height: 50px;
    }
</style>

<script type="text/javascript">
    function confirm1(id) {
        var del=confirm("Do you want to delete user?");//ask the user if want to delete
            if(del){//if yes => delete item
                let stateObj = { id: "100" };
                window.history.replaceState(stateObj,
                    "delete", "/admin/list/delete/"+id);
            }
    }
    </script>
<div class="container">
    <form action="addcategory" method="post">
        <div class="row justify-content-center" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4 class="">Products List</h4><hr>

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

        <div class="table-responsive">
            <table class="table tabled-bordered table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Rank</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $prod)
                <tr>
                    <th>{{ $prod->prod_id }}</th>
                    <th>{{ $prod->name }}</th>
                    <th>{{ $prod->description }}</th>
                    <th>{{ $prod->price }}</th>
                    <th>{{ $prod->cat_name }}</th>
                    <th>{{ $prod->quantity }}</th>
                    <th>{{ $prod->rank }}</th>
                    <th> <img src="{{asset('products/'.$prod->image.'') }}" alt="product"> </th>
                    <th>
                        <a href="list/view/{{ $prod->prod_id }}" class="btn btn-primary">View</a>
                        

                        <a  href="" onclick="confirm1('{{ $prod->prod_id }}')" class="btn btn-danger">Delete</a>

                    </th>
                </tr>
                @endforeach
            </table>
        </div>
        
    </div>
    </form>
</div>

@stop