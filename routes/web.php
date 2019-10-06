<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Captcha
Route::get('/refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');
// Kategori Artikel
Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel/store','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('kategori_artikel.show');
// Artikel
Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
Route::post('/artikel/store','ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');
// Kategori Berita
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita/store','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}', 'KategoriBeritaController@show')->name('kategori_berita.show');
// Berita
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita/store','BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
// Kategori Galeri
Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri/store','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}', 'KategoriGaleriController@show')->name('kategori_galeri.show');
// Galeri
Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create','GaleriController@create')->name('galeri.create');
Route::post('/galeri/store','GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');
// Kategori Pengumuman
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman/store','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumanController@show')->name('kategori_pengumuman.show');
// Pengumuman
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman/store','PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');