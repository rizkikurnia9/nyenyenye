@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Ulasan</div>

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

                    <form method="POST" action="{{ route('ulasan.store') }}">
                        @csrf


                        <div class="form-group">
                            <label for="user_id">User id</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}" required>
                        </div>


                        <div class="form-group">
                            <label for="buku_id">Buku ID</label>
                            <input type="text" class="form-control" id="buku_id" name="buku_id" value="{{ old('buku_id') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Ulasan">Ulasan</label>
                            <input type="text" class="form-control" id="Ulasan" name="Ulasan" value="{{ old('Ulasan') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Rating">Rating</label>
                            <select class="form-control" id="Rating" name="Rating" required>
                                <option value="1">1 Bintang</option>
                                <option value="2">2 Bintang</option>
                                <option value="3">3 Bintang</option>
                                <option value="4">4 Bintang</option>
                                <option value="5">5 Bintang</option>
                            </select>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
