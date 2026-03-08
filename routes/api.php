<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PoolController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\BannerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pools', [PoolController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'store']);

Route::get('/banners', [BannerController::class, 'index']);
Route::apiResource('banners', BannerController::class)->except(['index']);
