<?php

use App\Http\Controllers\newsController;
use App\Http\Controllers\SocialController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('news', 'App\Http\Controllers\newsController')->middleware(['auth','verified']);

Route::get('/redirect/{service}', [SocialController::class, 'redirect']);

Route::get('/callback/{service}', [SocialController::class, 'callback']);


Route::get('/sendEmail',[newsController::class, 'sendEmail']);

Route::get('/offer/getD',[\App\Http\Controllers\OfferController::class,'getoffers']);
Route::get('/offer/create',[\App\Http\Controllers\OfferController::class,'create']);
Route::post('/offer/store',[\App\Http\Controllers\OfferController::class,'store'])->name('offer.store');
