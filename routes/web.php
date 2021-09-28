<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('index');
//});


Route::get('/', 'HomeController@index')->name('homepage');

Route::match(['get', 'post'], '/catalog', 'SelectFilterController@selectFilter')->name('catalog');

Route::get('/catalog/productsingle/{id}', 'ProductSingle@single')->name('productsingle');

Route::get('/price', 'PriceController@price')->name('price');

Route::get('/contacts', 'ContactsController@contacts')->name('contacts');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/shops', 'ShopsController@shops')->name('shops');

Route::match(['get', 'post'], '/search', 'SearchController@search')->name('search');

Route::get('/register', 'UserController@create')->name('register.create');
Route::post('/register', 'UserController@store')->name('register.store');

Route::get('/login', 'UserController@loginForm')->name('login.create');
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/materials', 'MaterialController');
    Route::resource('/stones', 'StoneController');
});



