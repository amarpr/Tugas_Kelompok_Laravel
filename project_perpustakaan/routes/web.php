<?php

/*
|--------------------------------------------------------------------------
| Web Rouadmin-page
|--------------------------------------------------------------------------
|
| Here is where you can register web rouadmin-page for your application. These
| rouadmin-page are loaded by the Rouadmin-pageerviceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/buku-pemograman', 'BooksController@programmingCat');


// pages comic view
Route::get('/comic', 'BooksController@comicCat');


Route::get('/majalah', function () {
    return view('pages.majalah');
});

// view admin-page
Route::get('/admin-page', 'BooksController@index');

// tambah data admin-page
Route::get('/tambah', 'BooksController@create');
Route::post('/admin-page', 'BooksController@store');

// delete  admin-page
Route::get('/admin-page/{id}','BooksController@destroy');

// edit admin-page
Route::get('update/{id}','BooksController@edit');
Route::put('/admin-page/{id}', 'BooksController@update');


// user view
Route::get('/user-page', 'UserController@index');
// hapus
Route::get('/user-page/{id}','UserController@destroy');

// update
Route::get('/user-page/{id}','UserController@update');
// membalikan ke view
Route::put('/user-page/{id}', 'UserController@edit');
// menjalankan fungsi



// auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

