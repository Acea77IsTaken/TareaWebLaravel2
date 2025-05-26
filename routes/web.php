<?php

use Illuminate\Support\Facades\Route;
require_once app_path('Http/Controllers/ItemController.php');

use App\Http\Controllers\ItemController;



Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{id}', [ItemController::class, 'show'])->name('items.show');
