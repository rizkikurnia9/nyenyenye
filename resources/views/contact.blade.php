<!-- resources/views/books/create.blade.php -->

<h1>Tambah Buku Baru</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul">
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis">
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
