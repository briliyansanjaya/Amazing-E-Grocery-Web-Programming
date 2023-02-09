@extends('layouts.main')
<div class="d-flex justify-content-center shadow bg-body-tertiary bg-white sticky-top">
    <nav class="navbar navbar-light">
        <a class="text-decoration-none" href="/">
            {{-- <img src="{{ asset('storage/images/bantu_kios-01.png') }}" width="300" height="65" alt="Logo"> --}}
            <h1 class="text-success fw-bold">Amazing E-Grocery</h1>
        </a>
    </nav>
</div>

@section('container')
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 860px;">
        <div class="text-center">
            <div class="d-flex pb-2">
                <h1 class="pe-2">Welcome to</h1>
                <h1 class="text-success">Amazing E-Grocery</h1>
            </div>
            <h3>Find and Buy Your Grocery Here!</h3>
            <div class="d-flex justify-content-center pt-3">
                <a href="/login"><button type="button" class="btn btn-outline-success me-2">Login</button></a>
                <a href="/register"><button type="button" class="btn btn-outline-secondary ">Register</button></a>
            </div>
        </div>
    </div>
@include('components.footer')
@endsection
