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
    <div class="min-vh-100">
        <div class="d-flex justify-content-center pt-5 pb-5">
            <div class="karturegister card mb-4">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Register</h5>
                </div>

                <form class="container p-4" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" placeholder="Enter Your First Name" value="{{ old('firstname') }}">
                    </div>
                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Last Name" value="{{ old('lastname') }}">
                    </div>
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Re-Type Your Password">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Female
                            </label>
                        </div>
                    </div>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Display Picture</label>
                        <input class="form-control" name="picture" type="file" id="formFile">
                    </div>
                    @error('picture')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Role</label>
                        <div>
                            <select class="form-select" name="RoleID" id="floatingSelectGrid">
                                <option  value="" label="Choose Your Role" selected="selected">Choose Role</option>
                                <option value="1">User</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                    </div>
                    @error('RoleID')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 d-grid gap-2 col-5 mx-auto">
                        <button type="submit" class="btn btn-outline-success">Register</button>
                    </div>

                    <div>
                        <label for="formGroupExampleInput2" class="form-label">Have an account?</label>
                        <span><a href="/login" class="text-decoration-none">Login Here</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('components.footer')
@endsection
