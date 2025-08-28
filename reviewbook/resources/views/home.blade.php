@extends('layout.master')
@section('title')
Home
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan berbagi agar hidup ini semakin berkualitas.</p>

    <h3>Benefit Join di SanberBook</h3>
    <ul>
        <li>Mendapat motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h3>Cara bergabung ke SanberBook</h3>
    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar di <a href="/register">Form Sign Up</a></li>
        <li>Selesai</li>
    </ol>

@endsection

