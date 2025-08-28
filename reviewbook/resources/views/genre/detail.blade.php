@extends('layout.master')
@section('title')
Detail Genre
@endsection

@section('content')
<h1>{{$genre->name}}</h1>
<p>{{$genre->description}}</p>

<a href="/genre" class="btn btn-secondary btn-sm"></a>
@endsection