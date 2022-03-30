@extends('admin.layouts.main')
@section('title', 'List Invoices')
@section('namePage', 'Invoice')
@section('main-content')
<div class="content ">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Invoices</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Payment Method</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invois as $i)
                        <tr>
                            <td>{{(($invois->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                            <td>{{$i->name}}</td>
                            <td>{{$i->phone}}</td>
                            <td>{{$i->address}}</td>
                            <td>{{$i->payment_method == 1 ? "Bank transfer" : "Pay after recieve"}}</td>
                            <td>{{$i->total_price}}$</td>
                            <td>
                                @if($i->status == 1)
                                <strong class="text-info" id="">Waiting</strong>
                                @elseif ($i->status ==2)
                                <strong class="text-info" id="">Transport.</strong>
                                @elseif ($i->status ==3)
                                <strong class="text-success" id="">Successful</strong>
                                @else
                                <strong class="text-danger" id="">Cancel</strong>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{route('invoice.remove', ['id'=> $i->id])}}" class="dropdown-item"> <i class="fas fa-trash-alt" style="padding-right: 10px;"></i>Delete</a>
                                            <a href="{{route('invoice.edit', ['id'=> $i->id])}}" class="dropdown-item"> <i class="far fa-edit" style="padding-right: 10px;"></i>Edit</a>
                                            <a href="{{route('invoice.detail', ['id'=> $i->id])}}" class="dropdown-item"> <i class="far fa-edit" style="padding-right: 10px;"></i>Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <nav class="mt-4" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{$invois->links()}}
                </ul>
            </nav>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Filter Products</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                        <div>Filter</div>
                        <div class="bi bi-chevron-down"></div>
                    </div>
                    <form class="collapse show mt-4" method="GET" id="keywordsCollapseExample">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Seach...">
                        </div>
                        <div class="mt-3 t-right" style="float: right">
                            <button type="submit" class="btn btn-outline-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection