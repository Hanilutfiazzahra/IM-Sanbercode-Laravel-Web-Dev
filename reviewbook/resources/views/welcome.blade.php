@extends('layout.master')
@section('title')
@endsection

@section('content')

@if(session('success'))
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK'
      })
    });
  </script>
@endif

@auth
    <h1>Selamat datang di KataKita, {{ Auth::user()->name }}! 📚</h1>
@endauth

<h2>Temukan berbagai ulasan buku bersama KataKita!</h2>



<p><strong>Tips:</strong> Jangan ragu untuk membagikan inspirasi dan mencoba membaca buku dari ulasan yang kamu baca!</p>

<!-- Quote Card -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body text-center p-4">
                    <p class="fs-4"><em>"Buku adalah pembawa peradaban. Tanpa buku, sejarah itu sunyi, sastra itu bodoh, sains lumpuh, pemikiran dan spekulasi terhenti."</em></p>
                    <p class="fs-4">- Barbara W. Tuchman -</p>
                </div>
            </div>
        </div>
    </div>
</div>

<p><strong>Selamat membaca! ⋆˚📚˖°</strong> </p>

@endsection
