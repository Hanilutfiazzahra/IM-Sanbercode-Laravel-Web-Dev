@extends('layout.master2')
@section('title')
Login
@endsection

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card shadow-lg p-4 rounded-4" style="width: 400px;">
        <h3 class="text-center mb-3 fw-bold text-primary">KataKita</h3>
        
        <form method="POST" action="/login">
            @csrf

            @if ($errors->any()) 
                <div class="alert alert-danger rounded-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label fw-semibold text-start d-block">Email</label>
                <input type="email" class="form-control rounded-pill" name="email" placeholder="Masukkan email...">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label fw-semibold text-start d-block">Password</label>
                <input type="password" class="form-control rounded-pill" name="password" placeholder="••••••••">
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold">
                Login
            </button>

            <p class="text-center mt-3">
                Belum punya akun? <a href="/register" class="text-decoration-none">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection
