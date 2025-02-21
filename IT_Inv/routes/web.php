<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Pages
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/inventory', function () {
        return view('inventory');
    })->name('inventory');
    
    Route::get('/tickets', function () {
        return view('tickets');
    })->name('tickets');

    //Inventory related routes
    Route::post('/addInventory', [InventoryController::class, 'addInventory']);
});

