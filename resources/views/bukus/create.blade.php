
@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Buku</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="Judul" value="{{ old('Judul') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ old('Penerbit') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" class="form-control" id="Penulis" name="Penulis" value="{{ old('Penulis') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="TahunTerbit">Tahun Terbit</label>
                            <input type="number" class="form-control" id="TahunTerbit" name="TahunTerbit" value="{{ old('TahunTerbit') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection