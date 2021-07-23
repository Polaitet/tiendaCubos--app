<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MainController;

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

// Public urls
Route::get('/', [App\Http\Controllers\MainController::class, 'showMainPage'])
    ->name('mainPage');


// Private urls
Route::get('/modify-slider', [App\Http\Controllers\SliderController::class, 'showMainPage'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showModifySlider');

Route::post('/modify-slider/add', [App\Http\Controllers\SliderController::class, 'addImgToSlider'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('addImgToSliderPost');



// Login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
