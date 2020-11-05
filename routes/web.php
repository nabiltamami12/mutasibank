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

Route::POST('/bca/scrap', 'BCAController@cek');
Route::POST('/btn/scrap', 'BTNController@cek');
Route::POST('/bri/scrap', 'BRIController@cek');
// Route::group( ['middleware' => 'auth' ], function()
// {

Route::get('/dashboard', 'IndexController@index');
Route::get('/loginbri', 'BRIController@index');
Route::get('/loginbca', 'BCAController@index');
Route::get('/loginbtn', 'BTNController@index');
Route::get('/cekmutasiku', 'CekMutasiController@index');
Route::get('/cekmutasiku/filter', 'CekMutasiController@filter_data');
Route::get('/mutasi/unduh_pdf', 'CekMutasiController@unduh_pdf');
Route::get('/mutasi/unduh_pdf/database', 'CekMutasiController@unduh_pdf_database');
Route::get('/mutasi/unduh_excel', 'CekMutasiController@unduh_excel');
Route::get('/mutasi/unduh_excel/database', 'CekMutasiController@unduh_excel_database');
Route::get('/nasabah', 'PenggunaController@index');
Route::get('/riwayat', 'RiwayatController@index');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// 
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('atm-bca', function () {
    return view('nasabah.atm_bca');
});
