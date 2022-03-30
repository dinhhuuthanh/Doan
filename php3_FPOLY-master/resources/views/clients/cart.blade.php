@extends('clients.layouts.main')
@section('title','Cart')
@section('main-content')
<?php
$total = 0;

if (!empty($cart)) {
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
}

?>

<div class="breadcumb-area grey-color">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcumb">
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link" href="index-2.html">Home</a></li>
                    <li class="sadia-breadcumb"><a class="sadia-breadcumb-link current" href="cart.html">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrapper">
    @if(!empty($cart))
    <div class="cart-area ptb--30">
        <div class="container">
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
                                                <th>remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $key => $item)
                                            <tr>
                                                <td>
                                                    <a href="single-product.html"><img style="width:50px" src="{{asset('storage/' .$item['image'])}}" height="80px" alt="product"></a>
                                                </td>
                                                <td class="cart-product-price">
                                                    <h3><a href="#">{{$item['name']}}</a></h3>
                                                </td>
                                                <td><strong>{{$item['price']}}$</strong></td>
                                                <td>
                                                    <input style="width: 26%;border: 1px solid #a6a6a6;" type="number" name="{{$key}}" class="form-group" id="{{$key}}" oninput="quantity_<?php echo $key ?>()" min="1" value="{{$item['quantity']}}">
                                                    <script>
                                                        function quantity_<?php echo $key ?>() {

                                                            var qty = document.getElementById("{{$key}}").value;
                                                            document.getElementById("tt_{{$key}}").innerText = qty * <?php echo $item['price']; ?> + "$"

                                                        }
                                                    </script>
                                                </td>
                                                <td><strong id="tt_{{$key}}">{{$item['price'] * $item['quantity']}}$</strong></td>
                                                <td><a href="{{route('cart.remove', ['id'=> $key])}}"><i class="fa fa-trash remove"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button style="width: 20%;
    float: right;" type="submit" class="btn btn-style-3 btn--fullwidth mt--10">Update Cart</button>
                                </div>
                            </form>
                            <!-- Cart Area End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Checkout Area Start -->
                <div class="checkout-area ptb--30">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="custom-title">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkout-form">
                                <form action="{{route('invoice.add')}}" method="Post" class="form" novalidate>
                                    @csrf
                                    <div class="form-row mb--30">
                                        <div class="sadia-form-group col-md-12">
                                            <input type="text" name="name" class="sadia-input-form" value="{{old('name')}}" placeholder="Fullname">
                                        </div>
                                        @error('name')
                                        <span class="text-danger" style="margin-left: 5px;">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-row mb--30">
                                        <div class=" col-md-6">
                                            <input type="text" name="phone" class="sadia-input-form" value="{{old('phone')}}" placeholder="Phone"> <br>
                                            @error('phone')
                                            <div class="text-danger" style="margin-left: 5px;">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class=" col-md-6">
                                            <input type="email" name="email" id="bill_email" value="{{old('email')}}" class="sadia-input-form" placeholder="Email Address *">
                                            @error('email')
                                            <span class="text-danger" style="margin-left: 5px;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row mb--30">
                                        <div class=" col-md-6">
                                            <input type="text" name="address" class="sadia-input-form" value="{{old('address')}}" placeholder="Address">
                                            @error('address')
                                            <span class="text-danger" style="margin-left: 5px;">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class=" col-md-6">
                                            <select class="country_select" name="payment_method">
                                                <option value="1">Bank transfer</option>
                                                <option value="2">After receiving the goods</option>
                                            </select>
                                            @error('payment_method')
                                            <span class="text-danger" style="margin-left: 5px;">{{$message}}</span>
                                            @enderror
                                        </div>

                                    </div>


                                    <div class="form-row">
                                        <div class="sadia-form-group col-12">
                                            <textarea class="sadia-input-form sadia-input-form--textarea" id="orderNotes" name="description" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="sadia-form-group mb--0 col-6">
                                            <input type="hidden" name="total_price" value="{{$total + 1}}">
                                        </div>
                                        <div class="sadia-form-group mt--10 col-6">
                                            <button type="submit" class="btn btn-style-3 btn--fullwidth">Place Order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-md--30">
                            <div class="custom-title">
                                <h2>Cart Total</h2>
                            </div>
                            <div class="order-details mb--30">
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th class="f-right">Total</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        @if(!empty($cart))
                                        @foreach($cart as $cartItem)
                                        <tr class="cart-subtotal">
                                            <td>{{$cartItem['name']}}</td>
                                            <td class="f-right">${{$cartItem['price'] * $cartItem['quantity']}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <tr class="cart-subtotal">
                                            <td>Shipping</td>
                                            <td class="f-right">$1</td>
                                        </tr>

                                        <tr class="order-total">
                                            <td>Order Total</td>
                                            <td class="f-right">${{$total +1}}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkout Area End -->
            </div>
        </div>
    </div>
</div>
@else
<center> <img src="{{asset('clients/assets/img/cart.png')}}" alt="">
</center>
@endif
@endsection