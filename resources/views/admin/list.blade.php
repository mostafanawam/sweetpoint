@extends('admin.dashboard')
@section('content')
<style>
    img{
        width: 100%;
        height: 50px;
    }
</style>
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
        </div>
    </form>
    <livewire:products-table/>
</div>
@stop