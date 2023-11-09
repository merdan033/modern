@extends('layouts.app')
@section('title') Login | PC @endsection
@section('main')
    <div class="container-xl my-4">
        <div class="row justify-content-center g-3 g-sm-4">
            <div class="col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body p-3">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            @honeypot

                            <div class="mb-3">
                                <label for="username" class="form-label">@lang('app.username')</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required autofocus>
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

                            <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
