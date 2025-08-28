@extends('layout.master')
@section('title')
Tampil Buku
@endsection

@section('content')

@auth
<a href="/book/create" class="btn btn-primary my-3">Tambah</a>
@endauth

<div class="row">
    @forelse ($book as $item)
    <div class="col-4">
        <div class="card">
            <img src="{{asset('image/'.$item->image)}}" class="card-img-top" height= "300px" alt="Gambar Buku">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{Str::limit($item->content, 100)}}</p>
                <div class="d-grid gap-2">
                     <a href="/book/{{$item->id}}" class="btn btn-info">Read More</a>
                </div>
                <div>
                    @auth
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/book/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form action="/book/{{$item->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="d-grid gap-2">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </div>  
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @empty
        <h1>Belum ada buku</h1>
    @endforelse
</div>

@endsection