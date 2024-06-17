<?php


use Illuminate\Support\Facades\Route;

use App\Http\Livewire\WishlistComponent;

Route::get('/wishlist', WishlistComponent::class)->name('favorite.icon');

use App\Http\Controllers\IconController;

Route::post('/icons', [IconController::class, 'store']);
