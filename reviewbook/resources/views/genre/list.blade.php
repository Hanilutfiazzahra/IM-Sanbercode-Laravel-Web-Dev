@extends('layout.master')
@section('title')
List Genre
@endsection

@section('content') 

@auth 
<a href="/genre/create" class="btn btn-primary btn-sm my-2">Tambah</a>

@endauth


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
        <form method="POST" action="/genre/{{$genre->id}}">
        <a href="/genre/{{$genre->id}}" class="btn btn-info btn-sm">Detail</a>
        @auth
        <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
          @csrf
          @method('DELETE')
         <input type="submit" value="Delete" class="btn btn-danger btn-sm">
        </form>
        @endauth
      </td>
    </tr>
    @empty
    <p>No Genre</p>
    @endforelse

  </tbody>
</table>

@endsection