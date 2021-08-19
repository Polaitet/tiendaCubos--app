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

Route::get('/modify-slider/position/add/{id}', [App\Http\Controllers\SliderController::class, 'modifyPositionAdd'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifyPositionAdd');

Route::get('/modify-slider/position/sub/{id}', [App\Http\Controllers\SliderController::class, 'modifyPositionSub'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifyPositionSub');

Route::post('/modify-slider/add', [App\Http\Controllers\SliderController::class, 'addImgToSlider'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('addImgToSliderPost');

Route::get('/modify-menu', [App\Http\Controllers\SliderController::class, 'showModifyMenu'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showModifyMenu');

// Login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
