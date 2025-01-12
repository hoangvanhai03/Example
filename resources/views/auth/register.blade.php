@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        font-family: 'Poppins', sans-serif;
        color: #f5f5f5;
    }
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        font-weight: 700;
        color: #ffffff;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 15px;
        margin-bottom: 15px;
        border: none;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        font-size: 16px;
        transition: box-shadow 0.3s;
    }
    input:focus {
        box-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
        outline: none;
    }
    span {
        color: #ff4d4d;
        font-size: 14px;
    }
    button[type="submit"] {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 25px;
        background: linear-gradient(to right, #27ae60, #2ecc71);
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
        transition: background 0.3s, transform 0.2s;
    }
    button:hover {
        background: linear-gradient(to right, #2ecc71, #27ae60);
        transform: translateY(-2px);
    }
</style>

<div class="form-container">
    <h2>Create Your Account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required />
        @error('name') <span>{{ $message }}</span> @enderror

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
        @error('email') <span>{{ $message }}</span> @enderror

        <input type="password" name="password" placeholder="Password" required />
        @error('password') <span>{{ $message }}</span> @enderror

        <button type="submit">Register</button>
    </form>
</div>
@endsection
