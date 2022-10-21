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

route::get('/beranda','FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about','AboutController@index')->name('about.index');
Route::get('/about/create','AboutController@create')->name('about.create');
Route::post('/about/store','AboutController@store')->name('about.store');
Route::get('/about/{id}/edit','AboutController@edit')->name('about.edit');
Route::post('/about/{id}/update','AboutController@update')->name('about.update');
Route::get('/about/{id}/destroy','AboutController@destroy')->name('about.destroy');

//Route::resource('portofolio','PortofolioController');

Route::get('/portofolio','PortofolioController@index')->name('portofolio.index');
Route::get('/portofolio/create','PortofolioController@create')->name('portofolio.create');
Route::post('/portofolio/store','PortofolioController@store')->name('portofolio.store');
Route::get('/portofolio/{id}/edit','PortofolioController@edit')->name('portofolio.edit');
Route::post('/portofolio/{id}/update','PortofolioController@update')->name('portofolio.update');
Route::get('/portofolio/{id}/destroy','PortofolioController@destroy')->name('portofolio.destroy');