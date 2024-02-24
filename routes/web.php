<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// // Menampilkan semua buku
// Route::get('/books', [BukuController::class, 'index'])->name('books.index');

// // Menampilkan formulir untuk menambahkan buku baru
// Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');

// // Menyimpan buku baru ke dalam database
// Route::post('/books', [BukuController::class, 'store'])->name('books.store');

// // Menampilkan detail buku
// Route::get('/books/{book}', [BukuController::class, 'show'])->name('books.show');

// // Menampilkan formulir untuk mengedit buku
// Route::get('books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');

// Route::get('/books', [BukuController::class, 'index'])->name('books.index');

// // Menyimpan perubahan yang diperbarui ke dalam database
// Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');

// // Menghapus buku
// Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');

// //Route::view('/buku', 'buku', ['name' => 'kategori buku', 'phone' => '262561']);

// Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');

Route::get('/books', [BukuController::class, 'index'])->name('books.index');
Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');
Route::post('/books', [BukuController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/peminjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
Route::get('/pinjaman/create', [PinjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/pinjaman', [PinjamanController::class, 'store'])->name('pinjaman.store');
Route::get('/pinjaman/{pinjaman}/edit', [PinjamanController::class, 'edit'])->name('pinjaman.edit');
Route::put('/pinjaman/{pinjaman}', [PinjamanController::class, 'update'])->name('pinjaman.update');
Route::delete('/pinjaman/{pinjaman}', [PinjamanController::class, 'destroy'])->name('pinjaman.destroy');

Route::get('/ulasanbuku', [UlasanController::class, 'index'])->name('ulasanbuku.index');
Route::get('/ulasanbuku', [UlasanController::class, 'index'])->name('ulasanbuku.index');
Route::get('/ulasanbuku/create', [UlasanController::class, 'create'])->name('ulasanbuku.create');
Route::post('/ulasanbuku', [UlasanController::class, 'store'])->name('ulasanbuku.store');
Route::get('/ulasan/{ulasan}/edit', [UlasanController::class, 'edit'])->name('ulasanbuku.edit');
Route::put('/ulasanbuku/{ulasanbuku}', [UlasanController::class, 'update'])->name('ulasanbuku.update');
Route::delete('/ulasanbuku/{ulasanbuku}', [UlasanController::class, 'destroy'])->name('ulasanbuku.destroy');
