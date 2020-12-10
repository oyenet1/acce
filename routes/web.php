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
    return view('index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::view('/contact', 'contact')->name('contact');
Route::get('/admission', [App\Http\Controllers\AdmissionController::class, 'index'])->name('admission');
Route::post('/admission', [App\Http\Controllers\AdmissionController::class, 'store'])->name('admission.store');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::view('/slider', 'slider')->name('slider');
Route::view('/message', 'director')->name('message.director');
Route::view('/mission', 'mission')->name('mission');
Route::view('/beleive', 'beleive')->name('beleive');
Route::view('/values', 'values')->name('values');
Route::view('/goals', 'goals')->name('goals');
Route::view('/search', 'search')->name('search');
Route::view('/recruit', 'recruit')->name('recruit');
Route::view('/career', 'search')->name('career');
Route::view('/apply', 'apply')->name('apply');
Route::view('/culture', 'culture')->name('culture');
Route::view('/join', 'join')->name('join');
Route::view('/coming', 'coming')->name('coming');
Route::view('/photo', 'photo')->name('photo');
Route::view('/payment', 'payment')->name('payment');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
