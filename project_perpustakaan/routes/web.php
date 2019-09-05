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
    $categories = DB::table('categories')->select('*')->get();
    return view('pages.home', compact('categories'));
});

Route::get('/buku-pemograman', function () {
    $categories = DB::table('categories')->select('*')->get();
    return view('pages.buku_pemograman', compact('categories'));
});

Route::get('/comic', function () {
    $categories = DB::table('categories')->select('*')->get();
    return view('pages.comic', compact('categories'));
});

Route::get('/majalah', function () {
    $categories = DB::table('categories')->select('*')->get();
    return view('pages.majalah', compact('categories'));
});

Route::get('/profiluser', 'HomeController@profiluser');

// view
Route::get('/admin-page', 'BooksController@index');

// tambah data admin-page
Route::get('/tambah', 'BooksController@create');
Route::post('/admin-page', 'BooksController@store');

// delete 
Route::get('/admin-page/{id}', 'BooksController@destroy');

// edit
Route::get('update/{id}', 'BooksController@edit');
Route::put('/admin-page/{id}', 'BooksController@update');


// user view
Route::get('/user-page', 'UserController@index');
// hapus
Route::get('/user-page/{id}', 'UserController@destroy');

// update
Route::get('/user-page/{id}', 'UserController@update');
// membalikan ke view
Route::put('/user-page/{id}', 'UserController@edit');
// menjalankan fungsi



// auth
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
