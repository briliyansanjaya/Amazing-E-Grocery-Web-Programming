@extends('layouts.main')
@include('components.header')

@section('container')
@include('components.navbar')
    <div class="container min-vh-100">
        <div class="d-flex justify-content-center pt-2 pb-5">
            <div class="card" style="width: 800px">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Profile</h5>
                </div>
                <form class="container" action="{{ route('updateProfile', $user->UserID) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="container px-3">
                        <div class="d-flex justify-content-center pb-2 pt-3">
                            <div class="border border-secondary col-md-4 p-0 m-0">
                                {{-- @dd($product); --}}
                                <img src="{{ asset('storage/images/'.$user->picture) }}" style="width: 250px; height: 280px;" class="img-fluid" alt="profile">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" value="{{ $user->firstname }}">
                        </div>
                        @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="formGroupExampleInput" value="{{ $user->lastname }}">
                        </div>
                        @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput2" value="{{ $user->email }}">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Role</label><br>
                            <input type="text" name="RoleID" class="form-control" id="formGroupExampleInput2" value="{{ $user->role->rolename }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your New Password">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Re-Type Your New Password">
                        </div>
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                            @if($user->gender == 'Male')
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" checked>
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
                            @else
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Female
                                </label>
                            </div>
                            @endif
                        </div>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-4">
                            <label for="formFile" class="form-label">Display Picture</label>
                            <input class="form-control" name="picture" type="file" id="formFile">
                        </div>
                        @error('picture')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('components.footer')
@endsection
