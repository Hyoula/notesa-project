<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});



Route::view('notaris', 'notaris')->name('notaris');
Route::view('notaris-details', 'notaris-details')->name('notaris-details');
Route::view('kontak', 'kontak')->name('kontak');

Route::view('login', 'login')->name('login');
Route::view('login-admin', 'auth/login')->name('auth/login');

Route::view('login-notaris', 'auth/login-notaris')->name('auth/login-notaris');
Route::view('notarisppat', 'notaris/dashboard')->name('notaris/dashboard');
Route::view('admin-notaris', 'notaris/dashboard')->name('notaris/dashboard');

Route::view('klien', 'klien/index')->name('klien/index');
Route::view('profil-klien', 'klien/profil')->name('klien/profil');
Route::view('daftar-ppat', 'klien/ppat')->name('klien/ppat');
Route::view('daftar-notaris', 'klien/notaris')->name('klien/notaris');
Route::view('detail-notaris', 'klien/detail_notaris')->name('klien/detail_notaris');
Route::view('layanan-aktif', 'klien/notpatPilih')->name('klien/notpatPilih');
Route::view('progress', 'klien/progress')->name('klien/progress');
Route::view('data-lengkap', 'klien/dataLengkap')->name('klien/dataLengkap');


Route::view('admin', 'admin/index')->name('admin/index');
