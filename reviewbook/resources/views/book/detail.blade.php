@extends('layout.master')
@section('title')
Detail Buku
@endsection

@section('content')

    <img src="{{asset('image/'. $book->image)}}" width="100%" height="500px" alt="Gambar Buku">
    <h1 class="text-primary">{{$book->title}}</h1>
    <p>{{$book->summary}}</p>

@endsection 