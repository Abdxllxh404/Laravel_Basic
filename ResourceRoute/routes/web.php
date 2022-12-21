<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

// Route::controller(ItemController::class)->group(function () {
//     Route::get('items', 'index')->name('items.index');
//     Route::post('items', 'store')->name('items.store');
//     Route::get('items/create', 'create')->name('items.create');
//     Route::get('items/{item}', 'show')->name('items.show');
//     Route::put('items/{item}', 'update')->name('items.update');
//     Route::delete('items/{item}', 'destroy')->name('items.destroy');
//     Route::get('items/{item}/edit', 'edit')->name('items.edit');
// });

Route::resource('items', ItemController::class);
