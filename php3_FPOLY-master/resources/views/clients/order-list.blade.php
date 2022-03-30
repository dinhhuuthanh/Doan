@extends('clients.layouts.main')
@section('title', 'List Order')
@section('main-content')
<div class="container">
    <h1 class="text-center pt--60">Purchase history</h1>
    <p class="text-center">Please enter the phone number to check your order</p>
    <form action="{{route('show.order')}}" method="POST">
        @csrf
        <div class="row" style="width: 507px;
    margin-left: auto;
    margin-right: auto;">
            <div class="col-md-9">
                <input type="number" style="height: 50px;" name="phone" class="form-control w-20" id="">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn--large btn-style-3">Search</button>
            </div>
        </div>

    </form>
</div>
@if(isset($invoice))
<div class="container pt--60">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <!-- Cart Area Start -->
                    <div class="cart-table table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Shipping</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoice as $i)
                                <tr>
                                    <td>{{$i->id}}</td>
                                    <td>
                                        @foreach($invoiDl as $id)
                                        @if($i->id == $id->invoice_id)
                                        <p> <img src="{{asset('storage/' . $id->product->image)}}" style="width: 58px;" alt=""> <strong>Name:{{$id->product->name}} (X {{$id->quantity}})</strong> <br> <strong>Price: {{$id->price}}</strong> $</p>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td> <strong>1$</strong> </td>
                                    <td><strong>{{$i->total_price}}$</strong></td>
                                    <td>
                                        @if($i->status == 1)
                                        <strong class="text-info" id="">Đang chờ</strong>
                                        @elseif ($i->status ==2)
                                        <strong class="text-info" id="">Đang giao hàng</strong>
                                        @elseif ($i->status ==3)
                                        <strong class="text-success" id="">Thành công</strong>
                                        @else
                                        <strong class="text-danger" id="">Đã hủy</strong>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Area End -->
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection