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
    return view('auth.login');
});
//autentication
Auth::routes();

// Hak Akses Admin
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    // pengguna
    Route::get('/create_pengguna', 'PenggunaController@index')->name('pengguna.index');
    Route::post('/insert_pengguna', 'PenggunaController@store')->name('pengguna.create');
    Route::delete('/delete_pengguna/{id}', 'PenggunaController@delete')->name('pengguna.delete');

    // admin
    Route::get('/create_admin', 'AdminController@index')->name('admin.index');
    Route::post('/insert_admin', 'AdminController@store')->name('admin.create');
    Route::delete('/delete_admin/{id}', 'AdminController@delete')->name('admin.delete');

    //dokter
    Route::get('/create_dokter', 'DokterController@index')->name('dokter.index');
    Route::post('/insert_dokter', 'DokterController@store')->name('dokter.create');
    Route::delete('/delete_dokter/{id}', 'DokterController@destroy')->name('dokter.destroy');
    Route::get('/edit_dokter/{id}', 'DokterController@edit')->name('dokter.edit');
    Route::put('/update_dokter/{id}', 'DokterController@update')->name('dokter.update');

    //pasien
    Route::get('/create_pasien', 'PasienController@index')->name('pasien.index');
    Route::get('/pasien_inap', 'PasienController@InapPasien')->name('pasien.index.inap');
    Route::get('/pasien_jalan', 'PasienController@JalanPasien')->name('pasien.index.jalan');
    Route::post('/insert_pasien', 'PasienController@store')->name('pasien.create');
    Route::delete('/delete_pasien/{id}', 'PasienController@destroy')->name('pasien.destroy');
    Route::get('/edit_pasien/{id}', 'PasienController@edit')->name('pasien.edit');
    Route::put('/update_pasien/{id}', 'PasienController@update')->name('pasien.update');
    Route::get('/detail_pasien/{id}', 'PasienController@detail')->name('pasien.detail');

    // Poliklinik
    Route::get('/create_poli', 'PoliklinikController@index')->name('poli.index');
    Route::post('/insert_poli', 'PoliklinikController@store')->name('poli.store');
    Route::delete('/delete_poli/{id}', 'PoliklinikController@destroy')->name('poli.delete');
});

// Hak Akses Pengguna
Route::group(['middleware' => ['auth', 'checkRole:admin,pengguna']], function () {
    // pengguna
    Route::get('/create_pengguna', 'PenggunaController@index')->name('pengguna.index');
    Route::post('/insert_pengguna', 'PenggunaController@store')->name('pengguna.create');
    Route::delete('/delete_pengguna/{id}', 'PenggunaController@delete')->name('pengguna.delete');

    //dokter
    Route::get('/create_dokter', 'DokterController@index')->name('dokter.index');
    Route::post('/insert_dokter', 'DokterController@store')->name('dokter.create');
    Route::delete('/delete_dokter/{id}', 'DokterController@destroy')->name('dokter.destroy');
    Route::get('/edit_dokter/{id}', 'DokterController@edit')->name('dokter.edit');
    Route::put('/update_dokter/{id}', 'DokterController@update')->name('dokter.update');

    //pasien
    Route::get('/create_pasien', 'PasienController@index')->name('pasien.index');
    Route::get('/pasien_inap', 'PasienController@InapPasien')->name('pasien.index.inap');
    Route::get('/pasien_jalan', 'PasienController@JalanPasien')->name('pasien.index.jalan');
    Route::post('/insert_pasien', 'PasienController@store')->name('pasien.create');
    Route::delete('/delete_pasien/{id}', 'PasienController@destroy')->name('pasien.destroy');
    Route::get('/edit_pasien/{id}', 'PasienController@edit')->name('pasien.edit');
    Route::put('/update_pasien/{id}', 'PasienController@update')->name('pasien.update');
    Route::get('/detail_pasien/{id}', 'PasienController@detail')->name('pasien.detail');

});
