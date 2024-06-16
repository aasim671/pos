<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'guest'], function () {

    Route::get('/', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login']);
    // Route::get('/register', [AuthController::class, 'register']);
    Route::post('/store', [AuthController::class, 'store']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/layout', function () {
        return view('layout');
    });
    //category routes
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/category/store', [CategoryController::class, 'store']);
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete']);

    //brands routes

    Route::get('/brands', [BrandController::class, 'index']);
    Route::post('/brands/store', [BrandController::class, 'store']);
    Route::post('/brands/update/{id}', [BrandController::class, 'update']);
    Route::get('/brands/edit/{id}', [BrandController::class, 'edit']);
    Route::delete('/brands/delete/{id}', [BrandController::class, 'delete']);
});
