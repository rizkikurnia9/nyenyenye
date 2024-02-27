<!-- resources/views/books/edit.blade.php -->
@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kategori</div>

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
                    <form action="{{ route('kategoribukus.update', $kategoribuku->id) }}" method="post">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="NamaKategori">NamaKategori</label>
                            <input type="text" class="form-control" id="NamaKategori" name="NamaKategori" value="{{ $kategoribuku->NamaKategori }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
