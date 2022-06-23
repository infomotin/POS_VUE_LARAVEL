<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
Route::get('/home', function () {
    echo "this is Home page";
});

Route::get('/about', function () {
    return view('about');
})->middleware('checkAge');
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/history', function () {
    return view('history');
});
//Seo Friendly URL ->name('contact')
Route::get('/contact', [ContactController::class,'index'])->name('contact');
// for old laravel version
// Route::get('/contact', 'ContactController@index')->name('contact');
