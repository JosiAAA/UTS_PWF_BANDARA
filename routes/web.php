<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\crudPenumpangController;
use App\Http\Controllers\crudAkunController;
use App\Http\Controllers\crudTiketController;
use App\Http\Controllers\crudJadwalController;

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

Route::get('/tes', function () {
    return view('tes');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

 
Route::get('/jadwal', 'JadwalController@index');
Route::get('/tiket', 'TiketController@index');
Route::get('/index','PostController@index');
Route::get('/CRUD_penumpang','crudPenumpangController@index');
Route::get('/CRUD_akun','crudAkunController@index');

Route::get('/CRUD_tiket','crudTiketController@index');

Route::get('/CRUD_jadwal','crudJadwalController@index');
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::post('/tambah/store',[PostController::class,'store']);

Route::get('/edit', function () {
    return view('edit');
});
Route::get('/editAkun', function () {
    return view('editAkun');
});
Route::get('/edit/{id}', function () {
    return view('edit');
});

Route::get('/edit/update', function () {
    return view('edit');
});
Route::post('/tambah/store',[PostController::class,'store']);

Route::get('/edit/{id}',[PostController::class,'edit']);

Route::get('/editAkun/{id}',[crudAkunController::class,'edit']);

Route::post('/edit/update',[PostController::class,'update']);

Route::post('/editAkun/update',[crudAkunController::class,'update']);

Route::get('/hapus/{id}',[PostController::class,'destroy']);
Route::get('/hapusAkun/{id}',[crudAkunController::class,'destroy']);
Route::get('/hapusTiket/{id}',[crudTiketController::class,'destroy']);
Route::view('/home', 'home')->name('home');

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('auth');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');

Route::get('/penumpang','PostController@index');

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/pesan', function () {
    return view('pesan');
});
Route::post('/pesan/store',[PostController::class,'store']);

Route::post('/tambahPenumpang/store',[crudPenumpangController::class,'store']);

Route::get('/tambahPenumpang', function () {
    return view('tambahPenumpang');
});


Route::post('/tambahAkun/store',[crudAkunController::class,'store']);

Route::get('/tambahAkun', function () {
    return view('tambahAkun');
});


Route::post('/tambahTiket/store',[crudTiketController::class,'store']);

Route::get('/tambahTiket', function () {
    return view('tambahTiket');
});

Route::get('/editTiket', function () {
    return view('editTiket');
});
Route::get('/editTiket/{id}', function () {
    return view('editTiket');
});

Route::get('/editTiket/update', function () {
    return view('editTiket');
});


Route::get('/editTiket/{id}',[crudTiketController::class,'edit']);



Route::post('/editTiket/update',[crudTiketController::class,'update']);
Route::post('/tambahJadwal/store',[crudJadwalController::class,'store']);

Route::get('/tambahJadwal', function () {
    return view('tambahJadwal');
});

Route::get('/editJadwal', function () {
    return view('editJadwal');
});
Route::get('/editJadwal/{id}', function () {
    return view('editJadwal');
});

Route::get('/editJadwal/update', function () {
    return view('editJadwal');
});
Route::get('/editJadwal/{id}',[crudJadwalController::class,'edit']);



Route::post('/editJadwal/update',[crudJadwalController::class,'update']);
Route::get('/komentar','CommentController@index');

Route::post('/komentar/store',[CommentController::class,'store']);