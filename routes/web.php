<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\FullCalenderController;

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
    return view('barber.index');
});


Route::get('/service', function () {
    return view('barber.service');
});

Route::get('/about', function () {
    return view('barber.about');
});
Route::get('/price', function () {
    return view('barber.price');
});

Route::get('/team', function () {
    return view('barber.team');
});
Route::get('/portfolio', function () {
    return view('barber.portfolio');
});
Route::get('/contact', function () {
    return view('barber.contact');
})->name('contact');;
Route::post('/contact', [SendMessageController::class, 'index'])->name('send.sms');

Route::fallback(FallbackController::class);


Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);
