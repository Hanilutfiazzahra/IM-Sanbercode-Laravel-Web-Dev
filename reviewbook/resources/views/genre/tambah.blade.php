@extends('layout.master')
@section('title')
Tambah Genre
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">

                    <form method="POST" action="/genre">
                        @csrf

                        <!-- {{-- Error message --}} -->
                        @if ($errors->any())
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Genre Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Genre Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Masukkan nama genre..."
                                value="{{ old('name') }}"
                            >
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Description</label>
                            <textarea
                                name="description"
                                class="form-control"
                                rows="6"
                                placeholder="Tulis deskripsi genre..."
                            >{{ old('description') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fw-semibold px-4">
                                Tambah Genre
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
