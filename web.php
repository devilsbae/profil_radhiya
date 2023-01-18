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

Route::get('/home', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});

Route::get('/nama', function () {
    return ('Nama saya Radhiya Fitrunnisa');
});

route::get('/sekolah', function () {
    return ('Saya bersekolah di SMK BPI Bandung');
});

route::get('/alamat', function (){
    return ('Saya tinggal di daerah Dago lebih tepatnya di Dipati Ukur');
});

route::get('/saudara', function (){
    return ('Saya memiliki 3 adik');
});

route::get('/kelas', function (){
    return ('Sekarang saya menduduki kelas 11 jurusan RPL');
});

route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>Welcome to 11 RPL</u><h2>';
});

route::get('/siswa/{radhiya}', function ($radhiya) {
    return "Tampilkan data siswa bernama $radhiya";
});

route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek){
    return "Cek sisa stok untuk $jenis $merek";
});

route::get('/profile', function (){
    return view('profile');
});
