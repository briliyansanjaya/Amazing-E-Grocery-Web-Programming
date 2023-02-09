@extends('layouts.main')
@include('components.header')

@section('container')
@include('components.navbar')
    <div class="container justify-content-center pt-5 min-vh-100">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('purchase'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('purchase') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-3 shadow bg-white rounded">
            <div class="m-3">
                <div class="row mx-auto">
                    <div class="border border-secondary col-md-4 p-0 m-0">
                        {{-- @dd($product); --}}
                        <img src="{{ asset('storage/images/'.$product->productphoto) }}" class="img-fluid" alt="product">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">{{ $product->productname }}</h3>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Detail</small></p>
                                <p class="col-lg-10 card-text">{{ $product->productdetail }}</p>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Price</small></p>
                                <p class="col-lg-10 card-text">IDR {{ $product->productprice }}</p>
                            </div>
                            <div>
                                <form action="{{ route('addToCart', $product->ProductID) }}" method="POST" enctype="multipart/form-data" class="mb-3">
                                    @csrf
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text"><small class="text-muted">Qty Cart</small></p>
                                        <div class="d-flex col-lg-10 justify-content-between">
                                            <div class="col-lg-11">
                                                <input type="number" name="quantity" class="form-control" id="quantity" min="1" required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form action="{{ route('purchase', $product->ProductID) }}" method="POST" enctype="multipart/form-data" class="d-inline">
                                    @csrf
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text"><small class="text-muted">Qty Purchase</small></p>
                                        <div class="d-flex col-lg-10 justify-content-between">
                                            <div class="col-lg-11">
                                                <input type="number" name="quantity" class="form-control" id="quantity" min="1" required>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button type="submit" class="btn btn-outline-success" onclick="return confirm('Are you sure want to Purchase this product?')"><i class="bi bi-bag-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-2">
                                    <a href="/home"><button type="button" class="btn btn-outline-danger">Back</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('components.footer')
@endsection
