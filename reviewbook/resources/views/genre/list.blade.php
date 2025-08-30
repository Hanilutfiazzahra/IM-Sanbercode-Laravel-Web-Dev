@extends('layout.master')
@section('title')
Daftar Genre
@endsection

@section('content') 
<br> 

@auth 
@if (Auth()->user()->role === 'admin')
<a href="/genre/create" class="btn btn-primary btn-sm my-2">Tambah</a>
@endif
@endauth

<br> <br>

<!-- SweetAlert2 Script -->
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

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            showConfirmButton: true, // Tombol OK di error
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33'
        })
    </script>
@endif

<!-- Genre Table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $genre)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$genre->name}}</td>
      <td>
        <a href="/genre/{{$genre->id}}" class="btn btn-info btn-sm">Detail</a>
        @auth
        @if (Auth()->user()->role === 'admin')
        <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        
        <!-- Delete Button with SweetAlert Confirmation -->
        <form method="POST" action="/genre/{{$genre->id}}" class="d-inline" onsubmit="return confirmDelete(event)">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        </form>
        @endif
        @endauth
      </td>
    </tr>
    @empty
        <p>No Genre</p>
    @endforelse
  </tbody>
</table>

<script>
    // SweetAlert2 Confirmation for Delete
    function confirmDelete(event) {
        Swal.fire({
            title: 'Apa kamu yakin?',
            text: "Data ini akan dihapus permanen!",
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

