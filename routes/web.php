<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\CategoriesController;
use  App\Http\Controllers\GoodsController;
use  App\Http\Controllers\OrdesController;
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


Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/new', [CategoriesController::class, 'createCard']);
Route::post('/categories/new', [CategoriesController::class, 'createWrite']);


Route::get('/goods', [GoodsController::class, 'index']);
Route::get('/goods/new', [GoodsController::class, 'createCard']);
Route::post('/goods/new', [GoodsController::class, 'createWrite']);
Route::get('/goods/{id}/show', [GoodsController::class, 'showCard']);
Route::get('/goods/{id}/edit', [GoodsController::class, 'editCard']);
Route::post('/goods/{id}/edit', [GoodsController::class, 'editWrite']);
Route::get('/goods/{id}/delete', [GoodsController::class, 'deleteGoods']);



Route::get('/orders', [OrdesController::class, 'index']);
Route::get('/order/new', [OrdesController::class, 'createCard']);
Route::post('/order/new', [OrdesController::class, 'createWrite']);
Route::get('/order/{id}/show', [OrdesController::class, 'showCard']);
Route::get('/order/{id}/edit', [OrdesController::class, 'editCard']);
Route::get('/order/{id}/success', [OrdesController::class, 'successOrder']);

