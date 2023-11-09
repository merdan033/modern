@extends('layouts.app')
@section('title') Register | PC @endsection
@section('main')
    <div class="container-xl my-4">
        <div class="row justify-content-center g-3 g-sm-4">
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body p-3">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            @honeypot

                            <div class="mb-3">
                                <label for="name" class="form-label">@lang('app.name')</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">@lang('app.username')</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
                                @error('username')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">@lang('app.password')</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required>
                                @error('password')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">@lang('app.passwordConfirmation')</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                @error('password_confirmation')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
