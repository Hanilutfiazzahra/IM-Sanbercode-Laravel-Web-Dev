@extends('layout.master')
@section('title')
Edit Buku
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">

                    <form method="POST" action="/book/{{$book->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Error message --}}
                        @if ($errors->any()) 
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Genre -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Genre</label>
                            <select name="genre_id" class="form-select">
                                <option value="">-- Pilih Genre --</option>
                                @forelse ($genre as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $book->genre_id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @empty
                                    <option value="">Genre belum ada</option>
                                @endforelse
                            </select>
                        </div>

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $book->title) }}" placeholder="Masukkan judul buku...">
                        </div>

                        <!-- Summary -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Ringkasan</label>
                            <textarea name="summary" class="form-control" rows="6" placeholder="Tulis ringkasan buku...">{{ old('summary', $book->summary) }}</textarea>
                        </div>

                        <!-- Stok -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ old('stok', $book->stok) }}" placeholder="Masukkan jumlah stok">
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Gambar</label>
                            <input type="file" class="form-control" name="image">
                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fw-semibold px-4">
                                Edit Buku
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
