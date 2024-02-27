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
                            <input type="hidden"  id="user_id" name="user_id" value="{{ Auth::id() }}" required readonly>
                        </div>

                        {{-- <div class="form-group">
                            <label for="buku_id">Pilih Buku:</label>
                            <select name="buku_id" id="buku_id" class="form-control" required>
                                @foreach($buku as $item)
                                <option value="{{ $item->id }}">{{ $item->Judul }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="buku_id">Pilih Buku:</label>
                            <select name="buku_id" id="buku_id" class="form-control" required>
                                @foreach($buku as $item)
                                <option value="{{ $item->id }}">{{ $item->Judul }}</option>
                                @endforeach
                            </select>
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
                            <label for="jumlahPinjaman">jumlah Pinjam</label>
                            <input type="number" class="form-control" id="jumlahPinjaman" name="jumlahPinjaman" value="{{ old('jumlahPinjaman') }}" required>
                        </div>

                        {{-- <div class="form-group">
                            <label for="StatusPeminjaman">Status Peminjaman</label>
                            <select class="form-control" id="StatusPeminjaman" name="StatusPeminjaman" required>
                                <option value="Dipinjam">Dipinjam</option>
                                <option value="Dikembalikan">Dikembalikan</option>
                            </select>
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
