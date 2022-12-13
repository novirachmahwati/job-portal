<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingPage/index');
})->name('landingPage');

Route::get('/registrasi', function () {
    return view('registrasi/registrasi-pelamar');
})->name('registrasi');

Route::get('/registrasi-perusahaan', function () {
    return view('registrasi/registrasi-perusahaan');
})->name('registrasi-perusahaan');

Route::get('/cari-lowongan', function () {
    return view('cariLowongan/cari-lowongan');
})->name('cari-lowongan');

Route::get('/profil-perusahaan', function () {
    return view('profilPerusahaan/cari-profil-perusahaan');
})->name('cari-profil-perusahaan');

Route::get('/tips-karir', function () {
    return view('tipsKarir/tips-karir');
})->name('tips-karir');

