<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    page,
    product,
    maeGOcontroller
};


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

Route::get('/', [page::class, 'homePage']);

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/nct', function () {
    return view('nct');
});

Route::get('/showproductNCT/{id}', [maeGOcontroller::class,'ShowproductNCT']);

Route::get('/showproductAespa/{id}', [maeGOcontroller::class,'ShowproductAESPA']);
