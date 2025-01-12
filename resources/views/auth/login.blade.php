@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom right, #141e30, #243b55);
        font-family: 'Poppins', sans-serif;
        color: #f5f5f5;
    }
    .card {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: none;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
    .card-header {
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #ffffff;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 25px;
        padding: 15px 20px;
        color: #fff;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    .form-control:focus {
        box-shadow: 0 0 12px rgba(255, 255, 255, 0.3);
        background: rgba(255, 255, 255, 0.2);
    }
    .btn-primary {
        background: linear-gradient(45deg, #00c6ff, #0072ff);
        border: none;
        border-radius: 25px;
        padding: 12px 0;
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 123, 255, 0.4);
    }
    .input-group-text {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #ffffff;
    }
    .form-label {
        font-size: 15px;
        color: #f1f1f1;
    }
    a.text-primary {
        color: #00a8ff;
        text-decoration: underline;
        transition: color 0.3s ease;
    }
    a.text-primary:hover {
        color: #0072ff;
    }
</style>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-lg-5 col-md-7 col-sm-9">
        <div class="card">
            <div class="card-header">
                Welcome Back
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>

                    <div class="text-center mt-3">
                        <a href="#" class="text-primary">Forgot your password?</a> |
                        <a href="{{ route('register') }}" class="text-primary">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
