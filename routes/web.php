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


Route::get('login', function () {
    return view('login');
});

Route::group(['middleware' => 'usersession'], function () {
    Route::get('admin', function () { return view('pages.index'); });
    Route::resource('admin/rumah','RumahController');
    Route::resource('admin/kartukeluarga','DetailkkController');
    Route::resource('admin/berita','BeritaController');
    Route::resource('admin/agenda','AgendaController');
    route::resource('admin/prestasi','PrestasiController');
    Route::resource('admin/galeri','GaleriController');
    Route::resource('admin/kartuanggota','KartuAnggotaController');
    Route::resource('admin/kategori_berita','KategoriController');
    Route::resource('admin/detailanggota','DetailAnggotaController');
    Route::resource('admin/pengaturan','rtController');
    Route::resource('admin/slider','SliderController');
    Route::get('admin/detailkeluarga/{id}','DetailkkController@get');
    Route::get('admin/rumah/delete/{id}','RumahController@delete');
    Route::get('admin/rumah/addkeluarga/{id}', 'RumahController@addkeluarga');
    Route::get('admin/rumah/getkota/{id}', 'RumahController@getkota');
    Route::get('admin/rumah/getkecamatan/{id}', 'RumahController@getkecamatan');
    Route::get('admin/rumah/getkelurahan/{id}', 'RumahController@getkelurahan');
    Route::get('admin/kartukeluarga/addanggota/{id}', 'DetailkkController@addanggota');
    Route::get('admin/kartukeluarga/delete/{id}', 'DetailkkController@delete');
    Route::post('arsipdetkeluarga', 'ArsipdetkkController@store')->name('arsipdetkeluarga.store');
    Route::get('admin/detailkeluarga/arsip/delete/{id}', 'ArsipdetkkController@destroy');
    Route::get('admin/detailkeluarga/arsip/{id}', 'ArsipdetkkController@index');
    Route::post('arsipkeluarga', 'ArsipkkController@store')->name('arsipkeluarga.store');
    Route::get('admin/rumah/arsip/delete/{id}', 'ArsipkkController@destroy');
    Route::get('admin/rumah/arsip/{id}', 'ArsipkkController@index');
    Route::get('admin/laporan', 'ReportController@index');
});

Route::post('attempt', 'LoginController@attempt')->name('login.attempt');
Route::get('destroy', 'LoginController@destroy')->name('login.destroy');
Route::get('/', 'BeritaController@getberita');
Route::get('berita/{id}', 'BeritaController@readberita');
Route::get('berita', 'BeritaController@allberita');
Route::get('agenda', 'AgendaController@readagenda');
Route::get('prestasi', 'PrestasiController@readprestasi');
Route::get('galeri', 'GaleriController@readgaleri');
Route::get('berita/{id}/{judul}', 'BeritaController@readberita');
Route::get('warga', 'WargaController@index');
Route::get('warga/{pendidikan}', 'WargaController@index');