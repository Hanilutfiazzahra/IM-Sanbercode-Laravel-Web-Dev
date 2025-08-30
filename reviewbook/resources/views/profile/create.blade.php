@extends('layout.master')
@section('title')
Buat Profile
@endsection

@section('content')

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

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body p-4">

                    <form method="POST" action="/profile">
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

                        <!-- Age -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Age</label>
                            <input
                                type="number"
                                class="form-control"
                                name="age"
                                placeholder="Masukkan usia..."
                                value="{{ old('age') }}"
                            >
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-start d-block">Address</label>
                            <textarea
                                name="address"
                                class="form-control"
                                rows="6"
                                placeholder="Tulis alamat..."
                            >{{ old('address') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary fw-semibold px-4">
                                Buat Profil
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
