<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\BukupdfController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KategoribukuController;
  
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

    Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');
    Route::post('/books', [BukuController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');
    Route::get('/buku/download/pdf', [BukupdfController::class, 'downloadBukuPDF'])->name('buku.download.pdf');



    Route::get('/books', [BukuController::class, 'index'])->name('books.index');
    //Route::get('/kategoribuku', [KategoribukuController::class, 'index']);
    //Route::post('/kategoribuku', [KategoribukuController::class, 'store'])->name('kategoribuku.store');
    //Route::get('/kategoribuku/create', [KategoribukuController::class, 'create'])->name('kategoribuku.create');
    Route::get('/peminjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
    Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
    Route::get('/pinjaman/create', [PinjamanController::class, 'create'])->name('pinjaman.create');
    Route::post('/pinjaman', [PinjamanController::class, 'store'])->name('pinjaman.store');
    Route::get('/pinjaman/{pinjaman}/edit', [PinjamanController::class, 'edit'])->name('pinjaman.edit');
    Route::put('/pinjaman/{pinjaman}', [PinjamanController::class, 'update'])->name('pinjaman.update');
    Route::delete('/pinjaman/{pinjaman}', [PinjamanController::class, 'destroy'])->name('pinjaman.destroy');


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/home', function () {
        return view('home');
    });


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

// Route::get('/books', [BukuController::class, 'index'])->name('books.index');
// Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');
// Route::post('/books', [BukuController::class, 'store'])->name('books.store');
// Route::get('/books/{book}/edit', [BukuController::class, 'edit'])->name('books.edit');
// Route::put('/books/{book}', [BukuController::class, 'update'])->name('books.update');
// Route::delete('/books/{book}', [BukuController::class, 'destroy'])->name('books.destroy');
// route::get('bookspdf', [BukuController::class, 'generatePDF'])->name('books.bookspdf');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/peminjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
// Route::get('/pinjaman', [PinjamanController::class, 'index'])->name('pinjaman.index');
// Route::get('/pinjaman/create', [PinjamanController::class, 'create'])->name('peminjaman.create');
// Route::post('/pinjaman', [PinjamanController::class, 'store'])->name('pinjaman.store');
// Route::get('/pinjaman/{pinjaman}/edit', [PinjamanController::class, 'edit'])->name('pinjaman.edit');
// Route::put('/pinjaman/{pinjaman}', [PinjamanController::class, 'update'])->name('pinjaman.update');
// Route::delete('/pinjaman/{pinjaman}', [PinjamanController::class, 'destroy'])->name('pinjaman.destroy');

// Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
// Route::get('/ulasan/create', [UlasanController::class, 'create'])->name('ulasan.create');
// Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
// Route::get('/ulasan/{ulasan}/edit', [UlasanController::class, 'edit'])->name('ulasan.edit');
// Route::put('/ulasan/{ulasan}', [UlasanController::class, 'update'])->name('ulasan.update');
// Route::delete('/ulasan/{ulasan}', [UlasanController::class, 'destroy'])->name('ulasan.destroy');

// Route::get('/kategoribuku', [KategoribukuController::class, 'index'])->name('kategoribuku.index');
// Route::get('/kategoribuku/create', [KategoribukuController::class, 'create'])->name('kategoribuku.create');
// Route::post('/kategoribukus', [KategoribukuController::class, 'store'])->name('kategoribukus.store');
// Route::get('/kategoribuku/{kategoribuku}/edit', [KategoribukuController::class, 'edit'])->name('kategoribuku.edit');
// Route::put('/kategoribukus/{kategoribuku}', [KategoribukuController::class, 'update'])->name('kategoribukus.update');
// Route::delete('/kategoribuku/{kategoribuku}', [KategoribukuController::class, 'destroy'])->name('kategoribuku.destroy');
