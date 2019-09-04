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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/buku-pemograman', function () {
    return view('pages.buku_pemograman');
});

Route::get('/comic', function () {
    return view('pages.comic');
});

Route::get('/majalah', function () {
    return view('pages.majalah');
});
// view
Route::get('/tes', 'BooksController@index');

// tambah data
Route::get('/tambah', 'BooksController@create');
Route::post('/tes', 'BooksController@store');

// delete 
Route::get('/tes/{id}','BooksController@destroy');

// edit
Route::get('update/{id}','BooksController@edit');
Route::put('/tes/{id}', 'BooksController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

