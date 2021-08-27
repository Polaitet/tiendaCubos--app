<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductsController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Slider Management
Route::get('/modify-slider', [App\Http\Controllers\SliderController::class, 'showMainPage'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showModifySlider');

Route::get('/modify-slider/position/add/{id}', [App\Http\Controllers\SliderController::class, 'modifyPositionAdd'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifySliderPositionAdd');

Route::get('/modify-slider/position/sub/{id}', [App\Http\Controllers\SliderController::class, 'modifyPositionSub'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifySliderPositionSub');

Route::post('/modify-slider/add', [App\Http\Controllers\SliderController::class, 'addImgToSlider'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('addImgToSliderPost');

Route::get('/modify-slider', [App\Http\Controllers\SliderController::class, 'showMainPage'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showModifySlider');

Route::get('/modify-slider/remove/{id}', [App\Http\Controllers\SliderController::class, 'removeSlider'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('removeSlider');


// Menu management
Route::get('/modify-menu', [App\Http\Controllers\MenuController::class, 'showModifyMenu'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showModifyMenu');


Route::post('/modify-menu/add', [App\Http\Controllers\MenuController::class, 'addMenuItem'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('addMenuItemToHomepage');

Route::get('/modify-menu/position/sub/{id}', [App\Http\Controllers\MenuController::class, 'modifyMenuPositionSub'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifyMenuPositionSub');

Route::get('/modify-menu/position/add/{id}', [App\Http\Controllers\MenuController::class, 'modifyMenuPositionAdd'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('modifyMenuPositionAdd');

Route::get('/modify-menu/remove/{id}', [App\Http\Controllers\MenuController::class, 'removeMenuItem'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('removeMenuItem');


// Products Management
Route::get('product-management', [App\Http\Controllers\ProductsController::class, 'showMainPage'])
    ->middleware('auth')
    ->middleware('admin')
    ->name('showProductManagement');


// Auth && Login Management
Auth::routes();


