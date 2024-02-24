<!-- resources/views/pinjaman/edit.blade.php -->
@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Peminjaman</div>

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
                    <form action="{{ route('pinjaman.update', $pinjaman->id) }}" method="post">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="UserID">UserID</label>
                            <input type="text" class="form-control" id="UserID" name="UserID" value="{{ $pinjaman->UserID }}" required>
                        </div>

                        <div class="form-group">
                            <label for="BukuID">BukuID</label>
                            <input type="text" class="form-control" id="BukuID" name="BukuID" value="{{ $pinjaman->UserID }}" required>
                        </div>

                        <div class="form-group">
                            <label for="TanggalPeminjaman">Tanggal Peminjaman</label>
                            <input type="text" class="form-control" id="TanggalPeminjaman" name="TanggalPeminjaman" value="{{ $pinjaman->TanggalPeminjaman }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="TanggalPengembalian">Tanggal Pengembalian</label>
                            <input type="text" class="form-control" id="TanggalPengembalian" name="TanggalPengembalian" value="{{ $pinjaman->TanggalPengembalian }}" required>
                        </div>

                        <div class="form-group">
                            <label for="StatusPeminjaman">Status Peminjaman</label>
                            <select class="form-control" id="StatusPeminjaman" name="StatusPeminjaman" required>
                                <option value="">Pilih Status Peminjaman</option>
                                <option value="Dipinjam" {{ $pinjaman->StatusPeminjaman == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                                <option value="Dikembalikan" {{ $pinjaman->StatusPeminjaman == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
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