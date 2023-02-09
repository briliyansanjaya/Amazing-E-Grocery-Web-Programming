@extends('layouts.main')
@include('components.header')

@section('container')
@include('components.navbar')
    <div class="container pb-5 min-vh-100">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('message'))
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex row justify-content-between pb-3">
            @if ($products->isNotEmpty())
            @foreach ($products as $product)
                <div class="pt-3" style="width: 264px">
                    <a href="{{ route('productdetail', $product->ProductID) }}" class="text-decoration-none text-black">
                        <div class="card" style="border-width: 1px; border-color: grey">
                            <img src="{{ asset('storage/images/'.$product->productphoto) }}" class="rounded-top" alt="Product">
                            <div class="card-body" style = 'margin-bottom: -5px;'>
                                <h6 class="fw-normal ">{{Str ::limit($product->productname, 20)}}</h6>
                                <h6 class="card-text fw-bold">IDR {{ $product->productprice }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @else
                <div class="container text-center mt-3">
                    <td class="align-middle"><h5>There is no Product!</h5></td>
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-center pb-5">
            {{ $products->links() }}
        </div>
    </div>
@include('components.footer')
@endsection
