@extends('clients.layouts.main')
@section('title', 'Oder')
@section('main-content')
<div class="container mt-5">

    <div style="margin-top: 50px;">
        <p> <strong>Fullname: </strong>{{$IdInvoice->name}} </p> 
        <p> <strong>Address: </strong>{{$IdInvoice->address}}</p> 
        <p> <strong>Phone: </strong>{{$IdInvoice->phone}}</p> 
        <p> <strong>Payment_Method: </strong>{{$IdInvoice->payment_method == 1 ? "Bank transfer" : "After receiving the goods"}}</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Cart Area Start -->
                        <form action="{{route('cart.update')}}" method="post" class="form form--cart">
                            @csrf
                            <div class="cart-table table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Images</th>
                                            <th>Product</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($invoiceDetail as $i)
                                        <tr>
                                            <td>
                                                <a href="single-product.html"><img style="width:50px" src="{{asset('storage/'. $i->product->image)}}" height="80px" alt="product"></a>
                                            </td>
                                            <td class="cart-product-price">
                                                <h3><a href="#">{{$i->product->name}}</a></h3>
                                            </td>
                                            <td><strong>{{$i->price}}$</strong></td>
                                            <td>{{$i->quantity}}</td>
                                            <td><strong id="">{{$i->quantity * $i->price}}$</strong></td>
                                            <td><strong class="text-info" id="">Đang chờ</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <h1>Total: {{$IdInvoice->total_price}} $</h1>
                        <span class="text-success">(Shipping fee 1$)</span>
                        <!-- Cart Area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection