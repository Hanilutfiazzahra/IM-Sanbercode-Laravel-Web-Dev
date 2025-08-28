@extends('layout.master')
@section('title')
Edit Buku
@endsection

@section('content')
<form method ="POST" action="/book/{{$book->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="mb-3">
    <label class="form-label">Genre</label>
    <select name="genre_id" id="" class="form-control">
        <option value="">-- Pilih Genre --</option>
        @forelse ($genre as $item)
            @if ($item->id === $book->genre_id)
                <option value="{{$item->id}}" selected>{{$item->name}}</option>

            @else
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
            <option value="{{$item->id}}">{{$item->name}}</option>
        @empty
            <option value="">Genre belum ada</option>
        @endforelse
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="type" class="form-control" value= "{{$book->title}}" name="title">
  </div>
  <div class="mb-3">
    <label class="form-label">Summary</label>
    <textarea name="summary" class="form-control" id="" cols="30" rows="10">{{$item->summary}}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" class="form-control" name="stok">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection