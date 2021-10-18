@extends('admin.dashboard')


@section('content')

<div class="container">
    <div class="row justify-content-center" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Order Details</h4><hr>
        </div>
    
        
        <div class="table-responsive">
            <p>Customer name:</p>
            <p>Address:</p>
            <table class="table tabled-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <th>{{ $order->name }}</th>
                        <th>{{ $order->qty }}</th>
                        <th>{{ $order->price }}</th>
                        <th>{{ $order->qty*$order->price }}</th>
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>{{ $qty }}</th>
                            <th></th>
                            <th >{{ $price }} L.L</th>
                        </tr>
                </tbody>
                
                </tfoot>
            </table>
        </div>
        
            <div class="col-md-4 col-md-offset-4"><br>
                <form action="" method="post">@csrf
                    <button class="btn btn-primary btn-block" type="submit">Print</button>
                </form>
            </div>
        
    </div>

</div>
@stop