<?php

use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('product')->group(function(){
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/create',[ProductController::class, 'create']);
        Route::get('/edit/{id}',[ProductController::class, 'edit']);
        Route::get('/datatable',[ProductController::class, 'datatable']);
        Route::get('show/{id}',[ProductController::class, 'show']);
        Route::post('store',[ProductController::class, 'store']);
        Route::post('update',[ProductController::class, 'update']);
        Route::any('eliminar',[ProductController::class, 'eliminar']);
    });


});





