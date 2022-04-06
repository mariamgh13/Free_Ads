<?php

use Illuminate\Support\Facades\Route;
use App\Models\Annonce;
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
//     $obj = new IndexController();
//     return $obj->showIndex();
// });
// Route::get('/', function () {
//     return view('index');
// });
Route::get("/", "App\Http\Controllers\IndexController@showIndex");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//on va vers route auth, et une fois dedans on envoit vers route verif si ok on va dans dashbord sinon activation.
require __DIR__.'/auth.php';


Route::get('users', 'App\Http\Controllers\UsersController@index')->name('users');

Route::get('users/create', 'App\Http\Controllers\UsersController@create');
Route::post('users/create', 'App\Http\Controllers\UsersController@store');

Route::get('users/edit/{id}', 'App\Http\Controllers\UsersController@edit');
Route::post('users/edit/{id}', 'App\Http\Controllers\UsersController@update');

Route::delete('users/delete/{id}', 'App\Http\Controllers\UsersController@destroy');



Route::get('annonces', 'App\Http\Controllers\AnnoncesController@index')->name('annonces');

Route::get('/annonces', function () {
    $annonces = Annonce::get()->all();
    return view('annonce/annonce', compact('annonces'));
})->middleware(['auth', 'verified'])->name('annonces');
//on va vers route auth, et une fois dedans on envoit vers route verif si ok on va dans dashbord sinon activation.
require __DIR__.'/auth.php';

Route::get('annonces/create', 'App\Http\Controllers\AnnoncesController@create');
Route::post('annonces/create', 'App\Http\Controllers\AnnoncesController@store');

Route::get('annonces/edit/{id}', 'App\Http\Controllers\AnnoncesController@edit');
Route::post('annonces/edit/{id}', 'App\Http\Controllers\AnnoncesController@update');

Route::delete('annonces/delete/{id}', 'App\Http\Controllers\AnnoncesController@destroy');

Route::get('annonces/search', 'App\Http\Controllers\AnnoncesController@search')->name('search');
