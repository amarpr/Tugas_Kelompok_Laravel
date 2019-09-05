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


// Route::get('/admin', function () {
//     return view('admin.a_master');
// });
Route::get('/profiluser', 'HomeController@profiluser');
// view
Route::get('/tes', 'BooksController@index');
// tambah data
Route::get('/tambah', 'BooksController@create');
Route::post('/tes', 'BooksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminpage', 'AdminController@index')->name('adminpage');

// categori Crud
Route::get('/categories', 'categoriesController@index');
Route::get('/categoriescreate', 'categoriesController@create');
Route::post('/categories', 'categoriesController@store');
Route::delete('/categories/{category}', 'categoriesController@destroy');
Route::get('/categories/{category}/edit', 'categoriesController@edit');
Route::patch('/categories/{category}', 'categoriesController@update');
