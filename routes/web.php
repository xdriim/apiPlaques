<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PlaquesController;

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


Route::get('/import/plaques', [ExcelController::class, 'placaImport']);

// Route::get('/', [PlaquesController::class, 'index']);
// Route::get('/search', [PlaquesController::class, 'search'])->name('search');
Route::get('api/plaquess/{emissions}', [PlaquesController::class, 'search']);
