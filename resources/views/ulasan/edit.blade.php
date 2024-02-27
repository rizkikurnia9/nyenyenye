<!-- resources/views/ulasan/edit.blade.php -->
@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Ulasan</div>

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
                    <form action="{{ route('ulasan.update', $ulasan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                        <div class="form-group">
                            <label for="UserID">UserID</label>
                            <input type="text" class="form-control" id="UserID" name="UserID" value="{{ $ulasan->UserID }}" required>
                        </div>

                        <div class="form-group">
                            <label for="BukuID">BukuID</label>
                            <input type="text" class="form-control" id="BukuID" name="BukuID" value="{{ $ulasan->BukuID }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="Ulasan">Ulasan</label>
                            <input type="text" class="form-control" id="Ulasan" name="Ulasan" value="{{ $ulasan->Ulasan }}" required>
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
                                
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection