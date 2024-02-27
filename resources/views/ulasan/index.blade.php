@extends('layout.main')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ulasan Buku</h1> <!-- Mengubah judul -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Ulasan Buku</li> <!-- Mengubah breadcrumb -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Ulasan Buku</h3> <!-- Mengubah judul -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mb-3">
                  <a href="/ulasan/create" class="btn btn-primary">Tambah Ulasan</a> <!-- Mengubah tombol tambah -->
                </div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>UserID</th>
                    <th>BukuID</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($ulasan as $ulasan) <!-- Mengganti nama variabel -->
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ulasan->UserID }}</td> <!-- Menggunakan atribut yang sesuai -->
                        <td>{{ $ulasan->BukuID }}</td> <!-- Menggunakan atribut yang sesuai -->
                        <td>{{ $ulasan->Ulasan }}</td> <!-- Menggunakan atribut yang sesuai -->
                        <td>Bintang {{ $ulasan->Rating }}</td> <!-- Menggunakan atribut yang sesuai -->
                        <td>
                            <a href="{{ route('ulasan.edit', $ulasan->id) }}" class="btn btn-warning">Edit</a> <!-- Mengubah route -->
                            <form action="{{ route('ulasan.destroy', $ulasan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
