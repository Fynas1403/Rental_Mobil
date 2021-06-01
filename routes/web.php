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

// Route::get('/about', function () {
//     return view('about');
// });

/////////////////////////////////////////HOME//////////////////////////////

Route::get('/', 'PageController@home');



/////////////////////////////////////////ABOUT/////////////////////////////

Route::get('/about', 'PageController@about');



/////////////////////////////////////LOGIN////////////////////////////////////

Route::get('/logout','login@logout');

Auth::routes();

Route::get('/home', 'HomeController@index');



//////////////////////////////////////MOBIL//////////////////////////////////
Route::get('/mobil',"Mobil@index");

Route::get('/mobil/edit/{id}',"Mobil@edit");

Route::post('/mobil/update',"Mobil@update")-> name('mobil.update');

Route::get('/mobil_create',"Mobil@create");

Route::post('/mobil/create',"Mobil@create");

Route::post('/mobil/store',"Mobil@store") ->name('mobil.store');

Route::get('/mobil/hapus/{id}',"Mobil@hapus");

Route::get('/mobil/detail/{id}', 'Mobil@detail');

Route::get('/mobil/cetak_pdf', 'Mobil@cetak_pdf');




//////////////////////////////////////Rental//////////////////////////////////
Route::get('/rental',"Mobil@rental");



//////////////////////////////////////Peminjaman//////////////////////////////////
Route::get('/peminjaman',"Peminjaman@index");

Route::get('/pengembalian',"Peminjaman@pengembalian");

Route::get('/peminjaman/edit/{id}',"Peminjaman@edit");

Route::post('/peminjaman/update',"Peminjaman@update")-> name('peminjaman.update');

Route::get('/peminjaman_create',"Peminjaman@create");

Route::post('/peminjaman/create',"Peminjaman@create");

Route::post('/peminjaman/store',"Peminjaman@store") ->name('peminjaman.store');

Route::get('/peminjaman/hapus/{id}',"Peminjaman@hapus");

Route::get('/peminjaman/detail/{id}', 'Peminjaman@detail');

Route::get('/peminjaman/cetak_pdf', 'Peminjaman@cetak_pdf');



//////////////////////////////////////USERS//////////////////////////////////
Route::get('/users',"Users@index");