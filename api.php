<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Wishlist;
use App\Http\Middleware\IconMiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/wishlist', Wishlist::class)
    ->name('favorite.icon')
    ->middleware('icon');