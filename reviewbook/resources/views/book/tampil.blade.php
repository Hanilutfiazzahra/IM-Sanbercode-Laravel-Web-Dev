@extends('layout.master')
@section('title')
Daftar Buku
@endsection

@section('content')
<br>

@auth
@if (Auth()->user()->role === 'admin')
<a href="/book/create" class="btn btn-primary my-3">Tambah</a>
@endif
@endauth

<br> <br>

<!-- SweetAlert2 Script for Success and Error -->
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: true, // Menampilkan tombol OK
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6'
        }).then((result) => {
            // Jika OK diklik, tidak ada refresh halaman, cukup tutup pop-up
            if (result.isConfirmed) {
                Swal.close(); // Menutup pop-up
            }
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            showConfirmButton: true, // Tombol OK di error
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        }).then((result) => {
            // Jika OK diklik, tidak ada refresh halaman, cukup tutup pop-up
            if (result.isConfirmed) {
                Swal.close(); // Menutup pop-up
            }
        });
    </script>
@endif

<!-- Book Table -->
<div class="row"> <!-- Add margin-top here -->
    @forelse ($book as $item)
    <div class="col-4">
        <div class="card mt-4">
            <img src="{{ asset('image/'.$item->image) }}" 
                 class="card-img-top bg-light" 
                 style="height: 300px; object-fit: contain;" 
                 alt="Gambar Buku">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <span class="badge bg-success">{{$item->genre->name}}</span>
                <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
                <div class="d-grid gap-2">
                    <a href="/book/{{$item->id}}" class="btn btn-info">Read More</a>
                </div>
                <div>
                    @auth
                    @if (Auth()->user()->role === 'admin')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/book/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form action="/book/{{$item->id}}" method="post" onsubmit="return confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <div class="d-grid gap-2">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </div>  
                            </form>
                        </div>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @empty
        <h1>Belum ada buku</h1>
    @endforelse
</div>

<script>
    // SweetAlert2 Confirmation for Delete
    function confirmDelete(event) {
        Swal.fire({
            title: 'Apa kamu yakin?',
            text: "Buku ini akan dihapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form manually
                event.target.submit(); // Submit form if confirmed
            }
        });
        return false; // Prevent form from submitting immediately
    }
</script>

@endsection
