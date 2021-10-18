@extends('admin.dashboard')


@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
        <h4>Orders List</h4><hr>
        </div>
        <div class="table-responsive">
            <table class="table tabled-bordered table-striped text-center">
                <tr>
                    <th>OrderID</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Pickup</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <th>{{ $order->orderid }}</th>
                    <th>{{ $order->firstname }} {{ $order->lastname }}</th>
                    <th>{{ $order->total }} L.L</th>
                    <th>{{ $order->pickup }}</th>
                    <th>{{ $order->date }}</th>
                    <th>{{ $order->note }}</th>
                    <th>
                        <a href="/admin/order/{{ $order->orderid }}" class="btn btn-primary">details</a>
                    </th>
                   
                </tr>
                @endforeach
            </table>
        </div>
        
    </div>
</div>
@stop