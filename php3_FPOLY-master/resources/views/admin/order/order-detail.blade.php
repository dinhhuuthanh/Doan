@extends('admin.layouts.main')
@section('title', 'Invoices Detail')
@section('namePage', 'Invoice Detail')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <H2>Customer information</H2>
            <div class="mt-5">
                <p> <strong>Fullname: </strong>{{$invoice->name}} </p>
                <p> <strong>Phone: </strong>{{$invoice->phone}} </p>
                <p> <strong>Email: </strong>{{$invoice->email}} </p>
                <p> <strong>Address: </strong>{{$invoice->address}} </p>
                <p> <strong>Payment Method: </strong>{{$invoice->payment_method == 1 ? "Bank transfer" : "Pay after recieve"}} </p>
                <p> <strong>Description: </strong>{{$invoice->description == '' ? "Null" : $invoice->description}} </p>
            </div>
            <hr>
            <h3>Total: {{$invoice->total_price}} $</h3>
            <span class="text-success">(Ship fee 1$)</span>
        </div>
        <div class="col-md-8">
            <h2>Invoice details</h2>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>Name product</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoiceDetail as $i)
                        <form action="{{route('invoiceDetail.updateQuantity', ['id'=> $i->product_id,'id_invoi' => $i->invoice_id])}}" method="POST">
                            @csrf
                            <tr>
                                <td>{{$i->product->name}}</td>
                                <td>
                                    <img src="{{asset('storage/'. $i->product->image)}}" class="rounded" width="50px" alt="">
                                </td>
                                <td>
                                    <input style="width:79px" type="number" min="1" class="form-control" name="quantity" value="{{$i->quantity}}">
                                </td>
                                <td>{{$i->price}}$</td>
                                <td style="float: right;padding-top: 37px">
                                    <a class="btn btn-outline-danger" href="{{route('invoiceDetail.remove', ['id' => $i->product_id, 'id_invoi' => $i->invoice_id])}}">
                                        <i class="far fa-trash-alt text-danger ext-center"></i>
                                    </a>
                                    <button type="submit" class="btn btn-outline-info"><i class="far fa-edit"></i></button>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
                <div class="container">

                    <form action="{{route('invoiceDetail.addpro', ['id'=>$invoice->id])}}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Add products to invoices</label>

                                    <select class="js-example-basic-single" name="pro_id">
                                        <option value="0">----------Choose Product----------</option>
                                        @foreach($products as $p)
                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button style="margin-top: 27px;
    height: 39px;" type="submit" class="btn btn-outline-primary">Add Product</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagescript')
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/dist/js/examples/select2.js')}}"></script>
<!-- CKEditor -->
<script src="{{asset('admin/libs/ckeditor5/ckeditor.js')}}"></script>

<!-- Examples -->
<script src="{{asset('admin/dist/js/examples/ckeditor.js')}}"></script>
@endsection