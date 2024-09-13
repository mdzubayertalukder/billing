<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\AppController::class, 'index']);
Route::get('/addclient', [App\Http\Controllers\AppController::class, 'addclient'])->name('addclient');
//Route::get('/add', [App\Http\Controllers\PartyController::class, 'client.add'])->name('add');
Route::get('/manageParties', [App\Http\Controllers\AppController::class, 'manageParties'])->name('manageParties');;
Route::get('/gstbill', [App\Http\Controllers\AppController::class, 'gstbill'])->name('gstbill');;
Route::get('/managebills', [App\Http\Controllers\AppController::class, 'managebills'])->name('managebills');;
Route::get('/print', [App\Http\Controllers\AppController::class, 'print'])->name('print');;


