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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts','PostsController');

});
// Route::get('/homepage', function () {
//     return view('guest.home');
// })->name('homepage');

Route::get('/{any}', function () {
    return view('guest.home');
});

