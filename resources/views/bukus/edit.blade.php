<!-- resources/views/books/edit.blade.php -->
@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Buku</div>

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
                    <form action="{{ route('books.update', $book->id) }}" method="post">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="Judul" value="{{ $book->Judul }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="{{ $book->Penerbit }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" class="form-control" id="Penulis" name="Penulis" value="{{ $book->Penulis }}" required>
                        </div>

                        <div class="form-group">
                            <label for="TahunTerbit">Tahun Terbit</label>
                            <input type="number" class="form-control" id="TahunTerbit" name="TahunTerbit" value="{{ $book->TahunTerbit }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection