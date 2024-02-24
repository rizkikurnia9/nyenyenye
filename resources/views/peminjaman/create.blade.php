@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pinjaman</div>

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

                    <form method="POST" action="{{ route('pinjaman.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="UserID">User ID</label>
                            <input type="text" class="form-control" id="UserID" name="UserID" value="{{ old('UserID') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="BukuID">User ID</label>
                            <input type="text" class="form-control" id="BukuID" name="BukuID" value="{{ old('BukuID') }}" required>
                        </div>


                        <div class="form-group">
                            <label for="TanggalPeminjaman">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="TanggalPeminjaman" name="TanggalPeminjaman" value="{{ old('TanggalPeminjaman') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="TanggalPengembalian">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="TanggalPengembalian" name="TanggalPengembalian" value="{{ old('TanggalPengembalian') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="StatusPeminjaman">Status Peminjaman</label>
                            <select class="form-control" id="StatusPeminjaman" name="StatusPeminjaman" required>
                                <option value="Dipinjam">Dipinjam</option>
                                <option value="Dikembalikan">Dikembalikan</option>
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
