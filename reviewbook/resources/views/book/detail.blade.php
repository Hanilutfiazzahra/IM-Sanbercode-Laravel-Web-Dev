@extends('layout.master')
@section('title')
Detail Buku
@endsection

@section('content') 
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10"> <!-- kolom lebar -->
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                
                <img src="{{ asset('image/' . $book->image) }}" 
                     alt="Gambar Buku" 
                     class="d-block mx-auto" 
                     style="max-width: 100%; height: auto;">
                
                <div class="card-body p-4">
                    <!-- Judul -->
                    <h3 class="fw-bold text-primary mb-3 text-center">{{ $book->title }}</h3>

                    <!-- Summary (garis baru tetap terjaga) -->
                    <p class="card-text" style="text-align: justify; white-space: pre-line;">
                        {{ $book->summary }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<h4>List Komentar</h4>

<!-- List Komentar -->
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8"> <!-- Sesuaikan lebar kolom -->
            @forelse ($book->comments as $item)
                <div class="card my-3 shadow-sm">
                    <div class="card-body">
                        <!-- Nama Pengguna -->
                        <div class="fw-bold" style="text-align: left;">{{ $item->owner->name }}</div>
                        <!-- Komentar -->
                        <p class="card-text" style="text-align: justify; white-space: pre-line;">
                            {!! nl2br(e($item->content)) !!} <!-- Menjaga baris baru dalam komentar -->
                        </p>
                    </div>
                </div>
            @empty
                <h5>Tidak Ada Komentar</h5>
            @endforelse
        </div>
    </div>
</div>

<hr>

<h4>Buat Komentar</h4>
@auth
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8"> <!-- Sesuaikan lebar kolom -->
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">

                    <form method="POST" action="/comments/{{$book->id}}" enctype="multipart/form-data">
                        @csrf

                        <!-- Error message -->
                        @if ($errors->any()) 
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Comment content -->
                        <div class="mb-3">
                            <label class="form-label text-start fw-semibold">Komentar</label>
                            <textarea name="content" class="form-control" rows="6" placeholder="Isi komentar..." style="text-indent: 0; margin: 0; padding: 10px;"></textarea>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fw-semibold px-4">
                                Buat Komentar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth

<a href="/book" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
