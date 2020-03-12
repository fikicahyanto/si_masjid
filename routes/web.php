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





// User (Frontend)
Route::get('/', 'FHomeController@index');

Route::get('/about', 'FAboutController@index');

Route::get('/blog', 'FBlogController@index');
Route::post('/blog/komentar/save', 'FBlogController@store');
Route::get('/blog/detail/{id}', 'FBlogController@show');

Route::get('/gallery', 'FGalleryController@index');





// Admin(Backend)
// Route::get('/administrator', function () {
// 	return view('pages.admin.dashboard');
// });

Route::get('/administrator', 'DashboardController@index');


Route::get('/administrator/gallery', 'GalleryController@index');
Route::get('/administrator/gallery/tambah', 'GalleryController@create');
Route::post('/administrator/gallery/tambah', 'GalleryController@store');
Route::get('/administrator/gallery/hapus/{id}', 'GalleryController@destroy');

Route::get('/administrator/kategori/hapus/{id}', 'KategoriController@destroy');
Route::get('/administrator/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/administrator/kategori/update/{id}', 'KategoriController@update');
Route::get('/administrator/kategori/', 'KategoriController@index');
Route::get('/administrator/kategori/tambah', 'KategoriController@create');
Route::post('/administrator/kategori/tambah', 'KategoriController@store');



Route::get('/signin', function () {
	return view('pages.login');
});



Route::get('/administrator/post/hapus/{id}', 'PostController@destroy');
Route::get('/administrator/post/edit/{id}', 'PostController@edit');
Route::post('/administrator/post/update/{id}', 'PostController@update');
Route::get('/administrator/post', 'PostController@index');
Route::get('/administrator/post/tambah','PostController@create');


Route::post('/administrator/post/save','PostController@store');

Route::get('/administrator/komentar', 'KomentarController@index');
Route::get('/komentar/block/{id}', 'KomentarController@destroy');


Route::get('/administrator/pengaturan', 'PengaturanController@index');
Route::get('/administrator/pengaturan/edit', 'PengaturanController@edit');
Route::post('/administrator/pengaturan/update', 'PengaturanController@update');

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');


