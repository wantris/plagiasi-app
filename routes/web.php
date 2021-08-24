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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'comparationController@index')->name('comparation.index');
Route::get('/comparation', 'comparationController@comparation')->name('comparation.comparation');
Route::get('/testing', 'comparationController@testing')->name('comparation.testing');
Route::post('/testing', 'comparationController@uploadFile')->name('comparation.uploadFile');
