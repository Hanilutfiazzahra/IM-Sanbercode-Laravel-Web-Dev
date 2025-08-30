@extends('layout.master')
@section('title')
Detail Genre
@endsection

@section('content')
<br>
<h3>{{ $genre->name }}</h3>

<!-- Deskripsi Genre -->
<p style="text-align: justify; white-space: pre-line;">
    {{ $genre->description }}
</p>
<hr>

<div class="row">
  @forelse ($genre->books as $book)
    <div class="col-4">
      <div class="card">
        <img 
          src="{{ asset('image/' . $book->image) }}"
          class="card-img-top bg-light"
          style="height: 300px; object-fit: contain;"
          alt="Gambar Buku">

        <div class="card-body">
          <h5 class="card-title">{{ $book->title }}</h5>

          <!-- Konten Buku -->
          <p class="card-text" style="text-align: justify; white-space: pre-line;">
            {{ \Illuminate\Support\Str::limit($book->content, 100) }}
          </p>

          <div class="d-grid gap-2">
            <a href="/book/{{ $book->id }}" class="btn btn-info">Read More</a>
          </div>
        </div>
      </div>
    </div>
  @empty
    <h4 class="text-muted">Belum ada buku di genre ini.</h4>
  @endforelse
</div>
<br>

<a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
