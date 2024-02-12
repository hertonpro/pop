<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::get('/about', function () {
    return view('about'); // Create a separate view for about page
});
Route::get('/article{id}', 'ArticleController@show')->name('article.show');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/article', 'ArticleController@index');
    Route::post('/article', 'ArticleController@store')->name('articles.store');
    Route::get('/article{id}', 'ArticleController@edit')->name('article.edit');
    Route::post('/article{id}', 'ArticleController@update')->name('article.update');
    Route::DELETE('/article{id}', 'ArticleController@destroy')->name('article.delete');

    Route::get('/user', 'UserController@index');
    Route::post('/user', 'UserController@store')->name('user.store');
    Route::get('/user{id}', 'UserController@show')->name('user.show');
    Route::post('/user{id}', 'UserController@update')->name('user.update');
    Route::DELETE('/user{id}', 'UserController@destroy')->name('user.delete');
    // Route::get('users', 'UserController@index');
    // Route::get('users/create', 'UserController@create');
    // ...autres routes de l'administration...
});


// Authentication routing 
// Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
//     Route::get("/register", 'RegisterController@create')->name('register');
//     Route::post("/register", 'RegisterController@store')->name('register.store');
// });


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
