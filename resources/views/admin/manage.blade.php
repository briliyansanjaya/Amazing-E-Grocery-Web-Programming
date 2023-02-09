@extends('layouts.main')
@include('components.header')

@section('container')
@include('components.navbar')
    <div class="container min-vh-100 d-flex justify-content-center pt-2">
        <div class="marginbottom container pb-5 p-0 m-0">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if($users->count() > 0)
                @foreach ($users as $user)
                <div class="card mb-3 px-3">
                    <div class="d-flex justify-content-between py-2">
                        <h5 class="pt-2">{{ $user->firstname }} {{ $user->lastname }}</h5>
                        <div class="d-flex ">
                            <form action="{{ route('updateRole', $user->UserID) }}" class="pb-0 mb-0" style="display: flex" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="me-2">
                                    <select class="form-select" name="RoleID" id="floatingSelectGrid">
                                        @if ($user->role->rolename == 'User')
                                            <option  value="1" selected="selected">{{ $user->role->rolename }}</option>
                                            <option value="2">Admin</option>
                                        @else
                                            <option  value="2" selected="selected">{{ $user->role->rolename }}</option>
                                            <option value="1">User</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-outline-success me-2" type="submit" id="button-addon2"><i class="fas fa-save"></i></button>
                                </div>
                            </form>
                            <form action="/manage/delete/{{ $user->UserID }}" class="pb-0 mb-0"  style="display: flex"  method="POST">
                                @csrf
                                <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this account?')"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="text-center mt-4 fw-bold">
                    <h3>There is no Account Yet!</h3>
                    <a href="/home"><button type="button" class="btn btn-outline-success mt-1">Home</button></a>
                </div>
            @endif
        </div>
    </div>
@include('components.footer')
@endsection
